<?php 
$zacatekPlatnosti = '16.6.2015';
$zacatekPlatnosti2 = '4.12.2015';
$konecPlatnosti = '14.9.2015 23:59:59';

//$zacatekPlatnosti2 = '30.10.2015';

$obeh[1] = array('7502_1', '775_1', '1962_1', '1965_1', '1967_1');
$obeh[2] = array('1960_1', '7547_1', '776_1', '779_1');
$obeh[3] = array('7504_1', '7501_1');
$obeh[4] = array('778_1', '777_1', '1964_1', '7503_1');

$omezeni['1960_1'] = '25';
$omezeni['1965_1'] = 'X';
$omezeni['1967_1'] = '25';
$omezeni['7547_1'] = '25';


@$ts718 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 
//@$ts718 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti2, $konecPlatnosti2)); 

unset($obeh); 

$obeh[1] = array('7502_1', '775_1', '1962_1', '1965_1', '1967_1');
$obeh[2] = array('1960_1', '7547_1', '776_1', '779_1');
$obeh[3] = array('778_1', '777_1', '1964_1', '7503_1');

@$ts718 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti2)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>