<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('29099_1', '99999_1', '29098_1');

$omezeni['29098_1'] = 'X5';
$omezeni['99999_1'] = 'X';
$omezeni['29099_1'] = 'X1';

$trasa['29098_1'] = array('Praha-Vysočany;19:47','Praha ONJ;20:10');
$trasa['29099_1'] = array('Praha ONJ;4:40','Praha-Vysočany;4:58');
$trasa['99999_1'] = array('Záloha O11, Praha-Vysočany;5:00;19:47');

$typ[29098] = $typ[29099] = 'Sv';

@$ts447a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>