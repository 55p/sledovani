<?php 
$zacatekPlatnosti = '15.11.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['28401_1', '28402_1', '28405_1', '28418_1', '28420_1'];

$omezeni['28401_1'] = 'X';
$omezeni['28402_1'] = 'X';
$omezeni['28405_1'] = 'X';
$omezeni['28418_1'] = 'X1234,-1611';
$omezeni['28420_1'] = 'T,-1711';

$trasa['28401_1'] = ['Bechyně;4:16','Tábor;5:05'];
$trasa['28402_1'] = ['Tábor;5:38','Bechyně;6:28'];
$trasa['28405_1'] = ['Bechyně;6:41','Tábor;7:30'];
$trasa['28418_1'] = ['Tábor;21:06','Bechyně;21:54'];
$trasa['28420_1'] = ['Tábor;22:36','Bechyně;23:24'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts143 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


