<?php 
$zacatekPlatnosti = '17.4.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4103_1', '2704_1', '12207_1', '4304_1', '1724_1', '1729_1', '1732_1', '4119_1', '4150_1', '4153_1', '4177_1', '4101_1', '4302_1', '4110_1', '1725_1', '4343_1', '4364_1', '4367_1', '4340_1', '1730_1', '1733_1', '4318_1'];

$omezeni['12207_1'] = 'X';
$omezeni['1724_1'] = 'X';
$omezeni['1725_1'] = '6';
$omezeni['1729_1'] = 'X1234';
$omezeni['1730_1'] = '6';
$omezeni['1732_1'] = 'X1234';
$omezeni['1733_1'] = '6';
$omezeni['2704_1'] = 'X';
$omezeni['4101_1'] = '25';
$omezeni['4103_1'] = 'X';
$omezeni['4110_1'] = '25';
$omezeni['4119_1'] = 'X5';
$omezeni['4150_1'] = 'X5';
$omezeni['4153_1'] = 'X5';
$omezeni['4177_1'] = 'X5';
$omezeni['4302_1'] = '25';
$omezeni['4304_1'] = 'X';
$omezeni['4318_1'] = '6';
$omezeni['4340_1'] = '6';
$omezeni['4343_1'] = '6';
$omezeni['4364_1'] = '6';
$omezeni['4367_1'] = '6';

$trasa['2704_1'] = ['Veselí nad Moravou;7:15','Strážnice;7:25'];
$trasa['4101_1'] = ['Veselí nad Moravou;6:14','Uherské Hradiště;6:34'];
$trasa['4110_1'] = ['Staré Město u Uherského Hradiště;7:31','Brno hl.n.;9:48'];
$trasa['4119_1'] = ['Brno hl.n.;14:14','Nesovice;15:12'];
$trasa['4150_1'] = ['Nesovice;15:21','Brno-Židenice;16:11'];
$trasa['4302_1'] = ['Uherské Hradiště;7:12','Staré Město u Uherského Hradiště;7:18'];
$trasa['4304_1'] = ['Uherské Hradiště;8:19','Staré Město u Uherského Hradiště;8:25'];
$trasa['4340_1'] = ['Uherské Hradiště;14:18','Staré Město u Uherského Hradiště;14:24'];
$trasa['4343_1'] = ['Staré Město u Uherského Hradiště;13:36','Uherské Hradiště;13:42'];
$trasa['4364_1'] = ['Uherské Hradiště;13:44','Staré Město u Uherského Hradiště;13:50'];
$trasa['4367_1'] = ['Staré Město u Uherského Hradiště;14:04','Uherské Hradiště;14:10'];
$trasa['12207_1'] = ['Strážnice;7:32', 'Uherské Hradiště;8:08'];
$trasa['1724_1'] = ['Staré Město u Uherského Hradiště;8:33', 'Brno hl.n.;10:33'];
$trasa['1725_1'] = ['Brno hl.n.;11:28', 'Staré Město u Uherského Hradiště;13:27'];
$trasa['1729_1'] = ['Brno hl.n.;13:28', 'Staré Město u Uherského Hradiště;15:27'];
$trasa['1730_1'] = ['Staré Město u Uherského Hradiště;14:33', 'Brno hl.n.;16:33'];
$trasa['1732_1'] = ['Staré Město u Uherského Hradiště;16:33', 'Brno hl.n.;18:33'];
$trasa['1733_1'] = ['Brno hl.n.;17:30', 'Bylnice;20:36'];
$trasa['4103_1'] = ['Brno hl.n.;5:12', 'Veselí nad Moravou;7:05'];
$trasa['4153_1'] = ['Brno hl.n.;17:48', 'Kyjov;19:05'];
$trasa['4177_1'] = ['Kyjov;19:08', 'Veselí nad Moravou;19:36'];
$trasa['4318_1'] = ['Bylnice;20:55', 'Veselí nad Moravou;22:40'];
//sem patri stazene trasy


$poznamkaObehu['4103_1'] = ['pk', 'postrk'];
$poznamkaObehu['12207_1'] = ['pk', 'postrk'];
$poznamkaObehu['4304_1'] = ['pk', 'postrk'];
$poznamkaObehu['1729_1'] = ['pk', 'postrk'];
$poznamkaObehu['4119_1'] = ['pk', 'postrk'];
$poznamkaObehu['4153_1'] = ['pk', 'postrk'];
$poznamkaObehu['4177_1'] = ['pk', 'postrk'];
$poznamkaObehu['4101_1'] = ['pk', 'postrk'];
$poznamkaObehu['4302_1'] = ['pk', 'postrk'];
$poznamkaObehu['1725_1'] = ['pk', 'postrk'];
$poznamkaObehu['4364_1'] = ['pk', 'postrk'];
$poznamkaObehu['1733_1'] = ['pk', 'postrk'];

$poznamkaObehu['2704_1'] = ['vlož', 'vložená'];
$poznamkaObehu['4150_1'] = ['vlož', 'vložená'];
$poznamkaObehu['4343_1'] = ['vlož', 'vložená'];
$poznamkaObehu['4340_1'] = ['vlož', 'vložená'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts843 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


