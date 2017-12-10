<?php 
$zacatekPlatnosti = '1.7.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3680_1', 3637,  '13021_1', '1713_1'];
$obeh[2] = ['1712_1', '1705_1', '1706_1', '1711_1', '1715_1'];
$obeh[3] = ['1710_1', '1707_1', '1704_1', '13020_1', '1713_2'];
$obeh[4] = ['70361_1', '1703_1', '13005_1', '1701_1', '1708_1', '1709_1', '1702_1', '70360_1'];

$omezeni['13005_1'] = 'X';
$omezeni['13020_1'] = 'X';
$omezeni['13021_1'] = 'X';
$omezeni['1701_1'] = 'X';
$omezeni['1703_1'] = '25';
$omezeni['1711_1'] = 'X6';
$omezeni['1713_1'] = 'X';
$omezeni['1713_2'] = '6,T';
$omezeni['1715_1'] = 'T';
$omezeni['3680_1'] = 'X';
$omezeni['3683_1'] = 'X';
$omezeni['70361_1'] = '25';
$omezeni[3637] = 'X';

$trasa['70360_1'] = ['Zábřeh na Moravě;18:31:Šumperk;19:04'];
$trasa['70361_1'] = ['Šumperk;7:46:Zábřeh na Moravě;8:31'];
$trasa['13005_1'] = ['Šumperk;7:06', 'Zábřeh na Moravě;7:24'];
$trasa['1701_1'] = ['Zábřeh na Moravě;7:31', 'Jeseník;8:58'];
$trasa['1715_1'] = ['Zábřeh na Moravě;15:31', 'Jeseník;17:17'];
$trasa['13020_1'] = ['Zábřeh na Moravě;18:26', 'Šumperk;18:44'];
$trasa['13021_1'] = ['Šumperk;16:50', 'Zábřeh na Moravě;17:07'];
$trasa['1702_1'] = ['Jeseník;17:01', 'Zábřeh na Moravě;18:25'];
$trasa['1703_1'] = ['Zábřeh na Moravě;8:31', 'Jeseník;9:58'];
$trasa['1704_1'] = ['Jeseník;15:01', 'Zábřeh na Moravě;16:25'];
$trasa['1705_1'] = ['Zábřeh na Moravě;9:31', 'Jeseník;10:58'];
$trasa['1706_1'] = ['Jeseník;13:01', 'Zábřeh na Moravě;14:25'];
$trasa['1707_1'] = ['Zábřeh na Moravě;11:31', 'Jeseník;12:58'];
$trasa['1708_1'] = ['Jeseník;11:01', 'Zábřeh na Moravě;12:25'];
$trasa['1709_1'] = ['Zábřeh na Moravě;13:31', 'Jeseník;14:58'];
$trasa['1710_1'] = ['Jeseník;9:01', 'Zábřeh na Moravě;10:25'];
$trasa['1711_1'] = ['Zábřeh na Moravě;15:31', 'Jeseník;16:58'];
$trasa['1712_1'] = ['Jeseník;7:01', 'Zábřeh na Moravě;8:25'];
$trasa['1713_1'] = ['Zábřeh na Moravě;17:31', 'Jeseník;18:58'];
$trasa['1713_2'] = ['Zábřeh na Moravě;17:31', 'Jeseník;18:58'];
$trasa['3637'] = ['Olomouc hl.n.;14:37', 'Šumperk;16:10'];
$trasa['3680_1'] = ['Šumperk;4:34', 'Olomouc hl.n.;5:54'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts721 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


