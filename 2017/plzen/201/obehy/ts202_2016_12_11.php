<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['7513_1', '7512_1', '1961_1', '7514_1', '1963_1', '7518_1', '1965_1', '7522_1', '1960_1', '7519_1', '1962_1', '7521_1', '1964_1', '7501_1', '7524_1'];
$obeh[2] = ['7515_1', '1960_2', '7519_2', '1962_2', '7521_2', '1964_2', '7501_2', '7524_2', '1963_2', '1965_2', '7522_2'];

$omezeni['1960_1'] = '6';
$omezeni['1960_2'] = 'X';
$omezeni['1961_1'] = 'X';
$omezeni['1962_1'] = '6';
$omezeni['1962_2'] = 'X';
$omezeni['1963_1'] = 'X, N';
$omezeni['1963_2'] = '6';
$omezeni['1964_1'] = '6, N';
$omezeni['1964_2'] = 'X';
$omezeni['1965_1'] = 'X';
$omezeni['1965_2'] = 'N';
$omezeni['7501_1'] = '6, N';
$omezeni['7501_2'] = 'X';
$omezeni['7512_1'] = 'X';
$omezeni['7513_1'] = 'X, 6';
$omezeni['7514_1'] = 'X';
$omezeni['7515_1'] = 'X';
$omezeni['7518_1'] = 'X';
$omezeni['7519_1'] = '6';
$omezeni['7519_2'] = 'X';
$omezeni['7521_1'] = '6';
$omezeni['7521_2'] = 'X';
$omezeni['7522_1'] = 'X';
$omezeni['7522_2'] = '6, N';
$omezeni['7524_1'] = '6, N';
$omezeni['7524_2'] = 'X';

$trasa['1962'] = ['Plzeň hl.n.;11:02','Klatovy;11:52'];
$trasa['1964'] = ['Plzeň hl.n.;15:02','Klatovy;15:52'];
$trasa['1965_1'] = ['Klatovy;16:05','Plzeň hl.n.;16:56'];
$trasa['1965_2'] = ['Klatovy;16:05','Plzeň hl.n.;16:56'];
$trasa['7501_1'] = ['Klatovy;16:46','Plzeň hl.n.;17:46'];
$trasa['7501_2'] = ['Klatovy;16:46','Plzeň hl.n.;17:46'];

$trasa['1960'] = ['Plzeň hl.n.;7:02', 'Klatovy;7:52'];
$trasa['1961_1'] = ['Klatovy;8:06', 'Plzeň hl.n.;8:56'];
$trasa['1963_1'] = ['Klatovy;12:06', 'Plzeň hl.n.;12:56'];
$trasa['1963_2'] = ['Klatovy;12:06', 'Plzeň hl.n.;12:56'];
$trasa['7512_1'] = ['Plzeň hl.n.;6:07', 'Klatovy;7:11'];
$trasa['7513_1'] = ['Klatovy;4:46', 'Plzeň hl.n.;5:46'];
$trasa['7514_1'] = ['Plzeň hl.n.;10:11', 'Klatovy;11:11'];
$trasa['7515_1'] = ['Klatovy;5:30', 'Plzeň hl.n.;6:30'];
$trasa['7518_1'] = ['Plzeň hl.n.;14:11', 'Klatovy;15:11'];
$trasa['7519_1'] = ['Klatovy;8:46', 'Plzeň hl.n.;9:46'];
$trasa['7519_2'] = ['Klatovy;8:46', 'Plzeň hl.n.;9:46'];
$trasa['7521_1'] = ['Klatovy;12:46', 'Plzeň hl.n.;13:46'];
$trasa['7521_2'] = ['Klatovy;12:46', 'Plzeň hl.n.;13:46'];
$trasa['7522_1'] = ['Plzeň hl.n.;18:11', 'Klatovy;19:11'];
$trasa['7522_2'] = ['Plzeň hl.n.;18:11', 'Klatovy;19:11'];
$trasa['7524_1'] = ['Plzeň hl.n.;19:11', 'Klatovy;20:11'];
$trasa['7524_2'] = ['Plzeň hl.n.;19:11', 'Klatovy;20:11'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts202 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


