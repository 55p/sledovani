<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4700_1', '104707_1', '104600_1', '104704_1', '4713_1', '4613_1', '104618_1', '104710_1', '4719_1', '4909_1', '104914_1', '104724_1', '4733_1', '4633_1', '4623_1', '104604_1', '104604_2', '104726_1', '4735_1', '4637_1', '4665_1');

$omezeni['104600_1'] = 'N';
$omezeni['104604_1'] = 'N';
$omezeni['104604_2'] = 'X, N';
$omezeni['104618_1'] = '6';
$omezeni['104704_1'] = 'N';
$omezeni['104707_1'] = 'X';
$omezeni['104710_1'] = '6';
$omezeni['104724_1'] = '6';
$omezeni['104726_1'] = 'X, N';
$omezeni['104914_1'] = '6';
$omezeni['4613_1'] = 'N';
$omezeni['4623_1'] = 'X';
$omezeni['4633_1'] = '6';
$omezeni['4637_1'] = 'X5';
$omezeni['4665_1'] = 'X5';
$omezeni['4700_1'] = 'X';
$omezeni['4713_1'] = 'N';
$omezeni['4719_1'] = '6';
$omezeni['4733_1'] = '6';
$omezeni['4735_1'] = 'X, N';
$omezeni['4909_1'] = '6';


$poznamkaObehu['104707_1'] = array('pk', 'postrk');
$poznamkaObehu['104600_1'] = array('pk', 'postrk');
$poznamkaObehu['104704_1'] = array('pk', 'postrk');
$poznamkaObehu['104618_1'] = array('pk', 'postrk');
$poznamkaObehu['104710_1'] = array('pk', 'postrk');
$poznamkaObehu['104914_1'] = array('pk', 'postrk');
$poznamkaObehu['104724_1'] = array('pk', 'postrk');
$poznamkaObehu['104604_1'] = array('pk', 'postrk');
$poznamkaObehu['104604_2'] = array('pk', 'postrk');
$poznamkaObehu['104726_1'] = array('pk', 'postrk');

$poznamkaObehu['4700_1'] = array('vl', 'vlaková');
$poznamkaObehu['4713_1'] = array('vl', 'vlaková');
$poznamkaObehu['4613_1'] = array('vl', 'vlaková');
$poznamkaObehu['4719_1'] = array('vl', 'vlaková');
$poznamkaObehu['4909_1'] = array('vl', 'vlaková');
$poznamkaObehu['4733_1'] = array('vl', 'vlaková');
$poznamkaObehu['4633_1'] = array('vl', 'vlaková');
$poznamkaObehu['4623_1'] = array('vl', 'vlaková');
$poznamkaObehu['4735_1'] = array('vl', 'vlaková');
$poznamkaObehu['4637_1'] = array('vl', 'vlaková');
$poznamkaObehu['4665_1'] = array('vl', 'vlaková');

$trasa['4613_1'] = array('Brno hl.n.;9:10', 'Břeclav;10:21');
$trasa['4623_1'] = array('Brno hl.n.;15:10', 'Vranovice;15:43');
$trasa['4633_1'] = array('Brno hl.n.;19:10', 'Břeclav;20:17');
$trasa['4637_1'] = array('Brno hl.n.;21:10', 'Šakvice;21:54');
$trasa['4665_1'] = array('Šakvice;21:59', 'Břeclav;22:24');
$trasa['4700_1'] = array('Brno hl.n.;4:34', 'Letovice;5:31');
$trasa['4713_1'] = array('Letovice;7:58', 'Brno hl.n.;8:59');
$trasa['4719_1'] = array('Letovice;10:58', 'Brno hl.n.;11:59');
$trasa['4733_1'] = array('Březová nad Svitavou;17:47', 'Brno hl.n.;18:59');
$trasa['4735_1'] = array('Letovice;18:58', 'Brno hl.n.;20:01');
$trasa['4909_1'] = array('Brno hl.n.;14:10', 'Vranovice;14:44');
$trasa['104600_1'] = array('Břeclav;4:45', 'Brno hl.n.;5:49');
$trasa['104604_1'] = array('Břeclav;15:42', 'Brno hl.n.;16:49');
$trasa['104604_2'] = array('Břeclav;15:42', 'Brno hl.n.;16:49');
$trasa['104618_1'] = array('Břeclav;7:43', 'Brno hl.n.;8:49');
$trasa['104704_1'] = array('Brno hl.n.;6:00', 'Letovice;7:01');
$trasa['104707_1'] = array('Březová nad Svitavou;5:47', 'Brno hl.n.;6:59');
$trasa['104710_1'] = array('Brno hl.n.;9:01', 'Letovice;10:01');
$trasa['104724_1'] = array('Brno hl.n.;16:01', 'Březová nad Svitavou;17:12');
$trasa['104726_1'] = array('Brno hl.n.;17:01', 'Letovice;18:01');
$trasa['104914_1'] = array('Vranovice;15:16', 'Brno hl.n.;15:49');


@$ts605 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>