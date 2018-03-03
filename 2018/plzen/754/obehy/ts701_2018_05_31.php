<?php 
$zacatekPlatnosti = '31.5.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['7405_1', '7416_1'];
$obeh[2] = ['7407_1', '7418_1'];

$omezeni['7405_1'] = 'X';
$omezeni['7407_1'] = 'X';
$omezeni['7416_1'] = 'X';
$omezeni['7418_1'] = 'X';

$trasa['7405_1'] = ['Domažlice;5:32', 'Plzeň hl.n.;6:42'];
$trasa['7407_1'] = ['Domažlice město;6:06', 'Plzeň hl.n.;7:31'];
$trasa['7416_1'] = ['Plzeň hl.n.;14:18', 'Domažlice;15:25'];
$trasa['7418_1'] = ['Plzeň hl.n.;15:18', 'Domažlice město;16:36'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts701 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


