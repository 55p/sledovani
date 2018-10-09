<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['892_1', '883_1', '888_1', '887_1', '884_1', '891_1', '880_1', '70241_1', '897_1', '895_1'];
$obeh[2] = ['894_1', '70240_1', '1722_1', '4834_1', '70101_1', '1636_1', '1637_1', '70100_1'];
$obeh[3] = ['4827_1', '1731_1', '4145_1', '4150_1', '1733_1', '101722_1', '70250_1', '881_1', '890_1', '894_2', '70240_2', '885_1', '886_1', '889_1', '882_1', '895_2'];

$omezeni['881_1'] = '6';
$omezeni['882_1'] = '25';
$omezeni['885_1'] = '25';
$omezeni['886_1'] = '25';
$omezeni['889_1'] = '25';
$omezeni['890_1'] = '6';
$omezeni['894_1'] = 'X';
$omezeni['894_2'] = 'T';
$omezeni['895_1'] = 'X5';
$omezeni['895_2'] = 'X1234,25';
$omezeni['897_1'] = 'X1234,25';
$omezeni['1636_1'] = '25';
$omezeni['1637_1'] = '25';
$omezeni['1722_1'] = 'X';
$omezeni['1731_1'] = 'X1234';
$omezeni['1733_1'] = 'X5';
$omezeni['4145_1'] = 'X5';
$omezeni['4150_1'] = 'X5';
$omezeni['4827_1'] = 'X';
$omezeni['4834_1'] = 'X';
$omezeni['70100_1'] = 'T';
$omezeni['70101_1'] = 'X5';
$omezeni['70240_1'] = 'X';
$omezeni['70240_2'] = 'T';
$omezeni['70241_1'] = 'X1234,25';
$omezeni['70250_1'] = '6';
$omezeni['101722_1'] = '6';

$trasa['880_1'] = ['Luhačovice;18:20','Staré Město u Uherského Hradiště;19:04'];
$trasa['881_1'] = ['Staré Město u Uherského Hradiště;6:56','Luhačovice;7:45'];
$trasa['882_1'] = ['Luhačovice;16:31','Staré Město u Uherského Hradiště;17:33'];
$trasa['883_1'] = ['Staré Město u Uherského Hradiště;8:27','Luhačovice;9:18'];
$trasa['884_1'] = ['Luhačovice;14:31','Staré Město u Uherského Hradiště;15:33'];
$trasa['885_1'] = ['Staré Město u Uherského Hradiště;10:27','Luhačovice;11:18'];
$trasa['886_1'] = ['Luhačovice;12:31','Staré Město u Uherského Hradiště;13:33'];
$trasa['887_1'] = ['Staré Město u Uherského Hradiště;12:27','Luhačovice;13:18'];
$trasa['888_1'] = ['Luhačovice;10:31','Staré Město u Uherského Hradiště;11:33'];
$trasa['889_1'] = ['Staré Město u Uherského Hradiště;14:27','Luhačovice;15:18'];
$trasa['890_1'] = ['Luhačovice;8:31','Staré Město u Uherského Hradiště;9:34'];
$trasa['891_1'] = ['Staré Město u Uherského Hradiště;16:27','Luhačovice;17:18'];
$trasa['892_1'] = ['Veselí nad Moravou;7:10','Staré Město u Uherského Hradiště;7:32'];
$trasa['894_2'] = ['Zlín střed;5:31','Otrokovice;5:44'];
$trasa['894_1'] = ['Zlín střed;5:31','Otrokovice;5:44'];
$trasa['895_1'] = ['Staré Město u Uherského Hradiště;20:27','Veselí nad Moravou;20:47'];
$trasa['895_2'] = ['Staré Město u Uherského Hradiště;20:27','Veselí nad Moravou;20:47'];
$trasa['897_1'] = ['Otrokovice;22:13','Zlín střed;22:25'];
$trasa['1722_1'] = ['Uherské Hradiště;6:35','Brno hl.n.;8:34'];
$trasa['70100_1'] = ['Brno-Horní Heršpice;20:31','Okříšky;23:21'];
$trasa['70101_1'] = ['Okříšky;17:00','Brno hl.n.;19:50'];
$trasa['70240_2'] = ['Otrokovice;5:55','Staré Město u Uherského Hradiště;6:10'];
$trasa['70240_1'] = ['Otrokovice;5:55','Uherské Hradiště;6:17'];
$trasa['70241_1'] = ['Staré Město u Uherského Hradiště;21:45','Otrokovice;21:57'];
$trasa['70250_1'] = ['Uherské Hradiště;6:32','Staré Město u Uherského Hradiště;6:45'];
$trasa['101722_1'] = ['Bylnice;5:05','Uherské Hradiště;6:27'];
$trasa['1636_1'] = ['Brno hl.n.;8:06', 'Žďár nad Sázavou;10:14'];
$trasa['1637_1'] = ['Žďár nad Sázavou;17:40', 'Brno hl.n.;19:51'];
$trasa['1731_1'] = ['Brno hl.n.;15:28', 'Staré Město u Uherského Hradiště;17:27'];
$trasa['1733_1'] = ['Brno hl.n.;17:30', 'Bylnice;20:36'];
$trasa['4145_1'] = ['Brno hl.n.;13:48', 'Nemotice;14:52'];
$trasa['4150_1'] = ['Nemotice;15:11', 'Brno-Židenice;16:11'];
$trasa['4827_1'] = ['Okříšky;4:50', 'Brno hl.n.;6:37'];
$trasa['4834_1'] = ['Brno hl.n.;14:45', 'Okříšky;16:25'];
//sem patri stazene trasy


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts702 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


