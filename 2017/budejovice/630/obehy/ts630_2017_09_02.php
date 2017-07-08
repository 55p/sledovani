<?php 
$zacatekPlatnosti = '2.9.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['102154_1', '1930_1', '8303_1', '8304_1', '8307_1', '8308_1', '8313_1', '8326_1', '8325_1', '8330_1', '8311_1', '8312_1', '8315_1', '8332_1'];
$obeh[2] = ['1931_1', '8042_1', '8041_1', '8006_1', '8008_1', '8007_1', '2152_1', '2155_1', '2156_1', '2157_1', '2160_1', '2161_1', '2162_1', '2165_1', '2164_1', '8016_1', '2167_1', '2166_1', '2169_1', '2168_1', '2171_1', '102171_1'];
$obeh[3] = ['2150_1', '2151_1', '2154_1', '2152_2', '2155_2', '2156_2', '2157_2', '2158_1', '2159_1', '2160_2', '2163_1', '102164_1', '2161_2', '2162_2', '2165_2', '2164_2', '2167_2', '2166_2', '2169_2', '2168_2', '2171_2', '8001_1', '8004_1', '8005_1', '8010_1', '8011_1'];

$omezeni['102154_1'] = 'X';
$omezeni['102164_1'] = 'X5';
$omezeni['102171_1'] = 'N';
$omezeni['1930_1'] = 'X';
$omezeni['1931_1'] = 'X';
$omezeni['2150_1'] = 'X';
$omezeni['2151_1'] = 'X';
$omezeni['2152_1'] = '6';
$omezeni['2152_2'] = 'N';
$omezeni['2154_1'] = 'X';
$omezeni['2155_1'] = '6';
$omezeni['2155_2'] = 'X, N';
$omezeni['2156_1'] = '6';
$omezeni['2156_2'] = 'X, N';
$omezeni['2157_1'] = '6';
$omezeni['2157_2'] = 'X, N';
$omezeni['2158_1'] = 'X';
$omezeni['2159_1'] = 'X';
$omezeni['2160_1'] = '6';
$omezeni['2160_2'] = 'X, N';
$omezeni['2161_1'] = 'X, 6';
$omezeni['2161_2'] = 'N';
$omezeni['2162_1'] = 'X';
$omezeni['2162_2'] = 'N';
$omezeni['2163_1'] = 'X';
$omezeni['2164_1'] = 'X, 6';
$omezeni['2164_2'] = 'N';
$omezeni['2165_1'] = 'X';
$omezeni['2165_2'] = 'N';
$omezeni['2166_1'] = 'X1234';
$omezeni['2166_2'] = 'X5, N';
$omezeni['2167_1'] = 'X1234, 6';
$omezeni['2167_2'] = 'X5, N';
$omezeni['2168_1'] = 'X1234, 6';
$omezeni['2168_2'] = 'X5, N';
$omezeni['2169_1'] = 'X1234';
$omezeni['2169_2'] = 'X5, N';
$omezeni['2171_1'] = 'X1234, 6';
$omezeni['2171_2'] = 'X5, N';
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
$omezeni['8303_1'] = '25';
$omezeni['8304_1'] = '25';
$omezeni['8307_1'] = '25';
$omezeni['8308_1'] = '25';
$omezeni['8311_1'] = 'N';
$omezeni['8312_1'] = 'N';
$omezeni['8313_1'] = 'X, 6';
$omezeni['8315_1'] = 'N';
$omezeni['8325_1'] = 'X';
$omezeni['8326_1'] = 'X';
$omezeni['8330_1'] = 'X';
$omezeni['8332_1'] = '6, N';

$trasa['102154_1'] = ['České Velenice;6:28','České Budějovice;7:15'];
$trasa['102164_1'] = ['České Velenice;17:03','České Budějovice;17:52'];
$trasa['102171_1'] = ['České Budějovice;22:48','České Velenice;23:33'];

$poznamkaObehu['102154_1'] = ['pk', 'postrk'];
$poznamkaObehu['102171_1'] = ['pk', 'postrk'];
$poznamkaObehu['102164_1'] = ['pk', 'postrk'];

$poznamkaObehu['2154_1'] = ['vl', 'vlaková'];

