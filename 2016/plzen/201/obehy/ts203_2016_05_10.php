<?php 
$zacatekPlatnosti = '10.5.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1981_1', '8945_1', '8944_1', '1988', '1990_1', '7384_1');
$obeh[2] = array('7813_1', '7824_1', '7837_1', '7834_1');

$omezeni['1988'] = 'X5';
$omezeni['1981_1'] = 'X6';
$omezeni['1990_1'] = 'zX';
$omezeni['7384_1'] = 'zX';
$omezeni['7813_1'] = 'X';
$omezeni['7824_1'] = 'X';
$omezeni['7834_1'] = 'X';
$omezeni['7837_1'] = 'X';
$omezeni['8944_1'] = '6';
$omezeni['8945_1'] = '6';


$trasa['1988'] = array('Plzeň hl.n.;15:00', 'Cheb;17:02');
$trasa['1981_1'] = array('Cheb;5:04', 'Plzeň hl.n.;6:59');
$trasa['1990_1'] = array('Plzeň hl.n.;16:59', 'Mariánské Lázně;18:09');
$trasa['7384_1'] = array('Mariánské Lázně;18:40', 'Cheb;19:10');
$trasa['7813_1'] = array('Plzeň hl.n.;15:14', 'Zdice;16:18');
$trasa['7824_1'] = array('Zdice;17:35', 'Plzeň hl.n.;18:41');
$trasa['7834_1'] = array('Rokycany;20:14', 'Plzeň hl.n.;20:41');
$trasa['7837_1'] = array('Plzeň hl.n.;19:14', 'Rokycany;19:39');
$trasa['8944_1'] = array('Nepomuk;9:08', 'Plzeň hl.n.;9:53');
$trasa['8945_1'] = array('Plzeň hl.n.;8:08', 'Nepomuk;8:50');


@$ts203 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>