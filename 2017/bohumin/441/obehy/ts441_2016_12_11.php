<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['2833_1', '1602_1', '1607_1', '1606_1', '1611_1', '1610_1', '1615_1', '1614_1'];
$obeh[2] = ['3401_1', '3401_2', '3408_1', '3409_1', '3416_1', '3417_1', '3424_1', '3425_1', '3432_1', '3433_1', '2842_1'];
$obeh[3] = ['2851_1', '2850_1', '2852_1', '2831_1', '3406_1', '3407_1', '3414_1', '3415_1', '3422_1', '3423_1', '3430_1', '3431_1', '2840_1', '3430_2', '2955_1'];
$obeh[4] = ['1600_1', '1601_1', '3403_1', '2839_1', '3410_1', '3411_1', '3418_1', '3419_1', '3426_1', '3427_1', '2836_1', '2847_1'];
$obeh[5] = ['3402_1', '3405_1', '3412_1', '3413_1', '3420_1', '3421_1', '3428_1', '3429_1', '2838_1', '2847_2'];
$obeh[6] = ['3400_1', '3400_2', '1603_1', '1604_1', '1609_1', '1608_1', '1613_1', '1612_1', '1617_1', '2836_2'];

$omezeni['1600_1'] = 'X';
$omezeni['1601_1'] = 'X';
$omezeni['1602_1'] = 'X';
$omezeni['1603_1'] = 'X';
$omezeni['1604_1'] = 'X';
$omezeni['1606_1'] = 'X';
$omezeni['1607_1'] = 'X';
$omezeni['1608_1'] = 'X';
$omezeni['1609_1'] = 'X';
$omezeni['1610_1'] = 'X';
$omezeni['1611_1'] = 'X';
$omezeni['1612_1'] = 'X';
$omezeni['1613_1'] = 'X';
$omezeni['1614_1'] = 'X';
$omezeni['1615_1'] = 'X';
$omezeni['1617_1'] = 'X';
$omezeni['2831_1'] = '11';
$omezeni['2833_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['2836_1'] = '25';
$omezeni['2836_2'] = 'X';
$omezeni['2840_1'] = '10';
$omezeni['2842_1'] = '10';
$omezeni['2847_1'] = '25,-2412,-3112';
$omezeni['2847_2'] = 'X';
$omezeni['2850_1'] = '25,-2512,-0101';
$omezeni['2851_1'] = '11';
$omezeni['2852_1'] = 'X';
$omezeni['2955_1'] = '2412,3112';
$omezeni['3400_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['3400_2'] = '2312,2712,2812,2912,3012';
$omezeni['3401_1'] = '25';
$omezeni['3401_2'] = 'X';
$omezeni['3403_1'] = '25';
$omezeni['3430_1'] = '10';
$omezeni['3430_2'] = '2412,3112';
$omezeni['3431_1'] = '10';


$trasa['1600_1'] = ['Bohumín;4:05', 'Opava východ;4:53'];
$trasa['1601_1'] = ['Opava východ;5:15', 'Ostrava střed;5:54'];
$trasa['1602_1'] = ['Český Těšín;6:10', 'Opava východ;7:36'];
$trasa['1603_1'] = ['Opava východ;6:15', 'Český Těšín;7:42'];
$trasa['1604_1'] = ['Český Těšín;8:10', 'Opava východ;9:36'];
$trasa['1606_1'] = ['Český Těšín;10:10', 'Opava východ;11:36'];
$trasa['1607_1'] = ['Opava východ;8:15', 'Český Těšín;9:42'];
$trasa['1608_1'] = ['Český Těšín;12:10', 'Opava východ;13:36'];
$trasa['1609_1'] = ['Opava východ;10:15', 'Český Těšín;11:42'];
$trasa['1610_1'] = ['Český Těšín;14:10', 'Opava východ;15:36'];
$trasa['1611_1'] = ['Opava východ;12:15', 'Český Těšín;13:42'];
$trasa['1612_1'] = ['Český Těšín;16:10', 'Opava východ;17:36'];
$trasa['1613_1'] = ['Opava východ;14:15', 'Český Těšín;15:42'];
$trasa['1614_1'] = ['Český Těšín;18:10', 'Opava východ;19:36'];
$trasa['1615_1'] = ['Opava východ;16:15', 'Český Těšín;17:42'];
$trasa['1617_1'] = ['Opava východ;18:15', 'Český Těšín;19:42'];
$trasa['2831_1'] = ['Ostrava-Svinov;4:22', 'Český Těšín;5:12'];
$trasa['2833_1'] = ['Ostrava-Svinov;4:52', 'Český Těšín;5:42'];
$trasa['2836_1'] = ['Český Těšín;19:49', 'Ostrava-Svinov;20:38'];
$trasa['2836_2'] = ['Český Těšín;19:49', 'Ostrava-Svinov;20:38'];
$trasa['2838_1'] = ['Český Těšín;20:49', 'Ostrava-Svinov;21:38'];
$trasa['2839_1'] = ['Ostrava-Kunčice;6:37', 'Český Těšín;7:12'];
$trasa['2840_1'] = ['Český Těšín;21:58', 'Ostrava-Svinov;22:48'];
$trasa['2842_1'] = ['Český Těšín;22:48', 'Ostrava-Svinov;23:38'];
$trasa['2847_1'] = ['Ostrava-Svinov;22:22', 'Český Těšín;23:12'];
$trasa['2847_2'] = ['Ostrava-Svinov;22:22', 'Český Těšín;23:12'];
$trasa['2850_1'] = ['Havířov;3:17', 'Ostrava-Svinov;3:43'];
$trasa['2851_1'] = ['Ostrava-Svinov;0:40', 'Havířov;1:05'];
$trasa['2852_1'] = ['Havířov;3:31', 'Ostrava-Svinov;3:57'];
$trasa['2955_1'] = ['Bohumín;20:40', 'Třinec (Trzyniec);21:27'];
$trasa['3400_1'] = ['Český Těšín;4:12', 'Opava východ;5:31'];
$trasa['3400_2'] = ['Ostrava-Svinov;5:05', 'Opava východ;5:31'];
$trasa['3401_1'] = ['Ostrava-Svinov;5:08', 'Český Těšín;6:12'];
$trasa['3401_2'] = ['Opava východ;4:22', 'Český Těšín;6:12'];
$trasa['3402_1'] = ['Český Těšín;4:45', 'Opava východ;6:11'];
$trasa['3403_1'] = ['Ostrava-Svinov;6:22', 'Ostrava-Kunčice;6:34'];
$trasa['3405_1'] = ['Opava východ;6:31', 'Český Těšín;8:12'];
$trasa['3406_1'] = ['Český Těšín;5:49', 'Opava východ;7:18'];
$trasa['3407_1'] = ['Opava východ;7:42', 'Český Těšín;9:12'];
$trasa['3408_1'] = ['Český Těšín;6:49', 'Opava východ;8:14'];
$trasa['3409_1'] = ['Opava východ;8:42', 'Český Těšín;10:12'];
$trasa['3410_1'] = ['Český Těšín;7:49', 'Opava východ;9:14'];
$trasa['3411_1'] = ['Opava východ;9:42', 'Český Těšín;11:12'];
$trasa['3412_1'] = ['Český Těšín;8:49', 'Opava východ;10:14'];
$trasa['3413_1'] = ['Opava východ;10:42', 'Český Těšín;12:12'];
$trasa['3414_1'] = ['Český Těšín;9:45', 'Opava východ;11:14'];
$trasa['3415_1'] = ['Opava východ;11:42', 'Český Těšín;13:12'];
$trasa['3416_1'] = ['Český Těšín;10:49', 'Opava východ;12:14'];
$trasa['3417_1'] = ['Opava východ;12:42', 'Český Těšín;14:12'];
$trasa['3418_1'] = ['Český Těšín;11:49', 'Opava východ;13:14'];
$trasa['3419_1'] = ['Opava východ;13:42', 'Český Těšín;15:12'];
$trasa['3420_1'] = ['Český Těšín;12:49', 'Opava východ;14:14'];
$trasa['3421_1'] = ['Opava východ;14:42', 'Český Těšín;16:12'];
$trasa['3422_1'] = ['Český Těšín;13:49', 'Opava východ;15:13'];
$trasa['3423_1'] = ['Opava východ;15:42', 'Český Těšín;17:12'];
$trasa['3424_1'] = ['Český Těšín;14:49', 'Opava východ;16:14'];
$trasa['3425_1'] = ['Opava východ;16:42', 'Český Těšín;18:12'];
$trasa['3426_1'] = ['Český Těšín;15:49', 'Opava východ;17:14'];
$trasa['3427_1'] = ['Opava východ;17:42', 'Český Těšín;19:12'];
$trasa['3428_1'] = ['Český Těšín;16:49', 'Opava východ;18:14'];
$trasa['3429_1'] = ['Opava východ;18:42', 'Český Těšín;20:12'];
$trasa['3430_1'] = ['Český Těšín;17:49', 'Opava východ;19:12'];
$trasa['3430_2'] = ['Český Těšín;17:49', 'Ostrava-Svinov;18:38'];
$trasa['3431_1'] = ['Opava východ;19:42', 'Český Těšín;21:12'];
$trasa['3432_1'] = ['Český Těšín;18:49', 'Opava východ;20:20'];
$trasa['3433_1'] = ['Opava východ;20:42', 'Český Těšín;22:12'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts441 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);

