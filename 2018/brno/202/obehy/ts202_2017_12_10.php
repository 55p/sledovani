<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4641_1', '4614_1', '4927_1', '4926_1', '4619_1', '4624_1', '4631_1', '4938_1'];
$obeh[2] = ['4610_1', '4613_1', '4622_1', '4621_1', '4626_1'];
$obeh[3] = ['4921_1', '4618_1', '4929_1', '4928_1', '4625_1', '4628_1', '4917_1', '4666_1', '4658_1', '4611_1', '4939_1', '4667_1'];
$obeh[4] = ['4660_1', '4900_1', '8746_1', '8355_1', '14872_1', '8367_1', '8372_1', '5932_1'];
$obeh[5] = ['8345_1', '8358_1', '8755_1', '4605_1', '4630_1', '4637_1', '4637_2', '4641_2', '4662_1', '4612_1', '4613_2', '4622_2', '4623_1', '4630_2', '4637_3'];
$obeh[6] = ['4612_2', '4925_1', '4924_1', '4933_1', '4932_1', '4627_1', '4644_1', '970_1', '4617_1', '4934_1', '4629_1', '4632_1', '4939_2', '4600_1', '4905_1', '4910_1', '4911_1', '4916_1', '4917_2'];
$obeh[7] = ['973_1', '4050_1', '4051_1', '970_2', '4641_3', '4618_2', '4618_3', '4602_1', '4605_2', '4632_2', '4603_1', '4620_1', '4617_2', '4604_1', '4633_1', '4938_2'];
$obeh[8] = ['4021_1', '4042_1', '4938_3', '4908_1', '4909_1', '4914_1', '4915_1', '4936_1'];
$obeh[9] = ['4611_2', '4616_1', '4931_1', '4930_1', '4623_2', '4604_2', '4915_2', '4615_1', '4602_2', '8766_1', '14869_1', '8373_1'];
$obeh[10] = ['4920_1', '4923_1', '4922_1', '4615_2', '4602_3', '8766_2', '14869_2', '8373_2', '4600_2', '4905_2', '4910_2', '4911_2', '4916_2'];
$obeh[11] = ['8342_1', '8347_1', '8354_1', '8357_1', '8366_1', '4908_2', '4909_2', '4914_2', '4915_3', '4936_2'];
$obeh[12] = ['8743_1', '4903_1', '4908_3', '4909_3', '4914_3', '4601_1', '4906_1', '4907_1', '4912_1', '4913_1', '4918_1'];
$obeh[13] = ['4601_2', '4642_1', '4601_3', '4906_2', '4907_2', '4912_2', '4913_2', '4918_2', '4903_2', '4908_4'];

