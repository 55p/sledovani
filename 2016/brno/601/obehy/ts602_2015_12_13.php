<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1770_1', '803_2', '812_2', '811_2', '804_2', '1777_5', '1772_5', '201777_5');
$obeh[2] = array('101770_1', '100803_2', '100812_2', '100811_2', '100804_2', '101777_5');

$omezeni['100803_2'] = 'X';
$omezeni['100804_2'] = 'X';
$omezeni['100811_2'] = 'X';
$omezeni['100812_2'] = 'X';
$omezeni['101770_1'] = 'X';
$omezeni['101777_5'] = 'zX';
$omezeni['1770_1'] = 'X';
$omezeni['1772_5'] = '6';
$omezeni['1777_5'] = 'X';
$omezeni['201777_5'] = 'T';
$omezeni['803_2'] = 'X';
$omezeni['804_2'] = 'X';
$omezeni['811_2'] = 'X';
$omezeni['812_2'] = 'X';

$trasa['1770'] = array('Hodonín;5:17', 'Brno hl.n.;6:24');
$trasa['1772'] = array('Hodonín;7:17', 'Brno hl.n.;8:24');
$trasa['1777'] = array('Brno hl.n.;19:36', 'Hodonín;20:41');
$trasa['803'] = array('Brno hl.n.;6:36', 'Olomouc hl.n.;8:46');
$trasa['804'] = array('Olomouc hl.n.;17:10', 'Brno hl.n.;19:24');
$trasa['811'] = array('Brno hl.n.;14:36', 'Olomouc hl.n.;16:46');
$trasa['812'] = array('Olomouc hl.n.;9:10', 'Brno hl.n.;11:24');


$poznamkaObehu['201777_5'] = array('vlož', 'vložená');

$poznamkaObehu['1770_1'] = $poznamkaObehu['812_2'] = $poznamkaObehu['804_2'] = array('pk Bv-Br', 'postrk Břeclav - Brno');
$poznamkaObehu[101777] = $poznamkaObehu[100803] = $poznamkaObehu[100811] = array('pk Br-Bv', 'postrk Brno - Břeclav');

$poznamkaObehu['803_2'] = $poznamkaObehu['811_2'] = array('pk Bv-Ol', 'postrk Břeclav - Olomouc');
$poznamkaObehu[100812] = $poznamkaObehu[100804] = array('pk Ol-Bv', 'postrk Olomouc - Břeclav');

$poznamkaObehu['1777_5'] = array('pk Bv-Ho', 'postrk Břeclav - Hodonín');
$poznamkaObehu['1772_5'] = $poznamkaObehu[101770] = array('pk Ho-Bv', 'postrk Hodonín - Břeclav');

@$ts602 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>