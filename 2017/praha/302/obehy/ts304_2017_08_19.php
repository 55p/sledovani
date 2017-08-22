<?php 
$zacatekPlatnosti = '19.8.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['300476_1', '123_1', '124_1', '581_1'];

$trasa['300476_1'] = ['Brno hl.n.;1:11','Praha hl.n.;3:45'];
$trasa['123_1'] = ['Praha hl.n.;7:22', 'Púchov;11:48'];
$trasa['124_1'] = ['Púchov;14:12', 'Praha hl.n.;18:39'];
$trasa['581_1'] = ['Praha hl.n.;21:00', 'Brno hl.n.;23:44'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts304 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


