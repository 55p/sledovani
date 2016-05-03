<?php 
$zacatekPlatnosti = '8.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('275_1', '270_1');
$obeh[2] = array('578_1', '277_1', '476_1');
$obeh[3] = array('100406_1', '101_1', '102_1', '531_1', '817_1');
$obeh[4] = array('816_1', '530_1', '103_1', '100_1');
$obeh[5] = array('407_1', '104_1', '131_1');
$obeh[6] = array('278_1', '575_1');
$obeh[7] = array('574_1', '283_1');
$obeh[8] = array('282_1', '279_1');
$obeh[9] = array('172_1', '281_1');
$obeh[10] = array('280_1', '173_1');
$obeh[11] = array('130_1', '105_1', '406_2');
$obeh[12] = array('200476_1', '271_1', '274_1', '877_1');
$obeh[13] = array('100476_1', '121_1', '124_1', '581_1');

$omezeni['581_1'] = '6';
$omezeni['816_1'] = 'X,6';
$omezeni['817_1'] = 'X,T';
$omezeni['877_1'] = 'X,T';


$trasa['100_1'] = array('Wien Hbf;18:09', 'Bohumín;21:05');
$trasa['101_1'] = array('Bohumín;6:52', 'Wien Hbf;9:51');
$trasa['102_1'] = array('Wien Hbf;14:09', 'Bohumín;17:05');
$trasa['103_1'] = array('Bohumín;10:52', 'Wien Hbf;13:51');
$trasa['104_1'] = array('Wien Hbf;8:09', 'Bohumín;11:05');
$trasa['105_1'] = array('Bohumín;16:52', 'Wien Hbf;19:51');
$trasa['121_1'] = array('Praha hl.n.;5:24', 'Žilina;10:29');
$trasa['124_1'] = array('Žilina;13:31', 'Praha hl.n.;18:39');
$trasa['130_1'] = array('Budapest-Keleti pu;8:00', 'Bohumín;14:05');
$trasa['131_1'] = array('Bohumín;13:52', 'Budapest-Keleti pu;19:35');
$trasa['172_1'] = array('Budapest-Keleti pu;7:25', 'Praha hl.n.;14:10');
$trasa['173_1'] = array('Praha hl.n.;13:52', 'Budapest-Keleti pu;20:35');
$trasa['270_1'] = array('Budapest-Keleti pu;17:25', 'Brno hl.n.;21:36');
$trasa['271_1'] = array('Brno hl.n.;6:22', 'Budapest-Keleti pu;10:35');
$trasa['274_1'] = array('Budapest-Keleti pu;13:25', 'Praha hl.n.;20:08');
$trasa['275_1'] = array('Praha hl.n.;7:52', 'Budapest-Keleti pu;14:35');
$trasa['277_1'] = array('Praha hl.n.;9:52', 'Budapest-Keleti pu;16:35');
$trasa['278_1'] = array('Budapest-Keleti pu;9:25', 'Praha hl.n.;16:08');
$trasa['279_1'] = array('Praha hl.n.;11:52', 'Budapest-Keleti pu;18:35');
$trasa['280_1'] = array('Budapest-Keleti pu;5:25', 'Praha hl.n.;12:08');
$trasa['281_1'] = array('Praha hl.n.;15:52', 'Budapest-Keleti pu;22:35');
$trasa['282_1'] = array('Bratislava hl.st.;6:10', 'Praha hl.n.;10:10');
$trasa['283_1'] = array('Praha hl.n.;17:52', 'Bratislava hl.st.;21:50');
$trasa['100406_1'] = array('Břeclav;0:13', 'Bohumín;2:03');
$trasa['406_2'] = array('Wien Hbf;22:50', 'Břeclav;23:50');
$trasa['407_1'] = array('Bohumín;2:20', 'Wien Hbf;7:02');
$trasa['476_1'] = array('Budapest-Keleti pu;20:05', 'Břeclav;23:56');
$trasa['200476_1'] = array('Břeclav;0:20', 'Brno hl.n.;0:54');
$trasa['100476_1'] = array('Brno hl.n.;1:27', 'Praha hl.n.;4:08');
$trasa['530_1'] = array('Břeclav;7:13', 'Bohumín;9:05');
$trasa['531_1'] = array('Bohumín;18:52', 'Břeclav;20:48');
$trasa['574_1'] = array('Břeclav;6:07', 'Praha hl.n.;9:08');
$trasa['575_1'] = array('Praha hl.n.;17:21', 'Břeclav;20:24');
$trasa['578_1'] = array('Brno hl.n.;5:38', 'Praha hl.n.;8:08');
$trasa['581_1'] = array('Praha hl.n.;19:52', 'Brno hl.n.;22:22');
$trasa['816_1'] = array('Hodonín;6:17', 'Břeclav;6:30');
$trasa['817_1'] = array('Břeclav;21:28', 'Hodonín;21:41');
$trasa['877_1'] = array('Praha hl.n.;20:55', 'Brno hl.n.;23:47');

$typ[100] = 'Ex';
$typ[101] = 'Ex';
$typ[102] = 'EC';
$typ[103] = 'EC';
$typ[104] = 'EC';
$typ[105] = 'EC';
$typ[121] = 'EC';
$typ[124] = 'Ex';
$typ[130] = 'EC';
$typ[131] = 'EC';
$typ[172] = 'EC';
$typ[173] = 'EC';
$typ[270] = 'EC';
$typ[271] = 'EC';
$typ[274] = 'EC';
$typ[275] = 'EC';
$typ[277] = 'EC';
$typ[278] = 'EC';
$typ[279] = 'EC';
$typ[280] = 'EC';
$typ[281] = 'EC';
$typ[282] = 'EC';
$typ[283] = 'EC';
$typ[406] = 'EN';
$typ[407] = 'EN';
$typ[476] = 'EN';
$typ[530] = 'Ex';
$typ[531] = 'Ex';
$typ[574] = 'IC';
$typ[575] = 'IC';
$typ[578] = 'IC';
$typ[581] = 'IC';
$typ[816] = 'R';
$typ[817] = 'R';
$typ[877] = 'R';



@$ts301 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>