<?php 
$zacatekPlatnosti = '3.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1223_1', '1230_1', '1227_1', '1226_1', '1231_1', '1222_1'];

$trasa['1222_1'] = ['Praha-Veleslavín;19:19', 'Rakovník;20:33'];
$trasa['1223_1'] = ['Rakovník;7:23', 'Praha-Veleslavín;8:36'];
$trasa['1226_1'] = ['Praha-Veleslavín;15:19', 'Rakovník;16:33'];
$trasa['1227_1'] = ['Rakovník;13:23', 'Praha-Veleslavín;14:36'];
$trasa['1230_1'] = ['Praha-Veleslavín;9:19', 'Rakovník;10:33'];
$trasa['1231_1'] = ['Rakovník;17:23', 'Praha-Veleslavín;18:36'];

$poznamkaObehu['1223_1'] = ['pk', 'postrk'];
$poznamkaObehu['1227_1'] = ['pk', 'postrk'];
$poznamkaObehu['1231_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts761 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);
