<?php
$dopravce = 3244; //pro grapp
  
$obeh['1'] = array(1351,1356,1361);
$obeh['2'] = array('1350_2', '1350_1',1355,1360,1365);
$obeh['3'] = array(1352,'1357_2', '1357_1',1364);
$obeh['1b'] = array(1353,1358,1363,1366);
$obeh['1a'] = array(1354,1359,1362,1367);

$TS['Leo Express'] = $obeh;

unset($obeh);

$omezeni ['1350_2'] = 11;
$omezeni ['1350_1'] = '_17';
$omezeni [1351] = $omezeni [1356] = 'LE_E_2015';
$omezeni [1352] = 11;
$omezeni [1353] = $omezeni [1354] = '18';
$omezeni ['1357_1'] = '_10';

$omezeni ['1357_2'] = $omezeni[1360] = $omezeni[1361] = $omezeni[1363] = $omezeni[1364] = $omezeni[1365] = '10';
$omezeni[1366] = $omezeni[1367] = '12';

$typ [-1] = 'LE';

$ke = 'Košice';
$ki = 'Karviná';
$st = 'Staré Město u Uherského Hradiště';
$ph = 'Praha hl.n.';
$bi = 'Bohumín';
$by = 'Bystřice';  

$trasa [1350] = array("$ke;0:00;23:14","$bi;4:01;4:16","$ph;8:08");
$trasa ["1350_1"] = array("$bi;4:16","$ph;8:08");

$trasa [1352] = array("$st;5:52", "$ph;9:06");
$trasa [1354] = array("$bi;6:16", "$ph;10:00");
$trasa [1356] = array("$bi;9:41", "$ph;13:10");
$trasa [1358] = array("$bi;11:49", "$ph;15:10");
$trasa [1360] = array("$bi;13:26", "$ph;17:10");
$trasa [1362] = array("$st;14:36", "$ph;18:00");
$trasa [1364] = array("$by;15:27", "$ph;20:00");
$trasa [1366] = array("$bi;19:49", "$ph;23:10");

$trasa [1351] = array("$ph;6:06", "$bi;9:27");
$trasa [1353] = array("$ph;8:02", "$bi;11:34");
$trasa [1355] = array("$ph;9:02", "$bi;12:41");
$trasa [1357] = array("$ph;10:06", "$ki;14:03;14:03", "$by;14:44");
$trasa ["1357_1"] = array("$ph;10:06", "$ki;14:03");
$trasa [1359] = array("$ph;11:06", "$st;14:04");
$trasa [1361] = array("$ph;14:35", "$ke;22:27");
$trasa [1363] = array("$ph;16:06", "$bi;19:34");
$trasa [1365] = array("$ph;17:35", "$st;20:36");
$trasa [1367] = array("$ph;18:35", "$ki;22:29");
  
$lak['nic'] = array();

?>
