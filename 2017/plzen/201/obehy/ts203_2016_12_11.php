<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1981_1', '1990_1', '7384_1', '1988_1', '1960_1', '7519_1', '1962_1', '7521_1'];

$omezeni['1960_1'] = 'N';
$omezeni['1962_1'] = 'N';
$omezeni['1981_1'] = 'X, 6';
$omezeni['1988_1'] = 'X5';
$omezeni['1990_1'] = 'zX';
$omezeni['7384_1'] = 'zX';
$omezeni['7519_1'] = 'N';
$omezeni['7521_1'] = 'N';






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts203 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


