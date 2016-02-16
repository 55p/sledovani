<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4691_1', '4922_1', '4925_1', '4652_1', '4603_1', '4620_1', '4617_1', '4943_1', '4940_1', '4947_1', '4604_1', '4633_1', '4948_1');

$omezeni['4603_1'] = '6';
$omezeni['4604_1'] = '6';
$omezeni['4617_1'] = '6';
$omezeni['4620_1'] = '6';
$omezeni['4633_1'] = '6';
$omezeni['4652_1'] = 'X';
$omezeni['4691_1'] = 'X1';
$omezeni['4922_1'] = 'X';
$omezeni['4925_1'] = 'X';
$omezeni['4940_1'] = 'X';
$omezeni['4943_1'] = 'X';
$omezeni['4947_1'] = 'X';
$omezeni['4948_1'] = 'X5';

$typ[4691] = 'Sv';

$trasa['4603_1'] = array('Tišnov;6:30', 'Břeclav;8:21');
$trasa['4604_1'] = array('Břeclav;15:42', 'Tišnov;17:29');
$trasa['4617_1'] = array('Tišnov;12:30', 'Břeclav;14:17');
$trasa['4620_1'] = array('Břeclav;9:38', 'Tišnov;11:29');
$trasa['4633_1'] = array('Tišnov;18:30', 'Brno hl.n.;19:07');
$trasa['4652_1'] = array('Hrušovany u Brna;7:12', 'Brno hl.n.;7:32');
$trasa['4691_1'] = array('Brno hl.n.;4:38', 'Vranovice;4:56');

$trasa['4922_1'] = array('Vranovice;5:33', 'Brno hl.n.;6:03');
$trasa['4925_1'] = array('Tišnov;5:43', 'Brno-Královo Pole;6:08');
$trasa['4940_1'] = array('Hrušovany u Brna;15:41', 'Brno hl.n.;16:00');
$trasa['4943'] = array('Brno hl.n.;14:54', 'Hrušovany u Brna;15:12');
$trasa['4947'] = array('Brno hl.n.;16:54', 'Vranovice;17:25');
$trasa['4948_1'] = array('Vranovice;22:18', 'Tišnov;23:37');

$poznamkaObehu['4691_1'] = array('pk', 'postrk Vranovice - Brno hl.n.');

@$ts205 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>