<?php 
$zacatekPlatnosti = '25.2.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1003_1', '1020_1'];


$trasa['1003_1'] = ['Praha hl.n.;7:44','Košice;15:44'];
$trasa['1020_1'] = ['Košice;21:22','Praha hl.n.;5:58'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts102 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


