<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4691_1', '4954_1', '4961_1', '4970_1', '4977_1', '4982_1', '4603_1', '4620_1', '461_1', '4604_1', '4633_1'];
$obeh[2] = ['4953_1', '4958_1', '4965_1', '4971_1', '4974_1', '4981_1', '104938_1', '4938_1'];

$omezeni['104938_1'] = 'X5';
$omezeni['4603_1'] = '6';
$omezeni['4604_1'] = '6';
$omezeni['461_1'] = '6';
$omezeni['4620_1'] = '6';
$omezeni['4633_1'] = '6';
$omezeni['4691_1'] = 'X1';
$omezeni['4938_1'] = 'X5';
$omezeni['4953_1'] = 'X';
$omezeni['4954_1'] = 'X';
$omezeni['4958_1'] = 'X';
$omezeni['4961_1'] = 'X';
$omezeni['4965_1'] = 'X';
$omezeni['4970_1'] = 'X';
$omezeni['4971_1'] = 'X';
$omezeni['4974_1'] = 'X';
$omezeni['4977_1'] = 'X';
$omezeni['4981_1'] = 'X';
$omezeni['4982_1'] = 'X';

$trasa['104938_1'] = ['Vranovice;22:20','Brno hl.n.;22:49'];
$trasa['4691_1'] = ['Brno hl.n.;4:38','Vranovice;4:57'];
$trasa['4938_1'] = ['Brno hl.n.;23:01','Tišnov;23:40'];

$poznamkaObehu['104938_1'] = ['pk', 'postrk'];


$typ['4691_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts205 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


