<?php 
$zacatekPlatnosti = '29.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1348_1', '1349_1', '1354_1', '1357_1', '1364_1', '1367_1');
$obeh[2] = array('1358_1', '1361_1');
$obeh[3] = array('1352_1', '1355_1', '1360_1', '1363_1');
$obeh[4] = array('1356_1', '1359_1', '1366_1');
$obeh[5] = array('1353_1', '1362_1', '1365_1', '1368_1', '1369_1');

$omezeni['1353_1'] = '1,3,4,5,6,7';
$omezeni['1362_1'] = '1,3,4,5,6,7';

$trasa['1348_1'] = array('Staré Město u Uherského Hradiště;5:26', 'Přerov;5:54');
$trasa['1349_1'] = array('Přerov;6:00', 'Staré Město u Uherského Hradiště;6:24');
$trasa['1350_1'] = array('Bohumín;3:55', 'Praha hl.n.;7:22');
$trasa['1351_1'] = array('Praha hl.n.;6:11', 'Bohumín;9:46');
$trasa['1352_1'] = array('Košice;0:00;23:23', 'Praha hl.n.;8:22');
$trasa['1353_1'] = array('Praha hl.n.;8:11', 'Karviná hl.n.;12:04');
$trasa['1354_1'] = array('Staré Město u Uherského Hradiště;6:28', 'Praha hl.n.;9:22');
$trasa['1355_1'] = array('Praha hl.n.;9:11', 'Staré Město u Uherského Hradiště;12:08');
$trasa['1356_1'] = array('Karviná;6:39', 'Praha hl.n.;10:22');
$trasa['1357_1'] = array('Praha hl.n.;10:11', 'Karviná hl.n.;14:04');
$trasa['1358_1'] = array('Košice;4:45', 'Praha hl.n.;13:22');
$trasa['1359_1'] = array('Praha hl.n.;11:11', 'Bystřice;15:41');
$trasa['1360_1'] = array('Staré Město u Uherského Hradiště;12:31', 'Praha hl.n.;15:22');
$trasa['1361_1'] = array('Praha hl.n.;14:11', 'Košice;22:55');
$trasa['1362_1'] = array('Karviná hl.n.;12:39', 'Praha hl.n.;16:22');
$trasa['1363_1'] = array('Praha hl.n.;16:11', 'Bohumín;19:46');
$trasa['1364_1'] = array('Karviná hl.n.;14:39', 'Praha hl.n.;18:22');
$trasa['1365_1'] = array('Praha hl.n.;17:11', 'Staré Město u Uherského Hradiště;20:08');
$trasa['1366_1'] = array('Bystřice;16:05', 'Praha hl.n.;20:22');
$trasa['1367_1'] = array('Praha hl.n.;19:11', 'Košice;4:03');
$trasa['1368_1'] = array('Staré Město u Uherského Hradiště;20:25', 'Přerov;20:53');
$trasa['1369_1'] = array('Přerov;21:45', 'Staré Město u Uherského Hradiště;22:13');

@$ts401 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>