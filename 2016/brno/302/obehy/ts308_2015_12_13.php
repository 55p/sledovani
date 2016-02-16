<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh['1a'] = array('409_1', '99999_1', '408_1');
$obeh['1b'] = array('99998_1');
$obeh['1c'] = array('99997_1');

$omezeni['408_1'] = '7';
$omezeni['409_1'] = '5';

$trasa['408_1'] = array('Břeclav;18:10','Bohumín;19:59');
$trasa['409_1'] = array('Bohumín;9:00','Břeclav;10:47');
$trasa['99997_1'] = array('záloha Česká Třebová;5:00;21:00');
$trasa['99998_1'] = array('záloha Praha;8:15;19:45');
$trasa['99999_1'] = array('záloha Břeclav;8:20;19:30');


$typ[408] = 'R';
$typ[409] = 'R';



@$ts308 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>