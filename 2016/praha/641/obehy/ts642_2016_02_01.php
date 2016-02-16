<?php 
$zacatekPlatnosti = '1.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('241_1', '240_1');
$obeh[2] = array('512_1', '515_1');


$trasa['240_1'] = array('Košice;14:47', 'Praha hl.n.;22:19');
$trasa['241_1'] = array('Praha hl.n.;6:43', 'Košice;14:05');
$trasa['512_1'] = array('Ostrava hl.n.;7:14', 'Františkovy Lázně;13:23');
$trasa['515_1'] = array('Františkovy Lázně;14:37', 'Ostrava hl.n.;20:44');


@$ts642 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>