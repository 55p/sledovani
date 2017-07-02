<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = '30.6.2017 23:59:59';

$obeh[1] = ['905_1', '910_1', '912_1', '909_1', '908_1', '913_1', '902_1', '917_1'];
$obeh[2] = ['901_1', '912_2', '911_1', '904_1', '903_1', '914_1', '907_1', '906_1', '915_1', '900_1'];

$omezeni['900_1'] = 'T';
$omezeni['901_1'] = 'X';
$omezeni['902_1'] = 'XT';
$omezeni['903_1'] = '6';
$omezeni['904_1'] = 'X';
$omezeni['905_1'] = 'X';
$omezeni['906_1'] = 'T';
$omezeni['907_1'] = 'T';
$omezeni['908_1'] = 'T';
$omezeni['909_1'] = 'T';
$omezeni['910_1'] = 'X';
$omezeni['911_1'] = 'X';
$omezeni['912_1'] = 'T';
$omezeni['912_2'] = 'X';
$omezeni['913_1'] = 'XT';
$omezeni['914_1'] = 'T';
$omezeni['915_1'] = 'T';
$omezeni['917_1'] = '6';

$trasa['900_1'] = ['Šumperk;20:13', 'Brno hl.n.;22:36'];
$trasa['901_1'] = ['Brno hl.n.;5:23', 'Šumperk;7:40'];
$trasa['902_1'] = ['Šumperk;18:08', 'Brno hl.n.;20:38'];
$trasa['903_1'] = ['Brno hl.n.;6:28', 'Šumperk;8:40'];
$trasa['904_1'] = ['Šumperk;16:08', 'Brno hl.n.;18:42'];
$trasa['905_1'] = ['Brno hl.n.;7:18', 'Šumperk;9:39'];
$trasa['906_1'] = ['Šumperk;14:08', 'Brno hl.n.;16:43'];
$trasa['907_1'] = ['Brno hl.n.;9:18', 'Šumperk;11:39'];
$trasa['908_1'] = ['Olomouc hl.n.;13:06', 'Brno hl.n.;14:43'];
$trasa['909_1'] = ['Brno hl.n.;11:18', 'Olomouc hl.n.;12:52'];
$trasa['910_1'] = ['Šumperk;10:08', 'Brno hl.n.;12:42'];
$trasa['911_1'] = ['Brno hl.n.;13:18', 'Šumperk;15:39'];
$trasa['912_1'] = ['Šumperk;8:08', 'Brno hl.n.;10:42'];
$trasa['912_2'] = ['Šumperk;8:08', 'Brno hl.n.;10:42'];
$trasa['913_1'] = ['Brno hl.n.;15:18', 'Šumperk;17:39'];
$trasa['914_1'] = ['Olomouc hl.n.;7:06', 'Brno hl.n.;8:42'];
$trasa['915_1'] = ['Brno hl.n.;17:18', 'Šumperk;19:42'];
$trasa['917_1'] = ['Brno hl.n.;19:18', 'Olomouc hl.n.;20:52'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


