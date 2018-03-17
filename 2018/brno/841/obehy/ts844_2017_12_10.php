<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4470_1', '1923_1', '4828_1', '4835_1', '104814_1', '4837_1', '4838_1', '4843_1', '4846_1', '4849_1', '4854_1', '4851_1', '4820_1', '4825_1', '4824_1', '4831_1', '1722_1', '4828_2', '4835_2', '1735_1', '4428_1'];

$omezeni['1722_1'] = 'T';
$omezeni['1735_1'] = '6';
$omezeni['1923_1'] = 'X';
$omezeni['4428_1'] = 'zX';
$omezeni['4470_1'] = 'X';
$omezeni['104814_1'] = 'X';
$omezeni['4820_1'] = '6';
$omezeni['4824_1'] = '6';
$omezeni['4825_1'] = '6';
$omezeni['4828_1'] = 'X';
$omezeni['4828_2'] = '25';
$omezeni['4831_1'] = '6';
$omezeni['4835_1'] = 'X';
$omezeni['4835_2'] = '25';
$omezeni['4837_1'] = 'X';
$omezeni['4838_1'] = 'X';
$omezeni['4843_1'] = 'X';
$omezeni['4846_1'] = 'X';
$omezeni['4849_1'] = 'X';
$omezeni['4851_1'] = 'X5';
$omezeni['4854_1'] = 'X5';

$trasa['104814_1'] = ['Brno hl.n.;13:45','Zastávka u Brna;14:18'];
$trasa['4824_1'] = ['Brno hl.n.;6:39','Náměšť nad Oslavou;7:39'];
$trasa['4825_1'] = ['Rapotice;5:29','Brno hl.n.;6:10'];
$trasa['4828_2'] = ['Brno hl.n.;10:45','Zastávka u Brna;11:13'];
$trasa['4831_1'] = ['Náměšť nad Oslavou;8:17','Brno hl.n.;9:13'];
$trasa['4835_2'] = ['Zastávka u Brna;12:44','Brno hl.n.;13:13'];
$trasa['4837_1'] = ['Zastávka u Brna;14:44','Brno hl.n.;15:14'];

$trasa['1722_1'] = ['Bylnice;5:05', 'Brno hl.n.;8:34'];
$trasa['1735_1'] = ['Brno hl.n.;19:28', 'Bylnice;22:36'];
$trasa['1923_1'] = ['Bohutice;7:37', 'Brno hl.n.;8:24'];
$trasa['4428_1'] = ['Brno hl.n.;21:54', 'Rakšice;22:45'];
$trasa['4470_1'] = ['Rakšice;7:23', 'Bohutice;7:28'];
$trasa['4820_1'] = ['Brno hl.n.;0:42', 'Rapotice;1:25'];
$trasa['4828_1'] = ['Brno hl.n.;10:45', 'Náměšť nad Oslavou;11:40'];
$trasa['4835_1'] = ['Náměšť nad Oslavou;12:21', 'Brno hl.n.;13:13'];
$trasa['4838_1'] = ['Brno hl.n.;16:12', 'Zastávka u Brna;16:40'];
$trasa['4843_1'] = ['Zastávka u Brna;16:57', 'Brno hl.n.;17:39'];
$trasa['4846_1'] = ['Brno hl.n.;18:12', 'Zastávka u Brna;18:40'];
$trasa['4849_1'] = ['Zastávka u Brna;20:42', 'Brno hl.n.;21:10'];
$trasa['4851_1'] = ['Zastávka u Brna;22:47', 'Brno hl.n.;23:16'];
$trasa['4854_1'] = ['Brno hl.n.;21:45', 'Zastávka u Brna;22:14'];


$poznamkaObehu['4470_1'] = ['pk', 'postrk'];
$poznamkaObehu['4828_1'] = ['pk', 'postrk'];
$poznamkaObehu['104814_1'] = ['pk', 'postrk'];
$poznamkaObehu['4838_1'] = ['pk', 'postrk'];
$poznamkaObehu['4846_1'] = ['pk', 'postrk'];
$poznamkaObehu['4854_1'] = ['pk', 'postrk'];
$poznamkaObehu['4820_1'] = ['pk', 'postrk'];
$poznamkaObehu['4824_1'] = ['pk', 'postrk'];
$poznamkaObehu['4828_2'] = ['pk', 'postrk'];
$poznamkaObehu['1735_1'] = ['pk', 'postrk'];
$poznamkaObehu['4428_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts844 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


