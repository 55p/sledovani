<?php 
$zacatekPlatnosti = '1.10.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['531_1', '532_1'];

$trasa['531_1'] = ['České Budějovice;10:19','Kájov;11:05'];
$trasa['532_1'] = ['Kájov;13:58','České Budějovice;14:45'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts730 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


