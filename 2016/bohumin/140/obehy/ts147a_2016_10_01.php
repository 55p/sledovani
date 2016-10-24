<?php 
$zacatekPlatnosti = '1.10.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('100443_1', '100442_1');


$trasa['100442_1'] = array('Košice;22:08','Bohumín;3:03');
$trasa['100443_1'] = array('Bohumín;3:37','Košice;8:39');






@$ts147a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>