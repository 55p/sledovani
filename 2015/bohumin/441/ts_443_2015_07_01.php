<?php
$obeh[1] = array('2900_1', '3360_1', '3361_1', '3364_1', '3365_1', '2955_1', '2976_1');
$obeh[2] = array('3400_1', '1605_1', '3380_1', '2853_1', '2854_1', '2855_1', '2856_1', '2857_1', '2858_1', '2859_1', '2860_1', '2861_1', '2862_1', '2865_1', '2866_1', '28909_1', '2913_1', '2921_1', '2924_1', '3360_2', '3361_2', '3364_2', '3365_2', '2913_2');

$omezeni['1605_1'] = 'X';
$omezeni['2853_1'] = 'X';
$omezeni['2854_1'] = 'X';
$omezeni['2855_1'] = 'X';
$omezeni['2856_1'] = 'X';
$omezeni['2857_1'] = 'X';
$omezeni['2858_1'] = 'X';
$omezeni['2859_1'] = 'X';
$omezeni['2860_1'] = 'X';
$omezeni['2861_1'] = 'X';
$omezeni['2862_1'] = 'X';
$omezeni['2865_1'] = 'X';
$omezeni['2866_1'] = 'X';
$omezeni['28909_1'] = 'X';
$omezeni['2900_1'] = 'X';
$omezeni['2913_1'] = 'X';
$omezeni['2913_2'] = '6,T';
$omezeni['2921_1'] = '6,T';
$omezeni['2924_1'] = '6,T';
$omezeni['2955_1'] = 'X';
$omezeni['2976_1'] = 'X';
$omezeni['3360_1'] = 'X';
$omezeni['3360_2'] = '6,T';
$omezeni['3361_1'] = 'X';
$omezeni['3361_2'] = '6,T';
$omezeni['3364_1'] = 'X';
$omezeni['3364_2'] = '6,T';
$omezeni['3365_1'] = 'X';
$omezeni['3365_2'] = '6,T';
$omezeni['3380_1'] = 'X';
$omezeni['3400_1'] = 'X';

$trasa['1605_1'] = array('Opava východ;6:17', 'Ostrava střed;7:03');
$trasa['2853_1'] = array('Ostrava-Svinov;7:51', 'Ostrava-Kunčice;8:03');
$trasa['2854_1'] = array('Ostrava-Kunčice;8:53', 'Ostrava-Svinov;9:05');
$trasa['2855_1'] = array('Ostrava-Svinov;9:51', 'Ostrava-Kunčice;10:03');
$trasa['2856_1'] = array('Ostrava-Kunčice;10:53', 'Ostrava-Svinov;11:05');
$trasa['2857_1'] = array('Ostrava-Svinov;11:51', 'Ostrava-Kunčice;12:03');
$trasa['2858_1'] = array('Ostrava-Kunčice;12:53', 'Ostrava-Svinov;13:05');
$trasa['2859_1'] = array('Ostrava-Svinov;13:51', 'Ostrava-Kunčice;14:03');
$trasa['2860_1'] = array('Ostrava-Kunčice;14:53', 'Ostrava-Svinov;15:05');
$trasa['2861_1'] = array('Ostrava-Svinov;15:51', 'Ostrava-Kunčice;16:03');
$trasa['2862_1'] = array('Ostrava-Kunčice;16:53', 'Ostrava-Svinov;17:05');
$trasa['2865_1'] = array('Ostrava-Svinov;17:51', 'Ostrava-Kunčice;18:03');
$trasa['2866_1'] = array('Ostrava-Kunčice;18:53', 'Ostrava-Svinov;19:05');
$trasa['2900_1'] = array('Čadca;4:32', 'Bohumín;6:05');
$trasa['2913_1'] = array('Bohumín;21:44', 'Čadca;23:08');
$trasa['2913_2'] = array('Bohumín;21:44', 'Čadca;23:08');
$trasa['2921_1'] = array('Český Těšín;5:21', 'Mosty u Jablunkova;5:55');
$trasa['2924_1'] = array('Mosty u Jablunkova;6:01', 'Bohumín;7:15');
$trasa['2955_1'] = array('Bohumín;20:44', 'Návsí;21:46');
$trasa['2976_1'] = array('Návsí;22:08', 'Český Těšín;22:33');
$trasa['3360_1'] = array('Bohumín;7:21', 'Studénka;7:52');
$trasa['3360_2'] = array('Bohumín;7:21', 'Studénka;7:52');
$trasa['3361_1'] = array('Studénka;9:03', 'Bohumín;9:35');
$trasa['3361_2'] = array('Studénka;9:03', 'Bohumín;9:35');
$trasa['3364_1'] = array('Bohumín;11:21', 'Studénka;11:52');
$trasa['3364_2'] = array('Bohumín;11:21', 'Studénka;11:52');
$trasa['3365_1'] = array('Studénka;13:00', 'Bohumín;13:38');
$trasa['3365_2'] = array('Studénka;13:00', 'Bohumín;13:38');
$trasa['3380_1'] = array('Ostrava střed;7:33', 'Ostrava-Svinov;7:46');
$trasa['3400_1'] = array('Český Těšín;4:15', 'Opava východ;5:35');

$trasa['28909_1'] = array('Ostrava-Svinov;19:31', 'Bohumín;19:44');
$trasa['28910_1'] = array('Bohumín;6:28', 'Ostrava-Svinov;6:42');

@$ts443 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '1.7.2015', '31.8.2015 23:59:59')); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>