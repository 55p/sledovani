<?php 
$zacatekPlatnosti = '3.8.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5000_1', '8655_1', '1270_1', '1269_1', '5019_1', '5004_1', '5005_1', '5010_1', '8654_1', '8656_1', '5011_1', '5030_1', '5030_2', '5033_1');
$obeh[2] = array('5041_1', '5002_1', '8657_1', '5018_1', '5029_1', '5026_1', '5026_2', '8663_1', '8660_1');
$obeh[3] = array('5003_1', '5036_1', '8653_1', '6230_1', '6233_1', '8652_1', '5009_1', '5028_1', '8651_1', '5017_1', '6282_1', '7149_1', '5016_1');
$obeh[4] = array('5023_1', '5004_2', '5005_2', '5010_2', '8661_1', '5012_1', '8658_1', '5015_1', '5015_2', '5032_1', '5032_2', '7177_1');
$obeh[5] = array('8650_1', '5003_2', '5012_2', '5013_1', '5000_2', '5017_2', '6282_2', '7149_2', '5016_2', '5015_3', '5032_3', '5000_3', '5003_3', '5036_2', '1266_1', '1271_1', '5013_2');
$obeh[6] = array('7160_1', '7141_1', '7144_1', '7163_1', '6282_3', '7169_1', '7174_1', '7149_3', '7158_1', '7177_2', '7162_1', '5002_2', '5002_3', '8657_2', '5013_3', '5026_3', '8663_2', '8660_2');

$omezeni['1266_1'] = 'T';
$omezeni['1269_1'] = 'X5';
$omezeni['1270_1'] = 'X5';
$omezeni['1271_1'] = 'T';
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
$omezeni['5011_1'] = 'X1234,25';
$omezeni['5012_1'] = 'T';
$omezeni['5012_2'] = 'X';
$omezeni['5013_1'] = 'X';
$omezeni['5013_2'] = 'T';
$omezeni['5013_3'] = '6';
$omezeni['5015_1'] = 'zX';
$omezeni['5015_2'] = 'X5';
$omezeni['5015_3'] = '6';
$omezeni['5016_1'] = '7';
$omezeni['5016_2'] = '6';
$omezeni['5017_1'] = 'T';
$omezeni['5017_2'] = '6';
$omezeni['5018_1'] = '6';
$omezeni['5019_1'] = 'X5';
$omezeni['5023_1'] = 'X';
$omezeni['5026_1'] = 'X';
$omezeni['5026_2'] = '6';
$omezeni['5026_3'] = 'T';
$omezeni['5028_1'] = 'X';
$omezeni['5029_1'] = 'X';
$omezeni['5030_1'] = 'X1234';
$omezeni['5030_2'] = '25';
$omezeni['5032_1'] = 'X1234';
$omezeni['5032_2'] = 'T';
$omezeni['5032_3'] = '6';
$omezeni['5033_1'] = '25';
$omezeni['5036_1'] = '6';
$omezeni['5036_2'] = 'T';
$omezeni['5041_1'] = 'X';
$omezeni['6230_1'] = 'X';
$omezeni['6233_1'] = 'X';
$omezeni['6282_1'] = 'T';
$omezeni['6282_2'] = '6';
$omezeni['6282_3'] = 'X';
$omezeni['7141_1'] = 'X';
$omezeni['7144_1'] = 'X';
$omezeni['7149_1'] = 'T';
$omezeni['7149_2'] = '6';
$omezeni['7149_3'] = 'X';
$omezeni['7158_1'] = 'X';
$omezeni['7160_1'] = 'X';
$omezeni['7162_1'] = '6';
$omezeni['7163_1'] = 'X';
$omezeni['7169_1'] = 'X';
$omezeni['7174_1'] = 'X';
$omezeni['7177_1'] = 'T';
$omezeni['7177_2'] = 'X';
$omezeni['8650_1'] = 'X';
$omezeni['8651_1'] = 'T';
$omezeni['8652_1'] = 'X';
$omezeni['8653_1'] = 'X';
$omezeni['8654_1'] = '25';
$omezeni['8655_1'] = 'X';
$omezeni['8656_1'] = 'X1234';
$omezeni['8657_1'] = 'X';
$omezeni['8657_2'] = '25';
$omezeni['8658_1'] = 'X';
$omezeni['8660_1'] = 'X6';
$omezeni['8660_2'] = 'T';
$omezeni['8661_1'] = 'X';
$omezeni['8663_1'] = 'X6';
$omezeni['8663_2'] = 'T';