$omezeni['14869_1'] = 'X5';
$omezeni['14869_2'] = 'X1234';
$omezeni['14872_1'] = 'X';
$omezeni['4021_1'] = 'X';
$omezeni['4042_1'] = 'X';
$omezeni['4050_1'] = 'X';
$omezeni['4051_1'] = 'X';
$omezeni['4600_1'] = '6';
$omezeni['4600_2'] = 'X5';
$omezeni['4601_1'] = 'T';
$omezeni['4601_2'] = 'X';
$omezeni['4601_3'] = '6';
$omezeni['4602_1'] = '6';
$omezeni['4602_2'] = 'X5';
$omezeni['4602_3'] = 'X1234';
$omezeni['4603_1'] = 'T';
$omezeni['4604_1'] = 'T';
$omezeni['4604_2'] = 'X1234';
$omezeni['4605_1'] = 'X';
$omezeni['4605_2'] = '6';
$omezeni['4610_1'] = 'X';
$omezeni['4611_1'] = 'T';
$omezeni['4611_2'] = 'X';
$omezeni['4612_1'] = 'T';
$omezeni['4612_2'] = 'X';
$omezeni['4613_1'] = 'X';
$omezeni['4613_2'] = 'T';
$omezeni['4614_1'] = 'X';
$omezeni['4615_1'] = 'X5';
$omezeni['4615_2'] = 'X1234';
$omezeni['4616_1'] = 'X';
$omezeni['4617_1'] = 'X5';
$omezeni['4617_2'] = 'T';
$omezeni['4618_1'] = 'X';
$omezeni['4618_2'] = '6';
$omezeni['4618_3'] = '6';
$omezeni['4619_1'] = 'X';
$omezeni['4620_1'] = 'T';
$omezeni['4621_1'] = 'X';
$omezeni['4622_1'] = 'X';
$omezeni['4622_2'] = 'T';
$omezeni['4623_1'] = 'T';
$omezeni['4623_2'] = 'X1234';
$omezeni['4624_1'] = 'X';
$omezeni['4625_1'] = 'X';
$omezeni['4626_1'] = 'X';
$omezeni['4627_1'] = 'X1234';
$omezeni['4628_1'] = 'X';
$omezeni['4629_1'] = 'X5';
$omezeni['4630_1'] = 'X';
$omezeni['4630_2'] = 'T';
$omezeni['4631_1'] = 'X';
$omezeni['4632_1'] = 'X5';
$omezeni['4632_2'] = '6';
$omezeni['4633_1'] = 'T';
$omezeni['4637_1'] = 'X1234';
$omezeni['4637_2'] = 'X5';
$omezeni['4637_3'] = 'T';
$omezeni['4641_1'] = 'X';
$omezeni['4641_2'] = 'T';
$omezeni['4641_3'] = '6';
$omezeni['4642_1'] = 'X';
$omezeni['4644_1'] = 'X1234';
$omezeni['4658_1'] = 'X5';
$omezeni['4660_1'] = 'X1';
$omezeni['4662_1'] = 'T';
$omezeni['4666_1'] = 'X5';
$omezeni['4667_1'] = 'T';
$omezeni['4900_1'] = 'X';
$omezeni['4903_1'] = 'X';
$omezeni['4903_2'] = 'T';
$omezeni['4905_1'] = '6';
$omezeni['4905_2'] = 'X5';
$omezeni['4906_1'] = 'T';
$omezeni['4906_2'] = '6';
$omezeni['4907_1'] = 'T';
$omezeni['4907_2'] = '6';
$omezeni['4908_1'] = 'T';
$omezeni['4908_2'] = '6';
$omezeni['4908_3'] = 'X';
$omezeni['4908_4'] = 'T';
$omezeni['4909_1'] = 'T';
$omezeni['4909_2'] = '6';
$omezeni['4909_3'] = 'X';
$omezeni['4910_1'] = '6';
$omezeni['4910_2'] = 'X5';
$omezeni['4911_1'] = '6';
$omezeni['4911_2'] = 'X5';
$omezeni['4912_1'] = 'T';
$omezeni['4912_2'] = '6';
$omezeni['4913_1'] = 'T';
$omezeni['4913_2'] = '6';
$omezeni['4914_1'] = 'T';
$omezeni['4914_2'] = '6';
$omezeni['4914_3'] = 'X';
$omezeni['4915_1'] = 'T';
$omezeni['4915_2'] = 'X1234';
$omezeni['4915_3'] = '6';
$omezeni['4916_1'] = '6';
$omezeni['4916_2'] = 'X5';
$omezeni['4917_1'] = 'X';
$omezeni['4917_2'] = '6';
$omezeni['4918_1'] = 'T';
$omezeni['4918_2'] = '6';
$omezeni['4920_1'] = 'X1234';
$omezeni['4921_1'] = 'X';
$omezeni['4922_1'] = 'X1234';
$omezeni['4923_1'] = 'X1234';
$omezeni['4924_1'] = 'X';
$omezeni['4925_1'] = 'X';
$omezeni['4926_1'] = 'X';
$omezeni['4927_1'] = 'X';
$omezeni['4928_1'] = 'X';
$omezeni['4929_1'] = 'X';
$omezeni['4930_1'] = 'X1234';
$omezeni['4931_1'] = 'X1234';
$omezeni['4932_1'] = 'X1234';
$omezeni['4933_1'] = 'X1234';
$omezeni['4934_1'] = 'X5';
$omezeni['4936_1'] = 'T';
$omezeni['4936_2'] = '6';
$omezeni['4938_1'] = '6';
$omezeni['4938_2'] = 'T';
$omezeni['4938_3'] = 'X1234';
$omezeni['4939_1'] = 'T';
$omezeni['4939_2'] = 'X5';
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
$omezeni['8373_1'] = 'X5';
$omezeni['8373_2'] = 'X1234';
$omezeni['8743_1'] = 'X';
$omezeni['8746_1'] = 'X';
$omezeni['8755_1'] = 'X';
$omezeni['8766_1'] = 'X5';
$omezeni['8766_2'] = 'X1234';
$omezeni['970_1'] = 'X1234';
$omezeni['970_2'] = 'X5';
$omezeni['973_1'] = 'X';

