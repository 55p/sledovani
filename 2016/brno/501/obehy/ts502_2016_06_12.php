<?php 
$zacatekPlatnosti = '12.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4741_1', '4611_1', '4616_1', '4008_1', '4007_1', '4937_1', '4932_1', '4744_1', '4747_1', '4621_1', '4626_1', '4754_1', '4757_1', '4738_1', '4706_1', '4715_1', '4905_1', '4910_1', '4716_1', '4725_1', '4623_1', '4630_1', '4730_1', '4739_1', '4738_2');

$omezeni['4007_1'] = 'X';
$omezeni['4008_1'] = 'X';
$omezeni['4611_1'] = 'X';
$omezeni['4616_1'] = 'X';
$omezeni['4621_1'] = 'X';
$omezeni['4623_1'] = 'N';
$omezeni['4626_1'] = 'X';
$omezeni['4630_1'] = 'N';
$omezeni['4706_1'] = '6';
$omezeni['4715_1'] = '6';
$omezeni['4716_1'] = 'N';
$omezeni['4725_1'] = 'N';
$omezeni['4730_1'] = 'N';
$omezeni['4738_1'] = 'X';
$omezeni['4738_2'] = 'N';
$omezeni['4739_1'] = 'N';
$omezeni['4741_1'] = 'X, 6';
$omezeni['4744_1'] = 'X';
$omezeni['4747_1'] = 'X';
$omezeni['4754_1'] = 'X';
$omezeni['4757_1'] = 'X';
$omezeni['4905_1'] = 'N';
$omezeni['4910_1'] = 'N';
$omezeni['4932_1'] = 'X';
$omezeni['4937_1'] = 'X';


$trasa['4007_1'] = array('Rájec-Jestřebí;9:51', 'Brno hl.n.;10:32');
$trasa['4008_1'] = array('Brno hl.n.;8:29', 'Rájec-Jestřebí;9:09');
$trasa['4611_1'] = array('Tišnov;4:30', 'Břeclav;6:21');
$trasa['4616_1'] = array('Břeclav;7:15', 'Tišnov;9:00');
$trasa['4621_1'] = array('Tišnov;14:00', 'Břeclav;15:43');
$trasa['4623_1'] = array('Tišnov;14:30', 'Vranovice;15:43');
$trasa['4626_1'] = array('Břeclav;16:15', 'Tišnov;18:00');
$trasa['4630_1'] = array('Vranovice;18:16', 'Tišnov;19:30');
$trasa['4706_1'] = array('Brno hl.n.;6:58', 'Letovice;8:01');
$trasa['4715_1'] = array('Letovice;8:58', 'Brno hl.n.;9:59');
$trasa['4716_1'] = array('Brno hl.n.;12:01', 'Březová nad Svitavou;13:12');
$trasa['4725_1'] = array('Březová nad Svitavou;13:47', 'Brno hl.n.;14:59');
$trasa['4730_1'] = array('Brno hl.n.;19:01', 'Letovice;20:01');
$trasa['4738_1'] = array('Brno hl.n.;23:04', 'Letovice;0:04');
$trasa['4738_2'] = array('Brno hl.n.;23:04', 'Letovice;0:04');
$trasa['4739_1'] = array('Letovice;20:58', 'Brno hl.n.;21:59');
$trasa['4741_1'] = array('Letovice;4:00', 'Brno hl.n.;4:57');
$trasa['4744_1'] = array('Brno hl.n.;12:29', 'Skalice nad Svitavou;13:18');
$trasa['4747_1'] = array('Skalice nad Svitavou;13:43', 'Brno hl.n.;14:32');
$trasa['4754_1'] = array('Brno hl.n.;17:29', 'Skalice nad Svitavou;18:18');
$trasa['4757_1'] = array('Skalice nad Svitavou;18:43', 'Brno hl.n.;19:32');
$trasa['4905_1'] = array('Žďár nad Sázavou;8:34', 'Vranovice;10:44');
$trasa['4910_1'] = array('Vranovice;11:16', 'Žďár nad Sázavou;13:26');
$trasa['4932_1'] = array('Vranovice;11:50', 'Tišnov;13:00');
$trasa['4937_1'] = array('Tišnov;10:00', 'Vranovice;11:09');


@$ts502 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>