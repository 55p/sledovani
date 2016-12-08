<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['7502_1', '7517_1', '7504_1', '775_1', '774_1', '7503_1'];


$trasa['7502_1'] = ['Plzeň hl.n.;5:25','Klatovy;6:27'];
$trasa['7503_1'] = ['Klatovy;18:46','Plzeň hl.n.;19:46'];
$trasa['7504_1'] = ['Plzeň hl.n.;8:11','Klatovy;9:11'];
$trasa['7517_1'] = ['Klatovy;6:46','Plzeň hl.n.;7:46'];
$trasa['774_1'] = ['Praha hl.n.;15:12','Klatovy;17:52'];
$trasa['775_1'] = ['Klatovy;10:06','Praha hl.n.;12:41'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts302 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


