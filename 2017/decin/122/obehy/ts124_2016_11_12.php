<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('6421_1', '6421_2', '6422_1', '6423_1', '6424_1', '6411_1', '6412_1', '6415_1', '6416_1', '6955_1', '1658_1', '6959_1');
$obeh[2] = array('6940_1', '6941_1', '6942_1', '6413_1', '6414_1', '6419_1');
$obeh[3] = array('6400_1', '6405_1', '6402_1', '6407_1', '6408_1', '6455_1', '6456_1', '6457_1', '6458_1', '6417_1', '6418_1', '6959_2', '6418_2');
$obeh[4] = array('6940_2', '6430_1', '6403_1', '6406_1', '6409_1', '6410_1', '6962_1', '6967_1', '6964_1', '6962_2', '6969_1');

$omezeni['1658_1'] = 'X,T';
$omezeni['6400_1'] = 'X';
$omezeni['6402_1'] = '25';
$omezeni['6405_1'] = 'X';
$omezeni['6407_1'] = '25';
$omezeni['6418_1'] = 'z25';
$omezeni['6418_2'] = 'zX';
$omezeni['6421_1'] = '_34_2017';
$omezeni['6421_2'] = '34_2017';
$omezeni['6422_1'] = '34_2017';
$omezeni['6423_1'] = '34_2017';
$omezeni['6424_1'] = '34_2017';
$omezeni['6430_1'] = 'X';
$omezeni['6455_1'] = 'X';
$omezeni['6456_1'] = 'X';
$omezeni['6457_1'] = 'X';
$omezeni['6458_1'] = 'X';
$omezeni['6940_1'] = 'X';
$omezeni['6940_2'] = '25';
$omezeni['6941_1'] = 'X';
$omezeni['6942_1'] = 'X';
$omezeni['6955_1'] = 'X,T';
$omezeni['6959_1'] = 'zX';
$omezeni['6959_2'] = 'z25';
$omezeni['6962_1'] = 'X';
$omezeni['6962_2'] = '25';
$omezeni['6964_1'] = 'X';
$omezeni['6967_1'] = 'X';
$omezeni['6969_1'] = 'z25';

$trasa['6962_2'] = array('Ústí nad Labem západ;14:28','Děčín hl.n.;14:56');

$poznamkaObehu['6422_1'] = array('pk', 'postrk');
$poznamkaObehu['6424_1'] = array('pk', 'postrk');
$poznamkaObehu['6412_1'] = array('pk', 'postrk');
$poznamkaObehu['6416_1'] = array('pk', 'postrk');
$poznamkaObehu['6955_1'] = array('pk', 'postrk');
$poznamkaObehu['6959_1'] = array('pk', 'postrk');
$poznamkaObehu['6941_1'] = array('pk', 'postrk');
$poznamkaObehu['6414_1'] = array('pk', 'postrk');
$poznamkaObehu['6400_1'] = array('pk', 'postrk');
$poznamkaObehu['6402_1'] = array('pk', 'postrk');
$poznamkaObehu['6456_1'] = array('pk', 'postrk');
$poznamkaObehu['6458_1'] = array('pk', 'postrk');
$poznamkaObehu['6430_1'] = array('pk', 'postrk');
$poznamkaObehu['6406_1'] = array('pk', 'postrk');
$poznamkaObehu['6410_1'] = array('pk', 'postrk');


$typ['6962_2'] = 'Sv';

