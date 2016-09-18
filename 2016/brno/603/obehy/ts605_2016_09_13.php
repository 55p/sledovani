<?php 
$zacatekPlatnosti = '12.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4001_1', '4703_1', '104742_1', '4006_1', '4005_1', '4785_1', '4718_1', '4727_1', '4721_1', '104748_1', '4751_1', '4728_1', '104714_1', '4723_1', '104724_1', '4733_1', '104020_1', '4734_1', '4027_1');
$obeh[2] = array('104702_1', '4711_1', '104010_1', '4009_1', '4703_2', '104742_2', '4716_1', '4725_1', '104752_1', '4064_1', '4067_1', '4068_1', '4714_1', '104723_2', '4724_1', '104733_2', '4020_1', '4703_3', '4742_1', '4708_1', '4717_1', '4744_1', '4732_1');

$omezeni['104010_1'] = 'X1';
$omezeni['104020_1'] = '6';
$omezeni['104702_1'] = 'X1';
$omezeni['104714_1'] = '6';
$omezeni['104724_1'] = '6';
$omezeni['104742_1'] = 'X1';
$omezeni['104742_2'] = 'X2345, 6';
$omezeni['104748_1'] = 'X5';
$omezeni['4001_1'] = 'X2345';
$omezeni['4005_1'] = 'X2345';
$omezeni['4006_1'] = 'X2345';
$omezeni['4009_1'] = 'X1';
$omezeni['4020_1'] = '6';
$omezeni['4027_1'] = 'T';
$omezeni['4064_1'] = 'X';
$omezeni['4067_1'] = 'X';
$omezeni['4068_1'] = 'X';
$omezeni['4703_1'] = 'X1';
$omezeni['4703_2'] = 'X2345, 6';
$omezeni['4703_3'] = 'T';
$omezeni['4708_1'] = 'T';
$omezeni['4711_1'] = 'X1';
$omezeni['4714_1'] = '6';
$omezeni['4716_1'] = 'X';
$omezeni['4717_1'] = 'T';
$omezeni['4718_1'] = 'X1234';
$omezeni['4721_1'] = 'X5';
$omezeni['4723_1'] = '6';
$omezeni['104723_2'] = '6';
$omezeni['4724_1'] = '6';
$omezeni['4725_1'] = 'X';
$omezeni['4727_1'] = 'X1234';
$omezeni['4728_1'] = 'X';
$omezeni['4732_1'] = 'T';
$omezeni['4733_1'] = '6';
$omezeni['104733_2'] = '6';
$omezeni['4734_1'] = '6';
$omezeni['4742_1'] = 'T';
$omezeni['4744_1'] = 'T';
$omezeni['4751_1'] = 'X5';
$omezeni['104752_1'] = 'X';
$omezeni['4785_1'] = 'X1';


$poznamkaObehu['104742_1'] = array('pk', 'postrk');
$poznamkaObehu['104748_1'] = array('pk', 'postrk');
$poznamkaObehu['104714_1'] = array('pk', 'postrk');
$poznamkaObehu['104724_1'] = array('pk', 'postrk');
$poznamkaObehu['104020_1'] = array('pk', 'postrk');
$poznamkaObehu['104702_1'] = array('pk', 'postrk');
$poznamkaObehu['104010_1'] = array('pk', 'postrk');
$poznamkaObehu['104742_2'] = array('pk', 'postrk');
$poznamkaObehu['104752_1'] = array('pk', 'postrk');
$poznamkaObehu['104723_2'] = array('pk', 'postrk');
$poznamkaObehu['104733_2'] = array('pk', 'postrk');

$poznamkaObehu['4703_1'] = array('vl', 'vlaková');
$poznamkaObehu['4718_1'] = array('vl', 'vlaková');
$poznamkaObehu['4727_1'] = array('vl', 'vlaková');
$poznamkaObehu['4721_1'] = array('vl', 'vlaková');
$poznamkaObehu['4751_1'] = array('vl', 'vlaková');
$poznamkaObehu['4728_1'] = array('vl', 'vlaková');
$poznamkaObehu['4723_1'] = array('vl', 'vlaková');
$poznamkaObehu['4733_1'] = array('vl', 'vlaková');
$poznamkaObehu['4027_1'] = array('vl', 'vlaková');
$poznamkaObehu['4711_1'] = array('vl', 'vlaková');
$poznamkaObehu['4009_1'] = array('vl', 'vlaková');
$poznamkaObehu['4703_2'] = array('vl', 'vlaková');
$poznamkaObehu['4716_1'] = array('vl', 'vlaková');
$poznamkaObehu['4725_1'] = array('vl', 'vlaková');
$poznamkaObehu['4714_1'] = array('vl', 'vlaková');
$poznamkaObehu['4724_1'] = array('vl', 'vlaková');
$poznamkaObehu['4020_1'] = array('vl', 'vlaková');
$poznamkaObehu['4732_1'] = array('vl', 'vlaková');

