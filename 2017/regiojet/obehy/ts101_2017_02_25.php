<?php 
$zacatekPlatnosti = '25.2.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1001_1', '1010_1', '1010_2', '1015_1'];
$obeh[2] = ['1002_1', '1007_1', '1016_1', '1021_1'];
$obeh[3] = ['1012_1', '1017_1'];
$obeh[4] = ['1004_1', '1013_1'];
$obeh[5] = ['1000_1', '1005_1', '1014_1', '1019_1'];
$obeh[6] = ['1006_1', '1009_1', '1018_1'];

$omezeni['1000_1'] = 'X6';
$omezeni['1001_1'] = 'X6';
$omezeni['1006_1'] = '-1704,-0105,-0805,-0607';
$omezeni['1010_1'] = 'T,-2810';
$omezeni['1010_2'] = 'X6,2810';
$omezeni['1013_1'] = '-1604,-3004,-0705,-0507';

$trasa['1000_1'] = ['Návsí;3:47','Praha hl.n.;8:12'];
$trasa['1001_1'] = ['Praha hl.n.;5:44','Havířov;9:24'];
$trasa['1002_1'] = ['Staré Město u Uherského Hradiště;6:08','Praha hl.n.;9:12'];
$trasa['1004_1'] = ['Návsí;5:47','Praha hl.n.;10:12'];
$trasa['1005_1'] = ['Praha hl.n.;9:44','Havířov;13:24'];
$trasa['1006_1'] = ['Návsí;6:47','Praha hl.n.;11:12'];
$trasa['1007_1'] = ['Praha hl.n.;11:44','Havířov;15:24'];
$trasa['1009_1'] = ['Praha hl.n.;13:44','Havířov;17:24'];
$trasa['1010_1'] = ['Návsí;9:47','Praha hl.n.;14:12'];
$trasa['1010_2'] = ['Havířov;10:30','Praha hl.n.;14:12'];
$trasa['1012_1'] = ['Košice;8:00','Praha hl.n.;16:12'];
$trasa['1013_1'] = ['Praha hl.n.;15:44','Návsí;20:04'];
$trasa['1014_1'] = ['Havířov;14:30','Praha hl.n.;18:12'];
$trasa['1015_1'] = ['Praha hl.n.;16:44','Staré Město u Uherského Hradiště;19:50'];
$trasa['1016_1'] = ['Havířov;16:30','Praha hl.n.;20:12'];
$trasa['1017_1'] = ['Praha hl.n.;17:44','Návsí;22:04'];
$trasa['1018_1'] = ['Havířov;18:30','Praha hl.n.;22:12'];
$trasa['1019_1'] = ['Praha hl.n.;19:44','Návsí;0:04'];
$trasa['1021_1'] = ['Praha hl.n.;21:44','Košice;6:14'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts101 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


