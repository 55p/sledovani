<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('576_1', '573_1', '570_1', '577_1');
$obeh['1a'] = array(892,893);

$omezeni['570_1'] = 'T';
$omezeni['573_1'] = 'X';
$omezeni['576_1'] = 'X';
$omezeni['577_1'] = 'T';


$trasa['570_1'] = array('Brno hl.n.;15:08', 'Praha hl.n.;17:37');
$trasa['573_1'] = array('Praha hl.n.;15:21', 'Brno hl.n.;17:51');
$trasa['576_1'] = array('Brno hl.n.;6:08', 'Praha hl.n.;8:42');
$trasa['577_1'] = array('Praha hl.n.;18:21', 'Brno hl.n.;20:51');
$trasa['892'] = array('Staré Město u Uherského Hradiště;4:18', 'Praha hl.n.;8:04');
$trasa['893'] = array('Praha hl.n.;14:55', 'Staré Město u Uherského Hradiště;18:45');

$typ[570] = 'Ex';
$typ[573] = 'Ex';
$typ[576] = 'Ex';
$typ[577] = 'Ex';
$typ[892] = 'R';
$typ[893] = 'R';

@$ts303 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>