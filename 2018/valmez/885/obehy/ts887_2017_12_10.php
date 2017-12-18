<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3173_1', '103173_2'];
$obeh[2] = ['12841_1', '12840_1', '112805_1', '12806_1', '112823_1', '12824_1', '3178_1'];

$omezeni['112805_1'] = 'X';
$omezeni['112823_1'] = 'X';
$omezeni['12806_1'] = 'X';
$omezeni['12824_1'] = 'X';
$omezeni['12840_1'] = 'X';
$omezeni['12841_1'] = 'X';
$omezeni['3173_1'] = 'X';
$omezeni['103173_2'] = 'X';
$omezeni['3178_1'] = 'zX';

$trasa['112805_1'] = ['Frýdek-Místek;5:34','Český Těšín;6:14'];
$trasa['112823_1'] = ['Frýdek-Místek;14:34','Český Těšín;15:14'];
$trasa['12806_1'] = ['Český Těšín;6:40','Frýdek-Místek;7:19'];
$trasa['12824_1'] = ['Český Těšín;15:40','Frýdek-Místek;16:19'];
$trasa['12840_1'] = ['Hnojník;4:26','Frýdek-Místek;4:48'];
$trasa['12841_1'] = ['Frýdek-Místek;4:02','Hnojník;4:20'];
$trasa['3173_1'] = ['Valašské Meziříčí;14:34','Frýdlant nad Ostravicí;15:41'];
$trasa['103173_2'] = ['Frýdlant nad Ostravicí;15:59','Frýdek-Místek;16:09'];
$trasa['3178_1'] = ['Frýdek-Místek;21:31','Valašské Meziříčí;22:20'];

$poznamkaObehu['112805_1'] = ['pk', 'postrk'];
$poznamkaObehu['112823_1'] = ['pk', 'postrk'];


$typ['103173_2'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts887 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


