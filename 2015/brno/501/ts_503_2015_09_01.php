<?php 
$zacatekPlatnosti = '1.9.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4707_1', '4008_1', '4007_1', '4714_1', '4723_1', '4750_1', '4753_1', '4730_1', '4741_1', '4706_1', '4715_1', '4722_1', '4731_1', '4730_2', '4739_1', '4738_1');

$omezeni['4007_1'] = 'X';
$omezeni['4008_1'] = 'X';
$omezeni['4706_1'] = '6';
$omezeni['4707_1'] = 'X';
$omezeni['4714_1'] = 'X';
$omezeni['4715_1'] = '6';
$omezeni['4722_1'] = 'T';
$omezeni['4723_1'] = 'X';
$omezeni['4730_1'] = 'X';
$omezeni['4730_2'] = 'T';
$omezeni['4731_1'] = 'T';
$omezeni['4738_1'] = 'X,T';
$omezeni['4739_1'] = 'X,T';
$omezeni['4741_1'] = '6';
$omezeni['4750_1'] = 'X';
$omezeni['4753_1'] = 'X';

$trasa['4007_1'] = array('Rájec-Jestřebí;9:45', 'Brno hl.n.;10:29');
$trasa['4008_1'] = array('Křenovice horní n.;7:54', 'Rájec-Jestřebí;9:12');
$trasa['4706_1'] = array('Brno hl.n.;7:01', 'Letovice;8:01');
$trasa['4707_1'] = array('Letovice;5:58', 'Křenovice horní n.;7:42');
$trasa['4714_1'] = array('Brno hl.n.;11:01', 'Letovice;12:01');
$trasa['4715_1'] = array('Letovice;8:58', 'Brno hl.n.;9:59');
$trasa['4722_1'] = array('Brno hl.n.;15:01', 'Letovice;16:01');
$trasa['4723_1'] = array('Letovice;12:58', 'Křenovice horní n.;14:33');
$trasa['4730_1'] = array('Sokolnice-Telnice;18:39', 'Letovice;20:01');
$trasa['4730_2'] = array('Brno hl.n.;19:01', 'Letovice;20:01');
$trasa['4731_1'] = array('Letovice;16:58', 'Brno hl.n.;17:59');
$trasa['4738_1'] = array('Brno hl.n.;23:04', 'Letovice;0:04');
$trasa['4739_1'] = array('Letovice;20:58', 'Brno hl.n.;21:59');
$trasa['4741_1'] = array('Letovice;3:58', 'Brno hl.n.;4:57');
$trasa['4750_1'] = array('Křenovice horní n.;14:54', 'Skalice nad Svitavou;16:19');
$trasa['4753_1'] = array('Skalice nad Svitavou;16:43', 'Sokolnice-Telnice;17:51');


@$ts503 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>