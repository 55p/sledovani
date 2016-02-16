<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('3101_1', '3152_1', '3153_1', '3104_1', '3107_1', '3182_1', '3109_1', '3186_1');
$obeh[2] = array('3183_1', '3122_1', '3127_1', '3122_2', '3125_1', '3102_1', '3171_1', '3139_1', '3110_1', '3109_2', '3186_2', '3107_2', '3112_1');
$obeh[3] = array('3181_1', '3100_1', '3105_1', '3130_1', '3130_2', '3133_1', '3136_1', '3143_1', '3112_2', '3156_1', '3170_1');
$obeh[4] = array('3103_1', '3126_1', '3129_1', '3154_1', '3157_1', '3108_1');

$omezeni['3101_1'] = 'X';
$omezeni['3103_1'] = 'X';
$omezeni['3104_1'] = 'X';
$omezeni['3107_1'] = 'X';
$omezeni['3107_2'] = '25';
$omezeni['3108_1'] = 'X';
$omezeni['3109_1'] = '25';
$omezeni['3109_2'] = 'X';
$omezeni['3110_1'] = 'X';
$omezeni['3112_1'] = '25';
$omezeni['3112_2'] = 'X';
$omezeni['3122_1'] = 'X';
$omezeni['3122_2'] = '25';
$omezeni['3125_1'] = '25';
$omezeni['3126_1'] = 'X';
$omezeni['3127_1'] = 'X';
$omezeni['3129_1'] = 'X';
$omezeni['3130_1'] = 'XT';
$omezeni['3130_2'] = '6';
$omezeni['3136_1'] = 'X';
$omezeni['3139_1'] = 'X';
$omezeni['3143_1'] = 'X';
$omezeni['3152_1'] = 'X';
$omezeni['3153_1'] = 'X';
$omezeni['3154_1'] = 'X';
$omezeni['3156_1'] = '25';
$omezeni['3157_1'] = 'X';
$omezeni['3170_1'] = '25';
$omezeni['3171_1'] = 'X';
$omezeni['3182_1'] = 'X';
$omezeni['3183_1'] = '25';
$omezeni['3186_1'] = '25';
$omezeni['3186_2'] = 'X';

$trasa['3100_1'] = array('Ostrava hl.n.;4:53', 'Valašské Meziříčí;7:00');
$trasa['3101_1'] = array('Valašské Meziříčí;3:48', 'Ostrava hl.n.;5:37');
$trasa['3102_1'] = array('Ostrava hl.n.;10:53', 'Valašské Meziříčí;12:45');
$trasa['3103_1'] = array('Valašské Meziříčí;4:35', 'Ostrava hl.n.;6:37');
$trasa['3104_1'] = array('Ostrava hl.n.;13:23', 'Valašské Meziříčí;15:17');
$trasa['3105_1'] = array('Valašské Meziříčí;7:13', 'Ostrava hl.n.;9:07');
$trasa['3107_1'] = array('Valašské Meziříčí;15:30', 'Ostrava hl.n.;17:37');
$trasa['3107_2'] = array('Valašské Meziříčí;15:30', 'Ostrava hl.n.;17:37');
$trasa['3108_1'] = array('Ostrava hl.n.;15:23', 'Valašské Meziříčí;17:17');
$trasa['3109_1'] = array('Valašské Meziříčí;19:24', 'Ostrava hl.n.;21:07');
$trasa['3109_2'] = array('Valašské Meziříčí;19:24', 'Ostrava hl.n.;21:07');
$trasa['3110_1'] = array('Ostrava hl.n.;16:23', 'Valašské Meziříčí;18:24');
$trasa['3112_1'] = array('Ostrava hl.n.;17:53', 'Frýdek-Místek;18:26');
$trasa['3112_2'] = array('Ostrava hl.n.;17:53', 'Valašské Meziříčí;20:07');
$trasa['3122_1'] = array('Ostrava hl.n.;5:53', 'Frenštát pod Radhoštěm město;7:17');
$trasa['3122_2'] = array('Frýdek-Místek;6:30', 'Frenštát pod Radhoštěm město;7:17');
$trasa['3125_1'] = array('Frýdek-Místek;7:33', 'Ostrava hl.n.;8:07');
$trasa['3126_1'] = array('Ostrava hl.n.;7:53', 'Frenštát pod Radhoštěm město;9:17');
$trasa['3127_1'] = array('Frenštát pod Radhoštěm město;8:47', 'Ostrava hl.n.;10:07');
$trasa['3129_1'] = array('Frenštát pod Radhoštěm;9:48', 'Ostrava hl.n.;11:07');
$trasa['3130_1'] = array('Ostrava hl.n.;9:53', 'Frenštát pod Radhoštěm město;11:17');
$trasa['3130_2'] = array('Ostrava hl.n.;9:53', 'Frenštát pod Radhoštěm;11:11');
$trasa['3133_1'] = array('Frenštát pod Radhoštěm;11:48', 'Ostrava hl.n.;13:07');
$trasa['3136_1'] = array('Ostrava hl.n.;13:53', 'Frenštát pod Radhoštěm město;15:17');
$trasa['3139_1'] = array('Frenštát pod Radhoštěm;14:18', 'Ostrava hl.n.;15:37');
$trasa['3143_1'] = array('Frenštát pod Radhoštěm;15:48', 'Ostrava hl.n.;17:07');
$trasa['3152_1'] = array('Ostrava hl.n.;6:23', 'Frýdlant nad Ostravicí;7:14');
$trasa['3153_1'] = array('Frýdlant nad Ostravicí;7:47', 'Ostrava hl.n.;8:37');
$trasa['3154_1'] = array('Ostrava hl.n.;12:23', 'Frýdlant nad Ostravicí;13:14');
$trasa['3156_1'] = array('Ostrava hl.n.;14:23', 'Frýdlant nad Ostravicí;15:14');
$trasa['3157_1'] = array('Frýdlant nad Ostravicí;13:46', 'Ostrava hl.n.;14:37');
$trasa['3170_1'] = array('Frýdlant nad Ostravicí;15:17', 'Valašské Meziříčí;16:17');
$trasa['3171_1'] = array('Valašské Meziříčí;13:24', 'Frenštát pod Radhoštěm;13:56');
$trasa['3181_1'] = array('Frýdek-Místek;3:17', 'Ostrava hl.n.;3:49');
$trasa['3182_1'] = array('Ostrava hl.n.;18:23', 'Frýdek-Místek;18:56');
$trasa['3183_1'] = array('Frýdek-Místek;4:33', 'Ostrava hl.n.;5:07');
$trasa['3186_1'] = array('Ostrava hl.n.;21:50', 'Frýdek-Místek;22:23');
$trasa['3186_2'] = array('Ostrava hl.n.;21:50', 'Frýdek-Místek;22:23');


@$ts881 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>