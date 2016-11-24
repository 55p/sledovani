<?php 
$zacatekPlatnosti = '2.12.2017';
$konecPlatnosti = NULL;

$obeh[1] = array('5276_1', '5277_1');

$omezeni['5276_1'] = '0212,0312,0912';
$omezeni['5277_1'] = '0212,0312,0912';

$trasa['5276_1'] = array('Ústí nad Labem hl.n.;9:18', 'Dresden Hbf;10:21');
$trasa['5277_1'] = array('Dresden Hbf;16:00', 'Ústí nad Labem hl.n.;17:03');


@$ts309 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>