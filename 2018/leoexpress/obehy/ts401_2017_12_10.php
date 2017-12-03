<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1352_1', '1353_1', '1360_1', '1361_1'];
$obeh[2] = ['1356_1', '1357_1', '1366_1', '1367_1'];
$obeh[3] = ['1358_1', '1359_1', '101350_1'];
$obeh[4] = ['1350_1', '1351_1', '1362_1', '1363_1'];

$omezeni['101350_1'] = '10';
$omezeni['1350_1'] = '11';
$omezeni['1351_1'] = '11';
$omezeni['1352_1'] = '11';
$omezeni['1356_1'] = '11';
$omezeni['1359_1'] = '-2412';
$omezeni['1361_1'] = '10';
$omezeni['1362_1'] = '-2412';
$omezeni['1363_1'] = '10';
$omezeni['1366_1'] = '10';
$omezeni['1367_1'] = '10';

$trasa['101350_1'] = ['Košice;23:10','Poprad-Tatry;0:51'];
$trasa['1350_1'] = ['Poprad-Tatry;0:51','Praha hl.n.;7:39'];
$trasa['1351_1'] = ['Praha hl.n.;8:10','Karviná hl.n.;12:01'];
$trasa['1352_1'] = ['Staré Město u Uherského Hradiště;5:40','Praha hl.n.;8:39'];
$trasa['1353_1'] = ['Praha hl.n.;9:10','Staré Město u Uherského Hradiště;12:01'];
$trasa['1356_1'] = ['Bohumín;8:12','Praha hl.n.;11:39'];
$trasa['1357_1'] = ['Praha hl.n.;12:10','Bohumín;15:42'];
$trasa['1358_1'] = ['Košice;5:07','Praha hl.n.;13:39'];
$trasa['1359_1'] = ['Praha hl.n.;14:10','Košice;22:48'];
$trasa['1360_1'] = ['Staré Město u Uherského Hradiště;12:46','Praha hl.n.;15:39'];
$trasa['1361_1'] = ['Praha hl.n.;16:10','Bohumín;19:42'];
$trasa['1362_1'] = ['Karviná hl.n.;12:53','Praha hl.n.;16:39'];
$trasa['1363_1'] = ['Praha hl.n.;17:10','Staré Město u Uherského Hradiště;20:01'];
$trasa['1366_1'] = ['Bohumín;16:12','Praha hl.n.;19:39'];
$trasa['1367_1'] = ['Praha hl.n.;20:10','Košice;4:38'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts401 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


