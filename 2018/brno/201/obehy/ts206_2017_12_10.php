<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4021_1', '4042_1', '4043_1'];

$omezeni['4021_1'] = 'X1';
$omezeni['4042_1'] = 'X1';
$omezeni['4043_1'] = 'X1';

$trasa['4021_1'] = ['Brno hl.n.;3:06', 'Křenovice horní n.;3:35'];
$trasa['4042_1'] = ['Křenovice horní n.;4:21', 'Rájec-Jestřebí;5:42'];
$trasa['4043_1'] = ['Rájec-Jestřebí;6:11', 'Brno hl.n.;6:44'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts206 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


