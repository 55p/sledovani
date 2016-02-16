<?php 
$zacatekPlatnosti = '2.10.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array();
$obeh[2] = array();
$obeh[3] = array();

@$ts853 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>