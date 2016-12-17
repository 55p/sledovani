<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1351_1', '1358_1', '1361_1', '1366_1'];

$omezeni['1351_1'] = '1,3,4,5,25';
$omezeni['1358_1'] = '1,3,4,5,25';

$trasa['1351_1'] = ['Praha hl.n.;7:13','Bohumín;10:43'];
$trasa['1358_1'] = ['Bohumín;10:55','Praha hl.n.;14:19'];
$trasa['1361_1'] = ['Praha hl.n.;15:13','Bohumín;18:43'];
$trasa['1366_1'] = ['Bohumín;19:55','Praha hl.n.;23:19'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts402 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


