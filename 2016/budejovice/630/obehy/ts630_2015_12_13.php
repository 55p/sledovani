<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('102154_1', '8313_1', '8314_1', '8317_1', '8318_1', '8321_1', '1930_1', '8323_1', '8322_1', '8325_1', '8336_1', '8339_1', '8338_1');
$obeh[2] = array('1931_1', '8042_1', '8041_1', '2152_1', '2155_1', '2156_1', '2157_1', '8006_1', '8008_1', '8007_1', '2160_1', '2161_1', '3883_1', '2162_1', '2165_1', '2164_1', '2167_1', '3888_1', '2166_1', '8016_1', '2169_1', '2168_1', '2171_1', '102171_1');
$obeh[3] = array('2150_1', '2151_1', '2152_2', '2154_1', '2155_2', '8001_1', '8004_1', '8005_1', '2156_2', '2157_2', '2158_1', '2159_1', '2160_2', '8010_1', '8011_1', '2161_2', '2163_1', '2162_2', '2165_2', '102164_1', '2164_2', '2167_2', '2166_2', '2169_2', '2168_2', '2171_2');

$omezeni['102154_1'] = 'X';
$omezeni['102164_1'] = 'X5';
$omezeni['102171_1'] = 'T';
$omezeni['1930_1'] = 'X';
$omezeni['1931_1'] = 'X';
$omezeni['2150_1'] = 'X';
$omezeni['2151_1'] = 'X';
$omezeni['2152_1'] = '6';
$omezeni['2152_2'] = 'T';
$omezeni['2154_1'] = 'X';
$omezeni['2155_1'] = '6';
$omezeni['2155_2'] = 'X, T';
$omezeni['2156_1'] = '6';
$omezeni['2156_2'] = 'X, T';
$omezeni['2157_1'] = '6';
$omezeni['2157_2'] = 'X, T';
$omezeni['2158_1'] = 'X';
$omezeni['2159_1'] = 'X';
$omezeni['2160_1'] = '6';
$omezeni['2160_2'] = 'X, T';
$omezeni['2161_1'] = 'X, 6';
$omezeni['2161_2'] = 'T';
$omezeni['2162_1'] = 'X';
$omezeni['2162_2'] = 'T';
$omezeni['2163_1'] = 'X';
$omezeni['2164_1'] = 'X6';
$omezeni['2164_2'] = 'T';
$omezeni['2165_1'] = 'X';
$omezeni['2165_2'] = 'T';
$omezeni['2166_1'] = 'X1234';
$omezeni['2166_2'] = 'X5, T';
$omezeni['2167_1'] = 'X1234, 6';
$omezeni['2167_2'] = 'X5, T';
$omezeni['2168_1'] = 'X1234, 6';
$omezeni['2168_2'] = 'X5, T';
$omezeni['2169_1'] = 'X1234';
$omezeni['2169_2'] = 'X5, T';
$omezeni['2171_1'] = 'X1234, 6';
$omezeni['2171_2'] = 'X5, T';
$omezeni['3883_1'] = 'T';
$omezeni['3888_1'] = 'T';
$omezeni['8001_1'] = '6';
$omezeni['8004_1'] = '6';
$omezeni['8005_1'] = '6';
$omezeni['8006_1'] = 'X5';
$omezeni['8007_1'] = 'X';
$omezeni['8008_1'] = 'X1234';
$omezeni['8010_1'] = '6';
$omezeni['8011_1'] = '6';
$omezeni['8016_1'] = 'X5';
$omezeni['8041_1'] = 'X';
$omezeni['8042_1'] = 'X';
$omezeni['8313_1'] = '6, T';
$omezeni['8314_1'] = '6, T';
$omezeni['8317_1'] = '6, T';
$omezeni['8318_1'] = '6, T';
$omezeni['8321_1'] = 'T';
$omezeni['8322_1'] = 'T';
$omezeni['8323_1'] = 'X, 6';
$omezeni['8325_1'] = 'T';
$omezeni['8336_1'] = 'X';
$omezeni['8338_1'] = 'X5, 6, T';
$omezeni['8339_1'] = 'X5';


