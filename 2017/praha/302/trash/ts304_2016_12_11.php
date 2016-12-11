<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('284_1', '285_1');

$trasa['284_1'] = array('Břeclav;6:35', 'Praha hl.n.;9:42');
$trasa['285_1'] = array('Praha hl.n.;15:19', 'Břeclav;18:22');


@$ts304 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>