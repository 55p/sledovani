<?php 
$zacatekPlatnosti = '4.9.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['675_1', '670_1', '683_1', '684_1', '689_1', '674_1', '6968_1'];

$omezeni['670_1'] = 'X';
$omezeni['674_1'] = 'X';
$omezeni['675_1'] = 'X';
$omezeni['683_1'] = 'X';
$omezeni['684_1'] = 'X';
$omezeni['689_1'] = 'X';
$omezeni['6968_1'] = 'X';

$trasa['670_1'] = ['Praha hl.n.;8:51','Děčín hl.n.;10:31'];
$trasa['674_1'] = ['Praha hl.n.;19:51','Ústí nad Labem hl.n.;21:14'];
$trasa['675_1'] = ['Děčín hl.n.;6:24','Praha hl.n.;8:08'];
$trasa['683_1'] = ['Děčín hl.n.;11:24','Praha hl.n.;13:08'];
$trasa['684_1'] = ['Praha hl.n.;14:51','Děčín hl.n.;16:31'];
$trasa['689_1'] = ['Děčín hl.n.;17:24','Praha hl.n.;19:08'];
$trasa['6968_1'] = ['Ústí nad Labem západ;22:24','Děčín hl.n.;22:55'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts103 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


