<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = '30.6.2018 23:59:59';

$obeh[1] = ['4951_1', '4954_1', '4963_1', '4048_1', '4049_1', '4054_1', '4055_1'];

$omezeni['4048_1'] = 'X';
$omezeni['4049_1'] = 'X';
$omezeni['4054_1'] = 'X';
$omezeni['4055_1'] = 'X';
$omezeni['4951_1'] = 'X';
$omezeni['4954_1'] = 'X';
$omezeni['4963_1'] = 'X';

$trasa['4048_1'] = ['Brno hl.n.;14:14', 'Rájec-Jestřebí;14:54'];
$trasa['4049_1'] = ['Rájec-Jestřebí;15:05', 'Brno hl.n.;15:43'];
$trasa['4054_1'] = ['Brno hl.n.;16:14', 'Rájec-Jestřebí;16:54'];
$trasa['4055_1'] = ['Rájec-Jestřebí;17:03', 'Brno hl.n.;17:43'];
$trasa['4951_1'] = ['Brno hl.n.;4:40', 'Vranovice;5:11'];
$trasa['4954_1'] = ['Vranovice;5:33', 'Tišnov;6:44'];
$trasa['4963_1'] = ['Tišnov;7:15', 'Brno hl.n.;7:55'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts802 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


