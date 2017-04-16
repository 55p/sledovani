<?php 
$zacatekPlatnosti = '18.9.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['531_1', '631_1', '632_1', '532_1'];

$omezeni['631_1'] = '25';
$omezeni['632_1'] = '25';

$trasa['531_1'] = ['České Budějovice;10:13','Český Krumlov;10:50'];
$trasa['532_1'] = ['Český Krumlov;14:02','České Budějovice;14:40'];
$trasa['631_1'] = ['Český Krumlov;10:52', 'Nové Údolí;12:16'];
$trasa['632_1'] = ['Nové Údolí;12:35', 'Český Krumlov;14:00'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts755 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


