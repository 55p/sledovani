<?php 
$zacatekPlatnosti = '1.8.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('12203_1', '12204_1', '4106_1', '1720_1', '4109_1', '4107_1', '4107_2', '4112_1', '4115_1', '4116_1', '4119_1', '4120_1', '4123_1');
$obeh[2] = array('4160_1', '4146_1', '4108_1', '1735_1', '4334_1', '1724_1', '4157_1', '4179_1');
$obeh[3] = array('4101_1', '4302_1', '4110_1', '4111_1', '4113_1', '4114_1', '4117_1', '4117_2', '12213_1', '4118_1', '4121_1', '12214_1', '4316_1', '12272_1');

$omezeni['12203_1'] = '6';
$omezeni['12204_1'] = '6';
$omezeni['12213_1'] = '25';
$omezeni['12214_1'] = 'X,6';
$omezeni['12272_1'] = 'T';
$omezeni['1720_1'] = '25';
$omezeni['1724_1'] = '6';
$omezeni['1735_1'] = 'X,T';
$omezeni['4101_1'] = '25';
$omezeni['4106_1'] = 'X';
$omezeni['4107_1'] = 'X';
$omezeni['4107_2'] = '25';
$omezeni['4108_1'] = 'X';
$omezeni['4109_1'] = '25';
$omezeni['4111_1'] = 'X';
$omezeni['4113_1'] = '25';
$omezeni['4117_1'] = 'X';
$omezeni['4117_2'] = '25';
$omezeni['4157_1'] = '6';
$omezeni['4160_1'] = 'T';
$omezeni['4146_1'] = 'T';
$omezeni['4179_1'] = '6';
$omezeni['4302_1'] = 'X';
$omezeni['4316_1'] = 'T';
$omezeni['4334_1'] = '6';

$trasa['12203_1'] = array('Veselí nad Moravou;5:15', 'Uherské Hradiště;5:33');
$trasa['12204_1'] = array('Uherské Hradiště;5:42', 'Veselí nad Moravou;5:59');
$trasa['12213_1'] = array('Veselí nad Moravou;14:07', 'Uherské Hradiště;14:26');
$trasa['12214_1'] = array('Staré Město u Uherského Hradiště;18:50', 'Veselí nad Moravou;19:44');
$trasa['12272_1'] = array('Staré Město u Uherského Hradiště;20:23', 'Veselí nad Moravou;20:49');
$trasa['1720_1'] = array('Veselí nad Moravou;6:01', 'Nesovice;6:50');
$trasa['1724_1'] = array('Staré Město u Uherského Hradiště;8:35', 'Nesovice;9:50');
$trasa['1735_1'] = array('Nesovice;20:10', 'Bylnice;22:41');
$trasa['4101_1'] = array('Kyjov;5:40', 'Veselí nad Moravou;6:07');
$trasa['4106_1'] = array('Veselí nad Moravou;5:25', 'Nesovice;6:21');
$trasa['4107_1'] = array('Nesovice;7:12', 'Uherské Hradiště;8:26');
$trasa['4107_2'] = array('Veselí nad Moravou;8:07', 'Uherské Hradiště;8:26');
$trasa['4108_1'] = array('Veselí nad Moravou;6:23', 'Nesovice;7:21');
$trasa['4109_1'] = array('Nesovice;7:12', 'Veselí nad Moravou;8:05');
$trasa['4110_1'] = array('Staré Město u Uherského Hradiště;7:32', 'Nesovice;8:50');
$trasa['4111_1'] = array('Nesovice;9:12', 'Uherské Hradiště;10:26');
$trasa['4112_1'] = array('Uherské Hradiště;9:34', 'Nesovice;10:50');
$trasa['4113_1'] = array('Nesovice;9:12', 'Uherské Hradiště;10:26');
$trasa['4114_1'] = array('Uherské Hradiště;11:34', 'Nesovice;12:50');
$trasa['4115_1'] = array('Nesovice;11:12', 'Uherské Hradiště;12:26');
$trasa['4116_1'] = array('Uherské Hradiště;13:34', 'Nesovice;14:50');
$trasa['4117_1'] = array('Nesovice;13:12', 'Uherské Hradiště;14:39');
$trasa['4117_2'] = array('Nesovice;13:12', 'Veselí nad Moravou;14:05');
$trasa['4118_1'] = array('Uherské Hradiště;15:34', 'Nesovice;16:50');
$trasa['4119_1'] = array('Nesovice;15:12', 'Uherské Hradiště;16:26');
$trasa['4120_1'] = array('Uherské Hradiště;17:34', 'Nesovice;18:50');
$trasa['4121_1'] = array('Nesovice;17:12', 'Staré Město u Uherského Hradiště;18:33');
$trasa['4123_1'] = array('Nesovice;19:12', 'Veselí nad Moravou;20:05');
$trasa['4157_1'] = array('Nesovice;21:12', 'Kyjov;21:37');
$trasa['4160_1'] = array('Veselí nad Moravou;4:55', 'Kyjov;5:22');
$trasa['4179_1'] = array('Kyjov;21:39', 'Veselí nad Moravou;22:05');
$trasa['4302_1'] = array('Bylnice;5:45', 'Staré Město u Uherského Hradiště;7:21');
$trasa['4316_1'] = array('Kunovice;19:26', 'Staré Město u Uherského Hradiště;19:36');
$trasa['4334_1'] = array('Bylnice;6:35', 'Staré Město u Uherského Hradiště;8:00');
$trasa['4146_1'] = array('Kyjov;5:25', 'Nesovice;5:51');

$poznamkaObehu[101722] = array('pk', 'postrk v úseku Uherské Hradiště - Veselí nad Moravou');
$poznamkaObehu[101724] = array('pk', 'postrk');
$poznamkaObehu[104314] = array('pk', 'postrk');
$poznamkaObehu[12255] = array('pk', 'postrk');
$poznamkaObehu[4303] = array('pk', 'postrk');
$poznamkaObehu[4806] = array('pk', 'postrk');
$poznamkaObehu[4808] = array('pk', 'postrk');
$poznamkaObehu[4810] = array('pk', 'postrk');
$poznamkaObehu[4824] = array('pk', 'postrk');
$poznamkaObehu[4826] = array('pk', 'postrk');
$poznamkaObehu[4832] = array('pk', 'postrk');
$poznamkaObehu[4834] = array('pk', 'postrk');
$poznamkaObehu[4840] = array('pk', 'postrk');
$poznamkaObehu[4844] = array('pk', 'postrk');
$poznamkaObehu[4848] = array('pk', 'postrk');
$poznamkaObehu[4850] = array('pk', 'postrk');
$poznamkaObehu[4876] = array('pk', 'postrk');

@$ts848 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);
unset($poznamkaObehu);


 ?>