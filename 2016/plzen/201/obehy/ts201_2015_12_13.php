<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8906_1', '8908_1', '8903_1', '8912_1', '8909_1', '8909_2', '8950_1', '8916_1', '8951_1', '8915_1', '8955_1');
$obeh[2] = array('8940_1', '8943_1', '8906_2', '8949_1', '8948_1', '8911_1', '8917_1');
$obeh[3] = array('8940_2', '8902_1', '8901_1', '8910_1', '8905_1', '8914_1', '8913_1', '8918_1', '8917_2', '8955_2');
$obeh[4] = array('8904_1', '663_1', '668_1', '1969_1', '8916_2', '8915_2');
$obeh[5] = array('8961_1', '8960_1', '8945_1', '8944_1', '8947_1', '8946_1', '8907_1');

$omezeni['1969_1'] = 'X';
$omezeni['663_1'] = 'X';
$omezeni['668_1'] = 'X';
$omezeni['8902_1'] = 'X, 6';
$omezeni['8904_1'] = 'X';
$omezeni['8906_1'] = '6, T';
$omezeni['8906_2'] = 'X';
$omezeni['8907_1'] = 'X';
$omezeni['8908_1'] = 'X';
$omezeni['8909_2'] = '6, T';
$omezeni['8911_1'] = 'X';
$omezeni['8915_1'] = '6, T';
$omezeni['8915_2'] = 'X';
$omezeni['8916_1'] = '6, T';
$omezeni['8916_2'] = 'X';
$omezeni['8917_1'] = 'T';
$omezeni['8917_2'] = 'X';
$omezeni['8940_1'] = 'X, 6';
$omezeni['8940_2'] = 'T';
$omezeni['8943_1'] = 'X';
$omezeni['8944_1'] = 'X';
$omezeni['8945_1'] = 'X';
$omezeni['8946_1'] = 'X';
$omezeni['8947_1'] = 'X';
$omezeni['8948_1'] = 'X';
$omezeni['8949_1'] = 'X';
$omezeni['8950_1'] = 'X';
$omezeni['8951_1'] = 'X';
$omezeni['8955_1'] = 'X5';
$omezeni['8955_2'] = '6, T';
$omezeni['8960_1'] = 'X';
$omezeni['8961_1'] = 'X';

$trasa['663_1'] = array('Plzeň hl.n.;8:02','České Budějovice;9:55');
$trasa['668_1'] = array('České Budějovice;12:05','Plzeň hl.n.;13:57');

$trasa['1969_1'] = array('Plzeň hl.n.;14:58', 'Horažďovice předměstí;15:56');
$trasa['8901_1'] = array('Plzeň hl.n.;7:08', 'Horažďovice předměstí;8:16');
$trasa['8902_1'] = array('Horažďovice předměstí;4:48', 'Plzeň hl.n.;5:55');
$trasa['8903_1'] = array('Plzeň hl.n.;10:08', 'Horažďovice předměstí;11:16');
$trasa['8904_1'] = array('Horažďovice předměstí;5:48', 'Plzeň hl.n.;6:53');
$trasa['8905_1'] = array('Plzeň hl.n.;13:08', 'Horažďovice předměstí;14:16');
$trasa['8906_1'] = array('Horažďovice předměstí;6:43', 'Plzeň hl.n.;7:53');
$trasa['8906_2'] = array('Nepomuk;7:08', 'Plzeň hl.n.;7:53');
$trasa['8907_1'] = array('Plzeň hl.n.;14:08', 'Horažďovice předměstí;15:16');
$trasa['8908_1'] = array('Horažďovice předměstí;7:43', 'Plzeň hl.n.;8:53');
$trasa['8909_1'] = array('Plzeň hl.n.;15:08', 'Nepomuk;15:50');
$trasa['8909_2'] = array('Plzeň hl.n.;15:08', 'Horažďovice předměstí;16:16');
$trasa['8910_1'] = array('Horažďovice předměstí;10:43', 'Plzeň hl.n.;11:53');
$trasa['8911_1'] = array('Plzeň hl.n.;16:08', 'Horažďovice předměstí;17:16');
$trasa['8912_1'] = array('Horažďovice předměstí;12:43', 'Plzeň hl.n.;13:53');
$trasa['8913_1'] = array('Plzeň hl.n.;17:08', 'Horažďovice předměstí;18:16');
$trasa['8914_1'] = array('Horažďovice předměstí;14:43', 'Plzeň hl.n.;15:53');
$trasa['8915_1'] = array('Plzeň hl.n.;19:08', 'Horažďovice předměstí;20:16');
$trasa['8915_2'] = array('Plzeň hl.n.;19:08', 'Horažďovice předměstí;20:16');
$trasa['8916_1'] = array('Horažďovice předměstí;16:43', 'Plzeň hl.n.;17:53');
$trasa['8916_2'] = array('Horažďovice předměstí;16:43', 'Plzeň hl.n.;17:53');
$trasa['8917_1'] = array('Plzeň hl.n.;21:08', 'Horažďovice předměstí;22:16');
$trasa['8917_2'] = array('Plzeň hl.n.;21:08', 'Horažďovice předměstí;22:16');
$trasa['8918_1'] = array('Horažďovice předměstí;18:43', 'Plzeň hl.n.;19:53');
$trasa['8940_1'] = array('Nepomuk;4:13', 'Plzeň hl.n.;4:55');
$trasa['8940_2'] = array('Nepomuk;4:13', 'Plzeň hl.n.;4:55');
$trasa['8943_1'] = array('Plzeň hl.n.;5:08', 'Nepomuk;5:55');
$trasa['8944_1'] = array('Nepomuk;9:08', 'Plzeň hl.n.;9:53');
$trasa['8945_1'] = array('Plzeň hl.n.;8:08', 'Nepomuk;8:50');
$trasa['8946_1'] = array('Nepomuk;12:08', 'Plzeň hl.n.;12:53');
$trasa['8947_1'] = array('Plzeň hl.n.;11:08', 'Nepomuk;11:50');
$trasa['8948_1'] = array('Nepomuk;14:08', 'Plzeň hl.n.;14:53');
$trasa['8949_1'] = array('Plzeň hl.n.;12:08', 'Nepomuk;12:50');
$trasa['8950_1'] = array('Nepomuk;16:08', 'Plzeň hl.n.;16:53');
$trasa['8951_1'] = array('Plzeň hl.n.;18:08', 'Nepomuk;18:50');
$trasa['8955_1'] = array('Plzeň hl.n.;22:54', 'Nepomuk;23:31');
$trasa['8955_2'] = array('Plzeň hl.n.;22:54', 'Nepomuk;23:31');
$trasa['8960_1'] = array('Strakonice;5:51', 'Plzeň hl.n.;7:20');
$trasa['8961_1'] = array('Horažďovice předměstí;4:38', 'Strakonice;4:56');

$typ[663] = 'R';
$typ[668] = 'R';

@$ts201 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>