$trasa['1266_1'] = array('Pardubice hl.n.;15:02','Jaroměř:15:40');
$trasa['1269_1'] = array('Hradec Králové hl.n.;14:38','Pardubice hl.n.;14:56');
$trasa['1270_1'] = array('Pardubice hl.n.;11:02','Hradec Králové hl.n.;11:21');
$trasa['1271_1'] = array('Jaroměř;16:19','Pardubice hl.n.:16:56');$trasa['5000_1'] = array('Česká Třebová;4:26', 'Kolín;6:19');
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
$trasa['5012_1'] = array('Česká Třebová;14:06', 'Pardubice hl.n.;15:18');
$trasa['5012_2'] = array('Česká Třebová;14:06', 'Kolín;16:16');
$trasa['5013_1'] = array('Kolín;16:37', 'Česká Třebová;19:01');
$trasa['5013_2'] = array('Pardubice hl.n.;17:44', 'Česká Třebová;19:01');
$trasa['5013_3'] = array('Pardubice hl.n.;17:44', 'Česká Třebová;19:01');
$trasa['5015_1'] = array('Kolín;17:37', 'Česká Třebová;19:55');
$trasa['5015_2'] = array('Choceň;19:28', 'Česká Třebová;19:55');
$trasa['5015_3'] = array('Kolín;17:37', 'Pardubice hl.n.;18:31');
$trasa['5016_1'] = array('Jablonné nad Orlicí;16:50', 'Pardubice hl.n.;18:07');
$trasa['5016_2'] = array('Jablonné nad Orlicí;16:50', 'Pardubice hl.n.;18:07');
$trasa['5017_1'] = array('Pardubice hl.n.;7:31', 'Lichkov;9:15');
$trasa['5017_2'] = array('Pardubice hl.n.;7:31', 'Lichkov;9:15');
$trasa['5018_1'] = array('Lichkov;5:42', 'Pardubice hl.n.;7:32');
$trasa['5019_1'] = array('Pardubice hl.n.;15:44', 'Lichkov;17:35');
$trasa['5023_1'] = array('Pardubice hl.n.;4:24', 'Česká Třebová;5:31');
$trasa['5026_1'] = array('Česká Třebová;16:06', 'Kolín;18:16');
$trasa['5026_2'] = array('Česká Třebová;16:06', 'Pardubice hl.n.;17:18');
$trasa['5026_3'] = array('Česká Třebová;16:06', 'Pardubice hl.n.;17:18');
$trasa['5028_1'] = array('Česká Třebová;18:06', 'Pardubice hl.n.;19:18');
$trasa['5029_1'] = array('Pardubice hl.n.;13:44', 'Česká Třebová;14:55');
$trasa['5030_1'] = array('Česká Třebová;19:06', 'Choceň;19:32');
$trasa['5030_2'] = array('Česká Třebová;19:06', 'Pardubice hl.n.;20:16');
$trasa['5032_1'] = array('Česká Třebová;21:47', 'Pardubice hl.n.;22:47');
$trasa['5032_2'] = array('Česká Třebová;21:47', 'Ústí nad Orlicí;21:58');
$trasa['5032_3'] = array('Česká Třebová;21:47', 'Choceň;22:12');
$trasa['5033_1'] = array('Pardubice hl.n.;21:13', 'Choceň;21:46');
$trasa['5036_1'] = array('Česká Třebová;8:06', 'Pardubice hl.n.;9:18');
$trasa['5036_2'] = array('Česká Třebová;8:06', 'Pardubice hl.n.;9:18');
$trasa['5041_1'] = array('Choceň;4:12', 'Česká Třebová;4:39');
$trasa['6230_1'] = array('Pardubice hl.n.;7:16', 'Hradec Králové hl.n.;7:41');
$trasa['6233_1'] = array('Hradec Králové hl.n.;9:05', 'Pardubice hl.n.;9:27');
$trasa['6282_1'] = array('Lichkov;12:17', 'Ústí nad Orlicí;13:09');
$trasa['6282_2'] = array('Lichkov;12:17', 'Ústí nad Orlicí;13:09');
$trasa['6282_3'] = array('Lichkov;12:17', 'Ústí nad Orlicí;13:09');
$trasa['7141_1'] = array('Ústí nad Orlicí;4:42', 'Lichkov;5:59');
$trasa['7144_1'] = array('Lichkov;6:44', 'Ústí nad Orlicí;7:33');
$trasa['7149_1'] = array('Ústí nad Orlicí;15:46', 'Jablonné nad Orlicí;16:17');
$trasa['7149_2'] = array('Ústí nad Orlicí;15:46', 'Jablonné nad Orlicí;16:17');
$trasa['7149_3'] = array('Ústí nad Orlicí;15:46', 'Lichkov;16:36');
$trasa['7158_1'] = array('Lichkov;17:03', 'Ústí nad Orlicí;18:09');
$trasa['7160_1'] = array('Letohrad;4:02', 'Ústí nad Orlicí;4:23');
$trasa['7162_1'] = array('Letohrad;4:44', 'Ústí nad Orlicí;5:06');
$trasa['7163_1'] = array('Ústí nad Orlicí;8:46', 'Lichkov;9:34');
$trasa['7169_1'] = array('Ústí nad Orlicí;13:46', 'Letohrad;14:06');
$trasa['7174_1'] = array('Letohrad;14:46', 'Ústí nad Orlicí;15:09');
$trasa['7177_1'] = array('Ústí nad Orlicí;22:45', 'Letohrad;23:05');
$trasa['7177_2'] = array('Ústí nad Orlicí;22:45', 'Letohrad;23:05');
$trasa['8650_1'] = array('Pardubice hl.n.;4:32', 'Kolín;5:17');
$trasa['8651_1'] = array('Kolín;4:16', 'Pardubice hl.n.;4:58');
$trasa['8652_1'] = array('Pardubice hl.n.;12:31', 'Kolín;13:16');
$trasa['8653_1'] = array('Kolín;6:08', 'Pardubice hl.n.;6:56');
$trasa['8654_1'] = array('Pardubice hl.n.;13:31', 'Kolín;14:16');
$trasa['8655_1'] = array('Kolín;6:37', 'Pardubice hl.n.;7:21');
$trasa['8656_1'] = array('Pardubice hl.n.;14:31', 'Kolín;15:16');
$trasa['8657_1'] = array('Kolín;7:39', 'Pardubice hl.n.;8:21');
$trasa['8657_2'] = array('Kolín;7:39', 'Pardubice hl.n.;8:21');
$trasa['8658_1'] = array('Pardubice hl.n.;16:31', 'Kolín;17:16');
$trasa['8660_1'] = array('Pardubice hl.n.;20:31', 'Kolín;21:16');
$trasa['8660_2'] = array('Pardubice hl.n.;20:31', 'Kolín;21:16');
$trasa['8661_1'] = array('Kolín;14:37', 'Pardubice hl.n.;15:21');
$trasa['8663_1'] = array('Kolín;18:39', 'Pardubice hl.n.;19:21');
$trasa['8663_2'] = array('Kolín;18:39', 'Pardubice hl.n.;19:21');


