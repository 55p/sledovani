<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('477_1', '276_1');
$obeh[2] = array('121_1', '123_1', '124_1', '581_1');
$obeh[3] = array('476_1', '273_1', '272_1');

$omezeni['121_1'] = '-2512,-2612,-0101';
$omezeni['123_1'] = '2512,2612,0101';
$omezeni['476_1'] = '11';
$omezeni['581_1'] = '10';

$trasa['476_1'] = array('Brno hl.n.;1:11','Praha hl.n.;3:45');
$trasa['477_1'] = array('Praha hl.n.;0:00','Budapest Keleti;8:37');






@$ts311 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>