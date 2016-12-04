<?php 
$zacatekPlatnosti = '3.1.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('477_1', '276_1');
$obeh[2] = array('121_1', '', '124_1', '581_1');
$obeh[3] = array('476_1', '273_1', '272_1');

$trasa['476_1'] = array('Brno hl.n.;1:11','Praha hl.n.;3:45');
$trasa['477_1'] = array('Praha hl.n.;0:00','Budapest Keleti;8:37');

$trasa['121_1'] = ['Praha hl.n.;5:22', 'Žilina;10:48'];
$trasa['124_1'] = ['Žilina;13:12', 'Praha hl.n.;18:39'];
$trasa['272_1'] = ['Budapest-Keleti;15:25', 'Praha hl.n.;22:09'];
$trasa['273_1'] = ['Praha hl.n.;5:49', 'Budapest-Keleti;12:35'];
$trasa['276_1'] = ['Budapest-Keleti;11:25', 'Praha hl.n.;18:06'];
$trasa['581_1'] = ['Praha hl.n.;21:00', 'Brno hl.n.;23:44'];

@$ts311 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>