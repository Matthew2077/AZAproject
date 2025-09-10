<?php
require_once __DIR__ . '/vendor/autoload.php';

//autenticazione e DB
$dbh = new PDO("mysql:host=10.200.19.105;dbname=authentication", "konke_pip", "]kvIWgcA(i(lG[Na1");
$config = new \PHPAuth\Config($dbh);
$auth   = new \PHPAuth\Auth($dbh, $config);



//api openai
$open_ai_key = getenv('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');

/*
    ruoli disponibili:
        1 = admin;
        2 = editor;
        3 = user;


        account admin
ID: 40
nickname: Matthew0906
email: UserTest8@gmail.com
password: FG45EGETGTRH
roles: 1,2,3



----------------

librerie usate:
- auth: https://github.com/PHPAuth/PHPAuth;
- mail: https://github.com/PHPMailer/PHPMailer;
- openai: https://github.com/openai-php/client;
- pdf: https://github.com/Setasign/FPDI;


    */

//info necessarie per reset password
$emailSender = 'pasquetti47@gmail.com';
$senderName = 'Zelda Group';
$smtpPassword = 'hvcxqjpfijhcmekv'; 
?>