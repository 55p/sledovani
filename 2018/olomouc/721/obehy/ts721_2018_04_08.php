<?php 
$zacatekPlatnosti = '8.4.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['13005_1', '3680_1', '13722_1', '1701_1', '101701_1', '1710_1', '1707_1', '1706_1', '1711_1', '1715_1', '1702_1', '70360_1'];
$obeh[2] = ['103680_1', '3683_1', '13021_1', '1713_1', '70361_1', '1703_1'];
$obeh[3] = ['1712_1', '1705_1', '1708_1', '1709_1', '1704_1', '101713_1', '13020_1', '1634_1'];

$omezeni['1634_1'] = '25';
$omezeni['1701_1'] = 'X';
$omezeni['1703_1'] = '25';
$omezeni['1711_1'] = 'X6';
$omezeni['1713_1'] = 'X';
$omezeni['1715_1'] = 'T';
$omezeni['3680_1'] = '25';
$omezeni['3683_1'] = 'X';
$omezeni['13005_1'] = 'X';
$omezeni['13020_1'] = 'X';
$omezeni['13021_1'] = 'X';
$omezeni['13722_1'] = '25';
$omezeni['70361_1'] = '25';
$omezeni['101701_1'] = '25';
$omezeni['101713_1'] = '25';
$omezeni['103680_1'] = 'X';

$trasa['1634_1'] = ['Ostružná;19:20','Šumperk;20:30'];
$trasa['1701_1'] = ['Zábřeh na Moravě;7:31','Ostružná;8:29'];
$trasa['1702_1'] = ['Ostružná;17:29','Zábřeh na Moravě;18:25'];
$trasa['1703_1'] = ['Zábřeh na Moravě;8:31','Ostužná;9:29'];
$trasa['1704_1'] = ['Ostružná;15:29','Zábřeh na Moravě;16:25'];
$trasa['1705_1'] = ['Zábřeh na Moravě;9:31','Ostružná;10:29'];
$trasa['1706_1'] = ['Ostružná;13:29','Zábřeh na Moravě;14:25'];
$trasa['1707_1'] = ['Zábřeh na Moravě;11:31','Ostružná;12:29'];
$trasa['1708_1'] = ['Ostružná;11:29','Zábřeh na Moravě;12:25'];
$trasa['1709_1'] = ['Zábřeh na Moravě;13:31','Ostružná;14:29'];
$trasa['1710_1'] = ['Ostružná;9:29','Zábřeh na Moravě;10:25'];
$trasa['1711_1'] = ['Zábřeh na Moravě;15:31','Ostružná;16:31'];
$trasa['1712_1'] = ['Ostružná;7:29','Zábřeh na Moravě;8:25'];
$trasa['1713_1'] = ['Zábřeh na Moravě;17:31','Ostružná;18:31'];
$trasa['1715_1'] = ['Zábřeh na Moravě;15:31','Ostružná;16:36'];
$trasa['3680_1'] = ['Šumperk;4:34','Uničov;5:15'];
$trasa['3683_1'] = ['Olomouc hl.n.;14:56','Šumperk;16:10'];
$trasa['13005_1'] = ['Šumperk;7:06','Zábřeh na Moravě;7:24'];
$trasa['13020_1'] = ['Zábřeh na Moravě;18:26','Šumperk;18:44'];
$trasa['13021_1'] = ['Šumperk;16:50','Zábřeh na Moravě;17:07'];
$trasa['13722_1'] = ['Uničov;5:37','Olomouc hl.n.;6:20'];
$trasa['70360_1'] = ['Zábřeh na Moravě;18:31','Šumperk;19:04'];
$trasa['70361_1'] = ['Šumperk;7:46','Zábřeh na Moravě;8:31'];
$trasa['101701_1'] = ['Olomouc hl.n.;6:56','Ostružná;8:29'];
$trasa['101713_1'] = ['Zábřeh na Moravě;17:31','Ostružná;18:31'];
$trasa['103680_1'] = ['Šumperk;4:34','Olomouc hl.n.;5:54'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts721 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


