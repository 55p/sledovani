<?php 
$zacatekPlatnosti = '26.10.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1221_1', '1234_1', '1232_1', '1225_1', '1906_1', '1907_1', '1228_1', '1229_1', '1224_1', '1233_1', '1220_1'];

$omezeni['1220_1'] = 'T';
$omezeni['1221_1'] = 'X6';
$omezeni['1232_1'] = '6';
$omezeni['1233_1'] = 'T';
$omezeni['1234_1'] = 'X';

$poznamkaObehu['1221_1'] = ['pk', 'postrk'];
$poznamkaObehu['1225_1'] = ['pk', 'postrk'];
$poznamkaObehu['1907_1'] = ['pk', 'postrk'];
$poznamkaObehu['1229_1'] = ['pk', 'postrk'];
$poznamkaObehu['1233_1'] = ['pk', 'postrk'];

$trasa['1220_1'] = ['Praha-Bubny Vltavská;21:05', 'Rakovník;22:33'];
$trasa['1221_1'] = ['Rakovník;5:16', 'Praha-Bubny Vltavská;6:43'];
$trasa['1224_1'] = ['Praha-Bubny Vltavská;17:05', 'Rakovník;18:33'];
$trasa['1225_1'] = ['Rakovník;9:23', 'Praha-Bubny Vltavská;10:49'];
$trasa['1228_1'] = ['Praha-Bubny Vltavská;13:05', 'Rakovník;14:33'];
$trasa['1229_1'] = ['Rakovník;15:23', 'Praha-Bubny Vltavská;16:49'];
$trasa['1232_1'] = ['Praha-Bubny Vltavská;7:05', 'Rakovník;8:33'];
$trasa['1233_1'] = ['Rakovník;19:23', 'Praha-Bubny Vltavská;20:49'];
$trasa['1234_1'] = ['Praha-Bubny Vltavská;6:50', 'Rakovník;8:33'];
$trasa['1906_1'] = ['Praha-Bubny Vltavská;11:05', 'Kladno-Ostrovec;11:49'];
$trasa['1907_1'] = ['Kladno-Ostrovec;12:05', 'Praha-Bubny Vltavská;12:49'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts760 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


