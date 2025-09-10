<?php
//controllo se sessione è attiva
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require_once 'config.php';
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

// DATI DALLA PAGINA DI LOGIN/REGISTRAZIONE
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']) ? 1 : 0;
    //PER CREAZIONE UTENTE
    $nickname = $_POST['nickname'] ?? '';
    $ruoliricevuti = $_POST['roles'] ?? []; 
    $pwdconfirm  = $_POST['passwordconfirm'] ?? '';
    $pfp = $_FILES["pfp"] ?? ''; //foto profilo

/*
    echo "<PRE>";
    print_r($pwdconfirm);
    echo "</PRE>";
    exit();
*/



    //ACTION per Switch case E altro
    $action = $_POST["action"] ?? ''; //createuser = creazione user nuovo | login = login utente | logout = logout | lostpassword = password dimenticata | resetpassword = reset password | lostpassword = richiesta reset password | code = codice di verifica per reset password
   
    /*
    ruoli disponibili:
        1 = admin;
        2 = editor;
        3 = user;
    */
    //switch case per gestire ogni richiesta
    switch($action) {
        case "createuser": //da page-create-user.php
                try {

                    //validazione email e password--------
                    $errors = [];
                    
                    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['validita_email'] = "Email non valida"; 
                    if ($password !== $pwdconfirm) $errors['password_non_coincidono'] = "Le password non coincidono";
                    if (empty($password) || strlen($password) < 8) $errors['password'] = "Password deve contenere almeno 8 caratteri";


                    $stmt = $dbh->prepare("SELECT id FROM phpauth_users WHERE email = ?");
                    $stmt->execute([$email]);
                    if ($stmt->fetch()) {
                        $errors['email'] = "Email già registrata.";
                        $errorEmail = $errors['email'];
                        header("Location: page-create-user.php?error=" . urlencode($errorEmail));
                        exit();

                    } else {
                        //echo "Email disponibile.";
                        
                    }


                    $stmt = $dbh->prepare("SELECT id FROM phpauth_users WHERE nickname = ?");
                    $stmt->execute([$nickname]);
                    if ($stmt->fetch()) {
                        $errors['nickname'] = "nickname già usato.";
                        $errorNickname = $errors['nickname'];
                        header("Location: page-create-user.php?error=" . urlencode($errorNickname));
                        exit();

                    } else {
                        //echo "Nickname disponibile.";
                        
                    }


                    //immagine profilo -----------------
                    $mimeToExt = [ // Mappa MIME per prendere estenzione
                        'image/jpeg' => 'jepg',
                        'image/jpg' => 'jpg',
                        'image/png' => 'png',
                        'image/gif' => 'gif'
                    ];

                    // Legge Media type (MIME)
                    $finfo = new finfo(FILEINFO_MIME_TYPE);
                    $mime = $finfo->file($pfp['tmp_name']);
                    
                    if (isset($mimeToExt[$mime])) { //controllo che l'estenzione sia corretta
                        $extension = $mimeToExt[$mime];
                    } else {
                        $errors['pfp'] = "Tipo di file non supportato: $mime";
                    }

                    $pfpname = ('pfp_') . $nickname . '.' . $extension; //nome + estenzione pfp
                    $imgpath = 'assets/images/profile/' . $pfpname; //file path è qui

                    //salvataggio pfp
                    if (move_uploaded_file($pfp['tmp_name'], $imgpath)) {
                        echo "Foto caricata con successo!";
                    } else {
                        $errorPfp = "Foto profilo non valida";
                        header("Location: page-create-user.php?error=" . urlencode($errorPfp));
                        exit();
                    }


                    
                    //data e ora ultima modifica password
                    $lst_edit_password = date('Y-m-d H:i:s'); //data e ora corrente



                    $roles = json_encode($ruoliricevuti);
                    //parametri aggiuntivi per la registrazione utente
                    $params = [
                        'roles' => $roles,
                        'nickname' => $nickname,
                        'imgpath' => $imgpath,
                        'lst_edit_password' => $lst_edit_password,
                    ];

                    //restituisci errori al front-end
                    if (!empty($errors)) {
                        json_encode([
                            'error' => true,
                            'messages' => $errors
                        ]);
                        exit;
                    }


                    //registrazione nuovo utente
                    $result = $auth->register($email, $password, $pwdconfirm, $params, false);
                    //+ mail non deve essere già stata usata
                    //nickname non deve essere già stato usato


                    

                    //torna a create user
                    $success = "Utente creato con successo!";
                    header("Location: page-create-user.php?error=" . urlencode($success));
                    exit();

                }   catch (PDOException $e) {
                    // Gestione errore aggiornamento nickname
                    $_SESSION['error_registration'] = "Utente creato ma errore nell'aggiunta del nickname: " . $e->getMessage();
                    header("Location: page-create-user.php");
                    exit();
                }




            //NB: la colonna "dt" sta per data di creazione
            // NB2: l'id utente viene generato e assegnato in automatico dalla libreria nel momento della creazione.
        break;

        case "login": //da login.php
            try {
                $login = $auth->login($email, $password, $remember);

                if ($login['error']) {
                    $msg = $login['message'];
                    header('Location: login.php?error=' . urlencode($msg));
                    exit();
                    

/*
                    echo "<PRE>";
                    print_r($lst_edit_password);
                    echo "<br>";
                    print_r($datenow);
                    echo "</PRE>";
                    exit();
                    */

                          

                            
                } else {
                    //$auth->deleteExpiredAttempts();
                     //Ottieni hash
                    $hash = $login['hash'];
                    $userId = $auth->getSessionUID($hash); // ottieni uid

                    //login vero e proprio
                    $userData = $auth->getUser($userId); //da qui prendi i dati dell'utente dall id
                    $now = new DateTime();


                    // controllo ultima modifica password
                    $lst_edit_password = $userData['lst_edit_password'];
                    $now = new DateTime(); // data e ora corrente
                    $lastChange = new DateTime($lst_edit_password); // converte da stringa a DateTime
                    $diff = $lastChange->diff($now); // calcola differenza in giorni






                    //controllo se la password è scaduta
                    if ($diff->days <= 90) {
                        //Se la data di ultima modifica pwd è meno vecchia di 90 giorni, OK
                        $tempook = "password okay!";
                        
                        // Recupera quanto manca alla scadenza della password
                        $remainingDays = 90 - $diff->days; // giorni rimanenti prima della scadenza
                        $_SESSION['remainingDays'] = $remainingDays;
                        
                        //recupero dati da userData
                        $nickname = $userData['nickname'];
                        $imgpath = $userData['imgpath']; //recupero imgpath
                                                

                        //inserimento dati in sessione
                        $_SESSION["nickname"] = $nickname;
                        $_SESSION["email"] = $email;
                        $_SESSION["userId"] = $userId;
                        $_SESSION['hash'] = $hash;
                        $_SESSION['roles'] = $userData['roles'];
                        $_SESSION['imgpath'] = $imgpath;
                    

                        header("Location: index.php");
                        exit();



                    } else {
                        //Se la data di ultima modifica pwd è più vecchia di 90 giorni
                        $temposcaduto = "La password è scaduta, devi cambiarla!";
                        header('Location: login.php?error=' . urlencode($temposcaduto));
                        exit();
                    }
                }

               

            } catch (PDOException $e) {
                die("Errore DB: " . $e->getMessage());
            }

            break;
            case "lostpassword": //da password-forgot.php
                try {
                    //validazione email
                    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errors['validita_email'] = "Email non valida";
                        $errorrValEmail = $errors['validita_email'];
                        header("Location: password-forgot.php. urlencode($errorrValEmail)");
                        exit();
                    } else {
                        $auth ->deleteExpiredData();
                        //avvia richiesta di reset
                        
                        
                        // controllo ultima modifica password
                        $stmt = $dbh->prepare("SELECT lst_edit_password FROM phpauth_users WHERE email = :email");
                        $stmt->execute(['email' => $email]);
                        $row = $stmt->fetch();

                        $lastChange = new DateTime($row['last_password_change']);
                        $now = new DateTime(); // data e ora corrente
                        $diff = $lastChange->diff($now); // calcola differenza in giorni


/*
                        // Verifica se l'utente può cambiare la password
                        if ($diff->days < 45) {
                            // l'utente non può cambiare la password
                            $allowResetPass = false;
                            $passresetnotallowed = "Hai cambiato la password recentemente, riprova più tardi.";
                            //torna a pagina di reset password
                            header("Location: password-forgot.php?error=" . urlencode($passresetnotallowed));
                            exit();
                        } else {
                             // l'utente  può cambiare la password
                            $result = $auth->requestReset($email, false); //false = non invia email, ma restituisce un codice di reset

                        }
*/
                        $result = $auth->requestReset($email, false);


                
                        
                        
                        if ($result['error']) {
                            //errore, torna a pagina di reset password
                            $emailnotvalid = $result['message'];
                            header("Location: password-forgot.php?error=" . urlencode($emailnotvalid));
                            exit();
                        } else {
                            //se la richiesta ha successo:
                            /*
                            echo "<PRE>";
                            print_r($result);
                            echo "</PRE>";
                            exit();
*/
                            

                            $code = $result['token']; //prendi il codice di reset
                            $expire = $result['expire']; // tempo quando finisce la valitidà della richiesta di request
                            $_SESSION["code"] = $code;
                            $_SESSION["expire"] = $expire;
                            $_SESSION["email"] = $email;
                            
                            //Manda mail a utente che ha richiesto il reset password con CODE per verifica


                            $mailtxt = fopen("mail.html", "w+");
                            $htmlBody = '
                            <!DOCTYPE html>
                            <html lang="it">
                            <head>
                            <meta charset="UTF-8">
                            <title>Codice di verifica AZA</title>
                            <style>
                                body {
                                font-family: Arial, sans-serif;
                                background-color: #f4f7fc;
                                color: #333;
                                margin: 0;
                                padding: 20px;
                                }

                                h1 {
                                color: #2c3e50;
                                text-align: center;
                                }

                                section {
                                background-color: #ffffff;
                                max-width: 600px;
                                margin: 30px auto;
                                padding: 30px;
                                border-radius: 10px;
                                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                                border-left: 6px solid #3498db;
                                }

                                h2 {
                                color: #2980b9;
                                }

                                p {
                                font-size: 16px;
                                line-height: 1.6;
                                }

                                .code-box {
                                background-color: #eaf4ff;
                                color: #1a5276;
                                font-size: 24px;
                                font-weight: bold;
                                text-align: center;
                                padding: 15px;
                                border: 2px dashed #3498db;
                                border-radius: 8px;
                                margin: 20px 0;
                                }

                                .footer {
                                font-size: 14px;
                                color: #555;
                                }
                            </style>
                            </head>
                            <body>
                            <h1>Codice di verifica AZA</h1>

                            <section>
                                <h2>Gentile utente,</h2>
                                <p>Abbiamo ricevuto una richiesta di accesso al tuo Account tramite il tuo indirizzo email '.$email.'. Il codice di verifica AZA è il seguente:</p>

                                <div class="code-box">'.$code.'</div>

                                <p>Se non hai richiesto questo codice, è possibile che qualcun altro stia tentando di accedere al tuo account AZA. Non inoltrare e non comunicare questo codice a nessuno.</p> 

                                <br>
                                <p>Cordiali saluti,</p>
                                <p class="footer">Team Zelda</p>
                            </section>
                            </body>
                            </html>



                            ';
                        
                            $mail = new PHPMailer(true);

                        try {
                            //le info come  emailSender, senderName etc sono in config.php
                            $mail->isSMTP();
                            $mail->Host = 'smtp.gmail.com';
                            $mail->Port = 465;
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                            $mail->SMTPAuth = true;
                            $mail->Username = $emailSender;
                            $mail->Password = $smtpPassword;

                            $mail->setFrom($emailSender, $senderName);
                            $mail->addAddress($email);
                            $mail->Subject = 'Codice di verifica AZA';
                            $mail->msgHTML($htmlBody);
                            $mail->AltBody = "Il tuo codice di verifica è: $code";

                            $mail->send();
                            
                            // Reindirizza dopo successo
                            header("Location: password-code.php");
                            exit();
                        } catch (Exception $e) {
                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                        }

                            




                        }

                    }
                    
                    
                
                } catch (PDOException $e) {
                    die("Errore DB: " . $e->getMessage());
                }
            break;
            case "resetpassword":
                    //qui resetto la password
                    $email = $_SESSION["email"];

                     // recupero password vecchia per confronto
                    $stmt = $dbh->prepare("SELECT password FROM phpauth_users WHERE email = :email");
                    $stmt->execute(['email' => $email]);
                    $row = $stmt->fetch();
                    $oldPassword = $row['password'];

