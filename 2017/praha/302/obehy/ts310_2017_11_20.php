<?php 
$zacatekPlatnosti = '9.11.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['537_1', '700_1'];

$trasa['537'] = ['Praha-Holešovice;16:42', 'České Budějovice;19:02'];
$trasa['700'] = ['České Budějovice;20:05', 'Praha hl.n.;22:27'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts310 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


