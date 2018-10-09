<?php 
$zacatekPlatnosti = '1.7.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['13031_1', '113001_1', '3603_1', '3602_1', '13015_1', '13016_1', '3615_1', '1634_1', '3619_1', '13629_1', '13042_1', '13030_1', '13003_1', '13002_1', '13050_1', '13051_1', '3657_1', '3658_1', '3611_1', '3612_1', '13023_1', '13022_1', '21953_1', '3665_1'];
$obeh[2] = ['3650_1', '13013_1', '13014_1', '13041_1', '3613_1', '3614_1', '3619_2', '13629_2', '13042_2'];
$obeh[3] = ['99998_1'];

$omezeni['1634_1'] = '25';
$omezeni['3602_1'] = '25';
$omezeni['3603_1'] = '25';
$omezeni['3611_1'] = 'X';
$omezeni['3612_1'] = 'X';
$omezeni['3613_1'] = 'X';
$omezeni['3614_1'] = 'X';
$omezeni['3615_1'] = '25';
$omezeni['3619_1'] = '25';
$omezeni['3619_2'] = 'X';
$omezeni['3650_1'] = 'X';
$omezeni['3657_1'] = 'X';
$omezeni['3658_1'] = 'X';
$omezeni['3665_1'] = 'X1234';
$omezeni['13002_1'] = 'X';
$omezeni['13003_1'] = 'X';
$omezeni['13013_1'] = 'X';
$omezeni['13014_1'] = 'X';
$omezeni['13015_1'] = '25';
$omezeni['13016_1'] = '25';
$omezeni['13022_1'] = 'X';
$omezeni['13023_1'] = 'X';
$omezeni['13030_1'] = 'X';
$omezeni['13041_1'] = 'X';
$omezeni['13042_2'] = 'X';
$omezeni['13042_1'] = '25';
$omezeni['13050_1'] = 'X';
$omezeni['13051_1'] = 'X';
$omezeni['13629_1'] = '25';
$omezeni['13629_2'] = 'X';
$omezeni['21953_1'] = 'X1234';
$omezeni['113001_1'] = '25';

$trasa['1634_1'] = ['Hanušovice;19:53','Šumperk;20:30'];
$trasa['3602_1'] = ['Hanušovice;6:46','Šumperk;7:23'];
$trasa['3603_1'] = ['Bludov;5:37','Hanušovice;6:12'];
$trasa['3611_1'] = ['Šumperk;14:14','Hanušovice;14:52'];
$trasa['3612_1'] = ['Hanušovice;16:54','Šumperk;17:29'];
$trasa['3613_1'] = ['Šumperk;16:14','Hanušovice;16:52'];
$trasa['3614_1'] = ['Hanušovice;18:51','Šumperk;19:47'];
$trasa['3615_1'] = ['Šumperk;18:27','Hanušovice;19:10'];
$trasa['3619_2'] = ['Šumperk;21:00','Hanušovice;21:37'];
$trasa['3619_1'] = ['Šumperk;21:00','Hanušovice;21:37'];
$trasa['3650_1'] = ['Hanušovice;4:59','Šumperk;5:41'];
$trasa['3657_1'] = ['Šumperk;11:14','Hanušovice;11:53'];
$trasa['3658_1'] = ['Hanušovice;12:06','Šumperk;12:43'];
$trasa['3665_1'] = ['Zábřeh na Moravě;22:29','Hanušovice;23:16'];
$trasa['13002_1'] = ['Zábřeh na Moravě;6:32','Šumperk;6:49'];
$trasa['13003_1'] = ['Velké Losiny;5:29','Zábřeh na Moravě;6:07'];
$trasa['13013_1'] = ['Šumperk;13:07','Zábřeh na Moravě;13:24'];
$trasa['13014_1'] = ['Zábřeh na Moravě;14:51','Velké Losiny;15:26'];
$trasa['13015_1'] = ['Šumperk;14:48','Zábřeh na Moravě;15:07'];
$trasa['13016_1'] = ['Zábřeh na Moravě;16:31','Šumperk;16:49'];
$trasa['13022_1'] = ['Zábřeh na Moravě;20:54','Šumperk;21:14'];
$trasa['13023_1'] = ['Šumperk;18:51','Zábřeh na Moravě;19:07'];
$trasa['13030_1'] = ['Šumperk;5:05','Velké Losiny;5:25'];
$trasa['13031_1'] = ['Kouty nad Desnou;4:12','Šumperk;4:47'];
$trasa['13041_1'] = ['Velké Losiny;15:30','Šumperk;15:48'];
$trasa['13042_2'] = ['Šumperk;23:34','Kouty nad Desnou;0:09'];
$trasa['13042_1'] = ['Šumperk;23:34','Kouty nad Desnou;0:09'];
$trasa['13050_1'] = ['Šumperk;7:05','Sobotín;7:24'];
$trasa['13051_1'] = ['Sobotín;7:45','Šumperk;8:02'];
$trasa['13629_1'] = ['Hanušovice;22:12','Šumperk;22:49'];
$trasa['13629_2'] = ['Hanušovice;22:12','Šumperk;22:49'];
$trasa['21953_1'] = ['Šumperk;22:08','Zábřeh na Moravě;22:20'];
$trasa['99998_1'] = ['záloha Špk;0:00;23:59'];
$trasa['113001_1'] = ['Šumperk;5:16','Bludov;5:22'];
//sem patri stazene trasy


$poznamkaObehu['113001_1'] = ['pk', 'postrk'];


$typ['21953_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts821 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


