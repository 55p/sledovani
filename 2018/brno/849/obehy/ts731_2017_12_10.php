<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4500_1', '4515_1', '4518_1', '4531_1'];

$omezeni['4500_1'] = 'X';
$omezeni['4515_1'] = 'X';
$omezeni['4518_1'] = 'X';
$omezeni['4531_1'] = 'X';

$trasa['4500_1'] = ['Břeclav;4:57', 'Znojmo;6:22'];
$trasa['4515_1'] = ['Znojmo;12:55', 'Břeclav;14:26'];
$trasa['4518_1'] = ['Břeclav;15:32', 'Znojmo;16:53'];
$trasa['4531_1'] = ['Znojmo;17:55', 'Břeclav;19:18'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts731 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