$trasa['104742_1'] = array('Křenovice horní n.;6:54', 'Brno-Židenice;7:32');
$trasa['104748'] = array('Křenovice horní n.;13:54', 'Skalice nad Svitavou;15:18');
$trasa['104702'] = array('Vyškov na Moravě;4:33', 'Letovice;6:23');
$trasa['104010'] = array('Křenovice horní n.;8:54', 'Rájec-Jestřebí;10:09');

$trasa['4001_1'] = array('Rájec-Jestřebí;5:05', 'Brno hl.n.;5:43');
$trasa['4005_1'] = array('Rájec-Jestřebí;7:11', 'Brno hl.n.;7:46');
$trasa['4006_1'] = array('Brno hl.n.;6:15', 'Rájec-Jestřebí;6:53');
$trasa['4009_1'] = array('Rájec-Jestřebí;10:51', 'Brno hl.n.;11:32');
$trasa['4020'] = array('Křenovice horní n.;19:54', 'Brno hl.n.;20:26');
$trasa['4027_1'] = array('Brno hl.n.;22:46', 'Vyškov na Moravě;23:33');
$trasa['4064_1'] = array('Brno hl.n.;16:44', 'Blansko;17:10');
$trasa['4067_1'] = array('Blansko;17:42', 'Brno hl.n.;18:12');
$trasa['4068_1'] = array('Brno hl.n.;20:29', 'Rájec-Jestřebí;21:09');
$trasa['4703_1'] = array('Letovice;5:00', 'Křenovice horní n.;6:32');
$trasa['4703_2'] = array('Letovice;5:00', 'Křenovice horní n.;6:32');
$trasa['4703_3'] = array('Letovice;5:00', 'Křenovice horní n.;6:32');
$trasa['4708_1'] = array('Brno hl.n.;8:02', 'Březová nad Svitavou;9:13');
$trasa['4711_1'] = array('Letovice;6:58', 'Křenovice horní n.;8:33');
$trasa['4714'] = array('Brno hl.n.;11:01', 'Letovice;12:01');
$trasa['4716_1'] = array('Brno hl.n.;12:01', 'Březová nad Svitavou;13:12');
$trasa['4717_1'] = array('Březová nad Svitavou;9:47', 'Křenovice horní n.;11:33');
$trasa['4718_1'] = array('Brno hl.n.;13:01', 'Březová nad Svitavou;14:12');
$trasa['4721_1'] = array('Březová nad Svitavou;11:47', 'Křenovice horní n.;13:33');
$trasa['4723_1'] = array('Letovice;12:58', 'Brno hl.n.;13:59');
$trasa['104723_2'] = array('Letovice;12:58', 'Brno hl.n.;13:59');
$trasa[4724] = array('Brno hl.n.;16:01', 'Březová nad Svitavou;17:12');
$trasa['4725_1'] = array('Březová nad Svitavou;13:47', 'Křenovice horní n.;15:33');
$trasa['4727_1'] = array('Březová nad Svitavou;14:47', 'Křenovice horní n.;16:33');
$trasa['4728_1'] = array('Sokolnice-Telnice;17:35', 'Březová nad Svitavou;19:14');
$trasa['4732_1'] = array('Brno hl.n.;20:01', 'Březová nad Svitavou;21:12');
$trasa['4733_1'] = array('Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33');
$trasa['104733_2'] = array('Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33');
$trasa['4734_1'] = array('Brno hl.n.;21:01', 'Letovice;22:01');
$trasa['4742'] = array('Křenovice horní n.;6:54', 'Brno hl.n.;7:26');
$trasa['4744_1'] = array('Křenovice horní n.;11:54', 'Brno hl.n.;12:26');
$trasa['4751_1'] = array('Skalice nad Svitavou;15:43', 'Sokolnice-Telnice;16:51');
$trasa['104752_1'] = array('Křenovice horní n.;15:54', 'Skalice nad Svitavou;17:18');
$trasa['4785_1'] = array('Brno-Židenice;7:40', 'Brno-Slatina;7:50');


@$ts605 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>