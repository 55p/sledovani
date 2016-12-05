<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['7511_1', '771_1', '778_1', '100775_1', '7516_1', '777_1', '772_1'];

$omezeni['100775_1'] = 'XT';
$omezeni['7516_1'] = 'XT';

$trasa['100775_1'] = ['Klatovy;10:06','Plzeň hl.n.;10:56'];
$trasa['772_1'] = ['Praha hl.n.;19:12','Klatovy;21:52'];
$trasa['777_1'] = ['Klatovy;14:06','Praha hl.n.;16:41'];
$trasa['778_1'] = ['Praha hl.n.;7:12','Klatovy;9:52'];

$poznamkaObehu['100775_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts302 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


