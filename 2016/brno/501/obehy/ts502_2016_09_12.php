<?php 
$zacatekPlatnosti = '12.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4770_1', '4701_1', '4706_1', '4715_1', '4014_1', '4014_2', '4013_1', '4722_1', '4731_1', '4758_1', '4017_1', '4707_1', '4008_1', '4710_1', '4719_1', '4720_1', '4729_1', '4756_1', '4758_2');

$omezeni['4008_1'] = 'N';
$omezeni['4013_1'] = 'X';
$omezeni['4014_1'] = 'X';
$omezeni['4014_2'] = 'X';
$omezeni['4017_1'] = 'X5';
$omezeni['4701_1'] = 'X';
$omezeni['4706_1'] = 'X';
$omezeni['4707_1'] = 'N';
$omezeni['4710_1'] = 'N';
$omezeni['4715_1'] = 'X';
$omezeni['4719_1'] = 'N';
$omezeni['4720_1'] = '6';
$omezeni['4722_1'] = 'X';
$omezeni['4729_1'] = '6';
$omezeni['4731_1'] = 'X';
$omezeni['4756_1'] = '6';
$omezeni['4758_1'] = 'X';
$omezeni['4758_2'] = '6';
$omezeni['4770_1'] = 'X';

$trasa['4008_1'] = array('Křenovice horní n.;7:54', 'Brno hl.n.;8:26');
$trasa['4013_1'] = array('Rájec-Jestřebí;12:51', 'Sokolnice-Telnice;13:51');
$trasa['4014_1'] = array('Křenovice horní n.;10:54', 'Rájec-Jestřebí;12:09');
$trasa['4014_2'] = array('Křenovice horní n.;10:54', 'Rájec-Jestřebí;12:09');
$trasa['4017_1'] = array('Skalice nad Svitavou;23:05', 'Brno hl.n.;23:56');
$trasa['4701_1'] = array('Letovice;4:30', 'Sokolnice-Telnice;5:51');
$trasa['4706_1'] = array('Sokolnice-Telnice;6:35', 'Letovice;8:01');
$trasa['4707_1'] = array('Březová nad Svitavou;5:47', 'Křenovice horní n.;7:42');
$trasa['4710_1'] = array('Brno hl.n.;9:01', 'Letovice;10:01');
$trasa['4715_1'] = array('Letovice;8:58', 'Křenovice horní n.;10:33');
$trasa['4719_1'] = array('Letovice;10:58', 'Brno hl.n.;11:59');
$trasa['4720_1'] = array('Brno hl.n.;14:01', 'Březová nad Svitavou;15:12');
$trasa['4722_1'] = array('Sokolnice-Telnice;14:35', 'Letovice;16:01');
$trasa['4729_1'] = array('Březová nad Svitavou;15:47', 'Křenovice horní n.;17:33');
$trasa['4731_1'] = array('Letovice;16:58', 'Křenovice horní n.;18:33');
$trasa['4756_1'] = array('Křenovice horní n.;17:54', 'Brno hl.n.;18:26');
$trasa['4758_1'] = array('Křenovice horní n.;18:54', 'Skalice nad Svitavou;20:18');
$trasa['4758_2'] = array('Charleroi Sud;8:14', 'Erquelinnes;8:53');
$trasa['4770_1'] = array('Skalice nad Svitavou;4:12', 'Letovice;4:22');


@$ts502 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>