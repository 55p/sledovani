<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1252_1', '1247_1', '1240_1', '1251_1');

$omezeni['1240_1'] = '5,2212,1204,1304,0407,2709,1611,-3012,-1404,-0707,-2909,-1711';
$omezeni['1247_1'] = '5,2212,1204,1304,0407,2709,1611,-3012,-1404,-0707,-2909,-1711';
$omezeni['1251_1'] = 'T,-2412,-2512,-2612,-1404,-1504,-1604,-3004, -0705,-0507,-0607,-2809,-2810,-1711';
$omezeni['1252_1'] = '1,1804, 0205,0905, -2612,-1704,-0105,-0805';

$trasa['1240_1'] = array('Praha hl.n.;17:42', 'České Budějovice;20:43');
$trasa['1247_1'] = array('České Budějovice;13:09', 'Praha hl.n.;16:11');
$trasa['1251_1'] = array('České Budějovice;17:09', 'Praha hl.n.;20:11');
$trasa['1252_1'] = array('Praha hl.n.;5:42', 'České Budějovice;8:43');

@$ts855 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>