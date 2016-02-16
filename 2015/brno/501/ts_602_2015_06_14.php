<?php
$obeh[1] = array('4707_1', '4008_1', '4007_1', '4714_1', '4723_1', '4750_1', '4753_1', '4730_1', '4722_1', '4731_1', '4730_2', '4739_1', '4738_1');
$obeh[2] = array('4741_1', '4706_1', '4715_1', '4212_1', '4721_1', '4724_1', '4733_1', '4020_1');

$omezeni['4007_1'] = 'X';
$omezeni['4008_1'] = 'X';
$omezeni['4020_1'] = 'T';
$omezeni['4212_1'] = 'T';
$omezeni['4706_1'] = '6';
$omezeni['4707_1'] = 'X';
$omezeni['4714_1'] = 'X';
$omezeni['4715_1'] = '6';
$omezeni['4721_1'] = 'T';
$omezeni['4722_1'] = '25';
$omezeni['4723_1'] = 'X';
$omezeni['4724_1'] = 'T';
$omezeni['4730_1'] = 'X';
$omezeni['4730_2'] = '25';
$omezeni['4731_1'] = '25';
$omezeni['4733_1'] = 'T';
$omezeni['4741_1'] = '6';
$omezeni['4750_1'] = 'X';
$omezeni['4753_1'] = 'X';

$trasa['4007_1'] = array('Rájec-Jestřebí;9:45', 'Brno hl.n.;10:29');
$trasa['4008_1'] = array('Křenovice horní n.;7:54', 'Rájec-Jestřebí;9:12');
$trasa['4020_1'] = array('Křenovice horní n.;19:54', 'Brno hl.n.;20:26');
$trasa['4212_1'] = array('Hulín;6:01', 'Břeclav;7:24');
$trasa['4706_1'] = array('Brno hl.n.;7:01', 'Letovice;8:01');
$trasa['4707_1'] = array('Letovice;5:58', 'Křenovice horní n.;7:42');
$trasa['4714_1'] = array('Brno hl.n.;11:01', 'Letovice;12:01');
$trasa['4715_1'] = array('Letovice;8:58', 'Brno hl.n.;9:59');
$trasa['4721_1'] = array('Letovice;11:58', 'Křenovice horní n.;13:33');
$trasa['4722_1'] = array('Brno hl.n.;15:01', 'Letovice;16:01');
$trasa['4723_1'] = array('Letovice;12:58', 'Křenovice horní n.;14:33');
$trasa['4724_1'] = array('Brno hl.n.;16:01', 'Březová n.Svitavou;17:13');
$trasa['4730_1'] = array('Sokolnice-Telnice;18:39', 'Letovice;20:01');
$trasa['4730_2'] = array('Brno hl.n.;19:01', 'Letovice;20:01');
$trasa['4731_1'] = array('Letovice;16:58', 'Brno hl.n.;17:59');
$trasa['4733_1'] = array('Březová n.Svitavou;17:47', 'Křenovice horní n.;19:33');
$trasa['4738_1'] = array('Brno hl.n.;23:04', 'Letovice;0:04');
$trasa['4739_1'] = array('Letovice;20:58', 'Brno hl.n.;21:59');
$trasa['4741_1'] = array('Letovice;3:58', 'Brno hl.n.;4:57');
$trasa['4750_1'] = array('Křenovice horní n.;14:54', 'Skalice n.Svitavou;16:19');
$trasa['4753_1'] = array('Skalice n.Svitavou;16:43', 'Sokolnice-Telnice;17:51');

@$ts602 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, '31.8.2015 23:59:59')); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>