$trasa['1930_1'] = array('České Budějovice;15:07', 'Počátky-Žirovnice;16:50');
$trasa['1931_1'] = array('Jindřichův Hradec;4:54', 'České Budějovice;6:11');
$trasa['2150_1'] = array('České Velenice;4:00', 'České Budějovice;4:49');
$trasa['2151_1'] = array('České Budějovice;5:11', 'České Velenice;5:59');
$trasa['2152_1'] = array('České Velenice;5:00', 'České Budějovice;5:55');
$trasa['2152_2'] = array('České Velenice;5:00', 'České Budějovice;5:55');
$trasa['2154'] = array('České Velenice;6:40', 'České Budějovice;7:29');
$trasa['2155_1'] = array('České Budějovice;8:09', 'České Velenice;8:57');
$trasa['2155_2'] = array('České Budějovice;8:09', 'České Velenice;8:57');
$trasa['2156_1'] = array('České Velenice;9:03', 'České Budějovice;9:52');
$trasa['2156_2'] = array('České Velenice;9:03', 'České Budějovice;9:52');
$trasa['2157_1'] = array('České Budějovice;10:09', 'České Velenice;10:57');
$trasa['2157_2'] = array('České Budějovice;10:09', 'České Velenice;10:57');
$trasa['2158_1'] = array('České Velenice;11:03', 'České Budějovice;11:52');
$trasa['2159_1'] = array('České Budějovice;12:09', 'České Velenice;12:57');
$trasa['2160_1'] = array('České Velenice;13:03', 'České Budějovice;13:52');
$trasa['2160_2'] = array('České Velenice;13:03', 'České Budějovice;13:52');
$trasa['2161_1'] = array('České Budějovice;14:09', 'České Velenice;14:57');
$trasa['2161_2'] = array('České Budějovice;14:09', 'České Velenice;14:57');
$trasa['2162_1'] = array('České Velenice;15:03', 'České Budějovice;15:52');
$trasa['2162_2'] = array('České Velenice;15:03', 'České Budějovice;15:52');
$trasa['2163_1'] = array('České Budějovice;15:09', 'České Velenice;15:59');
$trasa['2164'] = array('České Velenice;17:03', 'České Budějovice;17:52');
$trasa['2165_1'] = array('České Budějovice;16:09', 'České Velenice;16:57');
$trasa['2165_2'] = array('České Budějovice;16:09', 'České Velenice;16:57');
$trasa['2166_1'] = array('České Velenice;19:03', 'České Budějovice;19:52');
$trasa['2166_2'] = array('České Velenice;19:03', 'České Budějovice;19:52');
$trasa['2167_1'] = array('České Budějovice;18:09', 'České Velenice;18:57');
$trasa['2167_2'] = array('České Budějovice;18:09', 'České Velenice;18:57');
$trasa['2168_1'] = array('České Velenice;21:03', 'České Budějovice;21:52');
$trasa['2168_2'] = array('České Velenice;21:03', 'České Budějovice;21:52');
$trasa['2169_1'] = array('České Budějovice;20:09', 'České Velenice;20:57');
$trasa['2169_2'] = array('České Budějovice;20:09', 'České Velenice;20:57');
$trasa['2171'] = array('České Budějovice;22:46', 'České Velenice;23:33');
$trasa['3883_1'] = array('České Budějovice;15:08', 'Horní Dvořiště;16:11');
$trasa['3888_1'] = array('Horní Dvořiště;18:48', 'České Budějovice;19:57');
$trasa['8001_1'] = array('Strakonice;5:49', 'České Budějovice;6:53');
$trasa['8004_1'] = array('České Budějovice;9:06', 'Strakonice;10:08');
$trasa['8005_1'] = array('Strakonice;10:23', 'České Budějovice;11:37');
$trasa['8006_1'] = array('České Budějovice;10:28', 'Strakonice;11:33');
$trasa['8007_1'] = array('Strakonice;12:23', 'České Budějovice;13:37');
$trasa['8008_1'] = array('České Budějovice;11:06', 'Strakonice;12:08');
$trasa['8010_1'] = array('České Budějovice;12:28', 'Strakonice;13:33');
$trasa['8011_1'] = array('Strakonice;16:24', 'České Budějovice;17:37');
$trasa['8016_1'] = array('České Budějovice;18:28', 'Strakonice;19:33');
$trasa['8041_1'] = array('Číčenice;8:27', 'České Budějovice;8:54');
$trasa['8042_1'] = array('České Budějovice;7:14', 'Číčenice;7:43');
$trasa['8313_1'] = array('Jindřichův Hradec;7:30', 'Veselí nad Lužnicí;8:16');
$trasa['8314_1'] = array('Veselí nad Lužnicí;9:42', 'Počátky-Žirovnice;10:50');
$trasa['8317_1'] = array('Počátky-Žirovnice;11:05', 'Veselí nad Lužnicí;12:16');
$trasa['8318_1'] = array('Veselí nad Lužnicí;13:42', 'Počátky-Žirovnice;14:50');
$trasa['8321_1'] = array('Počátky-Žirovnice;15:05', 'Veselí nad Lužnicí;16:20');
$trasa['8322_1'] = array('Veselí nad Lužnicí;17:42', 'Počátky-Žirovnice;18:50');
$trasa['8323_1'] = array('Počátky-Žirovnice;17:05', 'Veselí nad Lužnicí;18:16');
$trasa['8325_1'] = array('Počátky-Žirovnice;19:05', 'Veselí nad Lužnicí;20:16');
$trasa['8336_1'] = array('Veselí nad Lužnicí;19:42', 'Jindřichův Hradec;20:14');
$trasa['8338_1'] = array('Veselí nad Lužnicí;23:32', 'Jindřichův Hradec;0:04');
$trasa['8339_1'] = array('Jindřichův Hradec;22:22', 'Veselí nad Lužnicí;22:54');

$poznamkaObehu['102154_1'] = array('pk', 'postrk');
$poznamkaObehu['102171_1'] = array('pk', 'postrk');
$poznamkaObehu['102164_1'] = array('pk', 'postrk');

$poznamkaObehu['2154_1'] = array('vl', 'vlaková');



@$ts630 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>