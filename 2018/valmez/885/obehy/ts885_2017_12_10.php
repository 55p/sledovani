<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3220_1', '3221_1', '3230_1', '21955_1', '3171_1', '3110_1', '3259_1', '23227_1'];
$obeh[2] = ['23200_1', '113255_1', '13256_1', '113265_1', '13268_1', '113269_1', '13272_1', '3249_1', '3254_1', '103248_1'];

$omezeni['103248_1'] = 'z25';
$omezeni['113255_1'] = 'X';
$omezeni['113265_1'] = 'X';
$omezeni['113269_1'] = 'X';
$omezeni['13256_1'] = 'X';
$omezeni['13268_1'] = 'X';
$omezeni['13272_1'] = 'X';
$omezeni['21955_1'] = 'X';
$omezeni['23200_1'] = 'X1';
$omezeni['23227_1'] = 'T';
$omezeni['3110_1'] = '25';
$omezeni['3171_1'] = '25';
$omezeni['3220_1'] = 'X';
$omezeni['3221_1'] = 'X';
$omezeni['3230_1'] = 'X';
$omezeni['3249_1'] = 'z25';
$omezeni['3254_1'] = 'z25';

$trasa['103248_1'] = ['Horní Lideč;21:15','Valašské Meziříčí;22:00'];
$trasa['113255_1'] = ['Vsetín;5:05: Velké Karlovice;5:56'];
$trasa['113265_1'] = ['Vsetín;13:56','Velké Karlovice;14:50'];
$trasa['113269_1'] = ['Vsetín;15:56','Velké Karlovice;16:47'];
$trasa['21955_1'] = ['Hranice na Moravě;11:15','Valašské Meziříčí;11:38'];

$trasa['13256_1'] = ['Velké Karlovice;6:26', 'Vsetín;7:19'];
$trasa['13268_1'] = ['Velké Karlovice;14:59', 'Vsetín;15:51'];
$trasa['13272_1'] = ['Velké Karlovice;17:20', 'Vsetín;18:15'];
$trasa['23200_1'] = ['Bylnice;3:56', 'Vsetín;4:47'];
$trasa['23227_1'] = ['Vsetín;21:40', 'Bylnice;22:31'];
$trasa['3110_1'] = ['Frenštát pod Radhoštěm;17:49', 'Valašské Meziříčí;18:22'];
$trasa['3171_1'] = ['Valašské Meziříčí;13:16', 'Frenštát pod Radhoštěm;13:49'];
$trasa['3220_1'] = ['Vsetín;3:25', 'Hranice na Moravě;4:14'];
$trasa['3221_1'] = ['Hranice na Moravě;4:51', 'Vsetín;5:46'];
$trasa['3230_1'] = ['Vsetín;10:20', 'Hranice na Moravě;11:10'];
$trasa['3249_1'] = ['Vsetín;20:27', 'Střelná;20:55'];
$trasa['3254_1'] = ['Střelná;21:00', 'Horní Lideč;21:04'];
$trasa['3259_1'] = ['Valašské Meziříčí;20:25', 'Vsetín;20:45'];


$poznamkaObehu['113255_1'] = ['pk', 'postrk'];
$poznamkaObehu['113265_1'] = ['pk', 'postrk'];
$poznamkaObehu['113269_1'] = ['pk', 'postrk'];
$poznamkaObehu['103248_1'] = ['pk', 'postrk'];


$typ['21955_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts885 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


