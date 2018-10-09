<?php 
$zacatekPlatnosti = '3.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1221_1', '1234_1', '1232_1', '1225_1', '1906_1', '1907_1', '1228_1', '1229_1', '1224_1', '1233_1', '1220_1'];

$omezeni['1220_1'] = 'T';
$omezeni['1221_1'] = 'X6';
$omezeni['1232_1'] = '6';
$omezeni['1233_1'] = 'T';
$omezeni['1234_1'] = 'X';

$trasa['1220_1'] = ['Praha-Veleslavín;21:19', 'Rakovník;22:33'];
$trasa['1221_1'] = ['Rakovník;5:16', 'Praha-Veleslavín;6:30'];
$trasa['1224_1'] = ['Praha-Veleslavín;17:19', 'Rakovník;18:33'];
$trasa['1225_1'] = ['Rakovník;9:23', 'Praha-Veleslavín;10:36'];
$trasa['1228_1'] = ['Praha-Veleslavín;13:19', 'Rakovník;14:33'];
$trasa['1229_1'] = ['Rakovník;15:23', 'Praha-Veleslavín;16:36'];
$trasa['1232_1'] = ['Praha-Veleslavín;7:19', 'Rakovník;8:33'];
$trasa['1233_1'] = ['Rakovník;19:23', 'Praha-Veleslavín;20:36'];
$trasa['1234_1'] = ['Praha-Veleslavín;7:19', 'Rakovník;8:33'];
$trasa['1906_1'] = ['Praha-Veleslavín;11:19', 'Kladno-Ostrovec;11:36'];
$trasa['1907_1'] = ['Kladno-Ostrovec;12:19', 'Praha-Veleslavín;12:36'];

$poznamkaObehu['1221_1'] = ['pk', 'postrk'];
$poznamkaObehu['1225_1'] = ['pk', 'postrk'];
$poznamkaObehu['1907_1'] = ['pk', 'postrk'];
$poznamkaObehu['1229_1'] = ['pk', 'postrk'];
$poznamkaObehu['1233_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts760 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);
