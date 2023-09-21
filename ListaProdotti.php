<?php   
require_once __DIR__ . "/classes/categories/Gatto.php";
require_once __DIR__ . "/classes/categories/Cane.php";
$SpawnGatti = new Gatto();
$SpawnCani = new Cane();
$listaProdotti = [
    new Cibo("Felix Le Ghiottonerie Junior in gelatina","Alimento umido completo Felix Le Ghiottonerie Junior in gelatina per gattini (2 - 12 mesi), mix di pregiate materie prime confezionato in pratiche buste, senza coloranti né conservanti artificiali.",19.99,"https://shop-cdn-m.mediazs.com/bilder/felix/le/ghiottonerie/junior/in/gelatina/9/800/mhi_9.jpg","cane",""),
    new Cibo("Gourmet Gold","Gourmet Gold nelle varianti Dadini in Salsa, Mousse o Tortini, con 4 gusti ciascuna",47.00,"https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/gourmet/gold/8/800/113006_purina_gourmet_gold_huhn_leber_in_so_e_hs_02_8.jpg","gatto","maschio"),
    new Cibo("Alimento secco gusto di pollame, pesce e agnello","Un alimento secco completo e gustoso con ingredienti di alta qualità e accuratamente selezionati. Soddisfa il fabbisogno nutrizionale giornaliero dei gatti adulti e garantisce coinquilini felici e contenti. Gustoso e facilmente digeribile.",4.70,"https://www.sanct-bernhard.it/temp/explorer/files/shop_articles/001000-001099/1032.jpg","gatto","maschio"),
    new Cibo("Orecchio di manzo in un pezzo (con pelo)","Le orecchie di manzo sono attualmente molto di tendenza e, ovviamente, le offriamo anche essiccate. I peli hanno un effetto igienizzante per la zona stomaco-intestino del cane. Grazie all'impegno prolungato con questo articolo, i muscoli della masticazione diventano più potenti e si previene la formazione di tartaro. Divertente da masticare e sano, per cani grandi e piccoli.",2.69,"https://barf-specialista.it/1133-thickbox/orecchio-di-manzo-in-un-pezzo-con-pelo.jpg","cane","maschio"),
    new Cibo("Gelato per cani fai da te Smoofl","Il Gelato fai da te per Cani Smoofl è facile e veloce da preparare. Tutte le ricette vegane a base di frutta, sono create appositamente per Fido. Il packaging include anche i gustosi Sticks commestibili che fungeranno da stecco, permettendo all'amico a quattro zampe di divertirsi e gustarsi il loro fresco snack, fino all'ultimo morso!",8.49,"https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-07-12t170145.048.jpg?store=default&image-type=image","cane","maschio"),
    new Cibo("Royal Canin Maxi Adult Crocchette per cani","Crocchette XL Royal Canin Maxi Adult per cani di tg grande (26-45 kg), dai 15 mesi ai 5 anni, per la salute del sistema immunitario, il funzionamento delle articolazioni e il controllo del peso",71.99,"https://shop-cdn-m.mediazs.com/bilder/royal/canin/maxi/adult/crocchette/per/cani/6/800/icon_topseller_1_2022_02_24t122255_148_6.jpg","cane","maschio"),
    new Cuccia("Cuccia per gatti","Cuccia per gatti con cartone carino decorazione riparo pe",10.08,"https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/f312c79e94e4c3ad332f31c6b3ab0ffe.jpg?imageView2/2/w/800/q/70","gatto","femmina"),
    new Cuccia("Cuccia Per Gatti","Cuccia Per Gatti Tenda Per Casa A Forma Di Squalo Confortevole Desig",22.60,"https://img.kwcdn.com/product/open/2023-06-08/1686217379893-9e013fc71d6844f0a651eebc4f4c1152-goods.jpeg?imageView2/2/w/800/q/70","gatto",""),
    new Cuccia("Letto Per Gatti","Morbida Casa Invernale Rimovibile Per Gatti, Tenda Per Animali Dom",15.60,"https://img.kwcdn.com/product/enhanced_images/fb857a7c9bcdc21c1995889d1ef99c17_enhanced.jpg?imageView2/2/w/800/q/70","",""),
    new Cuccia("Cuccia Per Cani","Cuccia Morbida Per Animali Domestici Tenda Per Interni Chiusa Caldo Peluc",22.22,"https://img.kwcdn.com/product/open/2023-07-03/1688369889368-f10fa61eafec40e1be62fa68a83ee378-goods.jpeg?imageView2/2/w/800/q/70","cane","femmina"),
    new Cuccia("Divano Letto Per Animali Domestici","Divano Letto Per Animali Domestici A Forma Di Banana Con Design A Forma Di Banana, D",21.50,"https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/3a7c4d58fb08368cd04cb99ba7f4b6a4.jpg?imageView2/2/w/800/q/70","cane","maschio"),
    new Cuccia("Letto Per Cani","Letto Per Cani Caldo Casa Per Animali Domestici Accogliente Cuscino Per Gattino Ten",42.44,"https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/3fdbc41fe0e9869242c41da73a9913b4.jpg?imageView2/2/w/800/q/70","cane","femmina"),
    new Giochi("TIRAGRAFFI PER GATTO", "PARCO GIOCO GIOCHI GRAFFIATOIO SISAL CUCCIA ALBERO GATTI TIRA GRAFFI PALESTRA - Beige", 24.99, "https://m.media-amazon.com/images/I/71PhIE8-FtL._AC_SL1500_.jpg","gatto","maschio"),
    new Giochi("Giocattoli con piume", "bacchette con piume di gatto giocattolo interattivo con rompicapo giocattolo con bacchette interattive per gatti",1.26,"https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/ce70d60c1517784b781e4fdc258f1c0c.jpg?imageView2/2/w/800/q/70","gatto","maschio"),
    new Giochi("Gioco con Pallina", "Il gioco con Pallina Yes permette al tuo gatto di coniugare l’esercizio fisico con quello intellettuale",6.90,"https://arcaplanet.vtexassets.com/arquivos/ids/266265/yes-gioco-con-pallina-per-gatti.jpg?v=1781482876", "","femmina"),
    new Giochi("Osso di peluche tiffany", "Gioco per cani Sniffany & co. - Dog Diggin designs",5.90,"https://www.sleepypets.it/943-large_default/gioco-per-cani-personalizzato.jpg","cane","maschio"),
    new Giochi("Gioco da masticare","spazzolino in gomma, per pulizia denti",3.90,"https://www.rioparty.it/32388-large_default/gioco-da-masticare-per-cani-spazzolino-in-gomma.webp","cane","maschio"),
    new Giochi("Attivazione Mentale","Cotonossi e trecce per giocare al tira e molla con il tuo cane",20.50,"https://www.thekill.it/9314-home_default/tug-per-cuccioli-in-pelo-di-coniglio-con-pallina-chuckit.jpg","cane","femmina"),
    ];