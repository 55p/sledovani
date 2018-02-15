<?php 
$zacatekPlatnosti = '10.2.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['8943_1', '8906_1', '8901_1', '8910_1'];
$obeh[2] = ['655_1', '660_1', '8919_1'];
$obeh[3] = ['8900_1', '661_1', '654_1', '669_1', '98999_1'];
$obeh[4] = ['98998_1', '100669_1', '100652_1'];
$obeh[5] = ['100651_1', '14870_1', '14865_1', '8362_1', '14867_1'];
$obeh[6] = ['100656_1', '100661_1', '100654_1', '100654_2', '100663_1', '100664_1', '100655_1', '100655_2'];
$obeh[7] = ['100654_3', '100654_4', '661_2', '666_1', '664_1', '659_1'];
$obeh[8] = ['100653_1', '100668_1', '100667_1', '100660_1'];
$obeh[9] = ['658_1', '665_1', '666_2', '657_1', '8216_1', '8218_1'];
$obeh[10] = ['8203_1', '100661_2', '100666_1', '8012_1', '8015_1', '100665_1', '100662_1', '1253_1'];
$obeh[11] = ['1254_1', '100665_2', '100662_2', '8016_1', 8018];
$obeh[12] = ['8051_1', '8001_1', 8003, '656_1', '667_1', '1836_1', '8213_1', '662_1'];

$omezeni[8018] = 25;
$omezeni[8003] = 25;

$omezeni['100651_1'] = 'X1';
$omezeni['100652_1'] = 'X5,T';
$omezeni['100654_1'] = '6';
$omezeni['100654_2'] = 'T';
$omezeni['100654_3'] = 'X1';
$omezeni['100654_4'] = 'X2345';
$omezeni['100655_1'] = 'X1234';
$omezeni['100655_2'] = 'X5,T';
$omezeni['100656_1'] = 'X';
$omezeni['100661_1'] = 'X1234';
$omezeni['100661_2'] = 'X5';
$omezeni['100662_1'] = '25';
$omezeni['100662_2'] = 'X';
$omezeni['100663_1'] = 'X5,25';
$omezeni['100665_1'] = '25';
$omezeni['100665_2'] = 'X';
$omezeni['100666_1'] = 'X5';
$omezeni['1253_1'] = 'zX';
$omezeni['1254_1'] = 'X';
$omezeni['14865_1'] = 'X';
$omezeni['14867_1'] = 'X';
$omezeni['14870_1'] = 'X';
$omezeni['1836_1'] = 'X';
$omezeni['661_2'] = '25';
$omezeni['666_1'] = '25';
$omezeni['8001_1'] = 'X2345';
$omezeni['8012_1'] = 'X';
$omezeni['8015_1'] = 'X';
$omezeni['8016_1'] = 'X';
$omezeni['8051_1'] = 'X1';
$omezeni['8213_1'] = 'X';
$omezeni['8216_1'] = 'X';
$omezeni['8218_1'] = '25';
$omezeni['8362_1'] = 'X';
$omezeni['8901_1'] = '25';
$omezeni['8906_1'] = 'X';
$omezeni['8910_1'] = '25';
$omezeni['8943_1'] = 'X';

$trasa['8003'] = ['Strakonice;5:44', 'České Budějovice;6:52'];
$trasa['8018'] = ['České Budějovice;21:10', 'Strakonice;22:06'];

