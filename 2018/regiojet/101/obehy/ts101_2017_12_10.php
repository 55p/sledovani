<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1001_1', '1010_1', '1010_2', '1015_1'];
$obeh[2] = ['1002_1', '1022_1', '1002_2', '1007_1', '1016_1', '1021_1'];
$obeh[3] = ['1012_1', '1017_1'];
$obeh[4] = ['1004_1', '1009_1', '1018_1'];
$obeh[5] = ['1000_1', '1005_1', '1014_1', '1019_1'];
$obeh[6] = ['1006_1', '1013_1'];

$omezeni['1000_1'] = 'X6';
$omezeni['1001_1'] = 'X6';
$omezeni['1002_1'] = 'X6';
$omezeni['1002_2'] = 'T';
$omezeni['1004_1'] = '11';
$omezeni['1006_1'] = '11';
$omezeni['1010_1'] = 'X6';
$omezeni['1010_2'] = 'T';
$omezeni['1012_1'] = '11';
$omezeni['1015_1'] = '10';
$omezeni['1017_1'] = '10';
$omezeni['1019_1'] = '10';
$omezeni['1021_1'] = '10';
$omezeni['1022_1'] = 'T';

$trasa['1000_1'] = ['Opava východ;4:15','Praha hl.n.;7:52'];
$trasa['1001_1'] = ['Praha hl.n.;5:48','Havířov;9:28'];
$trasa['1002_1'] = ['Návsí;4:24','Praha hl.n.;8:52'];
$trasa['1002_2'] = ['Ostrava-Svinov;5:36','Praha hl.n.;8:52'];
$trasa['1004_1'] = ['Návsí;5:24','Praha hl.n.;9:52'];
$trasa['1005_1'] = ['Praha hl.n.;9:48','Havířov;13:28'];
$trasa['1006_1'] = ['Návsí;6:24','Praha hl.n.;10:52'];
$trasa['1007_1'] = ['Praha hl.n.;11:48','Havířov;15:28'];
$trasa['1009_1'] = ['Praha hl.n.;13:48','Havířov;17:28'];
$trasa['1010_1'] = ['Havířov;10:07','Praha hl.n.;13:52'];
$trasa['1010_2'] = ['Návsí;9:24','Praha hl.n.;13:52'];
$trasa['1012_1'] = ['Košice;7:45','Praha hl.n.;15:52'];
$trasa['1013_1'] = ['Praha hl.n.;15:48','Opava východ;19:20'];
$trasa['1014_1'] = ['Havířov;14:07','Praha hl.n.;17:52'];
$trasa['1015_1'] = ['Praha hl.n.;16:48','Návsí;21:07'];
$trasa['1016_1'] = ['Havířov;16:07','Praha hl.n.;19:52'];
$trasa['1017_1'] = ['Praha hl.n.;17:48','Návsí;22:07'];
$trasa['1018_1'] = ['Havířov;18:07','Praha hl.n.;21:52'];
$trasa['1019_1'] = ['Praha hl.n.;19:48','Návsí;0:07'];
$trasa['1021_1'] = ['Praha hl.n.;21:48','Košice;6:14'];
$trasa['1022_1'] = ['Opava východ;5:15','Ostrava-Svinov;5:35'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts101 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


