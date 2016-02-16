<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1008_1', '1008_2',  '1011_1', '1011_2');

$omezeni['1008_1'] = '11';
$omezeni['1011_1'] = '10';
$omezeni['1008_2'] = '2512,0101';
$omezeni['1011_2'] = '2412,3112';

$trasa['1008_1'] = array('Martin;6:16', 'Praha hl.n.;11:58');
$trasa['1008_2'] = array('Havířov;8:11', 'Praha hl.n.;11:58');
$trasa['1011_1'] = array('Praha hl.n.;14:46', 'Martin;20:10');
$trasa['1011_2'] = array('Praha hl.n.;14:46', 'Havířov;18:29');

@$ts104 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>