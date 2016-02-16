<?php 
$zacatekPlatnosti = '29.6.2015';
$konecPlatnosti = '13.9.2015 23:59:59';
$obeh[1] = array('8109_1', '8114_1', '8129_1');
$obeh[2] = array('18076_1', '8110_1', '8121_1', '8126_1');
$obeh[3] = array('8117_1', '8122_1');

$trasa['18076_1'] = array('Volary;8:12', 'Nové Údolí;8:37');
$trasa['8109_1'] = array('České Budějovice;8:07', 'Nové Údolí;10:41');
$trasa['8110_1'] = array('Nové Údolí;9:15', 'České Budějovice;11:45');
$trasa['8114_1'] = array('Nové Údolí;11:15', 'České Budějovice;13:48');
$trasa['8117_1'] = array('České Budějovice;12:07', 'Nové Údolí;14:41');
$trasa['8121_1'] = array('České Budějovice;14:07', 'Nové Údolí;16:41');
$trasa['8122_1'] = array('Nové Údolí;15:15', 'České Budějovice;17:48');
$trasa['8126_1'] = array('Nové Údolí;17:15', 'České Budějovice;19:50');
$trasa['8129_1'] = array('České Budějovice;18:12', 'Volary;20:44');

$omezeni = array();


@$ts755 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>