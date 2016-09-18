<?php 
$zacatekPlatnosti = '1.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4700_1', '4707_1', '4911_1', '4916_1', '4728_1', '4737_1', '4637_1', '4637_2', '4665_1', '4600_1', '4704_1', '4713_1', '4613_1', '4604_1', '4726_1', '4735_1');
$obeh[2] = array('4612_1', '4706_1', '4715_1', '4623_1', '4604_2', '4726_2', '4735_2', '4618_1', '4710_1', '4719_1', '4909_1', '4914_1', '4724_1', '4733_1', '4633_1');

$omezeni['4600_1'] = 'N';
$omezeni['4604_1'] = 'N';
$omezeni['4604_2'] = 'X';
$omezeni['4612_1'] = 'X';
$omezeni['4613_1'] = 'N';
$omezeni['4618_1'] = '6';
$omezeni['4623_1'] = 'X';
$omezeni['4633_1'] = '6';
$omezeni['4637_1'] = 'X';
$omezeni['4637_2'] = 'zX';
$omezeni['4665_1'] = 'X5';
$omezeni['4700_1'] = 'X';
$omezeni['4704_1'] = 'N';
$omezeni['4706_1'] = 'X';
$omezeni['4707_1'] = 'X';
$omezeni['4710_1'] = '6';
$omezeni['4713_1'] = 'N';
$omezeni['4715_1'] = 'X';
$omezeni['4719_1'] = '6';
$omezeni['4724_1'] = '6';
$omezeni['4726_1'] = 'N';
$omezeni['4726_2'] = 'X';
$omezeni['4728_1'] = 'X';
$omezeni['4733_1'] = '6';
$omezeni['4735_1'] = 'N';
$omezeni['4735_2'] = 'X';
$omezeni['4737_1'] = 'X';
$omezeni['4909_1'] = '6';
$omezeni['4911_1'] = 'X';
$omezeni['4914_1'] = '6';
$omezeni['4916_1'] = 'X';


$poznamkaObehu['4707_1'] = array('pk', 'postrk');
$poznamkaObehu['4916_1'] = array('pk', 'postrk');
$poznamkaObehu['4728_1'] = array('pk', 'postrk');
$poznamkaObehu['4600_1'] = array('pk', 'postrk');
$poznamkaObehu['4704_1'] = array('pk', 'postrk');
$poznamkaObehu['4604_1'] = array('pk', 'postrk');
$poznamkaObehu['4726_1'] = array('pk', 'postrk');
$poznamkaObehu['4612_1'] = array('pk', 'postrk');
$poznamkaObehu['4706_1'] = array('pk', 'postrk');
$poznamkaObehu['4604_2'] = array('pk', 'postrk');
$poznamkaObehu['4726_2'] = array('pk', 'postrk');
$poznamkaObehu['4618_1'] = array('pk', 'postrk');
$poznamkaObehu['4710_1'] = array('pk', 'postrk');
$poznamkaObehu['4914_1'] = array('pk', 'postrk');
$poznamkaObehu['4724_1'] = array('pk', 'postrk');

$poznamkaObehu['4700_1'] = array('vl', 'vlaková');
$poznamkaObehu['4911_1'] = array('vl', 'vlaková');
$poznamkaObehu['4737_1'] = array('vl', 'vlaková');
$poznamkaObehu['4637_1'] = array('vl', 'vlaková');
$poznamkaObehu['4637_2'] = array('vl', 'vlaková');
$poznamkaObehu['4713_1'] = array('vl', 'vlaková');
$poznamkaObehu['4613_1'] = array('vl', 'vlaková');
$poznamkaObehu['4735_1'] = array('vl', 'vlaková');
$poznamkaObehu['4715_1'] = array('vl', 'vlaková');
$poznamkaObehu['4623_1'] = array('vl', 'vlaková');
$poznamkaObehu['4735_2'] = array('vl', 'vlaková');
$poznamkaObehu['4719_1'] = array('vl', 'vlaková');
$poznamkaObehu['4909_1'] = array('vl', 'vlaková');
$poznamkaObehu['4733_1'] = array('vl', 'vlaková');
$poznamkaObehu['4633_1'] = array('vl', 'vlaková');

$trasa['4600_1'] = array('Břeclav;4:45', 'Brno hl.n.;5:49');
$trasa['4604_1'] = array('Břeclav;15:42', 'Brno hl.n.;16:49');
$trasa['4604_2'] = array('Vranovice;16:16', 'Brno hl.n.;16:49');
$trasa['4612_1'] = array('Zaječí;5:59', 'Brno hl.n.;6:49');
$trasa['4613_1'] = array('Brno hl.n.;9:10', 'Břeclav;10:21');
$trasa['4618_1'] = array('Břeclav;7:43', 'Brno hl.n.;8:49');
$trasa['4623_1'] = array('Brno hl.n.;15:10', 'Vranovice;15:43');
$trasa['4633_1'] = array('Brno hl.n.;19:10', 'Břeclav;20:17');
$trasa['4637_1'] = array('Brno hl.n.;21:10', 'Zaječí;22:00');
$trasa['4637_2'] = array('Brno hl.n.;21:10', 'Zaječí;22:00');
$trasa['4665_1'] = array('Šakvice;21:59', 'Břeclav;22:24');
$trasa['4700_1'] = array('Brno hl.n.;4:34', 'Letovice;5:31');
$trasa['4704_1'] = array('Brno hl.n.;6:00', 'Letovice;7:01');
$trasa['4706_1'] = array('Brno hl.n.;6:58', 'Letovice;8:01');
$trasa['4707_1'] = array('Letovice;5:58', 'Brno hl.n.;6:59');
$trasa['4710_1'] = array('Brno hl.n.;9:01', 'Letovice;10:01');
$trasa['4713_1'] = array('Letovice;7:58', 'Brno hl.n.;8:59');
$trasa['4715_1'] = array('Letovice;8:58', 'Brno hl.n.;9:59');
$trasa['4719_1'] = array('Letovice;10:58', 'Brno hl.n.;11:59');
$trasa['4724_1'] = array('Brno hl.n.;16:01', 'Březová nad Svitavou;17:12');
$trasa['4726_1'] = array('Brno hl.n.;17:01', 'Letovice;18:01');
$trasa['4726_2'] = array('Brno hl.n.;17:01', 'Letovice;18:01');
$trasa['4728_1'] = array('Brno hl.n.;18:01', 'Březová nad Svitavou;19:14');
$trasa['4733_1'] = array('Březová nad Svitavou;17:47', 'Brno hl.n.;18:59');
$trasa['4735_1'] = array('Letovice;18:58', 'Brno hl.n.;20:01');
$trasa['4735_2'] = array('Letovice;18:58', 'Brno hl.n.;20:01');
$trasa['4737_1'] = array('Letovice;19:58', 'Brno hl.n.;20:59');
$trasa['4909_1'] = array('Brno hl.n.;14:10', 'Vranovice;14:44');
$trasa['4911_1'] = array('Brno hl.n.;16:10', 'Vranovice;16:44');
$trasa['4914_1'] = array('Vranovice;15:16', 'Brno hl.n.;15:49');
$trasa['4916_1'] = array('Vranovice;17:16', 'Brno hl.n.;17:49');


@$ts605 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>