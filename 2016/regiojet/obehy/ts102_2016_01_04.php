<?php 
$zacatekPlatnosti = '4.1.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1003_1', '1020_1');


$trasa['1003_1'] = array('Praha hl.n.;7:46', 'Košice;15:44');
$trasa['1020_1'] = array('Košice;21:22', 'Praha hl.n.;5:58');



@$ts102 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>