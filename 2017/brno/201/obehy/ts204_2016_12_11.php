<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4050_1', '4051_1', '4054_1', '4055_1', '4021_1', '4052_1', '4053_1', '4968_1', '4975_1', '4976_1', '4983_1', '4984_1', '4633_1', '4936_1', '4938_1'];
$obeh[2] = ['4951_1', '4956_1', '4963_1', '4966_1', '4973_1', '4978_1', '4985_1', '4611_1'];

$omezeni['4021_1'] = 'X2345';
$omezeni['4050_1'] = 'X1';
$omezeni['4051_1'] = 'X1';
$omezeni['4052_1'] = 'X2345';
$omezeni['4053_1'] = 'X2345';
$omezeni['4054_1'] = 'X1';
$omezeni['4055_1'] = 'X1';
$omezeni['4611_1'] = '6';
$omezeni['4633_1'] = 'X';
$omezeni['4936_1'] = 'X';
$omezeni['4938_1'] = 'T';
$omezeni['4951_1'] = 'X';
$omezeni['4956_1'] = 'X';
$omezeni['4963_1'] = 'X';
$omezeni['4966_1'] = 'X';
$omezeni['4968_1'] = 'X';
$omezeni['4973_1'] = 'X';
$omezeni['4975_1'] = 'X';
$omezeni['4976_1'] = 'X';
$omezeni['4978_1'] = 'X';
$omezeni['4983_1'] = 'X';
$omezeni['4984_1'] = 'X';
$omezeni['4985_1'] = 'X';


$poznamkaObehu['4051_1'] = ['pk', 'postrk'];
$poznamkaObehu['4055_1'] = ['pk', 'postrk'];
$poznamkaObehu['4021_1'] = ['pk', 'postrk'];
$poznamkaObehu['4053_1'] = ['pk', 'postrk'];
$poznamkaObehu['4975_1'] = ['pk', 'postrk'];
$poznamkaObehu['4983_1'] = ['pk', 'postrk'];
$poznamkaObehu['4633_1'] = ['pk', 'postrk'];
$poznamkaObehu['4951_1'] = ['pk', 'postrk'];
$poznamkaObehu['4963_1'] = ['pk', 'postrk'];
$poznamkaObehu['4973_1'] = ['pk', 'postrk'];
$poznamkaObehu['4985_1'] = ['pk', 'postrk'];
$poznamkaObehu['4611_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts204 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


