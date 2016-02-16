<?php 

$zacatekPlatnosti = '23.6.2015';
$konecPlatnosti = '14.8.2015 23:59:59';

$obeh[1] = array('1780_1', '932_1', '929_1', '1793_1');

$omezeni['1780_1'] = 'X';
$omezeni['1793_1'] = 'X';
$omezeni['929_1'] = 'X';
$omezeni['932_1'] = 'X';

$trasa['1780_1'] = array('Hradec Králové hl.n.;6:01','Jaroměř;6:16');
$trasa['1793_1'] = array('Jaroměř;17:44','Hradec Králové hl.n.;17:58');
$trasa['929_1'] = array('Praha hl.n.;14:11','Jaroměř;16:18');
$trasa['932_1'] = array('Jaroměř;7:41','Praha hl.n.;9:45');

@$ts107 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>