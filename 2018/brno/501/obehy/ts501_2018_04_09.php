<?php 
$zacatekPlatnosti = '9.4.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4700_1', '4741_1', '4720_1', '4729_1', '4756_1', '4015_1', '4716_1', '4725_1', '4752_1', '4726_1', '4735_1', '4734_1'];
$obeh[2] = ['4707_1', '4708_1', '4717_1', '4744_1', '4747_1', '4724_1', '4733_1', '4020_1', '4736_1', '4709_1', '4008_1', '4710_1', '4719_1'];
$obeh[3] = ['4701_1', '4742_1', '4743_1', '4710_2', '4719_2', '4746_1', '4749_1', '4726_2', '4735_2', '4022_1', '4711_1', '104618_1', '4615_1', '104602_1'];

$omezeni['4008_1'] = '6';
$omezeni['4015_1'] = 'X';
$omezeni['4020_1'] = 'X';
$omezeni['4022_1'] = 'X';
$omezeni['104602_1'] = '6';
$omezeni['4615_1'] = '6';
$omezeni['104618_1'] = '6';
$omezeni['4700_1'] = 'X';
$omezeni['4701_1'] = 'X';
$omezeni['4707_1'] = 'X';
$omezeni['4708_1'] = 'X';
$omezeni['4709_1'] = '6';
$omezeni['4710_2'] = 'X';
$omezeni['4710_1'] = '6';
$omezeni['4711_1'] = '6';
$omezeni['4716_1'] = 'T';
$omezeni['4717_1'] = 'X';
$omezeni['4719_2'] = 'X';
$omezeni['4719_1'] = '6';
$omezeni['4720_1'] = 'X';
$omezeni['4724_1'] = 'X';
$omezeni['4725_1'] = 'T';
$omezeni['4726_1'] = 'T';
$omezeni['4726_2'] = 'X';
$omezeni['4729_1'] = 'X';
$omezeni['4733_1'] = 'X';
$omezeni['4734_1'] = 'XT';
$omezeni['4735_1'] = 'T';
$omezeni['4735_2'] = 'X';
$omezeni['4736_1'] = 'XT';
$omezeni['4741_1'] = 'X';
$omezeni['4742_1'] = 'X';
$omezeni['4743_1'] = 'X';
$omezeni['4744_1'] = 'X';
$omezeni['4746_1'] = 'X';
$omezeni['4747_1'] = 'X';
$omezeni['4749_1'] = 'X';
$omezeni['4752_1'] = 'T';
$omezeni['4756_1'] = 'X';

$trasa['4008_1'] = ['Křenovice horní n.;7:54','Brno hl.n.;8:26'];
$trasa['4015_1'] = ['Skalice nad Svitavou;19:42','Brno hl.n.;20:31'];
$trasa['4020_1'] = ['Křenovice horní n.;19:56','Brno hl.n.;20:28'];
$trasa['4022_1'] = ['Křenovice horní n.;20:54','Brno hl.n.;21:26'];
$trasa['4700_1'] = ['Brno hl.n.;4:34','Letovice;5:30'];
$trasa['4701_1'] = ['Letovice;4:00','Křenovice horní n.;5:32'];
$trasa['4707_1'] = ['Letovice;5:20','Sokolnice-Telnice;6:51'];
$trasa['4708_1'] = ['Sokolnice-Telnice;7:38','Březová nad Svitavou;9:12'];
$trasa['4709_1'] = ['Letovice;5:58','Křenovice horní n.;7:42'];
$trasa['4710_1'] = ['Brno hl.n.;9:01','Letovice;10:01'];
$trasa['4710_2'] = ['Brno hl.n.;9:01','Letovice;10:01'];
$trasa['4711_1'] = ['Letovice;6:58','Brno hl.n.;7:59'];
$trasa['4716_1'] = ['Brno hl.n.;12:01','Březová nad Svitavou;13:12'];
$trasa['4717_1'] = ['Březová nad Svitavou;9:47','Křenovice horní n.;11:33'];
$trasa['4719_1'] = ['Letovice;10:58','Brno hl.n.;11:59'];
$trasa['4719_2'] = ['Letovice;10:58','Křenovice horní n.;12:35'];
$trasa['4720_1'] = ['Brno hl.n.;14:01','Březová nad Svitavou;15:12'];
$trasa['4724_1'] = ['Sokolnice-Telnice;15:35','Březová nad Svitavou;17:12'];
$trasa['4725_1'] = ['Březová nad Svitavou;13:47','Křenovice horní n.;15:33'];
$trasa['4726_1'] = ['Brno hl.n.;16:59','Letovice;18:01'];
$trasa['4726_2'] = ['Sokolnice-Telnice;16:35','Letovice;18:01'];
$trasa['4729_1'] = ['Březová nad Svitavou;15:47','Křenovice horní n.;17:36'];
$trasa['4733_1'] = ['Březová nad Svitavou;17:47','Křenovice horní n.;19:33'];
$trasa['4734_1'] = ['Brno hl.n.;21:01','Letovice;22:01'];
$trasa['4735_1'] = ['Letovice;18:58','Brno hl.n.;19:59'];
$trasa['4735_2'] = ['Letovice;18:58','Křenovice horní n.;20:36'];
$trasa['4736_1'] = ['Brno hl.n.;22:01','Letovice;23:01'];
$trasa['4741_1'] = ['Letovice;6:20','Brno hl.n.;7:31'];
$trasa['4742_1'] = ['Křenovice horní n.;5:54','Skalice nad Svitavou;7:18'];
$trasa['4743_1'] = ['Skalice nad Svitavou;7:42','Brno hl.n.;8:31'];
$trasa['4744_1'] = ['Křenovice horní n.;11:56','Skalice nad Svitavou;13:18'];
$trasa['4746_1'] = ['Křenovice horní n.;12:54','Skalice nad Svitavou;14:18'];
$trasa['4747_1'] = ['Skalice nad Svitavou;13:42','Sokolnice-Telnice;14:51'];
$trasa['4749_1'] = ['Skalice nad Svitavou;14:42','Sokolnice-Telnice;15:51'];
$trasa['4752_1'] = ['Křenovice horní n.;15:56','Brno hl.n.;16:28'];
$trasa['4756_1'] = ['Křenovice horní n.;17:54','Skalice nad Svitavou;19:18'];
$trasa['104602_1'] = ['Břeclav;13:41', 'Brno hl.n.;14:49'];
$trasa['4615_1'] = ['Vlkov u Tišnova;10:06', 'Břeclav;12:15'];
$trasa['104618_1'] = ['Brno hl.n.;8:53', 'Vlkov u Tišnova;9:49'];
//sem patri stazene trasy

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts501 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


