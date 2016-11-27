<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7403_1', '7412_1');
$obeh[2] = array('7407_1', '7414_1');

$omezeni['7403_1'] = 'X';
$omezeni['7407_1'] = 'X';
$omezeni['7412_1'] = 'X';
$omezeni['7414_1'] = 'X';

$trasa['7403_1'] = array('Domažlice město;4:25', 'Plzeň hl.n.;5:42');
$trasa['7407_1'] = array('Domažlice;6:14', 'Plzeň hl.n.;7:33');
$trasa['7412_1'] = array('Plzeň hl.n.;14:10', 'Domažlice;15:30');
$trasa['7414_1'] = array('Plzeň hl.n.;15:06', 'Domažlice;16:22');

@$ts701 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>