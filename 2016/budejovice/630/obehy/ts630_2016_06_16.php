<?php 
$zacatekPlatnosti = '16.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1931_1', '8042_1', '8041_1', '8006_1', '8008_1', '8007_1', '1930_1', '8323_1', '8336_1', '8339_1', '8338_1', '8313_1', '8314_1', '8317_1', '8318_1', '8321_1', '8323_2', '8322_1', '8325_1', '8338_2');
$obeh[2] = array('8001_1', '3883_1', '3888_1', '8014_1', '8013_1');

$omezeni['1930_1'] = 'X';
$omezeni['1931_1'] = 'X';
$omezeni['3883_1'] = 'T';
$omezeni['3888_1'] = 'T';
$omezeni['8001_1'] = 'T';
$omezeni['8006_1'] = 'X5';
$omezeni['8007_1'] = 'X';
$omezeni['8008_1'] = 'X1234';
$omezeni['8013_1'] = 'X5';
$omezeni['8014_1'] = 'z25';
$omezeni['8041_1'] = 'X';
$omezeni['8042_1'] = 'X';
$omezeni['8313_1'] = '6, T';
$omezeni['8314_1'] = '6, T';
$omezeni['8317_1'] = '6, T';
$omezeni['8318_1'] = '6, T';
$omezeni['8321_1'] = 'T';
$omezeni['8322_1'] = 'T';
$omezeni['8323_1'] = 'X';
$omezeni['8323_2'] = '6';
$omezeni['8325_1'] = 'T';
$omezeni['8336_1'] = 'X';
$omezeni['8338_1'] = 'X5';
$omezeni['8338_2'] = '25';
$omezeni['8339_1'] = 'X5';

$trasa['8007_1'] = array('Strakonice;12:23', 'České Budějovice;13:37');
$trasa['8008_1'] = array('České Budějovice;11:06', 'Strakonice;12:08');
$trasa['8014_1'] = array('České Budějovice;17:06', 'Strakonice;18:08');
$trasa['8041_1'] = array('Číčenice;8:27', 'České Budějovice;8:54');
$trasa['8042_1'] = array('České Budějovice;7:14', 'Číčenice;7:43');
$trasa['8336_1'] = array('Veselí nad Lužnicí;19:42', 'Jindřichův Hradec;20:14');
$trasa['8339_1'] = array('Jindřichův Hradec;22:22', 'Veselí nad Lužnicí;22:54');
$trasa['8006_1'] = array('České Budějovice;10:28', 'Strakonice;11:33');

$trasa['1931_1'] = array('Jindřichův Hradec;4:54', 'České Budějovice;6:11');
$trasa['1930_1'] = array('Veselí nad Lužnicí;15:47', 'Počátky-Žirovnice;16:50');
$trasa['3883_1'] = array('České Budějovice;15:08', 'Horní Dvořiště;16:11');
$trasa['3888_1'] = array('Horní Dvořiště;18:48', 'České Budějovice;19:57');
$trasa['8001_1'] = array('Strakonice;5:49', 'České Budějovice;6:53');
$trasa['8013_1'] = array('Strakonice;18:23', 'České Budějovice;19:37');
$trasa['8313_1'] = array('Jindřichův Hradec;7:30', 'Veselí nad Lužnicí;8:16');
$trasa['8314_1'] = array('Veselí nad Lužnicí;9:42', 'Počátky-Žirovnice;10:50');
$trasa['8317_1'] = array('Počátky-Žirovnice;11:05', 'Veselí nad Lužnicí;12:16');
$trasa['8318_1'] = array('Veselí nad Lužnicí;13:42', 'Počátky-Žirovnice;14:50');
$trasa['8321_1'] = array('Počátky-Žirovnice;15:05', 'Veselí nad Lužnicí;16:20');
$trasa['8322_1'] = array('Veselí nad Lužnicí;17:42', 'Počátky-Žirovnice;18:50');
$trasa['8323_1'] = array('Počátky-Žirovnice;17:05', 'Veselí nad Lužnicí;18:16');
$trasa['8323_2'] = array('Počátky-Žirovnice;17:05', 'Veselí nad Lužnicí;18:16');
$trasa['8325_1'] = array('Počátky-Žirovnice;19:05', 'Veselí nad Lužnicí;20:16');
$trasa['8338_1'] = array('Veselí nad Lužnicí;23:32', 'Jindřichův Hradec;0:04');
$trasa['8338_2'] = array('Veselí nad Lužnicí;23:32', 'Jindřichův Hradec;0:04');




@$ts630 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>