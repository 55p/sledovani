<?php 
$zacatekPlatnosti = '6.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7901_1', '1252_1', '1247_1', '1242_1', '1251_1', '1240_1');

$omezeni['1240_1'] = '7';
$omezeni['1242_1'] = 'X5';
$omezeni['1247_1'] = 'X5';
$omezeni['1251_1'] = '7';
$omezeni['1252_1'] = 'X1';
$omezeni['7901_1'] = 'X1';

$trasa['1240_1'] = array('Příbram;19:20','Březnice;19:35');
$trasa['1242_1'] = array('Příbram;16:57','České Budějovice;18:43');
$trasa['1247_1'] = array('České Budějovice;13:10','Příbram;14:56');
$trasa['1251_1'] = array('České Budějovice;17:10','Příbram;18:56');
$trasa['1252_1'] = array('Příbram;6:57','České Budějovice;8:43');
$trasa['7901_1'] = array('Březnice;5:55','Příbram;6:18');



@$ts855 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>