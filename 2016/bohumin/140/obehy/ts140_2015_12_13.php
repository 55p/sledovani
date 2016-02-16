<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('145_1', '148_1', '443_1');
$obeh[2] = array('141_1', '152_1', '116_1', '155_1', '155_2');
$obeh[3] = array('154_1', '154_2', '117_1', '153_1', '140_1', '153_2', '140_2');
$obeh[4] = array('444_1', '614_1', '605_1', '610_1', '609_1', '606_1', '613_1', '602_1', '617_1', '853_1');
$obeh[5] = array('100553_1', '879_1', '878_1', '147_1', '146_1', '445_1');
$obeh[6] = array('442_1', '149_1', '144_1');

$omezeni['100553_1'] = 'X,6,-3112';
$omezeni['140_1'] = 'X,6';
$omezeni['140_2'] = 'T';
$omezeni['141_1'] = '11';
$omezeni['152_1'] = '11';
$omezeni['153_1'] = 'X,6';
$omezeni['153_2'] = 'T';
$omezeni['154_1'] = 'X,6';
$omezeni['154_2'] = 'T';
$omezeni['155_1'] = '6';
$omezeni['155_2'] = 'X,T';
$omezeni['602_1'] = '10';
$omezeni['617_1'] = '10';
$omezeni['853_1'] = '2412,3112';
$omezeni['879_1'] = 'T,-2412';


$poznamkaObehu['100553_1'] = array('vlož', 'vložená');


$trasa['116_1'] = array('Bohumín;10:07', 'Praha hl.n.;13:39');
$trasa['117_1'] = array('Praha hl.n.;14:24', 'Bohumín;17:55');
$trasa['140_1'] = array('Návsí;21:06', 'Ostrava-Svinov;22:13');
$trasa['140_2'] = array('Žilina;20:22', 'Ostrava-Svinov;22:13');
$trasa['141_1'] = array('Ostrava-Svinov;5:45', 'Žilina;7:38');
$trasa['144_1'] = array('Žilina;16:22', 'Bohumín;17:55');
$trasa['145_1'] = array('Bohumín;10:02', 'Žilina;11:38');
$trasa['146_1'] = array('Žilina;14:22', 'Praha hl.n.;19:39');
$trasa['147_1'] = array('Praha hl.n.;8:24', 'Žilina;13:38');
$trasa['148_1'] = array('Žilina;12:22', 'Praha hl.n.;17:39');
$trasa['149_1'] = array('Praha hl.n.;10:24', 'Žilina;15:38');
$trasa['152_1'] = array('Žilina;8:22', 'Bohumín;9:55');
$trasa['153_1'] = array('Bohumín;18:02', 'Návsí;18:52');
$trasa['153_2'] = array('Bohumín;18:02', 'Žilina;19:38');
$trasa['154_1'] = array('Žilina;6:22', 'Praha hl.n.;11:39');
$trasa['154_2'] = array('Návsí;7:06', 'Praha hl.n.;11:39');
$trasa['155_1'] = array('Praha hl.n.;16:24', 'Návsí;20:52');
$trasa['155_2'] = array('Praha hl.n.;16:24', 'Žilina;21:38');
$trasa['442_1'] = array('Bohumín;3:40', 'Praha hl.n.;7:39');
$trasa['443_1'] = array('Praha hl.n.;23:09', 'Bohumín;3:07');
$trasa['444_1'] = array('Bohumín;2:10', 'Praha hl.n.;6:38');
$trasa['445_1'] = array('Praha hl.n.;22:00', 'Bohumín;2:25');

$trasa['602_1'] = array('Praha hl.n.;19:27', 'Ústí nad Labem hl.n.;20:41');
$trasa['605_1'] = array('Ústí nad Labem hl.n.;9:13', 'Praha hl.n.;10:28');
$trasa['606_1'] = array('Praha hl.n.;15:27', 'Ústí nad Labem hl.n.;16:41');
$trasa['609_1'] = array('Ústí nad Labem hl.n.;13:13', 'Praha hl.n.;14:28');
$trasa['610_1'] = array('Praha hl.n.;11:27', 'Ústí nad Labem hl.n.;12:41');
$trasa['613_1'] = array('Ústí nad Labem hl.n.;17:13', 'Praha hl.n.;18:28');
$trasa['614_1'] = array('Praha hl.n.;7:27', 'Ústí nad Labem hl.n.;8:41');
$trasa['617_1'] = array('Ústí nad Labem hl.n.;21:13', 'Praha hl.n.;18:28');

$trasa['853_1'] = array('Praha hl.n.;18:55', 'Pardubice hl.n.;20:00');
$trasa['878_1'] = array('Pardubice hl.n.;5:34', 'Praha hl.n.;6:43');
$trasa['879_1'] = array('Praha hl.n.;0:01', 'Pardubice hl.n.;1:03');
$trasa['100553'] = array('Praha hl.n.;0:01', 'Pardubice hl.n.;1:03');



@$ts140 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>