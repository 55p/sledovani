<?php 
$zacatekPlatnosti = '11.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('71710_1', '7513_1', '773_1', '776_1', '777_1', '772_1');

$omezeni['71710_1'] = 'X6';
$omezeni['7513_1'] = 'X6';

$trasa['71710_1'] = array('Plzeň hl.n.;3:15','Klatovy;3:58');

$trasa['7513_1'] = array('Klatovy;4:46', 'Plzeň hl.n.;5:46');
$trasa['770_1'] = array('Praha hl.n.;21:12', 'Plzeň hl.n.;22:48');
$trasa['771_1'] = array('Plzeň hl.n.;5:07', 'Praha hl.n.;6:41');
$trasa['772_1'] = array('Praha hl.n.;19:12', 'Plzeň hl.n.;20:48');
$trasa['773_1'] = array('Plzeň hl.n.;7:07', 'Plzeň hl.n.;6:56');
$trasa['774_1'] = array('Praha hl.n.;15:12', 'Plzeň hl.n.;16:48');
$trasa['775_1'] = array('Plzeň hl.n.;11:07', 'Praha hl.n.;12:41');
$trasa['776_1'] = array('Praha hl.n.;11:12', 'Plzeň hl.n.;12:48');
$trasa['777_1'] = array('Plzeň hl.n.;15:07', 'Praha hl.n.;16:41');
$trasa['778_1'] = array('Praha hl.n.;7:12', 'Plzeň hl.n.;8:48');
$trasa['779_1'] = array('Plzeň hl.n.;19:07', 'Praha hl.n.;20:41');


@$ts307 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>