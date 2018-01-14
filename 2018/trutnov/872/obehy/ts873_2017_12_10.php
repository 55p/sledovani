<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1783_1', '6273_1', '1784_1', '1791_1', '1790_1', '5105_1', '1797_1', '1768_1', '5108_1', '101796_1'];
$obeh[2] = ['5102_1', '1787_1', '1789_1', '1788_1', '1795_1', '1795_2', '1854_1', '1794_1'];
$obeh[3] = ['1782_1', '1947_1', '1948_1', '1786_1', '1793_1', '1792_1', '15767_1', '15767_2', '101769_1'];
$obeh[4] = ['5113_1', '1871_1', '1870_1', '1873_1', '1872_1', '1875_1', '1872_2', '1875_2', '1876_1', '5109_1'];

$omezeni['101769_1'] = 'X5';
$omezeni['101796_1'] = 'T';
$omezeni['15767_1'] = 'zX';
$omezeni['15767_2'] = 'X5';
$omezeni['1768_1'] = '6';
$omezeni['1782_1'] = '6';
$omezeni['1783_1'] = 'T';
$omezeni['1784_1'] = '6,T';
$omezeni['1786_1'] = 'X';
$omezeni['1787_1'] = '6,T';
$omezeni['1789_1'] = 'X';
$omezeni['1794_1'] = '6';
$omezeni['1795_1'] = 'X,6';
$omezeni['1795_2'] = 'T';
$omezeni['1797_1'] = '6,T';
$omezeni['1854_1'] = 'T';
$omezeni['1871_1'] = 'X';
$omezeni['1872_1'] = 'X';
$omezeni['1872_2'] = '6,T';
$omezeni['1875_1'] = 'X';
$omezeni['1875_2'] = '6,T';
$omezeni['1947_1'] = 'X';
$omezeni['1948_1'] = 'X';
$omezeni['5102_1'] = 'X';
$omezeni['5105_1'] = 'X';
$omezeni['5108_1'] = '6';
$omezeni['5109_1'] = '6';
$omezeni['5113_1'] = '6,T';
$omezeni['6273_1'] = '6';

$trasa['101769_1'] = ['Teplice nad Metují;20:30','Náchod;20:59'];
$trasa['101796_1'] = ['Hradec Králové hl.n.;20:02','Jaroměř;20:18'];
$trasa['1768_1'] = ['Hradec Králové hl.n.;22:02','Starkoč;22:43'];
$trasa['1795_1'] = ['Trutnov hl.n.;15:41','Hrdec Králové hl.n.;16:57'];
$trasa['1795_2'] = ['Trutnov hl.n.;15:41','Pardubice hl.n.;17:16'];
$trasa['1854_1'] = ['Pardubice hl.n.;17:45','Hrdec Králové hl.n.;18:04'];
$trasa['1872_2'] = ['Choceň;14:39;Náchod;15:39'];
$trasa['1875_2'] = ['Náchod;16:22','Choceň;17:21'];

$poznamkaObehu['101796_1'] = ['pk', 'postrk'];
$poznamkaObehu['101769_1'] = ['pk', 'postrk'];


$trasa['15767_1'] = ['Trutnov hl.n.;19:25', 'Meziměstí;20:50'];
$trasa['15767_2'] = ['Trutnov hl.n.;19:25', 'Teplice nad Metují;20:26'];
$trasa['1782_1'] = ['Hradec Králové hl.n.;7:03', 'Trutnov hl.n.;8:19'];
$trasa['1783_1'] = ['Náchod;5:05', 'Hradec Králové hl.n.;5:55'];
$trasa['1784_1'] = ['Hradec Králové hl.n.;9:00', 'Trutnov hl.n.;10:17'];
$trasa['1786_1'] = ['Hradec Králové hl.n.;11:00', 'Trutnov hl.n.;12:18'];
$trasa['1787_1'] = ['Trutnov hl.n.;7:43', 'Hradec Králové hl.n.;8:57'];
$trasa['1788_1'] = ['Hradec Králové hl.n.;13:00', 'Trutnov hl.n.;14:17'];
$trasa['1789_1'] = ['Trutnov hl.n.;9:42', 'Hradec Králové hl.n.;10:57'];
$trasa['1790_1'] = ['Hradec Králové hl.n.;15:00', 'Trutnov hl.n.;16:21'];
$trasa['1791_1'] = ['Trutnov hl.n.;11:41', 'Hradec Králové hl.n.;12:57'];
$trasa['1793_1'] = ['Trutnov hl.n.;13:41', 'Hradec Králové hl.n.;14:57'];
$trasa['1794_1'] = ['Hradec Králové hl.n.;19:03', 'Náchod;19:57'];
$trasa['1797_1'] = ['Trutnov hl.n.;17:42', 'Hradec Králové hl.n.;18:57'];
$trasa['1870_1'] = ['Choceň;8:39', 'Náchod;9:40'];
$trasa['1871_1'] = ['Meziměstí;5:31', 'Choceň;7:21'];
$trasa['1872_1'] = ['Choceň;14:39', 'Hronov;15:49'];
$trasa['1873_1'] = ['Náchod;12:22', 'Choceň;13:21'];
$trasa['1875_1'] = ['Hronov;16:11', 'Choceň;17:21'];
$trasa['1876_1'] = ['Choceň;18:39', 'Trutnov hl.n.;20:21'];
$trasa['1947_1'] = ['Hradec Králové hl.n.;7:05', 'Doudleby nad Orlicí;7:52'];
$trasa['1948_1'] = ['Doudleby nad Orlicí;8:10', 'Hradec Králové hl.n.;8:53'];
$trasa['5102_1'] = ['Jaroměř;4:55', 'Trutnov hl.n.;6:20'];
$trasa['5105_1'] = ['Trutnov hl.n.;17:41', 'Jaroměř;18:50'];
$trasa['5108_1'] = ['Starkoč;22:45', 'Trutnov hl.n.;23:27'];
$trasa['5109_1'] = ['Trutnov hl.n.;20:41', 'Náchod;21:38'];
$trasa['5113_1'] = ['Náchod;6:12', 'Choceň;7:21'];
$trasa['6273_1'] = ['Jaroměř;8:01', 'Hradec Králové hl.n.;8:26'];
$trasa['1792_1'] = ['Hradec Králové hl.n.;17:00', 'Trutnov hl.n.;18:17'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts873 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


