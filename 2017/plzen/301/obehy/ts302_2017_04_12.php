<?php 
$zacatekPlatnosti = '12.4.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['771_1', '778_1', '775_1', '774_1', '779_1', '770_1'];
$obeh[2] = ['773_1', '776_1', '777_1', '772_1'];
$obeh[3] = ['1981_1', '1988_1', '1990_1', '7384_1'];

$omezeni['1981_1'] = 'X6';
$omezeni['1988_1'] = 'X5';
$omezeni['1990_1'] = 'zX';
$omezeni['7384_1'] = 'zX';

$trasa['770_1'] = ['Praha hl.n.;21:12','Plzeň hl.n.;22:49'];
$trasa['771_1'] = ['Plzeň hl.n.;5:06','Praha hl.n.;6:41'];
$trasa['772_1'] = ['Praha hl.n.;19:12','Plzeň hl.n.;20:49'];
$trasa['773_1'] = ['Plzeň hl.n.;7:06','Praha hl.n.;8:41'];
$trasa['774_1'] = ['Praha hl.n.;15:12','Plzeň hl.n.;16:49'];
$trasa['775_1'] = ['Plzeň hl.n.;11:06','Praha hl.n.;12:41'];
$trasa['776_1'] = ['Praha hl.n.;11:12','Plzeň hl.n.;12:49'];
$trasa['777_1'] = ['Plzeň hl.n.;15:06','Praha hl.n.;16:41'];
$trasa['778_1'] = ['Praha hl.n.;7:12','Plzeň hl.n.;8:49'];
$trasa['779_1'] = ['Plzeň hl.n.;19:06','Praha hl.n.;20:41'];
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


