<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('477_1', '276_1');
$obeh[2] = array( '273_1', '272_1');

$trasa['477_1'] = array('Praha hl.n.;0:00','Budapest Keleti;8:37');
$trasa['272_1'] = ['Budapest-Keleti;15:25', 'Praha hl.n.;22:09'];
$trasa['273_1'] = ['Praha hl.n.;5:49', 'Budapest-Keleti;12:35'];
$trasa['276_1'] = ['Budapest-Keleti;11:25', 'Praha hl.n.;18:06'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti));  

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);
