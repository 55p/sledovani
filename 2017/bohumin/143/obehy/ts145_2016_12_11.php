<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1306_1', '1307_1', '1300_1', '1301_1');

$omezeni['1300_1'] = '1,5';
$omezeni['1301_1'] = '4,7';
$omezeni['1306_1'] = '3';
$omezeni['1307_1'] = '4';

$trasa['1300_1'] = array('Bohumín;0:00','Nymburk hl.n.;7:47');
$trasa['1301_1'] = array('Nymburk hl.n.;18:07','Bohumín;2:36');
$trasa['1306_1'] = array('Bohumín;5:51','Praha odstavné nádraží;16:17');
$trasa['1307_1'] = array('Praha odstavné nádraží;3:23','Bohumín;13:18');






@$ts145 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>