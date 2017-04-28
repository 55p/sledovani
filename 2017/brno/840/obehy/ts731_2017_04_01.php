<?php 
$zacatekPlatnosti = '1.4.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['4513_1', '4514_1', '4525_1', '4522_1'];

$omezeni['4513_1'] = 'X';
$omezeni['4514_1'] = 'X';
$omezeni['4522_1'] = 'X';
$omezeni['4525_1'] = 'X';

$trasa['4513_1'] = ['Znojmo;11:55','Mikulov na Moravě;12:54'];
$trasa['4514_1'] = ['Mikulov na Moravě;14:00','Znojmo;14:53'];
$trasa['4522_1'] = ['Mikulov na Moravě;18:00','Znojmo;18:00'];
$trasa['4525_1'] = ['Znojmo;15:55','Mikulov na Moravě;16:54'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts731 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


