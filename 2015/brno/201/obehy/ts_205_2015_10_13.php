<?php 
$zacatekPlatnosti = '13.10.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4922_1', '4963_1', '4970_1', '4945_1', '4942_1', '4603_1', '4620_1', '4617_1', '4604_1', '4633_1');
$obeh[2] = array('4923_1', '4650_1', '4974_1', '4947_1', '104948_1');

$omezeni['104948_1'] = 'X5';
$omezeni['4603_1'] = '6';
$omezeni['4604_1'] = '6';
$omezeni['4617_1'] = '6';
$omezeni['4620_1'] = '6';
$omezeni['4633_1'] = '6';
$omezeni['4650_1'] = 'X';
$omezeni['4922_1'] = 'X';
$omezeni['4923_1'] = 'X';
$omezeni['4942_1'] = 'X';
$omezeni['4945_1'] = 'X';
$omezeni['4947_1'] = 'X';
$omezeni['4963_1'] = 'X';
$omezeni['4970_1'] = 'X';
$omezeni['4974_1'] = 'X';


$trasa['4603_1'] = array('Tišnov;6:30', 'Břeclav;8:21');
$trasa['4604_1'] = array('Břeclav;15:42', 'Tišnov;17:29');
$trasa['4617_1'] = array('Tišnov;12:30', 'Břeclav;14:17');
$trasa['4620_1'] = array('Břeclav;9:38', 'Tišnov;11:29');
$trasa['4633_1'] = array('Tišnov;18:30', 'Brno hl.n.;19:07');
$trasa['4650_1'] = array('Hrušovany u Brna;6:42', 'Brno hl.n.;7:03');
$trasa['4922_1'] = array('Vranovice;5:33', 'Tišnov;6:43');
$trasa['4923_1'] = array('Tišnov;5:15', 'Hrušovany u Brna;6:18');
$trasa['4942_1'] = array('Hrušovany u Brna;16:41', 'Tišnov;17:43');
$trasa['4945_1'] = array('Tišnov;15:17', 'Hrušovany u Brna;16:12');
$trasa['4947_1'] = array('Tišnov;16:15', 'Vranovice;17:25');
$trasa['4963_1'] = array('Tišnov;7:17', 'Brno hl.n.;7:51');
$trasa['4970_1'] = array('Brno hl.n.;14:07', 'Tišnov;14:43');
$trasa['4974_1'] = array('Brno hl.n.;15:09', 'Tišnov;15:43');


@$ts205 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>