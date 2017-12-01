<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1252_1', '1247_1', '1240_1', '1251_1'];

$omezeni['1240_1'] = '5,2903,0407,2709,-3003,-0607,-2809';
$omezeni['1247_1'] = '5,2903,0407,2709,-3003,-0607,-2809';
$omezeni['1251_1'] = 'T,-2412,-2512,-3112,-3003,-0104,-2904,-0605,-0507,-0607,-2809,-1711';
$omezeni['1252_1'] = '1,2712,0201,0304,0205,0905,-2512,-0101,-0204,-3004,-0705';

$trasa['1240_1'] = ['Praha hl.n.;17:24', 'České Budějovice;20:45'];
$trasa['1247_1'] = ['České Budějovice;13:12', 'Praha hl.n.;16:37'];
$trasa['1251_1'] = ['České Budějovice;17:12', 'Praha hl.n.;20:37'];
$trasa['1252_1'] = ['Praha hl.n.;5:24', 'České Budějovice;8:45'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts840 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


