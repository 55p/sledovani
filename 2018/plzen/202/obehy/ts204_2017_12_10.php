<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['8993_1', '8942_1', '8903_1', '8912_1', '8909_1', '8950_1', '8951_1', '1980_1', '7029_1', '1989_1', '8960_1', '8945_1', '8944_1', '8905_1', '8914_1', '8913_1', '8962_1', '8917_1'];

$omezeni['1980_1'] = 'X5';
$omezeni['1989_1'] = 'X5';
$omezeni['7029_1'] = 'X5';
$omezeni['8903_1'] = 'X1234';
$omezeni['8905_1'] = '25';
$omezeni['8909_1'] = 'X1234';
$omezeni['8912_1'] = 'X1234';
$omezeni['8914_1'] = '25';
$omezeni['8917_1'] = '6';
$omezeni['8913_1'] = '25';
$omezeni['8942_1'] = 'X';
$omezeni['8944_1'] = '25';
$omezeni['8945_1'] = '25';
$omezeni['8950_1'] = 'X1234';
$omezeni['8951_1'] = 'X1234';
$omezeni['8960_1'] = 'T';
$omezeni['8962_1'] = '25';
$omezeni['8993_1'] = 'X1';

$trasa['8993_1'] = ['Plzeň hl.n.;4:15','Nepomuk;4:48'];
$trasa['8913_1'] = ['Plzeň hl.n.;17:08', 'Horažďovice předměstí;18:16'];
$trasa['1980_1'] = ['Plzeň hl.n.;7:05', 'Cheb;8:42'];
$trasa['1989_1'] = ['Karlovy Vary;14:12', 'Plzeň hl.n.;16:53'];
$trasa['7029_1'] = ['Cheb;12:45', 'Karlovy Vary;13:41'];
$trasa['8903_1'] = ['Plzeň hl.n.;10:08', 'Horažďovice předměstí;11:16'];
$trasa['8905_1'] = ['Plzeň hl.n.;13:08', 'Horažďovice předměstí;14:16'];
$trasa['8909_1'] = ['Plzeň hl.n.;15:08', 'Nepomuk;15:50'];
$trasa['8912_1'] = ['Horažďovice předměstí;12:43', 'Plzeň hl.n.;13:53'];
$trasa['8914_1'] = ['Horažďovice předměstí;14:43', 'Plzeň hl.n.;15:53'];
$trasa['8917_1'] = ['Plzeň hl.n.;21:08', 'Nepomuk;21:50'];
$trasa['8942_1'] = ['Nepomuk;5:38', 'Plzeň hl.n.;6:25'];
$trasa['8944_1'] = ['Nepomuk;9:08', 'Plzeň hl.n.;9:53'];
$trasa['8945_1'] = ['Plzeň hl.n.;8:08', 'Nepomuk;8:50'];
$trasa['8950_1'] = ['Nepomuk;16:08', 'Plzeň hl.n.;16:53'];
$trasa['8951_1'] = ['Plzeň hl.n.;18:08', 'Nepomuk;18:50'];
$trasa['8960_1'] = ['Nepomuk;6:09', 'Plzeň hl.n.;6:53'];
$trasa['8962_1'] = ['Horažďovice předměstí;18:43', 'Plzeň hl.n.;19:53'];


$typ['8993_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts204 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


