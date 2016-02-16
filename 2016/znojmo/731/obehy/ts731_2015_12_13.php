<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4500_1', '4515_1', '4518_1', '4531_1');

$omezeni['4500_1'] = 'X';
$omezeni['4515_1'] = 'X';
$omezeni['4518_1'] = 'X';
$omezeni['4531_1'] = 'X';

$trasa['4500_1'] = array('Břeclav;4:53', 'Znojmo;6:22');
$trasa['4515_1'] = array('Znojmo;12:55', 'Břeclav;14:29');
$trasa['4518_1'] = array('Břeclav;15:31', 'Znojmo;16:53');
$trasa['4531_1'] = array('Znojmo;17:55', 'Břeclav;19:26');

@$ts731 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>