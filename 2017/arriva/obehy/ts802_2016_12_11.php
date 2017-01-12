<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1043_1', '1040_1', '1041_1', '1042_1'];

$omezeni['1040_1'] = '6';
$omezeni['1041_1'] = '7';
$omezeni['1042_1'] = '7';
$omezeni['1043_1'] = '5';

$trasa['1040_1'] = ['Nitra;6:46', 'Praha hl.n.;13:29'];
$trasa['1041_1'] = ['Praha hl.n.;8:19', 'Trenčín;13:40'];
$trasa['1042_1'] = ['Trenčín;14:18', 'Praha hl.n.;19:32'];
$trasa['1043_1'] = ['Praha hl.n.;14:19', 'Nitra;21:15'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts802 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


