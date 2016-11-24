<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('243_1', '242_1');

$omezeni['242_1'] = 'T';
$omezeni['243_1'] = '5';


$trasa['242_1'] = array('Košice;11:22', 'Praha hl.n.;19:22');
$trasa['243_1'] = array('Praha hl.n.;13:19', 'Košice;21:10');





@$ts146 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>