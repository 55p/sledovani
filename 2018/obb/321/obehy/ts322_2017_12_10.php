<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['72_1', '371_1'];
$obeh[2] = ['74_1', '373_1'];


$trasa['371_1'] = ['Praha hl.n.;14:51','Graz Hbf;21:33'];
$trasa['373_1'] = ['Praha hl.n.;16:51','Graz Hbf;23:33'];
$trasa['72_1'] = ['Graz Hbf;6:26','Praha hl.n.;13:07'];
$trasa['74_1'] = ['Graz Hbf;8:26','Praha hl.n.;15:07'];

$poznamkaObehu['72_1'] = ['pk', 'postrk'];
$poznamkaObehu['74_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts322 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


