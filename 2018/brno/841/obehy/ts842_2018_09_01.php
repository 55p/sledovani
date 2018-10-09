<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4101_1', '12206_1', '12205_1', '4361_1', '12205_2', '4337_1', '4390_1', '4352_1', '4307_1', '4308_1', '4309_1', '4310_1', '4311_1', '4312_1', '4313_1', '4314_1', '4315_1', '4316_1', '1738_1', '4366_1', '4369_1', '4368_1', '12257_1', '1734_1', '1737_1', '1738_2'];

$omezeni['1734_1'] = 'X5';
$omezeni['1737_1'] = 'X5';
$omezeni['1738_1'] = 'X1234';
$omezeni['1738_2'] = 'T';
$omezeni['4101_1'] = 'X';
$omezeni['4313_1'] = 'X1234,25';
$omezeni['4314_1'] = 'X1234,25';
$omezeni['4315_1'] = 'X1234,25';
$omezeni['4316_1'] = 'X1234,6';
$omezeni['4337_1'] = '25';
$omezeni['4352_1'] = 'T';
$omezeni['4361_1'] = 'X';
$omezeni['4366_1'] = 'X5';
$omezeni['4368_1'] = 'X5';
$omezeni['4369_1'] = 'X5';
$omezeni['4390_1'] = '6';
$omezeni['12205_1'] = 'X';
$omezeni['12205_2'] = '25';
$omezeni['12206_1'] = 'X';
$omezeni['12257_1'] = 'X5';

$trasa['4352_1'] = ['Bojkovice;8:36','Uherský Brod;8:54'];
$trasa['4390_1'] = ['Bojkovice;8:36','Uherský Brod;8:54'];
$trasa['12205_1'] = ['Veselí nad Moravou;7:16', 'Staré Město u Uherského Hradiště;7:52'];
$trasa['12205_2'] = ['Veselí nad Moravou;7:16', 'Uherské Hradiště;7:36'];
$trasa['12206_1'] = ['Uherské Hradiště;6:46', 'Veselí nad Moravou;7:07'];
$trasa['12257_1'] = ['Staré Město u Uherského Hradiště;18:06', 'Uherské Hradiště;18:12'];
$trasa['1734_1'] = ['Uherské Hradiště;18:40', 'Brno hl.n.;20:33'];
$trasa['1737_1'] = ['Brno hl.n.;21:28', 'Veselí nad Moravou;22:58'];
$trasa['1738_1'] = ['Veselí nad Moravou;21:01', 'Brno hl.n.;22:33'];
$trasa['1738_2'] = ['Bylnice;19:25', 'Brno hl.n.;22:33'];
$trasa['4101_1'] = ['Brno hl.n.;4:27', 'Uherské Hradiště;6:34'];
$trasa['4307_1'] = ['Uherský Brod;9:05', 'Bylnice;9:59'];
$trasa['4308_1'] = ['Bylnice;10:05', 'Uherský Brod;10:59'];
$trasa['4309_1'] = ['Uherský Brod;11:05', 'Bylnice;11:59'];
$trasa['4310_1'] = ['Bylnice;12:05', 'Uherský Brod;12:59'];
$trasa['4311_1'] = ['Uherský Brod;13:05', 'Bylnice;13:59'];
$trasa['4312_1'] = ['Bylnice;14:05', 'Uherský Brod;14:59'];
$trasa['4313_1'] = ['Uherský Brod;15:05', 'Bylnice;15:59'];
$trasa['4314_1'] = ['Bylnice;16:05', 'Uherský Brod;16:59'];
$trasa['4315_1'] = ['Uherský Brod;17:05', 'Bylnice;17:59'];
$trasa['4316_1'] = ['Bylnice;18:05', 'Veselí nad Moravou;19:43'];
$trasa['4337_1'] = ['Uherské Hradiště;7:46', 'Bojkovice;8:30'];
$trasa['4361_1'] = ['Staré Město u Uherského Hradiště;8:06', 'Uherský Brod;8:41'];
$trasa['4366_1'] = ['Uherský Brod;15:20', 'Staré Město u Uherského Hradiště;15:50'];
$trasa['4368_1'] = ['Uherský Brod;17:20', 'Staré Město u Uherského Hradiště;17:50'];
$trasa['4369_1'] = ['Staré Město u Uherského Hradiště;16:04', 'Uherský Brod;16:34'];
//sem patri stazene trasy

$poznamkaObehu['4352_1'] = [' zadní', 'zadní část'];
$poznamkaObehu['12206_1'] = [' zadní', 'zadní část'];



$typ['4390_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts842 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


