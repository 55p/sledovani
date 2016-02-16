<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7502_1', '7517_1', '7504_1', '775_1', 7516, '777_1', '776_1', '7523_1', '7520_1', '71712_1', '779_1', '7332_1');
$obeh[2] = array('7331_1', '7892_1', '778_1', '100775_1', '1988_1', '1963_1', '7522_1', '8945_1', '8944_1', '776_2', '7523_2', '1990_1', '7384_1');
$obeh[3] = array('1981_1', '7813_1', '7824_1', '7837_1', '7834_1', '8945_2', '8944_2', '776_3', '7523_3', '773_1', '778_2', '1963_2');

$omezeni['7516'] = 'X1234,25';
$omezeni['100775_1'] = 'X';
$omezeni['1963_1'] = '6';
$omezeni['1963_2'] = 'T';
$omezeni['1981_1'] = 'X, 6';
$omezeni['1988_1'] = 'X5';
$omezeni['1990_1'] = 'zX';
$omezeni['71712_1'] = '6';
$omezeni['7331_1'] = 'X';
$omezeni['7332_1'] = 'zX';
$omezeni['7384_1'] = 'zX';
$omezeni['7520_1'] = 'X, T';
$omezeni['7522_1'] = '6';
$omezeni['7523_1'] = 'X5';
$omezeni['7523_2'] = 'zX';
$omezeni['7523_3'] = '6';
$omezeni['773_1'] = 'T';
$omezeni['776_1'] = 'X5';
$omezeni['776_2'] = 'zX';
$omezeni['776_3'] = '6';
$omezeni['777_1'] = 'X1234, 6, T';
$omezeni['778_1'] = 'X, 6';
$omezeni['778_2'] = 'T';
$omezeni['7813_1'] = 'X';
$omezeni['7824_1'] = 'X';
$omezeni['7834_1'] = 'X';
$omezeni['7837_1'] = 'X';
$omezeni['7892_1'] = 'X';
$omezeni['8944_1'] = 'T';
$omezeni['8944_2'] = '6';
$omezeni['8945_1'] = 'T';
$omezeni['8945_2'] = '6';

$trasa['71712_1'] = array('Plzeň hl.n.;15:12','Klatovy;16:32');
$trasa['7892_1'] = array('Rokycany;6:04','Plzeň hl.n.;6:55');
$trasa['7516'] = array('Plzeň hl.n.;12:11','Klatovy;13:11');

$poznamkaObehu['100775_1'] = array('pk', 'postrk');

$typ[773] = 'Rx';
$typ[775] = 'Rx';
$typ[776] = 'Rx';
$typ[777] = 'Rx';
$typ[778] = 'Rx';
$typ[779] = 'Rx';
$typ[7892] = 'Sv';

$trasa['1963_1'] = array('Klatovy;12:06', 'Plzeň hl.n.;12:56');
$trasa['1963_2'] = array('Klatovy;12:06', 'Plzeň hl.n.;12:56');
$trasa['1981_1'] = array('Cheb;5:04', 'Plzeň hl.n.;6:59');
$trasa['1988_1'] = array('Plzeň hl.n.;15:00', 'Cheb;17:02');
$trasa['1990_1'] = array('Plzeň hl.n.;16:59', 'Mariánské Lázně;18:09');
$trasa['7331_1'] = array('Svojšín;4:25', 'Rokycany;5:39');
$trasa['7332_1'] = array('Plzeň hl.n.;22:56', 'Svojšín;23:42');
$trasa['7384_1'] = array('Mariánské Lázně;18:40', 'Cheb;19:10');
$trasa['7502_1'] = array('Plzeň hl.n.;5:25', 'Klatovy;6:27');
$trasa['7504_1'] = array('Plzeň hl.n.;8:11', 'Klatovy;9:11');
$trasa['7517_1'] = array('Klatovy;6:46', 'Plzeň hl.n.;7:46');
$trasa['7520_1'] = array('Plzeň hl.n.;16:11', 'Klatovy;17:11');
$trasa['7522_1'] = array('Plzeň hl.n.;18:11', 'Klatovy;19:11');
$trasa['7523_1'] = array('Klatovy;14:46', 'Plzeň hl.n.;15:46');
$trasa['7523_2'] = array('Klatovy;14:46', 'Plzeň hl.n.;15:46');
$trasa['7523_3'] = array('Klatovy;14:46', 'Plzeň hl.n.;15:46');

$trasa['773_1'] = array('Klatovy;6:06', 'Plzeň hl.n.;6:56');
$trasa['775'] = array('Klatovy;10:06', 'Plzeň hl.n.;10:56');
$trasa['777_1'] = array('Klatovy;14:06', 'Plzeň hl.n.;14:56');
$trasa['779_1'] = array('Klatovy;18:06', 'Plzeň hl.n.;18:56');
$trasa['776'] = array('Plzeň hl.n.;13:02', 'Klatovy;13:52');
$trasa['778'] = array('Plzeň hl.n.;9:02', 'Klatovy;9:52');

$trasa['7813_1'] = array('Plzeň hl.n.;15:14', 'Zdice;16:18');
$trasa['7824_1'] = array('Zdice;17:35', 'Plzeň hl.n.;18:41');
$trasa['7834_1'] = array('Rokycany;20:14', 'Plzeň hl.n.;20:41');
$trasa['7837_1'] = array('Plzeň hl.n.;19:14', 'Rokycany;19:39');
$trasa['8944_1'] = array('Nepomuk;9:08', 'Plzeň hl.n.;9:53');
$trasa['8944_2'] = array('Nepomuk;9:08', 'Plzeň hl.n.;9:53');
$trasa['8945_1'] = array('Plzeň hl.n.;8:08', 'Nepomuk;8:50');
$trasa['8945_2'] = array('Plzeň hl.n.;8:08', 'Nepomuk;8:50');

@$ts203 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>