<?php 
$zacatekPlatnosti = '17.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['574_1', '985_1', '974_1', '5918_1', '5941_1', '983_1', '976_1', '965_1', '961_1'];
$obeh[2] = ['5940_1', '5903_1', '5906_1', '5909_1', '5914_1', '5915_1', '5913_1', '5918_2', '5941_2', '5904_1', '5905_1', '5910_1', '5959_1', '5958_1', '5915_2'];
$obeh[3] = ['5904_2', '5879_1', '5904_3', '5905_2', '5910_2', '5911_1', '5959_2', '5958_2', '5915_3', '5940_2', '5903_2', '5906_2', '5909_2', '5916_1', '5963_1'];
$obeh[4] = ['5931_1', '5902_1', '5953_1', '5952_1', '5907_1', '5912_1', '5909_3', '5916_2', '5913_2', '5918_3', '5941_3'];
$obeh[5] = ['971_1', '990_1', '961_2'];
$obeh[6] = ['960_1', '979_1', '982_1', '989_1', '970_1', '11494_1'];
$obeh[7] = ['973_1', '988_1', '981_1', '980_1', '991_1', '11496_1', '963_1'];
$obeh[8] = ['10981_1', '978_1', '963_2'];
$obeh[9] = ['962_1', '977_1', '984_1', '987_1', '972_1', '975_1', '986_1', '983_2', '976_2'];
$obeh[10] = ['977_2', '984_2', '987_2', '972_2', '975_2', '986_2', '983_3', '976_3', '965_2', '111617_1'];
$obeh[11] = ['571_1', '990_2', '11617_1', '570_1', '577_1'];

$omezeni['10981_1'] = 'XT';
$omezeni['111617_1'] = '6';
$omezeni['11494_1'] = 'T';
$omezeni['11496_1'] = 'X5';
$omezeni['11617_1'] = '6';
$omezeni['570_1'] = 'T';
$omezeni['571_1'] = 'X';
$omezeni['577_1'] = 'T';
$omezeni['5879_1'] = 'X';
$omezeni['5902_1'] = 'X';
$omezeni['5903_1'] = 'X6';
$omezeni['5903_2'] = 'T';
$omezeni['5904_1'] = 'T';
$omezeni['5904_2'] = 'X';
$omezeni['5904_3'] = '6';
$omezeni['5905_1'] = 'T';
$omezeni['5905_2'] = 'X6';
$omezeni['5906_1'] = 'X6';
$omezeni['5906_2'] = 'T';
$omezeni['5907_1'] = 'X';
$omezeni['5909_1'] = 'X';
$omezeni['5909_2'] = 'T';
$omezeni['5909_3'] = '6';
$omezeni['5910_1'] = 'T';
$omezeni['5910_2'] = 'X6';
$omezeni['5911_1'] = 'X';
$omezeni['5912_1'] = 'X';
$omezeni['5913_1'] = '6';
$omezeni['5913_2'] = 'XT';
$omezeni['5914_1'] = 'X';
$omezeni['5915_1'] = 'X';
$omezeni['5915_2'] = 'T';
$omezeni['5915_3'] = '6';
$omezeni['5916_1'] = 'XT';
$omezeni['5916_2'] = '6';
$omezeni['5918_1'] = 'X';
$omezeni['5918_2'] = '6';
$omezeni['5918_3'] = 'T';
$omezeni['5931_1'] = 'X';
$omezeni['5940_1'] = 'X6';
$omezeni['5940_2'] = 'T';
$omezeni['5941_1'] = 'X';
$omezeni['5941_2'] = '6';
$omezeni['5941_3'] = 'T';
$omezeni['5952_1'] = 'X';
$omezeni['5953_1'] = 'X';
$omezeni['5958_1'] = 'T';
$omezeni['5958_2'] = '6';
$omezeni['5959_1'] = 'T';
$omezeni['5959_2'] = '6';
$omezeni['5963_1'] = 'zX';
$omezeni['960_1'] = 'X6';
$omezeni['961_1'] = 'T';
$omezeni['961_2'] = 'X';
$omezeni['962_1'] = 'X6';
$omezeni['963_1'] = '6';
$omezeni['963_2'] = 'XT';
$omezeni['965_1'] = '6';
$omezeni['965_2'] = 'X5';
$omezeni['970_1'] = 'X6';
$omezeni['971_1'] = 'X';
$omezeni['972_1'] = 'X6';
$omezeni['972_2'] = 'T';
$omezeni['974_1'] = 'X';
$omezeni['975_1'] = 'T';
$omezeni['975_2'] = 'X6';
$omezeni['976_1'] = '6';
$omezeni['976_2'] = 'T';
$omezeni['976_3'] = 'X';
$omezeni['977_1'] = 'X6';
$omezeni['977_2'] = 'T';
$omezeni['978_1'] = 'XT';
$omezeni['983_1'] = '6';
$omezeni['983_2'] = 'T';
$omezeni['983_3'] = 'X';
$omezeni['984_1'] = 'X6';
$omezeni['984_2'] = 'T';
$omezeni['985_1'] = 'X';
$omezeni['986_1'] = 'T';
$omezeni['986_2'] = 'X6';
$omezeni['987_1'] = 'X6';
$omezeni['987_2'] = 'T';
$omezeni['990_1'] = 'X';
$omezeni['990_2'] = '6';
$omezeni['991_1'] = 'X5';

