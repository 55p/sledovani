<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['99989_1', '408_1'];
$obeh[2] = ['99988_1'];
$obeh[3] = ['99987_1'];
$obeh[4] = ['99986_1'];

$omezeni['408_1'] = '1';

$trasa['408_1'] = ['Břeclav;6:14','Bohumín;8:01'];
$trasa['99986_1'] = ['záloha Praha hl.n.;7:30;19:45'];
$trasa['99987_1'] = ['záloha Česká Třebová;5:00;19:00'];
$trasa['99988_1'] = ['záloha Olomouc;5:30;18:30'];
$trasa['99989_1'] = ['záloha Břeclav;8:20;19:30'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts306 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


