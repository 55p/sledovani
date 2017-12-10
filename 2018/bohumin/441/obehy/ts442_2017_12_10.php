<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['28902_1', '2833_1', '1602_1', '1607_1', '1606_1', '1611_1', '1610_1', '1615_1', '1614_1'];
$obeh[2] = ['3443_1', '2837_1', '28904_1', '2835_1', '3408_1', '3409_1', '3416_1', '3447_1', '2843_1', '2845_1', '3424_1', '3425_1', '3432_1', '3433_1', '2842_1'];
$obeh[3] = ['2851_1', '2852_1', '2831_1', '3406_1', '3407_1', '3414_1', '3415_1', '3422_1', '3423_1', '3430_1', '3431_1', '2840_1', '28919_1', '3421_1', '2862_1', '2857_1', '2864_1', '28909_1'];

$omezeni['1602_1'] = 'X';
$omezeni['1606_1'] = 'X';
$omezeni['1607_1'] = 'X';
$omezeni['1610_1'] = 'X';
$omezeni['1611_1'] = 'X';
$omezeni['1614_1'] = 'X';
$omezeni['1615_1'] = 'X';
$omezeni['2831_1'] = '11';
$omezeni['2833_1'] = 'X';
$omezeni['2835_1'] = '25';
$omezeni['2837_1'] = 'X';
$omezeni['2840_1'] = 'X6';
$omezeni['2842_1'] = '10';
$omezeni['2843_1'] = '25';
$omezeni['2845_1'] = 'X';
$omezeni['2851_1'] = '11';
$omezeni['2852_1'] = '11';
$omezeni['2857_1'] = '7';
$omezeni['2862_1'] = '7';
$omezeni['2864_1'] = '7';
$omezeni['28902_1'] = 'X';
$omezeni['28904_1'] = '25';
$omezeni['28909_1'] = '7';
$omezeni['28919_1'] = 'X6';
$omezeni['3421_1'] = '7';
$omezeni['3423_1'] = 'X6';
$omezeni['3430_1'] = 'X6';
$omezeni['3431_1'] = 'X6';
$omezeni['3443_1'] = 'X';

$trasa['28902_1'] = ['Bohumín;4:17','Ostrava-Svinov;4:41'];
$trasa['28904_1'] = ['Bohumín;4:08','Ostrava-Svinov;4:21'];
$trasa['28909_1'] = ['Ostrava-Svinov;19:46','Bohumín;20:00'];
$trasa['28919_1'] = ['Ostrava-Svinov;22:55','Bohumín;23:08'];
$trasa['3421_1'] = ['Opava východ;15:19','Havířov;16:16'];
$trasa['1602_1'] = ['Třinec;6:01', 'Opava východ;7:36'];
$trasa['1606_1'] = ['Český Těšín;10:10', 'Opava východ;11:36'];
$trasa['1607_1'] = ['Opava východ;8:15', 'Český Těšín;9:41'];
$trasa['1610_1'] = ['Český Těšín;14:10', 'Opava východ;15:36'];
$trasa['1611_1'] = ['Opava východ;12:15', 'Český Těšín;13:43'];
$trasa['1614_1'] = ['Český Těšín;18:10', 'Opava východ;19:36'];
$trasa['1615_1'] = ['Opava východ;16:15', 'Český Těšín;17:43'];
$trasa['2831_1'] = ['Ostrava-Svinov;4:20', 'Český Těšín;5:11'];
$trasa['2833_1'] = ['Ostrava-Svinov;4:50', 'Třinec;5:48'];
$trasa['2835_1'] = ['Ostrava-Svinov;5:08', 'Český Těšín;6:11'];
$trasa['2837_1'] = ['Ostrava-Svinov;5:50', 'Český Těšín;6:40'];
$trasa['2840_1'] = ['Český Těšín;21:56', 'Ostrava-Svinov;22:46'];
$trasa['2842_1'] = ['Český Těšín;22:46', 'Ostrava-Svinov;23:35'];
$trasa['2843_1'] = ['Ostrava-Svinov;13:20', 'Český Těšín;14:11'];
$trasa['2845_1'] = ['Ostrava-Svinov;13:50', 'Český Těšín;14:40'];
$trasa['2851_1'] = ['Ostrava-Svinov;0:05', 'Havířov;0:30'];
$trasa['2852_1'] = ['Havířov;3:28', 'Ostrava-Svinov;3:53'];
$trasa['2857_1'] = ['Ostrava-Svinov;17:50', 'Havířov;18:16'];
$trasa['2862_1'] = ['Havířov;16:43', 'Ostrava-Svinov;17:04'];
$trasa['2864_1'] = ['Havířov;18:43', 'Ostrava-Svinov;19:04'];
$trasa['3406_1'] = ['Český Těšín;5:47', 'Opava východ;7:18'];
$trasa['3407_1'] = ['Opava východ;7:42', 'Český Těšín;9:11'];
$trasa['3408_1'] = ['Český Těšín;6:47', 'Opava východ;8:14'];
$trasa['3409_1'] = ['Opava východ;8:42', 'Český Těšín;10:08'];
$trasa['3414_1'] = ['Český Těšín;9:46', 'Opava východ;11:14'];
$trasa['3415_1'] = ['Opava východ;11:42', 'Český Těšín;13:11'];
$trasa['3416_1'] = ['Český Těšín;10:49', 'Opava východ;12:14'];
$trasa['3422_1'] = ['Český Těšín;13:46', 'Opava východ;15:14'];
$trasa['3423_1'] = ['Opava východ;15:42', 'Český Těšín;17:11'];
$trasa['3424_1'] = ['Český Těšín;14:47', 'Opava východ;16:14'];
$trasa['3425_1'] = ['Opava východ;16:42', 'Český Těšín;18:11'];
$trasa['3430_1'] = ['Český Těšín;17:46', 'Opava východ;19:14'];
$trasa['3431_1'] = ['Opava východ;19:46', 'Český Těšín;21:11'];
$trasa['3432_1'] = ['Český Těšín;18:43', 'Opava východ;20:21'];
$trasa['3433_1'] = ['Opava východ;20:42', 'Český Těšín;22:11'];
$trasa['3443_1'] = ['Opava východ;4:22', 'Ostrava-Svinov;4:57'];
$trasa['3447_1'] = ['Opava východ;12:42', 'Ostrava-Svinov;13:12'];


$typ['28902_1'] = 'Sv';
$typ['28904_1'] = 'Sv';
$typ['28919_1'] = 'Sv';
$typ['28909_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts442 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


