<?php 
$zacatekPlatnosti = '1.5.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('901_1', '912_1', '909_1', '908_1', '911_1', '904_1');
$obeh[2] = array('1638_1', '907_1', '908_2', '915_1', '911_2', '904_2', '917_1', '903_1', '906_1', '917_2');
$obeh[3] = array('914_1', '914_2', '907_2', '909_2', '906_2', '917_3');

$omezeni['1638_1'] = 'X';
$omezeni['901_1'] = 'X';
$omezeni['903_1'] = 'T';
$omezeni['904_1'] = 'XT';
$omezeni['904_2'] = '6';
$omezeni['906_1'] = 'T';
$omezeni['906_2'] = 'X';
$omezeni['907_1'] = 'X';
$omezeni['907_2'] = '25';
$omezeni['908_1'] = '6';
$omezeni['908_2'] = 'X';
$omezeni['909_1'] = '6';
$omezeni['909_2'] = 'X';
$omezeni['911_1'] = 'XT';
$omezeni['911_2'] = '6';
$omezeni['914_1'] = 'X6';
$omezeni['914_2'] = 'T';
$omezeni['915_1'] = 'X';
$omezeni['917_1'] = '6';
$omezeni['917_2'] = 'T';
$omezeni['917_3'] = 'X';


$trasa['1638_1'] = array('Šumperk;4:53', 'Brno hl.n.;7:46');
$trasa['901_1'] = array('Brno hl.n.;5:23', 'Šumperk;7:40');
$trasa['903_1'] = array('Brno hl.n.;6:28', 'Šumperk;8:42');
$trasa['904_1'] = array('Šumperk;16:09', 'Brno hl.n.;18:42');
$trasa['904_2'] = array('Šumperk;16:09', 'Brno hl.n.;18:42');
$trasa['906_1'] = array('Šumperk;14:09', 'Brno hl.n.;16:43');
$trasa['906_2'] = array('Šumperk;14:09', 'Brno hl.n.;16:43');
$trasa['907_1'] = array('Brno hl.n.;9:18', 'Šumperk;11:39');
$trasa['907_2'] = array('Brno hl.n.;9:18', 'Šumperk;11:39');
$trasa['908_1'] = array('Olomouc hl.n.;13:07', 'Brno hl.n.;14:43');
$trasa['908_2'] = array('Šumperk;12:09', 'Brno hl.n.;14:43');
$trasa['909_1'] = array('Brno hl.n.;11:18', 'Olomouc hl.n.;12:51');
$trasa['909_2'] = array('Brno hl.n.;11:18', 'Šumperk;13:39');
$trasa['911_1'] = array('Brno hl.n.;13:18', 'Šumperk;15:39');
$trasa['911_2'] = array('Brno hl.n.;13:18', 'Šumperk;15:39');
$trasa['912_1'] = array('Šumperk;8:09', 'Brno hl.n.;10:42');
$trasa['914_1'] = array('Šumperk;6:09', 'Brno hl.n.;8:42');
$trasa['914_2'] = array('Olomouc hl.n.;7:07', 'Brno hl.n.;8:42');
$trasa['915_1'] = array('Brno hl.n.;17:18', 'Šumperk;19:42');
$trasa['917_1'] = array('Brno hl.n.;19:18', 'Olomouc hl.n.;20:51');
$trasa['917_2'] = array('Brno hl.n.;19:18', 'Šumperk;21:40');
$trasa['917_3'] = array('Brno hl.n.;19:18', 'Šumperk;21:40');


for ($i = 900; $i < 918; $i++) {
  $typ[$i] = 'R';
}
$typ[1638] = 'Sp';



@$ts301a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>