$poznamkaObehu['8655_1'] = array('pk', 'postrk');
$poznamkaObehu['5005_1'] = array('pk', 'postrk');
$poznamkaObehu['5011_1'] = array('pk', 'postrk');
$poznamkaObehu['5033_1'] = array('pk', 'postrk');
$poznamkaObehu['5041_1'] = array('pk', 'postrk');
$poznamkaObehu['8657_1'] = array('pk', 'postrk');
$poznamkaObehu['5029_1'] = array('pk', 'postrk');
$poznamkaObehu['8663_1'] = array('pk', 'postrk');
$poznamkaObehu['5003_1'] = array('pk', 'postrk');
$poznamkaObehu['8653_1'] = array('pk', 'postrk');
$poznamkaObehu['6233_1'] = array('pk', 'postrk');
$poznamkaObehu['5009_1'] = array('pk', 'postrk');
$poznamkaObehu['8651_1'] = array('pk', 'postrk');
$poznamkaObehu['5017_1'] = array('pk', 'postrk');
$poznamkaObehu['7149_1'] = array('pk', 'postrk');
$poznamkaObehu['5023_1'] = array('pk', 'postrk');
$poznamkaObehu['5005_2'] = array('pk', 'postrk');
$poznamkaObehu['8661_1'] = array('pk', 'postrk');
$poznamkaObehu['5003_2'] = array('pk', 'postrk');
$poznamkaObehu['5013_1'] = array('pk', 'postrk');
$poznamkaObehu['5017_2'] = array('pk', 'postrk');
$poznamkaObehu['7149_2'] = array('pk', 'postrk');
$poznamkaObehu['5015_3'] = array('pk', 'postrk');
$poznamkaObehu['5003_3'] = array('pk', 'postrk');
$poznamkaObehu['5013_2'] = array('pk', 'postrk');
$poznamkaObehu['7141_1'] = array('pk', 'postrk');
$poznamkaObehu['7163_1'] = array('pk', 'postrk');
$poznamkaObehu['7169_1'] = array('pk', 'postrk');
$poznamkaObehu['7149_3'] = array('pk', 'postrk');
$poznamkaObehu['7177_2'] = array('pk', 'postrk');
$poznamkaObehu['8657_2'] = array('pk', 'postrk');
$poznamkaObehu['5013_3'] = array('pk', 'postrk');
$poznamkaObehu['8663_2'] = array('pk', 'postrk');


$poznamkaObehu['1270_1'] = array('vlož', 'vložená');
$poznamkaObehu['1269_1'] = array('vlož', 'vložená');
$poznamkaObehu['1266_1'] = array('vlož', 'vložená');
$poznamkaObehu['1271_1'] = array('vlož', 'vložená');

$typ[-1] = 'Os';

$typ[1269] = $typ[1270] = $typ[1266] = $typ[1271] = 'R';

@$ts104 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>