<?php 
$zacatekPlatnosti = '12.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4700_1', '4709_1', '4720_1', '4729_1', '4756_1', '4015_1', '4734_1', '4716_1', '4725_1', '4752_1', '4726_1', '4735_1');
$obeh[2] = array('4705_1', '4708_1', '4717_1', '4744_1', '4747_1', '4724_1', '4733_1', '4020_1', '4736_1', '4707_1', '4008_1', '4710_1', '4719_1');
$obeh[3] = array('4741_1', '4740_1', '4743_1', '4710_2', '4719_2', '4746_1', '4749_1', '4726_2', '4735_2', '4022_1', '4711_1', '4712_1', '4721_1', '4748_1');

$omezeni['4008_1'] = '6';
$omezeni['4015_1'] = 'X';
$omezeni['4020_1'] = 'X';
$omezeni['4022_1'] = 'X';
$omezeni['4700_1'] = 'X';
$omezeni['4705_1'] = 'X';
$omezeni['4707_1'] = '6';
$omezeni['4708_1'] = 'X';
$omezeni['4709_1'] = 'X';
$omezeni['4710_1'] = '6';
$omezeni['4710_2'] = 'X';
$omezeni['4711_1'] = '6';
$omezeni['4712_1'] = '6';
$omezeni['4716_1'] = 'N';
$omezeni['4717_1'] = 'X';
$omezeni['4719_1'] = '6';
$omezeni['4719_2'] = 'X';
$omezeni['4720_1'] = 'X';
$omezeni['4721_1'] = '6';
$omezeni['4724_1'] = 'X';
$omezeni['4725_1'] = 'N';
$omezeni['4726_1'] = 'N';
$omezeni['4726_2'] = 'X';
$omezeni['4729_1'] = 'X';
$omezeni['4733_1'] = 'X';
$omezeni['4734_1'] = 'X, N';
$omezeni['4735_1'] = 'N';
$omezeni['4735_2'] = 'X';
$omezeni['4736_1'] = 'X, N';
$omezeni['4740_1'] = 'X';
$omezeni['4741_1'] = 'X';
$omezeni['4743_1'] = 'X';
$omezeni['4744_1'] = 'X';
$omezeni['4746_1'] = 'X';
$omezeni['4747_1'] = 'X';
$omezeni['4748_1'] = '6';
$omezeni['4749_1'] = 'X';
$omezeni['4752_1'] = 'N';
$omezeni['4756_1'] = 'X';



$trasa['4008_1'] = array('Křenovice horní n.;7:54', 'Brno hl.n.;8:26');
$trasa['4015_1'] = array('Skalice nad Svitavou;19:43', 'Brno hl.n.;20:32');
$trasa['4020_1'] = array('Křenovice horní n.;19:54', 'Brno hl.n.;20:26');
$trasa['4022_1'] = array('Křenovice horní n.;20:54', 'Brno hl.n.;21:26');
$trasa['4700_1'] = array('Brno hl.n.;4:34', 'Letovice;5:31');
$trasa['4705_1'] = array('Letovice;5:20', 'Sokolnice-Telnice;6:51');
$trasa['4707_1'] = array('Letovice;5:58', 'Křenovice horní n.;7:42');
$trasa['4708_1'] = array('Sokolnice-Telnice;7:39', 'Březová nad Svitavou;9:13');
$trasa['4709_1'] = array('Letovice;6:20', 'Brno hl.n.;7:32');
$trasa['4710_1'] = array('Brno hl.n.;9:01', 'Letovice;10:01');
$trasa['4710_2'] = array('Brno hl.n.;9:01', 'Letovice;10:01');
$trasa['4711_1'] = array('Letovice;6:58', 'Brno hl.n.;7:59');
$trasa['4712_1'] = array('Brno hl.n.;10:01', 'Březová nad Svitavou;11:12');
$trasa['4716_1'] = array('Brno hl.n.;12:01', 'Březová nad Svitavou;13:12');
$trasa['4717_1'] = array('Březová nad Svitavou;9:47', 'Křenovice horní n.;11:33');
$trasa['4719_1'] = array('Letovice;10:58', 'Brno hl.n.;11:59');
$trasa['4719_2'] = array('Letovice;10:58', 'Křenovice horní n.;12:33');
$trasa['4720_1'] = array('Brno hl.n.;14:01', 'Březová nad Svitavou;15:12');
$trasa['4721_1'] = array('Březová nad Svitavou;11:47', 'Křenovice horní n.;13:33');
$trasa['4724_1'] = array('Sokolnice-Telnice;15:35', 'Březová nad Svitavou;17:12');
$trasa['4725_1'] = array('Březová nad Svitavou;13:47', 'Křenovice horní n.;15:33');
$trasa['4726_1'] = array('Brno hl.n.;17:01', 'Letovice;18:01');
$trasa['4726_2'] = array('Sokolnice-Telnice;16:35', 'Letovice;18:01');
$trasa['4729_1'] = array('Březová nad Svitavou;15:47', 'Křenovice horní n.;17:33');
$trasa['4733_1'] = array('Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33');
$trasa['4734_1'] = array('Brno hl.n.;21:01', 'Letovice;22:01');
$trasa['4735_1'] = array('Letovice;18:58', 'Brno hl.n.;20:01');
$trasa['4735_2'] = array('Letovice;18:58', 'Křenovice horní n.;20:39');
$trasa['4736_1'] = array('Brno hl.n.;22:01', 'Letovice;23:01');
$trasa['4740_1'] = array('Křenovice horní n.;5:53', 'Skalice nad Svitavou;7:18');
$trasa['4741_1'] = array('Letovice;4:00', 'Křenovice horní n.;5:32');
$trasa['4743_1'] = array('Skalice nad Svitavou;7:42', 'Brno hl.n.;8:32');
$trasa['4744_1'] = array('Křenovice horní n.;11:54', 'Skalice nad Svitavou;13:18');
$trasa['4746_1'] = array('Křenovice horní n.;12:54', 'Skalice nad Svitavou;14:18');
$trasa['4747_1'] = array('Skalice nad Svitavou;13:43', 'Sokolnice-Telnice;14:51');
$trasa['4748_1'] = array('Křenovice horní n.;13:54', 'Brno hl.n.;14:26');
$trasa['4749_1'] = array('Skalice nad Svitavou;14:43', 'Sokolnice-Telnice;15:51');
$trasa['4752_1'] = array('Křenovice horní n.;15:54', 'Brno hl.n.;16:26');
$trasa['4756_1'] = array('Křenovice horní n.;17:54', 'Skalice nad Svitavou;19:18');


@$ts501 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>