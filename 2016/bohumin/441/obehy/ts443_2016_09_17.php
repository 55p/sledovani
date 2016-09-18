<?php 
$zacatekPlatnosti = '17.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array(3072, 3073);

$omezeni['3072'] = '25';
$omezeni['3073'] = '25';

$trasa['3072'] = array('Ostrava-Svinov;19:17', 'Mošnov,Ostrava Airport;19:50');
$trasa['3073'] = array('Mošnov,Ostrava Airport;20:14', 'Bohumín;20:57');


@$ts443 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>