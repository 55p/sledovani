<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('346_1', '345_1');


$trasa['345_1'] = ['Ostrava-Svinov;14:43','Žilina;16:33'];
$trasa['346_1'] = ['Žilina;7:27','Ostrava-Svinov;9:17'];






@$ts101 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>