<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';
$obeh[1] = array('29099_1', '99999_1', '29098_1');

$omezeni['29098_1'] = '5';
$omezeni['29099_1'] = '1';
$omezeni['99999_1'] = 'X';

$trasa['29098_1'] = array('Praha-Vysočany;20:12','Odstavné nádraží Praha-jih;20:29');
$trasa['29099_1'] = array('Odstavné nádraží Praha-jih;4:41','Praha-Vysočany;4:59');
$trasa['99999_1'] = array('Záloha O11, Praha-Vysočany;5:00;20:00');

$typ['29098_1'] = $typ['29099_1'] = 'Sv';
$typ['99999_1'] = '';

@$ts446a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>