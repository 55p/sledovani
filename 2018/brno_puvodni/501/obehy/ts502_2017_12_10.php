<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4770_1', '4770_2', '4703_1', '4706_1', '4715_1', '4014_1', '4013_1', '4722_1', '4731_1', '4722_2', '4731_2', '4758_1', '4017_1', '4720_1', '4729_1', '4756_1', '4732_1', '4709_1', '4008_1', '4710_1', '4719_1'];

$omezeni['4008_1'] = 'T';
$omezeni['4013_1'] = 'X';
$omezeni['4014_1'] = 'X';
$omezeni['4017_1'] = 'X5';
$omezeni['4703_1'] = 'X';
$omezeni['4706_1'] = 'X';
$omezeni['4709_1'] = 'T';
$omezeni['4710_1'] = 'T';
$omezeni['4715_1'] = 'X';
$omezeni['4719_1'] = 'T';
$omezeni['4720_1'] = '6';
$omezeni['4722_1'] = 'X5';
$omezeni['4722_2'] = 'X1234';
$omezeni['4729_1'] = '6';
$omezeni['4731_1'] = 'X5';
$omezeni['4731_2'] = 'X1234';
$omezeni['4732_1'] = '6';
$omezeni['4756_1'] = '6';
$omezeni['4758_1'] = 'X';
$omezeni['4770_1'] = 'X1';
$omezeni['4770_2'] = 'X';

$trasa['4770_1'] = ['Brno hl.n.;3:30','Skalice nad Svitavou;4:00'];
$trasa['4008_1'] = ['Křenovice horní n.;7:54', 'Brno hl.n.;8:26'];
$trasa['4013_1'] = ['Rájec-Jestřebí;12:50', 'Sokolnice-Telnice;13:51'];
$trasa['4014_1'] = ['Křenovice horní n.;10:54', 'Rájec-Jestřebí;12:09'];
$trasa['4017_1'] = ['Skalice nad Svitavou;23:06', 'Brno hl.n.;23:51'];
$trasa['4703_1'] = ['Letovice;4:31', 'Sokolnice-Telnice;5:51'];
$trasa['4706_1'] = ['Sokolnice-Telnice;6:35', 'Letovice;8:01'];
$trasa['4709_1'] = ['Březová nad Svitavou;5:47', 'Křenovice horní n.;7:42'];
$trasa['4710_1'] = ['Brno hl.n.;9:01', 'Letovice;10:01'];
$trasa['4715_1'] = ['Letovice;8:58', 'Křenovice horní n.;10:34'];
$trasa['4719_1'] = ['Letovice;10:58', 'Brno hl.n.;11:59'];
$trasa['4720_1'] = ['Brno hl.n.;14:01', 'Březová nad Svitavou;15:12'];
$trasa['4729_1'] = ['Březová nad Svitavou;15:47', 'Křenovice horní n.;17:36'];
$trasa['4732_1'] = ['Brno hl.n.;19:59', 'Březová nad Svitavou;21:29'];
$trasa['4756_1'] = ['Křenovice horní n.;17:54', 'Brno hl.n.;18:26'];
$trasa['4758_1'] = ['Křenovice horní n.;18:54', 'Skalice nad Svitavou;20:18'];
$trasa['4770_2'] = ['Skalice nad Svitavou;4:11', 'Letovice;4:23'];
$trasa['4722_2'] = ['Sokolnice-Telnice;14:35', 'Letovice;16:01'];
$trasa['4731_2'] = ['Letovice;16:58', 'Křenovice horní n.;18:33'];
$trasa['4722_1'] = ['Sokolnice-Telnice;14:35', 'Březová nad Svitavou;16:12'];
$trasa['4731_1'] = ['Březová nad Svitavou;16:47', 'Křenovice horní n.;18:33'];


$typ['4770_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts502 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


