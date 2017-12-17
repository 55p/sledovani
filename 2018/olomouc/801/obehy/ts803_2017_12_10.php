<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1628_1', '1628_2', '3628_1', '1700_1', '103710_1', '3633_1', '3660_1', '3661_1', '3662_1', '3663_1', '3664_1', '3637_1', '3638_1', '3641_1', '1629_1', '1629_2'];

$omezeni['103710_1'] = 'T';
$omezeni['1628_1'] = 'X';
$omezeni['1628_2'] = '6';
$omezeni['1629_1'] = 'X';
$omezeni['1629_2'] = '25';
$omezeni['1700_1'] = 'T';
$omezeni['3628_1'] = '6';
$omezeni['3633_1'] = 'T';
$omezeni['3637_1'] = '6';
$omezeni['3638_1'] = '6';
$omezeni['3641_1'] = '6';
$omezeni['3660_1'] = 'T';
$omezeni['3661_1'] = 'T';
$omezeni['3662_1'] = 'T';
$omezeni['3663_1'] = 'T';
$omezeni['3664_1'] = 'T';

$trasa['103710_1'] = ['Zábřeh na Moravě;7:09','Šumperk;7:27'];
$trasa['1628_1'] = ['Jeseník;4:57','Olomouc hl.n.;7:33'];
$trasa['1628_2'] = ['Jeseník;4:57','Šumperk;6:24'];
$trasa['1629_1'] = ['Olomouc hl.n.;18:00','Jeseník;21:00'];
$trasa['1629_2'] = ['Šumperk;19:29','Jeseník;21:00'];
$trasa['1700_1'] = ['Jeseník;4:57','Zábřeh na Moravě;6:22'];
$trasa['3628_1'] = ['Šumperk;7:04','Olomouc hl.n.;8:27'];
$trasa['3633_1'] = ['Šumperk;13:14','Hanušovice;13:53'];
$trasa['3637_1'] = ['Olomouc hl.n.;14:37','Uničov;15:17'];
$trasa['3638_1'] = ['Uničov;16:34','Olomouc hl.n.;17:17'];
$trasa['3641_1'] = ['Olomouc hl.n.;17:37','Šumperk;19:10'];
$trasa['3660_1'] = ['Hanušovice;14:18','Šumperk;15:02'];
$trasa['3661_1'] = ['Šumperk;15:14','Hanušovice;15:53'];
$trasa['3662_1'] = ['Hanušovice;16:18','Šumperk;17:01'];
$trasa['3663_1'] = ['Šumperk;17:12','Hanušovice;17:53'];
$trasa['3664_1'] = ['Hanušovice;18:06','Šumperk;18:49'];

$poznamkaObehu['103710_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts803 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


