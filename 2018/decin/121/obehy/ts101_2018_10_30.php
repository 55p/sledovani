<?php 
$zacatekPlatnosti = '30.10.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['675_1', '682_1', '1698_1'];
$obeh[2] = ['601_1', '71260_1', '677_1', '678_1', '674_1', '6968_1'];

$omezeni['1698_1'] = 'X';
$omezeni['601_1'] = 'X';
$omezeni['674_1'] = 'X5';
$omezeni['675_1'] = 'X';
$omezeni['677_1'] = 'X';
$omezeni['678_1'] = 'X1234';
$omezeni['682_1'] = 'X';
$omezeni['6968_1'] = 'X5';
$omezeni['71260_1'] = 'X';

$trasa['601_1'] = ['Kadaň-Prunéřov;4:53','Ústí nad Labem hl.n.;6:07'];
$trasa['71260_1'] = ['Ústí nad Labem hl.n.;6:15','Děčín hl.n.;6:38'];

$trasa['1698_1'] = ['Ústí nad Labem hl.n.;17:46', 'Chomutov;18:49'];
$trasa['674_1'] = ['Praha hl.n.;19:51', 'Ústí nad Labem hl.n.;21:15'];
$trasa['675_1'] = ['Děčín hl.n.;6:26', 'Praha hl.n.;8:08'];
$trasa['677_1'] = ['Děčín hl.n.;7:26', 'Praha hl.n.;9:08'];
$trasa['678_1'] = ['Praha hl.n.;17:51', 'Děčín hl.n.;19:32'];
$trasa['682_1'] = ['Praha hl.n.;15:51', 'Ústí nad Labem hl.n.;17:15'];
$trasa['6968_1'] = ['Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts101 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


