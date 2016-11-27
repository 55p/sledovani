<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('525_1', '898_1', '514_1', '513_1');
$obeh[2] = array('5891_1', '5893_1', '1904_1', '243_1', '543_1', '542_1', '242_1');

$omezeni['1904_1'] = 'X';
$omezeni['242_1'] = '7,1704,0105,0805,-2512,-1604,-3004,-0705';
$omezeni['243_1'] = '5,1304,0407,2710,1611,-3012,-1404,-0707,-2910,-1711';
$omezeni['513_1'] = 'X7';
$omezeni['514_1'] = 'X6';
$omezeni['525_1'] = '7';
$omezeni['542_1'] = '7,1704,0105,0805,-2512,-1604,-3004,-0705';
$omezeni['543_1'] = '5,1304,0407,2710,1611,-3012,-1404,-0707,-2910,-1711';
$omezeni['5893_1'] = 'X2,X4';
$omezeni['5891_1'] = 'X1,X3,X5';
$omezeni['898_1'] = '7';

$trasa['242_1'] = array('Ostrava-Svinov;16:24','Praha hl.n.;19:22');
$trasa['243_1'] = array('Praha hl.n.;13:02','Ostrava-Svinov;16:27');
$trasa['5893_1'] = array('Praha odstavné nádraží;4:24','Nymburk hl.n.;5:23');
$trasa['5891_1'] = array('Praha odstavné nádraží;3:30','Nymburk hl.n.;4:30');
$trasa['1904_1'] = array('Nymburk hl.n.;5:44', 'Praha Masarykovo nádraží;6:45');
$trasa['513_1'] = array('Praha hl.n.;16:37', 'Opava východ;19:59');
$trasa['514_1'] = array('Opava východ;6:02', 'Praha hl.n.;9:22');
$trasa['525_1'] = array('Praha hl.n.;0:01', 'Pardubice hl.n.;1:04');
$trasa['542_1'] = array('Opava východ;15:53', 'Ostrava-Svinov;16:14');
$trasa['543_1'] = array('Ostrava-Svinov;16:30', 'Opava východ;16:50');
$trasa['898_1'] = array('Pardubice hl.n.;5:58', 'Praha hl.n.;7:03');

$typ['5891_1'] = 'Sv';
$typ['5893_1'] = 'Sv';

@$ts308 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>