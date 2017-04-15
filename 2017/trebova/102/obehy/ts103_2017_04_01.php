<?php 
$zacatekPlatnosti = '1.4.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['5003_1', '5010_1', '5011_1', '5028_1', '5031_1', '5046_1'];
$obeh[2] = ['5041_1', '5002_1', '8657_1', '8650_1', '8653_1', '6230_1', '6235_1', '8652_1', '5009_1', '5014_1', '5021_1', '5012_1', '5015_1', '5074_1', '7173_1'];
$obeh[3] = ['7160_1', '7141_1', '7144_1', '7163_1', '6282_1', '7169_1', '7174_1', '7149_1', '7158_1', '7177_1', '5002_2', '5002_3', '5017_1', '6282_2', '7149_2', '5016_1', '5015_2', '5042_1'];

$omezeni['5002_1'] = 'X2345';
$omezeni['5002_2'] = 'T';
$omezeni['5002_3'] = '6';
$omezeni['5003_1'] = 'X';
$omezeni['5009_1'] = 'X';
$omezeni['5010_1'] = 'X';
$omezeni['5011_1'] = 'X';
$omezeni['5012_1'] = 'T';
$omezeni['5014_1'] = 'X';
$omezeni['5015_1'] = 'T';
$omezeni['5015_2'] = '6';
$omezeni['5016_1'] = '25';
$omezeni['5017_1'] = '25';
$omezeni['5021_1'] = 'T';
$omezeni['5028_1'] = 'X';
$omezeni['5031_1'] = 'X1234';
$omezeni['5041_1'] = 'X2345';
$omezeni['5042_1'] = '6';
$omezeni['5046_1'] = 'X1234';
$omezeni['5074_1'] = 'T';
$omezeni['6230_1'] = 'X1';
$omezeni['6235_1'] = 'X1';
$omezeni['6282_1'] = 'X';
$omezeni['6282_2'] = '25';
$omezeni['7141_1'] = 'X';
$omezeni['7144_1'] = 'X';
$omezeni['7149_1'] = 'X';
$omezeni['7149_2'] = '25';
$omezeni['7158_1'] = 'X';
$omezeni['7160_1'] = 'X';
$omezeni['7163_1'] = 'X';
$omezeni['7169_1'] = 'X';
$omezeni['7173_1'] = 'T';
$omezeni['7174_1'] = 'X';
$omezeni['7177_1'] = 'X';
$omezeni['8650_1'] = 'X1';
$omezeni['8652_1'] = 'X';
$omezeni['8653_1'] = 'X1';
$omezeni['8657_1'] = 'X2345';


$poznamkaObehu['5003_1'] = ['pk', 'postrk'];
$poznamkaObehu['5011_1'] = ['pk', 'postrk'];
$poznamkaObehu['5031_1'] = ['pk', 'postrk'];
$poznamkaObehu['5041_1'] = ['pk', 'postrk'];
$poznamkaObehu['8657_1'] = ['pk', 'postrk'];
$poznamkaObehu['8653_1'] = ['pk', 'postrk'];
$poznamkaObehu['6235_1'] = ['pk', 'postrk'];
$poznamkaObehu['5009_1'] = ['pk', 'postrk'];
$poznamkaObehu['5021_1'] = ['pk', 'postrk'];
$poznamkaObehu['5015_1'] = ['pk', 'postrk'];
$poznamkaObehu['7141_1'] = ['pk', 'postrk'];
$poznamkaObehu['7163_1'] = ['pk', 'postrk'];
$poznamkaObehu['7169_1'] = ['pk', 'postrk'];
$poznamkaObehu['7149_1'] = ['pk', 'postrk'];
$poznamkaObehu['7177_1'] = ['pk', 'postrk'];
$poznamkaObehu['5017_1'] = ['pk', 'postrk'];
$poznamkaObehu['7149_2'] = ['pk', 'postrk'];
$poznamkaObehu['5015_2'] = ['pk', 'postrk'];

