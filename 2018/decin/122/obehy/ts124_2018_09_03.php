<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = '30.10.2018 23:59:59';

$obeh[1] = ['11214_1', '1161_1', '11212_1', '1163_1', '11210_1', '1165_1', '11208_1', '1167_1', '11206_1', '1169_1', '11204_1', '1171_1', '11202_1', '1173_1', '11200_1', '1175_1'];

$omezeni['1175_1'] = 'XT';
$omezeni['11214_1'] = 'X6';

$trasa['1161_1'] = ['Ústí nad Labem hl.n.;7:14','Děčín hl.n.;7:28'];
$trasa['1163_1'] = ['Ústí nad Labem hl.n.;9:14','Děčín hl.n.;9:28'];
$trasa['1165_1'] = ['Ústí nad Labem hl.n.;11:14','Děčín hl.n.;11:28'];
$trasa['1167_1'] = ['Ústí nad Labem hl.n.;13:14','Děčín hl.n.;13:28'];
$trasa['1169_1'] = ['Ústí nad Labem hl.n.;15:14','Děčín hl.n.;15:28'];
$trasa['1171_1'] = ['Ústí nad Labem hl.n.;17:14','Děčín hl.n.;17:28'];
$trasa['1173_1'] = ['Ústí nad Labem hl.n.;19:14','Děčín hl.n.;19:28'];
$trasa['1175_1'] = ['Ústí nad Labem hl.n.;21:20','Děčín hl.n.;21:36'];
$trasa['11200_1'] = ['Děčín hl.n.;20:16','Ústí nad Labem hl.n.;20:32'];
$trasa['11202_1'] = ['Děčín hl.n.;18:16','Ústí nad Labem hl.n.;18:32'];
$trasa['11204_1'] = ['Děčín hl.n.;16:16','Ústí nad Labem hl.n.;16:32'];
$trasa['11206_1'] = ['Děčín hl.n.;14:16','Ústí nad Labem hl.n.;14:32'];
$trasa['11208_1'] = ['Děčín hl.n.;12:16','Ústí nad Labem hl.n.;12:32'];
$trasa['11210_1'] = ['Děčín hl.n.;10:16','Ústí nad Labem hl.n.;10:32'];
$trasa['11212_1'] = ['Děčín hl.n.;8:16','Ústí nad Labem hl.n.;8:32'];
$trasa['11214_1'] = ['Děčín hl.n.;6:48','Ústí nad Labem hl.n.;7:04'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts124 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


