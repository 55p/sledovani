<?php 
$zacatekPlatnosti = '11.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9230_1', '9234_1', '9205_1', '9204_1', '9207_1', '9206_1', '9209_1', '9208_1', '9235_1', '9238_1', '9239_1', '9247_1', '9240_1', '9249_1');
$obeh[2] = array('109231_1', '9242_1', '9241_1', '9232_1', '9234_2', '9244_1', '9221_1', '9221_2', '9207_2', '9220_1', '9220_2', '9206_2', '9235_2', '9238_2', '9247_2', '9248_1', '9020_1', '2041_1', '9237_1', '9239_2');
$obeh[3] = array('9031_1', '9230_2', '9203_1', '9202_1', '9211_1', '9270_1', '9213_1', '9270_2', '9273_1', '9273_2', '9274_1', '9274_2');
$obeh[4] = array('9261_1', '9262_1', '9251_1', '109203_1', '9263_1', '9200_1', '9200_2');
$obeh[5] = array('9243_1', '109220_1', '9245_1', '9246_1', '9217_1', '9276_1', '9211_2', '9268_1', '9271_1', '9272_1');
$obeh[6] = array('9258_1', '9260_1', '9265_1', '9265_2', '9236_1', '9264_1', '9250_1', '9205_2', '109209_1', '9204_2', '1832_1', '9213_2', '9268_2', '9217_2', '9271_2', '9272_2', '9240_2', '9249_2');

$omezeni['109203_1'] = 'X';
$omezeni['109209_1'] = '6,0507';
$omezeni['109220_1'] = 'X';
$omezeni['109231_1'] = 'X1,0707';
$omezeni['1832_1'] = '6,0507';
$omezeni['2041_1'] = 'X5,0407';
$omezeni['9020_1'] = 'X5,0407';
$omezeni['9031_1'] = '6,0507';
$omezeni['9200_1'] = 'X';
$omezeni['9200_2'] = '25';
$omezeni['9204_1'] = 'T';
$omezeni['9204_2'] = 'X';
$omezeni['9205_1'] = 'T';
$omezeni['9205_2'] = 'X';
$omezeni['9206_1'] = 'X';
$omezeni['9206_2'] = '6,0507';
$omezeni['9207_1'] = 'X';
$omezeni['9207_2'] = '6,0507';
$omezeni['9208_1'] = '6,0507';
$omezeni['9209_1'] = '6,0507';
$omezeni['9211_1'] = 'X';
$omezeni['9211_2'] = '25';
$omezeni['9213_1'] = '25';
$omezeni['9213_2'] = 'X';
$omezeni['9217_1'] = 'X';
$omezeni['9217_2'] = '25';
$omezeni['9220_1'] = 'T';
$omezeni['9220_2'] = 'X';
$omezeni['9221_1'] = 'X';
$omezeni['9221_2'] = '25';
$omezeni['9230_1'] = '6,0507';
$omezeni['9230_2'] = 'X';
$omezeni['9232_1'] = 'T';
$omezeni['9234_1'] = 'X';
$omezeni['9234_2'] = '6,0507';
$omezeni['9235_1'] = 'X5,0407';
$omezeni['9235_2'] = 'X1234,25,-0407';
$omezeni['9236_1'] = '25';
$omezeni['9237_1'] = 'T';
$omezeni['9238_1'] = 'X5,0407';
$omezeni['9238_2'] = 'X1234,25,-0407';
$omezeni['9239_1'] = 'X5,0407';
$omezeni['9239_2'] = 'X1234,-0407';
$omezeni['9240_1'] = 'X1234,-0407';
$omezeni['9240_2'] = 'X5,0407';
$omezeni['9241_1'] = 'X';
$omezeni['9242_1'] = 'X';
$omezeni['9243_1'] = 'X';
$omezeni['9244_1'] = 'X';
$omezeni['9245_1'] = 'X';
$omezeni['9246_1'] = 'X';
$omezeni['9247_1'] = 'X1234,-0407';
$omezeni['9247_2'] = 'X5,0407';
$omezeni['9248_1'] = 'X5,0407';
$omezeni['9249_1'] = 'X1234,-0407';
$omezeni['9249_2'] = 'X5,0407';
$omezeni['9250_1'] = 'X';
$omezeni['9251_1'] = 'X';
$omezeni['9258_1'] = '25';
$omezeni['9260_1'] = 'X';
$omezeni['9261_1'] = 'X';
$omezeni['9262_1'] = 'X';
$omezeni['9263_1'] = '25';
$omezeni['9264_1'] = 'X';
$omezeni['9265_1'] = 'X';
$omezeni['9265_2'] = '25';
$omezeni['9268_1'] = '25';
$omezeni['9268_2'] = 'X';
$omezeni['9270_1'] = 'X';
$omezeni['9270_2'] = '25';
$omezeni['9271_1'] = '25';
$omezeni['9271_2'] = 'X';
$omezeni['9272_1'] = '25';
$omezeni['9272_2'] = 'X';
$omezeni['9273_1'] = 'X,T';
$omezeni['9273_2'] = '6,0507';
$omezeni['9274_1'] = 'X,T';
$omezeni['9274_2'] = '6,0507';
$omezeni['9276_1'] = 'X';

