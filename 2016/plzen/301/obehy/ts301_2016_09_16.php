<?php 
$zacatekPlatnosti = '16.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7502_1', '7517_1', '351_1', '760_1', '765_1', '770_1');

$trasa['351_1'] = array('Plzeň hl.n.;9:07', 'Praha hl.n.;10:41');
$trasa['7502_1'] = array('Plzeň hl.n.;5:25', 'Klatovy;6:27');
$trasa['7517_1'] = array('Klatovy;6:46', 'Plzeň hl.n.;7:46');
$trasa['760_1'] = array('Praha hl.n.;12:12', 'Cheb;15:23');
$trasa['765_1'] = array('Cheb;16:34', 'Praha hl.n.;19:41');
$trasa['770_1'] = array('Praha hl.n.;21:12', 'Plzeň hl.n.;22:48');


$typ['760_1'] = 'Rx';
$typ['765_1'] = 'Rx';
$typ['770_1'] = 'Rx';
$typ['351_1'] = 'Ex';


@$ts301 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>