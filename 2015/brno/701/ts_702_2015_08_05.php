<?php 
$zacatekPlatnosti = '1.8.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('560_1', '883_1', '888_1', '887_1', '884_1', '891_1', '880_1', '70241_1', '551_1');
$obeh[2] = array('550_1', '70240_1', '881_1', '890_1', '885_1', '886_1', '889_1', '882_1', '561_1');

$omezeni['881_1'] = 'X';
$omezeni['890_1'] = 'X';


@$ts702 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>