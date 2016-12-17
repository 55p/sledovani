<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1006_1', '1013_1'];

$omezeni['1006_1'] = '-2512,-2612,-2712,-2812,-2912,-3012,-3112,-0101,-1704,-0105,-0805,-0607';
$omezeni['1013_1'] = '-2412,-2512,-2612,-2712,-2812,-2912,-3012,-3112,-1604,-3004,-0705,-0507';

$trasa['1006_1'] = ['Návsí;6:47','Praha hl.n.;11:12'];
$trasa['1013_1'] = ['Praha hl.n.;15:44','Návsí;20:04'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts104 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


