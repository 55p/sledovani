<?php 
$zacatekPlatnosti = '11.6.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['1722_1', '892_1', '883_1', '888_1', '887_1', '884_1', '891_1', '880_1', '895_1', '897_1'];
$obeh[2] = ['894_1', '101722_1', '104816_1', '1729_1', '12275_1', '12260_1', '12265_1', '12274_1', '1732_1', '104850_1', '1636_1', '1637_1', '104856_1'];
$obeh[3] = ['104801_1', '1733_1', '1731_1', '12277_1', '12262_1', '894_2', '892_2', '885_1', '886_1', '889_1', '882_1', '895_2'];

$omezeni['101722_1'] = 'X';
$omezeni['104801_1'] = 'X';
$omezeni['104816_1'] = 'X1, X2, X3';
$omezeni['104850_1'] = 'X4';
$omezeni['104856_1'] = 'T';
$omezeni['12260_1'] = 'X4';
$omezeni['12262_1'] = 'X1234';
$omezeni['12265_1'] = 'X4';
$omezeni['12274_1'] = 'X4';
$omezeni['12275_1'] = 'X4';
$omezeni['12277_1'] = 'X1234';
$omezeni['1636_1'] = '25';
$omezeni['1637_1'] = '25';
$omezeni['1722_1'] = '6';
$omezeni['1729_1'] = 'X4';
$omezeni['1731_1'] = 'X1234';
$omezeni['1732_1'] = 'X4';
$omezeni['1733_1'] = 'X5';
$omezeni['4145_1'] = 'X5';
$omezeni['4150_1'] = 'X5';
$omezeni['882_1'] = '25';
$omezeni['885_1'] = '25';
$omezeni['886_1'] = '25';
$omezeni['889_1'] = '25';
$omezeni['892_1'] = 'XT';
$omezeni['892_2'] = '6';
$omezeni['894_1'] = 'X';
$omezeni['894_2'] = 'T';
$omezeni['895_1'] = 'X5';
$omezeni['895_2'] = 'X1234,25';
$omezeni['897_1'] = 'X1234,25';

$trasa['101722_1'] = ['Uherské Hradiště;6:35','Brno hl.n.;8:34'];
$trasa['104801_1'] = ['Zastávka u Brna;6:40','Brno hl.n.;7:10'];
$trasa['104816_1'] = ['Brno hl.n.;15:39','Zastávka u Brna;16:12'];
$trasa['104850_1'] = ['Brno hl.n.;19:39','Zastávka u Brna;20:12'];
$trasa['104856_1'] = ['Brno hl.n.;22:41;Zastávka u Brna;13:12'];
$trasa['12262_1'] = ['Kunovice;17:37','Staré Město u Uherského Hradiště;17:49'];
$trasa['12277_1'] = ['Uherské Hradiště;17:27','Kunovice;17:32'];
$trasa['1722_1'] = ['Bylnice;5:07','Uherské Hradiště;6:27'];
$trasa['880_1'] = ['Luhačovice;18:20','Staré Město u Uherského Hradiště;19:28'];
$trasa['882_1'] = ['Luhačovice;16:38','Staré Město u Uherského Hradiště;17:28'];
$trasa['883_1'] = ['Staré Město u Uherského Hradiště;8:32','Luhačovice;9:23'];
$trasa['884_1'] = ['Luhačovice;14:38','Staré Město u Uherského Hradiště;15:28'];
$trasa['885_1'] = ['Staré Město u Uherského Hradiště;10:32','Luhačovice;11:23'];
$trasa['886_1'] = ['Luhačovice;12:38','Staré Město u Uherského Hradiště;13:28'];
$trasa['887_1'] = ['Staré Město u Uherského Hradiště;12:32','Luhačovice;13:23'];
$trasa['888_1'] = ['Luhačovice;10:38','Staré Město u Uherského Hradiště;11:28'];
$trasa['889_1'] = ['Staré Město u Uherského Hradiště;14:32','Luhačovice;15:23'];
$trasa['891_1'] = ['Staré Město u Uherského Hradiště;16:32','Luhačovice;17:23'];
$trasa['892_1'] = ['Veselí nad Moravou;7:08','Staré Město u Uherského Hradiště;7:28'];
$trasa['892_2'] = ['Veselí nad Moravou;7:08','Staré Město u Uherského Hradiště;7:28'];
$trasa['894_1'] = ['Zlín střed;5:28','Otrokovice;5:41'];
$trasa['894_2'] = ['Zlín střed;5:28','Otrokovice;5:41'];
$trasa['895_1'] = ['Staré Město u Uherského Hradiště;20:30','Veselí nad Moravou;20:54'];
$trasa['895_2'] = ['Staré Město u Uherského Hradiště;20:30','Veselí nad Moravou;20:54'];
$trasa['897_1'] = ['Otrokovice;22:15','Zlín střed;22:28'];

$trasa['12260_1'] = ['Kunovice;15:37', 'Staré Město u Uherského Hradiště;15:49'];
$trasa['12265_1'] = ['Staré Město u Uherského Hradiště;16:05', 'Kunovice;16:22'];
$trasa['12274_1'] = ['Kunovice;16:27', 'Uherské Hradiště;16:32'];
$trasa['12275_1'] = ['Uherské Hradiště;15:27', 'Kunovice;15:32'];
$trasa['1636_1'] = ['Brno hl.n.;8:06', 'Žďár nad Sázavou;10:16'];
$trasa['1637_1'] = ['Žďár nad Sázavou;17:40', 'Brno hl.n.;19:54'];
$trasa['1729_1'] = ['Brno hl.n.;13:28', 'Uherské Hradiště;15:20'];
$trasa['1731_1'] = ['Brno hl.n.;15:28', 'Uherské Hradiště;17:20'];
$trasa['1732_1'] = ['Uherské Hradiště;16:40', 'Brno hl.n.;18:33'];
$trasa['1733_1'] = ['Brno hl.n.;17:30', 'Bylnice;20:37'];
$trasa['4145_1'] = ['Brno hl.n.;13:48', 'Nemotice;14:53'];
$trasa['4150_1'] = ['Nemotice;15:11', 'Brno-Židenice;16:11'];


$poznamkaObehu['12277_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts702 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


