<?php 
$zacatekPlatnosti = '6.5.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1252_1', '1247_1', '1240_1', '1251_1');

$omezeni['1240_1'] = 'X5,2710,1611';
$omezeni['1247_1'] = 'X5,2710,1611';
$omezeni['1251_1'] = '7,-0307,0607';
$omezeni['1252_1'] = 'X1,0707,-0407';


$trasa['1240_1'] = array('Praha hl.n.;17:42', 'České Budějovice;20:43');
$trasa['1247_1'] = array('České Budějovice;13:10', 'Praha hl.n.;16:11');
$trasa['1251_1'] = array('České Budějovice;17:10', 'Praha hl.n.;20:11');
$trasa['1252_1'] = array('Praha hl.n.;5:42', 'České Budějovice;8:43');




@$ts855 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>