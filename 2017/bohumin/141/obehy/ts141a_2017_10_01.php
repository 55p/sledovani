<?php 
$zacatekPlatnosti = '1.10.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['113_1', '114_1', '100523_1', '525_1'];
$obeh[2] = ['898_1', '898_2', '115_1', '112_1'];

$omezeni['100523_1'] = 'zX';
$omezeni['525_1'] = 'X5';
$omezeni['898_1'] = 'X';
$omezeni['898_2'] = '6';

$trasa['100523_1'] = ['Praha hl.n.;19:22','Česká Třebová;20:55'];
$trasa['112_1'] = ['Bohumín;18:08','Praha hl.n.;21:39'];
$trasa['113_1'] = ['Praha hl.n.;6:22','Bohumín;9:52'];
$trasa['114_1'] = ['Bohumín;14:08','Praha hl.n.;17:39'];
$trasa['115_1'] = ['Praha hl.n.;10:22','Bohumín;13:52'];
$trasa['525_1'] = ['Praha hl.n.;0:01', 'Pardubice hl.n.;1:04'];
$trasa['898_1'] = ['Česká Třebová;5:14', 'Praha hl.n.;7:03'];
$trasa['898_2'] = ['Pardubice hl.n.;5:58', 'Praha hl.n.;7:03'];

$poznamkaObehu['100523_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts141a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


