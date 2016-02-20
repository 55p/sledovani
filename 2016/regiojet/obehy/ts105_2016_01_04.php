<?php 
$zacatekPlatnosti = '4.1.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1004_1', '1007_1', '1016_1', '1021_1');
$obeh[2] = array('101021_1', '1012_1', '1017_1');

$omezeni['1001_1'] = 'X6';
$omezeni['1010_1'] = 'X6';
$omezeni['1010_2'] = 'T';

$trasa['1001_1'] = array('Praha hl.n.;5:46', 'Havířov;9:29');
$trasa['1002_1'] = array('Staré Město u Uherského Hradiště;5:50', 'Praha hl.n.;8:58');
$trasa['1004_1'] = array('Návsí;5:32', 'Praha hl.n.;9:58');
$trasa['1007_1'] = array('Praha hl.n.;11:46', 'Havířov;15:29');
$trasa['1009_1'] = array('Praha hl.n.;13:46', 'Havířov;17:29');
$trasa['1010_1'] = array('Havířov;10:11', 'Praha hl.n.;13:58');
$trasa['1010_2'] = array('Návsí;9:32', 'Praha hl.n.;13:58');
$trasa['1012_1'] = array('Košice;7:44', 'Praha hl.n.;15:58');
$trasa['1012_2'] = array('Havířov;12:11', 'Praha hl.n.;15:58');
$trasa['1015_1'] = array('Praha hl.n.;16:46', 'Staré Město u Uherského Hradiště;19:51');
$trasa['1016_1'] = array('Havířov;16:11', 'Praha hl.n.;19:58');
$trasa['1017_1'] = array('Praha hl.n.;17:46', 'Návsí;22:08');
$trasa['1018_1'] = array('Havířov;18:11', 'Praha hl.n.;21:58');
$trasa['1021_1'] = array('Praha hl.n.;21:46', 'Olomouc;0:06');
$trasa['101021_1'] = array('Olomouc;0:06', 'Košice;6:41');

@$ts105 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>