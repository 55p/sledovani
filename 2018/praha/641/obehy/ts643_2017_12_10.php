<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['516_1', '507_1', '504_1'];
$obeh[2] = ['505_1', '506_1', '517_1'];

$trasa['504_1'] = ['Ostrava hl.n.;15:17', 'Cheb;21:17'];
$trasa['505_1'] = ['Cheb;6:34', 'Ostrava hl.n.;12:43'];
$trasa['506_1'] = ['Ostrava hl.n.;13:17', 'Praha hl.n.;16:18'];
$trasa['507_1'] = ['Praha hl.n.;11:42', 'Ostrava hl.n.;14:43'];
$trasa['516_1'] = ['Bohumín;5:08', 'Praha hl.n.;8:18'];
$trasa['517_1'] = ['Praha hl.n.;19:42', 'Bohumín;22:52'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts643 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


