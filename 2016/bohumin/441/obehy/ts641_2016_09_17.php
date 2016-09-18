<?php 
$zacatekPlatnosti = '17.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('3052_1', '3053_1', '2924_1', '3362_1', '3361_1', '3384_1', '3383_1', '3366_1', '3365_1', '3340_1', '3341_1', '3344_1', '3345_1', '3346_1', '3347_1', '3368_1', '3367_1');
$obeh[2] = array('3066_1', '3067_1', '3050_1', '3051_1', '28912_1', '2853_1', '2852_1', '2855_1', '2854_1', '2841_1', '2856_1', '2843_1', '2858_1', '2845_1', '2860_1', '2857_1', '2862_1', '28907_1', '3348_1', '3349_1', '3062_1', '3063_1', '3064_1', '3065_1');

$omezeni['-1'] = '25';

$trasa['2841_1'] = array('Ostrava-Svinov;11:52', 'Havířov;12:18');
$trasa['2843_1'] = array('Ostrava-Svinov;13:52', 'Havířov;14:18');
$trasa['2845_1'] = array('Ostrava-Svinov;15:52', 'Havířov;16:18');
$trasa['2852_1'] = array('Havířov;8:42', 'Ostrava-Svinov;9:07');
$trasa['2853_1'] = array('Ostrava-Svinov;7:52', 'Havířov;8:18');
$trasa['2854_1'] = array('Havířov;10:42', 'Ostrava-Svinov;11:07');
$trasa['2855_1'] = array('Ostrava-Svinov;9:52', 'Havířov;10:18');
$trasa['2856_1'] = array('Havířov;12:42', 'Ostrava-Svinov;13:07');
$trasa['2857_1'] = array('Ostrava-Svinov;17:52', 'Havířov;18:18');
$trasa['2858_1'] = array('Havířov;14:42', 'Ostrava-Svinov;15:07');
$trasa['2860_1'] = array('Havířov;16:42', 'Ostrava-Svinov;17:07');
$trasa['2862_1'] = array('Havířov;18:42', 'Ostrava-Svinov;19:07');
$trasa['2924_1'] = array('Mosty u Jablunkova;6:02', 'Bohumín;7:15');
$trasa['3050_1'] = array('Bohumín;3:55', 'Mošnov,Ostrava Airport;4:32');
$trasa['3051_1'] = array('Mošnov,Ostrava Airport;4:37', 'Bohumín;5:22');
$trasa['3052_1'] = array('Bohumín;4:43', 'Mošnov,Ostrava Airport;5:29');
$trasa['3053_1'] = array('Mošnov,Ostrava Airport;6:32', 'Ostrava hl.n.;7:04');
$trasa['3062_1'] = array('Bohumín;20:48', 'Mošnov,Ostrava Airport;21:31');
$trasa['3063_1'] = array('Mošnov,Ostrava Airport;22:32', 'Ostrava-Svinov;22:55');
$trasa['3064_1'] = array('Ostrava-Svinov;23:01', 'Mošnov,Ostrava Airport;23:25');
$trasa['3065_1'] = array('Mošnov,Ostrava Airport;23:30', 'Bohumín;0:08');
$trasa['3066_1'] = array('Bohumín;2:28', 'Mošnov,Ostrava Airport;3:05');
$trasa['3067_1'] = array('Mošnov,Ostrava Airport;3:10', 'Bohumín;3:46');
$trasa['3340_1'] = array('Ostrava hl.n.;13:30', 'Studénka;13:54');
$trasa['3341_1'] = array('Studénka;14:12', 'Ostrava hl.n.;14:32');
$trasa['3344_1'] = array('Ostrava hl.n.;16:27', 'Studénka;16:58');
$trasa['3345_1'] = array('Studénka;17:02', 'Ostrava hl.n.;17:23');
$trasa['3346_1'] = array('Ostrava hl.n.;17:30', 'Studénka;17:54');
$trasa['3347_1'] = array('Studénka;18:02', 'Ostrava hl.n.;18:22');
$trasa['3348_1'] = array('Ostrava hl.n.;19:30', 'Studénka;19:54');
$trasa['3349_1'] = array('Studénka;20:02', 'Bohumín;20:30');
$trasa['3361_1'] = array('Suchdol nad Odrou;9:53', 'Ostrava hl.n.;10:22');
$trasa['3362_1'] = array('Ostrava hl.n.;7:27', 'Suchdol nad Odrou;8:13');
$trasa['3365_1'] = array('Suchdol nad Odrou;12:53', 'Ostrava hl.n.;13:23');
$trasa['3366_1'] = array('Ostrava hl.n.;11:30', 'Suchdol nad Odrou;12:03');
$trasa['3367_1'] = array('Suchdol nad Odrou;21:03', 'Bohumín;21:40');
$trasa['3368_1'] = array('Ostrava hl.n.;18:27', 'Suchdol nad Odrou;19:03');
$trasa['3383_1'] = array('Ostrava-Svinov;11:16', 'Ostrava hl.n.;11:23');
$trasa['3384_1'] = array('Ostrava hl.n.;10:27', 'Ostrava-Svinov;10:34');

@$ts641 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>