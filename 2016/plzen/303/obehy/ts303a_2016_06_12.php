<?php 
$zacatekPlatnosti = '12.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('771_1', '778_1', '775_1', '774_1', '779_1', '770_1');

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


@$ts303a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>