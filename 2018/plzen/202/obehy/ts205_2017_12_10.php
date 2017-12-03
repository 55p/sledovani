<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['8903_1', '8912_1', '8909_1', '8950_1', '8951_1', '8992_1'];

$omezeni['8903_1'] = 'X5';
$omezeni['8909_1'] = 'X5';
$omezeni['8912_1'] = 'X5';
$omezeni['8950_1'] = 'X5';
$omezeni['8951_1'] = 'X5';
$omezeni['8992_1'] = 'X5';

$trasa['8992_1'] = ['Nepomuk;19:19','Plzeň hl.n.;20:20'];
$trasa['8903_1'] = ['Plzeň hl.n.;10:08', 'Horažďovice předměstí;11:16'];
$trasa['8909_1'] = ['Plzeň hl.n.;15:08', 'Nepomuk;15:50'];
$trasa['8912_1'] = ['Horažďovice předměstí;12:43', 'Plzeň hl.n.;13:53'];
$trasa['8950_1'] = ['Nepomuk;16:08', 'Plzeň hl.n.;16:53'];
$trasa['8951_1'] = ['Plzeň hl.n.;18:08', 'Nepomuk;18:50'];

$typ['8992_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts205 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


