<?php 
$zacatekPlatnosti = '13.12.2015';

$obeh[1] = array('1003_1', '1003_2', '1020_1');

$omezeni['1003_1'] = '10';
$omezeni['1003_2'] = '2412,3112';
$omezeni['1020_1'] = '10';


$trasa['1003_1'] = array('Praha hl.n.;7:46', 'Košice;15:44');
$trasa['1003_2'] = array('Praha hl.n.;7:46', 'Havířov;11:24');
$trasa['1020_1'] = array('Košice;21:22', 'Praha hl.n.;5:58');



@$ts102 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>