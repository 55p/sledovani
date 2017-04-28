<?php 
$zacatekPlatnosti = '1.4.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['1040_1', '1043_1'];
$obeh[2] = ['1041_1', '1042_1'];
$obeh[3] = ['101043_1', '1042_2'];
$obeh[4] = ['1041_2', '101042_1'];

$omezeni['101042_1'] = '7';
$omezeni['101043_1'] = '5';
$omezeni['1041_1'] = '5,7';
$omezeni['1041_2'] = '6';
$omezeni['1042_1'] = '5,7';
$omezeni['1042_2'] = '6';

$trasa['101042_1'] = ['Nitra;12:54','Praha hl.n.;19:39'];
$trasa['101043_1'] = ['Praha hl.n.;14:19','Nitra;21:15'];
$trasa['1040_1'] = ['Nitra;6:46','Praha hl.n.;13:29'];
$trasa['1041_1'] = ['Praha hl.n.;8:19','Trenčín;13:43'];
$trasa['1041_2'] = ['Praha hl.n.;8:19','Nitra;15:14'];
$trasa['1042_1'] = ['Trenčín;14:18','Praha hl.n.;19:39'];
$trasa['1042_2'] = ['Nitra;12:54','Praha hl.n.;19:39'];
$trasa['1043_1'] = ['Praha hl.n.;14:19','Nitra;21:15'];

$poznamkaObehu['101043_1'] = ['pk', 'postrk'];
$poznamkaObehu['101042_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts802 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


