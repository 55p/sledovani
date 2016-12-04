<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('600_1', '600_2', '609_1', '442_1');
$obeh[2] = array('100442_1', '125_1', '120_1');
$obeh[3] = array('123_1', '122_1', '443_1');
$obeh[4] = array('100443_1', '606_1', '613_1', '613_2');

$omezeni['600_1'] = 'X6';
$omezeni['600_2'] = 'T';
$omezeni['613_1'] = 'XT';
$omezeni['613_2'] = '6';

$trasa['100442_1'] = array('Žilina;1:34','Praha hl.n.;7:22');
$trasa['100443_1'] = array('Bohumín;3:36','Košice;8:39');
$trasa['442_1'] = array('Košice;22:08','Žilina;1:15');
$trasa['443_1'] = array('Praha hl.n.;23:09','Bohumín;3:09');
$trasa['600_1'] = array('Košice;4:06','Bratislava hl.st.;10:05');
$trasa['600_2'] = array('Žilina;7:19','Bratislava hl.st.;10:05');
$trasa['606_1'] = array('Košice;10:06','Bratislava hl.st.','16:05');
$trasa['609_1'] = array('Bratislava hl.st.','13:55;Košice;19:52');
$trasa['613_1'] = array('Bratislava hl.st.;17:56','Košice;23:52');
$trasa['613_2'] = array('Bratislava hl.st.;17:56','Žilina;20:41');

$trasa['120_1'] = ['Žilina;17:12', 'Praha hl.n.;22:48'];
$trasa['122_1'] = ['Žilina;15:12', 'Praha hl.n.;20:39'];
$trasa['123_1'] = ['Praha hl.n.;7:22', 'Žilina;12:48'];
$trasa['125_1'] = ['Praha hl.n.;9:22', 'Žilina;14:48'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts312 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti));  

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>