$trasa['109203_1'] = array('Zruč nad Sázavou;7:08','Světlá nad Sázavou;8:09');
$trasa['109209_1'] = array('Čerčany;11:15','Zruč nad Sázavou;13:34');
$trasa['109220_1'] = array('Ledečko;15:04','Čerčany;15:49');
$trasa['109231_1'] = array('Čerčany;3:34','Ledečko;4:13');
$trasa['1832_1'] = array('Zruč nad Sázavou;16:00','Čerčany;17:51');
$trasa['2041_1'] = array('Praha hl.n.;22:55','Vrané nad Vltavou;23:28');
$trasa['9020_1'] = array('čerčany;20:06','Praha hl.n.;22:05');
$trasa['9031_1'] = array('Vrané nad Vltavou;0:52','Čerčany;1:51');
$trasa['9200_1'] = array('Světlá nad Sázavou;8:13','Čerčany;10:53');
$trasa['9200_2'] = array('Havlíčkův Brod;7:49','Čerčany;10:53');
$trasa['9202_1'] = array('Havlíčkův Brod;9:48','Čerčany;12:55');
$trasa['9203_1'] = array('Čerčany;5:05','Havlíčkův Brod;8:33');
$trasa['9204_1'] = array('Světlá nad Sázavou;11:46','Čerčany;14:27');
$trasa['9204_2'] = array('Světlá nad Sázavou;11:46','Čerčany;14:27');
$trasa['9205_1'] = array('Čerčany;8:08','Světlá nad Sázavou;11:11');
$trasa['9205_2'] = array('Zruč nad Sázavou zastávka;10:00','Světlá nad Sázavou;11:11');
$trasa['9206_1'] = array('Světlá nad Sázavou;13:46','Čerčany;16:49');
$trasa['9206_2'] = array('Světlá nad Sázavou;13:46','Čerčany;16:49');
$trasa['9207_1'] = array('Čerčany;9:12','Světlá nad Sázavou;12:46');
$trasa['9207_2'] = array('Zruč nad Sázavou;11:41','Světlá nad Sázavou;12:45');
$trasa['9208_1'] = array('Světlá nad Sázavou;15:46','Čerčany;18:49');
$trasa['9209_1'] = array('Čerčany;11:15','Světlá nad Sázavou;14:44');
$trasa['9211_1'] = array('Čerčany;13:08','Havlíčkův Brod;17:15');
$trasa['9211_2'] = array('Čerčany;13:08','Světlá nad Sázavou;16:51');
$trasa['9213_1'] = array('Čerčany;15:08','Světlá nad Sázavou;18:09');
$trasa['9213_2'] = array('Čerčany;15:08','Ledeč nad Sázavou;17:28');
$trasa['9217_1'] = array('Čerčany;19:08','Světlá nad Sázavou;22:46');
$trasa['9217_2'] = array('Čerčany;19:08','Zruč nad Sázavou;20:58');
$trasa['9220_1'] = array('Zruč nad Sázavou;14:03','Čerčany;15:49');
$trasa['9220_2'] = array('Ledeč nad Sázavou;13:26','Čerčany;15:49');
$trasa['9221_1'] = array('Čerčany;7:09','Ledeč nad Sázavou;9:19');
$trasa['9221_2'] = array('Čerčany;7:09','Zruč nad Sázavou;8:47');
$trasa['9230_1'] = array('Ledečko;4:17','Čerčany;4:57');
$trasa['9230_2'] = array('Zruč nad Sázavou;3:28','Čerčany;4:57');
$trasa['9232_1'] = array('Zruč nad Sázavou;4:19','Čerčany;5:48');
$trasa['9234_1'] = array('Zruč nad Sázavou;4:31','Čerčany;6:20');
$trasa['9234_2'] = array('Zruč nad Sázavou;4:31','Čerčany;6:15');
$trasa['9235_1'] = array('Čerčany;17:08','Zruč nad Sázavou;18:56');
$trasa['9235_2'] = array('Čerčany;17:08','Zruč nad Sázavou;18:53');
$trasa['9236_1'] = array('Zruč nad Sázavou;6:06','Čerčany;7:50');
$trasa['9237_1'] = array('Čerčany;21:08','Zruč nad Sázavou;22:35');
$trasa['9238_1'] = array('Zruč nad Sázavou;19:16','Čerčany;20:47');
$trasa['9238_2'] = array('Zruč nad Sázavou;19:17','Čerčany;20:46');
$trasa['9239_1'] = array('Čerčany;21:08','Zruč nad Sázavou;23:22');
$trasa['9239_2'] = array('Čerčany;21:08','Zruč nad Sázavou;23:22');
$trasa['9240_1'] = array('Sázava-Černé Budy;22:16','Čerčany;22:46');
$trasa['9240_2'] = array('Zruč nad Sázavou;21:18','Čerčany;22:46');
$trasa['9241_1'] = array('Čerčany;5:34','Sázava-Černé Budy;6:07');
$trasa['9242_1'] = array('Ledečko;4:44','Čerčany;5:27');
$trasa['9243_1'] = array('Čerčany;14:05','Ledečko;14:48');
$trasa['9244_1'] = array('Sázava-Černé Budy;6:24','Čerčany;6:57');
$trasa['9245_1'] = array('Čerčany;16:08','Sázava-Černé Budy;16:41');
$trasa['9246_1'] = array('Sázava-Černé Budy;17:13','Čerčany;17:51');
$trasa['9247_1'] = array('Čerčany;18:08','Sázava-Černé Budy;18:41');
$trasa['9247_2'] = array('Čerčany;18:08','Sázava-Černé Budy;18:41');
$trasa['9248_1'] = array('Sázava-Černé Budy;19:13','Čerčany;19:51');
$trasa['9249_1'] = array('Čerčany;23:05','Ledečko;23:44');
$trasa['9249_2'] = array('Čerčany;23:05','Ledečko;23:44');
$trasa['9250_1'] = array('Zruč nad Sázavou;9:53','Zruč nad Sázavou zastávka;9:57');
$trasa['9251_1'] = array('Zruč nad Sázavou zastávka;7:01','Zruč nad Sázavou;7:05');
$trasa['9258_1'] = array('Ledeč nad Sázavou;4:44','Zruč nad Sázavou zastávka;5:24');
$trasa['9260_1'] = array('Ledeč nad Sázavou;4:50','Zruč nad Sázavou zastávka;5:24');
$trasa['9261_1'] = array('Kácov;3:55','Světlá nad Sázavou;5:09');
$trasa['9262_1'] = array('Světlá nad Sázavou;5:59','Zruč nad Sázavou zastávka;6:58');
$trasa['9263_1'] = array('Kácov;4:55','Havlíčkův Brod;6:36');
$trasa['9264_1'] = array('Světlá nad Sázavou;7:12','Zruč nad Sázavou;8:14');
$trasa['9265_1'] = array('Zruč nad Sázavou zastávka;5:38','Světlá nad Sázavou;6:58');
$trasa['9265_2'] = array('Zruč nad Sázavou zastávka;5:38','Zruč nad Sázavou;5:44');
$trasa['9268_1'] = array('Světlá nad Sázavou;17:12','Zruč nad Sázavou zastávka;18:19');
$trasa['9268_2'] = array('Ledeč nad Sázavou;17:40','Zruč nad Sázavou zastávka;18:21');
$trasa['9270_1'] = array('Havlíčkův Brod;18:20','Zruč nad Sázavou;19:41');
$trasa['9270_2'] = array('Světlá nad Sázavou;18:44','Zruč nad Sázavou;19:41');
$trasa['9271_1'] = array('Zruč nad Sázavou zastávka;18:24','Světlá nad Sázavou;19:41');
$trasa['9271_2'] = array('Zruč nad Sázavou zastávka;18:24','Světlá nad Sázavou;19:41');
$trasa['9272_1'] = array('Světlá nad Sázavou;19:46','Ledeč nad Sázavou;20:11');
$trasa['9272_2'] = array('Světlá nad Sázavou;19:46','Zruč nad Sázavou;20:47');
$trasa['9273_1'] = array('Zruč nad Sázavou;19:48','Světlá nad Sázavou;20:41');
$trasa['9273_2'] = array('Zruč nad Sázavou;19:48','Ledeč nad Sázavou;20:14');
$trasa['9274_1'] = array('Světlá nad Sázavou;21:44','Kácov;22:59');
$trasa['9274_2'] = array('Ledeč nad Sázavou;22:10','Kácov;22:59');
$trasa['9276_1'] = array('Světlá nad Sázavou;22:54','Ledeč nad Sázavou;23:19');

$poznamkaObehu['109231_1'] = array('pk', 'postrk');
$poznamkaObehu['109203_1'] = array('pk', 'postrk');
$poznamkaObehu['109220_1'] = array('pk', 'postrk');
$poznamkaObehu['109209_1'] = array('pk', 'postrk');




@$ts851 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>