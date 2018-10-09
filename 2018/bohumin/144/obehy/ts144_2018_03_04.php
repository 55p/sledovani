<?php 
$zacatekPlatnosti = '4.3.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['343_1', '344_1', '347_1', '3439_1', '3934_1'];
$obeh[2] = ['3404_1', '3900_1', '3905_1', '346_1', '345_1', '3433_1', '3433_2'];
$obeh[3] = ['3955_1', '3440_1', '3406_1', '3413_1', '3416_1', '342_1', '640_1', '3869_1'];
$obeh[4] = ['3842_1', '641_1', '100243_1'];
$obeh[5] = ['7810_1', '3470_1', '3435_1', '3454_1', '3456_1', '3451_1', '100242_1', '1300_1', '1306_1', '1307_1', '1301_1'];

$omezeni['640_1'] = 'X';
$omezeni['641_1'] = 'vX';
$omezeni['1300_1'] = '1,5';
$omezeni['1301_1'] = '1,5';
$omezeni['1306_1'] = '3';
$omezeni['1307_1'] = '4';
$omezeni['3404_1'] = '25';
$omezeni['3406_1'] = 'X';
$omezeni['3433_1'] = 'XT';
$omezeni['3433_2'] = '6';
$omezeni['3435_1'] = '6';
$omezeni['3439_1'] = '6';
$omezeni['3440_1'] = '7';
$omezeni['3451_1'] = '7';
$omezeni['3454_1'] = '6';
$omezeni['3456_1'] = '6';
$omezeni['3470_1'] = '6';
$omezeni['3842_1'] = 'X2345';
$omezeni['3869_1'] = 'X1234';
$omezeni['3900_1'] = 'X';
$omezeni['3905_1'] = 'X';
$omezeni['3934_1'] = '5, 2903, 3004, 0705, 0407, 2808, 3110, -3003';
$omezeni['3955_1'] = '6,3003,0105,0805,0507,2908,0101,-3103';
$omezeni['7810_1'] = '6';
$omezeni['100242_1'] = '7,2612,0101,0204,0105,0805,-2412,-3112,-0104,-2904,-0605';
$omezeni['100243_1'] = '5,2903,0407,2709,-3003,-0607,-2809';

$trasa['342_1'] = ['Žilina;15:28','Ostrava-Svinov;17:19'];
$trasa['343_1'] = ['Ostrava-Svinov;8:42','Žilina;10:32'];
$trasa['344_1'] = ['Žilina;11:28','Ostrava-Svinov;13:19'];
$trasa['345_1'] = ['Ostrava-Svinov;14:42','Žilina;16:32'];
$trasa['346_1'] = ['Žilina;7:28','Ostrava-Svinov;9:19'];
$trasa['347_1'] = ['Ostrava-Svinov;16:42','Žilina;18:32'];
$trasa['640_1'] = ['Bohumín;20:01','Olomouc hl.n.;21:16'];
$trasa['641_1'] = ['Olomouc hl.n.;6:47','Bohumín;8:02'];
$trasa['1300_1'] = ['Bohumín;0:01','Nymburk hl.n.;7:47'];
$trasa['1301_1'] = ['Nymburk hl.n.;18:08','Bohumín;2:05'];
$trasa['1306_1'] = ['Bohumín;5:46','Praha jih;16:29'];
$trasa['1307_1'] = ['Praha jih;3:25','Bohumín;13:10'];
$trasa['3404_1'] = ['Liptovský Mikuláš;5:03','Žilina;6:33'];
$trasa['3406_1'] = ['Liptovský Mikuláš;5:49','Žilina;7:29'];
$trasa['3413_1'] = ['Žilina;8:43','Liptovský Mikuláš;10:13'];
$trasa['3416_1'] = ['Liptovský Mikuláš;11:48','Žilina;13:17'];
$trasa['3433_1'] = ['Žilina;17:25','Liptovský Mikuláš;19:05'];
$trasa['3433_2'] = ['Žilina;17:25','Ružomberok;18:39'];
$trasa['3435_1'] = ['Žilina;18:43','Liptovský Mikuláš;20:13'];
$trasa['3439_1'] = ['Žilina;21:50','Liptovský Mikuláš;23:25'];
$trasa['3440_1'] = ['Ružomberok;4:11','Žilina;5:14'];
$trasa['3451_1'] = ['Kraľovany;4:23','Košice;8:44'];
$trasa['3454_1'] = ['Liptovský Mikuláš;21:05','Rožumberok;21:30'];
$trasa['3456_1'] = ['Rožumberok;22:33','Kraľovany;22:55'];
$trasa['3470_1'] = ['Poprad-Tatry;14:48','Žilina;17:17'];
$trasa['3842_1'] = ['Přerov;5:05','Olomouc hl.n.;5:24'];
$trasa['3869_1'] = ['Olomouc hl.n.;23:07','Přerov;23:26'];
$trasa['3900_1'] = ['Žilina;4:48','Čadca;5:26'];
$trasa['3905_1'] = ['Čadca;6:04','Žilina;6:42'];
$trasa['3934_1'] = ['Žilina;20:48','Čadca;21:26'];
$trasa['3955_1'] = ['Čadca;6:35','Žilina;7:15'];
$trasa['7810_1'] = ['Košice;9:27','Poprad-Tatry;11:18'];
$trasa['100242_1'] = ['Košice;11:07','Ostrava-Svinov;15:50'];
$trasa['100243_1'] = ['Ostrava-Svinov;16:33','Košice;21:07'];
//sem patri stazene trasy




$typ['1300_1'] = 'Sv';
$typ['1306_1'] = 'Sv';
$typ['1307_1'] = 'Sv';
$typ['1301_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts144 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


