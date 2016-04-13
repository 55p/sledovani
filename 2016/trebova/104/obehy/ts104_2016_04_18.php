<?php 
$zacatekPlatnosti = '18.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5000_1', '8655_1', '8656_1', '5011_1', '5030_1', '5019_1', '6288_1', '5004_1', '5005_1', '5010_1', '8654_1', '5011_2', '5030_2', '5033_1');
$obeh[2] = array('5041_1', '5002_1', '5000_2', '5002_2', '5002_3', '8657_1', '1272_1', '1265_1', '1270_1', '1267_1', '1268_1', '1269_1', '1266_1', '1271_1', '1264_1', '1273_1', '1262_1', '1275_1', '1260_1', '1277_1');
$obeh[3] = array('1276_1', '1261_1', '1274_1', '1263_1', '6233_1', '5029_1', '5026_1', '5026_2', '8660_1');
$obeh[4] = array('8653_1', '6230_1', '1263_2', '8652_1', '5009_1', '5028_1', '5003_1', '5036_1', '8651_1', '5017_1', '5075_1', '5072_1', '5016_1');
$obeh[5] = array('5023_1', '5004_2', '5005_2', '5010_2', '8661_1', '8658_1', '5015_1', '5015_2', '5032_1', '5017_2', '5075_2', '5070_1', '5016_2', '5015_3', '5032_2');
$obeh[6] = array('8650_1', '5003_2', '5012_1', '5013_1', '5021_1', '5020_1', '6281_1', '5018_1', '5013_2', '5000_3', '5003_3', '5036_2', '5012_2', '5015_4', '5032_3');

$omezeni['1263_1'] = '25';
$omezeni['1263_2'] = 'X';
$omezeni['5000_1'] = 'X';
$omezeni['5000_2'] = '6';
$omezeni['5000_3'] = 'T';
$omezeni['5002_1'] = 'X';
$omezeni['5002_2'] = '6';
$omezeni['5002_3'] = 'T';
$omezeni['5003_1'] = '6';
$omezeni['5003_2'] = 'X';
$omezeni['5003_3'] = 'T';
$omezeni['5004_1'] = '25';
$omezeni['5004_2'] = 'X';
$omezeni['5005_1'] = '25';
$omezeni['5005_2'] = 'X';
$omezeni['5009_1'] = 'X';
$omezeni['5010_1'] = '25';
$omezeni['5010_2'] = 'X';
$omezeni['5011_1'] = 'X1234';
$omezeni['5011_2'] = '25';
$omezeni['5012_1'] = 'X';
$omezeni['5012_2'] = 'T';
$omezeni['5013_1'] = 'X';
$omezeni['5013_2'] = '6';
$omezeni['5015_1'] = 'X1234';
$omezeni['5015_2'] = 'X5';
$omezeni['5015_3'] = '6';
$omezeni['5015_4'] = 'T';
$omezeni['5016_1'] = 'T';
$omezeni['5016_2'] = '6';
$omezeni['5017_1'] = 'T';
$omezeni['5017_2'] = '6';
$omezeni['5018_1'] = '6';
$omezeni['5019_1'] = 'X5';
$omezeni['5020_1'] = '6';
$omezeni['5021_1'] = '6';
$omezeni['5023_1'] = 'X';
$omezeni['5026_1'] = 'X';
$omezeni['5026_2'] = '25';
$omezeni['5028_1'] = 'X';
$omezeni['5029_1'] = 'X';
$omezeni['5030_1'] = 'X1234';
$omezeni['5030_2'] = '25';
$omezeni['5032_1'] = 'X1234';
$omezeni['5032_2'] = '6';
$omezeni['5032_3'] = 'T';
$omezeni['5033_1'] = '25';
$omezeni['5036_1'] = '6';
$omezeni['5036_2'] = 'T';
$omezeni['5041_1'] = 'X';
$omezeni['5070_1'] = '6';
$omezeni['5072_1'] = 'T';
$omezeni['5075_1'] = 'T';
$omezeni['5075_2'] = '6';
$omezeni['6230_1'] = 'X';
$omezeni['6233_1'] = 'X';
$omezeni['6281_1'] = '6';
$omezeni['6288_1'] = 'X5';
$omezeni['8650_1'] = 'X';
$omezeni['8651_1'] = 'T';
$omezeni['8652_1'] = 'X';
$omezeni['8653_1'] = 'X';
$omezeni['8654_1'] = '25';
$omezeni['8655_1'] = 'X';
$omezeni['8656_1'] = 'X1234';
$omezeni['8658_1'] = 'X';
$omezeni['8661_1'] = 'X';

