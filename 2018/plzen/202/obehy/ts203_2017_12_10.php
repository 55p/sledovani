<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['8908_1', '8949_1', '8948_1', '8911_1', '8906_1', '8903_1', '8912_1', '8909_1', '8916_1', '8915_1'];
$obeh[2] = ['8904_1', '8902_1', '663_1', '668_1', '1969_1', '8962_1', '8917_1'];
$obeh[3] = ['8961_1', '8960_1', '8945_1', '8944_1', '8947_1', '8946_1', '8907_1', '8916_2', '8915_2'];
$obeh[4] = ['8902_2', '8901_1', '8910_1', '8905_1', '8914_1', '8913_1'];

$omezeni['1969_1'] = 'X';
$omezeni['8901_1'] = 'X';
$omezeni['8902_1'] = '25';
$omezeni['8902_2'] = 'X';
$omezeni['8903_1'] = '25';
$omezeni['8904_1'] = 'X';
$omezeni['8905_1'] = 'X';
$omezeni['8906_1'] = '25';
$omezeni['8907_1'] = 'X';
$omezeni['8908_1'] = 'X';
$omezeni['8909_1'] = '25';
$omezeni['8910_1'] = 'X';
$omezeni['8911_1'] = 'X';
$omezeni['8912_1'] = '25';
$omezeni['8913_1'] = 'X';
$omezeni['8914_1'] = 'X';
$omezeni['8915_1'] = '25';
$omezeni['8915_2'] = 'X';
$omezeni['8916_1'] = '25';
$omezeni['8916_2'] = 'X';
$omezeni['8917_1'] = 'XT';
$omezeni['8944_1'] = 'X';
$omezeni['8945_1'] = 'X';
$omezeni['8946_1'] = 'X';
$omezeni['8947_1'] = 'X';
$omezeni['8948_1'] = 'X';
$omezeni['8949_1'] = 'X';
$omezeni['8960_1'] = 'X';
$omezeni['8961_1'] = 'X';
$omezeni['8962_1'] = 'X';

$trasa['663_1'] = ['Plzeň hl.n.;8:02','České Budějovice;9:55'];
$trasa['668_1'] = ['České Budějovice;12:04','Plzeň hl.n.;13:57'];

$poznamkaObehu['663_1'] = [' Pl', ''];
$poznamkaObehu['668_1'] = [' Pl', ''];

$trasa['1969_1'] = ['Plzeň hl.n.;14:58', 'Strakonice;16:12'];
$trasa['8901_1'] = ['Plzeň hl.n.;7:08', 'Horažďovice předměstí;8:16'];
$trasa['8902_1'] = ['Horažďovice předměstí;4:47', 'Plzeň hl.n.;5:54'];
$trasa['8902_2'] = ['Horažďovice předměstí;4:47', 'Plzeň hl.n.;5:54'];
$trasa['8903_1'] = ['Plzeň hl.n.;10:08', 'Horažďovice předměstí;11:16'];
$trasa['8904_1'] = ['Horažďovice předměstí;6:13', 'Plzeň hl.n.;7:20'];
$trasa['8905_1'] = ['Plzeň hl.n.;13:08', 'Horažďovice předměstí;14:16'];
$trasa['8906_1'] = ['Horažďovice předměstí;6:43', 'Plzeň hl.n.;7:53'];
$trasa['8907_1'] = ['Plzeň hl.n.;14:08', 'Horažďovice předměstí;15:16'];
$trasa['8908_1'] = ['Horažďovice předměstí;7:43', 'Plzeň hl.n.;8:53'];
$trasa['8909_1'] = ['Plzeň hl.n.;15:08', 'Horažďovice předměstí;16:16'];
$trasa['8910_1'] = ['Horažďovice předměstí;10:43', 'Plzeň hl.n.;11:53'];
$trasa['8911_1'] = ['Plzeň hl.n.;16:08', 'Horažďovice předměstí;17:16'];
$trasa['8912_1'] = ['Horažďovice předměstí;12:43', 'Plzeň hl.n.;13:53'];
$trasa['8913_1'] = ['Plzeň hl.n.;17:08', 'Horažďovice předměstí;18:16'];
$trasa['8914_1'] = ['Horažďovice předměstí;14:43', 'Plzeň hl.n.;15:53'];
$trasa['8915_1'] = ['Plzeň hl.n.;19:08', 'Horažďovice předměstí;20:16'];
$trasa['8915_2'] = ['Plzeň hl.n.;19:08', 'Horažďovice předměstí;20:16'];
$trasa['8916_1'] = ['Horažďovice předměstí;16:43', 'Plzeň hl.n.;17:53'];
$trasa['8916_2'] = ['Horažďovice předměstí;16:43', 'Plzeň hl.n.;17:53'];
$trasa['8917_1'] = ['Plzeň hl.n.;21:08', 'Horažďovice předměstí;22:16'];
$trasa['8944_1'] = ['Nepomuk;9:08', 'Plzeň hl.n.;9:53'];
$trasa['8945_1'] = ['Plzeň hl.n.;8:08', 'Nepomuk;8:50'];
$trasa['8946_1'] = ['Nepomuk;12:08', 'Plzeň hl.n.;12:53'];
$trasa['8947_1'] = ['Plzeň hl.n.;11:08', 'Nepomuk;11:50'];
$trasa['8948_1'] = ['Nepomuk;14:08', 'Plzeň hl.n.;14:53'];
$trasa['8949_1'] = ['Plzeň hl.n.;12:08', 'Nepomuk;12:50'];
$trasa['8960_1'] = ['Strakonice;5:29', 'Plzeň hl.n.;6:53'];
$trasa['8961_1'] = ['Horažďovice předměstí;4:36', 'Strakonice;4:54'];
$trasa['8962_1'] = ['Strakonice;18:22', 'Plzeň hl.n.;19:53'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts203 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


