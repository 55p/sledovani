<?php 
$zacatekPlatnosti = '1.10.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['8949_1', '8948_1', '8911_1', '8902_1', '8945_1', '8944_1'];

$omezeni['8902_1'] = '6';
$omezeni['8911_1'] = 'X5';
$omezeni['8944_1'] = '6';
$omezeni['8945_1'] = '6';
$omezeni['8948_1'] = 'X5';
$omezeni['8949_1'] = 'X5';

$trasa['8902_1'] = ['Horažďovice předměstí;4:47', 'Plzeň hl.n.;5:54'];
$trasa['8911_1'] = ['Plzeň hl.n.;16:08', 'Horažďovice předměstí;17:16'];
$trasa['8944_1'] = ['Nepomuk;9:08', 'Plzeň hl.n.;9:53'];
$trasa['8945_1'] = ['Plzeň hl.n.;8:08', 'Nepomuk;8:50'];
$trasa['8948_1'] = ['Nepomuk;14:08', 'Plzeň hl.n.;14:53'];
$trasa['8949_1'] = ['Plzeň hl.n.;12:08', 'Nepomuk;12:50'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts205 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


