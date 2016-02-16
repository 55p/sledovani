<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4921_1', '4962_1', '4929_1', '4924_1', '4965_1', '4966_1', '104943_1', '4972_1', '4969_1', '104940_1', '4973_1', '4980_1', '4633_1', '4946_1', '4948_1');
$obeh[2] = array('4611_1', '4923_1', '4964_1', '4961_1', '4968_1', '4967_1', '4974_1', '104947_1', '4978_1', '104635_1', '10970_1');

$omezeni['104940_1'] = 'X';
$omezeni['104943_1'] = 'X';
$omezeni['104947_1'] = 'X';
$omezeni['10970_1'] = 'X';
$omezeni['4611_1'] = '6';
$omezeni['4633_1'] = 'X';
$omezeni['104635_1'] = 'X';
$omezeni['4921_1'] = 'X';
$omezeni['4923_1'] = 'X';
$omezeni['4924_1'] = 'X';
$omezeni['4929_1'] = 'X';
$omezeni['4946_1'] = 'X';
$omezeni['4948_1'] = 'T';
$omezeni['4961_1'] = 'X';
$omezeni['4962_1'] = 'X';
$omezeni['4964_1'] = 'X';
$omezeni['4965_1'] = 'X';
$omezeni['4966_1'] = 'X';
$omezeni['4967_1'] = 'X';
$omezeni['4968_1'] = 'X';
$omezeni['4969_1'] = 'X';
$omezeni['4972_1'] = 'X';
$omezeni['4973_1'] = 'X';
$omezeni['4974_1'] = 'X';
$omezeni['4978_1'] = 'X';
$omezeni['4980_1'] = 'X';

$trasa['10970_1'] = array('Brno hl.n.;20:10','Tišnov;20:40');
$trasa['104943'] = array('Kuřim;14:26', 'Brno-Královo Pole;14:37');
$trasa['104940'] = array('Brno-Královo Pole;16:23', 'Tišnov;16:43');
$trasa['104947'] = array('Tišnov;16:15', 'Brno-Královo Pole;16:37');

$trasa['4611_1'] = array('Tišnov;4:30', 'Brno hl.n.;5:07');
$trasa['4633_1'] = array('Tišnov;18:30', 'Vranovice;19:42');
$trasa['104635_1'] = array('Tišnov;18:59', 'Brno hl.n.;19:35');
$trasa['4921_1'] = array('Tišnov;4:45', 'Brno-Královo Pole;5:07');
$trasa['4923_1'] = array('Tišnov;5:15', 'Brno-Královo Pole;5:37');
$trasa['4924_1'] = array('Hrušovany u Brna;6:12', 'Brno hl.n.;6:33');
$trasa['4929_1'] = array('Tišnov;6:17', 'Brno-Královo Pole;6:40');
$trasa['4946_1'] = array('Vranovice;21:16', 'Tišnov;22:29');
$trasa['4948_1'] = array('Brno hl.n.;23:01', 'Tišnov;23:37');
$trasa['4961_1'] = array('Tišnov;6:45', 'Brno-Královo Pole;7:09');
$trasa['4962_1'] = array('Brno-Královo Pole;5:20', 'Tišnov;5:43');
$trasa['4964_1'] = array('Brno-Královo Pole;5:51', 'Tišnov;6:15');
$trasa['4965_1'] = array('Tišnov;7:45', 'Brno-Královo Pole;8:07');
$trasa['4966_1'] = array('Brno-Královo Pole;13:21', 'Kuřim;13:32');
$trasa['4967_1'] = array('Tišnov;14:45', 'Brno-Královo Pole;15:07');
$trasa['4968_1'] = array('Brno-Královo Pole;13:51', 'Tišnov;14:13');
$trasa['4969_1'] = array('Tišnov;15:45', 'Brno-Královo Pole;16:07');
$trasa['4972_1'] = array('Brno-Královo Pole;14:51', 'Tišnov;15:13');
$trasa['4973_1'] = array('Tišnov;17:17', 'Brno-Královo Pole;17:38');
$trasa['4974_1'] = array('Brno-Královo Pole;15:23', 'Tišnov;15:43');
$trasa['4978_1'] = array('Brno-Královo Pole;16:51', 'Tišnov;17:13');
$trasa['4980_1'] = array('Brno-Královo Pole;17:51', 'Tišnov;18:13');


$poznamkaObehu['4921_1'] = array('pk', 'postrk');
$poznamkaObehu['4929_1'] = array('pk', 'postrk');
$poznamkaObehu['4965_1'] = array('pk', 'postrk');
$poznamkaObehu['104943_1'] = array('pk', 'postrk');
$poznamkaObehu['4969_1'] = array('pk', 'postrk');
$poznamkaObehu['4973_1'] = array('pk', 'postrk');
$poznamkaObehu['4633_1'] = array('pk', 'postrk');
$poznamkaObehu['4611_1'] = array('pk', 'postrk');
$poznamkaObehu['4923_1'] = array('pk', 'postrk');
$poznamkaObehu['4961_1'] = array('pk', 'postrk');
$poznamkaObehu['4967_1'] = array('pk', 'postrk');
$poznamkaObehu['104947_1'] = array('pk', 'postrk');
$poznamkaObehu['104635_1'] = array('pk', 'postrk');

$typ[10970] = 'Sv';
$poznamkaObehu['10970_1'] = array('', 'Sv 100970');

@$ts204 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>