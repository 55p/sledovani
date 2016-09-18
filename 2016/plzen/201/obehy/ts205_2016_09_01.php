<?php 
$zacatekPlatnosti = '1.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8955_1', '8942_1', '1980_1', '7029_1', '7024_1', '1989_1');

$omezeni['1980_1'] = 'X5';
$omezeni['1989_1'] = 'X5';
$omezeni['7024_1'] = 'X5';
$omezeni['7029_1'] = 'X5';
$omezeni['8942_1'] = 'X5';
$omezeni['8955_1'] = 'X4';

$trasa['1980_1'] = array('Plzeň hl.n.;7:00', 'Cheb;8:41');
$trasa['1989_1'] = array('Cheb;15:19', 'Plzeň hl.n.;17:00');
$trasa['7024_1'] = array('Karlovy Vary;14:12', 'Cheb;15:09');
$trasa['7029_1'] = array('Cheb;12:43', 'Karlovy Vary;13:40');
$trasa['8942_1'] = array('Nepomuk;5:38', 'Plzeň hl.n.;6:25');
$trasa['8955_1'] = array('Plzeň hl.n.;22:54', 'Nepomuk;23:31');

@$ts205 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>