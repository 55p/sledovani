<?php 
$zacatekPlatnosti = '6.5.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['71710_1', '7511_1', '771_1', '778_1', '775_1', '774_1', '779_1', '770_1', '773_1', '776_1', '777_1', '772_1'];
$obeh[2] = ['7515_1', '773_2', '776_2', '777_2', '772_2', '7511_2', '771_2', '778_2', '775_2', '774_2', '779_2', '770_2'];
$obeh[3] = ['1981_1', '1988_1', '1990_1', '7384_1'];

$omezeni['1981_1'] = 'X6';
$omezeni['1988_1'] = 'X5';
$omezeni['1990_1'] = 'zX';
$omezeni['71710_1'] = 'X';
$omezeni['7384_1'] = 'zX';
$omezeni['7511_1'] = 'XT';
$omezeni['7511_2'] = '6';
$omezeni['7515_1'] = 'X';
$omezeni['770_1'] = 'XT';
$omezeni['770_2'] = '6';
$omezeni['771_1'] = 'XT';
$omezeni['771_2'] = '6';
$omezeni['772_1'] = '6';
$omezeni['772_2'] = 'XT';
$omezeni['773_1'] = '6';
$omezeni['773_2'] = 'XT';
$omezeni['774_1'] = 'XT';
$omezeni['774_2'] = '6';
$omezeni['775_1'] = 'XT';
$omezeni['775_2'] = '6';
$omezeni['776_1'] = '6';
$omezeni['776_2'] = 'XT';
$omezeni['777_1'] = '6';
$omezeni['777_2'] = 'XT';
$omezeni['778_1'] = 'XT';
$omezeni['778_2'] = '6';
$omezeni['779_1'] = 'XT';
$omezeni['779_2'] = '6';

$trasa['71710_1'] = ['Plzeň hl.n.;2:11','Klatovy;3:11'];
$trasa['7511_1'] = ['Klatovy;4:00','Plzeň hl.n.;4:59'];
$trasa['7511_2'] = ['Klatovy;4:00','Plzeň hl.n.;4:59'];
$trasa['7515_1'] = ['Klatovy;5:30','Plzeň hl.n.;6:30'];
$trasa['770_1'] = ['Praha hl.n.;21:12','Plzeň hl.n.;22:49'];
$trasa['770_2'] = ['Praha hl.n.;21:12','Plzeň hl.n.;22:49'];
$trasa['771_1'] = ['Plzeň hl.n.;5:06','Praha hl.n.;6:41'];
$trasa['771_2'] = ['Plzeň hl.n.;5:06','Praha hl.n.;6:41'];
$trasa['772_1'] = ['Praha hl.n.;19:12','Klatovy;21:52'];
$trasa['772_2'] = ['Praha hl.n.;19:12','Klatovy;21:52'];
$trasa['773_1'] = ['Plzeň hl.n.;7:06','Praha hl.n.;8:41'];
$trasa['773_2'] = ['Plzeň hl.n.;7:06','Praha hl.n.;8:41'];
$trasa['774_1'] = ['Praha hl.n.;15:12','Plzeň hl.n.;16:49'];
$trasa['774_2'] = ['Praha hl.n.;15:12','Plzeň hl.n.;16:49'];
$trasa['775_1'] = ['Plzeň hl.n.;11:06','Praha hl.n.;12:41'];
$trasa['775_2'] = ['Plzeň hl.n.;11:06','Praha hl.n.;12:41'];
$trasa['776_1'] = ['Praha hl.n.;11:12','Plzeň hl.n.;12:49'];
$trasa['776_2'] = ['Praha hl.n.;11:12','Plzeň hl.n.;12:49'];
$trasa['777_1'] = ['Plzeň hl.n.;15:06','Praha hl.n.;16:41'];
$trasa['777_2'] = ['Plzeň hl.n.;15:06','Praha hl.n.;16:41'];
$trasa['778_1'] = ['Praha hl.n.;7:12','Plzeň hl.n.;8:49'];
$trasa['778_2'] = ['Praha hl.n.;7:12','Plzeň hl.n.;8:49'];
$trasa['779_1'] = ['Plzeň hl.n.;19:06','Praha hl.n.;20:41'];
$trasa['779_2'] = ['Plzeň hl.n.;19:06','Praha hl.n.;20:41'];
$trasa['1981_1'] = ['Cheb;5:04', 'Plzeň hl.n.;6:58'];
$trasa['1988_1'] = ['Plzeň hl.n.;15:01', 'Cheb;17:01'];
$trasa['1990_1'] = ['Plzeň hl.n.;17:00', 'Mariánské Lázně;18:07'];
$trasa['7384_1'] = ['Mariánské Lázně;18:40', 'Cheb;19:10'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts302 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


