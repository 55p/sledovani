<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4541_1', '4502_1', '4509_1', '4510_1', '4519_1', '4520_1', '4533_1', '4526_1', '4403_1', '1721_1', '1726_1', '1729_1', '104345_1', '4366_1', '4369_1', '104342_1', '1732_1'];
$obeh[2] = ['24800_1', '24801_1', '4507_1', '4512_1', '4521_1', '4522_1'];
$obeh[3] = ['4503_1', '4550_1', '104506_1', '4511_1', '4514_1', '4525_1', '4544_1', '4419_1', '4416_1'];
$obeh[4] = ['1921_1', '4141_1', '4181_1', '4143_1', '4148_1', '4151_1'];
$obeh[5] = ['4144_1', '1725_1', '1730_1', '1926_1', '4418_1'];

$omezeni['104342_1'] = '6';
$omezeni['104345_1'] = '6';
$omezeni['104506_1'] = 'X';
$omezeni['1721_1'] = '6';
$omezeni['1725_1'] = 'X';
$omezeni['1726_1'] = '6';
$omezeni['1729_1'] = '6';
$omezeni['1730_1'] = 'X';
$omezeni['1732_1'] = '6';
$omezeni['1921_1'] = 'X';
$omezeni['1926_1'] = 'X';
$omezeni['24800_1'] = 'X';
$omezeni['24801_1'] = 'X';
$omezeni['4141_1'] = 'X5';
$omezeni['4143_1'] = 'X1234';
$omezeni['4144_1'] = 'X';
$omezeni['4148_1'] = 'X';
$omezeni['4151_1'] = 'X';
$omezeni['4181_1'] = 'X5';
$omezeni['4366_1'] = '6';
$omezeni['4369_1'] = '6';
$omezeni['4403_1'] = '6';
$omezeni['4416_1'] = 'T';
$omezeni['4418_1'] = 'T';
$omezeni['4419_1'] = 'X5';
$omezeni['4502_1'] = 'X';
$omezeni['4503_1'] = 'X';
$omezeni['4507_1'] = 'X';
$omezeni['4509_1'] = 'X';
$omezeni['4510_1'] = 'X';
$omezeni['4511_1'] = 'X';
$omezeni['4512_1'] = 'X';
$omezeni['4514_1'] = 'X';
$omezeni['4519_1'] = 'X';
$omezeni['4520_1'] = 'X';
$omezeni['4521_1'] = 'X';
$omezeni['4522_1'] = 'X';
$omezeni['4525_1'] = 'X';
$omezeni['4526_1'] = 'X';
$omezeni['4533_1'] = 'X';
$omezeni['4541_1'] = 'X';
$omezeni['4544_1'] = 'X';
$omezeni['4550_1'] = 'X';

$trasa['104342_1'] = ['Uherské Hradiště;16:18','Staré Město u Uherského Hradiště;16:24'];
$trasa['104345_1'] = ['Staré Město u Uherského Hradiště;15:36','Uherské Hradiště;15:42'];
$trasa['104506_1'] = ['Mikulov na Moravě;8:00','Znojmo;8:53'];
$trasa['1721_1'] = ['Brno hl.n.;7:35', 'Staré Město u Uherského Hradiště;9:28'];
$trasa['1725_1'] = ['Brno hl.n.;11:28', 'Staré Město u Uherského Hradiště;13:27'];
$trasa['1726_1'] = ['Staré Město u Uherského Hradiště;10:33', 'Brno hl.n.;12:33'];
$trasa['1729_1'] = ['Brno hl.n.;13:28', 'Staré Město u Uherského Hradiště;15:27'];
$trasa['1730_1'] = ['Staré Město u Uherského Hradiště;14:33', 'Brno hl.n.;16:33'];
$trasa['1732_1'] = ['Staré Město u Uherského Hradiště;16:33', 'Brno hl.n.;18:33'];
$trasa['1921_1'] = ['Hrušovany nad Jevišovkou;6:10', 'Brno hl.n.;7:25'];
$trasa['1926_1'] = ['Brno hl.n.;17:31', 'Hrušovany nad Jevišovkou;18:47'];
$trasa['24800_1'] = ['Znojmo;4:24', 'Moravské Budějovice;5:15'];
$trasa['24801_1'] = ['Moravské Budějovice;5:43', 'Znojmo;6:30'];
$trasa['4141_1'] = ['Brno hl.n.;11:49', 'Slavkov u Brna;12:20'];
$trasa['4143_1'] = ['Brno hl.n.;12:49', 'Nemotice;13:47'];
$trasa['4144_1'] = ['Kyjov;4:55', 'Brno hl.n.;6:20'];
$trasa['4148_1'] = ['Nemotice;14:11', 'Brno-Židenice;15:11'];
$trasa['4151_1'] = ['Brno hl.n.;16:48', 'Kyjov;18:07'];
$trasa['4181_1'] = ['Slavkov u Brna;13:25', 'Nemotice;13:51'];
$trasa['4366_1'] = ['Uherské Hradiště;15:44', 'Staré Město u Uherského Hradiště;15:50'];
$trasa['4369_1'] = ['Staré Město u Uherského Hradiště;16:04', 'Uherské Hradiště;16:10'];
$trasa['4403_1'] = ['Hrušovany nad Jevišovkou;5:10', 'Brno hl.n.;6:31'];
$trasa['4416_1'] = ['Brno hl.n.;19:54', 'Hrušovany nad Jevišovkou;21:12'];
$trasa['4418_1'] = ['Brno hl.n.;20:54', 'Hrušovany nad Jevišovkou;22:12'];
$trasa['4419_1'] = ['Hrušovany nad Jevišovkou;20:37', 'Brno hl.n.;22:04'];
$trasa['4502_1'] = ['Břeclav;5:54', 'Znojmo;7:22'];
$trasa['4503_1'] = ['Znojmo;4:58', 'Břeclav;6:23'];
$trasa['4507_1'] = ['Znojmo;6:58', 'Břeclav;8:27'];
$trasa['4509_1'] = ['Znojmo;9:03', 'Břeclav;10:24'];
$trasa['4510_1'] = ['Břeclav;11:32', 'Znojmo;12:53'];
$trasa['4511_1'] = ['Znojmo;11:03', 'Břeclav;12:26'];
$trasa['4512_1'] = ['Břeclav;12:32', 'Znojmo;13:53'];
$trasa['4514_1'] = ['Břeclav;13:32', 'Znojmo;14:53'];
$trasa['4519_1'] = ['Znojmo;13:55', 'Břeclav;15:17'];
$trasa['4520_1'] = ['Břeclav;16:32', 'Znojmo;17:53'];
$trasa['4521_1'] = ['Znojmo;14:55', 'Břeclav;16:26'];
$trasa['4522_1'] = ['Břeclav;17:32', 'Znojmo;18:53'];
$trasa['4525_1'] = ['Znojmo;15:55', 'Břeclav;17:17'];
$trasa['4526_1'] = ['Břeclav;21:35', 'Znojmo;22:48'];
$trasa['4533_1'] = ['Znojmo;19:03', 'Břeclav;20:23'];
$trasa['4541_1'] = ['Hrušovany nad Jevišovkou;4:34', 'Břeclav;5:25'];
$trasa['4544_1'] = ['Břeclav;18:32', 'Hrušovany nad Jevišovkou;19:20'];
$trasa['4550_1'] = ['Břeclav;6:49', 'Mikulov na Moravě;7:16'];
//sem patri stazene trasy


$poznamkaObehu['104345_1'] = ['pk', 'postrk'];

$poznamkaObehu['104342_1'] = ['př', 'přípřež'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts849 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


