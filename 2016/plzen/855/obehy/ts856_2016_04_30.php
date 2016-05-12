<?php 
$zacatekPlatnosti = '30.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8102_1', '8104_1', '108105_1', '8110_1', '208111_1', '18079_1');
$obeh[2] = array('108102_1', '108104_1', '8105_1', '108110_1', '8111_1', '18079_2');
$obeh[3] = array('8100_1', '8151_1', '208111_2', '218079_1');

$omezeni['108102_1'] = 'X';
$omezeni['108104_1'] = '25';
$omezeni['208111_2'] = 'X';
$omezeni['218079_1'] = 'X';
$omezeni['8100_1'] = 'X';
$omezeni['8102_1'] = 'X';
$omezeni['8104_1'] = '25';
$omezeni['8151_1'] = 'X';

$trasa['208111_2'] = array('Český Krumlov;17:00','Nové Údolí;18:41');

$poznamkaObehu['108105_1'] = array('pk', 'postrk');
$poznamkaObehu['208111_1'] = array('pk', 'postrk');
$poznamkaObehu['108102_1'] = array('pk', 'postrk');
$poznamkaObehu['108104_1'] = array('pk', 'postrk');
$poznamkaObehu['108110_1'] = array('pk', 'postrk');
$poznamkaObehu['18079_2'] = array('pk', 'postrk');
$poznamkaObehu['218079_1'] = array('pk', 'postrk');


$poznamkaObehu['208111_2'] = array('př', 'přípřež');

$trasa['18079'] = array('Nové Údolí;19:28', 'Volary;19:55');
$trasa['8100'] = array('Volary;4:35', 'České Budějovice;6:57');
$trasa['8102'] = array('Volary;6:40', 'České Budějovice;8:54');
$trasa['8104'] = array('Volary;7:25', 'České Budějovice;9:43');
$trasa['8105'] = array('České Budějovice;10:19', 'Nové Údolí;12:41');
$trasa['8110'] = array('Nové Údolí;13:15', 'České Budějovice;15:33');
$trasa['8111'] = array('České Budějovice;16:08', 'Nové Údolí;18:41');
$trasa['8151'] = array('České Budějovice;15:13', 'Český Krumlov;16:03');


@$ts856 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>