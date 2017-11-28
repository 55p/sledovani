<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['26101_1', '26100_1', '26105_1', '126105_1', '26103_1', '26104_1', '26109_1', '126108_1', '26108_1', '26108_2', '26113_1', '26115_1', '26110_1', '26117_1', '26112_1', '26119_1', '126119_1', '26121_1', '26114_1', '126116_1', '26116_1', '26123_1', '26142_1', '26125_1', '26118_1', '26129_1', '26120_1', '26131_1', '26122_1'];
$obeh[2] = ['26102_1', '26107_1', '26106_1', '26111_1', '126111_1', '126151_1', '26151_1', '26140_1', '26127_1', '26118_2', '26129_2', '26120_2', '26131_2', '26122_2'];

$omezeni['126105_1'] = 'X';
$omezeni['126108_1'] = 'X';
$omezeni['126111_1'] = 'X';
$omezeni['126116_1'] = '25';
$omezeni['126119_1'] = '25';
$omezeni['126151_1'] = 'X';
$omezeni['26100_1'] = 'X';
$omezeni['26101_1'] = 'X';
$omezeni['26102_1'] = 'X';
$omezeni['26103_1'] = '6';
$omezeni['26104_1'] = '6';
$omezeni['26105_1'] = 'X';
$omezeni['26106_1'] = 'X';
$omezeni['26107_1'] = 'X';
$omezeni['26108_1'] = 'X';
$omezeni['26108_2'] = '25';
$omezeni['26109_1'] = '25';
$omezeni['26111_1'] = 'X';
$omezeni['26113_1'] = '6';
$omezeni['26114_1'] = 'X';
$omezeni['26115_1'] = 'XT';
$omezeni['26116_1'] = '25';
$omezeni['26118_1'] = '25';
$omezeni['26118_2'] = 'X';
$omezeni['26119_1'] = '25';
$omezeni['26120_1'] = '25';
$omezeni['26120_2'] = 'X';
$omezeni['26121_1'] = 'X';
$omezeni['26122_1'] = '25';
$omezeni['26122_2'] = 'X';
$omezeni['26123_1'] = 'X';
$omezeni['26125_1'] = '25';
$omezeni['26127_1'] = 'X';
$omezeni['26129_1'] = '25';
$omezeni['26129_2'] = 'X';
$omezeni['26131_1'] = '25';
$omezeni['26131_2'] = 'X';
$omezeni['26140_1'] = 'X';
$omezeni['26142_1'] = 'X';
$omezeni['26151_1'] = 'X';

$trasa['126105_1'] = ['Benešov u Prahy;6:41','Čerčany;6:49'];
$trasa['126108_1'] = ['Čerčany;7:51','Benešov u Prahy;8:01'];
$trasa['126111_1'] = ['Benešov u Prahy;8:29','Čerčany;8:37'];
$trasa['126116_1'] = ['Čerčany;14:50','Olbramovice;15:14'];
$trasa['126119_1'] = ['Olbramovice;13:43','Čerčany;14:07'];
$trasa['126151_1'] = ['Čerčany;14:24','Benešov u Prahy;14:34'];
$trasa['26108_2'] = ['Olbramovice;8:23','Sedlčany;8:51'];

$trasa['26100_1'] = ['Olbramovice;5:13', 'Sedlčany;5:41'];
$trasa['26101_1'] = ['Sedlčany;4:23', 'Olbramovice;4:53'];
$trasa['26102_1'] = ['Olbramovice;5:44', 'Sedlčany;6:17'];
$trasa['26103_1'] = ['Sedlčany;5:24', 'Olbramovice;5:54'];
$trasa['26104_1'] = ['Olbramovice;6:23', 'Sedlčany;6:51'];
$trasa['26105_1'] = ['Sedlčany;5:48', 'Benešov u Prahy;6:37'];
$trasa['26106_1'] = ['Olbramovice;6:58', 'Sedlčany;7:26'];
$trasa['26107_1'] = ['Sedlčany;6:22', 'Olbramovice;6:52'];
$trasa['26108_1'] = ['Benešov u Prahy;8:03', 'Sedlčany;8:51'];
$trasa['26109_1'] = ['Sedlčany;7:00', 'Olbramovice;7:30'];
$trasa['26110_1'] = ['Olbramovice;10:23', 'Sedlčany;10:51'];
$trasa['26111_1'] = ['Sedlčany;7:30', 'Benešov u Prahy;8:16'];
$trasa['26112_1'] = ['Olbramovice;12:23', 'Sedlčany;12:51'];
$trasa['26113_1'] = ['Sedlčany;9:01', 'Olbramovice;9:31'];
$trasa['26114_1'] = ['Olbramovice;14:23', 'Sedlčany;14:51'];
$trasa['26115_1'] = ['Sedlčany;9:05', 'Olbramovice;9:35'];
$trasa['26116_1'] = ['Olbramovice;15:23', 'Sedlčany;15:51'];
$trasa['26117_1'] = ['Sedlčany;11:05', 'Olbramovice;11:35'];
$trasa['26118_1'] = ['Olbramovice;17:23', 'Sedlčany;17:51'];
$trasa['26118_2'] = ['Olbramovice;17:23', 'Sedlčany;17:51'];
$trasa['26119_1'] = ['Sedlčany;13:05', 'Olbramovice;13:35'];
$trasa['26120_1'] = ['Olbramovice;19:23', 'Sedlčany;19:51'];
$trasa['26120_2'] = ['Olbramovice;19:23', 'Sedlčany;19:51'];
$trasa['26121_1'] = ['Sedlčany;13:50', 'Olbramovice;14:20'];
$trasa['26122_1'] = ['Olbramovice;21:41', 'Sedlčany;22:09'];
$trasa['26122_2'] = ['Olbramovice;21:41', 'Sedlčany;22:09'];
$trasa['26123_1'] = ['Sedlčany;15:34', 'Votice;16:15'];
$trasa['26125_1'] = ['Sedlčany;16:05', 'Olbramovice;16:35'];
$trasa['26127_1'] = ['Sedlčany;16:50', 'Olbramovice;17:20'];
$trasa['26129_1'] = ['Sedlčany;18:05', 'Olbramovice;18:35'];
$trasa['26129_2'] = ['Sedlčany;18:05', 'Olbramovice;18:35'];
$trasa['26131_1'] = ['Sedlčany;20:00', 'Olbramovice;20:30'];
$trasa['26131_2'] = ['Sedlčany;20:00', 'Olbramovice;20:30'];
$trasa['26140_1'] = ['Heřmaničky;15:19', 'Sedlčany;16:02'];
$trasa['26142_1'] = ['Votice;16:24', 'Olbramovice;16:28'];
$trasa['26151_1'] = ['Benešov u Prahy;14:50', 'Heřmaničky;15:16'];


$typ['126105_1'] = 'Sv';
$typ['126108_1'] = 'Sv';
$typ['126119_1'] = 'Sv';
$typ['126116_1'] = 'Sv';
$typ['126111_1'] = 'Sv';
$typ['126151_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts854 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


