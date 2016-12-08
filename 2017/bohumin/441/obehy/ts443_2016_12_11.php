<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['2837_1', '2999_1', '2830_1', '2873_1', '2856_1', '2841_1', '2832_1', '2879_1', '2853_1', '2854_1', '2855_1', '2856_2', '2841_2', '2858_1', '2843_1', '2860_1', '2845_1', '2862_1', '2862_2', '2857_1', '2864_1', '2866_1'];

$omezeni['2830_1'] = 'X';
$omezeni['2832_1'] = 'X';
$omezeni['2837_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['2841_1'] = 'X';
$omezeni['2841_2'] = '25';
$omezeni['2843_1'] = '25';
$omezeni['2845_1'] = '25';
$omezeni['2853_1'] = '25';
$omezeni['2854_1'] = '25';
$omezeni['2855_1'] = '25';
$omezeni['2856_1'] = 'X';
$omezeni['2856_2'] = '25';
$omezeni['2857_1'] = '10';
$omezeni['2858_1'] = '25';
$omezeni['2860_1'] = '25';
$omezeni['2862_1'] = 'X';
$omezeni['2862_2'] = '25,-2412,-3112';
$omezeni['2864_1'] = '25,-2412,-3112';
$omezeni['2866_1'] = 'X';
$omezeni['2873_1'] = 'X';
$omezeni['2879_1'] = 'X';
$omezeni['2999_1'] = '2312,2712,2812,2912,3012';

$trasa['2999_1'] = ['Bohumín;6:36','Český Těšín;7:08'];

$trasa['2830_1'] = ['Český Těšín;7:19', 'Ostrava-Svinov;8:08'];
$trasa['2832_1'] = ['Český Těšín;13:19', 'Ostrava-Svinov;14:08'];
$trasa['2837_1'] = ['Ostrava-Svinov;5:52', 'Český Těšín;6:42'];
$trasa['2841_1'] = ['Ostrava-Svinov;11:52', 'Český Těšín;12:42'];
$trasa['2841_2'] = ['Ostrava-Svinov;11:52', 'Havířov;12:17'];
$trasa['2843_1'] = ['Ostrava-Svinov;13:52', 'Havířov;14:17'];
$trasa['2845_1'] = ['Ostrava-Svinov;15:52', 'Havířov;16:17'];
$trasa['2853_1'] = ['Ostrava-Svinov;7:52', 'Havířov;8:18'];
$trasa['2854_1'] = ['Havířov;8:43', 'Ostrava-Svinov;9:08'];
$trasa['2855_1'] = ['Ostrava-Svinov;9:52', 'Havířov;10:18'];
$trasa['2856_1'] = ['Ostrava-Kunčice;10:56', 'Ostrava-Svinov;11:08'];
$trasa['2856_2'] = ['Havířov;10:43', 'Ostrava-Svinov;11:08'];
$trasa['2857_1'] = ['Ostrava hl.n.;17:30', 'Havířov;18:18'];
$trasa['2858_1'] = ['Havířov;12:43', 'Ostrava-Svinov;13:08'];
$trasa['2860_1'] = ['Havířov;14:43', 'Ostrava-Svinov;15:08'];
$trasa['2862_1'] = ['Ostrava-Kunčice;16:56', 'Ostrava hl.n.;17:19'];
$trasa['2862_2'] = ['Havířov;16:43', 'Ostrava hl.n.;17:19'];
$trasa['2864_1'] = ['Havířov;18:43', 'Ostrava-Svinov;19:08'];
$trasa['2866_1'] = ['Havířov;19:43', 'Ostrava-Svinov;20:08'];
$trasa['2873_1'] = ['Ostrava-Svinov;8:52', 'Ostrava-Kunčice;9:04'];
$trasa['2879_1'] = ['Ostrava-Svinov;14:52', 'Ostrava-Kunčice;15:04'];


$typ['2999_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts443 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


