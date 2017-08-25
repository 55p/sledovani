<?php 
$zacatekPlatnosti = '22.8.2017';
$konecPlatnosti = NULL; //'3.7.2017 23:59:59';

$obeh[1] = ['1223_1', '1230_1', '1227_1', '1226_1', '1231_1', '1222_1'];

$trasa['1222_1'] = ['Praha Bubny-Vltavská;19:05','Rakovník;20:32'];
$trasa['1223_1'] = ['Rakovník;7:22','Praha Bubny-Vltavská;8:49'];
$trasa['1226_1'] = ['Praha Bubny-Vltavská;15:05','Rakovník;16:32'];
$trasa['1227_1'] = ['Rakovník;13:22','Praha Bubny-Vltavská;14:49'];
$trasa['1230_1'] = ['Praha Bubny-Vltavská;9:05','Rakovník;10:32'];
$trasa['1231_1'] = ['Rakovník;17:22','Praha Bubny-Vltavská;18:49'];

$poznamkaObehu['1223_1'] = ['pk', 'postrk'];
$poznamkaObehu['1227_1'] = ['pk', 'postrk'];
$poznamkaObehu['1231_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts771 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


