<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1770_1', '803_1', '812_1', '811_1', '804_1', '1777_1', '1777_2', '101772_1', '101777_1'];
$obeh[2] = ['101770_1', '100803_1', '100812_1', '100811_1', '100804_1', '101777_2', '201777_1'];

$omezeni['803_1'] = 'X';
$omezeni['804_1'] = 'X';
$omezeni['811_1'] = 'X';
$omezeni['812_1'] = 'X';
$omezeni['1770_1'] = 'X';
$omezeni['1777_2'] = 'X5';
$omezeni['1777_1'] = 'X1234';
$omezeni['100803_1'] = 'X';
$omezeni['100804_1'] = 'X';
$omezeni['100811_1'] = 'X';
$omezeni['100812_1'] = 'X';
$omezeni['101770_1'] = 'X';
$omezeni['101772_1'] = '6';
$omezeni['101777_1'] = 'T';
$omezeni['101777_2'] = 'X1234';
$omezeni['201777_1'] = 'T';

$trasa['100803_1'] = ['Brno hl.n.;6:36', 'Olomouc hl.n.;8:46'];
$trasa['100804_1'] = ['Olomouc hl.n.;17:11', 'Brno hl.n.;19:24'];
$trasa['100811_1'] = ['Brno hl.n.;14:36', 'Olomouc hl.n.;16:46'];
$trasa['100812_1'] = ['Olomouc hl.n.;9:11', 'Brno hl.n.;11:24'];
$trasa['101770_1'] = ['Hodonín;5:28', 'Brno hl.n.;6:24'];
$trasa['101772_1'] = ['Hodonín;7:28', 'Brno hl.n.;8:24'];
$trasa['101777_1'] = ['Brno hl.n.;19:35', 'Hodonín;20:33'];
$trasa['101777_2'] = ['Brno hl.n.;19:35', 'Hodonín;20:33'];
$trasa['201777_1'] = ['Brno hl.n.;19:35', 'Hodonín;20:33'];
$trasa['1770_1'] = ['Hodonín;5:28', 'Brno hl.n.;6:24'];
$trasa['1777_1'] = ['Brno hl.n.;19:35', 'Hodonín;20:33'];
$trasa['1777_2'] = ['Brno hl.n.;19:35', 'Hodonín;20:33'];
$trasa['803_1'] = ['Brno hl.n.;6:36', 'Olomouc hl.n.;8:46'];
$trasa['804_1'] = ['Olomouc hl.n.;17:11', 'Brno hl.n.;19:24'];
$trasa['811_1'] = ['Brno hl.n.;14:36', 'Olomouc hl.n.;16:46'];
$trasa['812_1'] = ['Olomouc hl.n.;9:11', 'Brno hl.n.;11:24'];
//sem patri stazene trasy

$poznamkaObehu['803_1'] = ['pk Bv-Ol', 'postrk Břeclav - Olomouc hl.n.'];
$poznamkaObehu['804_1'] = ['pk Bv-Bh', 'postrk Břeclav - Brno hl.n.'];
$poznamkaObehu['811_1'] = ['pk Bv-Ol', 'postrk Břeclav - Olomouc hl.n.'];
$poznamkaObehu['812_1'] = ['pk Bv-Bh', 'postrk Břeclav - Brno hl.n.'];
$poznamkaObehu['1770_1'] = ['pk Bv-Bh', 'postrk Břeclav - Brno hl.n.'];
$poznamkaObehu['1777_1'] = ['pk Bv-Ho', 'postrk Břeclav - Hodonín'];
$poznamkaObehu['100803_1'] = ['pk Bh-Bv', 'postrk Brno hl.n. - Břeclav'];
$poznamkaObehu['100804_1'] = ['pk Ol-Bv', 'postrk Olomouc hl.n. - Břeclav'];
$poznamkaObehu['100811_1'] = ['pk Bh-Bv', 'postrk Brno hl.n. - Břeclav'];
$poznamkaObehu['100812_1'] = ['pk Ol-Bv', 'postrk Olomouc hl.n. - Břeclav'];
$poznamkaObehu['101770_1'] = ['pk Ho-Bv', 'postrk Hodonín - Břeclav'];
$poznamkaObehu['101772_1'] = ['pk Ho-Bv, př Bv-Bh', 'postrk Hodonín - Břeclav, přípřež Břeclav - Brno hl.n.'];
$poznamkaObehu['101777_2'] = ['pk Bh-Bv', 'postrk Brno hl.n. - Břeclav'];
$poznamkaObehu['201777_1'] = ['pk Bh-Bv, př Bv-Ho', 'postrk Brno hl.n. - Břeclav, přípřež Břeclav - Hodonín'];


$poznamkaObehu['101777_1'] = ['vlož', 'vložená'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts602 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


