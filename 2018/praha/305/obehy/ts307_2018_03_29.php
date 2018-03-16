<?php 
$zacatekPlatnosti = '29.3.2018';
$konecPlatnosti = '30.10.2018 23:59:59';

$obeh[1] = ['675_1', '674_1', '6968_1', '6991_1', '5274_1', '5275_1', '6992_1'];

$omezeni['674_1'] = 'X5,2903,0705,0407,2909';
$omezeni['675_1'] = 'X1,0205,0905';
$omezeni['5274_1'] = '25';
$omezeni['5275_1'] = '25';
$omezeni['6968_1'] = 'X5,2903,0705,0407,2709';
$omezeni['6991_1'] = '25';
$omezeni['6992_1'] = '25';

$trasa['5274_1'] = ['Ústí nad Labem hl.n.;9:19','Dresden Hbf;10:21'];
$trasa['5275_1'] = ['Dresden Hbf;17:36','Ústí nad Labem hl.n.;18:37'];
$trasa['6991_1'] = ['Děčín hl.n.;8:24','Ústí nad Labem hl.n.;8:40'];
$trasa['6992_1'] = ['Ústí nad Labem hl.n.;17:05','Děčín hl.n.;17:28'];
$trasa['674_1'] = ['Praha hl.n.;19:51', 'Ústí nad Labem hl.n.;21:15'];
$trasa['675_1'] = ['Děčín hl.n.;6:26', 'Praha hl.n.;8:08'];
$trasa['6968_1'] = ['Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55'];
//sem patri stazene trasy




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
unset($poznamkaObehu);


