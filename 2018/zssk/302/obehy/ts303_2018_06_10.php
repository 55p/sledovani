<?php 
$zacatekPlatnosti = '10.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['601_1', '610_1', '719_1'];
$obeh[2] = ['700_1', '603_1', '612_1'];

$omezeni['700_1'] = 'X';
$omezeni['719_1'] = 'zX,-2903,-3003,-0104,-3004,-0705,-0407,-2808,-3110';

$trasa['601_1'] = ['Bratislava hl. st.;6:03','Košice;11:53'];
$trasa['603_1'] = ['Bratislava hl. st.;8:03','Košice;13:53'];
$trasa['610_1'] = ['Košice;14:07','Bratislava hl. st.;19:57'];
$trasa['612_1'] = ['Košice;16:07','Bratislava hl. st.;21:57'];
$trasa['700_1'] = ['Trenčín;4:34','Bratislava hl. st.;5:57'];
$trasa['719_1'] = ['Bratislava hl. st.;22:03','Trenčín;23:24'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


