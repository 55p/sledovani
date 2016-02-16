<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1306_1', '1307_1');

$omezeni['1306_1'] = '3,7';
$omezeni['1307_1'] = '1,4';

$trasa['1306_1'] = array('Bohumín;5:40','Odstavné nádraží Praha-Jih;16:29');
$trasa['1307_1'] = array('Odstavné nádraží Praha-Jih;3:28','Bohumín;14:16');





@$ts143 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>