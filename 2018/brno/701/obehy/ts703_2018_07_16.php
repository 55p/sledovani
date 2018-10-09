<?php 
$zacatekPlatnosti = '16.7.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['894_1', '70240_1', '11522_1', '4834_1', '70101_1', '1636_1', '1637_1', '70100_1'];
$obeh[2] = ['4827_1', '1725_1', '1730_1', '1636_2', '1637_2', '11533_1', '70241_1', '897_1'];

$omezeni['894_1'] = 'X6';
$omezeni['897_1'] = 'XT';
$omezeni['1636_2'] = '6';
$omezeni['1636_1'] = 'T';
$omezeni['1637_2'] = '6';
$omezeni['1637_1'] = 'T';
$omezeni['1725_1'] = 'X';
$omezeni['1730_1'] = 'X';
$omezeni['4827_1'] = 'X';
$omezeni['4834_1'] = 'X';
$omezeni['11522_1'] = 'X6';
$omezeni['11533_1'] = 'XT';
$omezeni['70100_1'] = 'T';
$omezeni['70101_1'] = 'X5';
$omezeni['70240_1'] = 'X6';
$omezeni['70241_1'] = 'XT';

$trasa['894_1'] = ['Zlín střed;5:31','Otrokovice;5:44'];
$trasa['897_1'] = ['Otrokovice;22:13','Zlín střed;22:25'];
$trasa['1725_1'] = ['Brno hl.n.;11:28','Veselí nad Moravou;12:58'];
$trasa['1730_1'] = ['Veselí nad Moravou;15:01','Brno hl.n.;16:33'];
$trasa['4827_1'] = ['Okříšky;4:50','Brno-Horní Heršpice;6:40'];
$trasa['4834_1'] = ['Brno-Horní Heršpice;14:48','Okříšky;16:25'];
$trasa['11522_1'] = ['Staré Město u Uherského Hradiště;6:42','Brno hl.n.;8:34'];
$trasa['11533_1'] = ['Brno hl.n.;17:30','Staré Město u Uherského Hradiště;19:07'];
$trasa['70100_1'] = ['Brno-Horní Heršpice;20:31','Okříšky;23:21'];
$trasa['70101_1'] = ['Okříšky;17:00','Brno hl.n.;19:50'];
$trasa['70240_1'] = ['Otrokovice;5:49','Staré Město u Uherského Hradiště;6:05'];
$trasa['70241_1'] = ['Staré Město u Uherského Hradiště;21:45','Otrokovice;21:57'];
$trasa['1636_1'] = ['Brno hl.n.;8:06', 'Žďár nad Sázavou;10:14'];
$trasa['1636_2'] = ['Brno hl.n.;8:06', 'Žďár nad Sázavou;10:14'];
$trasa['1637_1'] = ['Žďár nad Sázavou;17:40', 'Brno hl.n.;19:51'];
$trasa['1637_2'] = ['Žďár nad Sázavou;17:40', 'Brno hl.n.;19:51'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts703 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


