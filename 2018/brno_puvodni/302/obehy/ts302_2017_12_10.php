<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1638_1', '914_1', '907_1', '908_1', '906_1', '915_1', '900_1', '917_1'];
$obeh[2] = ['914_2', '909_1', '906_2', '917_2', '912_1', '909_2', '908_2', '913_1', '902_1', '903_1'];

$omezeni['1638_1'] = 'X';
$omezeni['900_1'] = '6';
$omezeni['902_1'] = '6';
$omezeni['903_1'] = 'T';
$omezeni['906_1'] = '6';
$omezeni['906_2'] = 'X';
$omezeni['907_1'] = 'X6';
$omezeni['908_1'] = 'X';
$omezeni['908_2'] = '6';
$omezeni['909_1'] = 'X';
$omezeni['909_2'] = '6';
$omezeni['912_1'] = '6';
$omezeni['913_1'] = '6';
$omezeni['914_1'] = '6';
$omezeni['914_2'] = 'X';
$omezeni['915_1'] = 'X6';
$omezeni['917_1'] = 'T';
$omezeni['917_2'] = 'X';

$trasa['1638_1'] = ['Šumperk;4:49', 'Brno hl.n.;7:45'];
$trasa['900_1'] = ['Šumperk;20:15', 'Brno hl.n.;22:36'];
$trasa['902_1'] = ['Šumperk;18:09', 'Brno hl.n.;20:38'];
$trasa['903_1'] = ['Brno hl.n.;6:28', 'Šumperk;8:41'];
$trasa['906_1'] = ['Šumperk;14:09', 'Brno hl.n.;16:43'];
$trasa['906_2'] = ['Šumperk;14:09', 'Brno hl.n.;16:43'];
$trasa['907_1'] = ['Brno hl.n.;9:18', 'Šumperk;11:41'];
$trasa['908_1'] = ['Šumperk;12:09', 'Brno hl.n.;14:43'];
$trasa['908_2'] = ['Olomouc hl.n.;13:06', 'Brno hl.n.;14:43'];
$trasa['909_1'] = ['Brno hl.n.;11:18', 'Šumperk;13:41'];
$trasa['909_2'] = ['Brno hl.n.;11:18', 'Olomouc hl.n.;12:52'];
$trasa['912_1'] = ['Šumperk;8:09', 'Brno hl.n.;10:42'];
$trasa['913_1'] = ['Brno hl.n.;15:18', 'Šumperk;17:41'];
$trasa['914_1'] = ['Šumperk;6:11', 'Brno hl.n.;8:42'];
$trasa['914_2'] = ['Šumperk;6:11', 'Brno hl.n.;8:42'];
$trasa['915_1'] = ['Brno hl.n.;17:18', 'Šumperk;19:42'];
$trasa['917_1'] = ['Brno hl.n.;19:18', 'Šumperk;21:41'];
$trasa['917_2'] = ['Brno hl.n.;19:18', 'Šumperk;21:41'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts302 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


