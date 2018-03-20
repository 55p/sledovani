<?php 
$zacatekPlatnosti = '30.3.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3220_1', '3221_1', '113259_1', '13262_1', '3230_1', '21955_1', '103226_1', '3171_1', '3110_1', '3259_1', '23227_1'];
$obeh[2] = ['23200_1', '113255_1', '13256_1', '113261_1', '13264_1', '113265_1', '13268_1', '113269_1', '13272_1'];

$omezeni['3110_1'] = '25';
$omezeni['3171_1'] = '25';
$omezeni['3220_1'] = 'X';
$omezeni['3221_1'] = 'X';
$omezeni['3230_1'] = 'X';
$omezeni['13256_1'] = 'X';
$omezeni['13262_1'] = '25';
$omezeni['13264_1'] = '25';
$omezeni['13268_1'] = 'X';
$omezeni['13272_1'] = 'X';
$omezeni['21955_1'] = 'X';
$omezeni['23200_1'] = 'X1';
$omezeni['23227_1'] = 'T';
$omezeni['103226_1'] = '25';
$omezeni['113255_1'] = 'X';
$omezeni['113259_1'] = '25';
$omezeni['113261_1'] = '25';
$omezeni['113265_1'] = 'X';
$omezeni['113269_1'] = 'X';

$trasa['3110_1'] = ['Frenštát pod Radhoštěm;17:49','Valašské Meziříčí;18:22'];
$trasa['3171_1'] = ['Valašské Meziříčí;13:16','Frenštát pod Radhoštěm;13:49'];
$trasa['3220_1'] = ['Vsetín;03:25','Hranice na Moravě;04:14'];
$trasa['3221_1'] = ['Hranice na Moravě;04:51','Vsetín;05:48'];
$trasa['3230_1'] = ['Vsetín;10:20','Hranice na Moravě;11:10'];
$trasa['3259_1'] = ['Valašské Meziříčí;20:25','Vsetín;20:45'];
$trasa['13256_1'] = ['Velké Karlovice;06:26','Vsetín;07:19'];
$trasa['13262_1'] = ['Velké Karlovice;09:51','Vsetín;10:44'];
$trasa['13264_1'] = ['Velké Karlovice;11:20','Vsetín;12:09'];
$trasa['13268_1'] = ['Velké Karlovice;14:59','Vsetín;15:51'];
$trasa['13272_1'] = ['Velké Karlovice;17:20','Vsetín;18:15'];
$trasa['21955_1'] = ['Hranice na Moravě;11:15','Valašské Meziříčí;11:38'];
$trasa['23200_1'] = ['Bylnice;03:56','Vsetín;04:47'];
$trasa['23227_1'] = ['Vsetín;21:40','Bylnice;22:31'];
$trasa['103226_1'] = ['Vsetín;12:12','Valašské Meziříčí;12:30'];
$trasa['113255_1'] = ['Vsetín;05:05','Velké Karlovice;05:56'];
$trasa['113259_1'] = ['Vsetín;07:35','Velké Karlovice;08:29'];
$trasa['113261_1'] = ['Vsetín;09:50','Velké Karlovice;10:39'];
$trasa['113265_1'] = ['Vsetín;13:56','Velké Karlovice;14:50'];
$trasa['113269_1'] = ['Vsetín;15:56','Velké Karlovice;16:47'];
//sem patri stazene trasy


$poznamkaObehu['113259_1'] = ['pk', 'postrk'];
$poznamkaObehu['103226_1'] = ['pk', 'postrk'];
$poznamkaObehu['113255_1'] = ['pk', 'postrk'];
$poznamkaObehu['113261_1'] = ['pk', 'postrk'];
$poznamkaObehu['113265_1'] = ['pk', 'postrk'];
$poznamkaObehu['113269_1'] = ['pk', 'postrk'];


$typ['21955_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts885 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