$trasa['5002_1'] = ['Česká Třebová;5:06', 'Kolín;7:17'];
$trasa['5002_2'] = ['Choceň;5:38', 'Pardubice hl.n.;6:16'];
$trasa['5002_3'] = ['Pardubice hl.n.;6:31', 'Kolín;7:17'];
$trasa['5003_1'] = ['Kolín;5:41', 'Česká Třebová;7:59'];
$trasa['5009_1'] = ['Kolín;13:41', 'Česká Třebová;15:59'];
$trasa['5010_1'] = ['Česká Třebová;12:06', 'Kolín;14:17'];
$trasa['5011_1'] = ['Kolín;14:37', 'Česká Třebová;17:05'];
$trasa['5012_1'] = ['Česká Třebová;14:06', 'Pardubice hl.n.;15:14'];
$trasa['5014_1'] = ['Česká Třebová;16:59', 'Kolín;19:19'];
$trasa['5015_1'] = ['Kolín;17:37', 'Česká Třebová;19:59'];
$trasa['5015_2'] = ['Kolín;17:37', 'Pardubice hl.n.;18:27'];
$trasa['5016_1'] = ['Jablonné nad Orlicí;16:54', 'Pardubice hl.n.;18:07'];
$trasa['5017_1'] = ['Pardubice hl.n.;7:31', 'Lichkov;9:16'];
$trasa['5021_1'] = ['Pardubice hl.n.;0:26', 'Česká Třebová;1:27'];
$trasa['5028_1'] = ['Česká Třebová;17:59', 'Pardubice hl.n.;19:14'];
$trasa['5031_1'] = ['Pardubice hl.n.;20:50', 'Česká Třebová;21:59'];
$trasa['5041_1'] = ['Choceň;4:13', 'Česká Třebová;4:39'];
$trasa['5042_1'] = ['Česká Třebová;21:47', 'Choceň;22:16'];
$trasa['5046_1'] = ['Česká Třebová;22:29', 'Choceň;22:54'];
$trasa['5074_1'] = ['Česká Třebová;20:17', 'Ústí nad Orlicí;20:29'];
$trasa['6230_1'] = ['Pardubice hl.n.;7:19', 'Hradec Králové hl.n.;7:42'];
$trasa['6235_1'] = ['Hradec Králové hl.n.;9:03', 'Pardubice hl.n.;9:27'];
$trasa['6282_1'] = ['Lichkov;12:17', 'Ústí nad Orlicí;13:09'];
$trasa['6282_2'] = ['Lichkov;12:17', 'Ústí nad Orlicí;13:09'];
$trasa['7141_1'] = ['Ústí nad Orlicí;4:47', 'Lichkov;5:59'];
$trasa['7144_1'] = ['Lichkov;6:46', 'Ústí nad Orlicí;7:33'];
$trasa['7149_1'] = ['Ústí nad Orlicí;15:46', 'Lichkov;16:36'];
$trasa['7149_2'] = ['Ústí nad Orlicí;15:46', 'Jablonné nad Orlicí;16:17'];
$trasa['7158_1'] = ['Lichkov;17:04', 'Ústí nad Orlicí;18:09'];
$trasa['7160_1'] = ['Letohrad;4:02', 'Ústí nad Orlicí;4:23'];
$trasa['7163_1'] = ['Ústí nad Orlicí;8:46', 'Lichkov;9:36'];
$trasa['7169_1'] = ['Ústí nad Orlicí;13:46', 'Letohrad;14:06'];
$trasa['7173_1'] = ['Ústí nad Orlicí;20:46', 'Letohrad;21:06'];
$trasa['7174_1'] = ['Letohrad;14:46', 'Ústí nad Orlicí;15:09'];
$trasa['7177_1'] = ['Ústí nad Orlicí;22:52', 'Letohrad;23:12'];
$trasa['8650_1'] = ['Pardubice hl.n.;4:33', 'Kolín;5:16'];
$trasa['8652_1'] = ['Pardubice hl.n.;12:31', 'Kolín;13:17'];
$trasa['8653_1'] = ['Kolín;6:05', 'Pardubice hl.n.;6:55'];
$trasa['8657_1'] = ['Kolín;7:35', 'Pardubice hl.n.;8:27'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts103 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