$trasa['5015_2'] = array('Kolín;17:37','Choceň;19:19');

$trasa['1261'] = array('Hradec Králové hl.n.;6:38', 'Pardubice hl.n.;6:56');
$trasa['1263'] = array('Hradec Králové hl.n.;8:38', 'Pardubice hl.n.;8:56');
$trasa['1265'] = array('Hradec Králové hl.n.;10:38', 'Pardubice hl.n.;10:65');
$trasa['1267'] = array('Hradec Králové hl.n.;12:38', 'Pardubice hl.n.;12:56');
$trasa['1269'] = array('Hradec Králové hl.n.;14:38', 'Pardubice hl.n.;14:56');
$trasa['1271'] = array('Hradec Králové hl.n.;16:38', 'Pardubice hl.n.;16:56');
$trasa['1273'] = array('Hradec Králové hl.n.;18:38', 'Pardubice hl.n.;18:56');
$trasa['1275'] = array('Hradec Králové hl.n.;20:38', 'Pardubice hl.n.;20:56');
$trasa['1277'] = array('Hradec Králové hl.n.;22:42', 'Pardubice hl.n.;23:05');

$trasa['1260'] = array('Pardubice hl.n.;21:02', 'Hradec Králové hl.n.;21:12');
$trasa['1262'] = array('Pardubice hl.n.;19:02', 'Hradec Králové hl.n.;19:21');
$trasa['1264'] = array('Pardubice hl.n.;17:02', 'Hradec Králové hl.n.;17:21');
$trasa['1266'] = array('Pardubice hl.n.;15:02', 'Hradec Králové hl.n.;15:21');
$trasa['1268'] = array('Pardubice hl.n.;13:02', 'Hradec Králové hl.n.;13:21');
$trasa['1270'] = array('Pardubice hl.n.;11:02', 'Hradec Králové hl.n.;11:21');
$trasa['1272'] = array('Pardubice hl.n.;9:02', 'Hradec Králové hl.n.;9:21');
$trasa['1274'] = array('Pardubice hl.n.;7:02', 'Hradec Králové hl.n.;7:21');
$trasa['1276'] = array('Pardubice hl.n.;5:02', 'Hradec Králové hl.n.;5:21');

$trasa['5000_1'] = array('Česká Třebová;4:26', 'Kolín;6:19');
$trasa['5000_2'] = array('Choceň;4:52', 'Pardubice hl.n.;5:28');
$trasa['5000_3'] = array('Choceň;4:52', 'Přelouč;5:50');
$trasa['5002_1'] = array('Česká Třebová;5:03', 'Kolín;7:17');
$trasa['5002_2'] = array('Ústí nad Orlicí;5:15', 'Kolín;7:17');
$trasa['5002_3'] = array('Choceň;5:30', 'Kolín;7:17');
$trasa['5003_1'] = array('Kolín;5:39', 'Česká Třebová;7:55');
$trasa['5003_2'] = array('Kolín;5:39', 'Česká Třebová;7:55');
$trasa['5003_3'] = array('Přelouč;6:08', 'Česká Třebová;7:55');
$trasa['5004_1'] = array('Česká Třebová;5:58', 'Kolín;8:17');
$trasa['5004_2'] = array('Česká Třebová;5:58', 'Kolín;8:17');
$trasa['5005_1'] = array('Kolín;9:37', 'Česká Třebová;11:55');
$trasa['5005_2'] = array('Kolín;9:37', 'Česká Třebová;11:55');
$trasa['5009_1'] = array('Kolín;13:46', 'Česká Třebová;15:55');
$trasa['5010_1'] = array('Česká Třebová;12:06', 'Pardubice hl.n.;13:18');
$trasa['5010_2'] = array('Česká Třebová;12:06', 'Kolín;14:16');
$trasa['5011_1'] = array('Kolín;15:39', 'Česká Třebová;17:55');
$trasa['5011_2'] = array('Kolín;15:39', 'Česká Třebová;17:55');
$trasa['5012_1'] = array('Česká Třebová;14:06', 'Kolín;16:16');
$trasa['5012_2'] = array('Česká Třebová;14:06', 'Pardubice hl.n.;15:18');
$trasa['5013_1'] = array('Kolín;16:37', 'Česká Třebová;19:01');
$trasa['5013_2'] = array('Pardubice hl.n.;17:44', 'Česká Třebová;19:01');
$trasa['5015_1'] = array('Kolín;17:37', 'Česká Třebová;19:55');
$trasa['5015_3'] = array('Kolín;17:37', 'Pardubice hl.n.;18:31');
$trasa['5015_4'] = array('Kolín;17:37', 'Česká Třebová;19:55');

