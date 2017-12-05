<?php 
$zacatekPlatnosti = '17.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['28401_1', '28400_1', '28403_1', '28404_1', '28407_1', '28406_1', '28409_1', '28408_1', '28411_1', '28410_1', '28413_1', '28412_1', '28415_1', '28414_1', '28417_1', '28416_1', '28419_1', '28418_1', '28420_1'];

$omezeni['28400_1'] = 'X';
$omezeni['28401_1'] = '25';
$omezeni['28403_1'] = 'X';
$omezeni['28404_1'] = 'X';
$omezeni['28406_1'] = '25';
$omezeni['28407_1'] = 'X';
$omezeni['28409_1'] = '25';
$omezeni['28418_1'] = '5,2709';
$omezeni['28420_1'] = '6,2809';

$trasa['28400_1'] = ['Tábor;4:18','Bechyně;5:08'];
$trasa['28401_1'] = ['Bechyně;4:11','Tábor;5:00'];
$trasa['28403_1'] = ['Bechyně;5:31','Tábor;6:20'];
$trasa['28404_1'] = ['Tábor;6:48','Bechyně;7:38'];
$trasa['28406_1'] = ['Tábor;9:06','Bechyně;9:54'];
$trasa['28407_1'] = ['Bechyně;8:03','Tábor;8:51'];
$trasa['28408_1'] = ['Tábor;11:06','Bechyně;11:54'];
$trasa['28409_1'] = ['Bechyně;10:03','Tábor;10:51'];
$trasa['28410_1'] = ['Tábor;13:06','Bechyně;13:54'];
$trasa['28411_1'] = ['Bechyně;12:03','Tábor;12:51'];
$trasa['28412_1'] = ['Tábor;15:06','Bechyně;15:54'];
$trasa['28413_1'] = ['Bechyně;14:03','Tábor;14:51'];
$trasa['28414_1'] = ['Tábor;17:06','Bechyně;17:54'];
$trasa['28415_1'] = ['Bechyně;16:03','Tábor;16:51'];
$trasa['28416_1'] = ['Tábor;19:06','Bechyně;19:54'];
$trasa['28417_1'] = ['Bechyně;18:03','Tábor;18:51'];
$trasa['28418_1'] = ['Tábor;21:06','Bechyně;21:54'];
$trasa['28419_1'] = ['Bechyně;20:03','Tábor;20:51'];
$trasa['28420_1'] = ['Tábor;22:36','Bechyně;23:24'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts842 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


