<?php 
$zacatekPlatnosti = '1.7.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3680_1', '3637_1', '13021_1', '1713_1'];
$obeh[2] = ['1712_1', '1705_1', '1708_1', '1709_1', '1704_1', '13020_1', '1713_2'];
$obeh[3] = ['99999_1'];
$obeh[4] = ['113005_1', '1701_1', '70361_1', '1703_1', '1710_1', '1707_1', '1706_1', '1711_1', '1715_1', '1702_1', '70360_1'];

$omezeni['1701_1'] = 'X';
$omezeni['1703_1'] = '25';
$omezeni['1711_1'] = 'X6';
$omezeni['1713_2'] = '25';
$omezeni['1713_1'] = 'X';
$omezeni['1715_1'] = 'T';
$omezeni['3637_1'] = 'X';
$omezeni['3680_1'] = 'X';
$omezeni['13020_1'] = 'X';
$omezeni['13021_1'] = 'X';
$omezeni['70361_1'] = '25';
$omezeni['113005_1'] = 'X';

$trasa['1701_1'] = ['Zábřeh na Moravě;7:31','Hanušovice;7:59'];
$trasa['1702_1'] = ['Hanušovice;18:00','Zábřeh na Moravě;18:25'];
$trasa['1703_1'] = ['Zábřeh na Moravě;8:31','Hanušovice;8:59'];
$trasa['1704_1'] = ['Hanušovice;16:00','Zábřeh na Moravě;16:25'];
$trasa['1705_1'] = ['Zábřeh na Moravě;9:31','Hanušovice;9:59'];
$trasa['1706_1'] = ['Hanušovice;14:00','Zábřeh na Moravě;14:25'];
$trasa['1707_1'] = ['Zábřeh na Moravě;11:31','Hanušovice;11:59'];
$trasa['1708_1'] = ['Hanušovice;12:00','Zábřeh na Moravě;12:25'];
$trasa['1709_1'] = ['Zábřeh na Moravě;13:31','Hanušovice;13:59'];
$trasa['1710_1'] = ['Hanušovice;10:00','Zábřeh na Moravě;10:25'];
$trasa['1711_1'] = ['Zábřeh na Moravě;15:31','Hanušovice;15:59'];
$trasa['1712_1'] = ['Hanušovice;8:00','Zábřeh na Moravě;8:25'];
$trasa['1713_2'] = ['Zábřeh na Moravě;17:31','Hanušovice;17:59'];
$trasa['1713_1'] = ['Zábřeh na Moravě;17:31','Hanušovice;17:59'];
$trasa['1715_1'] = ['Zábřeh na Moravě;15:31','Hanušovice;15:59'];
$trasa['3637_1'] = ['Olomouc hl. n.;14:37','Šumperk;16:10'];
$trasa['3680_1'] = ['Šumperk;4:34','Olomouc hl. n.;5:54'];
$trasa['13020_1'] = ['Zábřeh na Moravě;18:26','Šumperk;18:44'];
$trasa['13021_1'] = ['Šumperk;16:50','Zábřeh na Moravě;17:07'];
$trasa['70360_1'] = ['Zábřeh na Moravě;18:31','Šumperk;19:04'];
$trasa['70361_1'] = ['Šumperk;7:46','Zábřeh na Moravě;8:06'];
$trasa['99999_1'] = ['záloha Šumperk;0:00;23:59'];
$trasa['113005_1'] = ['Šumperk;7:06','Zábřeh na Moravě;7:24'];
//sem patri stazene trasy



$poznamkaObehu['113005_1'] = ['př', 'přípřež'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts721 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


