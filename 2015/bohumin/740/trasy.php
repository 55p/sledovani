<?php

$zjOmez[] = array('X', 3150, 3151, 3159, '3163b', 3125, '3128b', '3131b', '3134b', '3141b', '3142b', '3149b', '3135a', '3138a', '3145a');
$zjOmez[] = array('23', '3184b', '3185b', 3180);
$zjOmez[] = array('36', '3142a', '3149a', '3184a', '3185a');
$zjOmez[] = array('25', 1642, '3135b', '3138b', '3145b', 3126, 3129, 3127, 3136, 3143, '3128a', '3131a', '3134a', '3141a');
$zjOmez[] = array(37, '3163a');
$zjOmez[] = array(10, 3146, 3144);
$zjOmez[] = array(11, 3121, 3123);
$zjOmez[] = array('35_2015', 3156, 3159);

$zjOmez[] = array('1_posv_bi_2015', '3120a');
$zjOmez[] = array('2az5_bi_2015', '3120b');
$zjOmez[] = array('5_prsv_bi_2015', 3191);


$typ [-1] = 'Os';
$typ [3191] = 'Sv';
$typ [1642] = 'Sp';

$trasa[1642] = array('Ostrava hl.n.;8:15', 'Frenštát pod Radhoštěm;9:32');
$trasa['3120a'] = array('Ostrava hl.n.;4:23', 'Frenštát pod Radhoštěm město;5:46');
$trasa['3120b'] = array('Frýdek-Místek;4:59', 'Frenštát pod Radhoštěm město;5:46');
$trasa[3121] = array('Frenštát pod Radhoštěm;4:52', 'Ostrava hl.n.;6:05');
$trasa[3123] = array('Frenštát pod Radhoštěm;5:54', 'Ostrava hl.n.;7:05');
$trasa[3124] = array('Ostrava hl.n.;6:52', 'Frenštát pod Radhoštěm;8:10');
$trasa[3125] = array('Frenštát pod Radhoštěm;6:52', 'Ostrava hl.n.;8:05');
$trasa[3126] = array('Ostrava hl.n.;7:52', 'Frenštát pod Radhoštěm město;9:16');
$trasa[3127] = array('Frenštát pod Radhoštěm město;8:46', 'Ostrava hl.n.;10:05');
$trasa[3128] = array('Ostrava hl.n.;8:52', 'Frenštát pod Radhoštěm;10:12');
$trasa[3129] = array('Frenštát pod Radhoštěm;9:55', 'Ostrava hl.n.;11:05');
$trasa[3131] = array('Frenštát pod Radhoštěm město;10:46', 'Ostrava hl.n.;12:05');
$trasa[3132] = array('Ostrava hl.n.;11:52', 'Frenštát pod Radhoštěm;13:10');
$trasa[3134] = array('Ostrava hl.n.;12:52', 'Frenštát pod Radhoštěm;14:12');
$trasa[3135] = array('Frenštát pod Radhoštěm město;12:46', 'Ostrava hl.n.;14:05');
$trasa[3136] = array('Ostrava hl.n.;13:52', 'Frenštát pod Radhoštěm město;15:16');
$trasa[3137] = array('Frenštát pod Radhoštěm;13:55', 'Ostrava hl.n.;15:05');
$trasa[3138] = array('Ostrava hl.n.;14:52', 'Frenštát pod Radhoštěm město;16:16');
$trasa[3140] = array('Ostrava hl.n.;15:52', 'Frenštát pod Radhoštěm město;17:16');
$trasa[3141] = array('Frenštát pod Radhoštěm;14:52', 'Ostrava hl.n.;16:05');
$trasa[3142] = array('Ostrava hl.n.;16:52', 'Frenštát pod Radhoštěm město;18:18');
$trasa[3143] = array('Frenštát pod Radhoštěm;15:52', 'Ostrava hl.n.;17:05');
$trasa[3144] = array('Ostrava hl.n.;18:52', 'Frenštát pod Radhoštěm město;20:18');
$trasa[3145] = array('Frenštát pod Radhoštěm;16:52', 'Ostrava hl.n.;18:05');
$trasa[3146] = array('Ostrava hl.n.;19:52', 'Frenštát pod Radhoštěm město;21:16');
$trasa[3147] = array('Frenštát pod Radhoštěm;17:54', 'Ostrava hl.n.;19:05');
$trasa[3149] = array('Frenštát pod Radhoštěm město;18:46', 'Ostrava hl.n.;20:05');
$trasa[3150] = array('Ostrava hl.n.;5:22', 'Frýdlant nad Ostravicí;6:13');
$trasa[3151] = array('Frýdlant nad Ostravicí;6:45', 'Ostrava hl.n.;7:35');
$trasa[3156] = array('Ostrava hl.n.;14:22', 'Frýdlant nad Ostravicí;15:13');
$trasa[3159] = array('Frýdlant nad Ostravicí;15:45', 'Ostrava hl.n.;16:35');
$trasa[3163] = array('Frenštát pod Radhoštěm město;5:49', 'Frenštát pod Radhoštěm;5:52');
$trasa[3180] = array('Ostrava hl.n.;17:22', 'Frýdek-Místek;17:55');
$trasa[3184] = array('Ostrava hl.n.;20:52', 'Frýdek-Místek;21:25');
$trasa[3185] = array('Frýdek-Místek;22:14', 'Ostrava hl.n.;22:47');
$trasa[3191] = array('Frýdek-Místek;18:14', 'Ostrava hl.n.;18:43');


foreach ($zjOmez as $array) {
  foreach ($array as $key => $vlak) {
    if ($key == 0) continue;
    $omezeni[$vlak] = $array[0];
  }
}

?>
