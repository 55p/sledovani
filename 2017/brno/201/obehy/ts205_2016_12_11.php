<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4691_1', '4954_1', '4961_1', '4970_1', '4977_1', '4982_1', '4603_1', '4620_1', '4617_1', '4604_1', '4633_1'];
$obeh[2] = ['4953_1', '4958_1', '4965_1', '4971_1', '4974_1', '4981_1', '104938_1', '4938_1'];

$omezeni['104938_1'] = 'X5';
$omezeni['4603_1'] = '6';
$omezeni['4604_1'] = '6';
$omezeni['4617_1'] = '6';
$omezeni['4620_1'] = '6';
$omezeni['4633_1'] = '6';
$omezeni['4691_1'] = 'X1';
$omezeni['4938_1'] = 'X5';
$omezeni['4953_1'] = 'X';
$omezeni['4954_1'] = 'X';
$omezeni['4958_1'] = 'X';
$omezeni['4961_1'] = 'X';
$omezeni['4965_1'] = 'X';
$omezeni['4970_1'] = 'X';
$omezeni['4971_1'] = 'X';
$omezeni['4974_1'] = 'X';
$omezeni['4977_1'] = 'X';
$omezeni['4981_1'] = 'X';
$omezeni['4982_1'] = 'X';

$trasa['104938_1'] = ['Vranovice;22:20','Brno hl.n.;22:49'];
$trasa['4691_1'] = ['Brno hl.n.;4:38','Vranovice;4:57'];
$trasa['4938_1'] = ['Brno hl.n.;23:01','Tišnov;23:40'];

$poznamkaObehu['104938_1'] = ['pk', 'postrk'];

$trasa['4617_1'] = ['Tišnov;12:28', 'Břeclav;14:16'];
$trasa['4603_1'] = ['Tišnov;6:28', 'Břeclav;8:21'];
$trasa['4604_1'] = ['Břeclav;15:42', 'Tišnov;17:32'];
$trasa['4620_1'] = ['Břeclav;9:38', 'Tišnov;11:32'];
$trasa['4633_1'] = ['Tišnov;18:28', 'Brno hl.n.;19:07'];
$trasa['4953_1'] = ['Tišnov;5:13', 'Hrušovany u Brna;6:16'];
$trasa['4954_1'] = ['Vranovice;5:34', 'Tišnov;6:46'];
$trasa['4958_1'] = ['Hrušovany u Brna;6:42', 'Tišnov;7:46'];
$trasa['4961_1'] = ['Tišnov;7:13', 'Brno hl.n.;7:52'];
$trasa['4965_1'] = ['Tišnov;8:13', 'Brno hl.n.;8:51'];
$trasa['4970_1'] = ['Brno hl.n.;14:08', 'Tišnov;14:46'];
$trasa['4971_1'] = ['Brno hl.n.;13:55', 'Hrušovany u Brna;14:11'];
$trasa['4974_1'] = ['Hrušovany u Brna;14:42', 'Tišnov;15:46'];
$trasa['4977_1'] = ['Tišnov;15:13', 'Hrušovany u Brna;16:11'];
$trasa['4981_1'] = ['Tišnov;16:13', 'Vranovice;17:26'];
$trasa['4982_1'] = ['Hrušovany u Brna;16:42', 'Tišnov;17:46'];

$typ['4691_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts205 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


