<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1601_1', '2839_1', '3410_1', '3411_1', '3418_1', '3419_1', '3426_1', '3427_1', '2838_1', '2847_1');
$obeh[2] = array('3400_1', '1603_1', '1604_1', '1609_1', '1608_1', '1613_1', '1612_1', '1617_1', '2836_1', '3433_1');
$obeh[3] = array('2833_1', '1602_1', '1607_1', '1606_1', '1611_1', '1610_1', '1615_1', '1614_1', '3433_2', '3403_1', '2839_2', '3410_2', '3411_2', '3418_2', '3419_2', '3426_2', '3427_2', '2836_2', '2847_2');
$obeh[4] = array('3402_1', '3405_1', 3412, 3413, 3420, '3421_1', '3428_1', '3429_1', '2842_1', '2838_2');
$obeh[5] = array('2859_1', '2850_1', '2831_1', '3406_1', '3407_1', '3414_1', '3415_1', '3422_1', '3447_1', '3423_1', '3423_2', '3430_1', '3431_1', '2840_1');
$obeh[6] = array('2835_1', '3408_1', '3409_1', '3416_1', '3417_1', '3424_1', '3425_1', '3432_1', '3433_3', '2842_2');

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
$omezeni['1614_1'] = '23';
$omezeni['1615_1'] = 'X';
$omezeni['1617_1'] = '23';
$omezeni['2831_1'] = '11';
$omezeni['2833_1'] = 'X';
$omezeni['2836_1'] = '23';
$omezeni['2836_2'] = '25';
$omezeni['2838_1'] = 'X';
$omezeni['2838_2'] = '25';
$omezeni['2839_1'] = 'X';
$omezeni['2839_2'] = '25';
$omezeni['2840_1'] = '10';
$omezeni['2842_1'] = '23';
$omezeni['2847_1'] = '23';
$omezeni['2847_2'] = '25';
$omezeni['2850_1'] = '11';
$omezeni['2859_1'] = '11';
$omezeni['3400_1'] = 'X';
$omezeni['3403_1'] = '25';
$omezeni['3410_1'] = 'X';
$omezeni['3410_2'] = '25';
$omezeni['3411_1'] = 'X';
$omezeni['3411_2'] = '25';
$omezeni['3418_1'] = 'X';
$omezeni['3418_2'] = '25';
$omezeni['3419_1'] = 'X';
$omezeni['3419_2'] = '25';
$omezeni['3423_1'] = 'T';
$omezeni['3423_2'] = 'X6';
$omezeni['3426_1'] = 'X';
$omezeni['3426_2'] = '25';
$omezeni['3427_1'] = 'X';
$omezeni['3427_2'] = '25';
$omezeni['3431_1'] = '10';
$omezeni['3433_1'] = '3112';
$omezeni['3433_2'] = '23';
$omezeni['3433_3'] = '25';
$omezeni['3447_1'] = 'T';
$omezeni['2842_2'] = '25';

