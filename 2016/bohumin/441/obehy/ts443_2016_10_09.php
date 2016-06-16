<?php 
$zacatekPlatnosti = '9.10.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('2837_1', '2830_1', '2873_1', '2854_1', '2841_1', '2832_1', '2879_1', '2860_1', '2853_1', '2852_1', '2855_1', '2854_2', '2841_2', '2856_1', '2843_1', '2858_1', '2845_1', '2860_2', '2857_1', '2864_3', '2862_1');

$omezeni['2830_1'] = 'X';
$omezeni['2832_1'] = 'X';
$omezeni['2837_1'] = 'X';
$omezeni['2841_1'] = 'X';
$omezeni['2841_2'] = '25';
$omezeni['2843_1'] = '25';
$omezeni['2845_1'] = '25';
$omezeni['2852_1'] = '25';
$omezeni['2853_1'] = '25';
$omezeni['2854_1'] = 'X';
$omezeni['2854_2'] = '25';
$omezeni['2864_3'] = '23';
$omezeni['2855_1'] = '25';
$omezeni['2856_1'] = '25';
$omezeni['2857_1'] = '10';
$omezeni['2858_1'] = '25';
$omezeni['2860_1'] = 'X';
$omezeni['2860_2'] = '25';
$omezeni['2862_1'] = '25';
$omezeni['2873_1'] = 'X';
$omezeni['2879_1'] = 'X';

$trasa['2830_1'] = array('Český Těšín;7:17', 'Ostrava-Svinov;8:07');
$trasa['2832_1'] = array('Český Těšín;13:17', 'Ostrava-Svinov;14:07');
$trasa['2837_1'] = array('Ostrava-Svinov;5:52', 'Český Těšín;6:40');
$trasa['2841_1'] = array('Ostrava-Svinov;11:52', 'Český Těšín;12:41');
$trasa['2841_2'] = array('Ostrava-Svinov;11:52', 'Havířov;12:18');
$trasa['2843_1'] = array('Ostrava-Svinov;13:52', 'Havířov;14:18');
$trasa['2845_1'] = array('Ostrava-Svinov;15:52', 'Havířov;16:18');
$trasa['2852_1'] = array('Havířov;8:42', 'Ostrava-Svinov;9:07');
$trasa['2853_1'] = array('Ostrava-Svinov;7:52', 'Havířov;8:18');
$trasa['2854_1'] = array('Ostrava-Kunčice;10:55', 'Ostrava-Svinov;11:07');
$trasa['2854_2'] = array('Havířov;10:42', 'Ostrava-Svinov;11:07');
$trasa['2855_1'] = array('Ostrava-Svinov;9:52', 'Havířov;10:18');
$trasa['2856_1'] = array('Havířov;12:42', 'Ostrava-Svinov;13:07');
$trasa['2857_1'] = array('Ostrava-Svinov;17:52', 'Havířov;18:18');
$trasa['2858_1'] = array('Havířov;14:42', 'Ostrava-Svinov;15:07');
$trasa['2860_1'] = array('Ostrava-Kunčice;16:55', 'Ostrava-Svinov;17:07');
$trasa['2860_2'] = array('Havířov;16:42', 'Ostrava-Svinov;17:07');
$trasa['2862_1'] = array('Havířov;18:42', 'Ostrava-Svinov;19:07');
$trasa['2864_3'] = array('Havířov;19:39', 'Ostrava-Svinov;20:07');
$trasa['2873_1'] = array('Ostrava-Svinov;8:45', 'Ostrava-Kunčice;8:57');
$trasa['2879_1'] = array('Ostrava-Svinov;14:45', 'Ostrava-Kunčice;14:57');

@$ts443 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>