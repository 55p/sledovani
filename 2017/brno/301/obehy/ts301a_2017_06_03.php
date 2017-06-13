<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['988_1', '981_1', '976_1', '965_1'];
$obeh[2] = ['975_1', '984_1', '987_1', '970_1', '973_1', '986_1', '983_1', '972_1', '960_1', '979_1', '980_1', '991_1'];
$obeh[3] = ['973_2', '986_2', '983_2', '972_2', '990_1', '11619_1', '977_1', '982_1', '989_1'];
$obeh[4] = ['571_1', '978_1', '963_1', '975_2', '984_2', '987_2', '970_2'];
$obeh[5] = ['990_2', '990_3', '961_1', '962_1', '977_2', '982_2', '989_2', '973_3', '986_3', '983_3', '972_3'];
$obeh[6] = ['960_2', '979_2', '980_2', '991_2', '991_3', '963_2', '574_1', '961_2'];
$obeh[7] = ['962_2', '977_3', '982_3', '989_3', '905_1', '910_1', '911_1', '904_1', '975_3', '984_3', '987_3'];
$obeh[8] = ['574_2', '985_1', '111619_1', '570_1', '577_1'];

$omezeni['111619_1'] = '6';
$omezeni['11619_1'] = '6';
$omezeni['570_1'] = 'T';
$omezeni['571_1'] = 'X';
$omezeni['574_1'] = 'T';
$omezeni['574_2'] = 'X6';
$omezeni['577_1'] = 'T';
$omezeni['904_1'] = '6';
$omezeni['905_1'] = '6';
$omezeni['910_1'] = '6';
$omezeni['911_1'] = '6';
$omezeni['960_1'] = 'T';
$omezeni['960_2'] = 'X6';
$omezeni['961_1'] = 'X';
$omezeni['961_2'] = 'T';
$omezeni['962_1'] = '6';
$omezeni['962_2'] = 'X';
$omezeni['963_1'] = 'XT';
$omezeni['963_2'] = '6';
$omezeni['965_1'] = 'z25';
$omezeni['970_1'] = 'X';
$omezeni['970_2'] = '6';
$omezeni['972_1'] = '6';
$omezeni['972_2'] = 'X';
$omezeni['972_3'] = 'T';
$omezeni['973_1'] = '6';
$omezeni['973_2'] = 'X';
$omezeni['973_3'] = 'T';
$omezeni['975_1'] = 'X';
$omezeni['975_2'] = '6';
$omezeni['975_3'] = 'T';
$omezeni['977_1'] = 'T';
$omezeni['977_2'] = '6';
$omezeni['977_3'] = 'X';
$omezeni['978_1'] = 'XT';
$omezeni['979_1'] = 'T';
$omezeni['979_2'] = 'X6';
$omezeni['980_1'] = 'T';
$omezeni['980_2'] = 'X6';
$omezeni['982_1'] = 'T';
$omezeni['982_2'] = '6';
$omezeni['982_3'] = 'X';
$omezeni['983_1'] = '6';
$omezeni['983_2'] = 'X';
$omezeni['983_3'] = 'T';
$omezeni['984_1'] = 'X';
$omezeni['984_2'] = '6';
$omezeni['984_3'] = 'T';
$omezeni['985_1'] = 'X';
$omezeni['986_1'] = '6';
$omezeni['986_2'] = 'X';
$omezeni['986_3'] = 'T';
$omezeni['987_1'] = 'X';
$omezeni['987_2'] = '6';
$omezeni['987_3'] = 'T';
$omezeni['989_1'] = 'T';
$omezeni['989_2'] = '6';
$omezeni['989_3'] = 'X';
$omezeni['990_1'] = '6';
$omezeni['990_2'] = 'X1';
$omezeni['990_3'] = 'X2345';
$omezeni['991_1'] = 'T';
$omezeni['991_2'] = 'X1234';
$omezeni['991_3'] = 'X5';

$trasa['111619_1'] = ['Praha odstavné n.;14:30','Brno-Maloměřice;20:05'];
$trasa['11619_1'] = ['Praha odstavné n.;14:30','Břeclav;22:12'];

