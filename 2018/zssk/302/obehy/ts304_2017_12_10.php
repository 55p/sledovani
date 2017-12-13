<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['100521_1', '100522_1', '100525_1'];
$obeh[2] = ['100510_1', '100513_1'];
$obeh[3] = ['100520_1', '100523_1', '100524_1'];


$trasa['100510_1'] = ['Košice;7:32','Bratislava hl. st.;12:14'];
$trasa['100513_1'] = ['Bratislava hl. st.;15:46','Košice;20:28'];
$trasa['100520_1'] = ['Košice;5:23','Bratislava hl. st.;10:17'];
$trasa['100521_1'] = ['Bratislava hl. st.;5:43','Košice;10:37'];
$trasa['100522_1'] = ['Košice;11:23','Bratislava hl. st.;16:17'];
$trasa['100523_1'] = ['Bratislava hl. st.;11:43','Košice;16:37'];
$trasa['100524_1'] = ['Košice;17:23','Bratislava hl. st.;22:17'];
$trasa['100525_1'] = ['Bratislava hl. st.;17:43','Košice;22:37'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts304 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


