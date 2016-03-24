<?php
$typ[116] = 'EC';
$typ[117] = 'EC';
$typ[140] = 'Ex';
$typ[141] = 'Ex';
$typ[144] = 'Ex';
$typ[145] = 'Ex';
$typ[146] = 'Ex';
$typ[147] = 'Ex';
$typ[148] = 'Ex';
$typ[149] = 'Ex';
$typ[152] = 'Ex';
$typ[153] = 'Ex';
$typ[154] = 'Ex';
$typ[155] = 'EC';
$typ[442] = 'EN';
$typ[443] = 'EN';
$typ[444] = 'EN';
$typ[445] = 'EN';
$typ[100553] = 'IC';
$typ[602] = 'R';
$typ[605] = 'R';
$typ[606] = 'R';
$typ[609] = 'R';
$typ[610] = 'R';
$typ[613] = 'R';
$typ[614] = 'R';
$typ[617] = 'R';
$typ[853] = 'R';
$typ[878] = 'R';
$typ[879] = 'R';

$typ[142] = 'Ex';
$typ[143] = 'Ex';
$typ[150] = 'Ex';
$typ[151] = 'Ex';
$typ[503] = 'IC';
$typ[509] = 'IC';
$typ[502] = 'IC';
$typ[508] = 'IC';
$typ[513] = 'IC';
$typ[514] = 'IC';
$typ[540] = 'Ex';
$typ[541] = 'Ex';

$typ[242] = 'EC';
$typ[243] = 'EC';

$typ[1306] = $typ[1307] = 'Sv';

$skupiny[] = $ts140 = new TS ('TS 140');
$skupiny[] = $ts141 = new TS ('TS 141');
$skupiny[] = $ts142 = new TS ('TS 142');
$skupiny[] = $ts143 = new TS ('TS 143');
$skupiny[] = $ts147 = new TS ('TS 147');
//$skupiny[] = $ts149 = new TS ('TS 149');
$skupiny[] = $ts170 = new TS ('TS 170');

require __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@require __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

$poznamkaObehu['116_1'] = array('', 'Praha');
$poznamkaObehu['117_1'] = array('', 'Praha');
$poznamkaObehu['140'] = array('', 'Beskyd');
$poznamkaObehu['141_1'] = array('', 'Beskyd');
$poznamkaObehu['142'] = array('', 'Hutník');
$poznamkaObehu['143'] = array('', 'Hutník');
$poznamkaObehu['144_1'] = array('', 'Odra');
$poznamkaObehu['145_1'] = array('', 'Odra');
$poznamkaObehu['146_1'] = array('', 'Landek');
$poznamkaObehu['147_1'] = array('', 'Landek');
$poznamkaObehu['148_1'] = array('', 'Hukvaldy');
$poznamkaObehu['149_1'] = array('', 'Hukvaldy');
$poznamkaObehu['150_1'] = array('', 'Petr Bezruč');
$poznamkaObehu['151_1'] = array('', 'Petr Bezruč');
$poznamkaObehu['152_1'] = array('', 'Kysuca');
$poznamkaObehu['153_1'] = array('', 'Kysuca');
$poznamkaObehu['153'] = array('', 'Kysuca');
$poznamkaObehu['154'] = array('', 'Jan Perner');
$poznamkaObehu['155'] = array('', 'Jan Perner');
$poznamkaObehu['442_1'] = array('', 'Bohemia');
$poznamkaObehu['443_1'] = array('', 'Bohemia');
$poznamkaObehu['444_1'] = array('', 'Slovakia');
$poznamkaObehu['445_1'] = array('', 'Slovakia');
$poznamkaObehu['513_1'] = array('', 'Opava');
$poznamkaObehu['514_1'] = array('', 'Opava');
$poznamkaObehu['540'] = array('', 'Ostravan');
$poznamkaObehu['541'] = array('', 'Ostravan');
$poznamkaObehu['602_1'] = array('', 'Chomutovka');
$poznamkaObehu['605_1'] = array('', 'Krušnohor');
$poznamkaObehu['606_1'] = array('', 'Salubia');
$poznamkaObehu['609_1'] = array('', 'Bílina');
$poznamkaObehu['610_1'] = array('', 'Karlex');
$poznamkaObehu['613_1'] = array('', 'Svatava');
$poznamkaObehu['614_1'] = array('', 'Ohře');
$poznamkaObehu['617_1'] = array('', 'Větruše');
$poznamkaObehu['853_1'] = array('', 'Matalík');
$poznamkaObehu['878_1'] = array('', 'Jan Kašpar');
?>