<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('241_1', '240_1');

$trasa['240_1'] = array('Košice;15:03', 'Praha hl.n.;22:24');
$trasa['241_1'] = array('Praha hl.n.;7:07', 'Košice;14:23');

@$ts641 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>