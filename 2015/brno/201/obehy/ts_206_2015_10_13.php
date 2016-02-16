<?php 
$zacatekPlatnosti = '13.10.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4021_1', '4004_1', '4003_1');

$omezeni['4003_1'] = '1';
$omezeni['4004_1'] = '1';
$omezeni['4021_1'] = '1';



$trasa['4003_1'] = array('Rájec-Jestřebí;6:08', 'Brno hl.n.;6:44');
$trasa['4004_1'] = array('Brno hl.n.;5:01', 'Rájec-Jestřebí;5:41');
$trasa['4021_1'] = array('Brno hl.n.;3:05', 'Křenovice horní n.;3:48');



@$ts206 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>