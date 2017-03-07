<?php 
$zacatekPlatnosti = '25.2.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['400_1', '1008_1', '1011_1', '409_1'];


$trasa['1008_1'] = ['Vrútky;6:45','Praha hl.n.;12:12'];
$trasa['1011_1'] = ['Praha hl.n.;14:44','Vrútky;19:55'];
$trasa['400_1'] = ['Košice;4:03','Vrútky;6:38'];
$trasa['409_1'] = ['Vrútky;20:07','Košice;22:44'];
  
if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts103 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


