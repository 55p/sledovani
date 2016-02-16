<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1348_1', '1349_1', '1354_1', '1357_1', '1357_2', '1364_1', '1367_1');
$obeh[2] = array('1356_1', '1359_1', '1359_2', '1366_1');
$obeh[3] = array('1351_1', '1358_1', '1361_1');
$obeh[4] = array('1352_1', '1352_2', '1355_1', '1360_1', '1363_1');
$obeh[5] = array('1350_1', '1353_1', '1362_1', '1365_1', '1368_1', '1369_1');

$omezeni['1348_1'] = '11';
$omezeni['1349_1'] = '11';
$omezeni['1350_1'] = '11';
$omezeni['1351_1'] = '1,2,3,4,5,2612,-2512,-0101';
$omezeni['1352_1'] = '11';
$omezeni['1352_2'] = '0101';
$omezeni['1353_1'] = '-0101';
$omezeni['1354_1'] = '11';
$omezeni['1356_1'] = '11';
$omezeni['1357_1'] = '10';
$omezeni['1357_2'] = '2412,3112';
$omezeni['1358_1'] = '1,2,3,4,5,2612,-2412';

$omezeni['1359_1'] = '2412,3112';
$omezeni['1359_2'] = '10';
$omezeni['1361_1'] = '10';
$omezeni['1362_1'] = '-2412';
$omezeni['1363_1'] = '10';
$omezeni['1364_1'] = '10';
$omezeni['1365_1'] = '10';
$omezeni['1366_1'] = '10';
$omezeni['1367_1'] = '10';
$omezeni['1368_1'] = '10';
$omezeni['1369_1'] = '10';


$trasa['1348_1'] = array('Staré Město u Uherského Hradiště;5:26', 'Přerov;5:54');
$trasa['1349_1'] = array('Přerov;6:00', 'Staré Město u Uherského Hradiště;6:24');
$trasa['1350_1'] = array('Bohumín;3:55', 'Praha hl.n.;7:22');
$trasa['1351_1'] = array('Praha hl.n.;6:11', 'Bohumín;9:46');
$trasa['1352_1'] = array('Prešov;0:00', 'Praha hl.n.;8:22');
$trasa['1352_2'] = array('Bohumín;4:55', 'Praha hl.n.;8:22');
$trasa['1353_1'] = array('Praha hl.n.;8:11', 'Karviná hl.n.;12:04');
$trasa['1354_1'] = array('Staré Město u Uherského Hradiště;6:28', 'Praha hl.n.;9:22');
$trasa['1355_1'] = array('Praha hl.n.;9:11', 'Staré Město u Uherského Hradiště;12:08');
$trasa['1356_1'] = array('Spišská Nová Ves;3:16', 'Praha hl.n.;10:22');
$trasa['1357_1'] = array('Praha hl.n.;10:11', 'Karviná hl.n.;14:04');
$trasa['1357_2'] = array('Praha hl.n.;10:11', 'Bohumín;13:46');
$trasa['1358_1'] = array('Bohumín;9:55', 'Praha hl.n.;13:22');
$trasa['1359_1'] = array('Praha hl.n.;11:11', 'Bohumín;14:46');
$trasa['1359_2'] = array('Praha hl.n.;11:11', 'Bystřice;15:41');
$trasa['1360_1'] = array('Staré Město u Uherského Hradiště;12:31', 'Praha hl.n.;15:22');
$trasa['1361_1'] = array('Praha hl.n.;14:11', 'Prešov;22:21');
$trasa['1362_1'] = array('Karviná hl.n.;12:39', 'Praha hl.n.;16:22');
$trasa['1363_1'] = array('Praha hl.n.;16:11', 'Bohumín;19:46');
$trasa['1364_1'] = array('Karviná hl.n.;14:39', 'Praha hl.n.;18:22');
$trasa['1365_1'] = array('Praha hl.n.;17:11', 'Staré Město u Uherského Hradiště;20:08');
$trasa['1366_1'] = array('Bystřice;16:05', 'Praha hl.n.;20:22');
$trasa['1367_1'] = array('Praha hl.n.;19:11', 'Spišská Nová Ves;2:30');
$trasa['1368_1'] = array('Staré Město u Uherského Hradiště;20:25', 'Přerov;20:53');
$trasa['1369_1'] = array('Přerov;21:45', 'Staré Město u Uherského Hradiště;22:13');



@$ts401 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>