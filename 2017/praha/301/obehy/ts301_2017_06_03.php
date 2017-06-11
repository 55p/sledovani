<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['275_1', '270_1'];
$obeh[2] = ['578_1', '277_1', '476_1'];
$obeh[3] = ['406_1', '101_1', '102_1', '591_1', '817_1'];
$obeh[4] = ['816_1', '590_1', '103_1', '100_1'];
$obeh[5] = ['407_1', '104_1', '131_1'];
$obeh[6] = ['172_1', '281_1'];
$obeh[7] = ['280_1', '173_1'];
$obeh[8] = ['130_1', '105_1', '100406_1'];
$obeh[9] = ['100476_1', '271_1', '274_1'];

$omezeni['816_1'] = 'X6';
$omezeni['817_1'] = 'XT';

$trasa['100406_1'] = ['Wien Hbf;22:50','Břeclav;23:49'];
$trasa['100476_1'] = ['Břeclav;0:24','Brno hl.n.;0:54'];
$trasa['100_1'] = ['Wien Hbf;18:09','Bohumín;21:08'];
$trasa['101_1'] = ['Bohumín;6:50','Wien Hbf;9:49'];
$trasa['102_1'] = ['Wien Hbf;14:09','Bohumín;17:08'];
$trasa['103_1'] = ['Bohumín;10:50','Wien Hbf;13:49'];
$trasa['104_1'] = ['Wien Hbf;8:09','Bohumín;11:08'];
$trasa['105_1'] = ['Bohumín;16:50','Wien Hbf;19:49'];
$trasa['130_1'] = ['Budapest-Keleti pu;8:22','Bohumín;14:08'];
$trasa['131_1'] = ['Bohumín;13:50','Budapest-Keleti pu;19:35'];
$trasa['172_1'] = ['Budapest-Keleti;7:25','Praha hl.n.;14:06'];
$trasa['173_1'] = ['Praha hl.n.;13:52','Budapest-Keleti pu;20:35'];
$trasa['270_1'] = ['Budapest-Keleti;17:25','Brno hl.n.;21:36'];
$trasa['271_1'] = ['Brno hl.n.;6:22','Budapest-Keleti;10:35'];
$trasa['274_1'] = ['Budapest-Keleti;13:25','Praha hl.n.;20:06'];
$trasa['275_1'] = ['Praha hl.n.;7:52','Budapest-Keleti;14:35'];
$trasa['277_1'] = ['Praha hl.n.;9:52','Budapest-Keleti;16:35'];
$trasa['280_1'] = ['Budapest-Keleti pu;5:25','Praha hl.n.;12:06'];
$trasa['281_1'] = ['Praha hl.n.;15:52','Budapest-Keleti pu;22:35'];
$trasa['406_1'] = ['Břeclav;0:13','Bohumín;2:03'];
$trasa['407_1'] = ['Bohumín;2:30','Wien Hbf;6:55'];
$trasa['476_1'] = ['Budapest-Keleti pu;20:05','Břeclav;23:56'];
$trasa['578_1'] = ['Brno hl.n.;5:38','Praha hl.n.;8:06'];
$trasa['590_1'] = ['Břeclav;7:11','Bohumín;9:08'];
$trasa['591_1'] = ['Bohumín;18:50','Břeclav;20:50'];
$trasa['816_1'] = ['Hodonín;6:18','Břeclav;6:32'];
$trasa['817_1'] = ['Břeclav;21:28','Hodonín;21:41'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


