<?php 
$zacatekPlatnosti = '11.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7502_1', '7518_1', '778_1', '101963_1', '1963_1', '776_1', '7523_1', '774_1', '7503_1', '772_1');
$obeh[2] = array('7511_1', '7512_1', '1961_1', '7514_1', '1963_2', '7518_2', '107521_1', 17518, '1965_1', '7522_1');
$obeh[3] = array('7511_2', '7515_1', '1960_1', '7519_1', '1962_1', '7521_1', '1964_1', '7501_1', '779_1', '7524_1');
$obeh[4] = array('773_1', '7504_1', '775_1', '7516_1', '777_1', '101964_1', '7501_2', '7524_2', '7520_1', '779_2');

$omezeni['101963_1'] = 'X';
$omezeni['101964_1'] = '6';
$omezeni['1961_1'] = 'X';
$omezeni['1963_1'] = '25';
$omezeni['1963_2'] = 'X';
$omezeni['7501_1'] = 'X, T';
$omezeni['7501_2'] = '6';
$omezeni['7511_1'] = 'X';
$omezeni['7511_2'] = '6, T';
$omezeni['7512_1'] = 'X';
$omezeni['7514_1'] = 'X';
$omezeni['7515_1'] = 'X';
$omezeni['7518_2'] = 'X';
$omezeni['7520_1'] = 'X, T';
$omezeni['7523_1'] = 'X';
$omezeni['7524_1'] = 'X, T';
$omezeni['7524_2'] = '6';
$omezeni['776_1'] = 'X';
$omezeni['779_1'] = '6';
$omezeni['779_2'] = 'X, T';
$omezeni['17518'] = '25';
$omezeni['107521_1'] = '25';

$poznamkaObehu['101963_1'] = array('pk', 'postrk');
$poznamkaObehu['101964_1'] = array('pk', 'postrk');
$poznamkaObehu['107521_1'] = array('pk', 'postrk');

$poznamkaObehu['1963_2'] = array('vl', 'vlaková');

$trasa['1960'] = array('Plzeň hl.n.;7:02', 'Klatovy;7:52');
$trasa['1961'] = array('Klatovy;8:06', 'Plzeň hl.n.;8:56');
$trasa['1962'] = array('Plzeň hl.n.;11:02', 'Klatovy;11:52');
$trasa['1963'] = array('Klatovy;12:06', 'Plzeň hl.n.;12:56');
$trasa['1964'] = array('Plzeň hl.n.;15:02', 'Klatovy;15:52');
$trasa['1965'] = array('Klatovy;16:06', 'Plzeň hl.n.;16:56');
$trasa['7501'] = array('Klatovy;16:46', 'Plzeň hl.n.;17:46');
$trasa['7512'] = array('Plzeň hl.n.;6:07', 'Klatovy;7:11');
$trasa['7513'] = array('Klatovy;4:46', 'Plzeň hl.n.;5:46');
$trasa['7514'] = array('Plzeň hl.n.;10:11', 'Klatovy;11:11');
$trasa['7515'] = array('Klatovy;5:30', 'Plzeň hl.n.;6:30');
$trasa['7517'] = array('Klatovy;6:46', 'Plzeň hl.n.;7:46');
$trasa['7518'] = array('Plzeň hl.n.;14:11', 'Klatovy;15:11');
$trasa['7519'] = array('Klatovy;8:46', 'Plzeň hl.n.;9:46');
$trasa['7521'] = array('Klatovy;12:46', 'Plzeň hl.n.;13:46');
$trasa['7522'] = array('Plzeň hl.n.;18:11', 'Klatovy;19:11');
$trasa['7524'] = array('Plzeň hl.n.;19:11', 'Klatovy;20:11');

$trasa['7504'] = array('Plzeň hl.n.;8:11', 'Klatovy;9:11');
$trasa['7511'] = array('Klatovy;4:00', 'Plzeň hl.n.;4:59');

$trasa['7502'] = array('Plzeň hl.n.;5:25', 'Klatovy;6:27');
$trasa['7503'] = array('Klatovy;18:46', 'Plzeň hl.n.;19:46');
$trasa['7516'] = array('Plzeň hl.n.;12:11', 'Klatovy;13:11');
$trasa['7520'] = array('Plzeň hl.n.;16:11', 'Klatovy;17:11');
$trasa['7523'] = array('Klatovy;14:46', 'Plzeň hl.n.;15:46');

$trasa['772'] = array('Plzeň hl.n.;21:02', 'Klatovy;21:52');
$trasa['773'] = array('Klatovy;6:06', 'Plzeň hl.n.;6:56');
$trasa['774'] = array('Plzeň hl.n.;17:12', 'Klatovy;17:52');
$trasa['775'] = array('Klatovy;10:06', 'Plzeň hl.n.;10:56');
$trasa['776'] = array('Plzeň hl.n.;13:06', 'Klatovy;13:52');
$trasa['777'] = array('Klatovy;14:06', 'Plzeň hl.n.;14:56');
$trasa['778'] = array('Plzeň hl.n.;9:06', 'Klatovy;9:52');
$trasa['779'] = array('Klatovy;18:06', 'Plzeň hl.n.;18:56');

$poznamkaObehu['17518'] = array('Sv 107518', '');
$trasa['17518'] = $trasa['7518'] = array('Plzeň hl.n.;14:11', 'Klatovy;15:11');

@$ts202 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>