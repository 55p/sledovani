<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('243_1', '242_1');

$omezeni['242_1'] = '7,1704,0105,0805,-2512,-1604,-3004,-0705';
$omezeni['243_1'] = '5,1304,0407,2710,1611,-3012,-1404,-0707,-2910,-1711';

$trasa['242_1'] = array('Košice;11:22','Ostrava-Svinov;15:59');
$trasa['243_1'] = array('Ostrava-Svinov;16:37','Košice;21:06');






@$ts146 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>