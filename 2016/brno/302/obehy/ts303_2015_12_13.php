<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4762_1', '4764_1', '1975_1', '1974_1', '4763_1');

$omezeni['1974_1'] = 'X';
$omezeni['1975_1'] = 'X';
$omezeni['4762_1'] = 'T';
$omezeni['4764_1'] = 'X6';

$trasa['1974_1'] = array('Brno hl.n.;15:44', 'Česká Třebová;17:15');
$trasa['1975_1'] = array('Česká Třebová;6:43', 'Brno hl.n.;8:16');
$trasa['4762_1'] = array('Letovice;5:17', 'Česká Třebová;5:59');
$trasa['4763_1'] = array('Česká Třebová;18:53', 'Letovice;19:34');
$trasa['4764_1'] = array('Letovice;5:33', 'Česká Třebová;6:15');


@$ts303 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>