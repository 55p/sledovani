<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = NULL; //'X.X.2018 23:59:59';

$obeh[1] = ['7759_1', '7750_1', '7751_1', '7752_1', '7753_1', '7754_1', '7755_1', '7756_1', '7757_1', '7758_1'];

$omezeni['7750_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7751_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7752_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7753_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7754_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7755_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7756_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7757_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7758_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';
$omezeni['7759_1'] = '25,-2312,-2412,-2512,-2612,-3012,-3112,-0101';

$trasa['7750_1'] = ['Praha hl.n.;8:54','Praha-Zličín;9:21'];
$trasa['7751_1'] = ['Praha-Zličín;9:34','Praha hl.n.;10:11'];
$trasa['7752_1'] = ['Praha hl.n.;10:54','Praha-Zličín;11:21'];
$trasa['7753_1'] = ['Praha-Zličín;11:34','Praha hl.n.;12:11'];
$trasa['7754_1'] = ['Praha hl.n.;12:54','Praha-Zličín;13:21'];
$trasa['7755_1'] = ['Praha-Zličín;13:34','Praha hl.n.;14:11'];
$trasa['7756_1'] = ['Praha hl.n.;14:54','Praha-Zličín;15:21'];
$trasa['7757_1'] = ['Praha-Zličín;15:34','Praha hl.n.;16:11'];
$trasa['7758_1'] = ['Praha hl.n.;17:17','Praha-Čakovice;17:42'];
$trasa['7759_1'] = ['Praha-Čakovice;8:20','Praha hl.n.;8:43'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts891 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


