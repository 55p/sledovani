<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = '31.1.2017 23:59:59';

$obeh[1] = ['401_1', '404_1', '409_1'];
$obeh[2] = ['400_1', '405_1', '408_1'];


$trasa['400_1'] = ['Košice;5:16','Bratislava hl.st.;10:27'];
$trasa['401_1'] = ['Bratislava hl.st.;5:33','Košice;10:44'];
$trasa['404_1'] = ['Košice;11:16','Bratislava hl.st.;16:27'];
$trasa['405_1'] = ['Bratislava hl.st.;11:33','Košice;16:44'];
$trasa['408_1'] = ['Košice;17:16','Bratislava hl.st.;22:27'];
$trasa['409_1'] = ['Bratislava hl.st.;17:33','Košice;22:44'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


