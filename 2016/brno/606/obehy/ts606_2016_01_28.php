<?php 
$zacatekPlatnosti = '28.1.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('914_1', '872_1', '869_1', '915_1', '870_1', '871_1', '917_1');

$omezeni['869_1'] = 'X';
$omezeni['870_1'] = 'T';
$omezeni['871_1'] = 'T';
$omezeni['872_1'] = 'X';
$omezeni['914_1'] = 'X6';
$omezeni['915_1'] = 'X';
$omezeni['917_1'] = 'T';


$trasa['869_1'] = array('Praha hl.n.;13:55', 'Brno hl.n.;17:02');
$trasa['870_1'] = array('Brno hl.n.;10:57', 'Praha hl.n.;14:04');
$trasa['871_1'] = array('Praha hl.n.;15:55', 'Brno hl.n.;19:02');
$trasa['872_1'] = array('Brno hl.n.;8:57', 'Praha hl.n.;12:04');
$trasa['914_1'] = array('Šumperk;6:09', 'Brno hl.n.;8:42');
$trasa['915_1'] = array('Brno hl.n.;17:18', 'Šumperk;19:42');
$trasa['917_1'] = array('Brno hl.n.;19:18', 'Šumperk;21:40');

$typ[869] = 'R';
$typ[870] = 'R';
$typ[871] = 'R';
$typ[872] = 'R';
$typ[914] = 'R';
$typ[915] = 'R';
$typ[917] = 'R';



@$ts606 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>