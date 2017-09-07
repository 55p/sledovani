<?php 
$zacatekPlatnosti = '11.9.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4640_1', '4972_1', '4979_1', '4980_1', '4635_1', '4612_1', '4633_1'];
$obeh[2] = ['4201_1', '4230_1', '4233_1', '4214_1', '4217_1', '4220_1', '4223_1', '4205_1', '4208_1', '4211_1', '4218_1', '4221_1', '4234_1'];
$obeh[3] = ['4200_1', '4200_2', '4203_1', '4206_1', '4209_1', '4212_1', '4215_1', '4232_1', '4201_2'];
$obeh[4] = ['4231_1', '4253_1', '4254_1', '4207_1', '4213_1', '4218_2', '4221_2', '4215_2', '4220_2', '4223_2', '3870_1', '3869_1'];
$obeh[5] = ['4202_1', '4205_2', '4208_2', '4211_2', '4216_1', '4202_2', '4203_2', '4206_2', '4209_2', '4214_2', '4219_1', '4666_1', '4658_1'];

$omezeni['3869_1'] = '6';
$omezeni['4200_1'] = 'X1';
$omezeni['4200_2'] = 'X2345';
$omezeni['4201_1'] = 'X';
$omezeni['4201_2'] = '6';
$omezeni['4202_1'] = 'X';
$omezeni['4202_2'] = '6';
$omezeni['4203_1'] = 'X';
$omezeni['4203_2'] = '6';
$omezeni['4205_1'] = '25';
$omezeni['4205_2'] = 'X';
$omezeni['4206_1'] = 'X';
$omezeni['4206_2'] = '25';
$omezeni['4208_1'] = '25';
$omezeni['4208_2'] = 'X';
$omezeni['4209_1'] = 'X';
$omezeni['4209_2'] = '25';
$omezeni['4211_1'] = '25';
$omezeni['4211_2'] = 'X';
$omezeni['4212_1'] = 'X';
$omezeni['4213_1'] = 'X';
$omezeni['4214_1'] = 'X';
$omezeni['4214_2'] = '25';
$omezeni['4215_1'] = 'X';
$omezeni['4215_2'] = '25';
$omezeni['4216_1'] = 'X';
$omezeni['4217_1'] = 'X';
$omezeni['4218_1'] = '25';
$omezeni['4218_2'] = 'X';
$omezeni['4220_1'] = 'X';
$omezeni['4220_2'] = '25';
$omezeni['4221_1'] = '25';
$omezeni['4221_2'] = 'X';
$omezeni['4223_1'] = 'X';
$omezeni['4223_2'] = '25';
$omezeni['4230_1'] = 'X';
$omezeni['4232_1'] = 'X';
$omezeni['4233_1'] = 'X';
$omezeni['4253_1'] = 'X';
$omezeni['4254_1'] = 'X';
$omezeni['4612_1'] = '6';
$omezeni['4633_1'] = '25';
$omezeni['4635_1'] = 'X';
$omezeni['4640_1'] = 'X';
$omezeni['4972_1'] = 'X';
$omezeni['4979_1'] = 'X';
$omezeni['4980_1'] = 'X';
$omezeni['4666_1'] = $omezeni['4658_1'] = 6;

$poznamkaObehu['4979_1'] = ['pk', 'postrk'];
$poznamkaObehu['4635_1'] = ['pk', 'postrk'];
$poznamkaObehu['4633_1'] = ['pk', 'postrk'];
$poznamkaObehu['4230_1'] = ['pk', 'postrk'];
$poznamkaObehu['4214_1'] = ['pk', 'postrk'];
$poznamkaObehu['4220_1'] = ['pk', 'postrk'];
$poznamkaObehu['4208_1'] = ['pk', 'postrk'];
$poznamkaObehu['4218_1'] = ['pk', 'postrk'];
$poznamkaObehu['4234_1'] = ['pk', 'postrk'];
$poznamkaObehu['4200_1'] = ['pk', 'postrk'];
$poznamkaObehu['4200_2'] = ['pk', 'postrk'];
$poznamkaObehu['4206_1'] = ['pk', 'postrk'];
$poznamkaObehu['4212_1'] = ['pk', 'postrk'];
$poznamkaObehu['4232_1'] = ['pk', 'postrk'];
$poznamkaObehu['4254_1'] = ['pk', 'postrk'];
$poznamkaObehu['4218_2'] = ['pk', 'postrk'];
$poznamkaObehu['4220_2'] = ['pk', 'postrk'];
$poznamkaObehu['3869_1'] = ['pk', 'postrk'];
$poznamkaObehu['4202_1'] = ['pk', 'postrk'];
$poznamkaObehu['4208_2'] = ['pk', 'postrk'];
$poznamkaObehu['4216_1'] = ['pk', 'postrk'];
$poznamkaObehu['4202_2'] = ['pk', 'postrk'];
$poznamkaObehu['4206_2'] = ['pk', 'postrk'];
$poznamkaObehu['4214_2'] = ['pk', 'postrk'];

