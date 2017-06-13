<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['4023_1', '11404_1', '11405_1', '11410_1'];

$omezeni['11404_1'] = 'X';
$omezeni['11405_1'] = 'X';
$omezeni['11410_1'] = 'X';
$omezeni['4023_1'] = 'X';

$trasa['11404_1'] = ['Sokolnice-Telnice;5:35', 'Brno hl.n.;5:55'];
$trasa['11405_1'] = ['Brno hl.n.;6:07', 'Křenovice horní n.;6:33'];
$trasa['11410_1'] = ['Křenovice horní n.;6:54', 'Brno hl.n.;7:26'];
$trasa['4023_1'] = ['Brno hl.n.;4:35', 'Sokolnice-Telnice;4:51'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts502 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


