<?php 
$zacatekPlatnosti = '23.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4302_1', '11512_1', '1724_1', '4145_1', '4150_1', '4153_1', '4182_1', '4147_1', '4152_1', '4155_1', '4158_1'];
$obeh[2] = ['4104_1', '11599_1', '4115_1', '1728_1', '4149_1', '4154_1', '4117_1', '1730_1', '1735_1'];
$obeh[3] = ['4108_1', '1723_1', '4116_1', '4121_1', '4170_1', '11551_1', '4172_1', '11557_1', '12273_1', '101735_1', '1734_1', '1737_1', '11556_1', '11547_1', '4110_1'];

$omezeni['1723_1'] = 'X';
$omezeni['1724_1'] = 'X';
$omezeni['1728_1'] = 'X';
$omezeni['1730_1'] = 'T';
$omezeni['1734_1'] = 'X5';
$omezeni['1735_1'] = 'XT';
$omezeni['1737_1'] = 'X5';
$omezeni['4104_1'] = 'X';
$omezeni['4108_1'] = 'X';
$omezeni['4110_1'] = '6';
$omezeni['4115_1'] = 'X';
$omezeni['4116_1'] = 'X';
$omezeni['4117_1'] = 'T';
$omezeni['4121_1'] = 'X';
$omezeni['4145_1'] = 'X1234';
$omezeni['4147_1'] = 'X5';
$omezeni['4149_1'] = 'X';
$omezeni['4150_1'] = 'X1234';
$omezeni['4152_1'] = 'X5';
$omezeni['4153_1'] = 'X1234';
$omezeni['4154_1'] = 'X';
$omezeni['4155_1'] = 'X5';
$omezeni['4158_1'] = 'X5';
$omezeni['4170_1'] = 'zX';
$omezeni['4172_1'] = 'zX';
$omezeni['4182_1'] = 'X1234';
$omezeni['4302_1'] = 'X';
$omezeni['11512_1'] = 'X';
$omezeni['11547_1'] = '6';
$omezeni['11551_1'] = 'zX';
$omezeni['11556_1'] = '6';
$omezeni['11557_1'] = 'zX';
$omezeni['11599_1'] = 'X';
$omezeni['12273_1'] = 'zX';
$omezeni['101735_1'] = 'zX';

$trasa['1723_1'] = ['Brno hl.n.;9:28','Veselí nad Moravou;10:58'];
$trasa['1724_1'] = ['Veselí nad Moravou;9:01','Brno hl.n.;10:33'];
$trasa['1728_1'] = ['Veselí nad Moravou;13:01','Brno hl.n.;14:33'];
$trasa['1730_1'] = ['Veselí nad Moravou;15:01','Brno hl.n.;16:33'];
$trasa['1734_1'] = ['Veselí nad Moravou;19:01','Brno hl.n.;20:33'];
$trasa['1735_1'] = ['Brno hl.n.;19:28','Veselí nad Moravou;20:58'];
$trasa['4110_1'] = ['Veselí nad Moravou;7:59','Brno hl.n.;9:48'];
$trasa['4115_1'] = ['Slavkov u Brna;10:51','Veselí nad Moravou;12:05'];
$trasa['4116_1'] = ['Veselí nad Moravou;13:55','Slavkov u Brna;15:11'];
$trasa['4117_1'] = ['Brno hl.n.;12:15','Veselí nad Moravou;14:05'];
$trasa['4121_1'] = ['Slavkov u Brna;16:51','Veselí nad Moravou;18:05'];
$trasa['4170_1'] = ['Veselí nad Moravou;18:25','Bzenec;18:34'];
$trasa['4172_1'] = ['Veselí nad Moravou;20:05','Bzenec;20:14'];
$trasa['11512_1'] = ['Staré Město u Uherského Hradiště;7:41','Veselí nad Moravou;8:26'];
$trasa['11547_1'] = ['Bzenec;7:15','Veselí nad Moravou;7:24'];
$trasa['11551_1'] = ['Bzenec;18:50','Veselí nad Moravou;19:00'];
$trasa['11556_1'] = ['Veselí nad Moravou;7:01','Bzenec;7:10'];
$trasa['11557_1'] = ['Bzenec;20:20','Uherské Hradiště;21:06'];
$trasa['11599_1'] = ['Brno hl.n.;9:45','Slavkov u Brna;10:14'];
$trasa['101735_1'] = ['Kunovice;21:20','Bylnice;22:36'];
$trasa['12273_1'] = ['Uherské Hradiště;21:13', 'Kunovice;21:16'];
$trasa['1737_1'] = ['Brno hl.n.;21:28', 'Veselí nad Moravou;22:58'];
$trasa['4104_1'] = ['Nesovice;5:52', 'Brno hl.n.;6:50'];
$trasa['4108_1'] = ['Veselí nad Moravou;6:23', 'Brno hl.n.;8:20'];
$trasa['4145_1'] = ['Brno hl.n.;13:48', 'Nemotice;14:52'];
$trasa['4147_1'] = ['Brno hl.n.;14:47', 'Nemotice;15:52'];
$trasa['4149_1'] = ['Brno hl.n.;15:48', 'Nemotice;16:52'];
$trasa['4150_1'] = ['Nemotice;15:06', 'Brno-Židenice;16:11'];
$trasa['4152_1'] = ['Nemotice;16:06', 'Brno-Židenice;17:11'];
$trasa['4153_1'] = ['Brno hl.n.;17:48', 'Nemotice;18:52'];
$trasa['4154_1'] = ['Nemotice;17:06', 'Brno-Židenice;18:11'];
$trasa['4155_1'] = ['Brno hl.n.;18:48', 'Nesovice;19:42'];
$trasa['4158_1'] = ['Nesovice;20:51', 'Brno hl.n.;21:48'];
$trasa['4182_1'] = ['Nemotice;19:11', 'Nesovice;19:21'];
$trasa['4302_1'] = ['Bylnice;5:45', 'Staré Město u Uherského Hradiště;7:18'];
//sem patri stazene trasy


$poznamkaObehu['4170_1'] = ['pk', 'postrk'];
$poznamkaObehu['4172_1'] = ['pk', 'postrk'];


$typ['11512_1'] = 'Sv';
$typ['11599_1'] = 'Sv';
$typ['11557_1'] = 'Sv';
$typ['11547_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts850 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


