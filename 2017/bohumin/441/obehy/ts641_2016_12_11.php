<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['3052_1', '3053_1', '3360_1', '3360_2', '3361_1', '3364_1', '3365_1', '3340_1', '3341_1', '3058_1', '3059_1', '3366_1', '3367_1', '3346_1', '3347_1', '3368_2', '3369_1', '3347_2'];
$obeh[2] = ['3050_1', '3051_1', '3054_1', '3055_1', '3362_1', '3363_1', '3056_1', '3057_1', '3342_1', '3343_1', '3060_1', '3061_1', '3061_2', '3348_1', '3349_1', '3062_1', '3063_1', '3064_1', '3065_1'];

$omezeni['3050_1'] = '11';
$omezeni['3051_1'] = '11';
$omezeni['3052_1'] = 'X6';
$omezeni['3053_1'] = 'X6';
$omezeni['3061_1'] = '2412,3112';
$omezeni['3061_2'] = '10';
$omezeni['3062_1'] = '10';
$omezeni['3063_1'] = '10';
$omezeni['3064_1'] = '10';
$omezeni['3065_1'] = '10';
$omezeni['3347_1'] = '10';
$omezeni['3347_2'] = '2412,3112';
$omezeni['3348_1'] = '10';
$omezeni['3349_1'] = '10';
$omezeni['3360_1'] = 'X6';
$omezeni['3360_2'] = 'T';
$omezeni['3368_2'] = '10';
$omezeni['3369_1'] = '10';

$trasa['3050_1'] = ['Bohumín;3:48', 'Mošnov,Ostrava Airport;4:27'];
$trasa['3051_1'] = ['Mošnov,Ostrava Airport;4:38', 'Bohumín;5:22'];
$trasa['3052_1'] = ['Bohumín;4:45', 'Mošnov,Ostrava Airport;5:27'];
$trasa['3053_1'] = ['Mošnov,Ostrava Airport;6:36', 'Ostrava hl.n.;7:06'];
$trasa['3054_1'] = ['Bohumín;6:25', 'Mošnov,Ostrava Airport;7:05'];
$trasa['3055_1'] = ['Mošnov,Ostrava Airport;7:34', 'Ostrava hl.n.;8:04'];
$trasa['3056_1'] = ['Bohumín;12:50', 'Mošnov,Ostrava Airport;13:29'];
$trasa['3057_1'] = ['Mošnov,Ostrava Airport;14:46', 'Ostrava hl.n.;15:16'];
$trasa['3058_1'] = ['Ostrava hl.n.;14:59', 'Mošnov,Ostrava Airport;15:30'];
$trasa['3059_1'] = ['Mošnov,Ostrava Airport;15:35', 'Ostrava hl.n.;16:05'];
$trasa['3060_1'] = ['Ostrava hl.n.;17:04', 'Mošnov,Ostrava Airport;17:35'];
$trasa['3061_1'] = ['Mošnov,Ostrava Airport;18:40', 'Bohumín;19:18'];
$trasa['3061_2'] = ['Mošnov,Ostrava Airport;18:40', 'Ostrava hl.n.;19:09'];
$trasa['3062_1'] = ['Bohumín;20:50', 'Mošnov,Ostrava Airport;21:29'];
$trasa['3063_1'] = ['Mošnov,Ostrava Airport;22:39', 'Ostrava-Svinov;23:01'];
$trasa['3064_1'] = ['Ostrava-Svinov;23:07', 'Mošnov,Ostrava Airport;23:30'];
$trasa['3065_1'] = ['Mošnov,Ostrava Airport;23:35', 'Bohumín;0:13'];
$trasa['3340_1'] = ['Ostrava-Svinov;13:42', 'Studénka;13:54'];
$trasa['3341_1'] = ['Studénka;14:07', 'Ostrava hl.n.;14:43'];
$trasa['3342_1'] = ['Ostrava hl.n.;15:30', 'Studénka;15:54'];
$trasa['3343_1'] = ['Studénka;16:07', 'Ostrava hl.n.;16:27'];
$trasa['3346_1'] = ['Ostrava-Svinov;17:44', 'Studénka;18:01'];
$trasa['3347_1'] = ['Studénka;18:07', 'Ostrava hl.n.;18:26'];
$trasa['3347_2'] = ['Studénka;18:07', 'Bohumín;18:36'];
$trasa['3348_1'] = ['Ostrava hl.n.;19:30', 'Studénka;19:54'];
$trasa['3349_1'] = ['Studénka;20:07', 'Bohumín;20:37'];
$trasa['3360_1'] = ['Ostrava hl.n.;7:30', 'Suchdol nad Odrou;8:03'];
$trasa['3360_2'] = ['Bohumín;7:21', 'Suchdol nad Odrou;8:03'];
$trasa['3361_1'] = ['Suchdol nad Odrou;9:53', 'Ostrava-Svinov;10:14'];
$trasa['3362_1'] = ['Ostrava hl.n.;9:30', 'Suchdol nad Odrou;10:04'];
$trasa['3363_1'] = ['Suchdol nad Odrou;11:53', 'Bohumín;12:32'];
$trasa['3364_1'] = ['Ostrava-Svinov;11:42', 'Suchdol nad Odrou;12:03'];
$trasa['3365_1'] = ['Suchdol nad Odrou;12:58', 'Ostrava-Svinov;13:19'];
$trasa['3366_1'] = ['Ostrava hl.n.;16:30', 'Suchdol nad Odrou;17:03'];
$trasa['3367_1'] = ['Suchdol nad Odrou;17:13', 'Ostrava-Svinov;17:38'];
$trasa['3368_2'] = ['Ostrava hl.n.;18:31', 'Suchdol nad Odrou;19:03'];
$trasa['3369_1'] = ['Suchdol nad Odrou;20:58', 'Bohumín;21:36'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts641 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


