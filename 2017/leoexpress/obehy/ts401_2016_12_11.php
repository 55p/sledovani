<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1340_1', '1341_1', '1342_1', '1343_1', '1354_1', '1357_1', '1364_1', '1367_1', '1367_2'];
$obeh[2] = ['1356_1', '1356_2', '1359_1'];
$obeh[3] = ['1350_1', '1353_1', '1360_1', '1363_1', '1366_1'];
$obeh[4] = ['1351_1', '1358_1', '1361_1'];
$obeh[5] = ['1352_1', '1355_1', '1362_1', '1365_1', '1346_1', '1347_1'];

$omezeni['1351_1'] = '1,3,4,5,25';
$omezeni['1356_1'] = '1,4,5,25';
$omezeni['1356_2'] = '2,3';
$omezeni['1358_1'] = '1,3,4,5,25';
$omezeni['1367_1'] = '1,2';
$omezeni['1367_2'] = '3,4,5,25';

$trasa['1340_1'] = ['Staré Město u Uherského Hradiště;4:28','Přerov;4:55'];
$trasa['1341_1'] = ['Přerov;4:59','Staré Město u Uherského Hradiště;5:24'];
$trasa['1342_1'] = ['Staré Město u Uherského Hradiště;5:27','Přerov;5:54'];
$trasa['1343_1'] = ['Přerov;5:59','Staré Město u Uherského Hradiště;6:24'];
$trasa['1346_1'] = ['Staré Město u Uherského Hradiště;20:27','Přerov;20:54'];
$trasa['1347_1'] = ['Přerov;20:59','Staré Město u Uherského Hradiště;21:27'];
$trasa['1350_1'] = ['Prešov;23:38','Praha hl.n.;7:19'];
$trasa['1351_1'] = ['Praha hl.n.;7:13','Bohumín;10:43'];
$trasa['1352_1'] = ['Bohumín;4:55','Praha hl.n.;8:19'];
$trasa['1353_1'] = ['Praha hl.n.;8:13','Bohumín;11:43'];
$trasa['1354_1'] = ['Staré Město u Uherského Hradiště;6:27','Praha hl.n.;9:19'];
$trasa['1355_1'] = ['Praha hl.n.;9:13','Staré Město u Uherského Hradiště;12:08'];
$trasa['1356_1'] = ['Prešov;5:38','Praha hl.n.;13:19'];
$trasa['1356_2'] = ['Karviná hl.n.;9:40','Praha hl.n.;13:19'];
$trasa['1357_1'] = ['Praha hl.n.;11:13','Karviná hl.n.;15:02'];
$trasa['1358_1'] = ['Bohumín;10:55','Praha hl.n.;14:19'];
$trasa['1359_1'] = ['Praha hl.n.;14:13','Prešov;22:06'];
$trasa['1360_1'] = ['Bohumín;11:55','Praha hl.n.;15:19'];
$trasa['1361_1'] = ['Praha hl.n.;15:13','Bohumín;18:43'];
$trasa['1362_1'] = ['Staré Město u Uherského Hradiště;13:27','Praha hl.n.;16:19'];
$trasa['1363_1'] = ['Praha hl.n.;16:13','Bohumín;19:43'];
$trasa['1364_1'] = ['Karviná hl.n.;15:38','Praha hl.n.;19:19'];
$trasa['1365_1'] = ['Praha hl.n.;17:13','Staré Město u Uherského Hradiště;20:08'];
$trasa['1366_1'] = ['Bohumín;19:55','Praha hl.n.;23:19'];
$trasa['1367_1'] = ['Praha hl.n.;20:13','Karviná hl.n.;23:57'];
$trasa['1367_2'] = ['Praha hl.n.;20:13','Prešov;3:59'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts401 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


