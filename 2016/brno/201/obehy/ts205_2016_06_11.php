<?php 
$zacatekPlatnosti = '11.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4921_1', '4962_1', '4929_1', '4924_1', '4965_1', '4966_1', '4943_1', '4972_1', '4969_1', '4940_1', '4973_1', '4980_1', '11483_1', '14944_1');

$omezeni['11483_1'] = 'X';
$omezeni['14944_1'] = 'X';
$omezeni['4921_1'] = 'X';
$omezeni['4924_1'] = 'X';
$omezeni['4929_1'] = 'X';
$omezeni['4940_1'] = 'X';
$omezeni['4943_1'] = 'X';
$omezeni['4962_1'] = 'X';
$omezeni['4965_1'] = 'X';
$omezeni['4966_1'] = 'X';
$omezeni['4969_1'] = 'X';
$omezeni['4972_1'] = 'X';
$omezeni['4973_1'] = 'X';
$omezeni['4980_1'] = 'X';

$trasa['14944_1'] = array('Brno-Královo Pole;19:31','Tišnov;19:51');

$poznamkaObehu['4921_1'] = array('pk', 'postrk');
$poznamkaObehu['4929_1'] = array('pk', 'postrk');
$poznamkaObehu['4965_1'] = array('pk', 'postrk');
$poznamkaObehu['4943_1'] = array('pk', 'postrk');
$poznamkaObehu['4969_1'] = array('pk', 'postrk');
$poznamkaObehu['4973_1'] = array('pk', 'postrk');
$poznamkaObehu['11483_1'] = array('pk', 'postrk');

$typ['14944_1'] = 'Sv';

$trasa['11483_1'] = array('Tišnov;19:00', 'Brno-Královo Pole;19:23');
$trasa['4921_1'] = array('Tišnov;4:45', 'Brno-Královo Pole;5:08');
$trasa['4924_1'] = array('Brno-Královo Pole;6:48', 'Tišnov;7:12');
$trasa['4929_1'] = array('Tišnov;6:13', 'Brno-Královo Pole;6:36');
$trasa['4940_1'] = array('Brno-Královo Pole;16:22', 'Tišnov;16:43');
$trasa['4943_1'] = array('Kuřim;14:27', 'Brno-Královo Pole;14:37');
$trasa['4962_1'] = array('Brno-Královo Pole;5:20', 'Tišnov;5:43');
$trasa['4965_1'] = array('Tišnov;7:42', 'Brno-Královo Pole;8:05');
$trasa['4966_1'] = array('Brno-Královo Pole;13:21', 'Kuřim;13:32');
$trasa['4969_1'] = array('Tišnov;15:43', 'Brno-Královo Pole;16:05');
$trasa['4972_1'] = array('Brno-Královo Pole;14:48', 'Tišnov;15:12');
$trasa['4973_1'] = array('Tišnov;17:15', 'Brno-Královo Pole;17:38');
$trasa['4980_1'] = array('Brno-Královo Pole;17:51', 'Tišnov;18:16');


@$ts205 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>