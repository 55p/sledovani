<?php 
$konecPlatnosti = '20.12.2015 23:59:59';
$zacatekPlatnosti = '26.11.2016';

$obeh[1] = array('6991_1', '5276_1', '5277_1', '6992_1');

$omezeni['5276_1'] = '6,7';
$omezeni['5277_1'] = '6,7';
$omezeni['6991_1'] = '6,7';
$omezeni['6992_1'] = '6,7';

$typ[6991] = $typ[6992] = 'Sv';
$typ[5276] = $typ[5277] = 'Os';

$trasa['5276_1'] = array('Ústí nad Labem hl.n.;9:18', 'Dresden Hbf;10:21');
$trasa['5277_1'] = array('Dresden Hbf;16:05', 'Ústí nad Labem hl.n.;17:10');

$trasa['6992_1'] = array('Ústí nad Labem hl.n.;17:20', 'Děčín hl.n.;17:37');
$trasa['6991_1'] = array('Děčín hl.n.;8:24', 'Ústí nad Labem hl.n.;8:40');

@$ts305a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, $konecPlatnosti)); 
@$ts305a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, null)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>