$trasa['3412'] = array('Český Těšín;8:47', 'Opava východ;10:16');
$trasa['3413'] = array('Opava východ;10:42', 'Český Těšín;12:11');
$trasa['3420'] = array('Český Těšín;12:47', 'Opava východ;14:16');
$trasa['2859_1'] = array('Ostrava-Svinov;0:00','Havířov;0:23');
$trasa['1601_1'] = array('Opava východ;5:19', 'Ostrava střed;6:06');
$trasa['1602_1'] = array('Český Těšín;6:09', 'Opava východ;7:36');
$trasa['1603_1'] = array('Opava východ;6:08', 'Český Těšín;7:34');
$trasa['1604_1'] = array('Český Těšín;8:09', 'Opava východ;9:36');
$trasa['1606_1'] = array('Český Těšín;10:09', 'Opava východ;11:36');
$trasa['1607_1'] = array('Opava východ;8:08', 'Český Těšín;9:34');
$trasa['1608_1'] = array('Český Těšín;12:09', 'Opava východ;13:36');
$trasa['1609_1'] = array('Opava východ;10:08', 'Český Těšín;11:34');
$trasa['1610_1'] = array('Český Těšín;14:09', 'Opava východ;15:36');
$trasa['1611_1'] = array('Opava východ;12:08', 'Český Těšín;13:34');
$trasa['1612_1'] = array('Český Těšín;16:09', 'Opava východ;17:36');
$trasa['1613_1'] = array('Opava východ;14:08', 'Český Těšín;15:34');
$trasa['1614_1'] = array('Český Těšín;18:09', 'Opava východ;19:36');
$trasa['1615_1'] = array('Opava východ;16:08', 'Český Těšín;17:34');
$trasa['1617_1'] = array('Opava východ;18:08', 'Český Těšín;19:34');
$trasa['2831_1'] = array('Ostrava-Svinov;4:22', 'Český Těšín;5:11');
$trasa['2833_1'] = array('Ostrava-Svinov;4:52', 'Český Těšín;5:40');
$trasa['2835_1'] = array('Ostrava-Svinov;5:08', 'Český Těšín;6:11');
$trasa['2836_1'] = array('Český Těšín;19:44', 'Ostrava-Svinov;20:37');
$trasa['2836_2'] = array('Český Těšín;19:44', 'Ostrava-Svinov;20:37');
$trasa['2838_1'] = array('Český Těšín;20:47', 'Ostrava-Svinov;21:37');
$trasa['2838_2'] = array('Český Těšín;20:47', 'Ostrava-Svinov;21:37');
$trasa['2839_1'] = array('Ostrava-Kunčice;6:37', 'Český Těšín;7:11');
$trasa['2839_2'] = array('Ostrava-Kunčice;6:37', 'Český Těšín;7:11');
$trasa['2840_1'] = array('Český Těšín;21:56', 'Ostrava-Svinov;22:45');
$trasa['2842'] = array('Český Těšín;22:47', 'Ostrava-Svinov;23:37');
$trasa['2847_1'] = array('Ostrava-Svinov;22:22', 'Český Těšín;23:11');
$trasa['2847_2'] = array('Ostrava-Svinov;22:22', 'Český Těšín;23:11');
$trasa['2850_1'] = array('Havířov;3:23', 'Ostrava-Svinov;3:49');
$trasa['3400_1'] = array('Český Těšín;4:17', 'Opava východ;5:35');
$trasa['3402_1'] = array('Český Těšín;4:43', 'Opava východ;6:17');
$trasa['3403_1'] = array('Ostrava-Svinov;6:22', 'Ostrava-Kunčice;6:34');
$trasa['3405_1'] = array('Opava východ;6:30', 'Český Těšín;8:11');
$trasa['3406_1'] = array('Český Těšín;5:43', 'Opava východ;7:18');
$trasa['3407_1'] = array('Opava východ;7:42', 'Český Těšín;9:11');
$trasa['3408_1'] = array('Český Těšín;6:43', 'Opava východ;8:16');
$trasa['3409_1'] = array('Opava východ;8:42', 'Český Těšín;10:11');
$trasa['3410_1'] = array('Český Těšín;7:43', 'Opava východ;9:14');
$trasa['3410_2'] = array('Český Těšín;7:43', 'Opava východ;9:14');
$trasa['3411_1'] = array('Opava východ;9:42', 'Český Těšín;11:11');
$trasa['3411_2'] = array('Opava východ;9:42', 'Český Těšín;11:11');
$trasa['3414_1'] = array('Český Těšín;9:43', 'Opava východ;11:14');
$trasa['3415_1'] = array('Opava východ;11:42', 'Český Těšín;13:11');
$trasa['3416_1'] = array('Český Těšín;10:47', 'Opava východ;12:16');
$trasa['3417_1'] = array('Opava východ;12:42', 'Český Těšín;14:11');
$trasa['3418_1'] = array('Český Těšín;11:45', 'Opava východ;13:14');
$trasa['3418_2'] = array('Český Těšín;11:45', 'Opava východ;13:14');
$trasa['3419_1'] = array('Opava východ;13:42', 'Český Těšín;15:11');
$trasa['3419_2'] = array('Opava východ;13:42', 'Český Těšín;15:11');
$trasa['3421_1'] = array('Opava východ;14:42', 'Český Těšín;16:11');
$trasa['3422_1'] = array('Český Těšín;13:43', 'Opava východ;15:14');
$trasa['3423_1'] = array('Ostrava-Svinov;16:22', 'Český Těšín;17:11');
$trasa['3423_2'] = array('Opava východ;15:42', 'Český Těšín;17:11');
$trasa['3424_1'] = array('Český Těšín;14:45', 'Opava východ;16:16');
$trasa['3425_1'] = array('Opava východ;16:42', 'Český Těšín;18:11');
$trasa['3426_1'] = array('Český Těšín;15:43', 'Opava východ;17:14');
$trasa['3426_2'] = array('Český Těšín;15:43', 'Opava východ;17:14');
$trasa['3427_1'] = array('Opava východ;17:42', 'Český Těšín;19:11');
$trasa['3427_2'] = array('Opava východ;17:42', 'Český Těšín;19:11');
$trasa['3428_1'] = array('Český Těšín;16:47', 'Opava východ;18:16');
$trasa['3429_1'] = array('Opava východ;18:42', 'Český Těšín;20:11');
$trasa['3430_1'] = array('Český Těšín;17:43', 'Opava východ;19:14');
$trasa['3431_1'] = array('Opava východ;19:42', 'Český Těšín;21:11');
$trasa['3432_1'] = array('Český Těšín;18:44', 'Opava východ;20:30');
$trasa['3433_1'] = array('Opava východ;20:42', 'Český Těšín;22:11');
$trasa['3433_2'] = array('Opava východ;20:42', 'Český Těšín;22:11');
$trasa['3433_3'] = array('Opava východ;20:42', 'Český Těšín;22:11');
$trasa['3447_1'] = array('Opava východ;15:18', 'Ostrava-Svinov;15:47');


@$ts441 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>