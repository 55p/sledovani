<?php 
$zacatekPlatnosti = '1.3.2016';
$konecPlatnosti = null; //'x.x.2016 23:59:59';

$obeh[1] = array('100816_1', '530_1', '531_1', '100817_1');

$typ['100816_1'] = 'R';
$typ['100817_1'] = 'R';

$omezeni['100816_1'] = 'X6';
$omezeni['100817_1'] = 'XT';

$trasa['100816_1'] = array('Hodonín;6:17','Břeclav;6:30');
$trasa['100817_1'] = array('Břeclav;21:28','Hodonín;21:41');
$trasa['530_1'] = array('Břeclav;7:13', 'Ostrava hl.n.;8:57');
$trasa['531_1'] = array('Ostrava hl.n.;19:00', 'Břeclav;20:48');

$typ[530] = $typ[531] = 'Ex';

@$ts301b -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>