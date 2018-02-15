<?php 
$zacatekPlatnosti = '8.1.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1600_1', '1601_1', '101601_1', '28908_1', '3403_1', '2839_1', '3410_1', '3411_1', '3418_1', '3417_1', '3426_1', '3427_1', '2836_1', '2849_1'];
$obeh[2] = ['3402_1', '3405_1', '3412_1', '3413_1', '3420_1', '3419_1', '3428_1', '3429_1', '2838_1', '28915_1'];

$omezeni['101601_1'] = 'X';
$omezeni['1600_1'] = 'X';
$omezeni['1601_1'] = 'X';
$omezeni['28908_1'] = '25';
$omezeni['3403_1'] = '25';

$trasa['101601_1'] = ['Ostrava střed;6:21','Ostrava-Kunčice;6:27'];
$trasa['28908_1'] = ['Bohumín;6:03','Ostrava-Svinov;6:16'];
$trasa['28915_1'] = ['Ostrava-Svinov;21:37','Bohumín;21:50'];
$trasa['3403_1'] = ['Ostrava-Svinov;6:21','Ostrava-Kunčice;6:31'];
$trasa['1600_1'] = ['Bohumín;4:02', 'Opava východ;4:53'];
$trasa['1601_1'] = ['Opava východ;5:15', 'Ostrava střed;6:00'];
$trasa['2836_1'] = ['Český Těšín;19:46', 'Ostrava-Svinov;20:35'];
$trasa['2838_1'] = ['Český Těšín;20:44', 'Ostrava-Svinov;21:35'];
$trasa['2839_1'] = ['Ostrava-Kunčice;6:35', 'Český Těšín;7:11'];
$trasa['2849_1'] = ['Ostrava-Svinov;22:23', 'Český Těšín;23:14'];
$trasa['3402_1'] = ['Český Těšín;4:46', 'Opava východ;6:11'];
$trasa['3405_1'] = ['Opava východ;6:31', 'Český Těšín;8:08'];
$trasa['3410_1'] = ['Český Těšín;7:46', 'Opava východ;9:13'];
$trasa['3411_1'] = ['Opava východ;9:42', 'Český Těšín;11:11'];
$trasa['3412_1'] = ['Český Těšín;8:46', 'Opava východ;10:14'];
$trasa['3413_1'] = ['Opava východ;10:42', 'Český Těšín;12:08'];
$trasa['3417_1'] = ['Opava východ;13:42', 'Český Těšín;15:11'];
$trasa['3418_1'] = ['Český Těšín;11:46', 'Opava východ;13:14'];
$trasa['3419_1'] = ['Opava východ;14:42', 'Český Těšín;16:11'];
$trasa['3420_1'] = ['Český Těšín;12:46', 'Opava východ;14:14'];
$trasa['3426_1'] = ['Český Těšín;15:46', 'Opava východ;17:14'];
$trasa['3427_1'] = ['Opava východ;17:42', 'Český Těšín;19:11'];
$trasa['3428_1'] = ['Český Těšín;16:46', 'Opava východ;18:14'];
$trasa['3429_1'] = ['Opava východ;18:42', 'Český Těšín;20:11'];

$typ['101601_1'] = 'Sv';
$typ['28908_1'] = 'Sv';
$typ['28915_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts441 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


