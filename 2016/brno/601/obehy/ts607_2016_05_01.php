<?php 
$zacatekPlatnosti = '1.5.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('876_1', '100863_1', '866_1', '100871_1');
$obeh[2] = array('870_1', '100871_2', '100871_3', '866_2', '100875_1');

$omezeni['100863_1'] = 'X';
$omezeni['100871_1'] = 'T';
$omezeni['100871_2'] = 'X1234';
$omezeni['100871_3'] = 'X5';
$omezeni['100875_1'] = 'T';
$omezeni['866_1'] = 'X5';
$omezeni['866_2'] = 'T';
$omezeni['870_1'] = 'X';
$omezeni['876_1'] = 'X';

$trasa['100871_2'] = array('Praha hl.n.;15:55','Česká Třebová;17:47');

$poznamkaObehu['100863_1'] = array('pk', 'postrk');
$poznamkaObehu['100871_1'] = array('pk', 'postrk');
$poznamkaObehu['100871_2'] = array('pk', 'postrk');
$poznamkaObehu['100871_3'] = array('pk', 'postrk');
$poznamkaObehu['100875_1'] = array('pk', 'postrk');

$trasa['866'] = array('Brno hl.n.;14:57', 'Praha hl.n.;18:04');
$trasa['870_1'] = array('Brno hl.n.;10:57', 'Praha hl.n.;14:04');
$trasa['876_1'] = array('Svitavy;5:00', 'Praha hl.n.;7:04');
$trasa['871'] = array('Praha hl.n.;15:55', 'Brno hl.n.;19:02');
$trasa['863'] = array('Praha hl.n.;7:55', 'Brno hl.n.;11:02');
$trasa['875'] = array('Praha hl.n.;20:03', 'Česká Třebová;21:52');

@$ts607 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>