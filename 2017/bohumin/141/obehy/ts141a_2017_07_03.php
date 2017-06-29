<?php 
$zacatekPlatnosti = '3.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['510_1', '509_1', '502_1', '511_1'];

$omezeni['502_1'] = 'XT';
$omezeni['509_1'] = 'XT';
$omezeni['510_1'] = 'T';
$omezeni['511_1'] = '6';

$trasa['502_1'] = ['Ostrava hl.n.;17:21', 'Praha hl.n.;20:22'];
$trasa['509_1'] = ['Praha hl.n.;13:37', 'Ostrava hl.n.;16:38'];
$trasa['510_1'] = ['Bohumín;9:12', 'Praha hl.n.;12:22'];
$trasa['511_1'] = ['Praha hl.n.;15:37', 'Bohumín;18:48'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts141a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


