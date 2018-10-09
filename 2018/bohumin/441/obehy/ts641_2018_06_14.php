<?php 
$zacatekPlatnosti = '14.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3052_1', '3053_1', '3360_1', '3360_2', '3361_1', '3070_1', '3071_1', '3364_1', '3365_1', '3058_1', '3059_1', '3060_1', '3061_1', '3072_1', '3073_1', '3062_1', '3063_1', '3064_1', '3065_1'];
$obeh[2] = ['3066_1', '3067_1', '3050_1', '3051_1', '3054_1', '3055_1', '3068_1', '3069_1', '3362_1', '3363_1', '3056_1', '3057_1', '3368_1', '3369_1'];

$omezeni['3052_1'] = 'X6';
$omezeni['3053_1'] = 'X6';
$omezeni['3360_2'] = '7';
$omezeni['3360_1'] = 'X6';

$trasa['3050_1'] = ['Bohumín;3:40', 'Mošnov,Ostrava Airport;4:19'];
$trasa['3051_1'] = ['Mošnov,Ostrava Airport;4:38', 'Bohumín;5:20'];
$trasa['3052_1'] = ['Bohumín;4:46', 'Mošnov,Ostrava Airport;5:26'];
$trasa['3053_1'] = ['Mošnov,Ostrava Airport;6:35', 'Ostrava hl.n.;7:06'];
$trasa['3054_1'] = ['Bohumín;6:22', 'Mošnov,Ostrava Airport;7:05'];
$trasa['3055_1'] = ['Mošnov,Ostrava Airport;7:34', 'Ostrava-Svinov;7:56'];
$trasa['3056_1'] = ['Bohumín;12:51', 'Mošnov,Ostrava Airport;13:29'];
$trasa['3057_1'] = ['Mošnov,Ostrava Airport;14:44', 'Bohumín;15:37'];
$trasa['3058_1'] = ['Ostrava hl.n.;14:49', 'Mošnov,Ostrava Airport;15:24'];
$trasa['3059_1'] = ['Mošnov,Ostrava Airport;15:34', 'Ostrava hl.n.;16:04'];
$trasa['3060_1'] = ['Ostrava hl.n.;16:49', 'Mošnov,Ostrava Airport;17:24'];
$trasa['3061_1'] = ['Mošnov,Ostrava Airport;18:45', 'Ostrava-Svinov;19:07'];
$trasa['3062_1'] = ['Bohumín;20:48', 'Mošnov,Ostrava Airport;21:26'];
$trasa['3063_1'] = ['Mošnov,Ostrava Airport;22:34', 'Ostrava-Svinov;22:56'];
$trasa['3064_1'] = ['Ostrava-Svinov;23:03', 'Mošnov,Ostrava Airport;23:25'];
$trasa['3065_1'] = ['Mošnov,Ostrava Airport;23:30', 'Bohumín;0:08'];
$trasa['3066_1'] = ['Bohumín;2:07', 'Mošnov,Ostrava Airport;2:45'];
$trasa['3067_1'] = ['Mošnov,Ostrava Airport;2:54', 'Bohumín;3:32'];
$trasa['3068_1'] = ['Ostrava-SvinovNástupiště 2J / kolej 8;8:42', 'Mošnov,Ostrava Airport;9:04'];
$trasa['3069_1'] = ['Mošnov,Ostrava Airport;9:09', 'Ostrava-Svinov;9:35'];
$trasa['3070_1'] = ['Ostrava-Svinov;10:42', 'Mošnov,Ostrava Airport;11:04'];
$trasa['3071_1'] = ['Mošnov,Ostrava Airport;11:11', 'Ostrava-Svinov;11:33'];
$trasa['3072_1'] = ['Ostrava-Svinov;19:17', 'Mošnov,Ostrava Airport;19:39'];
$trasa['3073_1'] = ['Mošnov,Ostrava Airport;20:00', 'Bohumín;20:38'];
$trasa['3360_1'] = ['Ostrava hl.n.;7:45', 'Suchdol nad Odrou;8:14'];
$trasa['3360_2'] = ['Bohumín;7:37', 'Suchdol nad Odrou;8:14'];
$trasa['3361_1'] = ['Suchdol nad Odrou;9:53', 'Ostrava-Svinov;10:15'];
$trasa['3362_1'] = ['Ostrava-Svinov;9:42', 'Suchdol nad Odrou;10:04'];
$trasa['3363_1'] = ['Suchdol nad Odrou;11:42', 'Bohumín;12:21'];
$trasa['3364_1'] = ['Ostrava-Svinov;11:42', 'Suchdol nad Odrou;12:04'];
$trasa['3365_1'] = ['Suchdol nad Odrou;12:48', 'Ostrava hl.n.;13:18'];
$trasa['3368_1'] = ['Bohumín;18:35', 'Suchdol nad Odrou;19:11'];
$trasa['3369_1'] = ['Suchdol nad Odrou;20:48', 'Bohumín;21:26'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts641 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


