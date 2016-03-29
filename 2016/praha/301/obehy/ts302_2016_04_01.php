<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('123_1', '122_1', '443_1');
$obeh[2] = array('442_1', '125_1', '120_1');

$trasa['442_1'] = array('Ostrava hl.n.;3:49', 'Praha hl.n.;7:39');
$trasa['443_1'] = array('Praha hl.n.;23:09', 'Ostrava hl.n.;2:58');
$trasa['120_1'] = array('Žilina;17:31', 'Praha hl.n.;22:52');
$trasa['122_1'] = array('Žilina;15:31', 'Praha hl.n.;20:39');
$trasa['123_1'] = array('Praha hl.n.;7:24', 'Žilina;12:29');
$trasa['125_1'] = array('Praha hl.n.;9:24', 'Žilina;14:29');

$typ[120] = 'Ex';
$typ[122] = 'Ex';
$typ[123] = 'EC';
$typ[125] = 'EC';
$typ[442] = 'EN';
$typ[443] = 'EN';


@$ts302 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>