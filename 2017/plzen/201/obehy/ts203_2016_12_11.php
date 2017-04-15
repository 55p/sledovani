<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = '31.3.2017 23:59:59';

$obeh[1] = ['1981_1', '1990_1', '7384_1', '1988_1', '1960_1', '7519_1', '1962_1', '7521_1'];

$omezeni['1960_1'] = 'N';
$omezeni['1962_1'] = 'N';
$omezeni['1981_1'] = 'X, 6';
$omezeni['1988_1'] = 'X5';
$omezeni['1990_1'] = 'zX';
$omezeni['7384_1'] = 'zX';
$omezeni['7519_1'] = 'N';
$omezeni['7521_1'] = 'N';

$trasa['1960_1'] = ['Plzeň hl.n.;7:02', 'Klatovy;7:56'];
$trasa['1962_1'] = ['Plzeň hl.n.;11:02', 'Klatovy;11:56'];
$trasa['1981_1'] = ['Cheb;5:04', 'Plzeň hl.n.;6:58'];
$trasa['1988_1'] = ['Plzeň hl.n.;15:01', 'Cheb;17:01'];
$trasa['1990_1'] = ['Plzeň hl.n.;17:00', 'Mariánské Lázně;18:07'];
$trasa['7384_1'] = ['Mariánské Lázně;18:40', 'Cheb;19:10'];
$trasa['7519_1'] = ['Klatovy;8:46', 'Plzeň hl.n.;9:46'];
$trasa['7521_1'] = ['Klatovy;12:46', 'Plzeň hl.n.;13:46'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts203 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


