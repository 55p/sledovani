<?php 
$zacatekPlatnosti = '12.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$zacatekPlatnosti2 = '18.2.2016';


$obeh[1] = array('143_1', '143_2', '150_1', '541_1', '541_2');
$obeh[2] = array('540_1', '513_1');
$obeh[3] = array('514_1', '540_2', '151_1', '142_1', '142_2');

$omezeni['142_1'] = 'X,6,2503,2703';
$omezeni['142_2'] = 'T,-2503,-2703';
$omezeni['143_1'] = 'X1,2903';
$omezeni['143_2'] = 'X2345,25,-2903';
$omezeni['513_1'] = 'X,T,-2503,-2703';
$omezeni['514_1'] = 'X,6,2503,-2603';
$omezeni['540_1'] = 'X,6,2503';
$omezeni['540_2'] = 'T,-2503,2603';
$omezeni['541_1'] = 'X,T,-2503,-2703';
$omezeni['541_2'] = '6,2503,2703';


$trasa['142_1'] = array('Žilina;18:22', 'Ostrava-Svinov;20:13');
$trasa['142_2'] = array('Žilina;18:22', 'Praha hl.n.;23:38');
$trasa['143_1'] = array('Praha hl.n.;4:24', 'Žilina;9:38');
$trasa['143_2'] = array('Ostrava-Svinov;7:45', 'Žilina;9:38');
$trasa['150_1'] = array('Žilina;10:22', 'Praha hl.n.;15:39');
$trasa['151_1'] = array('Praha hl.n.;12:24', 'Žilina;17:38');
$trasa['513_1'] = array('Praha hl.n.;16:43', 'Opava východ;20:08');
$trasa['514_1'] = array('Opava východ;5:51', 'Praha hl.n.;9:15');
$trasa['540_1'] = array('Návsí;5:06', 'Praha hl.n.;9:39');
$trasa['540_2'] = array('Bohumín;5:58', 'Praha hl.n.;9:39');
$trasa['541_1'] = array('Praha hl.n.;18:24', 'Návsí;22:56');
$trasa['541_2'] = array('Praha hl.n.;18:24', 'Bohumín;22:03');




@$ts141 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 
@$ts141 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti2, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>