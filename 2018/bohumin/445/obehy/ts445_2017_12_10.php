<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['2835_1', '2830_1', '2835_2', '2830_2', '2873_1', '2856_1', '2841_1', '2832_1', '2879_1', '2862_1', '2857_1', '2866_1'];

$omezeni['2830_1'] = 'X,-2712,-2812,-2912';
$omezeni['2830_2'] = '2712,2812,2912';
$omezeni['2832_1'] = 'X';
$omezeni['2835_1'] = 'X,-2712,-2812,-2912';
$omezeni['2835_2'] = '2712,2812,2912';
$omezeni['2841_1'] = 'X';
$omezeni['2856_1'] = 'X';
$omezeni['2857_1'] = 'X';
$omezeni['2862_1'] = 'X';
$omezeni['2866_1'] = 'X';
$omezeni['2873_1'] = 'X';
$omezeni['2879_1'] = 'X';


$trasa['2830_1'] = ['Návsí;6:50', 'Ostrava-Svinov;8:05'];
$trasa['2832_1'] = ['Český Těšín;13:16', 'Ostrava-Svinov;14:04'];
$trasa['2835_1'] = ['Ostrava-Svinov;5:08', 'Návsí;6:36'];
$trasa['2841_1'] = ['Ostrava-Svinov;11:50', 'Český Těšín;12:44'];
$trasa['2856_1'] = ['Ostrava-Kunčice;10:54', 'Ostrava-Svinov;11:04'];
$trasa['2857_1'] = ['Ostrava-Svinov;17:50', 'Havířov;18:16'];
$trasa['2862_1'] = ['Ostrava-Kunčice;16:54', 'Ostrava-Svinov;17:04'];
$trasa['2866_1'] = ['Havířov;19:40', 'Ostrava-Svinov;20:05'];
$trasa['2873_1'] = ['Ostrava-Svinov;8:50', 'Ostrava-Kunčice;9:02'];
$trasa['2879_1'] = ['Ostrava-Svinov;14:50', 'Ostrava-Kunčice;15:02'];
$trasa['2830_2'] = ['Český Těšín;7:16', 'Ostrava-Svinov;8:05'];
$trasa['2835_2'] = ['Ostrava-Svinov;5:08', 'Český Těšín;6:11'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts445 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


