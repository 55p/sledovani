<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('3152_1', '3151_1', '3158_1', '3180_1', '3191_1');
$obeh[2] = array('3120_1', '3120_2', '3125_1', '3128_1', '3131_1', '3134_1', '3142_1', '3149_1', '3184_1', '3187_1');
$obeh[3] = array('1642_1', '3129_1', '3132_1', '3137_1', '3140_1', '3147_1', '3146_1');
$obeh[4] = array('3121_1', '3124_1', '3127_1', '3136_1', '3143_1', '3135_1', '3138_1', '3145_1', '3144_1', '3193_1');
$obeh[5] = array('3123_1', '3123_2', '3126_1', '3135_2', '3138_2', '3145_2');

$omezeni['1642_1'] = '25';
$omezeni['3120_1'] = 'X1';
$omezeni['3120_2'] = 'X2345';
$omezeni['3123_1'] = 'X';
$omezeni['3123_2'] = '25';
$omezeni['3125_1'] = 'X';
$omezeni['3126_1'] = '25';
$omezeni['3127_1'] = '25';
$omezeni['3129_1'] = '25';
$omezeni['3135_1'] = 'X';
$omezeni['3135_2'] = '25';
$omezeni['3136_1'] = '25';
$omezeni['3138_1'] = 'X';
$omezeni['3138_2'] = '25';
$omezeni['3143_1'] = '25';
$omezeni['3145_1'] = 'X';
$omezeni['3145_2'] = '25';
$omezeni['3151_1'] = 'X';
$omezeni['3152_1'] = 'X';
$omezeni['3158_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['3180_1'] = 'X';
$omezeni['3191_1'] = 'X5';
$omezeni['3193_1'] = 'z25';

$trasa['3191_1'] = array('Frýdek-Místek;18:06','Ostrava hl.n.;18:31');
$trasa['3193_1'] = array('Frenštát pod Radhoštěm;20:33','Frýdek-Místek;20:55');

$trasa['1642_1'] = array('Ostrava hl.n.;8:15', 'Frenštát pod Radhoštěm;9:34');
$trasa['3120_1'] = array('Ostrava hl.n.;4:24', 'Frenštát pod Radhoštěm město;5:45');
$trasa['3120_2'] = array('Frýdek-Místek;5:01', 'Frenštát pod Radhoštěm město;5:45');
$trasa['3121_1'] = array('Frenštát pod Radhoštěm;4:55', 'Ostrava hl.n.;6:08');
$trasa['3123_1'] = array('Frenštát pod Radhoštěm;5:55', 'Ostrava hl.n.;7:08');
$trasa['3123_2'] = array('Frýdek-Místek;6:34', 'Ostrava hl.n.;7:08');
$trasa['3124_1'] = array('Ostrava hl.n.;6:51', 'Frenštát pod Radhoštěm;8:10');
$trasa['3125_1'] = array('Frenštát pod Radhoštěm;6:55', 'Ostrava hl.n.;8:08');
$trasa['3126_1'] = array('Ostrava hl.n.;7:52', 'Frenštát pod Radhoštěm město;9:15');
$trasa['3127_1'] = array('Frenštát pod Radhoštěm město;8:50', 'Ostrava hl.n.;10:08');
$trasa['3128_1'] = array('Ostrava hl.n.;8:51', 'Frenštát pod Radhoštěm;10:12');
$trasa['3129_1'] = array('Frenštát pod Radhoštěm;9:57', 'Ostrava hl.n.;11:08');
$trasa['3131_1'] = array('Frenštát pod Radhoštěm město;10:50', 'Ostrava hl.n.;12:08');
$trasa['3132_1'] = array('Ostrava hl.n.;11:51', 'Frenštát pod Radhoštěm;13:10');
$trasa['3134_1'] = array('Ostrava hl.n.;12:51', 'Frenštát pod Radhoštěm;14:10');
$trasa['3135_1'] = array('Frenštát pod Radhoštěm;12:55', 'Ostrava hl.n.;14:08');
$trasa['3135_2'] = array('Frenštát pod Radhoštěm;12:55', 'Ostrava hl.n.;14:08');
$trasa['3136_1'] = array('Ostrava hl.n.;13:51', 'Frenštát pod Radhoštěm město;15:15');
$trasa['3137_1'] = array('Frenštát pod Radhoštěm;13:55', 'Ostrava hl.n.;15:09');
$trasa['3138_1'] = array('Ostrava hl.n.;14:51', 'Frenštát pod Radhoštěm město;16:15');
$trasa['3138_2'] = array('Ostrava hl.n.;14:51', 'Frenštát pod Radhoštěm město;16:15');
$trasa['3140_1'] = array('Ostrava hl.n.;15:51', 'Frenštát pod Radhoštěm město;17:15');
$trasa['3142_1'] = array('Ostrava hl.n.;16:51', 'Frenštát pod Radhoštěm;18:10');
$trasa['3143_1'] = array('Frenštát pod Radhoštěm;15:55', 'Ostrava hl.n.;17:09');
$trasa['3144_1'] = array('Ostrava hl.n.;18:51', 'Frenštát pod Radhoštěm;20:12');
$trasa['3145_1'] = array('Frenštát pod Radhoštěm;16:55', 'Ostrava hl.n.;18:08');
$trasa['3145_2'] = array('Frenštát pod Radhoštěm;16:55', 'Ostrava hl.n.;18:08');
$trasa['3146_1'] = array('Ostrava hl.n.;19:51', 'Frenštát pod Radhoštěm město;21:15');
$trasa['3147_1'] = array('Frenštát pod Radhoštěm;17:55', 'Ostrava hl.n.;19:08');
$trasa['3149_1'] = array('Frenštát pod Radhoštěm;18:55', 'Ostrava hl.n.;20:08');
$trasa['3151_1'] = array('Frýdlant nad Ostravicí;6:47', 'Ostrava hl.n.;7:38');
$trasa['3152_1'] = array('Ostrava hl.n.;5:21', 'Frýdlant nad Ostravicí;6:14');
$trasa['3158_1'] = array('Ostrava hl.n.;14:21', 'Frýdlant nad Ostravicí;15:14');
$trasa['3180_1'] = array('Ostrava hl.n.;17:21', 'Frýdek-Místek;17:57');
$trasa['3184_1'] = array('Ostrava hl.n.;20:51', 'Frýdek-Místek;21:27');
$trasa['3187_1'] = array('Frýdek-Místek;22:14', 'Ostrava hl.n.;22:48');


$typ['3191_1'] = 'Sv';
$typ['3193_1'] = 'Sv';



@$ts741 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>