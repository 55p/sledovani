<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['409_1', '99998_1', '408_1'];
$obeh['1a'] = ['99997_1'];
$obeh['1b'] = ['99996_1'];
$obeh['1c'] = ['99995_1'];

$omezeni['408_1'] = 'T';
$omezeni['409_1'] = '5';

$trasa['99995_1'] = ['záloha Praha hl.n.;7:30;19:45'];
$trasa['99996_1'] = ['záloha Česká Třebová;5:00;21:00'];
$trasa['99997_1'] = ['záloha Olomouc;5:30;18:30'];
$trasa['99998_1'] = ['záloha Břeclav;8:20;19:30'];
$trasa['409_1'] = ['Bohumín;9:07', 'Břeclav;10:50'];
$trasa['408_1'] = ['Břeclav;20:06', 'Bohumín;21:49'];

@$ts307 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


