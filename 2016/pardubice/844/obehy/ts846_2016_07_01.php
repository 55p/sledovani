<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5355_1', '5346_1', '5311_1', '5314_1', '5315_1', '5316_1', '6254_1', '6223_1');

$omezeni['5311_1'] = '5';
$omezeni['5314_1'] = '5';
$omezeni['5315_1'] = '5';
$omezeni['5316_1'] = '5';
$omezeni['5346_1'] = '5';
$omezeni['5355_1'] = '5';
$omezeni['6223_1'] = '6,0507';
$omezeni['6254_1'] = '5,0407';

$trasa['5311_1'] = array('Pardubice hl.n.;16:27', 'Havlíčkův Brod;18:48');
$trasa['5314_1'] = array('Havlíčkův Brod;16:10', 'Pardubice hl.n.;18:19');
$trasa['5315_1'] = array('Pardubice-Rosice n.L.;19:07', 'Havlíčkův Brod;21:00');
$trasa['5316_1'] = array('Havlíčkův Brod;18:07', 'Pardubice hl.n.;20:15');
$trasa['5346_1'] = array('Hlinsko v Čechách;14:20', 'Pardubice hl.n.;15:40');
$trasa['5355_1'] = array('Pardubice hl.n.;12:27', 'Slatiňany;12:53');
$trasa['6223_1'] = array('Hradec Králové hl.n.;4:33', 'Pardubice hl.n.;4:57');
$trasa['6254_1'] = array('Pardubice hl.n.;21:32', 'Hradec Králové hl.n.;21:55');

$poznamkaObehu['5311_1'] = array('pk', 'postrk');
$poznamkaObehu['5315_1'] = array('pk', 'postrk');
$poznamkaObehu['5346_1'] = array('vlož', 'vložená');
$poznamkaObehu['5316_1'] = array('vlož', 'vložená');


@$ts846 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>