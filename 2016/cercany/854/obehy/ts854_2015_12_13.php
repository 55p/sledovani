<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('26101_1', '26100_1', '26103_1', '26104_1', '26109_1', '26108_1', '26111_1', '26110_1', '26113_1', '26112_1', '26115_1', '26117_1', '26130_1', '26119_1', '26118_1', '26121_1', '26120_1', '26122_1', '26123_1', '26124_1');
$obeh[2] = array('26102_1', '26105_1', '26106_1', '26107_1', '26151_1', '26130_2', '26130_3', '26112_2', '26117_2', '26119_2', '26118_2', '26121_2', '26120_2', '26123_2', '26124_2');

$omezeni['26100_1'] = 'X';
$omezeni['26101_1'] = 'X';
$omezeni['26102_1'] = 'X';
$omezeni['26103_1'] = 'X6,2412,0507,2809,2810,1711,-2612,-0201,-2910';
$omezeni['26104_1'] = '6,2412,0507,2809,2810,1711,-2612,-0201,-2910';
$omezeni['26105_1'] = 'X';
$omezeni['26106_1'] = 'X';
$omezeni['26107_1'] = 'X';
$omezeni['26108_1'] = 'X';
$omezeni['26109_1'] = '25';
$omezeni['26110_1'] = '25';
$omezeni['26111_1'] = '25';
$omezeni['26112_1'] = 'X,T';
$omezeni['26112_2'] = '6';
$omezeni['26115_1'] = 'X';
$omezeni['26117_1'] = 'T';
$omezeni['26117_2'] = '6';
$omezeni['26118_1'] = 'T';
$omezeni['26118_2'] = 'X6';
$omezeni['26119_1'] = 'T';
$omezeni['26119_2'] = 'X6';
$omezeni['26120_1'] = 'T';
$omezeni['26120_2'] = 'X';
$omezeni['26121_1'] = 'T,-2412';
$omezeni['26121_2'] = 'X6,-3112';
$omezeni['26122_1'] = '6,2512,0101,2703,0507,2810';
$omezeni['26123_1'] = 'T,-2412,-2512,-2612,-0101,-2703,-0507,-2810';
$omezeni['26123_2'] = '23';
$omezeni['26124_1'] = 'T,-2412,-2512,-2612,-0101,-2703,-0507,-2810';
$omezeni['26124_2'] = '23';
$omezeni['26130_1'] = 'T';
$omezeni['26130_2'] = 'X';
$omezeni['26130_3'] = '6';
$omezeni['26151_1'] = 'X';

$trasa['26100_1'] = array('Olbramovice;5:13','Sedlčany;5:50');
$trasa['26101_1'] = array('Sedlčany;4:26','Olbramovice;4:56');
$trasa['26102_1'] = array('Olbramovice;5:45','Sedlčany;6:20');
$trasa['26103_1'] = array('Sedlčany;5:50','Olbramovice;6:22');
$trasa['26104_1'] = array('Olbramovice;6:39','Sedlčany;7:07');
$trasa['26105_1'] = array('Sedlčany;6:25','Olbramovice;6:55');
$trasa['26106_1'] = array('Olbramovice;7:02','Sedlčany;7:30');
$trasa['26107_1'] = array('Sedlčany;7:45','Benešov u Prahy;8:33');
$trasa['26108_1'] = array('Olbramovice;8:37','Sedlčany;9:05');
$trasa['26109_1'] = array('Sedlčany;4:54','Olbramovice;8:24');
$trasa['26110_1'] = array('Olbramovice;10:28','Sedlčany;10:56');
$trasa['26111_1'] = array('Sedlčany;9:54','Olbramovice;10:24');
$trasa['26112_1'] = array('Olbramovice;12:39','Sedlčany;13:07');
$trasa['26112_2'] = array('Olbramovice;12:39','Sedlčany;13:07');
$trasa['26113_1'] = array('Sedlčany;10:59','Olbramovice;11:29');
$trasa['26115_1'] = array('Sedlčany;13:54','Olbramovice;14:24');
$trasa['26117_1'] = array('Sedlčany;14:54','Olbramovice;15:24');
$trasa['26117_2'] = array('Sedlčany;14:54','Olbramovice;15:24');
$trasa['26118_1'] = array('Olbramovice;17:35','Sedlčany;18:03');
$trasa['26118_2'] = array('Olbramovice;17:35','Sedlčany;18:03');
$trasa['26119_1'] = array('Sedlčany;16:54','Olbramovice;17:24');
$trasa['26119_2'] = array('Sedlčany;16:54','Olbramovice;17:24');
$trasa['26120_1'] = array('Olbramovice;19:35','Sedlčany;20:05');
$trasa['26120_2'] = array('Olbramovice;19:35','Sedlčany;20:05');
$trasa['26121_1'] = array('Sedlčany;18:54','Olbramovice;19:24');
$trasa['26121_2'] = array('Sedlčany;18:54','Olbramovice;19:24');
$trasa['26122_1'] = array('Olbramovice;20:39','Sedlčany;21:07');
$trasa['26123_1'] = array('Sedlčany;20:54','Olbramovice;21:24');
$trasa['26123_2'] = array('Sedlčany;20:54','Olbramovice;21:24');
$trasa['26124_1'] = array('Olbramovice;21:35','Sedlčany;22:03');
$trasa['26124_2'] = array('Olbramovice;21:35','Sedlčany;22:03');
$trasa['26130_1'] = array('Olbramovice;15:35','Sedlčany;16:03');
$trasa['26130_2'] = array('Heřmaničky;15:14','Sedlčany;16:03');
$trasa['26130_3'] = array('Olbramovice;15:35','Sedlčany;16:03');
$trasa['26151_1'] = array('Benešov u Prahy;14:45','Heřmaničky;15:10');





@$ts854 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>