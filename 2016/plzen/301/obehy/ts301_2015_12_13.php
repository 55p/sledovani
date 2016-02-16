<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('751_1', '766_1', '759_1', '758_1', '767_1', '750_1');

$omezeni['750_1'] = 'XT';
$omezeni['751_1'] = 'X6';


$trasa['750_1'] = array('Praha hl.n.;23:37', 'Plzeň hl.n.;1:10');
$trasa['751_1'] = array('Plzeň hl.n.;4:07', 'Praha hl.n.;5:41');
$trasa['758_1'] = array('Praha hl.n.;14:12', 'Cheb;17:26');
$trasa['759_1'] = array('Cheb;10:34', 'Praha hl.n.;13:41');
$trasa['766_1'] = array('Praha hl.n.;6:12', 'Cheb;9:26');
$trasa['767_1'] = array('Cheb;18:34', 'Praha hl.n.;21:41');

$typ[750] = 'Rx';
$typ[751] = 'Rx';
$typ[758] = 'Rx';
$typ[759] = 'Rx';
$typ[766] = 'Rx';
$typ[767] = 'Rx';


@$ts301 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>