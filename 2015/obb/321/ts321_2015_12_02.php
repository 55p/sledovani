<?php 
$zacatekPlatnosti = '2.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('71_1', '76_1', 373);
$obeh[2] = array('70_1', '77_1', '372_1');
$obeh[3] = array('75_1', '370_1');
$obeh[4] = array('574_1', '73_1', '78_1', '575_1');

$omezeni['574_1'] = 'X6';
$omezeni['575_1'] = 'XT';






@$ts321 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>