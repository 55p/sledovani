<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = '31.12.2016 23:59:59';

$obeh[1] = array('5276_1', '5277_1');

$omezeni['5276_1'] = '1112,1712,1812';
$omezeni['5277_1'] = '1112,1712,1812';

$trasa['5276_1'] = array('Ústí nad Labem hl.n.;9:18', 'Dresden Hbf;10:21');
$trasa['5277_1'] = array('Dresden Hbf;16:00', 'Ústí nad Labem hl.n.;17:03');


@$ts309 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>