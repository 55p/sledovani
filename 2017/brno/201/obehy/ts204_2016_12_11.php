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

$trasa['4021_1'] = ['Brno hl.n.;3:06', 'Křenovice horní n.;3:35'];
$trasa['4050_1'] = ['Brno hl.n.;4:04', 'Rájec-Jestřebí;4:40'];
$trasa['4051_1'] = ['Rájec-Jestřebí;5:05', 'Brno hl.n.;5:43'];
$trasa['4052_1'] = ['Křenovice horní n.;4:21', 'Rájec-Jestřebí;5:39'];
$trasa['4053_1'] = ['Rájec-Jestřebí;6:11', 'Brno hl.n.;6:44'];
$trasa['4054_1'] = ['Brno hl.n.;6:15', 'Rájec-Jestřebí;6:53'];
$trasa['4055_1'] = ['Rájec-Jestřebí;7:11', 'Brno hl.n.;7:46'];
$trasa['4611_1'] = ['Tišnov;4:28', 'Brno hl.n.;5:07'];
$trasa['4633_1'] = ['Tišnov;18:28', 'Vranovice;19:42'];
$trasa['4936_1'] = ['Vranovice;21:16', 'Tišnov;22:32'];
$trasa['4938_1'] = ['Brno hl.n.;23:01', 'Tišnov;23:40'];
$trasa['4951_1'] = ['Tišnov;4:43', 'Hrušovany u Brna;5:46'];
$trasa['4956_1'] = ['Hrušovany u Brna;6:12', 'Tišnov;7:16'];
$trasa['4963_1'] = ['Tišnov;7:41', 'Brno hl.n.;8:17'];
$trasa['4966_1'] = ['Brno hl.n.;13:08', 'Kuřim;13:33'];
$trasa['4968_1'] = ['Brno hl.n.;13:35', 'Tišnov;14:16'];
$trasa['4973_1'] = ['Kuřim;14:26', 'Hrušovany u Brna;15:11'];
$trasa['4975_1'] = ['Tišnov;14:44', 'Brno hl.n.;15:23'];
$trasa['4976_1'] = ['Brno hl.n.;15:35', 'Tišnov;16:16'];
$trasa['4978_1'] = ['Hrušovany u Brna;15:42', 'Tišnov;16:46'];
$trasa['4983_1'] = ['Tišnov;16:44', 'Brno hl.n.;17:23'];
$trasa['4984_1'] = ['Brno hl.n.;17:35', 'Tišnov;18:16'];
$trasa['4985_1'] = ['Tišnov;17:13', 'Brno hl.n.;17:58'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts204 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


