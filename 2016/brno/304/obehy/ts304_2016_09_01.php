<?php 
$zacatekPlatnosti = '1.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1971_1', '1972_1', '4761_1', '4768_1', '4766_1', '5028_1', '4761_2');
$obeh[2] = array('4766_2', '5075_1', '1977_1', '1976_1', '4765_1', '4761_3', '5021_1');

$omezeni['1971_1'] = 'X';
$omezeni['1972_1'] = 'X';
$omezeni['1976_1'] = 'X';
$omezeni['1977_1'] = 'X';
$omezeni['4761_1'] = 'X';
$omezeni['4761_2'] = 'T';
$omezeni['4761_3'] = '6';
$omezeni['4765_1'] = 'X5';
$omezeni['4766_1'] = '25';
$omezeni['4766_2'] = 'X';
$omezeni['4768_1'] = 'X5';
$omezeni['5021_1'] = 'T';
$omezeni['5028_1'] = '6';
$omezeni['5075_1'] = 'X';

$poznamkaObehu['1971_1'] = array('pk', 'postrk');
$poznamkaObehu['4761_1'] = array('pk', 'postrk');
$poznamkaObehu['4761_2'] = array('pk', 'postrk');
$poznamkaObehu['1977_1'] = array('pk', 'postrk');
$poznamkaObehu['4765_1'] = array('pk', 'postrk');
$poznamkaObehu['4761_3'] = array('pk', 'postrk');
$poznamkaObehu['5021_1'] = array('pk', 'postrk');

$trasa['1971_1'] = array('Česká Třebová;4:43', 'Brno hl.n.;6:14');
$trasa['1972_1'] = array('Brno hl.n.;13:44', 'Choceň;15:50');
$trasa['1976_1'] = array('Brno hl.n.;17:44', 'Česká Třebová;19:15');
$trasa['1977_1'] = array('Česká Třebová;14:48', 'Brno hl.n.;16:14');
$trasa['4761_1'] = array('Choceň;16:07', 'Letovice;17:33');
$trasa['4761_2'] = array('Česká Třebová;16:42', 'Letovice;17:33');
$trasa['4761_3'] = array('Česká Třebová;16:42', 'Letovice;17:33');
$trasa['4765_1'] = array('Česká Třebová;22:59', 'Letovice;23:40');
$trasa['4766_1'] = array('Letovice;6:29', 'Česká Třebová;7:15');
$trasa['4766_2'] = array('Letovice;6:29', 'Ústí nad Orlicí;7:43');
$trasa['4768_1'] = array('Letovice;18:05', 'Česká Třebová;18:52');
$trasa['5021_1'] = array('Pardubice hl.n.;0:26', 'Česká Třebová;1:26');
$trasa['5028_1'] = array('Česká Třebová;18:06', 'Pardubice hl.n.;19:18');
$trasa['5075_1'] = array('Ústí nad Orlicí;10:18', 'Česká Třebová;10:32');

@$ts304 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>