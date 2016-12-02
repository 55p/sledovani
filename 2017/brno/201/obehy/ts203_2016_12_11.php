<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4901_1', '4906_1', '4907_1', '4912_1', '4913_1', '4918_1', '4682_1', '4903_1', '4908_1', '4939_1', '4667_1', '4905_1', '4910_1', '4911_1', '4916_1'];

$omezeni['4667_1'] = '6';
$omezeni['4682_1'] = '6';
$omezeni['4901_1'] = 'X';
$omezeni['4903_1'] = '6';
$omezeni['4905_1'] = 'T';
$omezeni['4906_1'] = 'X';
$omezeni['4907_1'] = 'X';
$omezeni['4908_1'] = '6';
$omezeni['4910_1'] = 'T';
$omezeni['4911_1'] = 'T';
$omezeni['4912_1'] = 'X';
$omezeni['4913_1'] = 'X';
$omezeni['4916_1'] = 'T';
$omezeni['4918_1'] = 'X';
$omezeni['4939_1'] = '6';






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts203 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


