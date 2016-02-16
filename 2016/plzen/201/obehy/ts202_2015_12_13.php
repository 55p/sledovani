<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7513_1', '7512_1', '1961_1', '1960_1', '7519_1', '1962_1', '7521_1', '1964_1', '7501_1', '7524_1');
$obeh[2] = array('7515_1', '1960_2', '7519_2', '7514_1', '1963_1', '7518_1', '1965_1', '7522_1');

$omezeni['1960_1'] = '6, T';
$omezeni['1960_2'] = 'X';
$omezeni['1961_1'] = 'X';
$omezeni['1963_1'] = 'X';
$omezeni['1965_1'] = '6, T';
$omezeni['7512_1'] = 'X';
$omezeni['7513_1'] = 'X, 6';
$omezeni['7514_1'] = 'X';
$omezeni['7515_1'] = 'X';
$omezeni['7518_1'] = 'X';
$omezeni['7519_1'] = '6, T';
$omezeni['7519_2'] = 'X';
$omezeni['7522_1'] = 'X, T';

$trasa['1960'] = array('Plzeň hl.n.;7:02', 'Klatovy;7:52');
$trasa['1961'] = array('Klatovy;8:06', 'Plzeň hl.n.;8:56');
$trasa['1962_1'] = array('Plzeň hl.n.;11:02', 'Klatovy;11:52');
$trasa['1963_1'] = array('Klatovy;12:06', 'Plzeň hl.n.;12:56');
$trasa['1964_1'] = array('Plzeň hl.n.;15:02', 'Klatovy;15:52');
$trasa['1965_1'] = array('Klatovy;16:06', 'Plzeň hl.n.;16:56');
$trasa['7501_1'] = array('Klatovy;16:46', 'Plzeň hl.n.;17:46');
$trasa['7512_1'] = array('Plzeň hl.n.;6:07', 'Klatovy;7:11');
$trasa['7513_1'] = array('Klatovy;4:46', 'Plzeň hl.n.;5:46');
$trasa['7514_1'] = array('Plzeň hl.n.;10:11', 'Klatovy;11:11');
$trasa['7515_1'] = array('Klatovy;5:30', 'Plzeň hl.n.;6:30');
$trasa['7518_1'] = array('Plzeň hl.n.;14:11', 'Klatovy;15:11');
$trasa['7519_1'] = array('Klatovy;8:46', 'Plzeň hl.n.;9:46');
$trasa['7519_2'] = array('Klatovy;8:46', 'Plzeň hl.n.;9:46');
$trasa['7521_1'] = array('Klatovy;12:46', 'Plzeň hl.n.;13:46');
$trasa['7522_1'] = array('Plzeň hl.n.;18:11', 'Klatovy;19:11');
$trasa['7524_1'] = array('Plzeň hl.n.;19:11', 'Klatovy;20:11');

@$ts202 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>