$trasa['570_1'] = ['Brno dolní nádraží;15:03', 'Praha hl.n.;17:42'];
$trasa['571_1'] = ['Praha hl.n.;4:49', 'Brno dolní nádraží;7:25'];
$trasa['574_1'] = ['Břeclav;6:07', 'Praha hl.n.;9:06'];
$trasa['577_1'] = ['Praha hl.n.;18:19', 'Brno dolní nádraží;20:56'];
$trasa['5879_1'] = ['Nymburk hl.n.;8:01', 'Kolín;8:28'];
$trasa['5902_1'] = ['Havlíčkův Brod;4:53', 'Kolín;6:16'];
$trasa['5903_2'] = ['Kolín;6:05', 'Havlíčkův Brod;7:29'];
$trasa['5904_1'] = ['Žďár nad Sázavou;5:17', 'Kolín;7:16'];
$trasa['5904_2'] = ['Žďár nad Sázavou;5:17', 'Nymburk hl.n.;7:56'];
$trasa['5904_3'] = ['Žďár nad Sázavou;5:17', 'Kolín;7:16'];
$trasa['5905_1'] = ['Kolín;10:05', 'Havlíčkův Brod;11:34'];
$trasa['5905_2'] = ['Kolín;10:05', 'Havlíčkův Brod;11:34'];
$trasa['5906_2'] = ['Havlíčkův Brod;8:51', 'Kolín;10:14'];
$trasa['5907_1'] = ['Kolín;11:44', 'Havlíčkův Brod;13:05'];
$trasa['5909_2'] = ['Kolín;13:42', 'Havlíčkův Brod;15:05'];
$trasa['5909_3'] = ['Kolín;13:42', 'Havlíčkův Brod;15:05'];
$trasa['5910_1'] = ['Havlíčkův Brod;13:22', 'Kolín;14:48'];
$trasa['5910_2'] = ['Havlíčkův Brod;13:22', 'Kolín;14:48'];
$trasa['5911_1'] = ['Kolín;15:05', 'Havlíčkův Brod;16:27'];
$trasa['5912_1'] = ['Havlíčkův Brod;14:28', 'Kolín;15:54'];
$trasa['5913_2'] = ['Kolín;16:14', 'Havlíčkův Brod;17:38'];
$trasa['5914_1'] = ['Havlíčkův Brod;15:19', 'Kolín;16:40'];
$trasa['5915_1'] = ['Kolín;18:14', 'Žďár nad Sázavou;20:45'];
$trasa['5915_2'] = ['Kolín;18:14', 'Žďár nad Sázavou;20:45'];
$trasa['5915_3'] = ['Kolín;18:14', 'Žďár nad Sázavou;20:45'];
$trasa['5916_1'] = ['Havlíčkův Brod;17:15', 'Kolín;18:36'];
$trasa['5916_2'] = ['Havlíčkův Brod;17:15', 'Kolín;18:36'];
$trasa['5918_1'] = ['Havlíčkův Brod;19:19', 'Kolín;20:47'];
$trasa['5918_3'] = ['Havlíčkův Brod;19:19', 'Kolín;20:47'];
$trasa['5931_1'] = ['Čáslav;3:37', 'Havlíčkův Brod;4:37'];
$trasa['5940_2'] = ['Světlá nad Sázavou;4:14', 'Kolín;5:16'];
$trasa['5941_1'] = ['Kolín;21:54', 'Světlá nad Sázavou;22:57'];
$trasa['5941_3'] = ['Kolín;21:54', 'Světlá nad Sázavou;22:57'];
$trasa['5952_1'] = ['Čáslav;8:10', 'Kolín;8:31'];
$trasa['5953_1'] = ['Kolín;7:05', 'Čáslav;7:26'];
$trasa['5958_1'] = ['Čáslav;15:58', 'Kolín;16:19'];
$trasa['5958_2'] = ['Čáslav;15:58', 'Kolín;16:19'];
$trasa['5959_1'] = ['Kolín;15:15', 'Čáslav;15:36'];
$trasa['5959_2'] = ['Kolín;15:15', 'Čáslav;15:36'];
$trasa['5963_1'] = ['Kolín;19:37', 'Čáslav;19:58'];
$trasa['960_1'] = ['Jihlava;5:37', 'Praha hl.n.;7:51'];
$trasa['961_1'] = ['Praha hl.n.;17:04', 'Jihlava;19:23'];
$trasa['961_2'] = ['Praha hl.n.;17:04', 'Jihlava;19:23'];
$trasa['962_1'] = ['Havlíčkův Brod;5:00', 'Praha hl.n.;6:51'];
$trasa['963_1'] = ['Praha hl.n.;20:04', 'Havlíčkův Brod;22:00'];
$trasa['963_2'] = ['Praha hl.n.;20:04', 'Havlíčkův Brod;22:00'];
$trasa['965_1'] = ['Praha hl.n.;22:04', 'Havlíčkův Brod;24:00'];
$trasa['965_2'] = ['Praha hl.n.;22:04', 'Havlíčkův Brod;24:00'];
$trasa['990_1'] = ['Žďár nad Sázavou;6:34', 'Praha hl.n.;8:52'];
$trasa['990_2'] = ['Havlíčkův Brod;7:00', 'Praha hl.n.;8:52'];

