<?php 
$zacatekPlatnosti = '1.3.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('901_1', '912_1', '870_1', '100870_1', '871_1');
$obeh[2] = array('872_1', '869_1', '915_1');
$obeh[3] = array('914_1', '870_2', '100871_1');

$omezeni['100870_1'] = 'X5';
$omezeni['100871_1'] = 'X5';
$omezeni['870_1'] = 'X1234,25';
$omezeni['870_2'] = 'X5';
$omezeni['901_1'] = 'X';
$omezeni['914_1'] = 'X';


$poznamkaObehu['100870_1'] = array('pk', 'postrk');

$trasa['869_1'] = array('Praha hl.n.;13:55', 'Brno hl.n.;17:02');
$trasa['870'] = array('Brno hl.n.;10:57', 'Praha hl.n.;14:04');
$trasa['871'] = array('Praha hl.n.;15:55', 'Brno hl.n.;19:02');
$trasa['872_1'] = array('Brno hl.n.;8:57', 'Praha hl.n.;12:04');
$trasa['901_1'] = array('Brno hl.n.;5:23', 'Šumperk;7:40');
$trasa['912_1'] = array('Šumperk;8:09', 'Brno hl.n.;10:42');
$trasa['914_1'] = array('Šumperk;6:09', 'Brno hl.n.;8:42');
$trasa['915_1'] = array('Brno hl.n.;17:18', 'Šumperk;19:42');

$typ[-1] = 'R';

@$ts606 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>