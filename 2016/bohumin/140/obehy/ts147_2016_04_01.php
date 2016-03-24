<?php 
$zacatekPlatnosti = '22.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('243_1', '242_1');

$omezeni['242_1'] = '7,2803, 0607,-2703,-0307';
$omezeni['243_1'] = '5,2403,2710,1611,-2503,-2810,-1811';

$trasa['242_1'] = array('Košice;11:44', 'Ostrava-Svinov;16:08');
$trasa['243_1'] = array('Ostrava-Svinov;16:18', 'Košice;20:45');

@$ts147 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>