$trasa['5016'] = array('Ústí nad Orlicí;17:30', 'Pardubice hl.n.;18:07');
$trasa['5017'] = array('Pardubice hl.n.;7:31', 'Ústí nad Orlicí;8:23');
$trasa['5018_1'] = array('Ústí nad Orlicí;6:37', 'Pardubice hl.n.;7:32');
$trasa['5019_1'] = array('Pardubice hl.n.;15:44', 'Ústí nad Orlicí;16:42');

$trasa['5020_1'] = array('Česká Třebová;3:51', 'Pardubice hl.n.;4:51');
$trasa['5021_1'] = array('Pardubice hl.n.;0:26', 'Česká Třebová;1:26');
$trasa['5023_1'] = array('Pardubice hl.n.;4:24', 'Česká Třebová;5:31');
$trasa['5026_1'] = array('Česká Třebová;16:06', 'Kolín;18:16');
$trasa['5026_2'] = array('Česká Třebová;16:06', 'Pardubice hl.n.;17:18');
$trasa['5028_1'] = array('Česká Třebová;18:06', 'Pardubice hl.n.;19:18');
$trasa['5029_1'] = array('Pardubice hl.n.;13:44', 'Česká Třebová;14:55');
$trasa['5030_1'] = array('Česká Třebová;19:06', 'Choceň;19:32');
$trasa['5030_2'] = array('Česká Třebová;19:06', 'Pardubice hl.n.;20:16');
$trasa['5032_1'] = array('Česká Třebová;21:47', 'Pardubice hl.n.;22:47');
$trasa['5032_2'] = array('Česká Třebová;21:47', 'Choceň;22:12');
$trasa['5032_3'] = array('Česká Třebová;21:47', 'Ústí nad Orlicí;21:58');
$trasa['5033_1'] = array('Pardubice hl.n.;21:13', 'Choceň;21:46');
$trasa['5036_1'] = array('Česká Třebová;8:06', 'Pardubice hl.n.;9:18');
$trasa['5036_2'] = array('Česká Třebová;8:06', 'Pardubice hl.n.;9:18');
$trasa['5041_1'] = array('Choceň;4:12', 'Česká Třebová;4:39');
$trasa['5070_1'] = array('Česká Třebová;11:25', 'Ústí nad Orlicí;11:38');
$trasa['5072_1'] = array('Česká Třebová;15:24', 'Ústí nad Orlicí;15:37');
$trasa['5075_1'] = array('Ústí nad Orlicí;10:18', 'Česká Třebová;10:32');
$trasa['5075_2'] = array('Ústí nad Orlicí;10:18', 'Česká Třebová;10:32');
$trasa['6230_1'] = array('Pardubice hl.n.;7:16', 'Hradec Králové hl.n.;7:41');
$trasa['6233_1'] = array('Hradec Králové hl.n.;9:04', 'Pardubice hl.n.;9:27');

$trasa['6281_1'] = array('Pardubice hl.n.;5:42', 'Ústí nad Orlicí;6:34');
$trasa['6288_1'] = array('Ústí nad Orlicí;20:17', 'Pardubice hl.n.;21:18');

