<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';
$obeh[1] = array('1006_1', '1011_1');
$obeh[2] = array('1002_1', '1007_1', '1014_1', '1019_1');
$obeh[3] = array('101019_1', '1010_1', '1015_1');
$obeh[4] = array('101018_1', '1003_1', '1018_1');
$obeh[5] = array('1004_1', '1009_1', '1016_1');
$obeh[6] = array('1001_1', '1008_1', '1008_2', '1013_1');
$obeh[7] = array('1000_1', '1005_1', '1012_1', '1017_1');

$omezeni['1000_1'] = 'X,6';
$omezeni['1001_1'] = 'X,6';
$omezeni['1008_1'] = 'X,6';
$omezeni['1008_2'] = 'T';
$omezeni['1018_1'] = '4,5,7';
$omezeni['1019_1'] = '4,5,7';
$omezeni['101018_1'] = '5,6,1';
$omezeni['101019_1'] = '5,6,1';

$trasa['1000_1'] = array('Návsí;3:37', 'Praha hl.n.;8:10');
$trasa['1001_1'] = array('Praha hl.n.;5:48', 'Havířov;9:36');
$trasa['1002_1'] = array('Návsí;4:37', 'Praha hl.n.;9:10');
$trasa['1003_1'] = array('Praha hl.n.;7:48', 'Košice;15:52');
$trasa['1004_1'] = array('Návsí;5:37', 'Praha hl.n.;10:10');
$trasa['1005_1'] = array('Praha hl.n.;9:48', 'Havířov;13:36');
$trasa['1006_1'] = array('Martin;6:36', 'Praha hl.n.;12:10');
$trasa['1007_1'] = array('Praha hl.n.;11:48', 'Havířov;15:36');
$trasa['1008_1'] = array('Havířov;10:17', 'Praha hl.n.;14:10');
$trasa['1008_2'] = array('Návsí;9:37', 'Praha hl.n.;14:10');
$trasa['1009_1'] = array('Praha hl.n.;13:48', 'Havířov;17:36');
$trasa['1010_1'] = array('Košice;8:04', 'Praha hl.n.;16:10');
$trasa['1011_1'] = array('Praha hl.n.;15:48', 'Martin;21:18');
$trasa['1012_1'] = array('Havířov;14:17', 'Praha hl.n.;18:10');
$trasa['1013_1'] = array('Praha hl.n.;16:48', 'Návsí;21:17');
$trasa['1014_1'] = array('Havířov;16:17', 'Praha hl.n.;20:10');
$trasa['1015_1'] = array('Praha hl.n.;17:48', 'Návsí;22:17');
$trasa['1016_1'] = array('Havířov;18:17', 'Praha hl.n.;22:10');
$trasa['1017_1'] = array('Praha hl.n.;19:48', 'Návsí;0:17');
$trasa['1018_1'] = array('Košice;21:23', 'Vrútky;0:04');
$trasa['101018_1'] = array('Vrútky;0:05', 'Praha hl.n.;6:18');
$trasa['1019_1'] = array('Praha hl.n.;21:56', 'Zábřeh na Moravě;23:57');
$trasa['101019_1'] = array('Zábřeh na Moravě;0:00', 'Košice;7:00');

@$ts191 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>