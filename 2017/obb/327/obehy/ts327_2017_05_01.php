<?php 
$zacatekPlatnosti = '1.5.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['2206_1', '2225_1', '2238_1', '2257_1'];
$obeh[2] = ['2246_1', '2265_1'];
$obeh[3] = ['2230_1', '2249_1', '2210_1', '2229_1'];
$obeh[4] = ['2282_1', '2217_1', '2222_1', '2241_1'];
$obeh[5] = ['2290_1', '2289_1'];

$omezeni['2210_1'] = '6';
$omezeni['2217_1'] = 'X6';
$omezeni['2229_1'] = '6';
$omezeni['2282_1'] = 'X6';
$omezeni['2289_1'] = '1509,1609';
$omezeni['2290_1'] = '1509,1609';


$poznamkaObehu['2206_1'] = ['pk', 'postrk'];
$poznamkaObehu['2238_1'] = ['pk', 'postrk'];
$poznamkaObehu['2246_1'] = ['pk', 'postrk'];
$poznamkaObehu['2230_1'] = ['pk', 'postrk'];
$poznamkaObehu['2210_1'] = ['pk', 'postrk'];
$poznamkaObehu['2282_1'] = ['pk', 'postrk'];
$poznamkaObehu['2222_1'] = ['pk', 'postrk'];
$poznamkaObehu['2290_1'] = ['pk', 'postrk'];


$trasa['2206_1'] = ['Wiener Neustadt Hbf;6:03', 'Znojmo;8:34'];
$trasa['2210_1'] = ['Payerbach-Reichenau;6:27', 'Znojmo;9:34'];
$trasa['2217_1'] = ['Znojmo;6:53', 'Wien Meidling;8:43'];
$trasa['2229_1'] = ['Znojmo;9:55', 'Wien Meidling;11:43'];
$trasa['2222_1'] = ['Wien Meidling;10:45', 'Znojmo;12:34'];
$trasa['2225_1'] = ['Znojmo;8:55', 'Wien Meidling;10:43'];
$trasa['2230_1'] = ['Wien Meidling;12:45', 'Znojmo;14:34'];
$trasa['2238_1'] = ['Wien Meidling;14:45', 'Znojmo;16:34'];
$trasa['2241_1'] = ['Znojmo;12:55', 'Payerbach-Reichenau;16:08'];
$trasa['2246_1'] = ['Payerbach-Reichenau;15:25', 'Znojmo;18:34'];
$trasa['2249_1'] = ['Znojmo;14:55', 'Payerbach-Reichenau;18:08'];
$trasa['2257_1'] = ['Znojmo;16:55', 'Payerbach-Reichenau;20:08'];
$trasa['2265_1'] = ['Znojmo;18:55', 'Wien Meidling;20:43'];
$trasa['2282_1'] = ['Retz;6:18', 'Znojmo;6:36'];
$trasa['2289_1'] = ['Znojmo;22:55', 'Retz;23:14'];
$trasa['2290_1'] = ['Retz;22:25', 'Znojmo;22:40',];

$typ[2290] = 'Sv';

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts327 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


