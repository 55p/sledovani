<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['28401_1', '28402_1', '28405_1', '28418_1', '28420_1'];

$omezeni['28401_1'] = 'X,-2512,-2612,-0101';
$omezeni['28402_1'] = 'X';
$omezeni['28405_1'] = 'X';
$omezeni['28418_1'] = 'X1234,-2903,-3004,-0705,-0407,-2709';
$omezeni['28420_1'] = 'T,-3003,-3103,-0104,-0507,-0607,-2809,-2412,-2512,-3112';

$trasa['28401_1'] = ['Bechyně;4:11','Tábor;5:00'];
$trasa['28402_1'] = ['Tábor;5:38','Bechyně;6:28'];
$trasa['28405_1'] = ['Bechyně;6:41','Tábor;7:30'];
$trasa['28418_1'] = ['Tábor;21:06','Bechyně;21:54'];
$trasa['28420_1'] = ['Tábor;22:36','Bechyně;23:24'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts140 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


