<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['2995_1', '3404_1', '1605_1', '3380_1', '2875_1', '2858_1', '2843_1', '2834_1', '2881_1', '2864_1', '2913_1'];
$obeh[2] = ['2900_1', '2900_2', '2871_1', '2854_1', '2877_1', '2860_1', '3421_1', '2994_1'];

$omezeni['1605_1'] = 'X,-2712,-2812,-2912';
$omezeni['2834_1'] = 'X';
$omezeni['2843_1'] = 'X';
$omezeni['2854_1'] = 'X';
$omezeni['2858_1'] = 'X';
$omezeni['2860_1'] = 'X';
$omezeni['2864_1'] = 'X';
$omezeni['2871_1'] = 'X';
$omezeni['2875_1'] = 'X';
$omezeni['2877_1'] = 'X';
$omezeni['2881_1'] = 'X';
$omezeni['2900_1'] = 'X';
$omezeni['2900_2'] = '25';
$omezeni['2994_1'] = 'X5';
$omezeni['2995_1'] = 'X1';
$omezeni['3380_1'] = 'X,-2712,-2812,-2912';
$omezeni['3404_1'] = 'X,-2712,-2812,-2912';
$omezeni['3421_1'] = 'X';

$trasa['2994_1'] = ['Český Těšín;16:54','Bohumín;17:27'];
$trasa['2995_1'] = ['Bohumín;4:29','Český Těšín;5:05'];
$trasa['1605_1'] = ['Opava východ;7:09', 'Ostrava střed;8:00'];
$trasa['2834_1'] = ['Návsí;14:50', 'Ostrava-Svinov;16:05'];
$trasa['2843_1'] = ['Ostrava-Svinov;13:20', 'Návsí;14:36'];
$trasa['2854_1'] = ['Ostrava-Kunčice;8:58', 'Ostrava-Svinov;9:09'];
$trasa['2858_1'] = ['Ostrava-Kunčice;12:54', 'Ostrava-Svinov;13:05'];
$trasa['2860_1'] = ['Ostrava-Kunčice;14:54', 'Ostrava-Svinov;15:05'];
$trasa['2864_1'] = ['Ostrava-Kunčice;18:54', 'Ostrava-Svinov;19:04'];
$trasa['2871_1'] = ['Ostrava-Svinov;6:50', 'Ostrava-Kunčice;7:02'];
$trasa['2875_1'] = ['Ostrava-Svinov;10:50', 'Ostrava-Kunčice;11:02'];
$trasa['2877_1'] = ['Ostrava-Svinov;12:50', 'Ostrava-Kunčice;13:02'];
$trasa['2881_1'] = ['Ostrava-Svinov;16:50', 'Ostrava-Kunčice;17:02'];
$trasa['2900_1'] = ['Čadca;4:30', 'Ostrava-Svinov;6:18'];
$trasa['2900_2'] = ['Čadca;4:30', 'Bohumín;6:02'];
$trasa['2913_1'] = ['Bohumín;21:39', 'Čadca;23:08'];
$trasa['3380_1'] = ['Ostrava střed;8:11', 'Ostrava hl.n.;8:17'];
$trasa['3404_1'] = ['Český Těšín;5:15', 'Opava východ;6:48'];
$trasa['3421_1'] = ['Ostrava-Svinov;15:50', 'Český Těšín;16:41'];

$typ['2995_1'] = 'Sv';
$typ['2994_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts446 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


