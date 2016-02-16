<?php 
$zacatekPlatnosti = '4.1.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1008_1',  '1011_1');

$trasa['1008_1'] = array('Martin;6:16', 'Praha hl.n.;11:58');
$trasa['1011_1'] = array('Praha hl.n.;14:46', 'Martin;20:10');

@$ts104 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>