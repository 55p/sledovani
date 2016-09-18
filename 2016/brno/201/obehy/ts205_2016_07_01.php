<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = '3.8.2016 23:59:59';

$obeh[1] = array('11500_1', '4929_1', '4924_1', '4963_1', '4982_1', '4987_1', '4986_1', '11565_1');

$omezeni['11500_1'] = 'X1';
$omezeni['11565_1'] = 'X5';
$omezeni['4924_1'] = 'X';
$omezeni['4929_1'] = 'X';
$omezeni['4963_1'] = 'X';
$omezeni['4982_1'] = 'X';
$omezeni['4986_1'] = 'X';
$omezeni['4987_1'] = 'X';

$trasa['11500_1'] = array('Modřice;5:18','Tišnov:6:00');
$trasa['11565_1'] = array('Tišnov','21:30;Modřice','22:13');

$poznamkaObehu['4929_1'] = array('pk', 'postrk');
$poznamkaObehu['4963_1'] = array('pk', 'postrk');
$poznamkaObehu['4987_1'] = array('pk', 'postrk');
$poznamkaObehu['11565_1'] = array('pk', 'postrk');


$typ['11565_1'] = 'Sv';
$typ['11500_1'] = 'Sv';

$trasa['4924_1'] = array('Brno-Královo Pole;6:48', 'Kuřim;6:59');
$trasa['4929_1'] = array('Tišnov;6:13', 'Brno-Královo Pole;6:36');
$trasa['4963_1'] = array('Kuřim;7:27', 'Brno-Královo Pole;7:38');
$trasa['4982_1'] = array('Brno-Královo Pole;7:50', 'Kuřim;8:01');
$trasa['4986_1'] = array('Brno-Královo Pole;8:50', 'Tišnov;9:13');
$trasa['4987_1'] = array('Kuřim;8:26', 'Brno-Královo Pole;8:37');

@$ts205 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>