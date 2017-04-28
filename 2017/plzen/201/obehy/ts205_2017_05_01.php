<?php 
$zacatekPlatnosti = '1.5.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['8955_1', '8942_1', '1980_1', '7029_1', '7024_1', '1989_1', 1982, 1991];

$omezeni['1980_1'] = 'X5';
$omezeni['1989_1'] = 'X5';
$omezeni['7024_1'] = 'X5';
$omezeni['7029_1'] = 'X5';
$omezeni['8942_1'] = 'X5';
$omezeni['8955_1'] = 'X4';
$omezeni['1982'] = '25';
$omezeni['1991'] = '25';

$trasa['1980_1'] = ['Plzeň hl.n.;7:02', 'Cheb;8:42'];
$trasa['1989_1'] = ['Cheb;15:19', 'Plzeň hl.n.;16:59'];
$trasa['7024_1'] = ['Karlovy Vary;14:12', 'Cheb;15:09'];
$trasa['7029_1'] = ['Cheb;12:45', 'Karlovy Vary;13:41'];
$trasa['8942_1'] = ['Nepomuk;5:38', 'Plzeň hl.n.;6:25'];
$trasa['8955_1'] = ['Plzeň hl.n.;22:57', 'Nepomuk;23:34'];
$trasa['1982'] = ['Plzeň hl.n.;9:00', 'Mariánské Lázně;10:11'];
$trasa['1991'] = ['Mariánské Lázně;17:46', 'Plzeň hl.n.;18:56'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts205 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


