<?php
$zacatekPlatnosti = '15.10.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('141_1', '152_1', '153_1', '140_1', '153_2', '140_2');

$omezeni['140_1'] = 'X,6';
$omezeni['140_2'] = 'T';
$omezeni['153_1'] = 'X,6';
$omezeni['153_2'] = 'T';


$trasa['140_1'] = array('Návsí;21:06', 'Ostrava-Svinov;22:13');
$trasa['140_2'] = array('Žilina;20:22', 'Ostrava-Svinov;22:13');
$trasa['141_1'] = array('Ostrava-Svinov;5:45', 'Žilina;7:38');
$trasa['152_1'] = array('Žilina;8:22', 'Ostrava hl.n.;10:03');
$trasa['153_1'] = array('Bohumín;18:03', 'Návsí;18:52');
$trasa['153_2'] = array('Bohumín;18:03', 'Žilina;19:38');


@$ts147a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);
?>