<?php 
$zacatekPlatnosti = '1.7.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['13001_1', '13000_1', '13037_1', '113005_1', '13006_1', '13052_1', '13061_1', '13060_1', '13063_1', '13062_1', '13036_1', '13015_1', '13065_1', '13016_1', '13064_1', '13057_1', '13055_1'];

$omezeni['13000_1'] = 'X';
$omezeni['13001_1'] = 'X';
$omezeni['13006_1'] = 'X';
$omezeni['13015_1'] = 'X';
$omezeni['13016_1'] = 'X';
$omezeni['13036_1'] = 'X';
$omezeni['13037_1'] = 'X';
$omezeni['13052_1'] = '25';
$omezeni['13055_1'] = 'X';
$omezeni['13057_1'] = '25';
$omezeni['13060_1'] = '25';
$omezeni['13061_1'] = '25';
$omezeni['13062_1'] = '25';
$omezeni['13063_1'] = '25';
$omezeni['13064_1'] = '25';
$omezeni['13065_1'] = '25';
$omezeni['113005_1'] = 'X';

$trasa['113005_1'] = ['Šumperk;7:06', 'Zábřeh na Moravě;7:24'];
$trasa['13000_1'] = ['Zábřeh na Moravě;5:46', 'Velké Losiny;6:26'];
$trasa['13001_1'] = ['Šumperk;5:16', 'Zábřeh na Moravě;5:35'];
$trasa['13006_1'] = ['Zábřeh na Moravě;8:49', 'Šumperk;9:06'];
$trasa['13015_1'] = ['Velké Losiny;14:29', 'Zábřeh na Moravě;15:07'];
$trasa['13016_1'] = ['Zábřeh na Moravě;16:31', 'Sobotín;17:07'];
$trasa['13036_1'] = ['Šumperk;14:05', 'Velké Losiny;14:25'];
$trasa['13037_1'] = ['Velké Losiny;6:30', 'Šumperk;6:50'];
$trasa['13052_1'] = ['Šumperk;8:50', 'Sobotín;9:07'];
$trasa['13055_1'] = ['Sobotín;17:29', 'Šumperk;17:48'];
$trasa['13057_1'] = ['Sobotín;17:08', 'Šumperk;17:48'];
$trasa['13060_1'] = ['Petrov nad Desnou;11:42', 'Sobotín;11:48'];
$trasa['13061_1'] = ['Sobotín;10:09', 'Petrov nad Desnou;10:15'];
$trasa['13062_1'] = ['Petrov nad Desnou;13:41', 'Sobotín;13:47'];
$trasa['13063_1'] = ['Sobotín;13:07', 'Petrov nad Desnou;13:13'];
$trasa['13064_1'] = ['Petrov nad Desnou;16:42', 'Sobotín;16:48'];
$trasa['13065_1'] = ['Sobotín;15:08', 'Petrov nad Desnou;15:14'];
//sem patri stazene trasy


$poznamkaObehu['113005_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts824 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


