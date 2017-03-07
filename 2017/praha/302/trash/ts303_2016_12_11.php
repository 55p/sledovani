<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('178_1', '100173_1', '100172_1', '179_1');


$trasa['100172_1'] = array('Praha hl.n.;14:28','Dresden Hbf;16:43');
$trasa['100173_1'] = array('Dresden Hbf;11:08','Praha hl.n.;13:27');
$trasa['178_1'] = array('Praha hl.n.;6:28','Dresden Hbf;8:43');
$trasa['179_1'] = array('Dresden Hbf;19:08','Praha hl.n.;21:27');



@$ts303 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>