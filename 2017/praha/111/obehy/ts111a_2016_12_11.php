<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('0_1', '99999_1', '0_2');

$omezeni['0_1'] = 'X1';
$omezeni['0_2'] = 'X5';
$omezeni['99999_1'] = 'X';

$trasa['0_1'] = array('Praha-Libeň; 4:55','Praha-Vysočany; 4:59');
$trasa['0_2'] = array('Praha-Vysočany; 20:18','Praha-Libeň; 20:22');
$trasa['99999_1'] = array('Záloha Praha-Vysočany;5:00;20:00');



$typ['0_1'] = 'Sv';
$typ['0_2'] = 'Sv';



@$ts111a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>