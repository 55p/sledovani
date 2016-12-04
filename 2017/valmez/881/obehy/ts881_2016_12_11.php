<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['3101_1', '3154_1', '3153_1', '3104_1', '3107_1', '3182_1', '3109_1', '3186_1'];
$obeh[2] = ['3185_1', '3122_1', '3125_1', '3122_2', '3127_1', '3102_1', '3171_1', '3139_1', '3110_1', '3109_2', '3186_2', '3107_2', '3112_1'];
$obeh[3] = ['3181_1', '3183_1', '3100_1', '3105_1', '3103_1', '3103_2', '3133_1', '3136_1', '3143_1', '3112_2', '3158_1', '3170_1'];
$obeh[4] = ['3103_3', '3126_1', '3129_1', '3156_1', '3157_1', '3108_1', '1642_1', '3155_1', '3158_2', '3170_2'];

$omezeni['1642_1'] = '2312,2712,2812,2912,3012';
$omezeni['3101_1'] = 'X';
$omezeni['3103_1'] = '6';
$omezeni['3103_2'] = 'XT';
$omezeni['3103_3'] = 'X';
$omezeni['3104_1'] = 'X';
$omezeni['3107_1'] = 'X';
$omezeni['3107_2'] = '25';
$omezeni['3108_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['3109_1'] = '25';
$omezeni['3109_2'] = 'X';
$omezeni['3110_1'] = 'X';
$omezeni['3112_1'] = '25';
$omezeni['3112_2'] = 'X';
$omezeni['3122_1'] = '25';
$omezeni['3122_2'] = 'X';
$omezeni['3125_1'] = '25';
$omezeni['3126_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['3127_1'] = 'X';
$omezeni['3129_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['3136_1'] = 'X';
$omezeni['3139_1'] = 'X';
$omezeni['3143_1'] = 'X';
$omezeni['3153_1'] = 'X';
$omezeni['3154_1'] = 'X';
$omezeni['3155_1'] = '2312,2712,2812,2912,3012';
$omezeni['3156_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['3157_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['3158_1'] = '25';
$omezeni['3158_2'] = '2312,2712,2812,2912,3012';
$omezeni['3170_1'] = '25';
$omezeni['3170_2'] = '2312,2712,2812,2912,3012';
$omezeni['3171_1'] = 'X';
$omezeni['3181_1'] = '25';
$omezeni['3182_1'] = 'X';
$omezeni['3183_1'] = 'X';
$omezeni['3186_1'] = '25';
$omezeni['3186_2'] = 'X';

$trasa['3103_1'] = ['Ostrava hl.n.;9:51','Frenštát pod Radhoštěm;11:10'];
$trasa['3107_2'] = ['Valašské Meziříčí;15:34','Ostrava hl.n.;17:38'];
$trasa['3109_1'] = ['Valašské Meziříčí;19:25','Ostrava hl.n.;21:08'];
$trasa['3112_1'] = ['Ostrava hl.n.;17:51','Frýdek-Místek;18:27'];
$trasa['3122_1'] = ['Ostrava hl.n.;5:53','Frýdek-Místek;6:27'];
$trasa['3186_1'] = ['Ostrava hl.n.;21:51','Frýdek-Místek;22:23'];

$trasa['1642_1'] = ['Ostrava hl.n.;8:15', 'Frýdlant nad Ostravicí;9:13'];
$trasa['3101_1'] = ['Valašské Meziříčí;3:51', 'Ostrava hl.n.;5:38'];
$trasa['3103_2'] = ['Valašské Meziříčí;4:39', 'Ostrava hl.n.;6:38'];
$trasa['3104_1'] = ['Ostrava hl.n.;13:21', 'Valašské Meziříčí;15:18'];
$trasa['3107_1'] = ['Valašské Meziříčí;15:34', 'Ostrava hl.n.;17:38'];
$trasa['3109_2'] = ['Valašské Meziříčí;19:25', 'Ostrava hl.n.;21:08'];
$trasa['3112_2'] = ['Ostrava hl.n.;17:51', 'Valašské Meziříčí;20:06'];
$trasa['3125_1'] = ['Frenštát pod Radhoštěm;6:55', 'Frýdek-Místek;7:30'];
$trasa['3127_1'] = ['Frenštát pod Radhoštěm město;8:50', 'Ostrava hl.n.;10:08'];
$trasa['3133_1'] = ['Frenštát pod Radhoštěm;11:55', 'Ostrava hl.n.;13:09'];
$trasa['3139_1'] = ['Frenštát pod Radhoštěm;14:25', 'Ostrava hl.n.;15:38'];
$trasa['3153_1'] = ['Frýdlant nad Ostravicí;7:47', 'Ostrava hl.n.;8:38'];
$trasa['3155_1'] = ['Frýdlant nad Ostravicí;12:47', 'Ostrava hl.n.;13:38'];
$trasa['3157_1'] = ['Frýdlant nad Ostravicí;13:47', 'Ostrava hl.n.;14:38'];
$trasa['3158_2'] = ['Ostrava hl.n.;14:21', 'Frýdlant nad Ostravicí;15:14'];
$trasa['3170_2'] = ['Frýdlant nad Ostravicí;15:18', 'Valašské Meziříčí;16:18'];
$trasa['3181_1'] = ['Frýdek-Místek;3:12', 'Ostrava hl.n.;3:43'];
$trasa['3183_1'] = ['Frýdek-Místek;3:24', 'Ostrava hl.n.;3:57'];
$trasa['3186_2'] = ['Ostrava hl.n.;21:51', 'Frýdek-Místek;22:23'];
$trasa['3100_1'] = ['Ostrava hl.n.;4:53', 'Valašské Meziříčí;7:01'];
$trasa['3102_1'] = ['Ostrava hl.n.;10:51', 'Valašské Meziříčí;12:44'];
$trasa['3103_3'] = ['Valašské Meziříčí;4:39', 'Ostrava hl.n.;6:38'];
$trasa['3105_1'] = ['Valašské Meziříčí;7:17', 'Ostrava hl.n.;9:09'];
$trasa['3108_1'] = ['Ostrava hl.n.;15:21', 'Valašské Meziříčí;17:16'];
$trasa['3110_1'] = ['Ostrava hl.n.;16:21', 'Valašské Meziříčí;18:22'];
$trasa['3122_2'] = ['Ostrava hl.n.;5:53', 'Frenštát pod Radhoštěm město;7:15'];
$trasa['3126_1'] = ['Ostrava hl.n.;7:52', 'Frenštát pod Radhoštěm město;9:15'];
$trasa['3129_1'] = ['Frenštát pod Radhoštěm;9:57', 'Ostrava hl.n.;11:08'];
$trasa['3136_1'] = ['Ostrava hl.n.;13:51', 'Frenštát pod Radhoštěm město;15:15'];
$trasa['3143_1'] = ['Frenštát pod Radhoštěm;15:55', 'Ostrava hl.n.;17:09'];
$trasa['3154_1'] = ['Ostrava hl.n.;6:21', 'Frýdlant nad Ostravicí;7:14'];
$trasa['3156_1'] = ['Ostrava hl.n.;12:21', 'Frýdlant nad Ostravicí;13:14'];
$trasa['3158_1'] = ['Ostrava hl.n.;14:21', 'Frýdlant nad Ostravicí;15:14'];
$trasa['3170_1'] = ['Frýdlant nad Ostravicí;15:18', 'Valašské Meziříčí;16:18'];
$trasa['3171_1'] = ['Valašské Meziříčí;13:17', 'Frenštát pod Radhoštěm;13:50'];
$trasa['3182_1'] = ['Ostrava hl.n.;18:21', 'Frýdek-Místek;18:57'];
$trasa['3185_1'] = ['Frýdek-Místek;4:27', 'Ostrava hl.n.;5:01'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts881 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