$trasa['1658_1'] = array('Roudnice nad Labem;22:20', 'Ústí nad Labem hl.n.;22:51');
$trasa['6400_1'] = array('Lysá nad Labem;4:57', 'Ústí nad Labem západ;6:51');
$trasa['6402_1'] = array('Lysá nad Labem;6:18', 'Ústí nad Labem západ;7:51');
$trasa['6403_1'] = array('Ústí nad Labem západ;6:03', 'Lysá nad Labem;7:36');
$trasa['6405_1'] = array('Ústí nad Labem západ;7:03', 'Lysá nad Labem;8:36');
$trasa['6406_1'] = array('Lysá nad Labem;8:18', 'Ústí nad Labem západ;9:51');
$trasa['6407_1'] = array('Ústí nad Labem západ;8:03', 'Lysá nad Labem;9:36');
$trasa['6408_1'] = array('Lysá nad Labem;10:18', 'Ústí nad Labem západ;11:51');
$trasa['6409_1'] = array('Ústí nad Labem západ;10:03', 'Lysá nad Labem;11:36');
$trasa['6410_1'] = array('Lysá nad Labem;12:18', 'Ústí nad Labem západ;13:51');
$trasa['6411_1'] = array('Ústí nad Labem západ;12:03', 'Lysá nad Labem;13:36');
$trasa['6412_1'] = array('Lysá nad Labem;14:18', 'Ústí nad Labem západ;15:51');
$trasa['6413_1'] = array('Ústí nad Labem západ;14:03', 'Lysá nad Labem;15:36');
$trasa['6414_1'] = array('Lysá nad Labem;16:18', 'Ústí nad Labem západ;17:51');
$trasa['6415_1'] = array('Ústí nad Labem západ;16:03', 'Lysá nad Labem;17:36');
$trasa['6416_1'] = array('Lysá nad Labem;18:18', 'Ústí nad Labem západ;19:51');
$trasa['6417_1'] = array('Ústí nad Labem západ;18:03', 'Lysá nad Labem;19:36');
$trasa['6418_1'] = array('Lysá nad Labem;20:18', 'Ústí nad Labem západ;21:51');
$trasa['6418_2'] = array('Lysá nad Labem;20:18', 'Mělník;20:51');
$trasa['6419_1'] = array('Ústí nad Labem západ;20:03', 'Lysá nad Labem;21:36');
$trasa['6421_1'] = array('Děčín hl.n.;4:49', 'Ústí nad Labem-Střekov;5:26');
$trasa['6421_2'] = array('Děčín hl.n.;4:49', 'Litoměřice město;5:45');
$trasa['6422_1'] = array('Litoměřice město;5:56', 'Ústí nad Labem západ;6:21');
$trasa['6423_1'] = array('Ústí nad Labem západ;6:28', 'Litoměřice město;6:49');
$trasa['6424_1'] = array('Litoměřice město;7:01', 'Ústí nad Labem západ;7:26');
$trasa['6430_1'] = array('Mělník;4:52', 'Ústí nad Labem západ;5:51');
$trasa['6455_1'] = array('Ústí nad Labem západ;13:03', 'Štětí;13:50');
$trasa['6456_1'] = array('Štětí;14:05', 'Ústí nad Labem západ;14:51');
$trasa['6457_1'] = array('Ústí nad Labem západ;15:03', 'Štětí;15:50');
$trasa['6458_1'] = array('Štětí;16:05', 'Ústí nad Labem západ;16:51');
$trasa['6940_1'] = array('Roudnice nad Labem;4:33', 'Ústí nad Labem hl.n.;5:17');
$trasa['6940_2'] = array('Roudnice nad Labem;4:33', 'Ústí nad Labem hl.n.;5:17');
$trasa['6941_1'] = array('Ústí nad Labem hl.n.;5:29', 'Hněvice;6:16');
$trasa['6942_1'] = array('Hněvice;6:30', 'Ústí nad Labem hl.n.;7:20');
$trasa['6955_1'] = array('Ústí nad Labem hl.n.;21:00', 'Roudnice nad Labem;21:38');
$trasa['6959_1'] = array('Ústí nad Labem hl.n.;23:00', 'Roudnice nad Labem;23:37');
$trasa['6959_2'] = array('Ústí nad Labem hl.n.;23:00', 'Roudnice nad Labem;23:37');
$trasa['6962_1'] = array('Ústí nad Labem západ;14:28', 'Děčín hl.n.;14:56');
$trasa['6964_1'] = array('Ústí nad Labem hl.n.;16:32', 'Děčín hl.n.;16:55');
$trasa['6967_1'] = array('Děčín hl.n.;15:02', 'Ústí nad Labem hl.n.;15:25');
$trasa['6969_1'] = array('Děčín hl.n.;21:24', 'Ústí nad Labem hl.n.;21:47');


@$ts124 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>