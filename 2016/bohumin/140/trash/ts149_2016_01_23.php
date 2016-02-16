<?php 
$zacatekPlatnosti = '23.1.2016';
$konecPlatnosti = '11.2.2016 23:59:59';

$obeh[1] = array('503_1', '508_1');
$obeh[2] = array('509_1', '502_1');


$trasa['502_1'] = array('Ostrava hl.n.;17:11', 'Praha hl.n.;20:15');
$trasa['503_1'] = array('Praha hl.n.;7:43', 'Ostrava hl.n.;10:44');
$trasa['508_1'] = array('Ostrava hl.n.;11:11', 'Praha hl.n.;14:15');
$trasa['509_1'] = array('Praha hl.n.;13:43', 'Ostrava hl.n.;16:44');





@$ts149 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>