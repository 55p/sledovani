<?php 
$zacatekPlatnosti = '3.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['3152_1', '3151_1', '3126_1', '3129_1', '3180_1', '3191_1'];
$obeh[2] = ['3120_1', '3120_2', '3125_1', '3128_1', '3131_1', '3134_1', '3141_1', '3142_1', '3149_1', '3184_1', '3187_1'];
$obeh[3] = ['1642_1', '3129_2', '3132_1', '3137_1', '3140_1', '3147_1', '3146_1'];
$obeh[4] = ['3121_1', '3124_1', '3127_1', '3136_1', '3143_1', '3135_1', '3138_1', '3145_1', '3144_1', '3193_1'];
$obeh[5] = ['3123_1', '3123_2', '3126_2', '3135_2', '3138_2', '3145_2'];

$omezeni['1642_1'] = '25';
$omezeni['3120_1'] = 'X1';
$omezeni['3120_2'] = 'X2345';
$omezeni['3123_1'] = 'X';
$omezeni['3123_2'] = '25';
$omezeni['3125_1'] = 'X';
$omezeni['3126_1'] = 'X';
$omezeni['3126_2'] = '25';
$omezeni['3127_1'] = '25';
$omezeni['3129_1'] = 'X';
$omezeni['3129_2'] = '25';
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
$omezeni['3180_1'] = 'X';
$omezeni['3191_1'] = 'X5';
$omezeni['3193_1'] = 'z25';

$trasa['3191_1'] = ['Frýdek-Místek;18:06','Ostrava hl.n.;18:31'];
$trasa['3193_1'] = ['Frenštát pod Radhoštěm;20:33','Frýdek-Místek;20:55'];
$trasa['1642_1'] = ['Ostrava hl.n.;8:15', 'Frenštát pod Radhoštěm;9:34'];
$trasa['3120_1'] = ['Ostrava hl.n.;4:24', 'Frenštát pod Radhoštěm město;5:45'];
$trasa['3120_2'] = ['Frýdek-Místek;5:01', 'Frenštát pod Radhoštěm město;5:45'];
$trasa['3121_1'] = ['Frenštát pod Radhoštěm;4:55', 'Ostrava hl.n.;6:08'];
$trasa['3123_1'] = ['Frenštát pod Radhoštěm;5:55', 'Ostrava hl.n.;7:08'];
$trasa['3123_2'] = ['Frýdek-Místek;6:34', 'Ostrava hl.n.;7:08'];
$trasa['3124_1'] = ['Ostrava hl.n.;6:51', 'Frenštát pod Radhoštěm;8:10'];
$trasa['3125_1'] = ['Frenštát pod Radhoštěm;6:55', 'Ostrava hl.n.;8:08'];
$trasa['3126_1'] = ['Ostrava hl.n.;7:52', 'Frenštát pod Radhoštěm město;9:15'];
$trasa['3126_2'] = ['Ostrava hl.n.;7:52', 'Frenštát pod Radhoštěm město;9:15'];
$trasa['3127_1'] = ['Frenštát pod Radhoštěm město;8:50', 'Ostrava hl.n.;10:08'];
$trasa['3128_1'] = ['Ostrava hl.n.;8:51', 'Frenštát pod Radhoštěm;10:12'];
$trasa['3129_1'] = ['Frenštát pod Radhoštěm;9:57', 'Ostrava hl.n.;11:08'];
$trasa['3129_2'] = ['Frenštát pod Radhoštěm;9:57', 'Ostrava hl.n.;11:08'];
$trasa['3131_1'] = ['Frenštát pod Radhoštěm město;10:50', 'Ostrava hl.n.;12:08'];
$trasa['3132_1'] = ['Ostrava hl.n.;11:51', 'Frenštát pod Radhoštěm;13:10'];
$trasa['3134_1'] = ['Ostrava hl.n.;12:51', 'Frenštát pod Radhoštěm;14:10'];
$trasa['3135_1'] = ['Frenštát pod Radhoštěm;12:55', 'Ostrava hl.n.;14:08'];
$trasa['3135_2'] = ['Frenštát pod Radhoštěm;12:55', 'Ostrava hl.n.;14:08'];
$trasa['3136_1'] = ['Ostrava hl.n.;13:51', 'Frenštát pod Radhoštěm město;15:15'];
$trasa['3137_1'] = ['Frenštát pod Radhoštěm;13:55', 'Ostrava hl.n.;15:09'];
$trasa['3138_1'] = ['Ostrava hl.n.;14:51', 'Frenštát pod Radhoštěm město;16:15'];
$trasa['3138_2'] = ['Ostrava hl.n.;14:51', 'Frenštát pod Radhoštěm město;16:15'];
$trasa['3140_1'] = ['Ostrava hl.n.;15:51', 'Frenštát pod Radhoštěm město;17:15'];
$trasa['3141_1'] = ['Frenštát pod Radhoštěm;14:55', 'Ostrava hl.n.;16:08'];
$trasa['3142_1'] = ['Ostrava hl.n.;16:51', 'Frenštát pod Radhoštěm;18:10'];
$trasa['3143_1'] = ['Frenštát pod Radhoštěm;15:55', 'Ostrava hl.n.;17:09'];
$trasa['3144_1'] = ['Ostrava hl.n.;18:51', 'Frenštát pod Radhoštěm;20:12'];
$trasa['3145_1'] = ['Frenštát pod Radhoštěm;16:55', 'Ostrava hl.n.;18:08'];
$trasa['3145_2'] = ['Frenštát pod Radhoštěm;16:55', 'Ostrava hl.n.;18:08'];
$trasa['3146_1'] = ['Ostrava hl.n.;19:51', 'Frenštát pod Radhoštěm město;21:15'];
$trasa['3147_1'] = ['Frenštát pod Radhoštěm;17:55', 'Ostrava hl.n.;19:08'];
$trasa['3149_1'] = ['Frenštát pod Radhoštěm;18:55', 'Ostrava hl.n.;20:08'];
$trasa['3151_1'] = ['Frýdlant nad Ostravicí;6:47', 'Ostrava hl.n.;7:38'];
$trasa['3152_1'] = ['Ostrava hl.n.;5:21', 'Frýdlant nad Ostravicí;6:14'];
$trasa['3180_1'] = ['Ostrava hl.n.;17:21', 'Frýdek-Místek;17:57'];
$trasa['3184_1'] = ['Ostrava hl.n.;20:51', 'Frýdek-Místek;21:27'];
$trasa['3187_1'] = ['Frýdek-Místek;22:14', 'Ostrava hl.n.;22:48'];

$typ['3191_1'] = 'Sv';
$typ['3193_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts741 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


