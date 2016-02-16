<?php
$obeh[1] = array('503_1', '508_1', '511_1', '506_1');
$obeh[2] = array('100505_1', '516_1', '507_1', '504_1', '517_1', '511_2');
$obeh[3] = array('510_1', '509_1', '502_1');
$obeh[4] = array('516_2', '505_2', '505_3', '506_2', '504_2', '517_2');

$omezeni['504_1'] = 'X,T';
$omezeni['504_2'] = '6';
$omezeni['100505_1'] = 'X3';
$omezeni['505_2'] = 'X3';
$omezeni['505_3'] = 'X1,X2,X4,X5,25';
$omezeni['506_1'] = '6';
$omezeni['506_2'] = 'X,T';
$omezeni['507_1'] = 'X,T';
$omezeni['508_1'] = 'X,T';
$omezeni['511_1'] = 'X,T';
$omezeni['511_2'] = '6';
$omezeni['516_1'] = 'X1,X2,X4,X5,25';
$omezeni['516_2'] = 'X3';
$omezeni['517_1'] = 'X,T';
$omezeni['517_2'] = '6';

$trasa['100505_1'] = array('Cheb;6:44','Praha hl.n.;9:18');
$trasa['505_2'] = array('Praha hl.n.;9:39','Bohumín;12:45');
$trasa['502_1'] = array('Ostrava hl.n.;17:14', 'Praha hl.n.;20:21');
$trasa['503_1'] = array('Praha hl.n.;7:39', 'Ostrava hl.n.;10:45');
$trasa['504_1'] = array('Ostrava hl.n.;15:14', 'Praha hl.n.;18:21');
$trasa['504_2'] = array('Ostrava hl.n.;15:14', 'Praha hl.n.;18:21');
$trasa['505_3'] = array('Cheb;6:44', 'Ostrava hl.n.;12:45');
$trasa['506_1'] = array('Ostrava hl.n.;13:14', 'Cheb;19:14');
$trasa['506_2'] = array('Ostrava hl.n.;13:14', 'Cheb;19:14');
$trasa['507_1'] = array('Praha hl.n.;11:39', 'Ostrava hl.n.;14:45');
$trasa['508_1'] = array('Ostrava hl.n.;11:14', 'Praha hl.n.;14:21');
$trasa['509_1'] = array('Praha hl.n.;13:39', 'Ostrava hl.n.;16:45');
$trasa['510_1'] = array('Bohumín;9:06', 'Praha hl.n.;12:21');
$trasa['511_1'] = array('Praha hl.n.;15:39', 'Bohumín;18:53');
$trasa['511_2'] = array('Praha hl.n.;15:39', 'Bohumín;18:53');
$trasa['516_1'] = array('Bohumín;5:06', 'Praha hl.n.;8:41');
$trasa['516_2'] = array('Bohumín;5:06', 'Praha hl.n.;8:41');
$trasa['517_1'] = array('Praha hl.n.;19:39', 'Bohumín;22:53');
$trasa['517_2'] = array('Praha hl.n.;19:39', 'Bohumín;22:53');


@$ts641 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, null)); 

unset($obeh); 
unset($trasa); 
unset($omezeni);


 ?>