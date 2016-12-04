<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['8955_1', '8942_1', '1980_1', '7029_1', '7024_1', '1989_1'];

$omezeni['1980_1'] = 'X5';
$omezeni['1989_1'] = 'X5';
$omezeni['7024_1'] = 'X5';
$omezeni['7029_1'] = 'X5';
$omezeni['8942_1'] = 'X5';
$omezeni['8955_1'] = 'X4';






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts205 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


