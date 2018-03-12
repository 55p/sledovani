<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['282_1', '279_1'];
$obeh[2] = ['278_1', '283_1'];

$trasa['278_1'] = ['Budapest-Nyugati pu;9:41', 'Praha hl.n.;16:07'];
$trasa['279_1'] = ['Praha hl.n.;11:51', 'Budapest-Nyugati pu;18:19'];
$trasa['282_1'] = ['Bratislava hl.st.;6:10', 'Praha hl.n.;10:07'];
$trasa['283_1'] = ['Praha hl.n.;17:51', 'Bratislava hl.st.;21:50'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts311 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


