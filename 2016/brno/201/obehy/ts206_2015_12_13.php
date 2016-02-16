<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4021_2', '4004_2', '4003_2');

$omezeni['4003_2'] = 'X1,-2812';
$omezeni['4004_2'] = 'X1,-2812';
$omezeni['4021_2'] = 'X1,-2812';

$trasa['4003_2'] = array('Rájec-Jestřebí;6:07', 'Brno hl.n.;6:43');
$trasa['4004_2'] = array('Křenovice horní n.;4:21', 'Rájec-Jestřebí;5:37');
$trasa['4021_2'] = array('Brno hl.n.;3:06', 'Křenovice horní n.;3:35');





@$ts206 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>