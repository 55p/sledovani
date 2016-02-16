<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('543_1', '542_1');

$omezeni['542_1'] = 'T,-2412,-2512,-2612,-0101,-2703,-0307,-0507,-2809,-2810,-1711';
$omezeni['543_1'] = '5,2312,2710,1611,-2512,-0101,-2810,-1811';


$trasa['542_1'] = array('Opava východ;15:50', 'Praha hl.n.;19:15');
$trasa['543_1'] = array('Praha hl.n.;13:06', 'Opava východ;16:33');

$typ[542] = $typ[543] = 'IC';


@$ts142 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>