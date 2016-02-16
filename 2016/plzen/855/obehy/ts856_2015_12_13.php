<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8101_1', '108190_1', '8106_1', '8107_1', '8103_1', '18009_1', '18006_1', '8112_1', '8113_1');
$obeh[2] = array('8102_1', '8105_1', '8110_1', '8104_1', '8105_2', '8110_2', '8111_1', '18017_1');
$obeh[3] = array('8100_1', '8103_2', '8108_1', '18076_1', '8106_2', '8109_1', '8114_1');

$omezeni['108190_1'] = 'X';
$omezeni['18006_1'] = '6,T';
$omezeni['18009_1'] = '6,T';
$omezeni['18076_1'] = '6,T';
$omezeni['8100_1'] = 'X';
$omezeni['8101_1'] = 'X';
$omezeni['8102_1'] = 'X';
$omezeni['8103_1'] = '6,T';
$omezeni['8103_2'] = 'X';
$omezeni['8104_1'] = '6,T';
$omezeni['8105_1'] = 'X';
$omezeni['8105_2'] = '6,T';
$omezeni['8106_1'] = 'X';
$omezeni['8106_2'] = '6,T';
$omezeni['8107_1'] = 'X';
$omezeni['8108_1'] = 'X';
$omezeni['8110_1'] = 'X';
$omezeni['8110_2'] = '6,T';

$trasa['108190_1'] = array('Volary;8:55','Černý Kříž;9:03');
$trasa['8105_2'] = array('České Budějovice;10:19','Horní Planá;11:56');
$trasa['8110_2'] = array('Horní Planá;13:58','České Budějovice;15:33');

$poznamkaObehu['108190_1'] = array('pk', 'postrk');

$typ['108190_1'] = 'Sv';

$trasa['18006_1'] = array('Volary;13:21', 'Nové Údolí;13:44');
$trasa['18009_1'] = array('Nové Údolí;12:15', 'Volary;12:37');
$trasa['18017_1'] = array('Černý Kříž;18:29', 'Volary;18:37');
$trasa['18076_1'] = array('Volary;8:21', 'Nové Údolí;8:44');
$trasa['8100_1'] = array('Volary;4:35', 'České Budějovice;6:57');
$trasa['8101_1'] = array('České Budějovice;6:07', 'Volary;8:39');
$trasa['8102_1'] = array('Volary;6:40', 'České Budějovice;8:54');
$trasa['8103_1'] = array('České Budějovice;8:08', 'Nové Údolí;10:41');
$trasa['8103_2'] = array('České Budějovice;8:08', 'Nové Údolí;10:41');
$trasa['8105_1'] = array('České Budějovice;10:19', 'Černý Kříž;12:22');
$trasa['8106_1'] = array('Černý Kříž;9:31', 'České Budějovice;11:33');
$trasa['8106_2'] = array('Nové Údolí;9:15', 'České Budějovice;11:33');
$trasa['8107_1'] = array('České Budějovice;12:19', 'Nové Údolí;14:41');
$trasa['8108_1'] = array('Nové Údolí;11:15', 'České Budějovice;13:33');
$trasa['8109_1'] = array('České Budějovice;14:19', 'Nové Údolí;16:41');
$trasa['8110_1'] = array('Černý Kříž;13:31', 'České Budějovice;15:33');
$trasa['8111_1'] = array('České Budějovice;16:08', 'Černý Kříž;18:22');
$trasa['8112_1'] = array('Nové Údolí;15:15', 'České Budějovice;17:39');
$trasa['8113_1'] = array('České Budějovice;18:21', 'Volary;20:45');
$trasa['8114_1'] = array('Nové Údolí;17:15', 'České Budějovice;19:39');



@$ts856 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>