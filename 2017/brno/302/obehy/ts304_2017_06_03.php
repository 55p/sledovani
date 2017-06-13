<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

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

$trasa['1972_1'] = ['Brno dolní nádraží;13:41', 'Choceň;15:53'];
$trasa['1975_1'] = ['Česká Třebová;6:43', 'Brno dolní nádraží;8:17'];
$trasa['4761_1'] = ['Choceň;16:05', 'Letovice;17:33'];
$trasa['4761_2'] = ['Česká Třebová;16:42', 'Letovice;17:33'];
$trasa['4764_1'] = ['Letovice;5:31', 'Česká Třebová;6:19'];
$trasa['4765_1'] = ['Česká Třebová;22:10', 'Letovice;23:02'];
$trasa['4766_1'] = ['Letovice;6:31', 'Česká Třebová;7:17'];
$trasa['4768_1'] = ['Letovice;18:04', 'Česká Třebová;18:52'];
$trasa['5006_1'] = ['Česká Třebová;7:59', 'Pardubice hl.n.;9:14'];
$trasa['5009_1'] = ['Pardubice hl.n.;14:44', 'Česká Třebová;15:49'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts304 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


