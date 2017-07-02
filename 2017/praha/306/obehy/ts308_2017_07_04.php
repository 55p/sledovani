<?php 
$zacatekPlatnosti = '4.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['525_1', '898_1', '514_1', '513_1'];
$obeh[2] = ['5891_1', '5893_1', '10506_1', '243_1', '543_1', '542_1', '242_1'];

$omezeni['10506_1'] = 'X';
$omezeni['242_1'] = '7';
$omezeni['243_1'] = '5,0407,2710,1611,-0707,-2910,-1711';
$omezeni['513_1'] = 'X7';
$omezeni['514_1'] = 'X6';
$omezeni['525_1'] = '7';
$omezeni['542_1'] = '7';
$omezeni['543_1'] = '5,0407,2710,1611,-0707,-2910,-1711';
$omezeni['5891_1'] = 'X1,X3,X5';
$omezeni['5893_1'] = 'X2,X4';
$omezeni['898_1'] = '7';

$trasa['242_1'] = ['Ostrava-Svinov;16:24','Praha hl.n.;19:22'];
$trasa['243_1'] = ['Praha hl.n.;13:02','Ostrava-Svinov;16:27'];
$trasa['5891_1'] = ['Praha odstavné nádraží;3:30','Nymburk hl.n.;4:30'];
$trasa['5893_1'] = ['Praha odstavné nádraží;4:24','Nymburk hl.n.;5:23'];
$trasa['10506_1'] = ['Nymburk hl.n.;5:44', 'Praha hl.n.;6:45'];
$trasa['513_1'] = ['Praha hl.n.;16:37', 'Opava východ;19:59'];
$trasa['514_1'] = ['Opava východ;6:02', 'Praha hl.n.;9:22'];
$trasa['525_1'] = ['Praha hl.n.;0:01', 'Pardubice hl.n.;1:04'];
$trasa['542_1'] = ['Opava východ;15:53', 'Ostrava-Svinov;16:14'];
$trasa['543_1'] = ['Ostrava-Svinov;16:30', 'Opava východ;16:50'];
$trasa['898_1'] = ['Pardubice hl.n.;5:58', 'Praha hl.n.;7:03'];

$typ[10506] = 'Sp';
$typ['5891_1'] = 'Sv';
$typ['5893_1'] = 'Sv';

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts308 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