$trasa['570_1'] = ['Brno dolní nádraží;15:03', 'Praha hl.n.;17:42'];
$trasa['571_1'] = ['Praha hl.n.;4:49', 'Brno dolní nádraží;7:25'];
$trasa['574_1'] = ['Břeclav;6:07', 'Praha hl.n.;9:06'];
$trasa['574_2'] = ['Břeclav;6:07', 'Praha hl.n.;9:06'];
$trasa['577_1'] = ['Praha hl.n.;18:19', 'Brno dolní nádraží;20:56'];
$trasa['904_1'] = ['Šumperk;16:08', 'Brno hl.n.;18:42'];
$trasa['905_1'] = ['Brno hl.n.;7:18', 'Šumperk;9:39'];
$trasa['910_1'] = ['Šumperk;10:08', 'Brno hl.n.;12:42'];
$trasa['911_1'] = ['Brno hl.n.;13:18', 'Šumperk;15:39'];
$trasa['960_1'] = ['Havlíčkův Brod;6:00', 'Praha hl.n.;7:51'];
$trasa['960_2'] = ['Jihlava;5:37', 'Praha hl.n.;7:51'];
$trasa['961_1'] = ['Praha hl.n.;17:04', 'Jihlava;19:23'];
$trasa['961_2'] = ['Praha hl.n.;17:04', 'Jihlava;19:23'];
$trasa['962_1'] = ['Havlíčkův Brod;5:00', 'Praha hl.n.;6:51'];
$trasa['962_2'] = ['Havlíčkův Brod;5:00', 'Praha hl.n.;6:51'];
$trasa['963_1'] = ['Praha hl.n.;20:04', 'Havlíčkův Brod;22:00'];
$trasa['963_2'] = ['Praha hl.n.;20:04', 'Havlíčkův Brod;22:00'];
$trasa['965_1'] = ['Praha hl.n.;22:04', 'Havlíčkův Brod;24:00'];
$trasa['970_1'] = ['Brno-Královo Pole;20:31', 'Havlíčkův Brod;21:58'];
$trasa['970_2'] = ['Brno-Královo Pole;20:31', 'Havlíčkův Brod;21:58'];
$trasa['972_1'] = ['Brno-Královo Pole;18:31', 'Praha hl.n.;21:51'];
$trasa['972_2'] = ['Brno-Královo Pole;18:31', 'Praha hl.n.;21:51'];
$trasa['972_3'] = ['Brno-Královo Pole;18:31', 'Praha hl.n.;21:51'];
$trasa['973_1'] = ['Havlíčkův Brod;6:02', 'Brno-Královo Pole;7:32'];
$trasa['973_2'] = ['Havlíčkův Brod;6:02', 'Brno-Královo Pole;7:32'];
$trasa['973_3'] = ['Havlíčkův Brod;6:02', 'Brno-Královo Pole;7:32'];
$trasa['975_1'] = ['Praha hl.n.;6:04', 'Brno-Královo Pole;9:30'];
$trasa['975_2'] = ['Praha hl.n.;6:04', 'Brno-Královo Pole;9:30'];
$trasa['975_3'] = ['Havlíčkův Brod;8:02', 'Brno-Královo Pole;9:30'];
$trasa['976_1'] = ['Brno-Královo Pole;16:31', 'Praha hl.n.;19:51'];
$trasa['977_1'] = ['Praha hl.n.;8:04', 'Brno-Královo Pole;11:30'];
$trasa['977_2'] = ['Praha hl.n.;8:04', 'Brno-Královo Pole;11:30'];
$trasa['977_3'] = ['Praha hl.n.;8:04', 'Brno-Královo Pole;11:30'];
$trasa['978_1'] = ['Brno-Královo Pole;15:31', 'Praha hl.n.;18:51'];
$trasa['979_1'] = ['Praha hl.n.;10:04', 'Brno-Královo Pole;13:30'];
$trasa['979_2'] = ['Praha hl.n.;10:04', 'Brno-Královo Pole;13:30'];
$trasa['980_1'] = ['Brno-Královo Pole;14:31', 'Praha hl.n.;17:51'];
$trasa['980_2'] = ['Brno-Královo Pole;14:31', 'Praha hl.n.;17:51'];
$trasa['981_1'] = ['Praha hl.n.;12:04', 'Brno-Královo Pole;15:30'];
$trasa['982_1'] = ['Brno-Královo Pole;12:31', 'Praha hl.n.;15:51'];
$trasa['982_2'] = ['Brno-Královo Pole;12:31', 'Praha hl.n.;15:51'];
$trasa['982_3'] = ['Brno-Královo Pole;12:31', 'Praha hl.n.;15:51'];
$trasa['983_1'] = ['Praha hl.n.;14:04', 'Brno-Královo Pole;17:30'];
$trasa['983_2'] = ['Praha hl.n.;14:04', 'Brno-Královo Pole;17:30'];
$trasa['983_3'] = ['Praha hl.n.;14:04', 'Brno-Královo Pole;17:30'];
$trasa['984_1'] = ['Brno-Královo Pole;10:31', 'Praha hl.n.;13:51'];
$trasa['984_2'] = ['Brno-Královo Pole;10:31', 'Praha hl.n.;13:51'];
$trasa['984_3'] = ['Brno-Královo Pole;10:31', 'Praha hl.n.;13:51'];
$trasa['985_1'] = ['Praha hl.n.;15:04', 'Brno-Královo Pole;18:30'];
$trasa['986_1'] = ['Brno-Královo Pole;8:31', 'Praha hl.n.;11:51'];
$trasa['986_2'] = ['Brno-Královo Pole;8:31', 'Praha hl.n.;11:51'];
$trasa['986_3'] = ['Brno-Královo Pole;8:31', 'Praha hl.n.;11:51'];
$trasa['987_1'] = ['Praha hl.n.;16:04', 'Brno-Královo Pole;19:30'];
$trasa['987_2'] = ['Praha hl.n.;16:04', 'Brno-Královo Pole;19:30'];
$trasa['987_3'] = ['Praha hl.n.;16:04', 'Brno-Královo Pole;19:30'];
$trasa['988_1'] = ['Brno-Královo Pole;6:31', 'Praha hl.n.;9:51'];
$trasa['989_1'] = ['Praha hl.n.;18:04', 'Brno-Královo Pole;21:32'];
$trasa['989_2'] = ['Praha hl.n.;18:04', 'Brno-Královo Pole;21:32'];
$trasa['989_3'] = ['Praha hl.n.;18:04', 'Brno-Královo Pole;21:32'];
$trasa['990_1'] = ['Havlíčkův Brod;7:00', 'Praha hl.n.;8:52'];
$trasa['990_2'] = ['Brno-Královo Pole;5:31', 'Praha hl.n.;8:52'];
$trasa['990_3'] = ['Žďár nad Sázavou;6:34', 'Praha hl.n.;8:52'];
$trasa['991_1'] = ['Praha hl.n.;19:04', 'Havlíčkův Brod;21:00'];
$trasa['991_2'] = ['Praha hl.n.;19:04', 'Havlíčkův Brod;21:00'];
$trasa['991_3'] = ['Praha hl.n.;19:04', 'Brno-Královo Pole;22:27'];


$typ['11619_1'] = 'Sv';
$typ['111619_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


