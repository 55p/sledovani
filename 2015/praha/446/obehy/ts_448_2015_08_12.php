<?php 
$zacatekPlatnosti = '12.8.2015';
$konecPlatnosti = '11.9.2015 23:59:59';
$obeh[1] = array('1830_1', '1833_1');

$omezeni['1830_1'] = 'X';
$omezeni['1833_1'] = 'X';

$typ[1830] = $typ[1833] = 'Sp';

$trasa['1830_1'] = array('Benešov u Prahy;6:14','Praha hl.n.;7:02');
$trasa['1833_1'] = array('Praha hl.n.;17:00','Benešov u Prahy;17:49');

@$ts448 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);

?>