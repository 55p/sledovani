<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4760_1', '1973_1', '905_1', '910_1', '913_1', '902_1', '860_1', '858_1', '4765_1');

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
$trasa['902_1'] = array('Šumperk;18:09', 'Brno hl.n.;20:39');
$trasa['905_1'] = array('Brno hl.n.;7:18', 'Šumperk;9:39');
$trasa['910_1'] = array('Šumperk;10:09', 'Brno hl.n.;12:42');
$trasa['913_1'] = array('Brno hl.n.;15:18', 'Šumperk;17:39');

@$ts302 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>