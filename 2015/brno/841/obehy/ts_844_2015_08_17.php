<?php 
$zacatekPlatnosti = '1.8.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';
$obeh[1] = array('4860_1', '1869_1', '4812_1', '4821_1', '4822_1', '4868_1', '4801_1', '4868_2', '4809_1', '4814_1', '4817_1', '4852_1', '4852_2');
$obeh[2] = array('4821_2', '4822_2', '4868_3', '4809_2', '4814_2', '4816_1', '4819_1', '4864_1', '4807_1', '4828_1', '4835_1', '4856_1');

$omezeni['1869_1'] = 'X';
$omezeni['4801_1'] = 'T';
$omezeni['4807_1'] = '6';
$omezeni['4809_1'] = '25';
$omezeni['4809_2'] = 'X';
$omezeni['4812_1'] = 'X';
$omezeni['4814_1'] = '25';
$omezeni['4814_2'] = 'X';
$omezeni['4816_1'] = 'T';
$omezeni['4819_1'] = 'X,T';
$omezeni['4821_1'] = '6';
$omezeni['4821_2'] = 'X,T';
$omezeni['4822_1'] = '6';
$omezeni['4822_2'] = 'X';
$omezeni['4828_1'] = '6';
$omezeni['4835_1'] = '6';
$omezeni['4852_1'] = 'X,T';
$omezeni['4852_2'] = '6';
$omezeni['4860_1'] = 'X';
$omezeni['4864_1'] = '6';
$omezeni['4868_1'] = '6';
$omezeni['4868_2'] = 'T';
$omezeni['4868_3'] = 'X';

$trasa['1869_1'] = array('Jihlava;5:30', 'Brno hl.n.;7:37');
$trasa['4801_1'] = array('Náměšť nad Oslavou;6:13', 'Brno hl.n.;7:10');
$trasa['4807_1'] = array('Jihlava;7:30', 'Brno hl.n.;10:12');
$trasa['4809_1'] = array('Jihlava;9:30', 'Brno hl.n.;12:12');
$trasa['4809_2'] = array('Jihlava;9:30', 'Brno hl.n.;12:12');
$trasa['4812_1'] = array('Brno hl.n.;12:39', 'Jihlava;15:49');
$trasa['4814_1'] = array('Brno hl.n.;13:39', 'Jihlava;16:27');
$trasa['4814_2'] = array('Brno hl.n.;13:39', 'Jihlava;16:27');
$trasa['4816_1'] = array('Brno hl.n.;15:39', 'Jihlava;18:23');
$trasa['4817_1'] = array('Jihlava;17:30', 'Brno hl.n.;20:12');
$trasa['4819_1'] = array('Jihlava;19:30', 'Brno hl.n.;22:11');
$trasa['4821_1'] = array('Třebíč;3:47', 'Brno hl.n.;5:12');
$trasa['4821_2'] = array('Třebíč;3:47', 'Brno hl.n.;5:12');
$trasa['4822_1'] = array('Brno hl.n.;5:39', 'Třebíč;7:09');
$trasa['4822_2'] = array('Brno hl.n.;5:39', 'Třebíč;7:09');
$trasa['4828_1'] = array('Brno hl.n.;10:39', 'Náměšť nad Oslavou;11:43');
$trasa['4835_1'] = array('Náměšť nad Oslavou;12:13', 'Brno hl.n.;13:12');
$trasa['4852_1'] = array('Brno hl.n.;20:39', 'Okříšky;22:38');
$trasa['4852_2'] = array('Brno hl.n.;20:39', 'Třebíč;22:09');
$trasa['4856_1'] = array('Brno hl.n.;22:41', 'Třebíč;0:07');
$trasa['4860_1'] = array('Třebíč;4:14', 'Jihlava;5:08');
$trasa['4864_1'] = array('Náměšť nad Oslavou;5:43', 'Jihlava;7:04');
$trasa['4868_1'] = array('Třebíč;7:35', 'Jihlava;8:27');
$trasa['4868_2'] = array('Náměšť nad Oslavou;7:10', 'Jihlava;8:27');
$trasa['4868_3'] = array('Třebíč;7:35', 'Jihlava;8:27');

$poznamkaObehu[101722] = array('pk', 'postrk v úseku Uherské Hradiště - Veselí nad Moravou');
$poznamkaObehu[101724] = array('pk', 'postrk');
$poznamkaObehu[104314] = array('pk', 'postrk');
$poznamkaObehu[12255] = array('pk', 'postrk');
$poznamkaObehu[4303] = array('pk', 'postrk');
$poznamkaObehu[4806] = array('pk', 'postrk');
$poznamkaObehu[4808] = array('pk', 'postrk');
$poznamkaObehu[4810] = array('pk', 'postrk');
$poznamkaObehu[4824] = array('pk', 'postrk');
$poznamkaObehu[4826] = array('pk', 'postrk');
$poznamkaObehu[4832] = array('pk', 'postrk');
$poznamkaObehu[4834] = array('pk', 'postrk');
$poznamkaObehu[4840] = array('pk', 'postrk');
$poznamkaObehu[4844] = array('pk', 'postrk');
$poznamkaObehu[4848] = array('pk', 'postrk');
$poznamkaObehu[4850] = array('pk', 'postrk');
$poznamkaObehu[4876] = array('pk', 'postrk');

@$ts844 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);
unset($poznamkaObehu);


 ?>