$trasa['10981_1'] = ['Havlíčkův Brod;15:02','Křižanov;15:45'];
$trasa['111617_1'] = ['Praha jih;14:28','Brno-Maloměřice;18:21'];
$trasa['11494_1'] = ['Křižanov;21:17','Havlíčkův Brod;21:58'];
$trasa['11496_1'] = ['Křižanov;22:00','Havlíčkův Brod;22:40'];
$trasa['11617_1'] = ['Praha jih;14:28','Břeclav;20:31'];
$trasa['5903_1'] = ['Kolín;6:05','Havlíčkův Brod;7:29'];
$trasa['5906_1'] = ['Havlíčkův Brod;8:51','Kolín;10:14'];
$trasa['5909_1'] = ['Kolín;13:42','Havlíčkův Brod;15:05'];
$trasa['5913_1'] = ['Kolín;16:21','Havlíčkův Brod;17:43'];
$trasa['5918_2'] = ['Havlíčkův Brod;19:19','Kolín;20:47'];
$trasa['5940_1'] = ['Světlá nad Sázavou;4:14','Kolín;5:16'];
$trasa['5941_2'] = ['Kolín;21:54','Světlá nad Sázavou;22:57'];
$trasa['970_1'] = ['Křižanov;21:17','Havlíčkův Brod;21:58'];
$trasa['971_1'] = ['Havlíčkův Brod;5:02','Žďár nad Sázavou;5:28'];
$trasa['972_1'] = ['Křižanov;19:17','Praha hl.n.;21:51'];
$trasa['972_2'] = ['Křižanov;19:17','Praha hl.n.;21:51'];
$trasa['973_1'] = ['Havlíčkův Brod;6:02','Křižanov;6:44'];
$trasa['974_1'] = ['Křižanov;18:17','Havlíčkův Brod;18:58'];
$trasa['975_1'] = ['Havlíčkův Brod;8:02','Křižanov;8:44'];
$trasa['975_2'] = ['Praha hl.n.;6:04','Křižanov;8:44'];
$trasa['976_1'] = ['Křižanov;17:17','Praha hl.n.;19:51'];
$trasa['976_2'] = ['Křižanov;17:17','Praha hl.n.;19:51'];
$trasa['976_3'] = ['Křižanov;17:17','Praha hl.n.;19:51'];
$trasa['977_1'] = ['Praha hl.n.;8:04','Křižanov;10:44'];
$trasa['977_2'] = ['Praha hl.n.;8:04','Křižanov;10:44'];
$trasa['978_1'] = ['Křižanov;16:17','Praha hl.n.;18:51'];
$trasa['979_1'] = ['Praha hl.n.;10:04','Křižanov;12:44'];
$trasa['980_1'] = ['Křižanov;15:17','Praha hl.n.;17:51'];
$trasa['981_1'] = ['Praha hl.n.;10:02','Křižanov;14:44'];
$trasa['982_1'] = ['Křižanov;13:17','Praha hl.n.;15:51'];
$trasa['983_1'] = ['Praha hl.n.;14:04','Křižanov;16:44'];
$trasa['983_2'] = ['Praha hl.n.;14:04','Křižanov;16:44'];
$trasa['983_3'] = ['Praha hl.n.;14:04','Křižanov;16:44'];
$trasa['984_1'] = ['Křižanov;11:17','Praha hl.n.;13:51'];
$trasa['984_2'] = ['Křižanov;11:17','Praha hl.n.;13:51'];
$trasa['985_1'] = ['Praha hl.n.;15:04','Křižanov;17:44'];
$trasa['986_1'] = ['Křižanov;9:17','Praha hl.n.;11:51'];
$trasa['986_2'] = ['Křižanov;9:17','Praha hl.n.;11:51'];
$trasa['987_1'] = ['Praha hl.n.;16:04','Křižanov;18:44'];
$trasa['987_2'] = ['Praha hl.n.;16:04','Křižanov;18:44'];
$trasa['988_1'] = ['Křižanov;7:17','Praha hl.n.;9:51'];
$trasa['989_1'] = ['Praha hl.n.;18:04','Křižanov;20:44'];
$trasa['991_1'] = ['Praha hl.n.;19:04','Křižanov;21:44'];


$poznamkaObehu['111617_1'] = ['př', 'přípřež'];

$typ['11494_1'] = 'Sv';
$typ['11496_1'] = 'Sv';
$typ['10981_1'] = 'Sv';

$poznamkaObehu['10981_1'] = ['','Sv 100981'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


