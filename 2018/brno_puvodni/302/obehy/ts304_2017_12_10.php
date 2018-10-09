<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4764_1', '1975_1', '1972_1', '4761_1', '4768_1', '4765_1', '4766_1', '5006_1', '5009_1', '4761_2'];

$omezeni['1972_1'] = 'X';
$omezeni['1975_1'] = 'X';
$omezeni['4761_1'] = 'X';
$omezeni['4761_2'] = '25';
$omezeni['4764_1'] = 'X';
$omezeni['4765_1'] = 'X5';
$omezeni['4766_1'] = '25';
$omezeni['4768_1'] = 'X5';
$omezeni['5006_1'] = '25';
$omezeni['5009_1'] = '25';

$trasa['1972_1'] = ['Brno hl.n.;13:44', 'Choceň;15:52'];
$trasa['1975_1'] = ['Česká Třebová;6:39', 'Brno hl.n.;8:14'];
$trasa['4761_1'] = ['Choceň;16:09', 'Letovice;17:32'];
$trasa['4761_2'] = ['Česká Třebová;16:39', 'Letovice;17:32'];
$trasa['4764_1'] = ['Letovice;5:31', 'Česká Třebová;6:19'];
$trasa['4765_1'] = ['Česká Třebová;22:10', 'Letovice;22:56'];
$trasa['4766_1'] = ['Letovice;6:31', 'Česká Třebová;7:19'];
$trasa['4768_1'] = ['Letovice;18:03', 'Česká Třebová;18:52'];
$trasa['5006_1'] = ['Česká Třebová;7:57', 'Pardubice hl.n.;9:16'];
$trasa['5009_1'] = ['Pardubice hl.n.;14:44', 'Česká Třebová;15:57'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts304 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


