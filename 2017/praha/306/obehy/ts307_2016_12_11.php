<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('259_1', '259_2', '174_1', '175_1', '258_1', '258_2');

$omezeni['258_1'] = '1,2,3,4,5,7';
$omezeni['258_2'] = '6';
$omezeni['259_1'] = '7';
$omezeni['259_2'] = '1,2,3,4,5,6';

$trasa['174_1'] = array('Praha hl.n.;10:28','Dresden Hbf;12:43');
$trasa['175_1'] = array('Dresden Hbf;15:08','Praha hl.n.;17:27');
$trasa['258_1'] = ['Praha hl.n.;18:28', 'Leipzig Hbf;22:03'];
$trasa['258_2'] = ['Praha hl.n.;18:28', 'Děčín hl.n.;19:55'];
$trasa['259_1'] = ['Děčín hl.n.;7:56', 'Praha hl.n.;9:27'];
$trasa['259_2'] = ['Leipzig Hbf;5:55', 'Praha hl.n.;9:27'];


@$ts307 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>