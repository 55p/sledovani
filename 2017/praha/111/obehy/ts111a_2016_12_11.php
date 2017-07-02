<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = '2.7.2017 23:59:59';

$obeh[1] = array('29099_1', '99999_1', '29098_1');

$omezeni['29099_1'] = 'X1';
$omezeni['29098_1'] = 'X5';
$omezeni['99999_1'] = 'X';

$trasa['29099_1'] = array('Praha-Libeň;4:55','Praha-Vysočany;4:59');
$trasa['29098_1'] = array('Praha-Vysočany;20:18','Praha-Libeň;20:22');
$trasa['99999_1'] = array('Záloha Praha-Vysočany;5:00;20:00');

$typ['29099_1'] = 'Sv';
$typ['29098_1'] = 'Sv';

@$ts111a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>