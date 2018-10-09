<?php 
$zacatekPlatnosti = '23.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4191_1', '4140_1', '11591_1', '4103_1', '4110_1', '11596_1', '1729_1', '11515_1', '12253_1', '104303_1', '4350_1', '4350_2', '11542_1', '1724_1', '4119_1', '1732_1', '4155_1', '4145_1', '4150_1', '4153_1', '4177_1', '11559_1', '12273_1', '101735_1', '1735_1'];

$omezeni['1724_1'] = '25';
$omezeni['1729_1'] = 'X1234';
$omezeni['1732_1'] = 'X1234,6';
$omezeni['1735_1'] = '6';
$omezeni['4103_1'] = 'X';
$omezeni['4110_1'] = 'X';
$omezeni['4119_1'] = '6';
$omezeni['4140_1'] = 'X';
$omezeni['4145_1'] = 'X5';
$omezeni['4150_1'] = 'X5';
$omezeni['4153_1'] = 'X5';
$omezeni['4155_1'] = 'X1234';
$omezeni['4177_1'] = 'X5';
$omezeni['4191_1'] = 'X1';
$omezeni['4350_1'] = '6';
$omezeni['4350_2'] = 'T';
$omezeni['11515_1'] = 'T';
$omezeni['11542_1'] = '25';
$omezeni['11559_1'] = 'X5';
$omezeni['11591_1'] = 'X';
$omezeni['11596_1'] = 'X';
$omezeni['12253_1'] = 'T';
$omezeni['12273_1'] = 'X5';
$omezeni['101735_1'] = 'X5';
$omezeni['104303_1'] = 'T';

$trasa['1724_1'] = ['Veselí nad Moravou;9:01','Brno hl.n.;10:33'];
$trasa['1729_1'] = ['Brno hl.n.;13:28','Veselí nad Moravou;14:58'];
$trasa['1732_1'] = ['Veselí nad Moravou;17:01','Brno hl.n.;18:33'];
$trasa['1735_1'] = ['Brno hl.n.;19:28','Veselí nad Moravou;20:58'];
$trasa['4103_1'] = ['Slavkov u Brna;5:52','Veselí nad Moravou;7:05'];
$trasa['4110_1'] = ['Veselí nad Moravou;7:59','Slavkov u Brna;9:11'];
$trasa['4119_1'] = ['Brno hl.n.;14:14','Veselí nad Moravou;16:05'];
$trasa['4191_1'] = ['Brno-Horní Heršpice;2:51','Nesovice;3:36'];
$trasa['11515_1'] = ['Veselí nad Moravou;4:48','Uherské Hradiště;5:31'];
$trasa['11542_1'] = ['Staré Město u Uherského Hradiště;8:02','Veselí nad Moravou;8:35'];
$trasa['11559_1'] = ['Veselí nad Moravou;20:15','Uherské Hradiště;21:00'];
$trasa['11591_1'] = ['Brno hl.n.;4:57','Slavkov u Brna;5:34'];
$trasa['11596_1'] = ['Slavkov u Brna;9:25','Brno hl.n.;10:05'];
$trasa['101735_1'] = ['Kunovice;21:20','Bylnice;22:36'];
$trasa['104303_1'] = ['Kunovice;5:44','Bojkovice;6:25'];
$trasa['12253_1'] = ['Uherské Hradiště;5:39', 'Kunovice;5:42'];
$trasa['12273_1'] = ['Uherské Hradiště;21:13', 'Kunovice;21:16'];
$trasa['4140_1'] = ['Nesovice;3:52', 'Brno hl.n.;4:50'];
$trasa['4145_1'] = ['Brno hl.n.;13:48', 'Nemotice;14:52'];
$trasa['4150_1'] = ['Nemotice;15:06', 'Brno-Židenice;16:11'];
$trasa['4153_1'] = ['Brno hl.n.;17:48', 'Kyjov;19:05'];
$trasa['4155_1'] = ['Brno hl.n.;18:48', 'Nesovice;19:42'];
$trasa['4177_1'] = ['Kyjov;19:08', 'Veselí nad Moravou;19:36'];
$trasa['4350_1'] = ['Bylnice;6:25', 'Staré Město u Uherského Hradiště;7:52'];
$trasa['4350_2'] = ['Bojkovice město;7:03', 'Staré Město u Uherského Hradiště;7:52'];
//sem patri stazene trasy


$poznamkaObehu['4191_1'] = ['pk', 'postrk'];
$poznamkaObehu['11591_1'] = ['pk', 'postrk'];
$poznamkaObehu['4103_1'] = ['pk', 'postrk'];
$poznamkaObehu['1729_1'] = ['pk', 'postrk'];
$poznamkaObehu['4350_1'] = ['pk', 'postrk'];
$poznamkaObehu['4350_2'] = ['pk', 'postrk'];
$poznamkaObehu['4119_1'] = ['pk', 'postrk'];
$poznamkaObehu['4155_1'] = ['pk', 'postrk'];
$poznamkaObehu['4145_1'] = ['pk', 'postrk'];
$poznamkaObehu['4153_1'] = ['pk', 'postrk'];
$poznamkaObehu['4177_1'] = ['pk', 'postrk'];

$poznamkaObehu['11515_1'] = ['vlož', 'vložená'];
$poznamkaObehu['12253_1'] = ['vlož', 'vložená'];
$poznamkaObehu['104303_1'] = ['vlož', 'vložená'];

$typ['4191_1'] = 'Sv';
$typ['11591_1'] = 'Sv';
$typ['11596_1'] = 'Sv';
$typ['11515_1'] = 'Sv';
$typ['11542_1'] = 'Sv';
$typ['11559_1'] = 'Sv';

$poznamkaObehu['11515_1'] = ['','Sv vlož'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts843 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


