<?php 
$zacatekPlatnosti = '16.6.2018';
$konecPlatnosti = '16.9.2018 23:59:59';

$obeh[1] = ['28406_1', '28409_1', '28408_1', '28411_1', '28410_1', '28413_1', '28412_1', '28415_1'];

$omezeni['28406_1'] = '25';
$omezeni['28408_1'] = '25';
$omezeni['28409_1'] = '25';
$omezeni['28410_1'] = '25';
$omezeni['28411_1'] = '25';
$omezeni['28412_1'] = '25';
$omezeni['28413_1'] = '25';
$omezeni['28415_1'] = '25';

$trasa['28406_1'] = ['Tábor;9:06','Bechyně;9:54'];
$trasa['28408_1'] = ['Tábor;11:06','Bechyně;11:54'];
$trasa['28409_1'] = ['Bechyně;10:03','Tábor;10:51'];
$trasa['28410_1'] = ['Tábor;13:06','Bechyně;13:54'];
$trasa['28411_1'] = ['Bechyně;12:03','Tábor;12:51'];
$trasa['28412_1'] = ['Tábor;15:06','Bechyně;15:54'];
$trasa['28413_1'] = ['Bechyně;14:03','Tábor;14:51'];
$trasa['28415_1'] = ['Bechyně;16:03','Tábor;16:51'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts141 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


