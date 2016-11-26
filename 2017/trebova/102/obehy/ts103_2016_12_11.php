<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5003_1', '5010_1', '5011_1', '5028_1');
$obeh[2] = array('5021_1', '5012_1', '8658_1', '5015_1', '5074_1', '7173_1', '8650_1', '8653_1', '6230_1', '6235_1', '8652_1', '5009_1', '5014_1');
$obeh[3] = array('7160_1', '7141_1', '7144_1', '7163_1', '7162_1', '5002_1', '5002_2', '5017_1', '6282_1', '7169_1', '7174_1', '7149_1', '7158_1', '7177_1', '7149_2', '5016_1', '5015_2', '5042_1');

$omezeni['5002_1'] = '6';
$omezeni['5002_2'] = 'T';
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
$omezeni['5042_1'] = '6';
$omezeni['5074_1'] = 'T';
$omezeni['6230_1'] = 'X';
$omezeni['6235_1'] = 'X';
$omezeni['7141_1'] = 'X';
$omezeni['7144_1'] = 'X';
$omezeni['7149_1'] = 'X';
$omezeni['7149_2'] = '25';
$omezeni['7158_1'] = 'X';
$omezeni['7160_1'] = 'X';
$omezeni['7162_1'] = '6';
$omezeni['7163_1'] = 'X';
$omezeni['7169_1'] = 'X';
$omezeni['7173_1'] = 'T';
$omezeni['7174_1'] = 'X';
$omezeni['7177_1'] = 'X';
$omezeni['8650_1'] = 'X';
$omezeni['8652_1'] = 'X';
$omezeni['8653_1'] = 'X';
$omezeni['8658_1'] = 'T';

$trasa['5002_1'] = ['Ústí nad Orlicí;5:18','Pardubice hl.n.;6:18'];
$trasa['5002_2'] = ['Choceň;5:38','Pardubice hl.n.;6:18'];
$trasa['5015_2'] = ['Pardubice;18:44','Česká Třebová;19:59'];
$trasa['5003_1'] = array('Kolín;5:41', 'Česká Třebová;7:59');
$trasa['5009_1'] = array('Kolín;13:41', 'Česká Třebová;15:59');
$trasa['5010_1'] = array('Česká Třebová;12:06', 'Kolín;14:17');
$trasa['5011_1'] = array('Kolín;14:37', 'Česká Třebová;17:05');
$trasa['5012_1'] = array('Česká Třebová;14:06', 'Pardubice hl.n.;15:14');
$trasa['5014_1'] = array('Česká Třebová;16:59', 'Kolín;19:19');
$trasa['5015_1'] = array('Kolín;17:37', 'Česká Třebová;19:59');
$trasa['5016_1'] = array('Jablonné nad Orlicí;16:54', 'Pardubice hl.n.;18:07');
$trasa['5017_1'] = array('Pardubice hl.n.;7:31', 'Lichkov;9:16');
$trasa['5021_1'] = array('Pardubice hl.n.;0:26', 'Česká Třebová;1:27');
$trasa['5028_1'] = array('Česká Třebová;17:59', 'Pardubice hl.n.;19:14');
$trasa['5042_1'] = array('Česká Třebová;21:47', 'Choceň;22:16');
$trasa['5074_1'] = array('Česká Třebová;20:17', 'Ústí nad Orlicí;20:29');
$trasa['6230_1'] = array('Pardubice hl.n.;7:19', 'Hradec Králové hl.n.;7:42');
$trasa['6235_1'] = array('Hradec Králové hl.n.;9:03', 'Pardubice hl.n.;9:27');
$trasa['6282_1'] = array('Lichkov;12:17', 'Ústí nad Orlicí;13:09');
$trasa['7141_1'] = array('Ústí nad Orlicí;4:47', 'Lichkov;5:59');
$trasa['7144_1'] = array('Lichkov;6:46', 'Ústí nad Orlicí;7:33');
$trasa['7149_1'] = array('Ústí nad Orlicí;15:46', 'Lichkov;16:36');
$trasa['7149_2'] = array('Ústí nad Orlicí;15:46', 'Jablonné nad Orlicí;16:17');
$trasa['7158_1'] = array('Lichkov;17:04', 'Ústí nad Orlicí;18:09');
$trasa['7160_1'] = array('Letohrad;4:02', 'Ústí nad Orlicí;4:23');
$trasa['7162_1'] = array('Letohrad;4:49', 'Ústí nad Orlicí;5:11');
$trasa['7163_1'] = array('Ústí nad Orlicí;8:46', 'Lichkov;9:36');
$trasa['7169_1'] = array('Ústí nad Orlicí;13:46', 'Letohrad;14:06');
$trasa['7173_1'] = array('Ústí nad Orlicí;20:46', 'Letohrad;21:06');
$trasa['7174_1'] = array('Letohrad;14:46', 'Ústí nad Orlicí;15:09');
$trasa['7177_1'] = array('Ústí nad Orlicí;22:52', 'Letohrad;23:12');
$trasa['8650_1'] = array('Pardubice hl.n.;4:33', 'Kolín;5:16');
$trasa['8652_1'] = array('Pardubice hl.n.;12:31', 'Kolín;13:17');
$trasa['8653_1'] = array('Kolín;6:05', 'Pardubice hl.n.;6:55');
$trasa['8658_1'] = array('Pardubice hl.n.;15:31', 'Kolín;16:17');


$poznamkaObehu['5003_1'] = array('pk', 'postrk');
$poznamkaObehu['5011_1'] = array('pk', 'postrk');
$poznamkaObehu['5021_1'] = array('pk', 'postrk');
$poznamkaObehu['5015_1'] = array('pk', 'postrk');
$poznamkaObehu['7173_1'] = array('pk', 'postrk');
$poznamkaObehu['8653_1'] = array('pk', 'postrk');
$poznamkaObehu['6235_1'] = array('pk', 'postrk');
$poznamkaObehu['5009_1'] = array('pk', 'postrk');
$poznamkaObehu['7141_1'] = array('pk', 'postrk');
$poznamkaObehu['7163_1'] = array('pk', 'postrk');
$poznamkaObehu['5017_1'] = array('pk', 'postrk');
$poznamkaObehu['7169_1'] = array('pk', 'postrk');
$poznamkaObehu['7149_1'] = array('pk', 'postrk');
$poznamkaObehu['7149_2'] = array('pk', 'postrk');
$poznamkaObehu['5015_2'] = array('pk', 'postrk');


@$ts103 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>