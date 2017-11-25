<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['121_1', '123_1', '124_1', '573_1'];
$obeh[2] = ['572_1', '277_1', '476_1'];
$obeh[3] = ['406_1', '101_1', '102_1', '105_1'];
$obeh[4] = ['104_1', '131_1'];
$obeh[5] = ['100172_1', '281_1'];
$obeh[6] = ['280_1', '173_1'];
$obeh[7] = ['130_1', '591_1', '817_1', '70210_1'];
$obeh[8] = ['100476_1', '275_1', '270_1'];
$obeh[9] = ['271_1', '274_1'];

$omezeni['121_1'] = '13';
$omezeni['123_1'] = '2512,2612,0101';
$omezeni['70210_1'] = 'XT';
$omezeni['817_1'] = 'XT';

$trasa['100172_1'] = ['Budapest-Nyugati pu.;7:42','Praha hl.n.;14:07'];
$trasa['100476_1'] = ['Břeclav;0:25','Praha hl.n.;6:04'];
$trasa['101_1'] = ['Bohumín;6:51','Wien Hbf;9:49'];
$trasa['102_1'] = ['Wien Hbf;14:10','Bohumín;17:08'];
$trasa['104_1'] = ['Wien Hbf;8:10','Bohumín;11:08'];
$trasa['105_1'] = ['Bohumín;18:51','Wien Hbf;21:49'];
$trasa['130_1'] = ['Budapest-Nyugati pu.;8:41','Bohumín;14:08'];
$trasa['131_1'] = ['Bohumín;13:51','Budapest-Nyugati pu.;19:19'];
$trasa['173_1'] = ['Praha hl.n.;13:51','Budapest-Nyugati pu.;20:19'];
$trasa['406_1'] = ['Břeclav;0:25','Bohumín;2:11'];
$trasa['476_1'] = ['Budapest-Keleti pu.;20:25','Břeclav;23:55'];
$trasa['70210_1'] = ['Hodonín;21:58','Břeclav;22:13'];
$trasa['817_1'] = ['Břeclav;21:21','Hodonín;21:33'];
$trasa['121_1'] = ['Praha hl.n.;5:24', 'Žilina;10:41'];
$trasa['123_1'] = ['Praha hl.n.;7:24', 'Žilina;12:41'];
$trasa['124_1'] = ['Žilina;13:19', 'Praha hl.n.;18:36'];
$trasa['270_1'] = ['Budapest-Nyugati pu;17:41', 'Brno hl.n.;21:36'];
$trasa['271_1'] = ['Brno hl.n.;6:22', 'Budapest-Nyugati pu;10:19'];
$trasa['274_1'] = ['Budapest-Nyugati pu;13:41', 'Praha hl.n.;20:07'];
$trasa['275_1'] = ['Praha hl.n.;7:51', 'Budapest-Nyugati pu;14:19'];
$trasa['277_1'] = ['Praha hl.n.;9:51', 'Budapest-Nyugati pu;16:19'];
$trasa['280_1'] = ['Budapest-Nyugati pu;5:41', 'Praha hl.n.;12:07'];
$trasa['281_1'] = ['Praha hl.n.;15:51', 'Budapest-Nyugati pu;22:19'];
$trasa['572_1'] = ['Břeclav;5:07', 'Praha hl.n.;8:07'];
$trasa['573_1'] = ['Praha hl.n.;21:09', 'Břeclav;0:35'];
$trasa['591_1'] = ['Bohumín;16:51', 'Břeclav;18:50'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


