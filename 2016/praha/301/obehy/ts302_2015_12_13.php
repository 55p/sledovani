<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5891_1', '5893_1', '1904_1', '125_1', '120_1');
$obeh[2] = array('123_1', '122_1');

$omezeni['1904_1'] = 'X';
$omezeni['5891_1'] = 'X2,X3,X5';
$omezeni['5893_1'] = 'X1,X4';

$typ[5891] = $typ[5893] = 'Sv';

$trasa['5891_1'] = array('Odstavné nádraží Praha-jih;3:33','Nymburk hl.n.;4:29');
$trasa['5893_1'] = array('Odstavné nádraží Praha-jih;4:31','Nymburk hl.n.;5:36');

$trasa['120_1'] = array('Žilina;17:31', 'Praha hl.n.;22:52');
$trasa['122_1'] = array('Žilina;15:31', 'Praha hl.n.;20:39');
$trasa['123_1'] = array('Praha hl.n.;7:24', 'Žilina;12:29');
$trasa['125_1'] = array('Praha hl.n.;9:24', 'Žilina;14:29');
$trasa['1904_1'] = array('Nymburk hl.n.;5:59', 'Praha Masarykovo nádraží;6:58');

$typ[120] = 'Ex';
$typ[122] = 'Ex';
$typ[123] = 'EC';
$typ[125] = 'EC';


@$ts302 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>