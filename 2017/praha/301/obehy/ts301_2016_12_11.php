<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('275_1', '270_1');
$obeh[2] = array('578_1', '277_1', '476_1');
$obeh[3] = array('406_1', '101_1', '102_1', '591_1', '817_1');
$obeh[4] = array('816_1', '590_1', '103_1', '100_1');
$obeh[5] = array('407_1', '104_1', '131_1');
$obeh[6] = array('278_1', '575_1');
$obeh[7] = array('574_1', '283_1');
$obeh[8] = array('282_1', '279_1');
$obeh[9] = array('172_1', '281_1');
$obeh[10] = array('280_1', '173_1');
$obeh[11] = array('130_1', '105_1', '100406_1');
$obeh[12] = array('100476_1', '271_1', '274_1');

$omezeni['816_1'] = 'X6';
$omezeni['817_1'] = 'XT';

$trasa['100406_1'] = array('Wien Hbf;22:50','Břeclav;23:49');
$trasa['100476_1'] = array('Břeclav;0:24','Brno hl.n.;0:54');
$trasa['100_1'] = array('Wien Hbf;18:09','Bohumín;21:08');
$trasa['101_1'] = array('Bohumín;6:50','Wien Hbf;9:49');
$trasa['102_1'] = array('Wien Hbf;14:09','Bohumín;17:08');
$trasa['103_1'] = array('Bohumín;10:50','Wien Hbf;13:49');
$trasa['104_1'] = array('Wien Hbf;8:09','Bohumín;11:08');
$trasa['105_1'] = array('Bohumín;16:50','Wien Hbf;19:49');
$trasa['130_1'] = array('Budapest-Keleti pu;8:22','Bohumín;14:08');
$trasa['131_1'] = array('Bohumín;13:50','Budapest-Keleti pu;19:35');
$trasa['172_1'] = array('Budapest-Keleti pu;7:25','Praha hl.n.;14:06');
$trasa['173_1'] = array('Praha hl.n.;13:52','Budapest-Keleti pu;20:35');
$trasa['406_1'] = array('Břeclav;0:13','Bohumín;2:03');
$trasa['407_1'] = array('Bohumín;2:30','Wien Hbf;6:55');
$trasa['476_1'] = array('Budapest-Keleti pu;20:05','Břeclav;23:56');
$trasa['816_1'] = array('Hodonín;6:18','Břeclav;6:32');
$trasa['817_1'] = array('Břeclav;21:28','Hodonín;21:41');

$trasa['270_1'] = array('Budapest-Keleti;17:25', 'Brno hl.n.;21:36');
$trasa['271_1'] = array('Brno hl.n.;6:22', 'Budapest-Keleti;10:35');
$trasa['274_1'] = array('Budapest-Keleti;13:25', 'Praha hl.n.;20:06');
$trasa['275_1'] = array('Praha hl.n.;7:52', 'Budapest-Keleti;14:35');
$trasa['277_1'] = array('Praha hl.n.;9:52', 'Budapest-Keleti;16:35');
$trasa['278_1'] = array('Budapest-Keleti;9:25', 'Praha hl.n.;16:06');
$trasa['279_1'] = array('Praha hl.n.;11:52', 'Budapest-Keleti;18:35');
$trasa['280_1'] = array('Budapest-Keleti;5:25', 'Praha hl.n.;12:06');
$trasa['281_1'] = array('Praha hl.n.;15:52', 'Budapest-Keleti;22:35');
$trasa['282_1'] = array('Bratislava hl.st.;6:10', 'Praha hl.n.;10:06');
$trasa['283_1'] = array('Praha hl.n.;17:52', 'Bratislava hl.st.;21:50');
$trasa['574_1'] = array('Břeclav;6:07', 'Praha hl.n.;9:06');
$trasa['575_1'] = array('Praha hl.n.;17:19', 'Břeclav;20:22');
$trasa['578_1'] = array('Brno hl.n.;5:38', 'Praha hl.n.;8:06');
$trasa['590_1'] = array('Břeclav;7:11', 'Bohumín;9:08');
$trasa['591_1'] = array('Bohumín;18:50', 'Břeclav;20:50');


@$ts301 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>