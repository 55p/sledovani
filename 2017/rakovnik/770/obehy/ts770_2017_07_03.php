<?php 
$zacatekPlatnosti = '4.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['1221_1', '10514_1', '1232_1', '1223_1', '1230_1', '1225_1', '1906_1', '1907_1', '1228_1', '1227_1', '1226_1', '1229_1', '1224_1', '1231_1', '1222_1', '1233_1', '1220_1'];

$omezeni['10514_1'] = 'X';
$omezeni['1220_1'] = 'T';
$omezeni['1221_1'] = 'X6';
$omezeni['1232_1'] = '6';
$omezeni['1233_1'] = 'T';

$trasa['10514_1'] = ['Praha-Bubny Vltavská;6:50','Kladno;7:40'];
$trasa['1220_1'] = ['Praha-Bubny Vltavská;21:05','Kladno;21:41'];
$trasa['1221_1'] = ['Kladno;6:08','Praha-Bubny Vltavská;6:47'];
$trasa['1222_1'] = ['Praha-Bubny Vltavská;19:05','Kladno;19:41'];
$trasa['1223_1'] = ['Kladno;8:15','Praha-Bubny Vltavská;8:49'];
$trasa['1224_1'] = ['Praha-Bubny Vltavská;17:05','Kladno;17:41'];
$trasa['1225_1'] = ['Kladno;10:15','Praha-Bubny Vltavská;10:49'];
$trasa['1226_1'] = ['Praha-Bubny Vltavská;15:05','Kladno;15:41'];
$trasa['1227_1'] = ['Kladno;14:15','Praha-Bubny Vltavská;14:49'];
$trasa['1228_1'] = ['Praha-Bubny Vltavská;13:05','Kladno;13:41'];
$trasa['1229_1'] = ['Kladno;16:15','Praha-Bubny Vltavská;16:49'];
$trasa['1230_1'] = ['Praha-Bubny Vltavská;9:05','Kladno;9:41'];
$trasa['1231_1'] = ['Kladno;18:15','Praha-Bubny Vltavská;18:49'];
$trasa['1232_1'] = ['pk;7:05','Kladno;7:41'];
$trasa['1233_1'] = ['Kladno;20:15','Praha-Bubny Vltavská;20:49'];
$trasa['1906_1'] = ['Praha-Bubny Vltavská;11:05','Kladno-Ostrovec;11:49'];
$trasa['1907_1'] = ['Kladno-Ostrovec;12:06','Praha-Bubny Vltavská;12:49'];

$poznamkaObehu['1221_1'] = ['pk', 'postrk'];
$poznamkaObehu['1223_1'] = ['pk', 'postrk'];
$poznamkaObehu['1225_1'] = ['pk', 'postrk'];
$poznamkaObehu['1907_1'] = ['pk', 'postrk'];
$poznamkaObehu['1227_1'] = ['pk', 'postrk'];
$poznamkaObehu['1229_1'] = ['pk', 'postrk'];
$poznamkaObehu['1231_1'] = ['pk', 'postrk'];
$poznamkaObehu['1233_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts770 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


