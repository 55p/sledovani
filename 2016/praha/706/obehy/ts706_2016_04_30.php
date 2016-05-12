<?php 
$zacatekPlatnosti = '30.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9055_1', '9058_1', '9063_1', '9064_1');
$obeh[2] = array('9057_1', '9062_1');

$omezeni['9055_1'] = '25';
$omezeni['9057_1'] = '25';
$omezeni['9058_1'] = '25';
$omezeni['9062_1'] = '25';
$omezeni['9063_1'] = '25';
$omezeni['9064_1'] = '25';


$trasa['9055_1'] = array('Praha hl.n.;8:25', 'Čerčany;10:11');
$trasa['9057_1'] = array('Praha hl.n.;9:22', 'Čerčany;11:08');
$trasa['9058_1'] = array('Čerčany;11:12', 'Praha hl.n.;13:05');
$trasa['9062_1'] = array('Čerčany;15:40', 'Praha hl.n.;17:35');
$trasa['9063_1'] = array('Praha hl.n.;13:55', 'Čerčany;15:39');
$trasa['9064_1'] = array('Čerčany;16:36', 'Praha hl.n.;18:35');


@$ts706 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>