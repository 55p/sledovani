<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['243_1', '543_1', '542_1', '242_1'];

$omezeni['242_1'] = '7,2612,0101,0204,0105,0805,-2412,-3112,-0104,-2904,-0605';
$omezeni['243_1'] = '5,2903,0407,2709,-3003,-0607,-2809';
$omezeni['542_1'] = '7,2612,0101,0204,0105,0805,-2412,-3112,-0104,-2904,-0605';
$omezeni['543_1'] = '5,2903,0407,2709,-3003,-0607,-2809';

$trasa['242_1'] = ['Ostrava-Svinov;16:21','Praha hl.n.;19:18'];
$trasa['243_1'] = ['Praha hl.n.;13:11','Ostrava-Svinov;16:14'];
$trasa['542_1'] = ['Opava východ;15:48', 'Ostrava-Svinov;16:09'];
$trasa['543_1'] = ['Ostrava-Svinov;16:19', 'Opava východ;16:40'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts141a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


