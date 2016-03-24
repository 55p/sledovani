<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('911_1', '904_1', '915_1', '912_1', '909_1', '908_1');

$omezeni['904_1'] = '4';
$omezeni['908_1'] = '6';
$omezeni['909_1'] = '6';
$omezeni['911_1'] = '4';
$omezeni['912_1'] = '6';
$omezeni['915_1'] = '5';

$trasa['904_1'] = array('Šumperk;16:09', 'Brno hl.n.;18:42');
$trasa['908_1'] = array('Olomouc hl.n.;13:07', 'Brno hl.n.;14:43');
$trasa['909_1'] = array('Brno hl.n.;11:18', 'Olomouc hl.n.;12:51');
$trasa['911_1'] = array('Brno hl.n.;13:18', 'Šumperk;15:39');
$trasa['912_1'] = array('Šumperk;8:09', 'Brno hl.n.;10:42');
$trasa['915_1'] = array('Brno hl.n.;17:18', 'Šumperk;19:42');

@$ts301c -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>