$trasa['4938_3'] = ['Brno hl.n.;23:01','Tišnov;23:37'];

$trasa['14869_1'] = ['Havlíčkův Brod;20:05', 'Jihlava;20:33'];
$trasa['14869_2'] = ['Havlíčkův Brod;20:05', 'Jihlava;20:33'];
$trasa['14872_1'] = ['Jihlava město;14:25', 'Havlíčkův Brod;15:04'];
$trasa['4021_1'] = ['Brno hl.n.;3:06', 'Křenovice horní n.;3:35'];
$trasa['4042_1'] = ['Křenovice horní n.;4:21', 'Rájec-Jestřebí;5:42'];
$trasa['4050_1'] = ['Brno hl.n.;14:44', 'Blansko;15:10'];
$trasa['4051_1'] = ['Blansko;15:42', 'Brno-Židenice;16:05'];
$trasa['4600_1'] = ['Břeclav;4:43', 'Žďár nad Sázavou;7:23'];
$trasa['4600_2'] = ['Vranovice;5:17', 'Žďár nad Sázavou;7:23'];
$trasa['4601_1'] = ['Tišnov;5:30', 'Vranovice;6:42'];
$trasa['4601_2'] = ['Žďár nad Sázavou;4:36', 'Břeclav;7:20'];
$trasa['4601_3'] = ['Žďár nad Sázavou;4:36', 'Vranovice;6:42'];
$trasa['4602_1'] = ['Břeclav;13:41', 'Tišnov;15:29'];
$trasa['4602_2'] = ['Břeclav;13:41', 'Žďár nad Sázavou;16:23'];
$trasa['4602_3'] = ['Břeclav;13:41', 'Žďár nad Sázavou;16:23'];
$trasa['4603_1'] = ['Tišnov;6:30', 'Břeclav;8:15'];
$trasa['4604_1'] = ['Břeclav;15:41', 'Tišnov;17:29'];
$trasa['4604_2'] = ['Vranovice;16:17', 'Křižanov;18:01'];
$trasa['4605_1'] = ['Žďár nad Sázavou;15:36', 'Vranovice;17:42'];
$trasa['4605_2'] = ['Tišnov;16:30', 'Břeclav;18:15'];
$trasa['4610_1'] = ['Břeclav;5:15', 'Tišnov;6:59'];
$trasa['4611_1'] = ['Tišnov;4:30', 'Brno hl.n.;5:07'];
$trasa['4611_2'] = ['Tišnov;4:30', 'Břeclav;6:20'];
$trasa['4612_1'] = ['Šakvice;6:06', 'Tišnov;7:29'];
$trasa['4612_2'] = ['Zaječí;5:56', 'Tišnov;7:29'];
$trasa['4613_1'] = ['Tišnov;8:30', 'Břeclav;10:15'];
$trasa['4613_2'] = ['Tišnov;8:30', 'Břeclav;10:15'];
$trasa['4614_1'] = ['Břeclav;6:12', 'Tišnov;7:59'];
$trasa['4615_1'] = ['Tišnov;10:30', 'Břeclav;12:15'];
$trasa['4615_2'] = ['Tišnov;10:30', 'Břeclav;12:15'];
$trasa['4616_1'] = ['Břeclav;7:10', 'Tišnov;8:59'];
$trasa['4617_1'] = ['Tišnov;12:30', 'Šakvice;13:52'];
$trasa['4617_2'] = ['Tišnov;12:30', 'Břeclav;14:15'];
$trasa['4618_1'] = ['Šakvice;8:06', 'Tišnov;9:29'];
$trasa['4618_2'] = ['Břeclav;7:40', 'Tišnov;9:29'];
$trasa['4618_3'] = ['Břeclav;7:40', 'Tišnov;9:29'];
$trasa['4619_1'] = ['Tišnov;13:00', 'Břeclav;14:45'];
$trasa['4620_1'] = ['Břeclav;9:41', 'Tišnov;11:29'];
$trasa['4621_1'] = ['Tišnov;14:00', 'Břeclav;15:43'];
$trasa['4622_1'] = ['Břeclav;11:41', 'Tišnov;13:29'];
$trasa['4622_2'] = ['Břeclav;11:41', 'Tišnov;13:29'];
$trasa['4623_1'] = ['Tišnov;14:30', 'Břeclav;16:15'];
$trasa['4623_2'] = ['Tišnov;14:30', 'Vranovice;15:42'];
$trasa['4624_1'] = ['Břeclav;15:10', 'Tišnov;16:59'];
$trasa['4625_1'] = ['Tišnov;15:00', 'Břeclav;16:43'];
$trasa['4626_1'] = ['Břeclav;16:10', 'Tišnov;18:01'];
$trasa['4627_1'] = ['Tišnov;16:00', 'Břeclav;17:42'];
$trasa['4628_1'] = ['Břeclav;17:10', 'Tišnov;18:59'];
$trasa['4629_1'] = ['Tišnov;17:00', 'Břeclav;18:45'];
$trasa['4630_1'] = ['Vranovice;18:17', 'Tišnov;19:29'];
$trasa['4630_2'] = ['Břeclav;17:41', 'Tišnov;19:29'];
$trasa['4631_1'] = ['Tišnov;18:00', 'Břeclav;19:45'];
$trasa['4632_1'] = ['Břeclav;19:41', 'Tišnov;21:29'];
$trasa['4632_2'] = ['Břeclav;19:41', 'Tišnov;21:29'];
$trasa['4633_1'] = ['Tišnov;18:30', 'Brno hl.n.;19:07'];
$trasa['4641_1'] = ['Brno hl.n.;4:15', 'Břeclav;5:20'];
$trasa['4641_2'] = ['Vranovice;4:45', 'Břeclav;5:20'];
$trasa['4641_3'] = ['Vranovice;4:45', 'Břeclav;5:20'];
$trasa['4642_1'] = ['Břeclav;8:10', 'Brno hl.n.;9:19'];
$trasa['4644_1'] = ['Břeclav;18:10', 'Brno hl.n.;19:19'];
$trasa['4658_1'] = ['Vranovice;23:24', 'Brno hl.n.;23:52'];
$trasa['4660_1'] = ['Břeclav;3:32', 'Hustopeče u Brna;4:21'];
$trasa['4662_1'] = ['Břeclav;5:44', 'Šakvice;6:05'];
$trasa['4666_1'] = ['Břeclav;22:38', 'Vranovice;23:15'];
$trasa['4667_1'] = ['Vranovice;23:45', 'Břeclav;0:21'];
$trasa['4900_1'] = ['Šakvice;4:09', 'Žďár nad Sázavou;6:23'];
$trasa['4903_1'] = ['Žďár nad Sázavou;6:36', 'Vranovice;8:43'];
$trasa['4903_2'] = ['Křižanov;6:58', 'Vranovice;8:43'];
$trasa['4905_1'] = ['Žďár nad Sázavou;8:36', 'Vranovice;10:43'];
$trasa['4905_2'] = ['Žďár nad Sázavou;8:36', 'Vranovice;10:43'];
$trasa['4906_1'] = ['Vranovice;7:17', 'Žďár nad Sázavou;9:23'];
$trasa['4906_2'] = ['Vranovice;7:17', 'Žďár nad Sázavou;9:23'];
$trasa['4907_1'] = ['Žďár nad Sázavou;10:36', 'Vranovice;12:43'];
$trasa['4907_2'] = ['Žďár nad Sázavou;10:36', 'Vranovice;12:43'];
$trasa['4908_1'] = ['Vranovice;9:17', 'Brno hl.n.;9:49'];
$trasa['4908_2'] = ['Vranovice;9:17', 'Brno hl.n.;9:49'];
$trasa['4908_3'] = ['Vranovice;9:17', 'Žďár nad Sázavou;11:23'];
$trasa['4908_4'] = ['Vranovice;9:17', 'Brno hl.n.;9:49'];
$trasa['4909_1'] = ['Žďár nad Sázavou;12:36', 'Vranovice;14:43'];
$trasa['4909_2'] = ['Žďár nad Sázavou;12:36', 'Vranovice;14:43'];
$trasa['4909_3'] = ['Žďár nad Sázavou;12:36', 'Vranovice;14:43'];
$trasa['4910_1'] = ['Vranovice;11:17', 'Žďár nad Sázavou;13:23'];
$trasa['4910_2'] = ['Vranovice;11:17', 'Žďár nad Sázavou;13:23'];
$trasa['4911_1'] = ['Žďár nad Sázavou;14:36', 'Vranovice;16:43'];
$trasa['4911_2'] = ['Žďár nad Sázavou;14:36', 'Vranovice;16:43'];
$trasa['4912_1'] = ['Vranovice;13:17', 'Žďár nad Sázavou;15:23'];
$trasa['4912_2'] = ['Vranovice;13:17', 'Žďár nad Sázavou;15:23'];
$trasa['4913_1'] = ['Žďár nad Sázavou;16:36', 'Vranovice;18:43'];
$trasa['4913_2'] = ['Žďár nad Sázavou;16:36', 'Vranovice;18:43'];
$trasa['4914_1'] = ['Vranovice;15:17', 'Žďár nad Sázavou;17:23'];
$trasa['4914_2'] = ['Vranovice;15:17', 'Žďár nad Sázavou;17:23'];
$trasa['4914_3'] = ['Vranovice;15:17', 'Žďár nad Sázavou;17:23'];
$trasa['4915_1'] = ['Žďár nad Sázavou;18:36', 'Vranovice;20:43'];
$trasa['4915_2'] = ['Křižanov;18:58', 'Vranovice;20:43'];
$trasa['4915_3'] = ['Žďár nad Sázavou;18:36', 'Vranovice;20:43'];
$trasa['4916_1'] = ['Vranovice;17:17', 'Křižanov;19:01'];
$trasa['4916_2'] = ['Vranovice;17:17', 'Křižanov;19:01'];
$trasa['4917_1'] = ['Tišnov;21:30', 'Šakvice;22:54'];
$trasa['4917_2'] = ['Křižanov;20:58', 'Vranovice;22:42'];
$trasa['4918_1'] = ['Vranovice;19:17', 'Žďár nad Sázavou;21:23'];
$trasa['4918_2'] = ['Vranovice;19:17', 'Křižanov;21:01'];
$trasa['4920_1'] = ['Vranovice;4:50', 'Tišnov;6:00'];
$trasa['4921_1'] = ['Tišnov;6:00', 'Šakvice;7:20'];
$trasa['4922_1'] = ['Modřice;8:57', 'Tišnov;9:59'];
$trasa['4923_1'] = ['Tišnov;7:00', 'Modřice;7:48'];
$trasa['4924_1'] = ['Vranovice;9:50', 'Tišnov;10:59'];
$trasa['4925_1'] = ['Tišnov;8:00', 'Vranovice;9:09'];
$trasa['4926_1'] = ['Vranovice;10:50', 'Tišnov;11:59'];
$trasa['4927_1'] = ['Tišnov;9:00', 'Vranovice;10:12'];
$trasa['4928_1'] = ['Vranovice;11:47', 'Tišnov;12:59'];
$trasa['4929_1'] = ['Tišnov;10:00', 'Vranovice;11:12'];
$trasa['4930_1'] = ['Vranovice;12:51', 'Tišnov;13:59'];
$trasa['4931_1'] = ['Tišnov;11:00', 'Vranovice;12:10'];
$trasa['4932_1'] = ['Vranovice;13:47', 'Tišnov;14:59'];
$trasa['4933_1'] = ['Tišnov;12:00', 'Vranovice;13:10'];
$trasa['4934_1'] = ['Šakvice;14:37', 'Tišnov;16:01'];
$trasa['4936_1'] = ['Vranovice;21:17', 'Tišnov;22:29'];
$trasa['4936_2'] = ['Vranovice;21:17', 'Tišnov;22:29'];
$trasa['4938_1'] = ['Brno hl.n.;23:01', 'Tišnov;23:37'];
$trasa['4938_2'] = ['Brno hl.n.;23:01', 'Tišnov;23:37'];
$trasa['4939_1'] = ['Brno hl.n.;23:10', 'Vranovice;23:40'];
$trasa['4939_2'] = ['Tišnov;22:30', 'Vranovice;23:40'];
$trasa['5932_1'] = ['Havlíčkův Brod;22:30', 'Čáslav;23:37'];
$trasa['8342_1'] = ['Horní Cerekev;4:36', 'Havlíčkův Brod;5:47'];
$trasa['8345_1'] = ['Čáslav;4:43', 'Horní Cerekev;7:16'];
$trasa['8347_1'] = ['Havlíčkův Brod;6:47', 'Horní Cerekev;8:25'];
$trasa['8354_1'] = ['Horní Cerekev;10:20', 'Havlíčkův Brod;11:50'];
$trasa['8355_1'] = ['Havlíčkův Brod;12:05', 'Jihlava město;12:41'];
$trasa['8357_1'] = ['Havlíčkův Brod;13:13', 'Počátky-Žirovnice;15:02'];
$trasa['8358_1'] = ['Horní Cerekev;12:42', 'Havlíčkův Brod;13:51'];
$trasa['8366_1'] = ['Počátky-Žirovnice;15:56', 'Havlíčkův Brod;17:50'];
$trasa['8367_1'] = ['Havlíčkův Brod;16:05', 'Horní Cerekev;17:27'];
$trasa['8372_1'] = ['Horní Cerekev;18:45', 'Havlíčkův Brod;19:52'];
$trasa['8373_1'] = ['Jihlava;20:47', 'Horní Cerekev;21:29'];
$trasa['8373_2'] = ['Jihlava;20:47', 'Horní Cerekev;21:29'];
$trasa['8743_1'] = ['Havlíčkův Brod;5:50', 'Žďár nad Sázavou;6:24'];
$trasa['8746_1'] = ['Žďár nad Sázavou;6:50', 'Havlíčkův Brod;7:25'];
$trasa['8755_1'] = ['Havlíčkův Brod;14:25', 'Žďár nad Sázavou;15:01'];
$trasa['8766_1'] = ['Žďár nad Sázavou;16:50', 'Havlíčkův Brod;17:25'];
$trasa['8766_2'] = ['Žďár nad Sázavou;16:50', 'Havlíčkův Brod;17:25'];
$trasa['970_1'] = ['Brno hl.n.;20:20', 'Havlíčkův Brod;21:58'];
$trasa['970_2'] = ['Brno hl.n.;20:20', 'Havlíčkův Brod;21:58'];
$trasa['973_1'] = ['Havlíčkův Brod;6:02', 'Brno hl.n.;7:40'];
$trasa['4637_1'] = ['Tišnov;20:30', 'Zaječí;22:01'];
$trasa['4637_2'] = ['Tišnov;20:30', 'Břeclav;22:23'];
$trasa['4637_3'] = ['Tišnov;20:30', 'Zaječí;22:01'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts202 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


