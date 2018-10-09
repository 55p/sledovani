<?php 
$zacatekPlatnosti = '3.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['9801_1', '11322_1', '101229_1', '19736_1', '19735_1', '101896_1', '109879_1', '1908_1'];
$obeh[2] = ['1881_1', '11322_2', '109869_1', '1888_1', '1895_1', '101894_1'];
$obeh[3] = ['119860_1', '19861_1', '1883_1', '109808_1', '101231_1', '9848_1', '19714_1'];

$omezeni['1881_1'] = 'X';
$omezeni['1883_1'] = 'X';
$omezeni['1888_1'] = 'X';
$omezeni['1895_1'] = 'X';
$omezeni['1908_1'] = 'X';
$omezeni['9801_1'] = 'X';
$omezeni['9848_1'] = 'X';
$omezeni['11322_1'] = 'X';
$omezeni['11322_2'] = 'X';
$omezeni['19714_1'] = 'X';
$omezeni['19735_1'] = 'X';
$omezeni['19736_1'] = 'X';
$omezeni['19861_1'] = 'X';
$omezeni['101229_1'] = 'X';
$omezeni['101231_1'] = 'X';
$omezeni['101894_1'] = 'X';
$omezeni['101896_1'] = 'X';
$omezeni['109808_1'] = 'X';
$omezeni['109869_1'] = 'X';
$omezeni['109879_1'] = 'X';
$omezeni['119860_1'] = 'X';

$trasa['1881_1'] = ['Kladno-Dubí;6:20','Praha-Veleslavín;7:02'];
$trasa['1883_1'] = ['Kladno;7:15','Praha-Veleslavín;7:37'];
$trasa['1888_1'] = ['Praha-Veleslavín;16:19','Kladno-Ostrovec;16:49'];
$trasa['1895_1'] = ['Kladno-Ostrovec;17:03','Praha-Veleslavín;17:36'];
$trasa['1908_1'] = ['Praha-Veleslavín;21:19','Kladno;21:42'];
$trasa['9801_1'] = ['Rakovník;5:42','Praha-Veleslavín;7:15'];
$trasa['9848_1'] = ['Praha-Veleslavín;18:49','Kladno-Ostrovec;19:34'];
$trasa['11322_1'] = ['Praha-Veleslavín;7:36','Kladno;8:12'];
$trasa['11322_2'] = ['Praha-Veleslavín;7:38','Kladno;8:12'];
$trasa['19714_1'] = ['Kladno;20:51','Rakovník;21:48'];
$trasa['19735_1'] = ['Středokluky;17:46','Praha-Veleslavín;18:15'];
$trasa['19736_1'] = ['Praha-Veleslavín;17:03','Středokluky;17:30'];
$trasa['19861_1'] = ['Kladno-Dubí;6:55','Kladno;7:08'];
$trasa['101229_1'] = ['Kladno;16:15','Praha-Veleslavín;16:36'];
$trasa['101231_1'] = ['Kladno;18:15','Praha-Veleslavín;18:36'];
$trasa['101894_1'] = ['Praha-Veleslavín;18:19','Kladno-Ostrovec;18:49'];
$trasa['101896_1'] = ['Praha-Veleslavín;18:38','Kladno-Ostrovec;19:16'];
$trasa['109808_1'] = ['Praha-Veleslavín;7:50','Kladno;8:25'];
$trasa['109869_1'] = ['Kladno;15:29','Praha-Veleslavín;16:02'];
$trasa['109879_1'] = ['Kladno-Ostrovec;20:21','Praha-Veleslavín;21:10'];
$trasa['119860_1'] = ['Kladno;6:21','Kladno-Dubí;6:35'];
//sem patri stazene trasy


$poznamkaObehu['101229_1'] = ['pk', 'postrk'];
$poznamkaObehu['101896_1'] = ['pk', 'postrk'];
$poznamkaObehu['109879_1'] = ['pk', 'postrk'];
$poznamkaObehu['109869_1'] = ['pk', 'postrk'];
$poznamkaObehu['101894_1'] = ['pk', 'postrk'];
$poznamkaObehu['119860_1'] = ['pk', 'postrk'];
$poznamkaObehu['109808_1'] = ['pk', 'postrk'];
$poznamkaObehu['101231_1'] = ['pk', 'postrk'];


$typ['11322_1'] = 'Sv';
$typ['11322_2'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts762 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


