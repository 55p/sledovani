<?php 
$zacatekPlatnosti = '11.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['13031_1', '3601_1', '13030_1', '13003_1', '13002_1', '3602_1', '13050_1', '13051_1', '3604_1', '13011_1', '13012_1', '13013_1', '13014_1', '13041_1', '3613_1', '3616_1', '1634_1', '3619_1'];
$obeh[2] = ['3600_1', '113001_1', '3603_1', '3602_2', '3604_2', '13015_1', '3661_1', '3662_1', '13016_1', '3615_1', '3615_2', '3616_2', '13634_1', '3619_2'];
$obeh[3] = ['13601_1', '13600_1', '13604_1', '13605_1', '13607_1', '13608_1', '13609_1', '13610_1', '13613_1', '13614_1', '13615_1', '13616_1', '13617_1', '13620_1', '3612_1', '13621_1', '13623_1', '13626_1', '13627_1', '13023_1', '13022_1', '13634_2', '13042_1'];

$omezeni['1634_1'] = '25';
$omezeni['3612_1'] = 'X';
$omezeni['3600_1'] = 'X';
$omezeni['3601_1'] = '6';
$omezeni['3602_2'] = '6';
$omezeni['3602_1'] = '7';
$omezeni['3603_1'] = 'X';
$omezeni['3604_1'] = '6';
$omezeni['3604_2'] = 'X7';
$omezeni['3615_2'] = '25';
$omezeni['3615_1'] = 'X';
$omezeni['3616_1'] = 'X';
$omezeni['3616_2'] = '7';
$omezeni['3619_1'] = 'X6';
$omezeni['3619_2'] = '7';
$omezeni['3661_1'] = 'X';
$omezeni['3662_1'] = 'X';
$omezeni['13002_1'] = 'X';
$omezeni['13003_1'] = 'X';
$omezeni['13011_1'] = 'X';
$omezeni['13012_1'] = 'X';
$omezeni['13013_1'] = 'X';
$omezeni['13014_1'] = 'X';
$omezeni['13015_1'] = '25';
$omezeni['13016_1'] = '25';
$omezeni['13022_1'] = 'X';
$omezeni['13023_1'] = 'X';
$omezeni['13030_1'] = 'X';
$omezeni['13031_1'] = 'vX';
$omezeni['13041_1'] = 'X';
$omezeni['13042_1'] = 'X';
$omezeni['13050_1'] = 'X';
$omezeni['13051_1'] = 'X';
$omezeni['13600_1'] = '25';
$omezeni['13604_1'] = 'X';
$omezeni['13605_1'] = '25';
$omezeni['13607_1'] = 'X';
$omezeni['13608_1'] = '25';
$omezeni['13609_1'] = '25';
$omezeni['13610_1'] = '25';
$omezeni['13613_1'] = '25';
$omezeni['13614_1'] = '25';
$omezeni['13615_1'] = '25';
$omezeni['13616_1'] = '25';
$omezeni['13617_1'] = '25';
$omezeni['13620_1'] = '25';
$omezeni['13621_1'] = '6';
$omezeni['13623_1'] = '7';
$omezeni['13626_1'] = '25';
$omezeni['13627_1'] = '25';
$omezeni['13634_2'] = '25';
$omezeni['13634_1'] = 'X';
$omezeni['113001_1'] = 'X';

