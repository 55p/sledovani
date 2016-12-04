<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['8906_1', '8908_1', '8903_1', '8912_1', '8909_1', '8950_1', '8951_1', '8909_2', '8916_1', '8915_1', '8992_1', '8955_1'];
$obeh[2] = ['8940_1', '8943_1', '8906_2', '8949_1', '8948_1', '8911_1', '8902_1', '8960_1', '8945_1', '8944_1', '7516_1', '1965_1', '8917_1', '8955_2'];
$obeh[3] = ['8902_2', '8940_2', '8901_1', '8910_1', '8905_1', '8914_1', '8913_1', '8918_1', '8917_2', '8917_3', '8955_3'];
$obeh[4] = ['8904_1', '663_1', '668_1', '1969_1', '8916_2', '8915_2'];
$obeh[5] = ['8961_1', '8960_2', '8945_2', '8944_2', '8947_1', '8946_1', '8907_1'];

$omezeni['1965_1'] = '6';
$omezeni['1969_1'] = 'X';
$omezeni['663_1'] = 'X';
$omezeni['668_1'] = 'X';
$omezeni['7516_1'] = '6';
$omezeni['8902_1'] = '6';
$omezeni['8902_2'] = 'X';
$omezeni['8904_1'] = 'X';
$omezeni['8906_1'] = '25';
$omezeni['8906_2'] = 'X';
$omezeni['8907_1'] = 'X';
$omezeni['8908_1'] = 'X';
$omezeni['8909_1'] = 'X';
$omezeni['8909_2'] = '6, N';
$omezeni['8911_1'] = 'X';
$omezeni['8915_1'] = '6, N';
$omezeni['8915_2'] = 'X';
$omezeni['8916_1'] = '6, N';
$omezeni['8916_2'] = 'X';
$omezeni['8917_1'] = 'N';
$omezeni['8917_2'] = 'X';
$omezeni['8917_3'] = '6';
$omezeni['8940_1'] = 'X';
$omezeni['8940_2'] = '6, N';
$omezeni['8943_1'] = 'X';
$omezeni['8944_1'] = '6, N';
$omezeni['8944_2'] = 'X';
$omezeni['8945_1'] = '6, N';
$omezeni['8945_2'] = 'X';
$omezeni['8946_1'] = 'X';
$omezeni['8947_1'] = 'X';
$omezeni['8948_1'] = 'X';
$omezeni['8949_1'] = 'X';
$omezeni['8950_1'] = 'X';
$omezeni['8951_1'] = 'X';
$omezeni['8955_1'] = 'X5';
$omezeni['8955_2'] = '6';
$omezeni['8955_3'] = 'N';
$omezeni['8960_1'] = 'N';
$omezeni['8960_2'] = 'X';
$omezeni['8961_1'] = 'X';
$omezeni['8992_1'] = 'X5';

$trasa['663_1'] = ['Plzeň hl.n.;8:02','České Budějovice;9:55'];
$trasa['668_1'] = ['České Budějovice;12:04','Plzeň hl.n.;13:57'];
$trasa['8992_1'] = ['Nepomuk;19:19','Plzeň hl.n.;20:20'];



$typ['8992_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts201 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


