<?php 
$zacatekPlatnosti = '30.10.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7502_1', '775_1', '1962_1', '1967_1', '1965_1');
$obeh[2] = array('778_1', '777_1', '1964_1', '7503_1');
$obeh[3] = array('1960_1', '7547_1', '776_1', '779_1');

$omezeni['1960_1'] = '25';
$omezeni['1965_1'] = 'X';
$omezeni['1967_1'] = '25';
$omezeni['7547_1'] = '25';

$trasa['1960_1'] = array('Klatovy;8:02','Nýrsko;8:19');
$trasa['1962_1'] = array('Klatovy;12:02','Nýrsko;12:20');
$trasa['1964_1'] = array('Klatovy;16:04','Nýrsko;16:20');
$trasa['1965_1'] = array('Nýrsko;15:39','Klatovy;15:56');
$trasa['1967_1'] = array('Nýrsko;15:39','Klatovy;15:56');
$trasa['7502_1'] = array('Klatovy;6:58','Nýrsko;7:16');
$trasa['7503_1'] = array('Nýrsko;18:22','Klatovy;18:41');
$trasa['7547_1'] = array('Nýrsko;11:38','Klatovy;11:55');
$trasa['775_1'] = array('Nýrsko;9:38','Klatovy;9:55');
$trasa['776_1'] = array('Klatovy;14:02','Nýrsko;14:18');
$trasa['777_1'] = array('Nýrsko;13:38','Klatovy;13:55');
$trasa['778_1'] = array('Klatovy;10:02','Nýrsko;10:19');
$trasa['779_1'] = array('Nýrsko;17:38','Klatovy;17:55');


@$ts718 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>