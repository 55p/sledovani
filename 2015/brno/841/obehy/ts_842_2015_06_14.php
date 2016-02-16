<?php
$obeh[1] = array('1721_1', '4334_1', '1923_1', '1724_1', '12259_1', '12256_1', '1723_1', '1726_1', '12261_1', '12258_1', '1729_1', '1728_1', '4149_1', '101732_1', '4154_1', '1735_1', '4428_1');

$omezeni['12256_1'] = 'T';
$omezeni['12258_1'] = 'X';
$omezeni['12259_1'] = 'T';
$omezeni['12261_1'] = 'X';
$omezeni['1721_1'] = 'T';
$omezeni['1723_1'] = 'X';
$omezeni['1724_1'] = '6';
$omezeni['1726_1'] = 'T';
$omezeni['1728_1'] = 'X';
$omezeni['1729_1'] = 'T';
$omezeni['101732_1'] = 'T';
$omezeni['1735_1'] = 'X5';
$omezeni['1923_1'] = 'X';
$omezeni['4149_1'] = 'X';
$omezeni['4154_1'] = 'X';
$omezeni['4334_1'] = '6';
$omezeni['4428_1'] = 'X1, X2, X3, X4, T';

$trasa['12256_1'] = array('Uherské Hradiště;10:20', 'Staré Město u Uherského Hradiště;10:26');
$trasa['12258_1'] = array('Uherské Hradiště;12:05', 'Staré Město u Uherského Hradiště;12:11');
$trasa['12259_1'] = array('Staré Město u Uherského Hradiště;9:45', 'Uherské Hradiště;9:51');
$trasa['12261_1'] = array('Staré Město u Uherského Hradiště;11:45', 'Uherské Hradiště;11:51');
$trasa['1721_1'] = array('Brno hl.n.;7:35', 'Staré Město u Uherského Hradiště;9:27');
$trasa['1723_1'] = array('Brno hl.n.;9:28', 'Staré Město u Uherského Hradiště;11:27');
$trasa['1724_1'] = array('Staré Město u Uherského Hradiště;8:35', 'Brno hl.n.;10:33');
$trasa['1726_1'] = array('Staré Město u Uherského Hradiště;10:35', 'Brno hl.n.;12:33');
$trasa['1728_1'] = array('Staré Město u Uherského Hradiště;12:35', 'Brno hl.n.;14:33');
$trasa['1729_1'] = array('Brno hl.n.;13:28', 'Staré Město u Uherského Hradiště;15:27');
$trasa['101732_1'] = array('Staré Město u Uherského Hradiště;16:35', 'Brno hl.n.;18:33');
$trasa['1735_1'] = array('Brno hl.n.;19:28', 'Bylnice;22:41');
$trasa['1923_1'] = array('Rakšice;7:32', 'Brno hl.n.;8:25');
$trasa['4149_1'] = array('Brno-Židenice;15:56', 'Nemotice;16:53');
$trasa['4154_1'] = array('Nemotice;17:11', 'Brno-Židenice;18:11');
$trasa['4334_1'] = array('Bylnice;6:35', 'Staré Město u Uherského Hradiště;8:00');
$trasa['4428_1'] = array('Brno hl.n.;21:54', 'Rakšice;22:45');

$poznamkaObehu['101732_1'] = array('pk','postrk');

@$ts842 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, '31.7.2015 23:59:59')); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>