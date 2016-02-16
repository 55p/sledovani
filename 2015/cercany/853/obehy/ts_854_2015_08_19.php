<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('26101_1', '26100_1', '26103_1', '26108_1', '26113_1', '26114_1', '26104_1', '26107_1', '26108_2', '26111_1', '26110_1', '26113_2', '26112_1', '26117_1', '26130_1', '26119_1', '26118_1', '26121_1', '26122_1', '26120_1', '26123_1', '26124_1');
$obeh[2] = array('26102_1', '26105_1', '26106_1', '26109_1', '8277_1', '26130_2', '26119_2', '26118_2', '26121_2', '26120_2', '26123_2', '26124_2');

$omezeni['26100_1'] = 'X';
$omezeni['26101_1'] = 'X';
$omezeni['26102_1'] = 'X';
$omezeni['26103_1'] = 'X,6';
$omezeni['26104_1'] = '6';
$omezeni['26105_1'] = 'X';
$omezeni['26106_1'] = 'X';
$omezeni['26107_1'] = '25';
$omezeni['26108_1'] = 'X';
$omezeni['26108_2'] = '25';
$omezeni['26109_1'] = 'X';
$omezeni['26110_1'] = '25';
$omezeni['26111_1'] = '25';
$omezeni['26112_1'] = '25';
$omezeni['26113_1'] = 'X';
$omezeni['26113_2'] = '25';
$omezeni['26114_1'] = 'X';
$omezeni['26118_1'] = '25';
$omezeni['26118_2'] = 'X';
$omezeni['26119_1'] = '25';
$omezeni['26119_2'] = 'X';
$omezeni['26120_1'] = 'T';
$omezeni['26120_2'] = 'X';
$omezeni['26121_1'] = '25';
$omezeni['26121_2'] = 'X';
$omezeni['26122_1'] = '6';
$omezeni['26123_1'] = 'T';
$omezeni['26123_2'] = 'X';
$omezeni['26124_1'] = 'T';
$omezeni['26124_2'] = 'X';
$omezeni['26130_1'] = '25';
$omezeni['26130_2'] = 'X';
$omezeni['8277_1'] = 'X';

$trasa['26100_1'] = array('Olbramovice;5:16', 'Sedlčany;5:45');
$trasa['26101_1'] = array('Sedlčany;4:30', 'Olbramovice;5:00');
$trasa['26102_1'] = array('Olbramovice;5:43', 'Sedlčany;6:18');
$trasa['26103_1'] = array('Sedlčany;5:48', 'Olbramovice;6:20');
$trasa['26104_1'] = array('Olbramovice;6:26', 'Sedlčany;6:54');
$trasa['26105_1'] = array('Sedlčany;6:28', 'Olbramovice;6:58');
$trasa['26106_1'] = array('Olbramovice;7:07', 'Sedlčany;7:35');
$trasa['26107_1'] = array('Sedlčany;7:05', 'Olbramovice;7:35');
$trasa['26108_1'] = array('Olbramovice;8:26', 'Sedlčany;8:54');
$trasa['26108_2'] = array('Olbramovice;8:26', 'Sedlčany;8:54');
$trasa['26109_1'] = array('Sedlčany;7:45', 'Benešov u Prahy;8:31');
$trasa['26110_1'] = array('Olbramovice;9:42', 'Sedlčany;10:10');
$trasa['26111_1'] = array('Sedlčany;9:01', 'Olbramovice;9:31');
$trasa['26112_1'] = array('Olbramovice;12:26', 'Sedlčany;12:54');
$trasa['26113_1'] = array('Sedlčany;11:05', 'Olbramovice;11:35');
$trasa['26113_2'] = array('Sedlčany;11:05', 'Olbramovice;11:35');
$trasa['26114_1'] = array('Olbramovice;13:26', 'Sedlčany;13:54');
$trasa['26117_1'] = array('Sedlčany;14:00', 'Olbramovice;14:30');
$trasa['26118_1'] = array('Olbramovice;17:26', 'Sedlčany;17:55');
$trasa['26118_2'] = array('Olbramovice;17:26', 'Sedlčany;17:55');
$trasa['26119_1'] = array('Sedlčany;16:05', 'Olbramovice;16:35');
$trasa['26119_2'] = array('Sedlčany;16:05', 'Olbramovice;16:35');
$trasa['26120_1'] = array('Olbramovice;19:33', 'Sedlčany;20:02');
$trasa['26120_2'] = array('Olbramovice;19:33', 'Sedlčany;20:02');
$trasa['26121_1'] = array('Sedlčany;18:05', 'Olbramovice;18:35');
$trasa['26121_2'] = array('Sedlčany;18:05', 'Olbramovice;18:35');
$trasa['26122_1'] = array('Olbramovice;20:26', 'Sedlčany;20:54');
$trasa['26123_1'] = array('Sedlčany;20:05', 'Olbramovice;20:35');
$trasa['26123_2'] = array('Sedlčany;20:05', 'Olbramovice;20:35');
$trasa['26124_1'] = array('Olbramovice;21:42', 'Sedlčany;22:10');
$trasa['26124_2'] = array('Olbramovice;21:42', 'Sedlčany;22:10');
$trasa['26130_1'] = array('Olbramovice;15:26', 'Sedlčany;15:54');
$trasa['26130_2'] = array('Heřmaničky;15:13', 'Sedlčany;15:54');
$trasa['8277_1'] = array('Benešov u Prahy;14:43', 'Heřmaničky;15:09');


@$ts854 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>