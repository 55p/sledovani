<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('104714_1', '4723_1', '104724_1', '104718_1', '4727_1', '104754_1', '4757_1', '4733_1', '104020_1', '4734_1', '4027_1');
$obeh[2] = array('104702_1', '4711_1', '104010_1', '4009_1', '104716_1', '4725_1', '104752_1', '4755_1', '4714_1', '104723_1', '4724_1', '104733_1', '4020_1', '4703_1', '4742_1', '4708_1', '4717_1', '4744_1');

$omezeni['104010_1'] = 'X';
$omezeni['104020_1'] = '6';
$omezeni['104702_1'] = 'X';
$omezeni['104714_1'] = '6';
$omezeni['104716_1'] = 'X';
$omezeni['104718_1'] = 'X';
$omezeni['104723_1'] = '6';
$omezeni['104724_1'] = '6';
$omezeni['104733_1'] = '6';
$omezeni['104752_1'] = 'X';
$omezeni['104754_1'] = 'X';
$omezeni['4009_1'] = 'X';
$omezeni['4020_1'] = '6';
$omezeni['4027_1'] = 'zX';
$omezeni['4703_1'] = 'T';
$omezeni['4708_1'] = 'T';
$omezeni['4711_1'] = 'X';
$omezeni['4714_1'] = '6';
$omezeni['4717_1'] = 'T';
$omezeni['4723_1'] = '6';
$omezeni['4724_1'] = '6';
$omezeni['4725_1'] = 'X';
$omezeni['4727_1'] = 'X';
$omezeni['4733_1'] = '6';
$omezeni['4734_1'] = '6';
$omezeni['4742_1'] = 'T';
$omezeni['4744_1'] = 'T';
$omezeni['4755_1'] = 'X';
$omezeni['4757_1'] = 'X';


$poznamkaObehu['104714_1'] = array('pk', 'postrk');
$poznamkaObehu['104724_1'] = array('pk', 'postrk');
$poznamkaObehu['104718_1'] = array('pk', 'postrk');
$poznamkaObehu['104754_1'] = array('pk', 'postrk');
$poznamkaObehu['104020_1'] = array('pk', 'postrk');
$poznamkaObehu['104702_1'] = array('pk', 'postrk');
$poznamkaObehu['104010_1'] = array('pk', 'postrk');
$poznamkaObehu['104716_1'] = array('pk', 'postrk');
$poznamkaObehu['104752_1'] = array('pk', 'postrk');
$poznamkaObehu['104723_1'] = array('pk', 'postrk');
$poznamkaObehu['104733_1'] = array('pk', 'postrk');

$poznamkaObehu['4723_1'] = array('vl', 'vlaková');
$poznamkaObehu['4727_1'] = array('vl', 'vlaková');
$poznamkaObehu['4757_1'] = array('vl', 'vlaková');
$poznamkaObehu['4733_1'] = array('vl', 'vlaková');
$poznamkaObehu['4027_1'] = array('vl', 'vlaková');
$poznamkaObehu['4711_1'] = array('vl', 'vlaková');
$poznamkaObehu['4009_1'] = array('vl', 'vlaková');
$poznamkaObehu['4725_1'] = array('vl', 'vlaková');
$poznamkaObehu['4755_1'] = array('vl', 'vlaková');
$poznamkaObehu['4714_1'] = array('vl', 'vlaková');
$poznamkaObehu['4724_1'] = array('vl', 'vlaková');
$poznamkaObehu['4020_1'] = array('vl', 'vlaková');

$trasa['4009_1'] = array('Rájec-Jestřebí;10:45', 'Brno hl.n.;11:29');
$trasa['4020'] = array('Křenovice horní n.;19:54', 'Brno hl.n.;20:26');
$trasa['4027_1'] = array('Brno hl.n.;22:46', 'Vyškov na Moravě;23:33');
$trasa['4703_1'] = array('Letovice;4:58', 'Křenovice horní n.;6:32');
$trasa['4708_1'] = array('Brno hl.n.;8:02', 'Březová nad Svitavou;9:13');
$trasa['4711_1'] = array('Letovice;6:58', 'Křenovice horní n.;8:33');
$trasa['4714'] = array('Brno hl.n.;11:01', 'Letovice;12:01');
$trasa['4717_1'] = array('Březová nad Svitavou;9:47', 'Křenovice horní n.;11:33');
$trasa['4723'] = array('Letovice;12:58', 'Brno hl.n.;13:59');
$trasa['4724'] = array('Brno hl.n.;16:01', 'Březová nad Svitavou;17:13');
$trasa['4725_1'] = array('Březová nad Svitavou;13:47', 'Křenovice horní n.;15:33');
$trasa['4727_1'] = array('Březová nad Svitavou;14:47', 'Křenovice horní n.;16:33');
$trasa[4733] = array('Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33');
$trasa['4734_1'] = array('Brno hl.n.;21:01', 'Letovice;22:01');
$trasa['4742_1'] = array('Křenovice horní n.;6:54', 'Brno hl.n.;7:26');
$trasa['4744_1'] = array('Křenovice horní n.;11:54', 'Brno hl.n.;12:26');
$trasa['4755_1'] = array('Skalice nad Svitavou;17:43', 'Brno hl.n.;18:31');
$trasa['4757_1'] = array('Skalice nad Svitavou;18:43', 'Brno hl.n.;19:30');

$trasa['4702'] = array('Vyškov na Moravě;4:33', 'Letovice;6:29');
$trasa['4010'] = array('Křenovice horní n.;8:54', 'Rájec-Jestřebí;10:12');
$trasa['4716'] = array('Brno hl.n.;12:01', 'Březová nad Svitavou;13:12');
$trasa['4752'] = array('Křenovice horní n.;15:54', 'Skalice nad Svitavou;17:19');
$trasa['4718'] = array('Brno hl.n.;13:01', 'Březová nad Svitavou;14:14');
$trasa['4754'] = array('Křenovice horní n.;16:52', 'Skalice nad Svitavou;18:19');

@$ts603 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>