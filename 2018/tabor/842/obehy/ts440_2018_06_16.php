<?php 
$zacatekPlatnosti = '16.6.2018';
$konecPlatnosti = '16.9.2018 23:59:59';

$obeh[1] = ['28460_1', '28461_1', '28462_1', '28463_1'];

$omezeni['28460_1'] = '1606,3006,0507,1407,2007,1108,2508,0809,1509,1609';
$omezeni['28461_1'] = '1606,3006,0507,1407,2007,1108,2508,0809,1509,1609';
$omezeni['28462_1'] = '1606,3006,0507,1407,2007,1108,2508,0809,1509,1609';
$omezeni['28463_1'] = '1606,3006,0507,1407,2007,1108,2508,0809,1509,1609';

$trasa['28460_1'] = ['Tábor;9:39','Bechyně;10:33'];
$trasa['28461_1'] = ['Bechyně;11:24','Tábor;12:16'];
$trasa['28462_1'] = ['Tábor;13:39','Bechyně;14:33'];
$trasa['28463_1'] = ['Bechyně;15:24','Tábor;16:16'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts440 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


