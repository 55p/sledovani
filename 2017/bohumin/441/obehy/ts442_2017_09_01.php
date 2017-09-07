<?php 
$zacatekPlatnosti = '1.9.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['2921_1', '2924_1', '2929_2', '2932_1', '2937_1', '2940_1', '2945_1', '2946_1', '2951_1', '2952_1', '2957_1', ];
$obeh[2] = ['2971_1', '2920_1', '2920_2', '2923_1', '2926_1', '2931_1', '2934_1', '2939_1', '2942_1', '2947_1', '2948_1', '2953_1', '2978_1', '2964_1'];
$obeh[3] = ['2962_1', '2925_1', '2928_1', '2933_1', '2936_1', '2943_1', '2944_1', '2949_1', '2950_1', '2955_1', '2954_1'];

$omezeni['2920_1'] = 'X6';
$omezeni['2920_2'] = 'T';
$omezeni['2962_1'] = 'X';
$omezeni['2964_1'] = 'X5,25';
$omezeni['2971_1'] = 'X6';

$trasa['2920_1'] = ['Mosty u Jablunkova;4:05', 'Bohumín;5:16'];
$trasa['2921_1'] = ['Bohumín;4:40', 'Mosty u Jablunkova;5:53'];
$trasa['2923_1'] = ['Bohumín;5:40', 'Mosty u Jablunkova;6:53'];
$trasa['2924_1'] = ['Mosty u Jablunkova;6:05', 'Ostrava-Svinov;7:33'];
$trasa['2925_1'] = ['Bohumín;6:40', 'Mosty u Jablunkova;7:53'];
$trasa['2926_1'] = ['Mosty u Jablunkova;7:05', 'Ostrava-Svinov;8:33'];
$trasa['2928_1'] = ['Mosty u Jablunkova;8:05', 'Ostrava-Svinov;9:33'];
$trasa['2929_2'] = ['Ostrava-Svinov;8:23', 'Mosty u Jablunkova;9:53'];
$trasa['2931_1'] = ['Ostrava-Svinov;9:23', 'Mosty u Jablunkova;10:53'];
$trasa['2932_1'] = ['Mosty u Jablunkova;10:05', 'Ostrava-Svinov;11:33'];
$trasa['2933_1'] = ['Ostrava-Svinov;10:23', 'Mosty u Jablunkova;11:53'];
$trasa['2934_1'] = ['Mosty u Jablunkova;11:05', 'Ostrava-Svinov;12:33'];
$trasa['2936_1'] = ['Mosty u Jablunkova;12:05', 'Ostrava-Svinov;13:33'];
$trasa['2937_1'] = ['Ostrava-Svinov;12:23', 'Mosty u Jablunkova;13:53'];
$trasa['2939_1'] = ['Ostrava-Svinov;13:23', 'Mosty u Jablunkova;14:53'];
$trasa['2940_1'] = ['Mosty u Jablunkova;14:05', 'Ostrava hl.n.;15:25'];
$trasa['2942_1'] = ['Mosty u Jablunkova;15:05', 'Ostrava hl.n.;16:25'];
$trasa['2943_1'] = ['Ostrava-Svinov;14:23', 'Mosty u Jablunkova;15:53'];
$trasa['2944_1'] = ['Mosty u Jablunkova;16:05', 'Ostrava hl.n.;17:25'];
$trasa['2945_1'] = ['Ostrava hl.n.;15:31', 'Mosty u Jablunkova;16:53'];
$trasa['2946_1'] = ['Mosty u Jablunkova;17:05', 'Ostrava hl.n.;18:25'];
$trasa['2947_1'] = ['Ostrava hl.n.;16:31', 'Mosty u Jablunkova;17:53'];
$trasa['2948_1'] = ['Mosty u Jablunkova;18:05', 'Ostrava hl.n.;19:25'];
$trasa['2949_1'] = ['Ostrava hl.n.;17:31', 'Mosty u Jablunkova;18:58'];
$trasa['2950_1'] = ['Mosty u Jablunkova;19:05', 'Bohumín;20:16'];
$trasa['2951_1'] = ['Ostrava hl.n.;18:31', 'Mosty u Jablunkova;19:53'];
$trasa['2952_1'] = ['Mosty u Jablunkova;20:05', 'Ostrava-Svinov;21:34'];
$trasa['2953_1'] = ['Ostrava hl.n.;19:31', 'Mosty u Jablunkova;20:53'];
$trasa['2954_1'] = ['Návsí;22:14', 'Bohumín;23:16'];
$trasa['2955_1'] = ['Bohumín;20:40', 'Návsí;21:43'];
$trasa['2957_1'] = ['Ostrava-Svinov;22:23', 'Návsí;23:53'];
$trasa['2962_1'] = ['Český Těšín;5:44', 'Bohumín;6:22'];
$trasa['2964_1'] = ['Český Těšín;21:47', 'Ostrava-Svinov;22:45'];
$trasa['2971_1'] = ['Návsí;3:45', 'Mosty u Jablunkova;3:53'];
$trasa['2978_1'] = ['Mosty u Jablunkova;21:05', 'Český Těšín;21:37'];
$trasa['2920_2'] = ['Návsí;4:14', 'Bohumín;5:16'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts442 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


