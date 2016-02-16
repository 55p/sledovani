<?php 
$zacatekPlatnosti = '14.9.2015';
$konecPlatnosti = '30.9.2015 23:59:59';

$obeh[1] = array('8105_1', '8100_1', '8109_1', '8102_1', '8104_1', '8117_1', '8114_1', '8125_1', '8122_1');
$obeh[2] = array('8113_1', '8110_1', '8121_1', '8118_1', '8129_1', '8126_1');

$omezeni['8100_1'] = 'X';
$omezeni['8102_1'] = 'X';
$omezeni['8104_1'] = '25';
$omezeni['8105_1'] = 'X';






@$ts755 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>