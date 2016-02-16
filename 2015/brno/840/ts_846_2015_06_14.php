<?php
$obeh[1] = array('4141_1', '4101_1', '4140_1', '12206_1', '4105_1', '12209_1', '4307_1', '4308_1', '4375_1', '4311_1', '4312_1', '4376_1', '12265_1', '12262_1', '4315_1', '4316_1', '12272_1', '1738_1', '112272_1', '1738_2', '12269_1', '12268_1', '12279_1', '104318_1');

$omezeni['104318_1'] = '6';
$omezeni['112272_1'] = '6';
$omezeni['12206_1'] = 'X';
$omezeni['12209_1'] = 'X, 6';
$omezeni['12262_1'] = 'X';
$omezeni['12265_1'] = 'X';
$omezeni['12268_1'] = '6';
$omezeni['12269_1'] = '6';
$omezeni['12272_1'] = 'X';
$omezeni['12279_1'] = '6';
$omezeni['1738_1'] = 'T';
$omezeni['1738_2'] = 'X';
$omezeni['4101_1'] = 'X';
$omezeni['4105_1'] = '6';
$omezeni['4140_1'] = '6';
$omezeni['4141_1'] = '6';
$omezeni['4311_1'] = 'X';
$omezeni['4312_1'] = 'X';
$omezeni['4316_1'] = 'X, 6';
$omezeni['4375_1'] = '25';
$omezeni['4376_1'] = '25';

$trasa['12206_1'] = array('Uherské Hradiště;6:45', 'Veselí nad Moravou;7:05');
$trasa['12209_1'] = array('Veselí nad Moravou;7:15', 'Staré Město u Uherského Hradiště;7:51');
$trasa['12262_1'] = array('Uherské Hradiště;15:54', 'Staré Město u Uherského Hradiště;16:00');
$trasa['12265_1'] = array('Staré Město u Uherského Hradiště;15:45', 'Uherské Hradiště;15:51');
$trasa['12268_1'] = array('Kunovice;21:24', 'Staré Město u Uherského Hradiště;21:33');
$trasa['12269_1'] = array('Uherské Hradiště;21:18', 'Kunovice;21:21');
$trasa['12272_1'] = array('Staré Město u Uherského Hradiště;20:23', 'Veselí nad Moravou;20:49');
$trasa['12279_1'] = array('Staré Město u Uherského Hradiště;21:35', 'Uherské Hradiště;21:41');
$trasa['1738_1'] = array('Bylnice;19:25', 'Brno hl.n.;22:33');
$trasa['1738_2'] = array('Veselí nad Moravou;21:01', 'Brno hl.n.;22:33');
$trasa['4101_1'] = array('Brno hl.n.;4:25', 'Uherské Hradiště;6:34');
$trasa['4105_1'] = array('Brno hl.n.;5:25', 'Veselí nad Moravou;7:07');
$trasa['4140_1'] = array('Nesovice;3:52', 'Brno hl.n.;4:50');
$trasa['4141_1'] = array('Brno hl.n.;0:35', 'Nesovice;1:23');
$trasa['4307_1'] = array('Staré Město u Uherského Hradiště;8:23', 'Bylnice;9:51');
$trasa['4308_1'] = array('Bylnice;10:10', 'Staré Město u Uherského Hradiště;11:36');
$trasa['4311_1'] = array('Staré Město u Uherského Hradiště;12:23', 'Bylnice;13:57');
$trasa['4312_1'] = array('Bylnice;14:00', 'Staré Město u Uherského Hradiště;15:36');
$trasa['4315_1'] = array('Staré Město u Uherského Hradiště;16:23', 'Bylnice;17:54');
$trasa['4316_1'] = array('Bylnice;18:00', 'Staré Město u Uherského Hradiště;19:36');
$trasa['4375_1'] = array('Staré Město u Uherského Hradiště;12:23', 'Bylnice;13:51');
$trasa['4376_1'] = array('Bylnice;14:10', 'Staré Město u Uherského Hradiště;15:36');

$poznamkaObehu['104318_1'] = array('pk', 'postrk');
$poznamkaObehu['112272_1'] = array('pk', 'postrk');

$trasa['112272_1'] = array('Staré Město u Uherského Hradiště;20:23','Uherské Hradiště;20:29');
$trasa['104318_1'] = array('Uherské Hradiště;22:15', 'Veselí nad Moravou;22:34');

@$ts846 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, null)); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>