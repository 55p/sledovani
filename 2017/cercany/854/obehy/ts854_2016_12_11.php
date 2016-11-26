<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('26101_1', '26100_1', '26103_1', '26104_1', '26109_1', '26108_1', '26111_1', '26110_1', '26113_1', '26112_1', '26115_1', '26114_1', '26117_1', '26130_1', '26119_1', '26121_1', '26118_1', '26123_1', '26120_1', '26122_1', '26125_1', '26124_1');
$obeh[2] = array('26102_1', '26105_1', '26106_1', '26109_2', '26151_1', '26130_2', '26121_2', '26118_2', '26123_2', '26120_2', '26125_2', '26124_2');

$omezeni['26100_1'] = 'X';
$omezeni['26101_1'] = 'X';
$omezeni['26102_1'] = 'X';
$omezeni['26103_1'] = 'X,6,1404,0507,2809,1711,-1504,-1811';
$omezeni['26104_1'] = '6,1404,0507,2809,1711,-1504,-1811';
$omezeni['26105_1'] = 'X';
$omezeni['26106_1'] = 'X';
$omezeni['26109_1'] = '25';
$omezeni['26109_2'] = 'X';
$omezeni['26110_1'] = '25';
$omezeni['26111_1'] = '25';
$omezeni['26114_1'] = 'X';
$omezeni['26115_1'] = 'X';
$omezeni['26117_1'] = '25';
$omezeni['26118_1'] = 'T';
$omezeni['26118_2'] = 'X';
$omezeni['26119_1'] = 'X';
$omezeni['26120_1'] = 'T,-2412,-2512,-1404,-1604,-3004,-0705,-0507,-2810,-1711';
$omezeni['26120_2'] = 'X';
$omezeni['26121_1'] = 'T';
$omezeni['26121_2'] = 'X';
$omezeni['26122_1'] = '6,2512,1404,1604,3004,0705,0507,1711,-2412,-3112';
$omezeni['26123_1'] = '25,-2412,-3112';
$omezeni['26123_2'] = 'X';
$omezeni['26124_1'] = 'T,-2412,-2512,-1404,-1604,-3004,-0705,-0507,-2810,-1711';
$omezeni['26124_2'] = 'X';
$omezeni['26125_1'] = 'T,-2412,-2512,-1404,-1604,-3004,-0705,-0507,-2810,-1711';
$omezeni['26125_2'] = 'X';
$omezeni['26130_1'] = 'T';
$omezeni['26130_2'] = 'X';
$omezeni['26151_1'] = 'X';

$trasa['26100_1'] = ['Olbramovice;5:13','Sedlčany;5:42'];
$trasa['26101_1'] = ['Sedlčany;4:29','Olbramovice;4:59'];
$trasa['26102_1'] = ['Olbramovice;5:45','Sedlčany;6:18'];
$trasa['26103_1'] = ['Sedlčany;5:49','Olbramovice;6:21'];
$trasa['26104_1'] = ['Olbramovice;6:35','Sedlčany;7:03'];
$trasa['26105_1'] = ['Sedlčany;6:22','Olbramovice;6:52'];
$trasa['26106_1'] = ['Olbramovice;7:02','Sedlčany;7:30'];
$trasa['26108_1'] = ['Olbramovice;8:35','Sedlčany;9:03'];
$trasa['26109_1'] = ['Sedlčany;7:51','Olbramovice;8:21'];
$trasa['26109_2'] = ['Sedlčany;7:51','Benešov u Prahy;8:40'];
$trasa['26110_1'] = ['Olbramovice;10:27','Sedlčany;10:55'];
$trasa['26111_1'] = ['Sedlčany;9:51','Olbramovice;10:21'];
$trasa['26112_1'] = ['Olbramovice;12:27','Sedlčany;12:55'];
$trasa['26113_1'] = ['Sedlčany;10:59','Olbramovice;11:29'];
$trasa['26114_1'] = ['Olbramovice;14:35','Sedlčany;15:03'];
$trasa['26115_1'] = ['Sedlčany;13:51','Olbramovice;14:21'];
$trasa['26117_1'] = ['Sedlčany;14:51','Olbramovice;15:21'];
$trasa['26118_1'] = ['Olbramovice;17:35','Sedlčany;18:03'];
$trasa['26118_2'] = ['Olbramovice;17:35','Sedlčany;18:03'];
$trasa['26119_1'] = ['Sedlčany;15:36','Olbramovice;16:11'];
$trasa['26120_1'] = ['Olbramovice;19:35','Sedlčany;20:03'];
$trasa['26120_2'] = ['Olbramovice;19:35','Sedlčany;20:03'];
$trasa['26121_1'] = ['Sedlčany;16:51','Olbramovice;17:21'];
$trasa['26121_2'] = ['Sedlčany;16:51','Olbramovice;17:21'];
$trasa['26122_1'] = ['Olbramovice;20:38','Sedlčany;20:51'];
$trasa['26123_1'] = ['Sedlčany;18:51','Olbramovice;19:21'];
$trasa['26123_2'] = ['Sedlčany;18:51','Olbramovice;19:21'];
$trasa['26124_1'] = ['Olbramovice;21:35','Sedlčany;22:03'];
$trasa['26124_2'] = ['Olbramovice;21:35','Sedlčany;22:03'];
$trasa['26125_1'] = ['Sedlčany;20:51','Olbramovice;21:21'];
$trasa['26125_2'] = ['Sedlčany;20:51','Olbramovice;21:21'];
$trasa['26130_1'] = ['Olbramovice;15:35','Sedlčany;16:05'];
$trasa['26130_2'] = ['Heřmaničky;15:19','Sedlčany;16:05'];
$trasa['26151_1'] = ['Benešov u Prahy;14:50','Heřmaničky;15:16'];






@$ts854 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>