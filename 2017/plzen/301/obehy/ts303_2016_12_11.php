<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['71710_1', '773_1', '776_1', '7523_1', '7520_1', '71712_1', '779_1', '770_1'];
$obeh[2] = ['7502_1', '7517_1', '7504_1', '775_1', '774_1', '7503_1'];

$omezeni['71712_1'] = '6';
$omezeni['7520_1'] = 'XT';

$trasa['71710_1'] = ['Plzeň hl.n.;4:11','Klatovy;5:31'];
$trasa['71712_1'] = ['Plzeň hl.n.;16:11','Klatovy;17:31'];
$trasa['7502_1'] = ['Plzeň hl.n.;5:25','Klatovy;6:27'];
$trasa['7503_1'] = ['Klatovy;18:46;Plzeň hl.n.;19:46'];
$trasa['7504_1'] = ['Plzeň hl.n.;8:11','Klatovy;9:11'];
$trasa['773_1'] = ['Klatovy;6:06','Praha hl.n.;8:41'];
$trasa['774_1'] = ['Praha hl.n.;15:12','Klatovy;17:52'];
$trasa['775_1'] = ['Klatovy;10:06','Praha hl.n.;12:41'];
$trasa['776_1'] = ['Praha hl.n.;11:12','Klatovy;13:52'];
$trasa['779_1'] = ['Klatovy;18:06','Praha hl.n.;20:41'];
$trasa['7523_1'] = ['Klatovy;14:46', 'Plzeň hl.n.;15:46'];
$trasa['7517_1'] = ['Klatovy;6:46', 'Plzeň hl.n.;7:46'];
$trasa['7520_1'] = ['Plzeň hl.n.;16:11', 'Klatovy;17:11'];
$trasa['770_1'] = ['Praha hl.n.;21:12', 'Plzeň hl.n.;22:49'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


