<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('145_1', '148_1');
$obeh[2] = array('553_1', '552_1', '149_1', '144_1');
$obeh[3] = array('444_1', '614_1', '605_1', '610_1', '609_1', '606_1', '613_1', '602_1', '617_1');
$obeh[4] = array('879_1', '100553_1', '878_1', '147_1', '146_1', '445_1');
$obeh[5] = array('116_1', '155_1', '155_2');
$obeh[6] = array('154_1', '154_2', '117_1');

$omezeni['100553_1'] = 'X6';
$omezeni['154_1'] = 'X6';
$omezeni['154_2'] = 'XT';
$omezeni['155_1'] = '6';
$omezeni['155_2'] = 'XT';
$omezeni['552_1'] = 'X6';
$omezeni['553_1'] = 'X6';
$omezeni['879_1'] = 'T';


$poznamkaObehu['100553_1'] = array('pk', 'postrk');


$trasa['116_1'] = array('Ostrava hl.n.;10:15', 'Praha hl.n.;13:39');
$trasa['117_1'] = array('Praha hl.n.;14:24', 'Ostrava hl.n.;17:46');
$trasa['144_1'] = array('Žilina;16:22', 'Ostrava hl.n.;18:03');
$trasa['145_1'] = array('Ostrava hl.n.;9:56', 'Žilina;11:38');
$trasa['146_1'] = array('Žilina;14:22', 'Praha hl.n.;19:39');
$trasa['147_1'] = array('Praha hl.n.;8:24', 'Žilina;13:38');
$trasa['148_1'] = array('Žilina;12:22', 'Praha hl.n.;17:39');
$trasa['149_1'] = array('Praha hl.n.;10:24', 'Žilina;15:38');
$trasa['154_1'] = array('Žilina;6:22', 'Praha hl.n.;11:39');
$trasa['154_2'] = array('Návsí;7:06', 'Praha hl.n.;11:39');
$trasa['155_1'] = array('Praha hl.n.;16:24', 'Návsí;20:52');
$trasa['155_2'] = array('Praha hl.n.;16:24', 'Žilina;21:38');

$trasa['552_1'] = array('Přerov;4:55', 'Praha hl.n.;7:15');
$trasa['553_1'] = array('Praha hl.n.;0:01', 'Přerov;2:47');

$trasa['444_1'] = array('Ostrava hl.n.;2:20', 'Praha hl.n.;6:38');
$trasa['445_1'] = array('Praha hl.n.;22:00', 'Ostrava hl.n.;2:15');

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