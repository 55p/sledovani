<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8355_1', '14872_1', '8367_1', '8372_1', '5932_1');
$obeh[2] = array('8345_1', '8358_1', '14869_1', '8373_1');
$obeh[3] = array('8342_1', '8347_1', '8354_1', '8357_1', '8366_1');
$obeh[4] = array('973_1', '974_1');

$omezeni['14869_1'] = 'X';
$omezeni['14872_1'] = 'X';
$omezeni['5932_1'] = 'zX';
$omezeni['8342_1'] = 'X';
$omezeni['8345_1'] = 'X';
$omezeni['8347_1'] = 'X';
$omezeni['8354_1'] = 'X';
$omezeni['8355_1'] = 'X';
$omezeni['8357_1'] = 'X';
$omezeni['8358_1'] = 'X';
$omezeni['8366_1'] = 'X';
$omezeni['8367_1'] = 'X';
$omezeni['8372_1'] = 'X';
$omezeni['8373_1'] = 'X';
$omezeni['973_1'] = 'X';
$omezeni['974_1'] = 'X';

$trasa['14869_1'] = array('Havlíčkův Brod;20:05', 'Jihlava;20:33');
$trasa['14872_1'] = array('Jihlava město;14:25', 'Havlíčkův Brod;15:04');
$trasa['5932_1'] = array('Havlíčkův Brod;22:30', 'Čáslav;23:33');
$trasa['8342_1'] = array('Horní Cerekev;4:36', 'Havlíčkův Brod;5:48');
$trasa['8345_1'] = array('Čáslav;4:38', 'Horní Cerekev;7:17');
$trasa['8347_1'] = array('Havlíčkův Brod;6:47', 'Horní Cerekev;8:25');
$trasa['8354_1'] = array('Horní Cerekev;10:20', 'Havlíčkův Brod;11:51');
$trasa['8355_1'] = array('Havlíčkův Brod;12:05', 'Jihlava město;12:45');
$trasa['8357_1'] = array('Havlíčkův Brod;13:15', 'Počátky-Žirovnice;15:02');
$trasa['8358_1'] = array('Horní Cerekev;12:42', 'Havlíčkův Brod;13:54');
$trasa['8366_1'] = array('Počátky-Žirovnice;15:56', 'Havlíčkův Brod;17:51');
$trasa['8367_1'] = array('Havlíčkův Brod;16:05', 'Horní Cerekev;17:27');
$trasa['8372_1'] = array('Horní Cerekev;18:45', 'Havlíčkův Brod;19:52');
$trasa['8373_1'] = array('Jihlava;20:47', 'Horní Cerekev;21:29');
$trasa['973_1'] = array('Havlíčkův Brod;6:03', 'Brno hl.n.;7:45');
$trasa['974_1'] = array('Brno hl.n.;17:20', 'Havlíčkův Brod;18:56');


@$ts201 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>