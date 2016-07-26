<?php 
$zacatekPlatnosti = '11.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4771', '4701_1', '4901_1', '4906_1', '4703_1', '4601_1', '4906_2', '4708_1', '4717_1', '4615_1', '4602_1', '4722_1', '4731_1', '4913_1', '4918_1', '4732_1');

$omezeni['4601_1'] = '6';
$omezeni['4602_1'] = 'X, 6';
$omezeni['4615_1'] = 'X, 6';
$omezeni['4701_1'] = 'X';
$omezeni['4703_1'] = '6';
$omezeni['4708_1'] = 'X, 6';
$omezeni['4771'] = 'X';
$omezeni['4717_1'] = 'X, 6';
$omezeni['4722_1'] = 'X, T';
$omezeni['4731_1'] = 'X, T';
$omezeni['4732_1'] = 'X, T';
$omezeni['4901_1'] = 'X';
$omezeni['4906_1'] = 'X';
$omezeni['4906_2'] = '6';
$omezeni['4913_1'] = 'X, T';
$omezeni['4918_1'] = 'X, T';



$poznamkaObehu['4703_1'] = array('vl', 'vlaková');

$trasa['4601_1'] = array('Brno hl.n.;6:10', 'Vranovice;6:42');
$trasa['4602_1'] = array('Břeclav;13:38', 'Brno hl.n.;14:49');
$trasa['4615_1'] = array('Brno hl.n.;11:10', 'Břeclav;12:21');
$trasa['4701_1'] = array('Letovice;4:30', 'Brno hl.n.;5:29');
$trasa['4703_1'] = array('Březová nad Svitavou;4:49', 'Brno hl.n.;5:57');
$trasa['4708_1'] = array('Brno hl.n.;8:02', 'Březová nad Svitavou;9:13');
$trasa['4771'] = array('Březová nad Svitavou;4:16', 'Letovice;4:27');
$trasa['4717_1'] = array('Březová nad Svitavou;9:47', 'Brno hl.n.;10:59');
$trasa['4722_1'] = array('Brno hl.n.;15:01', 'Letovice;16:01');
$trasa['4731_1'] = array('Letovice;16:58', 'Brno hl.n.;18:01');
$trasa['4732_1'] = array('Brno hl.n.;20:01', 'Březová nad Svitavou;21:12');
$trasa['4901_1'] = array('Brno hl.n.;5:40', 'Šakvice;6:19');
$trasa['4906_1'] = array('Šakvice;7:05', 'Brno hl.n.;7:49');
$trasa['4906_2'] = array('Vranovice;7:16', 'Brno hl.n.;7:49');
$trasa['4913_1'] = array('Brno hl.n.;18:10', 'Vranovice;18:44');
$trasa['4918_1'] = array('Vranovice;19:16', 'Brno hl.n.;19:49');



@$ts201 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>