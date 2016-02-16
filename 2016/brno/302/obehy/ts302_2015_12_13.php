<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('874_1', '867_1', '913_1', '902_1', '860_1', '858_1', '4765_1');
$obeh[2] = array('4760_1', '1973_1', '905_1', '910_1', '868_1', '873_1');

$omezeni['1973_1'] = 'X6';
$omezeni['4760_1'] = 'X';
$omezeni['4765_1'] = 'zX';
$omezeni['858_1'] = 'X';
$omezeni['860_1'] = 'T';

$trasa['1973_1'] = array('Česká Třebová;5:43', 'Brno hl.n.;7:14');
$trasa['4760_1'] = array('Letovice;4:31', 'Česká Třebová;5:18');
$trasa['4765_1'] = array('Česká Třebová;22:59', 'Letovice;23:40');
$trasa['858_1'] = array('Brno hl.n.;20:57', 'Česká Třebová;22:11');
$trasa['860_1'] = array('Brno hl.n.;20:46', 'Česká Třebová;21:58');
$trasa['867_1'] = array('Praha hl.n.;11:55', 'Brno hl.n.;15:02');
$trasa['868_1'] = array('Brno hl.n.;12:57', 'Praha hl.n.;16:04');
$trasa['873_1'] = array('Praha hl.n.;17:55', 'Brno hl.n.;21:02');
$trasa['874_1'] = array('Brno hl.n.;6:55', 'Praha hl.n.;10:04');
$trasa['902_1'] = array('Šumperk;18:09', 'Brno hl.n.;20:39');
$trasa['905_1'] = array('Brno hl.n.;7:18', 'Šumperk;9:39');
$trasa['910_1'] = array('Šumperk;10:09', 'Brno hl.n.;12:42');
$trasa['913_1'] = array('Brno hl.n.;15:18', 'Šumperk;17:39');

$typ[858] = 'R';
$typ[860] = 'R';
$typ[867] = 'R';
$typ[868] = 'R';
$typ[873] = 'R';
$typ[874] = 'R';
$typ[902] = 'R';
$typ[905] = 'R';
$typ[910] = 'R';
$typ[913] = 'R';




@$ts302 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>