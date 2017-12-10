<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3101_1', '3154_1', '3153_1', '3104_1', '3107_1', '3182_1', '3112_1'];
$obeh[2] = ['3185_1', '3122_1', '3127_1', '3122_2', '3125_1', '3102_1', '3171_1', '3139_1', '3110_1', '3109_1', '3186_1'];
$obeh[3] = ['3183_1', '3100_1', '3105_1', '3130_1', '3130_2', '3133_1', '3136_1', '3143_1', '3112_2', '3158_1', '3170_1'];
$obeh[4] = ['3103_1', '3126_1', '3129_1', '3156_1', '3157_1', '3108_1'];

$omezeni['3101_1'] = 'X';
$omezeni['3103_1'] = 'X';
$omezeni['3104_1'] = 'X';
$omezeni['3108_1'] = 'X';
$omezeni['3110_1'] = 'X';
$omezeni['3112_1'] = '25';
$omezeni['3112_2'] = 'X';
$omezeni['3122_1'] = 'X';
$omezeni['3122_2'] = '25';
$omezeni['3125_1'] = '25';
$omezeni['3126_1'] = 'X';
$omezeni['3127_1'] = 'X';
$omezeni['3129_1'] = 'X';
$omezeni['3130_1'] = '6';
$omezeni['3130_2'] = 'XT';
$omezeni['3136_1'] = 'X';
$omezeni['3139_1'] = 'X';
$omezeni['3143_1'] = 'X';
$omezeni['3153_1'] = 'X';
$omezeni['3154_1'] = 'X';
$omezeni['3156_1'] = 'X';
$omezeni['3157_1'] = 'X';
$omezeni['3158_1'] = '25';
$omezeni['3170_1'] = '25';
$omezeni['3171_1'] = 'X';
$omezeni['3182_1'] = 'X';

$trasa['3100_1'] = ['Ostrava hl.n.;4:51', 'Valašské Meziříčí;7:00'];
$trasa['3101_1'] = ['Valašské Meziříčí;3:50', 'Ostrava hl.n.;5:36'];
$trasa['3102_1'] = ['Ostrava hl.n.;10:51', 'Valašské Meziříčí;12:44'];
$trasa['3103_1'] = ['Valašské Meziříčí;4:38', 'Ostrava hl.n.;6:36'];
$trasa['3104_1'] = ['Ostrava hl.n.;13:21', 'Valašské Meziříčí;15:18'];
$trasa['3105_1'] = ['Valašské Meziříčí;7:16', 'Ostrava hl.n.;9:09'];
$trasa['3107_1'] = ['Valašské Meziříčí;15:34', 'Ostrava hl.n.;17:36'];
$trasa['3108_1'] = ['Ostrava hl.n.;15:21', 'Valašské Meziříčí;17:10'];
$trasa['3109_1'] = ['Valašské Meziříčí;19:24', 'Ostrava hl.n.;21:06'];
$trasa['3110_1'] = ['Ostrava hl.n.;16:21', 'Valašské Meziříčí;18:22'];
$trasa['3112_1'] = ['Ostrava hl.n.;17:51', 'Frýdek-Místek;18:25'];
$trasa['3112_2'] = ['Ostrava hl.n.;17:51', 'Valašské Meziříčí;20:06'];
$trasa['3122_1'] = ['Ostrava hl.n.;5:51', 'Frenštát pod Radhoštěm město;7:13'];
$trasa['3122_2'] = ['Frýdek-Místek;6:29', 'Frenštát pod Radhoštěm město;7:13'];
$trasa['3125_1'] = ['Frýdek-Místek;7:32', 'Ostrava hl.n.;8:07'];
$trasa['3126_1'] = ['Ostrava hl.n.;7:51', 'Frenštát pod Radhoštěm město;9:13'];
$trasa['3127_1'] = ['Frenštát pod Radhoštěm město;8:47', 'Ostrava hl.n.;10:06'];
$trasa['3129_1'] = ['Frenštát pod Radhoštěm;9:56', 'Ostrava hl.n.;11:09'];
$trasa['3130_1'] = ['Ostrava hl.n.;9:53', 'Frenštát pod Radhoštěm;11:08'];
$trasa['3130_2'] = ['Ostrava hl.n.;9:53', 'Frenštát pod Radhoštěm město;11:13'];
$trasa['3133_1'] = ['Frenštát pod Radhoštěm;11:53', 'Ostrava hl.n.;13:09'];
$trasa['3136_1'] = ['Ostrava hl.n.;13:51', 'Frenštát pod Radhoštěm město;15:13'];
$trasa['3139_1'] = ['Frenštát pod Radhoštěm;14:23', 'Ostrava hl.n.;15:36'];
$trasa['3143_1'] = ['Frenštát pod Radhoštěm;15:53', 'Ostrava hl.n.;17:09'];
$trasa['3153_1'] = ['Frýdlant nad Ostravicí;7:45', 'Ostrava hl.n.;8:36'];
$trasa['3154_1'] = ['Ostrava hl.n.;6:21', 'Frýdlant nad Ostravicí;7:12'];
$trasa['3156_1'] = ['Ostrava hl.n.;12:21', 'Frýdlant nad Ostravicí;13:12'];
$trasa['3157_1'] = ['Frýdlant nad Ostravicí;13:45', 'Ostrava hl.n.;14:36'];
$trasa['3158_1'] = ['Ostrava hl.n.;14:21', 'Frýdlant nad Ostravicí;15:12'];
$trasa['3170_1'] = ['Frýdlant nad Ostravicí;15:16', 'Valašské Meziříčí;16:18'];
$trasa['3171_1'] = ['Valašské Meziříčí;13:16', 'Frenštát pod Radhoštěm;13:49'];
$trasa['3182_1'] = ['Ostrava hl.n.;18:21', 'Frýdek-Místek;18:55'];
$trasa['3183_1'] = ['Frýdek-Místek;3:20', 'Ostrava hl.n.;3:54'];
$trasa['3185_1'] = ['Frýdek-Místek;4:27', 'Ostrava hl.n.;5:06'];
$trasa['3186_1'] = ['Ostrava hl.n.;21:47', 'Frýdek-Místek;22:22'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts881 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