$trasa['100651_1'] = ['České Budějovice;4:15','Jihlava;6:33'];
$trasa['100652_1'] = ['Jihlava;19:30','České Budějovice;21:49'];
$trasa['100653_1'] = ['České Budějovice;6:07','Jihlava;8:33'];
$trasa['100654_1'] = ['Havlíčkův Brod;7:00','České Budějovice;9:47'];
$trasa['100654_2'] = ['Jihlava;7:25','České Budějovice;9:47'];
$trasa['100654_3'] = ['Havlíčkův Brod;7:00','České Budějovice;9:47'];
$trasa['100654_4'] = ['Jihlava;7:25','České Budějovice;9:47'];
$trasa['100655_1'] = ['České Budějovice;18:07','Jihlava;20:27'];
$trasa['100655_2'] = ['České Budějovice;18:07','Havlíčkův Brod;20:56'];
$trasa['100656_1'] = ['Jihlava;5:25','České Budějovice;7:47'];
$trasa['100660_1'] = ['Jihlava;17:25','České Budějovice;19:47'];
$trasa['100661_1'] = ['České Budějovice;8:07','Jihlava;10:33'];
$trasa['100661_2'] = ['České Budějovice;8:07','Jihlava;10:33'];
$trasa['100662_1'] = ['Jihlava;15:25','České Budějovice;17:47'];
$trasa['100662_2'] = ['Jihlava;15:25','České Budějovice;17:47'];
$trasa['100663_1'] = ['České Budějovice;10:07','Jihlava;12:33'];
$trasa['100664_1'] = ['Jihlava;13:25','České Budějovice;15:47'];
$trasa['100665_1'] = ['České Budějovice;12:07','Jihlava;14:33'];
$trasa['100665_2'] = ['České Budějovice;12:07','Jihlava;14:33'];
$trasa['100666_1'] = ['Jihlava;11:25','České Budějovice;13:47'];
$trasa['100667_1'] = ['České Budějovice;14:07','Jihlava;16:33'];
$trasa['100668_1'] = ['Jihlava;9:25','České Budějovice;11:47'];
$trasa['100669_1'] = ['České Budějovice;16:07','Jihlava;18:33'];
$trasa['654_1'] = ['České Budějovice;10:04','Plzeň hl.n.;11:57'];
$trasa['655_1'] = ['Plzeň hl.n.;16:02','České Budějovice;17:55'];
$trasa['656_1'] = ['České Budějovice;8:04','Plzeň hl.n.;9:57'];
$trasa['657_1'] = ['Plzeň hl.n.;18:02','České Budějovice;19:55'];
$trasa['658_1'] = ['České Budějovice;6:04','Plzeň hl.n.;7:57'];
$trasa['659_1'] = ['Plzeň hl.n.;20:02','České Budějovice;21:55'];
$trasa['660_1'] = ['České Budějovice;20:04','Plzeň hl.n.;21:57'];
$trasa['661_1'] = ['Plzeň hl.n.;6:02','České Budějovice;7:55'];
$trasa['661_2'] = ['České Budějovice;8:07','Jihlava;10:33'];
$trasa['662_1'] = ['České Budějovice;18:04','Plzeň hl.n.;19:57'];
$trasa['664_1'] = ['České Budějovice;16:04','Plzeň hl.n.;17:57'];
$trasa['665_1'] = ['Plzeň hl.n.;10:02','České Budějovice;11:55'];
$trasa['666_1'] = ['Jihlava;11:25','České Budějovice;13:47'];
$trasa['666_2'] = ['České Budějovice;14:04','Plzeň hl.n.;15:57'];
$trasa['667_1'] = ['Plzeň hl.n.;12:02','České Budějovice;13:55'];
$trasa['669_1'] = ['Plzeň hl.n.;14:02','České Budějovice;15:55'];
$trasa['98998_1'] = ['záloha za ř. 650;0:00;15:30'];
$trasa['98999_1'] = ['záloha za ř. 650;16:15;24:00'];

$trasa['1253_1'] = ['České Budějovice;19:12', 'Písek;19:56'];
$trasa['1254_1'] = ['Písek;5:59', 'České Budějovice;6:42'];
$trasa['14865_1'] = ['Havlíčkův Brod;14:05', 'Jihlava město;14:45'];
$trasa['14867_1'] = ['Havlíčkův Brod;17:12', 'Jihlava;17:42'];
$trasa['14870_1'] = ['Jihlava;12:37', 'Havlíčkův Brod;13:05'];
$trasa['1836_1'] = ['České Budějovice;14:32', 'Tábor;15:40'];
$trasa['8001_1'] = ['Strakonice;5:12', 'České Budějovice;6:14'];
$trasa['8012_1'] = ['České Budějovice;14:18', 'Strakonice;15:20'];
$trasa['8015_1'] = ['Strakonice;16:51', 'České Budějovice;17:51'];
$trasa['8016_1'] = ['České Budějovice;18:18', 'Strakonice;19:20'];
$trasa['8051_1'] = ['Strakonice;5:12', 'České Budějovice;6:21'];
$trasa['8203_1'] = ['Tábor;5:15', 'České Budějovice;6:34'];
$trasa['8213_1'] = ['Tábor;16:09', 'České Budějovice;17:22'];
$trasa['8216_1'] = ['České Budějovice;22:44', 'Tábor;24:00'];
$trasa['8218_1'] = ['České Budějovice;22:57', 'Tábor;0:22'];
$trasa['8362_1'] = ['Jihlava město;15:11', 'Havlíčkův Brod;15:50'];
$trasa['8900_1'] = ['Horažďovice předměstí;3:47', 'Plzeň hl.n.;4:54'];
$trasa['8901_1'] = ['Plzeň hl.n.;7:08', 'Horažďovice předměstí;8:16'];
$trasa['8906_1'] = ['Nepomuk;7:08', 'Plzeň hl.n.;7:53'];
$trasa['8910_1'] = ['Horažďovice předměstí;10:43', 'Plzeň hl.n.;11:53'];
$trasa['8919_1'] = ['Plzeň hl.n.;22:57', 'Horažďovice předměstí;23:59'];
$trasa['8943_1'] = ['Plzeň hl.n.;5:08', 'Nepomuk;5:54'];

for ($i = 650; $i < 670; $i++) {
  $poznamkaObehu[$i] = array(' Pl','');
  $poznamkaObehu[100000 + $i] = array(' Ji','');
}

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts201 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


