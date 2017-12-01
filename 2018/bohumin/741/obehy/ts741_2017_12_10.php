<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3152_1', '3151_1', '3158_1', '3159_1', '3180_1', '3191_1'];
$obeh[2] = ['3120_1', '3120_2', '3125_1', '3128_1', '3131_1', '3131_2', '3134_1', '3141_1', '3142_1', '3149_1', '3184_1', '3187_1'];
$obeh[3] = ['1642_1', '3129_1', '3132_1', '3137_1', '3140_1', '3147_1', '3146_1'];
$obeh[4] = ['3121_1', '3124_1', '3127_1', '3136_1', '3143_1', '3135_1', '3138_1', '3145_1', '3144_1', '3193_1'];
$obeh[5] = ['3123_1', '3123_2', '3126_1', '3135_2', '3138_2', '3145_2'];

$omezeni['1642_1'] = '25';
$omezeni['3120_1'] = 'X1';
$omezeni['3120_2'] = 'X2345';
$omezeni['3123_1'] = 'X';
$omezeni['3123_2'] = '25';
$omezeni['3125_1'] = 'X';
$omezeni['3126_1'] = '25';
$omezeni['3127_1'] = '25';
$omezeni['3129_1'] = '25';
$omezeni['3131_1'] = 'XT';
$omezeni['3131_2'] = '6';
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
$omezeni['3158_1'] = 'X';
$omezeni['3159_1'] = 'X';
$omezeni['3180_1'] = 'X';
$omezeni['3191_1'] = 'X5';
$omezeni['3193_1'] = 'z25';

$trasa['3191_1'] = ['Frýdek-Místek;18:04','Ostrava hl.n.;18:30'];
$trasa['3193_1'] = ['Frenštát pod Radhoštěm;20:31','Frýdek-Místek;20:53'];
$trasa['1642_1'] = ['Ostrava hl.n.;8:10', 'Frenštát pod Radhoštěm;9:32'];
$trasa['3120_1'] = ['Ostrava hl.n.;4:21', 'Frenštát pod Radhoštěm město;5:43'];
$trasa['3120_2'] = ['Frýdek-Místek;5:01', 'Frenštát pod Radhoštěm město;5:43'];
$trasa['3121_1'] = ['Frenštát pod Radhoštěm;4:53', 'Ostrava hl.n.;6:07'];
$trasa['3123_1'] = ['Frenštát pod Radhoštěm;5:53', 'Ostrava hl.n.;7:09'];
$trasa['3123_2'] = ['Frýdek-Místek;6:32', 'Ostrava hl.n.;7:09'];
$trasa['3124_1'] = ['Ostrava hl.n.;6:51', 'Frenštát pod Radhoštěm;8:08'];
$trasa['3125_1'] = ['Frenštát pod Radhoštěm;6:53', 'Ostrava hl.n.;8:07'];
$trasa['3126_1'] = ['Ostrava hl.n.;7:51', 'Frenštát pod Radhoštěm město;9:13'];
$trasa['3127_1'] = ['Frenštát pod Radhoštěm město;8:47', 'Ostrava hl.n.;10:06'];
$trasa['3128_1'] = ['Ostrava hl.n.;8:51', 'Frenštát pod Radhoštěm;10:11'];
$trasa['3129_1'] = ['Frenštát pod Radhoštěm;9:56', 'Ostrava hl.n.;11:09'];
$trasa['3131_1'] = ['Frenštát pod Radhoštěm město;10:48', 'Ostrava hl.n.;12:06'];
$trasa['3131_2'] = ['Frenštát pod Radhoštěm;10:53', 'Ostrava hl.n.;12:06'];
$trasa['3132_1'] = ['Ostrava hl.n.;11:53', 'Frenštát pod Radhoštěm;13:08'];
$trasa['3134_1'] = ['Ostrava hl.n.;12:51', 'Frenštát pod Radhoštěm;14:08'];
$trasa['3135_1'] = ['Frenštát pod Radhoštěm;12:53', 'Ostrava hl.n.;14:06'];
$trasa['3135_2'] = ['Frenštát pod Radhoštěm;12:53', 'Ostrava hl.n.;14:06'];
$trasa['3136_1'] = ['Ostrava hl.n.;13:51', 'Frenštát pod Radhoštěm město;15:13'];
$trasa['3137_1'] = ['Frenštát pod Radhoštěm;13:53', 'Ostrava hl.n.;15:09'];
$trasa['3138_1'] = ['Ostrava hl.n.;14:51', 'Frenštát pod Radhoštěm město;16:13'];
$trasa['3138_2'] = ['Ostrava hl.n.;14:51', 'Frenštát pod Radhoštěm město;16:13'];
$trasa['3140_1'] = ['Ostrava hl.n.;15:51', 'Frenštát pod Radhoštěm město;17:13'];
$trasa['3141_1'] = ['Frenštát pod Radhoštěm;14:53', 'Ostrava hl.n.;16:06'];
$trasa['3142_1'] = ['Ostrava hl.n.;16:51', 'Frenštát pod Radhoštěm;18:08'];
$trasa['3143_1'] = ['Frenštát pod Radhoštěm;15:53', 'Ostrava hl.n.;17:09'];
$trasa['3144_1'] = ['Ostrava hl.n.;18:51', 'Frenštát pod Radhoštěm;20:09'];
$trasa['3145_1'] = ['Frenštát pod Radhoštěm;16:53', 'Ostrava hl.n.;18:06'];
$trasa['3145_2'] = ['Frenštát pod Radhoštěm;16:53', 'Ostrava hl.n.;18:06'];
$trasa['3146_1'] = ['Ostrava hl.n.;19:53', 'Frenštát pod Radhoštěm město;21:13'];
$trasa['3147_1'] = ['Frenštát pod Radhoštěm;17:53', 'Ostrava hl.n.;19:09'];
$trasa['3149_1'] = ['Frenštát pod Radhoštěm;18:53', 'Ostrava hl.n.;20:06'];
$trasa['3151_1'] = ['Frýdlant nad Ostravicí;6:45', 'Ostrava hl.n.;7:36'];
$trasa['3152_1'] = ['Ostrava hl.n.;5:21', 'Frýdlant nad Ostravicí;6:12'];
$trasa['3158_1'] = ['Ostrava hl.n.;14:21', 'Frýdlant nad Ostravicí;15:12'];
$trasa['3159_1'] = ['Frýdlant nad Ostravicí;15:45', 'Ostrava hl.n.;16:36'];
$trasa['3180_1'] = ['Ostrava hl.n.;17:21', 'Frýdek-Místek;17:55'];
$trasa['3184_1'] = ['Ostrava hl.n.;20:51', 'Frýdek-Místek;21:25'];
$trasa['3187_1'] = ['Frýdek-Místek;22:12', 'Ostrava hl.n.;22:46'];

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


