<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4560_1', '4505_1', '4506_1', '4511_1', '4510_1', '4519_1', '4516_1', '4527_1', '4529_1', '4522_1', '104533_1', '4526_1', '1822_1', '1823_1'];
$obeh[2] = ['4503_1', '4502_1', '4509_1', '4508_1', '4515_1', '4514_1', '4525_1', '4520_1', '4533_1', '4524_1', '4563_1', '1822_2', '1823_2', '4418_1'];
$obeh[3] = ['1921_1', '4141_1', '4181_1', '4143_1', '4148_1', '4151_1', '4403_1', '1721_1', '1726_1'];
$obeh[4] = ['4144_1', '1725_1', '1730_1', '1926_1', '4419_1', '4416_1'];

$omezeni['1721_1'] = '6';
$omezeni['1725_1'] = 'X';
$omezeni['1726_1'] = '6';
$omezeni['1730_1'] = 'X';
$omezeni['1822_1'] = '6';
$omezeni['1822_2'] = 'T';
$omezeni['1823_1'] = '6';
$omezeni['1823_2'] = 'T';
$omezeni['1921_1'] = 'X';
$omezeni['1926_1'] = 'X';
$omezeni['4141_1'] = 'X5';
$omezeni['4143_1'] = 'X1234';
$omezeni['4144_1'] = 'X';
$omezeni['4148_1'] = 'X';
$omezeni['4151_1'] = 'X';
$omezeni['4181_1'] = 'X5';
$omezeni['4403_1'] = '6';
$omezeni['4416_1'] = 'T';
$omezeni['4418_1'] = 'T';
$omezeni['4419_1'] = 'X5';
$omezeni['4502_1'] = 'X';
$omezeni['4503_1'] = 'X';
$omezeni['4505_1'] = 'X';
$omezeni['4506_1'] = 'X';
$omezeni['4508_1'] = 'X';
$omezeni['4509_1'] = 'X';
$omezeni['4510_1'] = 'X';
$omezeni['4511_1'] = 'X';
$omezeni['4514_1'] = 'X';
$omezeni['4515_1'] = 'X';
$omezeni['4516_1'] = 'X';
$omezeni['4519_1'] = 'X';
$omezeni['4520_1'] = 'X';
$omezeni['4522_1'] = 'XT';
$omezeni['4524_1'] = 'X';
$omezeni['4525_1'] = 'X';
$omezeni['4526_1'] = 'X1234';
$omezeni['4527_1'] = 'X';
$omezeni['4529_1'] = 'T';
$omezeni['4533_1'] = 'X';
$omezeni['4560_1'] = 'X';
$omezeni['4563_1'] = 'X';
$omezeni['104533_1'] = 'X1234';

$trasa['1822_1'] = ['Brno-Královo Pole;7:56','Šatov;10:18'];
$trasa['1822_2'] = ['Brno-Královo Pole;7:56','Šatov;10:18'];
$trasa['1823_1'] = ['Šatov;17:41','Brno-Královo Pole;20:00'];
$trasa['1823_2'] = ['Šatov;17:41','Brno hl.n.;19:40'];
$trasa['1921_1'] = ['Hrušovany nad Jevišovkou;6:10','bd;7:26'];
$trasa['4403_1'] = ['Hrušovany nad Jevišovkou;5:10','bd;6:32'];
$trasa['4502_1'] = ['Novosedly;6:41','Znojmo;7:22'];
$trasa['4503_1'] = ['Znojmo;4:58','Novosedly;5:39'];
$trasa['4505_1'] = ['Znojmo;5:58','Novosedly;6:39'];
$trasa['4506_1'] = ['Novosedly;8:13','Znojmo;8:53'];
$trasa['4508_1'] = ['Novosedly;10:13','Znojmo;10:53'];
$trasa['4509_1'] = ['Znojmo;9:03','Novosedly;9:40'];
$trasa['4510_1'] = ['Novosedly;12:13','Znojmo;12:53'];
$trasa['4511_1'] = ['Znojmo;11:03','Novosedly;11:40'];
$trasa['4514_1'] = ['Novosedly;14:13','Znojmo;14:53'];
$trasa['4515_1'] = ['Znojmo;12:55','Novosedly;13:40'];
$trasa['4516_1'] = ['Novosedly;15:10','Znojmo;15:53'];
$trasa['4519_1'] = ['Znojmo;13:55','Novosedly;14:37'];
$trasa['4520_1'] = ['Novosedly;17:10','Znojmo;17:53'];
$trasa['4522_1'] = ['Novosedly;18:13','Znojmo;18:53'];
$trasa['4524_1'] = ['Novosedly;20:13','Znojmo;20:53'];
$trasa['4525_1'] = ['Znojmo;15:55','Novosedly;16:37'];
$trasa['4526_1'] = ['Novosedly;22:10','Znojmo;22:48'];
$trasa['4527_1'] = ['Znojmo;16:55','Novosedly;17:40'];
$trasa['4529_1'] = ['Znojmo;17:03','Novosedly;17:40'];
$trasa['4533_1'] = ['Znojmo;19:03','Novosedly;19:41'];
$trasa['104533_1'] = ['Znojmo;19:03','Novosedly;19:41'];
$trasa['1721_1'] = ['Brno hl.n.;7:35', 'Staré Město u Uherského Hradiště;9:28'];
$trasa['1725_1'] = ['Brno hl.n.;11:28', 'Staré Město u Uherského Hradiště;13:27'];
$trasa['1726_1'] = ['Staré Město u Uherského Hradiště;10:33', 'Brno hl.n.;12:33'];
$trasa['1730_1'] = ['Staré Město u Uherského Hradiště;14:33', 'Brno hl.n.;16:33'];
$trasa['1926_1'] = ['Brno hl.n.;17:24', 'Hrušovany nad Jevišovkou;18:47'];
$trasa['4141_1'] = ['Brno hl.n.;11:49', 'Slavkov u Brna;12:20'];
$trasa['4143_1'] = ['Brno hl.n.;12:49', 'Nemotice;13:47'];
$trasa['4144_1'] = ['Kyjov;4:55', 'Brno hl.n.;6:20'];
$trasa['4148_1'] = ['Nemotice;14:06', 'Brno-Židenice;15:11'];
$trasa['4151_1'] = ['Brno hl.n.;16:47', 'Kyjov;18:07'];
$trasa['4181_1'] = ['Slavkov u Brna;13:25', 'Nemotice;13:51'];
$trasa['4416_1'] = ['Brno hl.n.;19:43', 'Hrušovany nad Jevišovkou;21:12'];
$trasa['4418_1'] = ['Brno hl.n.;20:43', 'Hrušovany nad Jevišovkou;22:12'];
$trasa['4419_1'] = ['Hrušovany nad Jevišovkou;20:37', 'Brno hl.n.;22:04'];
$trasa['4560_1'] = ['Hrušovany nad Jevišovkou;4:54', 'Znojmo;5:22'];
$trasa['4563_1'] = ['Znojmo;22:30', 'Hrušovany nad Jevišovkou;23:07'];
//sem patri stazene trasy


$poznamkaObehu['104533_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts849 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


