<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4160_1', '4146_1', '1923_1', '1725_1', '4313_2', '4314_2', '101734_1', '1734_1', '1737_1', '4428_1');

$omezeni['101734_1'] = 'T';
$omezeni['1734_1'] = 'X6';
$omezeni['1737_1'] = 'z25';
$omezeni['1923_1'] = 'X';
$omezeni['4146_1'] = '25';
$omezeni['4160_1'] = '25';
$omezeni['4428_1'] = 'zX';


$poznamkaObehu['101734_1'] = array('pk', 'postrk');

$trasa['12270_1'] = array('Kunovice;15:09', 'Uherské Hradiště;15:14');
$trasa['1725_1'] = array('Brno hl.n.;11:28', 'Staré Město u Uherského Hradiště;13:27');
$trasa['1734'] = array('Staré Město u Uherského Hradiště;18:35', 'Brno hl.n.;20:33');
$trasa['1737_1'] = array('Brno hl.n.;21:28', 'Veselí nad Moravou;22:58');
$trasa['1923_1'] = array('Rakšice;7:32', 'Brno hl.n.;8:25');
$trasa['4146_1'] = array('Kyjov;5:25', 'Brno hl.n.;6:50');
$trasa['4160_1'] = array('Veselí nad Moravou;4:55', 'Kyjov;5:21');
$trasa['4313_1'] = array('Staré Město u Uherského Hradiště;14:05', 'Kunovice;14:34');
$trasa['4313_2'] = array('Staré Město u Uherského Hradiště;14:05', 'Bylnice;15:52');
$trasa['4314_1'] = array('Bylnice;16:00', 'Staré Město u Uherského Hradiště;17:51');
$trasa['4314_2'] = array('Bylnice;16:00', 'Staré Město u Uherského Hradiště;17:51');
$trasa['4355_1'] = array('Uherské Hradiště;15:21', 'Bojkovice město;16:03');
$trasa['4428_1'] = array('Brno hl.n.;21:54', 'Rakšice;22:45');


@$ts842 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>