/*

                            echo "<PRE>";
                            print_r($oldPassword);
                            echo "</PRE>";
                            exit();
 */                 

                    //validazione password
                    if ($password == $pwdconfirm) { //verifico che le pwd inserite dall'utente siano uguali
                        if (password_verify($password, $oldPassword)) {
                                $msg = "La nuova password non può essere uguale alla vecchia.";
                                header("Location: password-reset.php?error=" . urlencode($msg));
                                exit();
                            } else { //se password inserita e vecchia password sono diverse:
                            $code = $_SESSION["code"];
                            $result = $auth->resetPass($code, $password, $pwdconfirm, false); //false = non invia email, ma resetta la password

                            if ($result['error']) {
                                //errore, torna a pagina di reset password
                                $msg = $result['message'];
                                header("Location: password-reset.php?error=" . urlencode($msg));
                                exit();
                            } else {
                                //se la richiesta ha successo:
                                $success = "Password cambiata con successo!";
                                header("Location: login.php");
                                exit();
                            }
                        }
                
        
                    
                    } else { //password inserite non coincidono
                            $errors['password_non_coincidono'] = "Le password non coincidono";
                            $errorrValEmail = $errors['validita_email'];
                            header("Location: password-reset.php?error=" . urlencode($errorrValEmail));
                            exit();
                    }

                    
                    
            break;
            case "logout": //da app-profile.php
                try {

                    $hash = $_SESSION['hash'];
                    $logout = $auth->logout($hash); //elimina sessione nel DB, utente non più autenticato

                    session_unset();
                    session_destroy();
                    header("Location: login.php");
                        exit();
            
                } catch (PDOException $e) {
                die("Errore DB: " . $e->getMessage());
                }
                
            break;
    }

}


//controllo accesso, includi a inizio pagina





function checkAccess($auth, $allowedRoles = []) {
    //controllo se l'utente è loggato
    if (!$auth->isLogged()) {
        header("Location: login.php");
        exit;
    }
    //controllo permesso utente loggato
    if (!empty($allowedRoles)) {
        $rolesString = $_SESSION['roles'];
        $userroles = json_decode($rolesString, true);

        if (!array_intersect($userroles, $allowedRoles)) {
            header("Location: page-error-403.php");
            exit;
        }


    }
}



// codice da mettere a inizio pagina: checkAccess($auth, ['1','2', '3']);
?>
