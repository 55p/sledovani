<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = '3.7.2017 23:59:59';

$obeh[1] = ['1223_1', '1230_1', '1227_1', '1226_1', '1231_1', '1222_1'];

$omezeni['1222_1'] = '-2412';
$omezeni['1231_1'] = '-2412';

$trasa['1222_1'] = ['Praha Masarykovo n.;19:02','Rakovník;20:32'];
$trasa['1223_1'] = ['Rakovník;7:22','Praha Masarykovo n.;8:52'];
$trasa['1226_1'] = ['Praha Masarykovo n.;15:02','Rakovník;16:32'];
$trasa['1227_1'] = ['Rakovník;13:22','Praha Masarykovo n.;14:52'];
$trasa['1230_1'] = ['Praha Masarykovo n.;9:02','Rakovník;10:32'];
$trasa['1231_1'] = ['Rakovník;17:22','Praha Masarykovo n.;18:52'];

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


