<?php 
$zacatekPlatnosti = '3.4.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['11569_1', '4541_1', '4500_1', '4513_1', '4512_1', '4521_1', '4518_1', '4531_1', '4544_1', '11575_1', '4526_1'];

$omezeni['4500_1'] = 'X';
$omezeni['4512_1'] = 'X';
$omezeni['4513_1'] = 'X';
$omezeni['4518_1'] = 'X';
$omezeni['4521_1'] = 'X';
$omezeni['4526_1'] = 'X5';
$omezeni['4531_1'] = 'X';
$omezeni['4541_1'] = 'X';
$omezeni['4544_1'] = 'X';
$omezeni['11569_1'] = 'X1';
$omezeni['11575_1'] = 'X5';

$trasa['4500_1'] = ['Novosedly;5:42','Znojmo;6:22'];
$trasa['4512_1'] = ['Novosedly;13:10','Znojmo;13:53'];
$trasa['4513_1'] = ['Znojmo;11:55','Novosedly;12:37'];
$trasa['4518_1'] = ['Novosedly;16:13','Znojmo;16:53'];
$trasa['4521_1'] = ['Znojmo;14:55','Novosedly;15:40'];
$trasa['4526_1'] = ['Novosedly;22:10','Znojmo;22:48'];
$trasa['4531_1'] = ['Znojmo;17:55','Novosedly;18:36'];
$trasa['4541_1'] = ['Hrušovany nad Jevišovkou;4:34','Novosedly;4:44'];
$trasa['4544_1'] = ['Novosedly;19:10','Hrušovany nad Jevišovkou;19:20'];
$trasa['11569_1'] = ['Znojmo;4:00','Hrušovany nad Jevišovkou;4:24'];
$trasa['11575_1'] = ['Hrušovany nad Jevišovkou;21:35','Novosedly;21:44'];
//sem patri stazene trasy




$typ['11575_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts731 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


