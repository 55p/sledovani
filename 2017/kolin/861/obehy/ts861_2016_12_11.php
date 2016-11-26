<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('122200_1', '22221_1', '22202_1', '22205_1', '22206_1', '22209_1', '22220_1', '22223_1', '22212_1', '22215_1', '22216_1', '5963_1', '5962_1', '22216_2', '22203_1', '22204_1', '22207_1', '22208_1', '22211_1', '22212_2', '22215_2');

$omezeni['122200_1'] = 'X1';
$omezeni['22202_1'] = 'X';
$omezeni['22203_1'] = '6';
$omezeni['22204_1'] = '25';
$omezeni['22205_1'] = 'X';
$omezeni['22206_1'] = 'X';
$omezeni['22207_1'] = '25';
$omezeni['22208_1'] = '25';
$omezeni['22209_1'] = 'X';
$omezeni['22211_1'] = '25';
$omezeni['22212_1'] = 'X';
$omezeni['22212_2'] = '25';
$omezeni['22215_1'] = 'X';
$omezeni['22215_2'] = '25';
$omezeni['22216_1'] = 'X1234';
$omezeni['22216_2'] = 'X5';
$omezeni['22220_1'] = 'X';
$omezeni['22221_1'] = 'X';
$omezeni['22223_1'] = 'X';
$omezeni['5962_1'] = 'X5';
$omezeni['5963_1'] = 'X5';

$trasa['122200_1'] = ['Kolín;4:09','Uhlířské Janovice;4:51'];

$poznamkaObehu['122200_1'] = array('pk', 'postrk');

$trasa['22202_1'] = array('Kolín;6:32', 'Sázava;7:47');
$trasa['22203_1'] = array('Ledečko;6:16', 'Kolín;7:25');
$trasa['22204_1'] = array('Kolín;8:48', 'Ledečko;9:54');
$trasa['22205_1'] = array('Sázava;7:58', 'Kolín;9:17');
$trasa['22206_1'] = array('Kolín;10:48', 'Ledečko;11:54');
$trasa['22207_1'] = array('Ledečko;10:08', 'Kolín;11:17');
$trasa['22208_1'] = array('Kolín;12:22', 'Ledečko;13:30');
$trasa['22209_1'] = array('Ledečko;12:10', 'Kolín;13:17');
$trasa['22211_1'] = array('Ledečko;14:08', 'Kolín;15:17');
$trasa['22212_1'] = array('Kolín;16:48', 'Ledečko;17:54');
$trasa['22212_2'] = array('Kolín;16:48', 'Ledečko;17:54');
$trasa['22215_1'] = array('Ledečko;18:00', 'Kolín;19:17');
$trasa['22215_2'] = array('Ledečko;18:00', 'Kolín;19:17');
$trasa['22216_1'] = array('Kolín;20:51', 'Uhlířské Janovice;21:31');
$trasa['22216_2'] = array('Kolín;20:51', 'Ledečko;21:57');
$trasa['22220_1'] = array('Kolín;13:48', 'Uhlířské Janovice;14:28');
$trasa['22221_1'] = array('Uhlířské Janovice;5:38', 'Kolín;6:18');
$trasa['22223_1'] = array('Uhlířské Janovice;15:35', 'Kolín;16:17');
$trasa['5962_1'] = array('Čáslav;20:04', 'Kolín;20:24');
$trasa['5963_1'] = array('Kolín;19:37', 'Čáslav;19:58');


@$ts861 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>