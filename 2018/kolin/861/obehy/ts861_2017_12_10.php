<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['22200_1', '22221_1', '22202_1', '22205_1', '22206_1', '22209_1', '22220_1', '22223_1', '22203_1', '22204_1', '22207_1', '22208_1', '22211_1', '22212_1', '22215_1', '5963_1', '5962_1', '22216_1', '22216_2'];

$omezeni['22200_1'] = 'X1';
$omezeni['22202_1'] = 'X';
$omezeni['22203_1'] = '6';
$omezeni['22204_1'] = '25';
$omezeni['22205_1'] = 'X';
$omezeni['22206_1'] = 'X';
$omezeni['22207_1'] = '25';
$omezeni['22208_1'] = '25';
$omezeni['22209_1'] = 'X';
$omezeni['22211_1'] = '25';
$omezeni['22216_1'] = 'X1234';
$omezeni['22216_2'] = 'X5';
$omezeni['22220_1'] = 'X';
$omezeni['22221_1'] = 'X';
$omezeni['22223_1'] = 'X';
$omezeni['5962_1'] = 'X5';
$omezeni['5963_1'] = 'X5';

$trasa['22200_1'] = ['Kolín;4:07','Uhlířské Janovice;4:50'];

$poznamkaObehu['22200_1'] = ['pk', 'postrk'];


$trasa['22202_1'] = ['Kolín;6:32', 'Sázava;7:46'];
$trasa['22203_1'] = ['Ledečko;6:16', 'Kolín;7:25'];
$trasa['22204_1'] = ['Kolín;8:46', 'Ledečko;9:52'];
$trasa['22205_1'] = ['Sázava;7:56', 'Kolín;9:15'];
$trasa['22206_1'] = ['Kolín;10:46', 'Ledečko;11:52'];
$trasa['22207_1'] = ['Ledečko;10:06', 'Kolín;11:15'];
$trasa['22208_1'] = ['Kolín;12:20', 'Ledečko;13:28'];
$trasa['22209_1'] = ['Ledečko;12:08', 'Kolín;13:15'];
$trasa['22211_1'] = ['Ledečko;14:06', 'Kolín;15:15'];
$trasa['22212_1'] = ['Kolín;16:46', 'Ledečko;17:52'];
$trasa['22215_1'] = ['Ledečko;17:57', 'Kolín;19:15'];
$trasa['22216_1'] = ['Kolín;20:54', 'Uhlířské Janovice;21:34'];
$trasa['22216_2'] = ['Kolín;20:54', 'Ledečko;22:00'];
$trasa['22220_1'] = ['Kolín;13:46', 'Uhlířské Janovice;14:26'];
$trasa['22221_1'] = ['Uhlířské Janovice;5:36', 'Kolín;6:16'];
$trasa['22223_1'] = ['Uhlířské Janovice;15:33', 'Kolín;16:15'];
$trasa['5962_1'] = ['Čáslav;20:01', 'Kolín;20:22'];
$trasa['5963_1'] = ['Kolín;19:32', 'Čáslav;19:53'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts861 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


