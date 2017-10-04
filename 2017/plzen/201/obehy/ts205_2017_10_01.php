<?php 
$zacatekPlatnosti = '1.10.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['8949_1', '8948_1', '8911_1', '8902_1', '8945_1', '8944_1'];

$omezeni['8902_1'] = '6';
$omezeni['8911_1'] = 'X5';
$omezeni['8944_1'] = '6';
$omezeni['8945_1'] = '6';
$omezeni['8948_1'] = 'X5';
$omezeni['8949_1'] = 'X5';






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts205 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


