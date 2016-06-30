<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1827_1','1828_1', '1829_1', '1828_2');

$omezeni['1827_1'] = '6';
$omezeni['1828_1'] = '6';
$omezeni['1828_2'] = 'T';
$omezeni['1829_1'] = 'T';

$trasa['1828_2'] = array('Znojmo;17:58', 'Brno hl.n.;19:58');
$trasa['1827_1'] = array('Brno-Královo Pole;7:45', 'Šatov;10:33');
$trasa['1828_1'] = array('Šatov;17:43', 'Brno-Královo Pole;20:19');
$trasa['1829_1'] = array('Brno-Královo Pole;9:32', 'Znojmo;11:58');


@$ts707 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>