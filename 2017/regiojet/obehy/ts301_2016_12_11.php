<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1030_1', '1031_1'];
$obeh[2] = ['1032_1', '1033_1'];


$trasa['1030_1'] = ['Staré Město u Uherského Hradiště;4:44','Praha hl.n.;8:47'];
$trasa['1031_1'] = ['Praha hl.n.;15:19','Bratislava-Nové Mesto;19:22'];
$trasa['1032_1'] = ['Bratislava-Nové Mesto;5:31','Praha hl.n.;9:42'];
$trasa['1033_1'] = ['Praha hl.n.;17:19','Staré Město u Uherského Hradiště;21:14'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


