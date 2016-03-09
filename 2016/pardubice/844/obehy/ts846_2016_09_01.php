<?php 
$zacatekPlatnosti = '1.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('105309_1', '5346_1', '5346_2', '5311_1', '5314_1', '5315_1', '5316_1', '6254_1', '6223_1');

$omezeni['105309_1'] = '5,2510,1611';
$omezeni['5311_1'] = '5,2710,1611,-2810,-1811';
$omezeni['5314_1'] = '5,2710,1611,-2810,-1811';
$omezeni['5315_1'] = '5,2710,1611,-2810,-1811';
$omezeni['5316_1'] = '5,2710,1611,-2810,-1811';
$omezeni['5346_1'] = '5,1611,2810,-1811';
$omezeni['5346_2'] = '2510';
$omezeni['6223_1'] = '6,2809,2810, 1711,-2910';
$omezeni['6254_1'] = '5,2709,2710,1611,-2810';


$poznamkaObehu['105309_1'] = array('pk', 'postrk');
$poznamkaObehu['5311_1'] = array('pk', 'postrk');
$poznamkaObehu['5315_1'] = array('pk', 'postrk');


$poznamkaObehu['5346_1'] = array('vlož', 'vložená');
$poznamkaObehu['5316_1'] = array('vlož', 'vložená');

$trasa['5311_1'] = array('Pardubice hl.n.;16:27', 'Havlíčkův Brod;18:48');
$trasa['5314_1'] = array('Havlíčkův Brod;16:10', 'Pardubice hl.n.;18:19');
$trasa['5315_1'] = array('Pardubice-Rosice n.L.;19:07', 'Havlíčkův Brod;21:00');
$trasa['5316_1'] = array('Havlíčkův Brod;18:07', 'Pardubice hl.n.;20:15');
$trasa['5346_1'] = array('Hlinsko v Čechách;14:20', 'Pardubice hl.n.;15:40');
$trasa['5346_2'] = array('Hlinsko v Čechách;14:20', 'Pardubice hl.n.;15:40');
$trasa['6223_1'] = array('Hradec Králové hl.n.;4:33', 'Pardubice hl.n.;4:57');
$trasa['6254_1'] = array('Pardubice hl.n.;21:32', 'Hradec Králové hl.n.;21:55');


@$ts846 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>