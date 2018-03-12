<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['104709_1', '4008_1', '104007_1', '4714_1', '4723_1', '104723_1', '4750_1', '104753_1', '4722_1', '4731_1', '4730_1', '4730_2', '4739_1', '104739_1', '4738_1', '104738_1'];
$obeh[2] = ['4709_1', '104008_1', '4007_1', '204723_1', '104750_1', '4753_1', '104730_1', '4739_2', '4701_1', '4706_1', '4715_1', '4711_1', '4712_1', '4721_1', '4748_1', '4724_1', '4733_1', '4020_1', '4738_2'];

$omezeni['104007_1'] = 'X';
$omezeni['104008_1'] = 'X';
$omezeni['104709_1'] = 'X';
$omezeni['104723_1'] = 'X';
$omezeni['104730_1'] = 'X';
$omezeni['104738_1'] = 'T';
$omezeni['104739_1'] = 'X5';
$omezeni['104750_1'] = 'X';
$omezeni['104753_1'] = 'X';
$omezeni['204723_1'] = 'X';
$omezeni['4007_1'] = 'X';
$omezeni['4008_1'] = 'X';
$omezeni['4020_1'] = 'T';
$omezeni['4701_1'] = '6';
$omezeni['4706_1'] = '6';
$omezeni['4709_1'] = 'X';
$omezeni['4711_1'] = 'T';
$omezeni['4712_1'] = 'T';
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
$omezeni['4738_1'] = 'X6';
$omezeni['4738_2'] = 'T';
$omezeni['4739_1'] = 'X1234,25';
$omezeni['4739_2'] = 'X5';
$omezeni['4748_1'] = 'T';
$omezeni['4750_1'] = 'X';
$omezeni['4753_1'] = 'X';

$trasa['104723_1'] = ['Brno hl.n.;14:09','Křenovice horní nádraží;14:35'];
$trasa['204723_1'] = ['Brno hl.n.;14:09','Křenovice horní nádraží;14:35'];
$trasa['4723_1'] = ['Letovice;12:58','Brno hl.n.;13:59'];
$trasa['104007_1'] = ['Rájec-Jestřebí;9:50', 'Brno hl.n.;10:31'];
$trasa['104008_1'] = ['Křenovice horní n.;7:54', 'Rájec-Jestřebí;9:09'];
$trasa['104709_1'] = ['Letovice;5:58', 'Křenovice horní n.;7:42'];
$trasa['104730_1'] = ['Sokolnice-Telnice;18:35', 'Letovice;20:01'];
$trasa['104738_1'] = ['Brno hl.n.;23:04', 'Letovice;0:04'];
$trasa['104739_1'] = ['Letovice;20:58', 'Brno hl.n.;21:59'];
$trasa['104750_1'] = ['Křenovice horní n.;14:54', 'Skalice nad Svitavou;16:18'];
$trasa['104753_1'] = ['Skalice nad Svitavou;16:43', 'Sokolnice-Telnice;17:51'];

$trasa['4007_1'] = ['Rájec-Jestřebí;9:50', 'Brno hl.n.;10:31'];
$trasa['4008_1'] = ['Křenovice horní n.;7:54', 'Rájec-Jestřebí;9:09'];
$trasa['4020_1'] = ['Křenovice horní n.;19:56', 'Brno hl.n.;20:28'];
$trasa['4701_1'] = ['Letovice;4:00', 'Brno hl.n.;4:57'];
$trasa['4706_1'] = ['Brno hl.n.;6:59', 'Letovice;8:01'];
$trasa['4709_1'] = ['Letovice;5:58', 'Křenovice horní n.;7:42'];
$trasa['4711_1'] = ['Letovice;6:58', 'Brno hl.n.;7:59'];
$trasa['4712_1'] = ['Brno hl.n.;10:01', 'Letovice;11:01'];
$trasa['4714_1'] = ['Brno hl.n.;11:01', 'Letovice;12:01'];
$trasa['4715_1'] = ['Letovice;8:58', 'Brno hl.n.;10:01'];
$trasa['4721_1'] = ['Letovice;11:58', 'Křenovice horní n.;13:33'];
$trasa['4722_1'] = ['Brno hl.n.;15:01', 'Letovice;16:01'];
$trasa['4724_1'] = ['Brno hl.n.;15:59', 'Březová nad Svitavou;17:12'];
$trasa['4730_1'] = ['Sokolnice-Telnice;18:35', 'Letovice;20:01'];
$trasa['4730_2'] = ['Brno hl.n.;19:01', 'Letovice;20:01'];
$trasa['4731_1'] = ['Letovice;16:58', 'Brno hl.n.;17:59'];
$trasa['4733_1'] = ['Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33'];
$trasa['4738_1'] = ['Brno hl.n.;23:04', 'Letovice;0:04'];
$trasa['4738_2'] = ['Brno hl.n.;23:04', 'Letovice;0:04'];
$trasa['4739_1'] = ['Letovice;20:58', 'Brno hl.n.;21:59'];
$trasa['4739_2'] = ['Letovice;20:58', 'Brno hl.n.;21:59'];
$trasa['4748_1'] = ['Křenovice horní n.;13:56', 'Brno hl.n.;14:28'];
$trasa['4750_1'] = ['Křenovice horní n.;14:54', 'Skalice nad Svitavou;16:18'];
$trasa['4753_1'] = ['Skalice nad Svitavou;16:43', 'Sokolnice-Telnice;17:51'];


$poznamkaObehu['104709_1'] = ['pk', 'postrk'];
$poznamkaObehu['104007_1'] = ['pk', 'postrk'];
$poznamkaObehu['104723_1'] = ['pk', 'postrk'];
$poznamkaObehu['104753_1'] = ['pk', 'postrk'];
$poznamkaObehu['104739_1'] = ['pk', 'postrk'];
$poznamkaObehu['104738_1'] = ['pk', 'postrk'];
$poznamkaObehu['104008_1'] = ['pk', 'postrk'];
$poznamkaObehu['104750_1'] = ['pk', 'postrk'];
$poznamkaObehu['104730_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts606 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


