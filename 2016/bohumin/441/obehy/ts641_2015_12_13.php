<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('3052_1', '3053_1', '102924_1', '3362_1', '3361_1', '3384_1', '3383_1', '3366_1', '3365_1', '3340_1', '3341_1', '3058_1', '3059_1', '3344_1', '3345_1', '3346_1', '3347_1', '3347_2', '3368_1', '3367_1');
$obeh[2] = array('3050_1', '3051_1', '3054_1', '3055_1', '3382_1', '3381_1', '3364_1', '3363_1', '3056_1', '3057_1', '3342_1', '3343_1', '3060_1', '3061_1', '3061_2', '3061_3', '3348_1', '3349_1', '3062_1', '3063_1', '3064_1', '3065_1');

$omezeni['102924_1'] = 'T';
$omezeni['3050_1'] = '11';
$omezeni['3051_1'] = '11';
$omezeni['3052_1'] = 'X,6';
$omezeni['3053_1'] = 'X,6';
$omezeni['3061_1'] = '10';
$omezeni['3061_2'] = '2412,3112';
$omezeni['3061_3'] = '10';
$omezeni['3062_1'] = '10';
$omezeni['3063_1'] = 'X,2512,0101,2803,0507,0607,2809,2810,1711,-3112';
$omezeni['3064_1'] = 'X,2512,0101,2803,0507,0607,2809,2810,1711,-3112';
$omezeni['3065_1'] = '10';
$omezeni['3347_1'] = '2412,3112';
$omezeni['3347_2'] = '10';
$omezeni['3348_1'] = '10';
$omezeni['3349_1'] = '10';
$omezeni['3367_1'] = '10';
$omezeni['3368_1'] = '10';


$trasa['102924_1'] = array('Bohumín;7:17', 'Ostrava hl.n.;7:24');
$trasa['3050_1'] = array('Bohumín;3:37', 'Mošnov,Ostrava Airport;4:16');
$trasa['3051_1'] = array('Mošnov,Ostrava Airport;4:37', 'Bohumín;5:22');
$trasa['3052_1'] = array('Bohumín;4:43', 'Mošnov,Ostrava Airport;5:29');
$trasa['3053_1'] = array('Mošnov,Ostrava Airport;6:32', 'Ostrava hl.n.;7:04');
$trasa['3054_1'] = array('Bohumín;6:20', 'Mošnov,Ostrava Airport;7:13');
$trasa['3055_1'] = array('Mošnov,Ostrava Airport;7:48', 'Ostrava hl.n.;8:22');
$trasa['3056_1'] = array('Bohumín;12:43', 'Mošnov,Ostrava Airport;13:31');
$trasa['3057_1'] = array('Mošnov,Ostrava Airport;14:32', 'Ostrava hl.n.;15:02');
$trasa['3058_1'] = array('Ostrava hl.n.;14:50', 'Mošnov,Ostrava Airport;15:26');
$trasa['3059_1'] = array('Mošnov,Ostrava Airport;15:32', 'Ostrava hl.n.;16:06');
$trasa['3060_1'] = array('Ostrava hl.n.;16:50', 'Mošnov,Ostrava Airport;17:26');
$trasa['3061_1'] = array('Mošnov,Ostrava Airport;18:20', 'Ostrava hl.n.;18:52');
$trasa['3061_2'] = array('Mošnov,Ostrava Airport;18:20', 'Bohumín;19:00');
$trasa['3061_3'] = array('Mošnov,Ostrava Airport;18:20', 'Ostrava hl.n.;18:52');
$trasa['3062_1'] = array('Bohumín;20:48', 'Mošnov,Ostrava Airport;21:31');
$trasa['3063_1'] = array('Mošnov,Ostrava Airport;22:32', 'Ostrava-Svinov;22:55');
$trasa['3064_1'] = array('Ostrava-Svinov;23:01', 'Mošnov,Ostrava Airport;23:25');
$trasa['3065_1'] = array('Mošnov,Ostrava Airport;23:30', 'Bohumín;0:08');
$trasa['3340_1'] = array('Ostrava hl.n.;13:30', 'Studénka;13:54');
$trasa['3341_1'] = array('Studénka;14:12', 'Ostrava hl.n.;14:32');
$trasa['3342_1'] = array('Ostrava hl.n.;15:30', 'Studénka;15:54');
$trasa['3343_1'] = array('Studénka;16:00', 'Ostrava hl.n.;16:21');
$trasa['3344_1'] = array('Ostrava hl.n.;16:27', 'Studénka;16:58');
$trasa['3345_1'] = array('Studénka;17:02', 'Ostrava hl.n.;17:23');
$trasa['3346_1'] = array('Ostrava hl.n.;17:30', 'Studénka;17:54');
$trasa['3347_1'] = array('Studénka;18:02', 'Bohumín;18:30');
$trasa['3347_2'] = array('Studénka;18:02', 'Ostrava hl.n.;18:22');
$trasa['3348_1'] = array('Ostrava hl.n.;19:30', 'Studénka;19:54');
$trasa['3349_1'] = array('Studénka;20:02', 'Bohumín;20:30');
$trasa['3361_1'] = array('Suchdol nad Odrou;9:53', 'Ostrava hl.n.;10:22');
$trasa['3362_1'] = array('Ostrava hl.n.;7:27', 'Suchdol nad Odrou;8:13');
$trasa['3363_1'] = array('Suchdol nad Odrou;11:53', 'Bohumín;12:30');
$trasa['3364_1'] = array('Ostrava hl.n.;9:30', 'Suchdol nad Odrou;10:03');
$trasa['3365_1'] = array('Suchdol nad Odrou;12:53', 'Ostrava hl.n.;13:23');
$trasa['3366_1'] = array('Ostrava hl.n.;11:30', 'Suchdol nad Odrou;12:03');
$trasa['3367_1'] = array('Suchdol nad Odrou;21:03', 'Bohumín;21:40');
$trasa['3368_1'] = array('Ostrava hl.n.;18:27', 'Suchdol nad Odrou;19:03');
$trasa['3381_1'] = array('Ostrava-Svinov;9:16', 'Ostrava hl.n.;9:23');
$trasa['3382_1'] = array('Ostrava hl.n.;8:27', 'Ostrava-Svinov;8:34');
$trasa['3383_1'] = array('Ostrava-Svinov;11:16', 'Ostrava hl.n.;11:23');
$trasa['3384_1'] = array('Ostrava hl.n.;10:27', 'Ostrava-Svinov;10:34');
$trasa['3504_1'] = array('Moravský Beroun;20:05', 'Olomouc hl.n.;21:00');
$trasa['3505_1'] = array('Olomouc hl.n.;8:55', 'Krnov;10:55');


@$ts641 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>