<?php 
$zacatekPlatnosti = '3.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['510_1', '509_1', '502_1', '511_1'];
$obeh[2] = ['516_1', '100505_1', '507_1', '504_1', '517_1'];
$obeh[3] = ['512_1', '515_1'];
$obeh[4] = ['516_2', '505_1', '505_2', '506_1'];

$omezeni['100505_1'] = '3,7';
$omezeni['502_1'] = '6';
$omezeni['505_1'] = '3,7';
$omezeni['505_2'] = '1,2,4,5,6';
$omezeni['509_1'] = '6';
$omezeni['510_1'] = 'X6';
$omezeni['511_1'] = 'XT';
$omezeni['516_1'] = '1,2,4,5,6';
$omezeni['516_2'] = '3,7';

$trasa['100505_1'] = ['Cheb;6:42','Praha hl.n.;9:16'];
$trasa['505_1'] = ['Praha hl.n.;9:37','Ostrava hl.n.;12:38'];
$trasa['502_1'] = ['Ostrava hl.n.;17:21', 'Praha hl.n.;20:22'];
$trasa['504_1'] = ['Ostrava hl.n.;15:21', 'Praha hl.n.;18:22'];
$trasa['505_2'] = ['Cheb;6:42', 'Ostrava hl.n.;12:38'];
$trasa['506_1'] = ['Ostrava hl.n.;13:21', 'Cheb;19:14'];
$trasa['507_1'] = ['Praha hl.n.;11:37', 'Ostrava hl.n.;14:38'];
$trasa['509_1'] = ['Praha hl.n.;13:37', 'Ostrava hl.n.;16:38'];
$trasa['510_1'] = ['Bohumín;9:12', 'Praha hl.n.;12:22'];
$trasa['511_1'] = ['Praha hl.n.;15:37', 'Bohumín;18:48'];
$trasa['512_1'] = ['Bohumín;7:12', 'Františkovy Lázně;13:23'];
$trasa['515_1'] = ['Františkovy Lázně;14:35', 'Bohumín;20:48'];
$trasa['516_1'] = ['Bohumín;5:12', 'Praha hl.n.;8:22'];
$trasa['516_2'] = ['Bohumín;5:12', 'Praha hl.n.;8:22'];
$trasa['517_1'] = ['Praha hl.n.;19:37', 'Bohumín;22:48'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts642 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


