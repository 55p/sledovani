<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['70_1', '79_1', '758_1'];
$obeh[2] = ['553_1', '74_1', '375_1'];


$trasa['375_1'] = ['Praha hl.n.;18:51','Wien Hbf;22:49'];
$trasa['553_1'] = ['Wien Hbf;6:56','Graz Hbf;9:33'];
$trasa['70_1'] = ['Wien Hbf;7:10','Praha hl.n.;11:07'];
$trasa['74_1'] = ['Graz Hbf;10:26','Praha hl.n.;17:07'];
$trasa['758_1'] = ['Graz Hbf;20:25','Wien Hbf;23:03'];
$trasa['79_1'] = ['Praha hl.n.;12:51;g;1933'];

$poznamkaObehu['70_1'] = ['pk', 'postrk'];
$poznamkaObehu['758_1'] = ['pk', 'postrk'];
$poznamkaObehu['74_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts323 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


