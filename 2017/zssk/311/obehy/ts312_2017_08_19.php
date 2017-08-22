<?php 
$zacatekPlatnosti = '19.8.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['600_1', '600_2', '609_1', '442_1'];
$obeh[2] = ['100442_1', '125_1', '122_1', '443_1'];
$obeh[3] = ['100443_1', '606_1', '613_1', '613_2'];

$omezeni['600_1'] = 'X6';
$omezeni['600_2'] = 'T';

$trasa['600_1'] = ['Košice;4:06','Bratislava hl.st.;10:05'];
$trasa['600_2'] = ['Žilina;7:19','Bratislava hl.st.;10:05'];
$trasa['609_1'] = ['Bratislava hl.st.;13:55','Košice;19:52'];
$trasa['442_1'] = ['Košice;22:08','Žilina;1:15'];

$trasa['100442_1'] = ['Žilina;1:34','Praha hl.n.;7:22'];
$trasa['125_1'] = ['Praha hl.n.;9:22', 'Púchov;13:48'];
$trasa['122_1'] = ['Púchov;16:12', 'Praha hl.n.;20:39'];
$trasa['443_1'] = ['Praha hl.n.;23:09','Bohumín;3:09'];

$trasa['100443_1'] = ['Bohumín;3:36','Košice;8:39'];
$trasa['606_1'] = ['Košice;10:06','Bratislava hl.st.','16:05'];
$trasa['613_1'] = ['Bratislava hl.st.;17:56','Košice;23:52'];
$trasa['613_2'] = ['Bratislava hl.st.;17:56','Žilina;20:41'];

// $trasa['120_1'] = ['Žilina;17:12', 'Praha hl.n.;22:48'];
// $trasa['123_1'] = ['Praha hl.n.;7:22', 'Žilina;12:48'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts312 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


