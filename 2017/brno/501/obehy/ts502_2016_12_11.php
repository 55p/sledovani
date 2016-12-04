<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4770_1', '4701_1', '4706_1', '4715_1', '4014_1', '4013_1', '4722_1', '4731_1', '4758_1', '4017_1', '4707_1', '4008_1', '4710_1', '4719_1', '4720_1', '4729_1', '4756_1', '4732_1'];

$omezeni['4008_1'] = 'T';
$omezeni['4013_1'] = 'X';
$omezeni['4014_1'] = 'X';
$omezeni['4017_1'] = 'X5';
$omezeni['4701_1'] = 'X';
$omezeni['4706_1'] = 'X';
$omezeni['4707_1'] = 'T';
$omezeni['4710_1'] = 'T';
$omezeni['4715_1'] = 'X';
$omezeni['4719_1'] = 'T';
$omezeni['4720_1'] = '6';
$omezeni['4722_1'] = 'X';
$omezeni['4729_1'] = '6';
$omezeni['4731_1'] = 'X';
$omezeni['4732_1'] = '6';
$omezeni['4756_1'] = '6';
$omezeni['4758_1'] = 'X';
$omezeni['4770_1'] = 'X';

$trasa['4008_1'] = ['Křenovice horní n.;7:54', 'Brno hl.n.;8:26'];
$trasa['4013_1'] = ['Rájec-Jestřebí;12:50', 'Sokolnice-Telnice;13:51'];
$trasa['4014_1'] = ['Křenovice horní n.;10:54', 'Rájec-Jestřebí;12:09'];
$trasa['4017_1'] = ['Skalice nad Svitavou;23:04', 'Brno hl.n.;23:54'];
$trasa['4701_1'] = ['Letovice;4:31', 'Sokolnice-Telnice;5:51'];
$trasa['4706_1'] = ['Sokolnice-Telnice;6:35', 'Letovice;8:01'];
$trasa['4707_1'] = ['Březová nad Svitavou;5:47', 'Křenovice horní n.;7:42'];
$trasa['4710_1'] = ['Brno hl.n.;9:01', 'Letovice;10:01'];
$trasa['4715_1'] = ['Letovice;8:58', 'Křenovice horní n.;10:33'];
$trasa['4719_1'] = ['Letovice;10:58', 'Brno hl.n.;11:59'];
$trasa['4720_1'] = ['Brno hl.n.;14:01', 'Březová nad Svitavou;15:12'];
$trasa['4722_1'] = ['Sokolnice-Telnice;14:35', 'Letovice;16:01'];
$trasa['4729_1'] = ['Březová nad Svitavou;15:47', 'Křenovice horní n.;17:36'];
$trasa['4731_1'] = ['Letovice;16:58', 'Křenovice horní n.;18:33'];
$trasa['4732_1'] = ['Brno hl.n.;20:01', 'Březová nad Svitavou;21:29'];
$trasa['4756_1'] = ['Křenovice horní n.;17:54', 'Brno hl.n.;18:26'];
$trasa['4758_1'] = ['Křenovice horní n.;18:54', 'Skalice nad Svitavou;20:18'];
$trasa['4770_1'] = ['Skalice nad Svitavou;4:11', 'Letovice;4:23'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts502 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


