<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = '23.12.2017 23:59:59';

$obeh[1] = ['6991_1', '5276_1', '5277_1', '6992_1'];

$omezeni['5276_1'] = '25';
$omezeni['5277_1'] = '25';
$omezeni['6991_1'] = '25';
$omezeni['6992_1'] = '25';

$trasa['5276_1'] = ['Ústí nad Labem hl.n.;9:19','Dresden Hbf;10:21'];
$trasa['5277_1'] = ['Dresden Hbf;15:36','Ústí nad Labem hl.n.;16:37'];
$trasa['6991_1'] = ['Děčín hl.n.;8:24','Ústí nad Labem hl.n.;8:40'];
$trasa['6992_1'] = ['Ústí nad Labem hl.n.;17:05','Děčín hl.n.;17:28'];



$typ['6991_1'] = 'Sv';
$typ['6992_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts307 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


