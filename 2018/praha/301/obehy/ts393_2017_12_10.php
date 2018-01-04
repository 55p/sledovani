<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = '3.1.2018 23:59:59';

$obeh[2] = ['362_1', '351_1', '356_1', '357_1', '350_1', '363_1'];

$trasa['350_1'] = ['Praha hl.n.;17:33','Plzeň hl.n.;18:58'];
$trasa['351_1'] = ['Plzeň hl.n.;9:01','Praha hl.n.;10:31'];
$trasa['356_1'] = ['Praha hl.n.;11:33','Plzeň hl.n.;12:58'];
$trasa['357_1'] = ['Plzeň hl.n.;15:01','Praha hl.n.;16:31'];
$trasa['362_1'] = ['Praha hl.n.;5:33','Plzeň hl.n.;6:56'];
$trasa['363_1'] = ['Plzeň hl.n.;21:01','Praha hl.n.;22:31'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts393 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


