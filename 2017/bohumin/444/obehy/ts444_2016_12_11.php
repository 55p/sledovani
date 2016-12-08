<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['3404_1', '1605_1', '3380_1', '2875_1', '2858_1', '2843_1', '2834_1', '2881_1', '2864_1', '2913_1'];
$obeh[2] = ['2900_1', '2960_1', '2962_1', '2871_1', '2854_1', '2877_1', '2860_1', '2845_1', '2994_1', '3307_1', '2975_1', '2930_1', '2935_1', '2974_1', '3306_1'];
$obeh[3] = ['2991_1', '2970_1', '2973_1', '2972_1', '3307_2', '2975_2', '2930_2', '2935_2', '2974_2', '2977_1', '2992_1', '3306_2'];

$omezeni['1605_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['2834_1'] = 'X';
$omezeni['2843_1'] = 'X';
$omezeni['2845_1'] = 'X';
$omezeni['2854_1'] = 'X';
$omezeni['2858_1'] = 'X';
$omezeni['2860_1'] = 'X';
$omezeni['2864_1'] = 'X';
$omezeni['2871_1'] = 'X';
$omezeni['2875_1'] = 'X';
$omezeni['2877_1'] = 'X';
$omezeni['2881_1'] = 'X';
$omezeni['2930_1'] = '25';
$omezeni['2930_2'] = 'X';
$omezeni['2935_1'] = '25';
$omezeni['2935_2'] = 'X';
$omezeni['2960_1'] = '25,2312,2712,2812,2912,3012';
$omezeni['2962_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['2970_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['2972_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['2973_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['2974_1'] = '25';
$omezeni['2974_2'] = 'X';
$omezeni['2975_1'] = '25';
$omezeni['2975_2'] = 'X';
$omezeni['2977_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['2991_1'] = 'X1,-2712';
$omezeni['2992_1'] = 'X5,2212,-2312,-3012';
$omezeni['2994_1'] = 'X5';
$omezeni['3306_1'] = '25';
$omezeni['3306_2'] = '2312,2712,2812,2912,3012';
$omezeni['3307_1'] = '25';
$omezeni['3307_2'] = '2312,2712,2812,2912,3012';
$omezeni['3380_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['3404_1'] = 'X,-2312,-2712,-2812,-2912,-3012';

$trasa['2991_1'] = ['Bohumín;4:11','Návsí;5:00'];
$trasa['2992_1'] = ['Návsí;14:49','Bohumín;15:36'];
$trasa['2994_1'] = ['Český Těšín;16:52','Bohumín;17:25'];
$trasa['3306'] = ['Český Těšín;13:38','Bohumín;14:16'];
$trasa['3307_1'] = ['Bohumín;7:40','Český Těšín;8:17'];
$trasa['3307_2'] = ['Bohumín;7:40','Český Těšín;8:17'];

$trasa['1605_1'] = ['Opava východ;7:09', 'Ostrava střed;7:54'];
$trasa['2834_1'] = ['Český Těšín;15:19', 'Ostrava-Svinov;16:08'];
$trasa['2843_1'] = ['Ostrava-Svinov;13:52', 'Český Těšín;14:42'];
$trasa['2845_1'] = ['Ostrava-Svinov;15:52', 'Český Těšín;16:42'];
$trasa['2854_1'] = ['Ostrava-Kunčice;8:56', 'Ostrava-Svinov;9:08'];
$trasa['2858_1'] = ['Ostrava-Kunčice;12:56', 'Ostrava-Svinov;13:08'];
$trasa['2860_1'] = ['Ostrava-Kunčice;14:56', 'Ostrava-Svinov;15:08'];
$trasa['2864_1'] = ['Ostrava-Kunčice;18:56', 'Ostrava-Svinov;19:08'];
$trasa['2871_1'] = ['Ostrava-Svinov;6:52', 'Ostrava-Kunčice;7:04'];
$trasa['2875_1'] = ['Ostrava-Svinov;10:52', 'Ostrava-Kunčice;11:04'];
$trasa['2877_1'] = ['Ostrava-Svinov;12:52', 'Ostrava-Kunčice;13:04'];
$trasa['2881_1'] = ['Ostrava-Svinov;16:52', 'Ostrava-Kunčice;17:04'];
$trasa['2900_1'] = ['Čadca;4:30', 'Český Těšín;5:26'];
$trasa['2913_1'] = ['Bohumín;21:40', 'Čadca;23:07'];
$trasa['2930_1'] = ['Mosty u Jablunkova;9:05', 'Ostrava-Svinov;10:33'];
$trasa['2930_2'] = ['Mosty u Jablunkova;9:05', 'Ostrava-Svinov;10:33'];
$trasa['2935_1'] = ['Ostrava-Svinov;11:23', 'Mosty u Jablunkova;12:53'];
$trasa['2935_2'] = ['Ostrava-Svinov;11:23', 'Mosty u Jablunkova;12:53'];
$trasa['2960_1'] = ['Český Těšín;5:31', 'Bohumín;6:09'];
$trasa['2962_1'] = ['Český Těšín;5:44', 'Bohumín;6:22'];
$trasa['2970_1'] = ['Návsí;5:14', 'Český Těšín;5:37'];
$trasa['2972_1'] = ['Návsí;6:51', 'Český Těšín;7:15'];
$trasa['2973_1'] = ['Český Těšín;5:53', 'Návsí;6:17'];
$trasa['2974_1'] = ['Mosty u Jablunkova;13:02', 'Český Těšín;13:34'];
$trasa['2974_2'] = ['Mosty u Jablunkova;13:02', 'Český Těšín;13:34'];
$trasa['2975_1'] = ['Český Těšín;8:21', 'Mosty u Jablunkova;8:55'];
$trasa['2975_2'] = ['Český Těšín;8:21', 'Mosty u Jablunkova;8:55'];
$trasa['2977_1'] = ['Český Těšín;14:10', 'Návsí;14:34'];
$trasa['3380_1'] = ['Ostrava střed;8:11', 'Ostrava-Svinov;8:29'];
$trasa['3404_1'] = ['Český Těšín;5:19', 'Opava východ;6:48'];


$typ['2991_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts444 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


