<?php 
$zacatekPlatnosti = '12.9.2016';
$konecPlatnosti = null;

$obeh[1] = array('4722_1', '4731_1', '104707_1', '4008_1', '104007_1', '4714_1', '104723_1', '4750_1', '104753_1', '4730_1', '4739_1', '4738_1', '104739_1', '104738_1');
$obeh[2] = array('4741_1', '4706_1', '4715_1', '4707_1', '4711_1', '104008_1', '4007_1', '4723_2', '104750_1', '4753_1', '4730_2', '4739_2', '4712_1', '4721_1', '4748_1', '4724_1', '4733_1', '4020_1', '4738_2');

$omezeni['104007_1'] = 'X';
$omezeni['104008_1'] = 'X';
$omezeni['104707_1'] = 'X';
$omezeni['104723_1'] = 'X';
$omezeni['104738_1'] = 'T';
$omezeni['104739_1'] = 'X5';
$omezeni['104750_1'] = 'X';
$omezeni['104753_1'] = 'X';
$omezeni['4007_1'] = 'X';
$omezeni['4008_1'] = 'X';
$omezeni['4020_1'] = 'T';
$omezeni['4706_1'] = '6';
$omezeni['4707_1'] = 'X';
$omezeni['4711_1'] = 'T';
$omezeni['4712_1'] = 'T';
$omezeni['4714_1'] = 'X';
$omezeni['4715_1'] = '6';
$omezeni['4721_1'] = 'T';
$omezeni['4722_1'] = '6, T';
$omezeni['4723_1'] = 'X';
$omezeni['4723_2'] = 'X';
$omezeni['4724_1'] = 'T';
$omezeni['4730_1'] = 'X';
$omezeni['4730_2'] = 'X';
$omezeni['4731_1'] = '6, T';
$omezeni['4733_1'] = 'T';
$omezeni['4738_1'] = 'X, 6';
$omezeni['4738_2'] = 'T';
$omezeni['4739_1'] = 'X1234, 6, T';
$omezeni['4739_2'] = 'X5';
$omezeni['4741_1'] = '6';
$omezeni['4748_1'] = 'T';
$omezeni['4750_1'] = 'X';
$omezeni['4753_1'] = 'X';


$poznamkaObehu['104707_1'] = array('pk', 'postrk');
$poznamkaObehu['104007_1'] = array('pk', 'postrk');
$poznamkaObehu['104723_1'] = array('pk', 'postrk');
$poznamkaObehu['104753_1'] = array('pk', 'postrk');
$poznamkaObehu['104739_1'] = array('pk', 'postrk');
$poznamkaObehu['104738_1'] = array('pk', 'postrk');
$poznamkaObehu['104008_1'] = array('pk', 'postrk');
$poznamkaObehu['104750_1'] = array('pk', 'postrk');

$poznamkaObehu['4008_1'] = array('vl', 'vlaková');
$poznamkaObehu['4750_1'] = array('vl', 'vlaková');
$poznamkaObehu['4730_1'] = array('vl', 'vlaková');
$poznamkaObehu['4707_1'] = array('vl', 'vlaková');
$poznamkaObehu['4007_1'] = array('vl', 'vlaková');
$poznamkaObehu['4723_2'] = array('vl', 'vlaková');
$poznamkaObehu['4753_1'] = array('vl', 'vlaková');
$poznamkaObehu['4730_2'] = array('vl', 'vlaková');
$poznamkaObehu['4739_2'] = array('vl', 'vlaková');
$poznamkaObehu['4738_2'] = array('vl', 'vlaková');

$trasa['4007'] = array('Rájec-Jestřebí;9:51', 'Brno hl.n.;10:32');
$trasa['4008'] = array('Křenovice horní n.;7:54', 'Rájec-Jestřebí;9:09');
$trasa['4020_1'] = array('Křenovice horní n.;19:54', 'Brno hl.n.;20:26');
$trasa['4706_1'] = array('Brno hl.n.;6:58', 'Letovice;8:01');
$trasa['4707'] = array('Letovice;5:58', 'Křenovice horní n.;7:42');
$trasa['4711_1'] = array('Letovice;6:58', 'Brno hl.n.;7:59');
$trasa['4712_1'] = array('Brno hl.n.;10:01', 'Letovice;11:01');
$trasa['4714_1'] = array('Brno hl.n.;11:01', 'Letovice;12:01');
$trasa['4715_1'] = array('Letovice;8:58', 'Brno hl.n.;9:59');
$trasa['4721_1'] = array('Letovice;11:58', 'Křenovice horní n.;13:33');
$trasa['4722_1'] = array('Brno hl.n.;15:01', 'Letovice;16:01');
$trasa['104723_1'] = array('Letovice;12:58', 'Křenovice horní n.;14:33');
$trasa['4723_2'] = array('Brno hl.n.;14:06', 'Křenovice horní n.;14:33');
$trasa['4724_1'] = array('Brno hl.n.;16:01', 'Březová nad Svitavou;17:12');
$trasa['4730_1'] = array('Sokolnice-Telnice;18:39', 'Letovice;20:01');
$trasa['4730_2'] = array('Sokolnice-Telnice;18:39', 'Letovice;20:01');
$trasa['4731_1'] = array('Letovice;16:58', 'Brno hl.n.;18:01');
$trasa['4733_1'] = array('Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33');
$trasa[4738] = array('Brno hl.n.;23:04', 'Letovice;0:04');
$trasa['4739'] = array('Letovice;20:58', 'Brno hl.n.;21:59');
$trasa['4739_2'] = array('Letovice;20:58', 'Brno hl.n.;21:59');
$trasa['4741_1'] = array('Letovice;4:00', 'Brno hl.n.;4:57');
$trasa['4748_1'] = array('Křenovice horní n.;13:54', 'Brno hl.n.;14:26');
$trasa['4750'] = array('Křenovice horní n.;14:54', 'Skalice nad Svitavou;16:18');
$trasa['4753'] = array('Skalice nad Svitavou;16:43', 'Sokolnice-Telnice;17:51');


@$ts604 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>