<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('104770_1', '4703_1', '104742_1', '4785_1', '4711_1', '4712_1', '4721_1', '4721_2', '104748_1', '4748_1', '4751_1', '4722_1', '4724_1', '104728_1', '104728_2', '4731_1', '4733_1', '4737_1', '4020_1', '4730_1', '4739_1', '104024_1', '4738_1');

$omezeni['104728_1'] = 'X1234';
$omezeni['104728_2'] = 'X5';
$omezeni['104742_1'] = 'X';
$omezeni['104748_1'] = 'X';
$omezeni['104770_1'] = 'X';
$omezeni['4020_1'] = 'T';
$omezeni['104024_1'] = 'X5';
$omezeni['4703_1'] = 'X';
$omezeni['4711_1'] = 'T';
$omezeni['4712_1'] = 'T';
$omezeni['4721_1'] = 'T';
$omezeni['4721_2'] = 'X';
$omezeni['4722_1'] = '6';
$omezeni['4724_1'] = 'T';
$omezeni['4730_1'] = '6';
$omezeni['4731_1'] = '6';
$omezeni['4733_1'] = 'T';
$omezeni['4737_1'] = 'X5';
$omezeni['4738_1'] = '6';
$omezeni['4739_1'] = '6';
$omezeni['4748_1'] = 'T';
$omezeni['4751_1'] = 'X';
$omezeni['4785_1'] = 'X';


$poznamkaObehu['104770_1'] = array('pk', 'postrk');
$poznamkaObehu['104742_1'] = array('pk', 'postrk');
$poznamkaObehu['104748_1'] = array('pk', 'postrk');
$poznamkaObehu['104728_1'] = array('pk', 'postrk');
$poznamkaObehu['104728_2'] = array('pk', 'postrk');
$poznamkaObehu['104024_1'] = array('pk', 'postrk');

$poznamkaObehu['4703_1'] = array('vl', 'vlaková');
$poznamkaObehu['4751_1'] = array('vl', 'vlaková');
$poznamkaObehu['4737_1'] = array('vl', 'vlaková');

$trasa['4020_1'] = array('Křenovice horní n.;19:54', 'Brno hl.n.;20:26');
$trasa['4703_1'] = array('Letovice;4:58', 'Křenovice horní n.;6:32');
$trasa['4711_1'] = array('Letovice;6:58', 'Brno hl.n.;7:59');
$trasa['4712_1'] = array('Brno hl.n.;10:01', 'Letovice;11:01');
$trasa['4721_1'] = array('Letovice;11:58', 'Křenovice horní n.;13:33');
$trasa['4721_2'] = array('Brno hl.n.;13:06', 'Křenovice horní n.;13:33');
$trasa['4722_1'] = array('Brno hl.n.;15:01', 'Letovice;16:01');
$trasa['4724_1'] = array('Brno hl.n.;16:01', 'Březová nad Svitavou;17:13');
$trasa['4730_1'] = array('Brno hl.n.;19:01', 'Letovice;20:01');
$trasa['4731_1'] = array('Letovice;16:58', 'Brno hl.n.;17:59');
$trasa['4733_1'] = array('Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33');
$trasa['4737_1'] = array('Březová nad Svitavou;19:47', 'Křenovice horní n.;21:33');
$trasa['4738_1'] = array('Brno hl.n.;23:04', 'Letovice;0:04');
$trasa['4739_1'] = array('Letovice;20:58', 'Brno hl.n.;21:59');
$trasa['4748_1'] = array('Křenovice horní n.;13:54', 'Brno hl.n.;14:26');
$trasa['4751_1'] = array('Skalice nad Svitavou;15:43', 'Sokolnice-Telnice;16:51');
$trasa['4785_1'] = array('Brno-Židenice;7:40', 'Brno-Slatina;7:49');

$trasa['4024'] = array('Křenovice horní n.;21:58', 'Brno hl.n.;22:26');
$trasa['4748'] = array('Křenovice horní n.;13:54', 'Skalice nad Svitavou;15:19');
$trasa['104742_1'] = array('Křenovice horní n.;6:54', 'Brno-Židenice;7:32');
$trasa['4770'] = array('Skalice nad Svitavou;4:40', 'Letovice;4:50');

$trasa['104728_1'] = array('Sokolnice-Telnice;17:35', 'Skalice nad Svitavou;18:48');
$trasa['104728_2'] = array('Sokolnice-Telnice;17:35', 'Březová nad Svitavou;19:14');

@$ts602 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>