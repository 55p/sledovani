<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('525_1', '898_1');

$omezeni['525_1'] = '6';
$omezeni['898_1'] = '6';

$trasa['525_1'] = array('Praha hl.n.;0:01', 'Pardubice hl.n.;1:04');
$trasa['898_1'] = array('Pardubice hl.n.;5:58', 'Praha hl.n.;7:03');

@$ts305 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>