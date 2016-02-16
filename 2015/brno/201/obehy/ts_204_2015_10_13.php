<?php 
$zacatekPlatnosti = '13.10.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4021_1', '4004_1', '4003_1', '4002_1', '4001_1', '4006_1', '4005_1', '4968_1', '4967_1', '4976_1', '4971_1', '4980_1', '4633_1', '4946_1', '4948_1');
$obeh[2] = array('4611_1', '4921_1', '4924_1', '4965_1', '4966_1', '4943_1', '4940_1', '4973_1');

$omezeni['4001_1'] = 'X1';
$omezeni['4002_1'] = 'X1';
$omezeni['4003_1'] = 'X2345';
$omezeni['4004_1'] = 'X2345';
$omezeni['4005_1'] = 'X1';
$omezeni['4006_1'] = 'X1';
$omezeni['4021_1'] = 'X2345';
$omezeni['4611_1'] = '6';
$omezeni['4633_1'] = 'X';
$omezeni['4921_1'] = 'X';
$omezeni['4924_1'] = 'X';
$omezeni['4940_1'] = 'X';
$omezeni['4943_1'] = 'X';
$omezeni['4946_1'] = 'X';
$omezeni['4948_1'] = 'T';
$omezeni['4965_1'] = 'X';
$omezeni['4966_1'] = 'X';
$omezeni['4967_1'] = 'X';
$omezeni['4968_1'] = 'X';
$omezeni['4971_1'] = 'X';
$omezeni['4973_1'] = 'X';
$omezeni['4976_1'] = 'X';
$omezeni['4980_1'] = 'X';


$trasa['4001_1'] = array('Rájec-Jestřebí;5:07', 'Brno hl.n.;5:45');
$trasa['4002_1'] = array('Brno hl.n.;4:04', 'Rájec-Jestřebí;4:40');
$trasa['4003_1'] = array('Rájec-Jestřebí;6:08', 'Brno hl.n.;6:44');
$trasa['4004_1'] = array('Brno hl.n.;5:01', 'Rájec-Jestřebí;5:41');
$trasa['4005_1'] = array('Rájec-Jestřebí;7:08', 'Brno hl.n.;7:48');
$trasa['4006_1'] = array('Brno hl.n.;6:14', 'Rájec-Jestřebí;6:51');
$trasa['4021_1'] = array('Brno hl.n.;3:05', 'Křenovice horní n.;3:48');
$trasa['4611_1'] = array('Tišnov;4:30', 'Brno hl.n.;5:07');
$trasa['4633_1'] = array('Tišnov;18:30', 'Vranovice;19:42');
$trasa['4921_1'] = array('Tišnov;4:45', 'Hrušovany u Brna;5:47');
$trasa['4924_1'] = array('Hrušovany u Brna;6:12', 'Tišnov;7:13');
$trasa['4940_1'] = array('Hrušovany u Brna;15:41', 'Tišnov;16:43');
$trasa['4943_1'] = array('Kuřim;14:26', 'Hrušovany u Brna;15:12');
$trasa['4946_1'] = array('Vranovice;21:16', 'Tišnov;22:29');
$trasa['4948_1'] = array('Brno hl.n.;23:01', 'Tišnov;23:37');
$trasa['4965_1'] = array('Tišnov;7:45', 'Brno hl.n.;8:22');
$trasa['4966_1'] = array('Brno hl.n.;13:07', 'Kuřim;13:32');
$trasa['4967_1'] = array('Tišnov;14:45', 'Brno hl.n.;15:22');
$trasa['4968_1'] = array('Brno hl.n.;13:37', 'Tišnov;14:13');
$trasa['4971_1'] = array('Tišnov;16:45', 'Brno hl.n.;17:22');
$trasa['4973_1'] = array('Tišnov;17:17', 'Brno hl.n.;17:53');
$trasa['4976_1'] = array('Brno hl.n.;15:37', 'Tišnov;16:15');
$trasa['4980_1'] = array('Brno hl.n.;17:37', 'Tišnov;18:13');




@$ts204 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>