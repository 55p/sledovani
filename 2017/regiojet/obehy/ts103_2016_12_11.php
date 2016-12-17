<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1008_1', '1011_1', '1008_2', '1011_2'];

$omezeni['1008_1'] = '11';
$omezeni['1008_2'] = '2512,0101';
$omezeni['1011_1'] = '10';
$omezeni['1011_2'] = '2412,3112';

$trasa['1008_1'] = ['Zvolen osob.st.;4:27','Praha hl.n.;12:12'];
$trasa['1008_2'] = ['Havířov;8:30','Praha hl.n.;12:12'];
$trasa['1011_1'] = ['Praha hl.n.;14:44','Zvolen osob.st.;21:50'];
$trasa['1011_2'] = ['Praha hl.n.;14:44','Havířov;18:24'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts103 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


