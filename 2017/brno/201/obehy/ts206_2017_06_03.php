<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['4950_1', '11457_1', '11454_1', '4965_1'];
$obeh[2] = ['11451_1', '4952_1', '4959_1'];

$omezeni['11451_1'] = 'X';
$omezeni['11454_1'] = 'X';
$omezeni['11457_1'] = 'X';
$omezeni['4950_1'] = 'X';
$omezeni['4952_1'] = 'X';
$omezeni['4959_1'] = 'X';
$omezeni['4965_1'] = 'X';

$trasa['11451_1'] = ['Tišnov;4:43', 'Brno-Lesná;5:12'];
$trasa['11454_1'] = ['Brno-Lesná;7:18', 'Tišnov;7:46'];
$trasa['11457_1'] = ['Tišnov;6:13', 'Brno-Lesná;6:41'];
$trasa['4950_1'] = ['Brno-Lesná;5:17', 'Tišnov;5:47'];
$trasa['4952_1'] = ['Brno-Lesná;5:45', 'Tišnov;6:17'];
$trasa['4959_1'] = ['Tišnov;6:43', 'Brno-Lesná;7:14'];
$trasa['4965_1'] = ['Tišnov;8:13', 'Brno-Lesná;8:41'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts206 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


