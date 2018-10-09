<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['100874_1', '100871_1', '100871_2', '100864_1', '100875_1'];
$obeh[2] = ['100864_2', '100871_3'];

$omezeni['100864_1'] = 'T';
$omezeni['100864_2'] = 'X5';
$omezeni['100871_1'] = 'X1234';
$omezeni['100871_2'] = 'X5';
$omezeni['100871_3'] = 'T';
$omezeni['100874_1'] = 'X';
$omezeni['100875_1'] = 'T';

$trasa['100864_1'] = ['Brno hl.n.;14:55','Praha hl.n.;18:27'];
$trasa['100864_2'] = ['Brno hl.n.;14:55','Praha-Smíchov;18:27'];
$trasa['100871_1'] = ['Praha-Smíchov;15:42','Česká Třebová;17:50'];
$trasa['100871_2'] = ['Praha-Smíchov;15:42','Brno hl.n.;19:02'];
$trasa['100871_3'] = ['Praha-Smíchov;15:42','Brno hl.n.;19:02'];
$trasa['100874_1'] = ['Česká Třebová;6:14','Praha-Smíchov;8:27'];
$trasa['100875_1'] = ['Praha-Smíchov;19:42','Česká Třebová;21:59'];

$poznamkaObehu['100871_1'] = ['pk', 'postrk'];
$poznamkaObehu['100871_2'] = ['pk', 'postrk'];
$poznamkaObehu['100875_1'] = ['pk', 'postrk'];
$poznamkaObehu['100871_3'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts604 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


