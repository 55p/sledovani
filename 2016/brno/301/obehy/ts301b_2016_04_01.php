<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = '30.4.2016 23:59:59';

$obeh[1] = array('876_1', '871_1', '917_1', '914_1', '907_1', '912_1', '909_1', '908_1', '866_1', '875_1');

$omezeni['866_1'] = 'T';
$omezeni['871_1'] = 'X5';
$omezeni['875_1'] = 'zX';
$omezeni['876_1'] = 'X';
$omezeni['907_1'] = '6';
$omezeni['908_1'] = 'T';
$omezeni['909_1'] = 'T';
$omezeni['912_1'] = 'T';
$omezeni['914_1'] = '6';
$omezeni['917_1'] = 'X5';

$trasa['866_1'] = array('Brno hl.n.;14:57', 'Praha hl.n.;18:04');
$trasa['871_1'] = array('Praha hl.n.;15:55', 'Brno hl.n.;19:02');
$trasa['875_1'] = array('Praha hl.n.;20:03', 'Česká Třebová;21:52');
$trasa['876_1'] = array('Svitavy;5:00', 'Praha hl.n.;7:04');
$trasa['907_1'] = array('Brno hl.n.;9:18', 'Šumperk;11:39');
$trasa['908_1'] = array('Olomouc hl.n.;13:07', 'Brno hl.n.;14:43');
$trasa['909_1'] = array('Brno hl.n.;11:18', 'Olomouc hl.n.;12:51');
$trasa['912_1'] = array('Šumperk;8:09', 'Brno hl.n.;10:42');
$trasa['914_1'] = array('Šumperk;6:09', 'Brno hl.n.;8:42');
$trasa['917_1'] = array('Brno hl.n.;19:18', 'Šumperk;21:40');

@$ts301b -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>