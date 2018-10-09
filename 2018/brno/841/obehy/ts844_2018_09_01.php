<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4802_1', '14862_1', '4865_1', '4831_1', '4826_1', '4833_1', '4828_1', '4835_1', '4832_1', '4841_1', '11493_1', '4820_1', '4825_1', '4824_1', '4831_2', '1722_1', '4828_2', '4835_2', '1735_1', '4854_1', '4851_1'];

$omezeni['1722_1'] = 'T';
$omezeni['1735_1'] = '6';
$omezeni['4802_1'] = 'X';
$omezeni['4820_1'] = '6';
$omezeni['4824_1'] = '6';
$omezeni['4825_1'] = '6';
$omezeni['4826_1'] = 'X';
$omezeni['4828_2'] = '25';
$omezeni['4828_1'] = 'X';
$omezeni['4831_2'] = '6';
$omezeni['4831_1'] = 'X';
$omezeni['4832_1'] = 'X';
$omezeni['4833_1'] = 'X';
$omezeni['4835_1'] = 'X';
$omezeni['4835_2'] = '25';
$omezeni['4841_1'] = 'X';
$omezeni['4851_1'] = 'X5';
$omezeni['4854_1'] = 'XT';
$omezeni['4865_1'] = 'X';
$omezeni['11493_1'] = 'X';
$omezeni['14862_1'] = 'X';

$trasa['4826_1'] = ['Zastávka u Brna;9:12','Náměšť nad Oslavou;9:39'];
$trasa['4828_1'] = ['Zastávka u Brna;11:14','Náměšť nad Oslavou;11:40'];
$trasa['4831_1'] = ['Třebíč;7:42','Zastávka u Brna;8:41'];
$trasa['4832_1'] = ['Zastávka u Brna;14:14','Náměšť nad Oslavou;15:11'];
$trasa['4833_1'] = ['Náměšť nad Oslavou;10:19','Zastávka u Brna;10:43'];
$trasa['4835_1'] = ['Náměšť nad Oslavou;12:21','Zastávka u Brna;12:44'];
$trasa['4841_1'] = ['Náměšť nad Oslavou;16:16','Zastávka u Brna;16:41'];
$trasa['11493_1'] = ['Zastávka u Brna;16:55','Brno-Horní Heršpice;17:18'];
$trasa['14862_1'] = ['Jihlava;6:05','Jihlava-Bosch Diesel;6:09'];
$trasa['1722_1'] = ['Bylnice;5:05', 'Brno hl.n.;8:34'];
$trasa['1735_1'] = ['Brno hl.n.;19:28', 'Bylnice;22:36'];
$trasa['4802_1'] = ['Zastávka u Brna;4:17', 'Jihlava;5:56'];
$trasa['4820_1'] = ['Brno hl.n.;0:42', 'Rapotice;1:25'];
$trasa['4824_1'] = ['Brno hl.n.;6:39', 'Náměšť nad Oslavou;7:39'];
$trasa['4825_1'] = ['Rapotice;5:29', 'Brno hl.n.;6:10'];
$trasa['4828_2'] = ['Brno hl.n.;10:45', 'Náměšť nad Oslavou;11:40'];
$trasa['4831_2'] = ['Náměšť nad Oslavou;8:17', 'Brno hl.n.;9:13'];
$trasa['4835_2'] = ['Náměšť nad Oslavou;12:21', 'Brno hl.n.;13:13'];
$trasa['4851_1'] = ['Zastávka u Brna;22:47', 'Brno hl.n.;23:16'];
$trasa['4854_1'] = ['Brno hl.n.;21:45', 'Zastávka u Brna;22:14'];
$trasa['4865_1'] = ['Jihlava-Bosch Diesel;6:14', 'Třebíč;7:12'];
//sem patri stazene trasy


$poznamkaObehu['14862_1'] = ['pk', 'postrk'];


$typ['11493_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts844 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


