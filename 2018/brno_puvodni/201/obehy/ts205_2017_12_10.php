<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4691_1', '4950_1', '4959_1', '4962_1', '4970_1', '4979_1', '4982_1', '4603_1', '4620_1', '4617_1', '4604_1', '4633_1'];
$obeh[2] = ['4955_1', '4958_1', '4967_1', '4971_1', '4974_1', '4983_1', '104938_1', '104938_2'];

$omezeni['104938_1'] = 'X5';
$omezeni['104938_2'] = 'X5';
$omezeni['4603_1'] = '6';
$omezeni['4604_1'] = '6';
$omezeni['4617_1'] = '6';
$omezeni['4620_1'] = '6';
$omezeni['4633_1'] = '6';
$omezeni['4691_1'] = 'X1';
$omezeni['4950_1'] = 'X';
$omezeni['4955_1'] = 'X';
$omezeni['4958_1'] = 'X';
$omezeni['4959_1'] = 'X';
$omezeni['4962_1'] = 'X';
$omezeni['4967_1'] = 'X';
$omezeni['4970_1'] = 'X';
$omezeni['4971_1'] = 'X';
$omezeni['4974_1'] = 'X';
$omezeni['4979_1'] = 'X';
$omezeni['4982_1'] = 'X';
$omezeni['4983_1'] = 'X';

$trasa['104938_1'] = ['Vranovice;22:17','Brno hl.n.;22:50'];
$trasa['104938_2'] = ['Brno hl.n.;23:01','Tišnov;23:37'];
$trasa['4691_1'] = ['Brno hl.n.;3:55','Vranovice;4:12'];
$trasa['4603_1'] = ['Tišnov;6:30', 'Břeclav;8:15'];
$trasa['4604_1'] = ['Břeclav;15:41', 'Tišnov;17:29'];
$trasa['4617_1'] = ['Tišnov;12:30', 'Břeclav;14:15'];
$trasa['4620_1'] = ['Břeclav;9:41', 'Tišnov;11:29'];
$trasa['4633_1'] = ['Tišnov;18:30', 'Brno hl.n.;19:07'];
$trasa['4950_1'] = ['Vranovice;4:35', 'Tišnov;5:44'];
$trasa['4955_1'] = ['Tišnov;5:15', 'Hrušovany u Brna;6:16'];
$trasa['4958_1'] = ['Hrušovany u Brna;6:41', 'Tišnov;7:43'];
$trasa['4959_1'] = ['Tišnov;6:15', 'Hrušovany u Brna;7:18'];
$trasa['4962_1'] = ['Hrušovany u Brna;7:42', 'Brno hl.n.;7:59'];
$trasa['4967_1'] = ['Tišnov;8:15', 'Brno hl.n.;8:52'];
$trasa['4970_1'] = ['Brno hl.n.;14:06', 'Tišnov;14:42'];
$trasa['4971_1'] = ['Brno hl.n.;13:55', 'Hrušovany u Brna;14:12'];
$trasa['4974_1'] = ['Hrušovany u Brna;14:41', 'Tišnov;15:43'];
$trasa['4982_1'] = ['Hrušovany u Brna;16:41', 'Tišnov;17:43'];
$trasa['4983_1'] = ['Tišnov;16:15', 'Vranovice;17:26'];
$trasa['4979_1'] = ['Tišnov;15:16', 'Hrušovany u Brna;16:12'];

$poznamkaObehu['104938_1'] = ['vlož', 'vložená'];

$typ['4691_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts205 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


