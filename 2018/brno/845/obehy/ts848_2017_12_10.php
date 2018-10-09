<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4070_1', '4071_1', '4072_1', '4073_1', '4076_1', '4077_1', '3872_1', '3873_1', '3874_1', '3875_1', '104074_1', '4074_1', '4075_1', '4078_1', '4081_1', '4082_1', '4083_1', '4084_1', '104084_1', '104085_1', '4085_1', '4086_1', '4087_1', '104087_1', '3876_1', '3877_1'];

$omezeni['3872_1'] = 'X';
$omezeni['3873_1'] = 'X';
$omezeni['3874_1'] = 'X';
$omezeni['3875_1'] = 'X';
$omezeni['3876_1'] = 'X';
$omezeni['3877_1'] = 'X';
$omezeni['4070_1'] = 'X';
$omezeni['4071_1'] = 'X';
$omezeni['4072_1'] = 'X';
$omezeni['4073_1'] = 'X';
$omezeni['4074_1'] = '25';
$omezeni['4075_1'] = '25';
$omezeni['4076_1'] = 'X';
$omezeni['4077_1'] = 'X';
$omezeni['4081_1'] = 'X';
$omezeni['4082_1'] = 'X';
$omezeni['4083_1'] = '25';
$omezeni['4084_1'] = '25';
$omezeni['104074_1'] = '7';
$omezeni['104084_1'] = 'X';
$omezeni['104085_1'] = 'X';
$omezeni['104087_1'] = '6';

$trasa['104074_1'] = ['Brno-Horní Heršpice;5:03','Vyškov na Moravě;5:43'];
$trasa['104084_1'] = ['Nezamyslice;15:25','Prostějov hl.n.;15:43'];
$trasa['104085_1'] = ['Prostějov hl.n.;16:15','Nezamyslice;16:36'];
$trasa['104087_1'] = ['Vyškov na Moravě;19:05','Brno-Horní Heršpice;20:13'];
$trasa['3872_1'] = ['Vyškov na Moravě;8:59', 'Přerov;9:51'];
$trasa['3873_1'] = ['Přerov;9:57', 'Vyškov na Moravě;10:50'];
$trasa['3874_1'] = ['Vyškov na Moravě;10:59', 'Přerov;11:51'];
$trasa['3875_1'] = ['Přerov;11:57', 'Vyškov na Moravě;12:56'];
$trasa['3876_1'] = ['Vyškov na Moravě;18:59', 'Přerov;20:01'];
$trasa['3877_1'] = ['Přerov;20:57', 'Vyškov na Moravě;21:39'];
$trasa['4070_1'] = ['Vyškov na Moravě;4:34', 'Nezamyslice;4:49'];
$trasa['4071_1'] = ['Nezamyslice;4:55', 'Vyškov na Moravě;5:10'];
$trasa['4072_1'] = ['Vyškov na Moravě;5:17', 'Nezamyslice;5:32'];
$trasa['4073_1'] = ['Nezamyslice;5:38', 'Vyškov na Moravě;5:56'];
$trasa['4074_1'] = ['Vyškov na Moravě;5:47', 'Nezamyslice;6:02'];
$trasa['4075_1'] = ['Nezamyslice;6:09', 'Vyškov na Moravě;6:24'];
$trasa['4076_1'] = ['Vyškov na Moravě;6:19', 'Nezamyslice;6:34'];
$trasa['4077_1'] = ['Nezamyslice;7:09', 'Vyškov na Moravě;7:24'];
$trasa['4078_1'] = ['Vyškov na Moravě;12:59', 'Nezamyslice;13:16'];
$trasa['4081_1'] = ['Nezamyslice;13:21', 'Vyškov na Moravě;13:38'];
$trasa['4082_1'] = ['Vyškov na Moravě;14:19', 'Nezamyslice;14:35'];
$trasa['4083_1'] = ['Nezamyslice;14:38', 'Vyškov na Moravě;14:56'];
$trasa['4084_1'] = ['Vyškov na Moravě;14:59', 'Nezamyslice;15:16'];
$trasa['4085_1'] = ['Nezamyslice;16:38', 'Vyškov na Moravě;16:56'];
$trasa['4086_1'] = ['Vyškov na Moravě;16:59', 'Nezamyslice;17:16'];
$trasa['4087_1'] = ['Nezamyslice;18:38', 'Vyškov na Moravě;18:56'];
//sem patri stazene trasy




$typ['104074_1'] = 'Sv';
$typ['104084_1'] = 'Sv';
$typ['104085_1'] = 'Sv';
$typ['104087_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts848 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


