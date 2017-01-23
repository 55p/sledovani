<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1081_1', '1082_1', '1082_2', '1085_1', '101086_1', '101087_1', '1088_1'];
$obeh[2] = ['1083_1', '1084_1', '1084_2', '1087_1', '101088_1'];
$obeh[3] = ['1080_1', '1085_2', '101085_1', '1086_1', '1086_2', '1089_1'];
$obeh[4] = ['101083_1', '101084_1'];

$omezeni['101083_1'] = '5';
$omezeni['101084_1'] = '5';
$omezeni['101085_1'] = '5';
$omezeni['101086_1'] = '5';
$omezeni['101087_1'] = '7,1704,0105,0805,-1604,-3004,-0705';
$omezeni['101088_1'] = '7,1704,0105,0805,-1604,-3004,-0705';
$omezeni['1082_1'] = '1,2,3,4,6,7';
$omezeni['1082_2'] = '5';
$omezeni['1084_1'] = '1,2,3,4,6,7';
$omezeni['1084_2'] = '5';
$omezeni['1085_1'] = '5';
$omezeni['1085_2'] = '1,2,3,4,6,7';
$omezeni['1086_1'] = 'X6';
$omezeni['1086_2'] = '7,1704,0105,0805,-1604,-3004,-0705';
$omezeni['1088_1'] = '7,1704,0105,0805,-1604,-3004,-0705';
$omezeni['1089_1'] = '7,1704,0105,0805,-1604,-3004,-0705';

$trasa['101083_1'] = ['Obrnice;8:43','Most;8:48;9:10','Plzeň hl.n.;11:54'];
$trasa['101084_1'] = ['Plzeň hl.n.;14:05','Most;16:42;17:07','Obrnice;17:12'];
$trasa['101085_1'] = ['Obrnice;12:43','Most;12:48;13:10','Plzeň hl.n.;15:54'];
$trasa['101086_1'] = ['Plzeň hl.n.;16:05','Most;18:42;19:07','Obrnice;19:12'];
$trasa['101087_1'] = ['Obrnice;16:32','Most;16:37;17:10','Plzeň hl.n.;19:54'];
$trasa['101088_1'] = ['Plzeň hl.n.;20:05','Most;22:42;22:55','Obrnice;23:00'];
$trasa['1080_1'] = ['Plzeň hl.n.;6:05','Most;8:42;8:55','Obrnice;9:00'];
$trasa['1081_1'] = ['Obrnice;6:43','Most;6:48;7:10','Plzeň hl.n.;9:54'];
$trasa['1082_1'] = ['Plzeň hl.n.;10:05','Most;12:42;12:55','Obrnice;13:00'];
$trasa['1082_2'] = ['Plzeň hl.n.;10:05','Most;12:42'];
$trasa['1083_1'] = ['Obrnice;8:43','Most;8:48;9:10','Plzeň hl.n.;11:54'];
$trasa['1084_1'] = ['Plzeň hl.n.;14:05','Most;16:42'];
$trasa['1084_2'] = ['Plzeň hl.n.;14:05','Most;16:42'];
$trasa['1085_1'] = ['Most;13:10','Plzeň hl.n.;15:54'];
$trasa['1085_2'] = ['Obrnice;12:43','Most;12:48;13:10','Plzeň hl.n.;15:54'];
$trasa['1086_1'] = ['Plzeň hl.n.;16:05','Most;18:42;19:07','Obrnice;19:12'];
$trasa['1086_2'] = ['Plzeň hl.n.;16:05','Most;18:42'];
$trasa['1087_1'] = ['Most;17:10','Plzeň hl.n.;19:54'];
$trasa['1088_1'] = ['Plzeň hl.n.;20:05','Most;22:42;22:55','Obrnice;23:00'];
$trasa['1089_1'] = ['Most;19:10','Plzeň hl.n.;21:54'];

$poznamkaObehu['101086_1'] = ['pk', 'postrk'];
$poznamkaObehu['101087_1'] = ['pk', 'postrk'];
$poznamkaObehu['1084_2'] = ['pk', 'postrk'];
$poznamkaObehu['101088_1'] = ['pk', 'postrk'];
$poznamkaObehu['101085_1'] = ['pk', 'postrk'];
$poznamkaObehu['101083_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$gwtr -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


