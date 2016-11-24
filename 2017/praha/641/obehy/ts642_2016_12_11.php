<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('511_1');
$obeh[2] = array('516_1', '100505_1', '507_1', '504_1', '517_1');
$obeh[3] = array('512_1', '515_1');
$obeh[4] = array('510_1', '509_1', '502_1');
$obeh[5] = array('516_2', '505_1', '505_2', '506_1');

$omezeni['100505_1'] = '3,7';
$omezeni['505_1'] = '3,7';
$omezeni['505_2'] = '1,2,4,5,6';
$omezeni['516_1'] = '1,2,4,5,6';
$omezeni['516_2'] = '3,7';

$trasa['100505_1'] = array('Cheb;6:42','Praha hl.n.;9:16');
$trasa['505_1'] = array('Praha hl.n.;9:37','Ostrava hl.n.;12:38');

$trasa['502_1'] = array('Ostrava hl.n.;17:21', 'Praha hl.n.;20:22');
$trasa['504_1'] = array('Ostrava hl.n.;15:21', 'Praha hl.n.;18:22');
$trasa['505_2'] = array('Cheb;6:42', 'Ostrava hl.n.;12:38');
$trasa['506_1'] = array('Ostrava hl.n.;13:21', 'Cheb;19:14');
$trasa['507_1'] = array('Praha hl.n.;11:37', 'Ostrava hl.n.;14:38');
$trasa['509_1'] = array('Praha hl.n.;13:37', 'Ostrava hl.n.;16:38');
$trasa['510_1'] = array('Bohumín;9:12', 'Praha hl.n.;12:22');
$trasa['511_1'] = array('Praha hl.n.;15:37', 'Bohumín;18:48');
$trasa['512_1'] = array('Bohumín;7:12', 'Františkovy Lázně;13:23');
$trasa['515_1'] = array('Františkovy Lázně;14:35', 'Bohumín;20:48');
$trasa['516_1'] = array('Bohumín;5:12', 'Praha hl.n.;8:22');
$trasa['516_2'] = array('Bohumín;5:12', 'Praha hl.n.;8:22');
$trasa['517_1'] = array('Praha hl.n.;19:37', 'Bohumín;22:48');

@$ts642 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>