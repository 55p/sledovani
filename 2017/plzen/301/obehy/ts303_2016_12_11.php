<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = '31.3.2017 23:59:59';

$obeh[1] = ['71710_1', '773_1', '776_1', '7523_1', '7520_1', '71712_1', '779_1', '770_1'];
$obeh[2] = ['7511_1', '771_1', '778_1', '100775_1', '7516_1', '777_1', '772_1'];

$omezeni['100775_1'] = 'XT';
$omezeni['71712_1'] = '6';
$omezeni['7516_1'] = 'XT';
$omezeni['7520_1'] = 'XT';

$trasa['100775_1'] = ['Klatovy;10:06','Plzeň hl.n.;10:56'];
$trasa['71710_1'] = ['Plzeň hl.n.;4:11','Klatovy;5:31'];
$trasa['71712_1'] = ['Plzeň hl.n.;16:11','Klatovy;17:31'];
$trasa['7511_1'] = ['Klatovy;4:00','Plzeň hl.n.;4:59'];
$trasa['7516_1'] = ['Plzeň hl.n.;12:11','Klatovy;13:11'];
$trasa['7520_1'] = ['Plzeň hl.n.;16:11','Klatovy;17:11'];
$trasa['7523_1'] = ['Klatovy;14:46','Plzeň hl.n.;15:46'];
$trasa['770_1'] = ['Praha hl.n.;21:12','Plzeň hl.n.;22:49'];
$trasa['771_1'] = ['Plzeň hl.n.;5:06','Praha hl.n.;6:41'];
$trasa['772_1'] = ['Praha hl.n.;19:12','Klatovy;21:52'];
$trasa['773_1'] = ['Klatovy;6:06','Praha hl.n.;8:41'];
$trasa['776_1'] = ['Praha hl.n.;11:12','Klatovy;13:52'];
$trasa['777_1'] = ['Klatovy;14:06','Praha hl.n.;16:41'];
$trasa['778_1'] = ['Praha hl.n.;7:12','Klatovy;9:52'];
$trasa['779_1'] = ['Klatovy;18:06','Praha hl.n.;20:41'];

$poznamkaObehu['100775_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


