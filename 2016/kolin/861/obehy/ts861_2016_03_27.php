<?php 
$zacatekPlatnosti = '27.3.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('122200_1', '22221_1', '22202_1', '22205_1', '22203_1', '22204_1', '22206_1', '22207_1', '22220_1', '22223_1', '22212_1', '22213_1', '22216_1', '22216_2', '102461_1', '102428_1', '102425_1', '102462_1');

$omezeni['102425_1'] = '6,2703,0507,2810';
$omezeni['102428_1'] = '6,2703,0507,2810';
$omezeni['102461_1'] = '6,2703,0507,2810';
$omezeni['102462_1'] = '6,2703,0507,2810';
$omezeni['122200_1'] = 'X1';
$omezeni['22202_1'] = 'X';
$omezeni['22203_1'] = '6';
$omezeni['22204_1'] = '6,T';
$omezeni['22205_1'] = 'X';
$omezeni['22206_1'] = 'X';
$omezeni['22212_1'] = 'X';
$omezeni['22213_1'] = 'X';
$omezeni['22216_1'] = 'X1234';
$omezeni['22216_2'] = 'X5';
$omezeni['22220_1'] = 'X';
$omezeni['22221_1'] = 'X';
$omezeni['22223_1'] = 'X';

$trasa['102425_1'] = array('Kutná Hora hl.n.;17:04','Kutná Hora město;17:11');
$trasa['102428_1'] = array('Kutná Hora město;16:44','Kutná Hora hl.n.;16:52');
$trasa['102461_1'] = array('Kolín;16:12','Kutná Hora město;16:42');
$trasa['102462_1'] = array('Kutná Hora město;17:32','Kolín;17:52');
$trasa['122200_1'] = array('Kolín;4:11','Uhlířské Janovice;4:54');

$poznamkaObehu['122200_1'] = array('pk', 'postrk');

$poznamkaObehu['102461_1'] = array('pk', 'postrk');
$poznamkaObehu['102425_1'] = array('pk', 'postrk');


$poznamkaObehu['102428_1'] = array('př', 'přípřež');

$trasa['22202_1'] = array('Kolín;6:32', 'Sázava-Černé Budy;7:47');
$trasa['22203_1'] = array('Ledečko;6:16', 'Kolín;7:25');
$trasa['22204_1'] = array('Kolín;8:49', 'Ledečko;9:58');
$trasa['22205_1'] = array('Sázava-Černé Budy;8:03', 'Kolín;9:20');
$trasa['22206_1'] = array('Kolín;10:59', 'Ledečko;12:05');
$trasa['22207_1'] = array('Ledečko;12:13', 'Kolín;13:20');
$trasa['22212_1'] = array('Kolín;16:50', 'Ledečko;17:56');
$trasa['22213_1'] = array('Ledečko;18:05', 'Kolín;19:14');
$trasa['22216_1'] = array('Kolín;20:51', 'Uhlířské Janovice;21:31');
$trasa['22216_2'] = array('Kolín;20:51', 'Ledečko;21:57');
$trasa['22220_1'] = array('Kolín;13:45', 'Uhlířské Janovice;14:25');
$trasa['22221_1'] = array('Uhlířské Janovice;5:38', 'Kolín;6:18');
$trasa['22223_1'] = array('Uhlířské Janovice;15:32', 'Kolín;16:14');


@$ts861 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>