$trasa['1930_1'] = ['České Budějovice;15:22', 'Počátky-Žirovnice;17:08'];
$trasa['1931_1'] = ['Jindřichův Hradec;4:54', 'České Budějovice;6:13'];
$trasa['2150_1'] = ['České Velenice;4:00', 'České Budějovice;4:49'];
$trasa['2151_1'] = ['České Budějovice;5:11', 'České Velenice;5:59'];
$trasa['2152_1'] = ['České Velenice;5:00', 'České Budějovice;5:55'];
$trasa['2152_2'] = ['České Velenice;5:00', 'České Budějovice;5:55'];
$trasa['2154_1'] = ['České Velenice;6:26', 'České Budějovice;7:15'];
$trasa['2155_1'] = ['České Budějovice;8:09', 'České Velenice;8:57'];
$trasa['2155_2'] = ['České Budějovice;8:09', 'České Velenice;8:57'];
$trasa['2156_1'] = ['České Velenice;9:03', 'České Budějovice;9:52'];
$trasa['2156_2'] = ['České Velenice;9:03', 'České Budějovice;9:52'];
$trasa['2157_1'] = ['České Budějovice;10:09', 'České Velenice;10:57'];
$trasa['2157_2'] = ['České Budějovice;10:09', 'České Velenice;10:57'];
$trasa['2158_1'] = ['České Velenice;11:03', 'České Budějovice;11:52'];
$trasa['2159_1'] = ['České Budějovice;12:09', 'České Velenice;12:57'];
$trasa['2160_1'] = ['České Velenice;13:03', 'České Budějovice;13:52'];
$trasa['2160_2'] = ['České Velenice;13:03', 'České Budějovice;13:52'];
$trasa['2161_1'] = ['České Budějovice;14:09', 'České Velenice;14:57'];
$trasa['2161_2'] = ['České Budějovice;14:09', 'České Velenice;14:57'];
$trasa['2162_1'] = ['České Velenice;15:03', 'České Budějovice;15:52'];
$trasa['2162_2'] = ['České Velenice;15:03', 'České Budějovice;15:52'];
$trasa['2163_1'] = ['České Budějovice;15:09', 'České Velenice;16:02'];
$trasa['2164_1'] = ['České Velenice;17:03', 'České Budějovice;17:52'];
$trasa['2164_2'] = ['České Velenice;17:03', 'České Budějovice;17:52'];
$trasa['2165_1'] = ['České Budějovice;16:09', 'České Velenice;16:57'];
$trasa['2165_2'] = ['České Budějovice;16:09', 'České Velenice;16:57'];
$trasa['2166_1'] = ['České Velenice;19:03', 'České Budějovice;19:52'];
$trasa['2166_2'] = ['České Velenice;19:03', 'České Budějovice;19:52'];
$trasa['2167_1'] = ['České Budějovice;18:09', 'České Velenice;18:57'];
$trasa['2167_2'] = ['České Budějovice;18:09', 'České Velenice;18:57'];
$trasa['2168_1'] = ['České Velenice;21:03', 'České Budějovice;21:52'];
$trasa['2168_2'] = ['České Velenice;21:03', 'České Budějovice;21:52'];
$trasa['2169_1'] = ['České Budějovice;20:09', 'České Velenice;20:57'];
$trasa['2169_2'] = ['České Budějovice;20:09', 'České Velenice;20:57'];
$trasa['2171_1'] = ['České Budějovice;22:46', 'České Velenice;23:33'];
$trasa['2171_2'] = ['České Budějovice;22:46', 'České Velenice;23:33'];
$trasa['8001_1'] = ['Strakonice;5:49', 'České Budějovice;6:53'];
$trasa['8004_1'] = ['České Budějovice;9:05', 'Strakonice;10:06'];
$trasa['8005_1'] = ['Strakonice;10:23', 'České Budějovice;11:35'];
$trasa['8006_1'] = ['České Budějovice;10:28', 'Strakonice;11:33'];
$trasa['8007_1'] = ['Strakonice;12:05', 'České Budějovice;13:35'];
$trasa['8008_1'] = ['České Budějovice;11:05', 'Strakonice;12:25'];
$trasa['8010_1'] = ['České Budějovice;12:28', 'Strakonice;13:33'];
$trasa['8011_1'] = ['Strakonice;16:24', 'České Budějovice;17:35'];
$trasa['8016_1'] = ['České Budějovice;18:28', 'Strakonice;19:33'];
$trasa['8041_1'] = ['Číčenice;8:27', 'České Budějovice;8:54'];
$trasa['8042_1'] = ['České Budějovice;7:14', 'Číčenice;7:43'];
$trasa['8303_1'] = ['Jindřichův Hradec;7:30', 'Veselí nad Lužnicí;8:15'];
$trasa['8304_1'] = ['Veselí nad Lužnicí;9:35', 'Počátky-Žirovnice;10:40'];
$trasa['8307_1'] = ['Počátky-Žirovnice;11:15', 'Veselí nad Lužnicí;12:23'];
$trasa['8308_1'] = ['Veselí nad Lužnicí;13:35', 'Počátky-Žirovnice;14:40'];
$trasa['8311_1'] = ['Počátky-Žirovnice;15:15', 'Veselí nad Lužnicí;16:19'];
$trasa['8312_1'] = ['Veselí nad Lužnicí;17:35', 'Počátky-Žirovnice;18:40'];
$trasa['8313_1'] = ['Počátky-Žirovnice;17:15', 'Veselí nad Lužnicí;18:22'];
$trasa['8315_1'] = ['Počátky-Žirovnice;19:15', 'Veselí nad Lužnicí;20:23'];
$trasa['8325_1'] = ['Jindřichův Hradec;21:42', 'Veselí nad Lužnicí;22:18'];
$trasa['8326_1'] = ['Veselí nad Lužnicí;19:35', 'Jindřichův Hradec;20:06'];
$trasa['8330_1'] = ['Veselí nad Lužnicí;22:25', 'Jindřichův Hradec;22:56'];
$trasa['8332_1'] = ['Veselí nad Lužnicí;23:20', 'Jindřichův Hradec;23:52'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts630 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);