$trasa['3869_1'] = ['Olomouc hl.n.;23:07', 'Přerov;23:26'];
$trasa['3870_1'] = ['Přerov;22:38', 'Olomouc hl.n.;22:57'];
$trasa['4200_1'] = ['Přerov;4:00', 'Břeclav;5:22'];
$trasa['4200_2'] = ['Staré Město u Uherského Hradiště;4:32', 'Břeclav;5:22'];
$trasa['4201_1'] = ['Břeclav;4:38', 'Přerov;6:19'];
$trasa['4201_2'] = ['Staré Město u Uherského Hradiště;5:31', 'Přerov;6:19'];
$trasa['4202_1'] = ['Olomouc hl.n.;4:24', 'Břeclav;6:22'];
$trasa['4202_2'] = ['Olomouc hl.n.;4:24', 'Staré Město u Uherského Hradiště;5:30'];
$trasa['4203_1'] = ['Břeclav;5:35', 'Přerov;7:14'];
$trasa['4203_2'] = ['Staré Město u Uherského Hradiště;6:31', 'Přerov;7:14'];
$trasa['4205_1'] = ['Břeclav;6:35', 'Přerov;8:22'];
$trasa['4205_2'] = ['Břeclav;6:35', 'Přerov;8:22'];
$trasa['4206_1'] = ['Přerov;7:35', 'Břeclav;9:22'];
$trasa['4206_2'] = ['Přerov;7:35', 'Břeclav;9:22'];
$trasa['4207_1'] = ['Břeclav;8:35', 'Přerov;10:17'];
$trasa['4208_1'] = ['Přerov;9:40', 'Břeclav;11:22'];
$trasa['4208_2'] = ['Přerov;9:40', 'Břeclav;11:22'];
$trasa['4209_1'] = ['Břeclav;10:35', 'Přerov;12:19'];
$trasa['4209_2'] = ['Břeclav;10:35', 'Přerov;12:19'];
$trasa['4211_1'] = ['Břeclav;12:35', 'Přerov;14:19'];
$trasa['4211_2'] = ['Břeclav;12:35', 'Přerov;14:19'];
$trasa['4212_1'] = ['Přerov;12:43', 'Břeclav;14:22'];
$trasa['4213_1'] = ['Břeclav;13:35', 'Přerov;15:14'];
$trasa['4214_1'] = ['Přerov;13:40', 'Břeclav;15:22'];
$trasa['4214_2'] = ['Přerov;13:40', 'Břeclav;15:22'];
$trasa['4215_1'] = ['Břeclav;14:35', 'Přerov;16:22'];
$trasa['4215_2'] = ['Břeclav;14:35', 'Přerov;16:22'];
$trasa['4216_1'] = ['Přerov;14:43', 'Břeclav;16:22'];
$trasa['4217_1'] = ['Břeclav;15:35', 'Přerov;17:14'];
$trasa['4218_1'] = ['Přerov;15:40', 'Břeclav;17:23'];
$trasa['4218_2'] = ['Přerov;15:40', 'Břeclav;17:23'];
$trasa['4219_1'] = ['Břeclav;16:35', 'Přerov;18:19'];
$trasa['4220_1'] = ['Přerov;17:35', 'Břeclav;19:26'];
$trasa['4220_2'] = ['Přerov;17:35', 'Břeclav;19:26'];
$trasa['4221_1'] = ['Břeclav;18:35', 'Přerov;20:17'];
$trasa['4221_2'] = ['Břeclav;18:35', 'Přerov;20:17'];
$trasa['4223_1'] = ['Břeclav;20:35', 'Přerov;22:35'];
$trasa['4223_2'] = ['Břeclav;20:35', 'Přerov;22:35'];
$trasa['4230_1'] = ['Přerov;6:43', 'Staré Město u Uherského Hradiště;7:29'];
$trasa['4231_1'] = ['Staré Město u Uherského Hradiště;4:31', 'Přerov;5:14'];
$trasa['4232_1'] = ['Přerov;16:43', 'Staré Město u Uherského Hradiště;17:28'];
$trasa['4233_1'] = ['Staré Město u Uherského Hradiště;12:31', 'Přerov;13:17'];
$trasa['4234_1'] = ['Přerov;22:43', 'Staré Město u Uherského Hradiště;23:25'];
$trasa['4253_1'] = ['Břeclav;7:35', 'Hodonín;7:52'];
$trasa['4254_1'] = ['Hodonín;8:04', 'Břeclav;8:22'];
$trasa['4612_1'] = ['Brno hl.n.;6:53', 'Tišnov;7:32'];
$trasa['4633_1'] = ['Tišnov;18:28', 'Brno hl.n.;19:07'];
$trasa['4635_1'] = ['Tišnov;18:58', 'Břeclav;20:43'];
$trasa['4640_1'] = ['Břeclav;4:35', 'Brno hl.n.;5:32'];
$trasa['4972_1'] = ['Brno hl.n.;14:35', 'Tišnov;15:16'];
$trasa['4979_1'] = ['Tišnov;15:44', 'Brno hl.n.;16:23'];
$trasa['4980_1'] = ['Brno hl.n.;16:35', 'Tišnov;17:16'];

$trasa['4658_1'] = ['Vranovice;23:25', 'Brno hl.n.;23:53'];
$trasa['4666_1'] = ['Břeclav;22:38', 'Vranovice;23:15'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts305 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


