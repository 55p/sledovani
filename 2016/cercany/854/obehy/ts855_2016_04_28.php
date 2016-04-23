<?php 
$zacatekPlatnosti = '28.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('19101_1', '19104_1', '19143_1', '119108_1', '19125_1');
$obeh[2] = array('19102_1', '19103_1', '19108_1', '19127_1');
$obeh[3] = array('19100_1', '19141_1', '19106_1');

$omezeni['119108_1'] = '2804';
$omezeni['19100_1'] = '2804';
$omezeni['19101_1'] = '2804';
$omezeni['19102_1'] = '2804';
$omezeni['19103_1'] = '2804';
$omezeni['19104_1'] = '2804';
$omezeni['19106_1'] = '2804';
$omezeni['19108_1'] = '2804';
$omezeni['19125_1'] = '2705';
$omezeni['19127_1'] = '2705';
$omezeni['19141_1'] = '2804';
$omezeni['19143_1'] = '2804';

$trasa['119108_1'] = array('Vlašim;8:02','Benešov u Prahy;;8:41');
$trasa['19100_1'] = array('Trhový Štěpánov;3:48','Benešov u Prahy;4:45');
$trasa['19101_1'] = array('Benešov u Prahy;4:12','Trhový Štěpánov;5:33');
$trasa['19102_1'] = array('Trhový Štěpánov;4:44','Benešov u Prahy;5:41');
$trasa['19103_1'] = array('Benešov u Prahy;6:08','Trhový Štěpánov;7:06');
$trasa['19104_1'] = array('Trhový Štěpánov;5:44','Benešov u Prahy;6:41');
$trasa['19106_1'] = array('Vlašim;7:02','Benešov u Prahy;7:41');
$trasa['19108_1'] = array('Trhový Štěpánov;7:27','Benešov u Prahy;8:41');
$trasa['19125_1'] = array('Benešov u Prahy;21:18','Trhový Štěpánov;22:15');
$trasa['19127_1'] = array('Benešov u Prahy;22:18','Trhový Štěpánov;23:15');
$trasa['19141_1'] = array('Benešov u Prahy;5:08','Vlašim;5:47');
$trasa['19143_1'] = array('Benešov u Prahy;7:08','Vlašim;7:47');



$poznamkaObehu['119108_1'] = array('př', 'přípřež');


@$ts855 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>