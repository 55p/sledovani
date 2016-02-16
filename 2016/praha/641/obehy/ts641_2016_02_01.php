<?php 
$zacatekPlatnosti = '1.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('503_1', '508_1', '511_1');
$obeh[2] = array('516_1', '505_1', '507_1', '504_1', '517_1');
$obeh[3] = array('510_1', '509_1', '502_1');
$obeh[4] = array('516_2', '100505_1', '505_2', '506_1');

$omezeni['100505_1'] = '3,T';
$omezeni['505_1'] = '3,T';
$omezeni['505_2'] = '1,2,4,5,6';
$omezeni['516_1'] = '1,2,4,5,6';
$omezeni['516_2'] = '3,T';

$trasa['502_1'] = array('Ostrava hl.n.;17:11', 'Praha hl.n.;20:15');
$trasa['503_1'] = array('Praha hl.n.;7:43', 'Ostrava hl.n.;10:44');
$trasa['504_1'] = array('Ostrava hl.n.;15:14', 'Praha hl.n.;18:15');
$trasa['505_1'] = array('Cheb;6:44', 'Praha hl.n.;9:16');
$trasa['505_2'] = array('Cheb;6:44', 'Ostrava hl.n.;12:44');
$trasa['100505_1'] = array('Praha hl.n.;9:43', 'Ostrava hl.n.;12:44');
$trasa['506_1'] = array('Ostrava hl.n.;13:14', 'Cheb;19:14');
$trasa['507_1'] = array('Praha hl.n.;11:43', 'Ostrava hl.n.;14:44');
$trasa['508_1'] = array('Ostrava hl.n.;11:11', 'Praha hl.n.;14:15');
$trasa['509_1'] = array('Praha hl.n.;13:43', 'Ostrava hl.n.;16:44');
$trasa['510_1'] = array('Ostrava hl.n.;9:14', 'Praha hl.n.;12:15');
$trasa['511_1'] = array('Praha hl.n.;15:43', 'Ostrava hl.n.;18:44');
$trasa['516_1'] = array('Ostrava hl.n.;5:14', 'Praha hl.n.;8:15');
$trasa['516_2'] = array('Ostrava hl.n.;5:14', 'Praha hl.n.;8:15');
$trasa['517_1'] = array('Praha hl.n.;19:43', 'Ostrava hl.n.;22:44');

$poznamkaObehu['100505_1'] = array('Pha - Ova', 'Praha - Ostrava');
$poznamkaObehu['505_1'] = array('Cheb - Pha', 'Cheb - Praha');

@$ts641 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>