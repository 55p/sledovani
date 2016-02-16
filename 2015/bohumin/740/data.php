<?php

$skupiny[] = $t740 = new TS('TS 740');


$obeh[1] = array(3150, 3151, 3156, 3159, 3180, 3191, 1642, '3135b', '3138b', '3145b');
$obeh[2] = array('3120a', '3120b', '3163b', 3125, '3128b', '3131b', '3134b', '3141b', '3142b', '3149b', '3184b', '3185b');
$obeh[3] = array(3126, 3129, 3132, 3137, 3140, 3147, 3146);
$obeh[4] = array(3121, 3124, 3127, 3136, 3143, '3135a', '3138a', '3145a', 3144);
$obeh[5] = array('3163a', 3123, '3128a', '3131a', '3134a', '3141a', '3142a', '3149a', '3184a', '3185a');

include 'trasy.php';

$t740->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, array(), NULL, '31.5.2015 23:59:59'));

unset($trasa);
unset($obeh);
unset($omezeni);
unset($poznamkaObehu);

// ------------------

$obeh[1] = array('3181_1', '3100_1', '3123_1', '3126_1', '3127_1', '3164_1', '3121_1', '3124_1', '3105_1', '3102_1', '3133_1', '3136_1', '3141_1', '3142_1', '3147_1', '3146_1', '3111_1');
$obeh[2] = array('3150_1', '3151_1', '1642_1', '3131_1', '3134_1', '3137_1', '3140_1', '3145_1', '3144_1', '3109_1', '3186_1');
$obeh[3] = array('3183_1', '3122_1', '3125_1', '3128_1', '3129_1', '3132_1', '3135_1', '3138_1', '3143_1', '3112_1', '3149_1', '3184_1');
$obeh['1a'] = array('3181_2', '3100_2', '3123_2', '3156_1', '3107_1', '3159_1', '3180_1', '3176_1', '3179_1');

$omezeni['1642_1'] = '25';
$omezeni['3100_1'] = '25';
$omezeni['3100_2'] = 'X';
$omezeni['3105_1'] = 'X';
$omezeni['3107_1'] = '25';
$omezeni['3121_1'] = 'X';
$omezeni['3123_1'] = '25';
$omezeni['3123_2'] = 'X';
$omezeni['3124_1'] = 'X';
$omezeni['3126_1'] = '25';
$omezeni['3127_1'] = '25';
$omezeni['3131_1'] = '25';
$omezeni['3150_1'] = 'X';
$omezeni['3151_1'] = 'X';
$omezeni['3159_1'] = 'X';
$omezeni['3164_1'] = 'X';
$omezeni['3176_1'] = 'X';
$omezeni['3179_1'] = 'X';
$omezeni['3180_1'] = 'X';
$omezeni['3181_1'] = '25';
$omezeni['3181_2'] = 'X2,X3,X4,X5';

$typ[1642] = 'Sp';
$typ[-1] = 'Os';