$trasa['3615_2'] = ['Šumperk;18:27','Hanušovice;19:10'];
$trasa['3615_1'] = ['Šumperk;18:27','Jeseník;20:03'];
$trasa['113001_1'] = ['Šumperk;05:16','Bludov;05:22'];
$trasa['13002_1'] = ['Zábřeh na Moravě;6:32', 'Šumperk;6:49'];
$trasa['13003_1'] = ['Velké Losiny;5:29', 'Zábřeh na Moravě;6:07'];
$trasa['13011_1'] = ['Šumperk;11:07', 'Zábřeh na Moravě;11:24'];
$trasa['13012_1'] = ['Zábřeh na Moravě;12:32', 'Šumperk;12:49'];
$trasa['13013_1'] = ['Šumperk;13:07', 'Zábřeh na Moravě;13:24'];
$trasa['13014_1'] = ['Zábřeh na Moravě;14:51', 'Velké Losiny;15:26'];
$trasa['13015_1'] = ['Šumperk;14:48', 'Zábřeh na Moravě;15:07'];
$trasa['13016_1'] = ['Zábřeh na Moravě;16:31', 'Šumperk;16:49'];
$trasa['13022_1'] = ['Zábřeh na Moravě;20:54', 'Šumperk;21:14'];
$trasa['13023_1'] = ['Šumperk;18:51', 'Zábřeh na Moravě;19:07'];
$trasa['13030_1'] = ['Šumperk;5:05', 'Velké Losiny;5:25'];
$trasa['13031_1'] = ['Kouty nad Desnou;4:12', 'Šumperk;4:47'];
$trasa['13041_1'] = ['Velké Losiny;15:30', 'Šumperk;15:48'];
$trasa['13042_1'] = ['Šumperk;23:34', 'Kouty nad Desnou;0:09'];
$trasa['13050_1'] = ['Šumperk;7:05', 'Sobotín;7:24'];
$trasa['13051_1'] = ['Sobotín;7:45', 'Šumperk;8:02'];
$trasa['13600_1'] = ['Lipová Lázně;5:23', 'Javorník ve Slezsku;6:11'];
$trasa['13601_1'] = ['Javorník ve Slezsku;4:10', 'Lipová Lázně;4:58'];
$trasa['13604_1'] = ['Lipová Lázně;5:43', 'Javorník ve Slezsku;6:31'];
$trasa['13605_1'] = ['Javorník ve Slezsku;6:15', 'Lipová Lázně;7:03'];
$trasa['13607_1'] = ['Javorník ve Slezsku;6:33', 'Jeseník;7:34'];
$trasa['13608_1'] = ['Lipová Lázně;7:09', 'Javorník ve Slezsku;7:57'];
$trasa['13609_1'] = ['Javorník ve Slezsku;8:01', 'Lipová Lázně;8:49'];
$trasa['13610_1'] = ['Lipová Lázně;9:09', 'Javorník ve Slezsku;9:57'];
$trasa['13613_1'] = ['Javorník ve Slezsku;10:01', 'Lipová Lázně;10:49'];
$trasa['13614_1'] = ['Lipová Lázně;11:09', 'Javorník ve Slezsku;11:57'];
$trasa['13615_1'] = ['Javorník ve Slezsku;12:01', 'Lipová Lázně;12:49'];
$trasa['13616_1'] = ['Lipová Lázně;13:09', 'Javorník ve Slezsku;13:57'];
$trasa['13617_1'] = ['Javorník ve Slezsku;14:01', 'Lipová Lázně;14:48'];
$trasa['13620_1'] = ['Lipová Lázně;15:09', 'Javorník ve Slezsku;15:57'];
$trasa['13621_1'] = ['Javorník ve Slezsku;16:01', 'Lipová Lázně;16:49'];
$trasa['13623_1'] = ['Javorník ve Slezsku;16:01', 'Lipová Lázně;17:01'];
$trasa['13626_1'] = ['Lipová Lázně;17:09', 'Javorník ve Slezsku;17:57'];
$trasa['13627_1'] = ['Javorník ve Slezsku;18:01', 'Lipová Lázně;18:49'];
$trasa['13634_1'] = ['Lipová Lázně;20:59', 'Javorník ve Slezsku;21:48'];
$trasa['13634_2'] = ['Lipová Lázně;20:59', 'Javorník ve Slezsku;21:48'];
$trasa['1634_1'] = ['Jeseník;18:45', 'Šumperk;20:30'];
$trasa['3612_1'] = ['Jeseník;15:47', 'Šumperk;17:29'];
$trasa['3600_1'] = ['Jeseník;3:27', 'Šumperk;5:07'];
$trasa['3601_1'] = ['Šumperk;4:53', 'Jeseník;6:34'];
$trasa['3602_1'] = ['Hanušovice;6:46', 'Šumperk;7:23'];
$trasa['3602_2'] = ['Jeseník;5:30', 'Šumperk;7:23'];
$trasa['3603_1'] = ['Bludov;5:37', 'Jeseník;7:17'];
$trasa['3604_1'] = ['Jeseník;7:46', 'Šumperk;9:30'];
$trasa['3604_2'] = ['Jeseník;7:46', 'Šumperk;9:30'];
$trasa['3613_1'] = ['Šumperk;16:14', 'Jeseník;18:04'];
$trasa['3616_1'] = ['Jeseník;18:41', 'Šumperk;20:44'];
$trasa['3616_2'] = ['Hanušovice;20:05', 'Šumperk;20:44'];
$trasa['3619_1'] = ['Šumperk;21:00', 'Jeseník;22:33'];
$trasa['3619_2'] = ['Šumperk;21:00', 'Jeseník;22:33'];
$trasa['3661_1'] = ['Šumperk;15:14', 'Hanušovice;15:54'];
$trasa['3662_1'] = ['Hanušovice;16:18', 'Šumperk;17:04'];
//sem patri stazene trasy


$poznamkaObehu['113001_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts821 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


