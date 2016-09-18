<?php 
$zacatekPlatnosti = '12.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4002_1', '4021_1', '4004_1', '4001_1', '4003_1', '4006_1', '4005_1', '4968_1', '4967_1', '4976_1', '4971_1', '4980_1', '4633_1', '4946_1', '4948_1');
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


$poznamkaObehu['4021_1'] = array('pk', 'postrk');
$poznamkaObehu['4001_1'] = array('pk', 'postrk');
$poznamkaObehu['4003_1'] = array('pk', 'postrk');
$poznamkaObehu['4005_1'] = array('pk', 'postrk');
$poznamkaObehu['4967_1'] = array('pk', 'postrk');
$poznamkaObehu['4971_1'] = array('pk', 'postrk');
$poznamkaObehu['4633_1'] = array('pk', 'postrk');
$poznamkaObehu['4611_1'] = array('pk', 'postrk');
$poznamkaObehu['4921_1'] = array('pk', 'postrk');
$poznamkaObehu['4965_1'] = array('pk', 'postrk');
$poznamkaObehu['4943_1'] = array('pk', 'postrk');
$poznamkaObehu['4973_1'] = array('pk', 'postrk');

$trasa['4001_1'] = array('Rájec-Jestřebí;5:05', 'Brno hl.n.;5:43');
$trasa['4002_1'] = array('Brno hl.n.;4:04', 'Rájec-Jestřebí;4:40');
$trasa['4003_1'] = array('Rájec-Jestřebí;6:07', 'Brno hl.n.;6:43');
$trasa['4004_1'] = array('Křenovice horní n.;4:21', 'Rájec-Jestřebí;5:37');
$trasa['4005_1'] = array('Rájec-Jestřebí;7:11', 'Brno hl.n.;7:46');
$trasa['4006_1'] = array('Brno hl.n.;6:15', 'Rájec-Jestřebí;6:53');
$trasa['4021_1'] = array('Brno hl.n.;3:06', 'Křenovice horní n.;3:35');
$trasa['4611_1'] = array('Tišnov;4:30', 'Brno hl.n.;5:07');
$trasa['4633_1'] = array('Tišnov;18:30', 'Vranovice;19:43');
$trasa['4921_1'] = array('Tišnov;4:45', 'Hrušovany u Brna;5:46');
$trasa['4924_1'] = array('Hrušovany u Brna;6:12', 'Tišnov;7:12');
$trasa['4940_1'] = array('Hrušovany u Brna;15:42', 'Tišnov;16:43');
$trasa['4943_1'] = array('Kuřim;14:27', 'Hrušovany u Brna;15:11');
$trasa['4946_1'] = array('Vranovice;21:16', 'Tišnov;22:30');
$trasa['4948_1'] = array('Brno hl.n.;23:01', 'Tišnov;23:38');
$trasa['4965_1'] = array('Tišnov;7:42', 'Brno hl.n.;8:19');
$trasa['4966_1'] = array('Brno hl.n.;13:08', 'Kuřim;13:32');
$trasa['4967_1'] = array('Tišnov;14:42', 'Brno hl.n.;15:19');
$trasa['4968_1'] = array('Brno hl.n.;13:35', 'Tišnov;14:15');
$trasa['4971_1'] = array('Tišnov;16:43', 'Brno hl.n.;17:19');
$trasa['4973_1'] = array('Tišnov;17:15', 'Brno hl.n.;17:58');
$trasa['4976_1'] = array('Brno hl.n.;15:35', 'Tišnov;16:15');
$trasa['4980_1'] = array('Brno hl.n.;17:35', 'Tišnov;18:16');


@$ts204 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);
unset($poznamkaObehu);


?>