$trasa['1642_1'] = array('Ostrava hl.n.;8:15', 'Frýdlant nad Ostravicí;9:32');
$trasa['3100']   = array('Ostrava hl.n.;4:52', 'Frýdlant nad Ostravicí;5:43');
//$trasa['3100_2'] = array('Ostrava hl.n.;4:52', 'Frýdlant nad Ostravicí;7:00');
$trasa['3102_1'] = array('Ostrava hl.n.;10:52', 'Frýdlant nad Ostravicí;11:43');
$trasa['3105_1'] = array('Frýdlant nad Ostravicí;8:18', 'Ostrava hl.n.;9:05');
$trasa['3107_1'] = array('Frýdlant nad Ostravicí;16:45', 'Ostrava hl.n.;17:35');
$trasa['3109_1'] = array('Frýdlant nad Ostravicí;20:15', 'Ostrava hl.n.;21:05');
$trasa['3111_1'] = array('Frýdlant nad Ostravicí;21:15', 'Ostrava hl.n.;22:05');
$trasa['3112_1'] = array('Ostrava hl.n.;17:52', 'Frýdlant nad Ostravicí;18:43');
$trasa['3121_1'] = array('Frýdlant nad Ostravicí;5:15', 'Ostrava hl.n.;6:05');
$trasa['3122_1'] = array('Ostrava hl.n.;5:52', 'Frýdlant nad Ostravicí;6:43');
$trasa['3123']   = array('Frýdlant nad Ostravicí;6:15', 'Ostrava hl.n.;7:05');
$trasa['3124_1'] = array('Ostrava hl.n.;6:52', 'Frýdlant nad Ostravicí;7:43');
$trasa['3125_1'] = array('Frýdlant nad Ostravicí;7:15', 'Ostrava hl.n.;8:05');
$trasa['3126_1'] = array('Ostrava hl.n.;7:52', 'Frýdlant nad Ostravicí;8:43');
$trasa['3127_1'] = array('Frýdlant nad Ostravicí;9:15', 'Ostrava hl.n.;10:05');
$trasa['3128_1'] = array('Ostrava hl.n.;8:52', 'Frýdlant nad Ostravicí;9:43');
$trasa['3129_1'] = array('Frýdlant nad Ostravicí;10:15', 'Ostrava hl.n.;11:05');
$trasa['3131_1'] = array('Frýdlant nad Ostravicí;11:15', 'Ostrava hl.n.;12:05');
$trasa['3132_1'] = array('Ostrava hl.n.;11:52', 'Frýdlant nad Ostravicí;12:43');
$trasa['3133_1'] = array('Frýdlant nad Ostravicí;11:55', 'Ostrava hl.n.;13:05');
$trasa['3134_1'] = array('Ostrava hl.n.;12:52', 'Frýdlant nad Ostravicí;13:43');
$trasa['3135_1'] = array('Frýdlant nad Ostravicí;13:15', 'Ostrava hl.n.;14:05');
$trasa['3136_1'] = array('Ostrava hl.n.;13:52', 'Frýdlant nad Ostravicí;14:43');
$trasa['3137_1'] = array('Frýdlant nad Ostravicí;14:15', 'Ostrava hl.n.;15:05');
$trasa['3138_1'] = array('Ostrava hl.n.;14:52', 'Frýdlant nad Ostravicí;15:43');
$trasa['3140_1'] = array('Ostrava hl.n.;15:52', 'Frýdlant nad Ostravicí;16:43');
$trasa['3141_1'] = array('Frýdlant nad Ostravicí;15:15', 'Ostrava hl.n.;16:05');
$trasa['3142_1'] = array('Ostrava hl.n.;16:52', 'Frýdlant nad Ostravicí;17:43');
$trasa['3143_1'] = array('Frýdlant nad Ostravicí;16:15', 'Ostrava hl.n.;17:05');
$trasa['3144_1'] = array('Ostrava hl.n.;18:52', 'Frýdlant nad Ostravicí;19:43');
$trasa['3145_1'] = array('Frýdlant nad Ostravicí;17:15', 'Ostrava hl.n.;18:05');
$trasa['3146_1'] = array('Ostrava hl.n.;19:52', 'Frýdlant nad Ostravicí;20:43');
$trasa['3147_1'] = array('Frýdlant nad Ostravicí;18:15', 'Ostrava hl.n.;19:05');
$trasa['3149_1'] = array('Frýdlant nad Ostravicí;19:15', 'Ostrava hl.n.;20:05');

$trasa['3150_1'] = array('Ostrava hl.n.;5:22', 'Frýdlant nad Ostravicí;6:13');
$trasa['3151_1'] = array('Frýdlant nad Ostravicí;6:45', 'Ostrava hl.n.;7:35');
$trasa['3156_1'] = array('Ostrava hl.n.;14:22', 'Frýdlant nad Ostravicí;15:13');
$trasa['3159_1'] = array('Frýdlant nad Ostravicí;15:45', 'Ostrava hl.n.;16:35');
$trasa['3164_1'] = array('Frýdek-Místek;4:28', 'Frýdlant nad Ostravicí;4:42');
$trasa['3176_1'] = array('Frýdek-Místek;17:59', 'Frýdlant nad Ostravicí;18:13');
$trasa['3179_1'] = array('Frýdlant nad Ostravicí;18:45', 'Frýdek-Místek;18:58');
$trasa['3180_1'] = array('Ostrava hl.n.;17:22', 'Frýdek-Místek;17:55');
$trasa['3181'] = array('Frýdek-Místek;3:18', 'Ostrava hl.n.;3:50');
$trasa['3183_1'] = array('Frýdek-Místek;4:32', 'Ostrava hl.n.;5:05');
$trasa['3184_1'] = array('Ostrava hl.n.;20:52', 'Frýdek-Místek;21:25');
$trasa['3186_1'] = array('Ostrava hl.n.;21:52', 'Frýdek-Místek;22:24');

$t740->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, array(), '1.6.2015'));

unset($trasa);
unset($obeh);
unset($omezeni);
unset($poznamkaObehu);

@include 'spolecne/laky_vse.php';
?>