$trasa['8650_1'] = array('Pardubice hl.n.;4:32', 'Kolín;5:17');
$trasa['8651_1'] = array('Kolín;4:16', 'Pardubice hl.n.;4:58');
$trasa['8652_1'] = array('Pardubice hl.n.;12:31', 'Kolín;13:16');
$trasa['8653_1'] = array('Kolín;6:08', 'Pardubice hl.n.;6:56');
$trasa['8654_1'] = array('Pardubice hl.n.;13:31', 'Kolín;14:16');
$trasa['8655_1'] = array('Kolín;6:37', 'Pardubice hl.n.;7:21');
$trasa['8656_1'] = array('Pardubice hl.n.;14:31', 'Kolín;15:16');
$trasa['8657_1'] = array('Kolín;7:39', 'Pardubice hl.n.;8:21');
$trasa['8658_1'] = array('Pardubice hl.n.;16:31', 'Kolín;17:16');
$trasa['8660_1'] = array('Pardubice hl.n.;20:31', 'Kolín;21:16');
$trasa['8661_1'] = array('Kolín;14:37', 'Pardubice hl.n.;15:21');


$poznamkaObehu['8655_1'] = array('pk', 'postrk');
$poznamkaObehu['5011_1'] = array('pk', 'postrk');
$poznamkaObehu['5019_1'] = array('pk', 'postrk');
$poznamkaObehu['5005_1'] = array('pk', 'postrk');
$poznamkaObehu['5011_2'] = array('pk', 'postrk');
$poznamkaObehu['5033_1'] = array('pk', 'postrk');
$poznamkaObehu['5041_1'] = array('pk', 'postrk');
$poznamkaObehu['1265_1'] = array('pk', 'postrk');
$poznamkaObehu['1267_1'] = array('pk', 'postrk');
$poznamkaObehu['1269_1'] = array('pk', 'postrk');
$poznamkaObehu['1271_1'] = array('pk', 'postrk');
$poznamkaObehu['1273_1'] = array('pk', 'postrk');
$poznamkaObehu['1275_1'] = array('pk', 'postrk');
$poznamkaObehu['1277_1'] = array('pk', 'postrk');
$poznamkaObehu['1261_1'] = array('pk', 'postrk');
$poznamkaObehu['1263_1'] = array('pk', 'postrk');
$poznamkaObehu['6233_1'] = array('pk', 'postrk');
$poznamkaObehu['5029_1'] = array('pk', 'postrk');
$poznamkaObehu['8653_1'] = array('pk', 'postrk');
$poznamkaObehu['1263_2'] = array('pk', 'postrk');
$poznamkaObehu['5009_1'] = array('pk', 'postrk');
$poznamkaObehu['5003_1'] = array('pk', 'postrk');
$poznamkaObehu['8651_1'] = array('pk', 'postrk');
$poznamkaObehu['5017_1'] = array('pk', 'postrk');
$poznamkaObehu['5075_1'] = array('pk', 'postrk');
$poznamkaObehu['5023_1'] = array('pk', 'postrk');
$poznamkaObehu['5005_2'] = array('pk', 'postrk');
$poznamkaObehu['5015_1'] = array('pk', 'postrk');
$poznamkaObehu['5015_2'] = array('pk', 'postrk');
$poznamkaObehu['5017_2'] = array('pk', 'postrk');
$poznamkaObehu['5075_2'] = array('pk', 'postrk');
$poznamkaObehu['5015_3'] = array('pk', 'postrk');
$poznamkaObehu['5003_2'] = array('pk', 'postrk');
$poznamkaObehu['5013_1'] = array('pk', 'postrk');
$poznamkaObehu['5021_1'] = array('pk', 'postrk');
$poznamkaObehu['6281_1'] = array('pk', 'postrk');
$poznamkaObehu['5013_2'] = array('pk', 'postrk');
$poznamkaObehu['5003_3'] = array('pk', 'postrk');
$poznamkaObehu['5015_4'] = array('pk', 'postrk');




@$ts104 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>