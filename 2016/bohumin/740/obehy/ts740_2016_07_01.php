<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('3150_1', '3151_1', '3156_1', '3126_1', '3129_1', '3191_1');
$obeh[2] = array('3120_1', '3120_2', '3125_1', '3128_1', '3131_1', '3131_2', '3134_1', '3141_1', '3142_1', '3149_1', '3184_1', '3185_1');
$obeh[3] = array('1642_1', '3129_2', '3132_1', '3137_1', '3140_1', '3147_1', '3146_1');
$obeh[4] = array('3121_1', '3124_1', '3127_1', '3136_1', '3143_1', '3135_1', '3138_1', '3145_1', '3144_1', '3193_1');
$obeh[5] = array('3123_1', '3123_2', '3126_2', '3135_2', '3138_2', '3145_2');

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
$omezeni['3131_1'] = '6';
$omezeni['3131_2'] = 'XT';
$omezeni['3135_1'] = 'X';
$omezeni['3135_2'] = '25';
$omezeni['3136_1'] = '25';
$omezeni['3138_1'] = 'X';
$omezeni['3138_2'] = '25';
$omezeni['3143_1'] = '25';
$omezeni['3145_1'] = 'X';
$omezeni['3145_2'] = '25';
$omezeni['3150_1'] = 'X';
$omezeni['3151_1'] = 'X';
$omezeni['3156_1'] = 'X';
$omezeni['3191_1'] = 'X5';
$omezeni['3193_1'] = 'z25';

$trasa['3191_1'] = array('Frýdek-Místek;18:14','Ostrava hl.n.;18:43');
$trasa['3193_1'] = array('Frenštát pod Radhoštěm;20:33','Frýdek-Místek;20:55');

$trasa['1642_1'] = array('Ostrava hl.n.;8:10', 'Frenštát pod Radhoštěm;9:33');
$trasa['3120_1'] = array('Ostrava hl.n.;4:26', 'Frenštát pod Radhoštěm město;5:47');
$trasa['3120_2'] = array('Frýdek-Místek;5:00', 'Frenštát pod Radhoštěm město;5:47');
$trasa['3121_1'] = array('Frenštát pod Radhoštěm;4:53', 'Ostrava hl.n.;6:07');
$trasa['3123_1'] = array('Frenštát pod Radhoštěm;5:53', 'Ostrava hl.n.;7:07');
$trasa['3123_2'] = array('Frýdek-Místek;6:33', 'Ostrava hl.n.;7:07');
$trasa['3124_1'] = array('Ostrava hl.n.;6:53', 'Frenštát pod Radhoštěm;8:11');
$trasa['3125_1'] = array('Frenštát pod Radhoštěm;6:53', 'Ostrava hl.n.;8:07');
$trasa['3126_1'] = array('Ostrava hl.n.;7:53', 'Frenštát pod Radhoštěm město;9:17');
$trasa['3126_2'] = array('Ostrava hl.n.;7:53', 'Frenštát pod Radhoštěm město;9:17');
$trasa['3127_1'] = array('Frenštát pod Radhoštěm město;8:47', 'Ostrava hl.n.;10:07');
$trasa['3128_1'] = array('Ostrava hl.n.;8:53', 'Frenštát pod Radhoštěm;10:13');
$trasa['3129_1'] = array('Frenštát pod Radhoštěm;9:56', 'Ostrava hl.n.;11:07');
$trasa['3129_2'] = array('Frenštát pod Radhoštěm;9:56', 'Ostrava hl.n.;11:07');
$trasa['3131_1'] = array('Frenštát pod Radhoštěm;10:54', 'Ostrava hl.n.;12:07');
$trasa['3131_2'] = array('Frenštát pod Radhoštěm město;10:48', 'Ostrava hl.n.;12:07');
$trasa['3132_1'] = array('Ostrava hl.n.;11:53', 'Frenštát pod Radhoštěm;13:11');
$trasa['3134_1'] = array('Ostrava hl.n.;12:53', 'Frenštát pod Radhoštěm;14:13');
$trasa['3135_1'] = array('Frenštát pod Radhoštěm;12:53', 'Ostrava hl.n.;14:07');
$trasa['3135_2'] = array('Frenštát pod Radhoštěm;12:53', 'Ostrava hl.n.;14:07');
$trasa['3136_1'] = array('Ostrava hl.n.;13:53', 'Frenštát pod Radhoštěm město;15:17');
$trasa['3137_1'] = array('Frenštát pod Radhoštěm;13:58', 'Ostrava hl.n.;15:07');
$trasa['3138_1'] = array('Ostrava hl.n.;14:53', 'Frenštát pod Radhoštěm město;16:17');
$trasa['3138_2'] = array('Ostrava hl.n.;14:53', 'Frenštát pod Radhoštěm město;16:17');
$trasa['3140_1'] = array('Ostrava hl.n.;15:53', 'Frenštát pod Radhoštěm město;17:17');
$trasa['3141_1'] = array('Frenštát pod Radhoštěm;14:53', 'Ostrava hl.n.;16:07');
$trasa['3142_1'] = array('Ostrava hl.n.;16:53', 'Frenštát pod Radhoštěm;18:16');
$trasa['3143_1'] = array('Frenštát pod Radhoštěm;15:53', 'Ostrava hl.n.;17:07');
$trasa['3144_1'] = array('Ostrava hl.n.;18:53', 'Frenštát pod Radhoštěm;20:16');
$trasa['3145_1'] = array('Frenštát pod Radhoštěm;16:53', 'Ostrava hl.n.;18:07');
$trasa['3145_2'] = array('Frenštát pod Radhoštěm;16:53', 'Ostrava hl.n.;18:07');
$trasa['3146_1'] = array('Ostrava hl.n.;19:53', 'Frenštát pod Radhoštěm město;21:17');
$trasa['3147_1'] = array('Frenštát pod Radhoštěm;17:55', 'Ostrava hl.n.;19:07');
$trasa['3149_1'] = array('Frenštát pod Radhoštěm;18:53', 'Ostrava hl.n.;20:07');
$trasa['3150_1'] = array('Ostrava hl.n.;5:23', 'Frýdlant nad Ostravicí;6:14');
$trasa['3151_1'] = array('Frýdlant nad Ostravicí;6:46', 'Ostrava hl.n.;7:37');
$trasa['3156_1'] = array('Ostrava hl.n.;14:23', 'Frýdlant nad Ostravicí;15:14');
$trasa['3184_1'] = array('Ostrava hl.n.;20:53', 'Frýdek-Místek;21:26');
$trasa['3185_1'] = array('Frýdek-Místek;22:13', 'Ostrava hl.n.;22:46');


$typ['3191_1'] = 'Sv';
$typ['3193_1'] = 'Sv';



@$ts740 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>