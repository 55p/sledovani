<?php 
$zacatekPlatnosti = '17.2.2016';
$konecPlatnosti = '7.4.2016 23:59:59';

$obeh[1] = array('2921_1', '2924_1', '2929_1', '2932_1', '2937_1', '2940_1', '2947_1', '2948_1', '103349_1', '2955_1', '2954_1');

$omezeni['2920_1'] = 'X6';
$omezeni['2920_2'] = 'T';
$omezeni['2971_1'] = 'X6';

$trasa['2920_1'] = array('Mosty u Jablunkova;4:02', 'Bohumín;5:17');
$trasa['2920_2'] = array('Návsí;4:11', 'Bohumín;5:17');
$trasa['2921_1'] = array('Bohumín;4:38', 'Mosty u Jablunkova;5:55');
$trasa['2923_1'] = array('Bohumín;5:38', 'Mosty u Jablunkova;6:55');
$trasa['2924_1'] = array('Mosty u Jablunkova;6:02', 'Ostrava hl.n.;7:35');
$trasa['2925_1'] = array('Ostrava-Svinov;6:18', 'Mosty u Jablunkova;7:55');
$trasa['2926_1'] = array('Mosty u Jablunkova;7:02', 'Ostrava hl.n.;8:35');
$trasa['2928_1'] = array('Mosty u Jablunkova;8:02', 'Ostrava hl.n.;9:35');
$trasa['2929_1'] = array('Ostrava hl.n.;8:25', 'Mosty u Jablunkova;9:55');
$trasa['2931_1'] = array('Ostrava hl.n.;9:25', 'Mosty u Jablunkova;10:55');
$trasa['2932_1'] = array('Mosty u Jablunkova;10:02', 'Ostrava hl.n.;11:35');
$trasa['2933_1'] = array('Ostrava hl.n.;10:25', 'Mosty u Jablunkova;11:55');
$trasa['2934_1'] = array('Mosty u Jablunkova;11:02', 'Ostrava hl.n.;12:35');
$trasa['2936_1'] = array('Mosty u Jablunkova;12:02', 'Ostrava hl.n.;13:36');
$trasa['2937_1'] = array('Ostrava hl.n.;12:25', 'Mosty u Jablunkova;13:55');
$trasa['2939_1'] = array('Ostrava hl.n.;13:25', 'Mosty u Jablunkova;14:55');
$trasa['2940_1'] = array('Mosty u Jablunkova;14:02', 'Ostrava hl.n.;15:35');
$trasa['2942_1'] = array('Mosty u Jablunkova;15:02', 'Ostrava hl.n.;16:35');
$trasa['2943_1'] = array('Ostrava hl.n.;14:25', 'Mosty u Jablunkova;15:55');
$trasa['2944_1'] = array('Mosty u Jablunkova;16:02', 'Ostrava hl.n.;17:35');
$trasa['2947_1'] = array('Ostrava hl.n.;16:25', 'Mosty u Jablunkova;17:55');
$trasa['2948_1'] = array('Mosty u Jablunkova;18:02', 'Ostrava hl.n.;19:35');
$trasa['2949_1'] = array('Ostrava hl.n.;17:25', 'Mosty u Jablunkova;18:55');
$trasa['2950_1'] = array('Mosty u Jablunkova;19:02', 'Bohumín;20:19');
$trasa['2951_1'] = array('Ostrava hl.n.;18:25', 'Mosty u Jablunkova;19:55');
$trasa['2952_1'] = array('Mosty u Jablunkova;20:02', 'Ostrava-Svinov;21:42');
$trasa['2954_1'] = array('Návsí;22:11', 'Bohumín;23:16');
$trasa['2955_1'] = array('Bohumín;20:38', 'Návsí;21:45');
$trasa['2957_1'] = array('Ostrava-Svinov;22:23', 'Návsí;23:57');
$trasa['2971_1'] = array('Návsí;3:40', 'Mosty u Jablunkova;3:49');
$trasa['103051_1'] = array('Ostrava-Svinov;5:07', 'Bohumín;5:37');
$trasa['3302_1'] = array('Bohumín;5:18', 'Ostrava-Svinov;5:40');
$trasa['103349_1'] = array('Ostrava-Svinov;20:15', 'Bohumín;20:37');
$trasa['103062'] = array('Bohumín;20:20', 'Ostrava-Svinov;21:03');


@$ts442a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>