<?php 
$zacatekPlatnosti = '30.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8103_1', '8108_1', '8109_1', '8114_1');
$obeh[2] = array('18076_1', '8106_1', '8107_1', '8112_1', '8113_1');


$trasa['18076_1'] = array('Volary;8:21', 'Nové Údolí;8:44');
$trasa['8103_1'] = array('České Budějovice;8:08', 'Nové Údolí;10:41');
$trasa['8106_1'] = array('Nové Údolí;9:15', 'České Budějovice;11:33');
$trasa['8107_1'] = array('České Budějovice;12:19', 'Nové Údolí;14:41');
$trasa['8108_1'] = array('Nové Údolí;11:15', 'České Budějovice;13:33');
$trasa['8109_1'] = array('České Budějovice;14:19', 'Nové Údolí;16:41');
$trasa['8112_1'] = array('Nové Údolí;15:15', 'České Budějovice;17:39');
$trasa['8113_1'] = array('České Budějovice;18:21', 'Volary;20:45');
$trasa['8114_1'] = array('Nové Údolí;17:15', 'České Budějovice;19:39');


@$ts755 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>