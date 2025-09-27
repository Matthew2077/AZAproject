import sys
import json
import os
import pandas as pd
import matplotlib
matplotlib.use('Agg')
import json
import logging
logger = logging.getLogger(__name__)
logging.basicConfig(filename='AZAgrafici.log', level=logging.INFO)


try:
    # ---------------
    # Leggi i parametri dal file passato come argomento
    # ---------------
    if len(sys.argv) > 1:
        input_file = sys.argv[1]
        
        # Leggi il contenuto del file JSON
        with open(input_file, 'r', encoding='utf-8') as f:
            params = json.load(f)
        
        # Processa i parametri ricevuti
        filename = params.get('filename', '')
        country = params.get('country', '')
        output = params.get('output', '')
        KPI = params.get('kpi', [])
        
        

        # Caricamento dati JSON
        data_path = os.path.join("uploads", filename) 
        if not os.path.exists(data_path):
            #logger.info(json.dumps({"success": False, "error": f"File non trovato  {params}"}))
            sys.exit(1)

        with open(data_path, 'r', encoding='utf-8') as f:
            dati = json.load(f) #DATI FILE QUI --------

        # ---------------
        # DATI GENERALI
        # ---------------
        body = dati['body'] 
        asin_list = []
        for i in body:
            asin_list.append(i)
    

             
        if output == "J":

            # ---------------
            # CONTEGGIO ASIN
            # ---------------
            asin_count = 0
            no_asin_count = 0
            
            for element in asin_list:
                asin = dati['body'][element]['summary']['ASIN']
                if asin is None:
                    no_asin_count = no_asin_count + 1
                else:
                    asin_count = asin_count + 1
            #logger.info(asin_count)
            #logger.info(no_asin_count)

            # ---------------
            # CONTEGGIO IS_AMZ
            # ---------------
            IS_AMZ_list = []
            is_AMZ_count = 0
            not_AMZ_count = 0
            for element in asin_list:
                try:
                    is_amz = dati['body'][element]['data'][country]['is_AMZ']
                    IS_AMZ_list.append(is_amz)
                    if is_amz is None:
                        not_AMZ_count = not_AMZ_count + 1
                    elif is_amz == 'N':
                        not_AMZ_count = not_AMZ_count + 1
                    else:
                        is_AMZ_count = is_AMZ_count + 1 
                except (ValueError, TypeError, KeyError):
                    continue    
           
            
            # ---------------
            # CONTEGGIO CATEGORIE
            # ---------------
            category_list = []
            
            for element in asin_list:
                try:
                    category = dati['body'][element]['data'][country]['ranking']['category']['name']
                    
                    if category is None:
                        pass
                    elif category not in category_list:
                        category_list.append(category)
                    else: 
                        pass
                except (ValueError, TypeError, KeyError):
                    continue
            #logger.info(category_list)


            category_list = {}

            for v in asin_list:
                try:
                    category = dati['body'][v]['data'][country]['ranking']['category']['name']
                    if category:
                        category_list[category] = category_list.get(category, 0) + 1
                except (KeyError, TypeError, AttributeError):
                        pass


            category_keys = list(category_list.keys())
            category_values = list(category_list.values())

            
            
            # ---------------
            # CONTEGGIO NODI
            # ---------------
            node_list = {}

            for v in asin_list:
                try:
                    node = dati['body'][v]['data'][country]['ranking']['node']['name']
                    if node:
                        node_list[node] = node_list.get(node, 0) + 1
                        
                except (KeyError, TypeError, AttributeError):
                    pass

            nodes_keys = list(node_list.keys())
            nodes_values = list(node_list.values())

            #logger.info(node_list)
         

            
            # ---------------
            # CONTEGGIO OFFERS 
            # ---------------
            offers_count = 0
            no_offers_count = 0
            
            for element in asin_list:
                offer = dati['body'][element]['data'][country]['offers']
                
                if len(offer) <=0  :
                   offers_count = offers_count + 1
                else: 
                    no_offers_count = no_offers_count + 1
                
            # logger.info(offers_count)
            # logger.info(no_offers_count)
            
            # ---------------
            # CONTEGGIO MARGINE 
            # ---------------
            fasce_margine = {
                "meno_0": 0,
                "1_a_10": 0,
                "11_a_20": 0,
                "21_a_30": 0,
                "piu_30": 0
            }

            margine_meno_0 = 0
            margine_1_a_10 = 0
            margine_11_a_20 = 0
            margine_21_a_30 = 0
            margine_piu_30 = 0
            
            tot_prod_margine = 0
            
            for v in asin_list:
                try:
                    buybox = dati['body'][v]['data'][country]['buybox']
                    if not isinstance(buybox, dict):
                        continue

                    margine_ass = buybox.get("margine_BB")
                    landed_ass = buybox.get("landed")
                    listing_ass = buybox.get("listing")

                   
                    margine = float(margine_ass)
                    landed = float(landed_ass)
                    listing = float(listing_ass)
                    
                    margine_perc = ((margine / landed)/margine) * 100
                    tot_prod_margine += 1
                    
                    if margine_perc <= 0:
                        margine_meno_0 += 1
                    elif 0 < margine_perc <= 10:
                       margine_1_a_10 += 1
                    elif 10 < margine_perc <= 20:
                        margine_11_a_20 += 1
                    elif 20 < margine_perc <= 30:
                        margine_21_a_30 += 1
                    elif margine_perc > 30:
                        margine_piu_30 += 1

                        
                    
                except (ValueError, TypeError, KeyError):
                    continue

                # if tot_prod_margine == 0:
                #     logger.info(json.dumps({
                #         "status": 0,
                #         "message": "Nessun margine valido trovato",
                #         "response": {}
                #     }))
            
            
            
            
                # ---------------
                # CONTEGGIO TEMPO DI CONSEGNA
                # ---------------
                # TEMPO_DI_CONSEGNA = {
                #         "prime": 0,
                #         "24h": 0,
                #         "48h": 0,
                #         "48h o più": 0
                #     }
                tmp_cons_prime = 0
                tmp_cons_24h = 0
                tmp_cons_48h = 0
                tmp_cons_more48h = 0
                for v in asin_list:
                    try:
                        offerte = dati['body'][v]['data'][country]['offers']
                        tempi = []
                        
                        for seller_id, offer_list in offerte.items():
                            if isinstance(offer_list, list):
                                for offer_data in offer_list:
                                    try:
                                        tempo_consegna = offer_data.get("shipping_time_min", None)
                                        if tempo_consegna is not None:
                                            tempi.append(int(tempo_consegna))
                                    except (ValueError, TypeError):
                                        pass

                        if tempi:
                            spedizione = min(tempi)
                            if spedizione == 0:
                                tmp_cons_prime += 1
                            elif spedizione == 24:
                                tmp_cons_24h += 1
                            elif spedizione <= 48:
                                tmp_cons_48h += 1
                            else:
                                tmp_cons_more48h += 1
        
                    except (KeyError, TypeError, AttributeError):
                        pass
                # ---------------
                # CONTEGGIO TEMPO DI CONSEGNA
                # ---------------

                info_IDQ = {
                        "totale_immagini": {"scarso": 0, "medio": 0, "ottimo": 0},
                        "lunghezza_titolo": {"scarso": 0, "medio": 0, "ottimo": 0},
                        "lunghezza_descrizione": {"scarso": 0, "medio": 0, "ottimo": 0},
                        "bullet_point": {"scarso": 0, "medio": 0, "ottimo": 0}
                    }

                for v in asin_list:
                    try:
                        contenuto = offerte = dati['body'][v]['data'][country]['IDQ']
                        

                        n_imm = int(contenuto.get("tot_images", 0))
                        if n_imm <= 4:
                            info_IDQ["totale_immagini"]["scarso"] += 1
                        elif 5 <= n_imm <= 6:
                            info_IDQ["totale_immagini"]["medio"] += 1
                        elif n_imm >= 7:
                            info_IDQ["totale_immagini"]["ottimo"] += 1

                        l_tit = int(contenuto.get("title_length", 0))
                        if l_tit < 100:
                            info_IDQ["lunghezza_titolo"]["scarso"] += 1
                        elif 100 <= l_tit <= 149:
                            info_IDQ["lunghezza_titolo"]["medio"] += 1
                        elif l_tit >= 150:
                            info_IDQ["lunghezza_titolo"]["ottimo"] += 1

                        if "description_length" in contenuto:
                            l_desc = int(contenuto.get("description_length", 0))
                            if l_desc < 1000:
                                info_IDQ["lunghezza_descrizione"]["scarso"] += 1
                            elif 1000 <= l_desc <= 1499:
                                info_IDQ["lunghezza_descrizione"]["medio"] += 1
                            elif l_desc >= 1500:
                                info_IDQ["lunghezza_descrizione"]["ottimo"] += 1

                        n_bul = int(contenuto.get("tot_bullet_point", 0))
                        if n_bul <= 2:
                            info_IDQ["bullet_point"]["scarso"] += 1
                        elif 3 <= n_bul <= 4:
                            info_IDQ["bullet_point"]["medio"] += 1
                        elif n_bul >= 5:
                            info_IDQ["bullet_point"]["ottimo"] += 1

                    except (KeyError, TypeError, ValueError):
                        pass
                
            
            
                # ---------------
                # CONTEGGIO LISTA TOP X
                # ---------------
                prodotti = []
            
                for v in asin_list:
                    summary = dati['body'][v]['summary'] 
                    data = dati['body'][v]['data']

                    if not isinstance(data, dict):
                        continue

                    for country, content in data.items():
                        if not isinstance(content, dict):
                            continue

                        ranking = content.get("ranking", {})
                        if not isinstance(ranking, dict):
                            continue

                        ranking_CAT = ranking.get("category", {})
                        ranking_NODE = ranking.get("node", {})

                        if not isinstance(ranking_CAT, dict) or not isinstance(ranking_NODE, dict):
                            continue

                        try:
                            prodotto = {
                                "idx": v,
                                "ASIN": summary.get("ASIN", v),
                                "EAN": summary.get("EAN", ""),
                                "TITLE": summary.get("title", ""),
                                "COUNTRY": country,
                                "CAT_NAME": ranking_CAT.get("name", ""),
                                "CAT_RANK": int(ranking_CAT.get("rank", 0)),
                                "NODE_NAME": ranking_NODE.get("name", ""),
                                "NODE_RANK": int(ranking_NODE.get("rank", 0)),
                                "IMAGE": summary.get("img_lg") or ""
                            }

                            prodotti.append(prodotto)

                        except (KeyError, TypeError, ValueError):
                            continue

                prodotti_ordinati = sorted(prodotti, key=lambda x: x["NODE_RANK"])[:50]
                
        # ---------------
        # RISULTATI
        # ---------------
        result = {
            'asin_count': asin_count,
            'no_asin_count': no_asin_count,
            'is_AMZ_count': is_AMZ_count,
            'not_AMZ_count': not_AMZ_count,
            'category_keys': category_keys,
            'category_values': category_values,
            'nodes_keys': nodes_keys,
            'nodes_values': nodes_values,
            'offers_count': offers_count,
            'no_offers_count': no_offers_count,
            'margine_meno_0': margine_meno_0,
            'margine_1_a_10': margine_1_a_10,
            'margine_11_a_20': margine_11_a_20,
            'margine_21_a_30': margine_21_a_30,
            'margine_piu_30': margine_piu_30,
            'tmp_cons_prime': tmp_cons_prime,
            'tmp_cons_24h': tmp_cons_24h,
            'tmp_cons_48h': tmp_cons_48h,
            'tmp_cons_more48h': tmp_cons_more48h,
            'info_IDQ': info_IDQ,
            'prodotti_ordinati': prodotti_ordinati,
        }
    
        logger.info(json.dumps(result))
        print(json.dumps(result))

        


        
    else:
        # Nessun parametro ricevuto
        error_result = {
            "status": "error",
            "message": "Nessun file di input specificato"
        }
        logger.info(json.dumps(error_result))
        
except FileNotFoundError:
    error_result = {
        "status": "error",
        "message": f"File di input non trovato: {sys.argv[1] if len(sys.argv) > 1 else 'N/A'}"
    }
    logger.info(json.dumps(error_result))
except json.JSONDecodeError as e:
    error_result = {
        "status": "error", 
        "message": f"Errore nel parsing JSON: {str(e)}"
    }
    logger.info(json.dumps(error_result))
except Exception as e:
    # Gestione errori generici
    error_result = {
        "status": "error", 
        "message": f"Errore nello script Python: {str(e)}"
    }
    logger.info(json.dumps(error_result))
