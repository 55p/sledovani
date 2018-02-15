<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3500_1', '3501_1', '13409_1', '13408_1', '13413_1', '13412_1', '13417_1', '13416_1', '3468_1'];
$obeh[2] = ['3570_1', '3571_1', '3572_1', '3573_1', '3574_1', '3575_1', '3576_1', '3577_1', '3578_1', '3579_1', '103469_1', '3472_1', '3580_1', '3585_1', '3584_1', '3587_1'];
$obeh[3] = ['103500_1', '3465_1', '3570_2', '3571_2', '3465_2', '3466_1', '3467_1', '103522_1', '101664_1', '3583_1', '101664_2', '101667_1', '3472_2', '3473_1', '3476_1'];
$obeh[4] = ['101134_1', '3503_1', '103513_1', '3574_2', '3575_2', '3576_2', '3579_2', '3580_2', '3581_1', '3582_1', '1665_1', '201664_3', '3585_2', '3584_2', '3587_2'];

$omezeni['101134_1'] = 'X';
$omezeni['101664_1'] = 'X';
$omezeni['101664_2'] = 'T';
$omezeni['201664_3'] = '7';
$omezeni['103469_1'] = 'X';
$omezeni['103500_1'] = 'X';
$omezeni['103522_1'] = 'X';
$omezeni['13408_1'] = 'X';
$omezeni['13409_1'] = 'X';
$omezeni['13412_1'] = 'X';
$omezeni['13413_1'] = 'X';
$omezeni['13416_1'] = 'X';
$omezeni['13417_1'] = 'X';
$omezeni['1665_1'] = '7';
$omezeni['101667_1'] = 'T';
$omezeni['3465_1'] = 'X';
$omezeni['3465_2'] = '6';
$omezeni['3466_1'] = 'X';
$omezeni['3467_1'] = 'X';
$omezeni['3468_1'] = 'X';
$omezeni['3472_1'] = 'X';
$omezeni['3472_2'] = '6';
$omezeni['3473_1'] = 'T';
$omezeni['3476_1'] = 'T';
$omezeni['3500_1'] = 'X';
$omezeni['3501_1'] = 'X';
$omezeni['3503_1'] = 'X';
$omezeni['103513'] = 'X';
$omezeni['3570_1'] = 'X';
$omezeni['3570_2'] = '6';
$omezeni['3571_1'] = 'X';
$omezeni['3571_2'] = '6';
$omezeni['3572_1'] = 'X';
$omezeni['3573_1'] = 'X';
$omezeni['3574_1'] = 'X6';
$omezeni['3574_2'] = '7';
$omezeni['3575_1'] = 'X6';
$omezeni['3575_2'] = '7';
$omezeni['3576_1'] = 'X6';
$omezeni['3576_2'] = '7';
$omezeni['3577_1'] = '0805,0206,0906,1606,2306,3006';
$omezeni['3578_1'] = '0805,0206,0906,1606,2306,3006';
$omezeni['3579_1'] = 'X6';
$omezeni['3579_2'] = '7';
$omezeni['3580_1'] = '6';
$omezeni['3580_2'] = 'XT';
$omezeni['3581_1'] = 'X';
$omezeni['3582_1'] = 'X';
$omezeni['3583_1'] = 'X';
$omezeni['3584_1'] = '6';
$omezeni['3584_2'] = 'XT';
$omezeni['3585_1'] = '6';
$omezeni['3585_2'] = 'XT';
$omezeni['3587_1'] = '6';
$omezeni['3587_2'] = 'XT';

$trasa['101134_1'] = ['Krnov;5:05','Moravský Beroun;6:09'];
$trasa['101664_1'] = ['Krnov;15:04','Jindřichov ve Slezsku;15:30'];
$trasa['201664_3'] = ['Krnov;15:04','Jindřichov ve Slezsku;15:30'];
$trasa['103500_1'] = ['Krnov;3:40','Bruntál;4:11'];
$trasa['103522_1'] = ['Opava východ;13:39','Krnov;14:15'];
$trasa['1665_1'] = ['Jindřichov ve Slezsku;14:32','Krnov;14:58'];
$trasa['103513_1'] = ['Bruntál;7:08','Krnov;7:38'];

$trasa['13408_1'] = ['Hlučín;8:32', 'Opava východ;9:12'];
$trasa['13409_1'] = ['Opava východ;7:42', 'Hlučín;8:19'];
$trasa['13412_1'] = ['Hlučín;10:32', 'Opava východ;11:12'];
$trasa['13413_1'] = ['Opava východ;9:42', 'Hlučín;10:19'];
$trasa['13416_1'] = ['Hlučín;12:32', 'Opava východ;13:12'];
$trasa['13417_1'] = ['Opava východ;11:42', 'Hlučín;12:19'];
$trasa['101667_1'] = ['Jeseník;17:25', 'Krnov;18:58'];
$trasa['3465_1'] = ['Bruntál;4:52', 'Opava východ;6:06'];
$trasa['3465_2'] = ['Krnov;5:27', 'Opava východ;6:06'];
$trasa['3466_1'] = ['Opava východ;6:54', 'Krnov;7:34'];
$trasa['3467_1'] = ['Krnov;12:24', 'Opava východ;13:07'];
$trasa['3468_1'] = ['Opava východ;14:55', 'Krnov;15:34'];
$trasa['3472_1'] = ['Opava východ;20:23', 'Krnov;21:00'];
$trasa['3472_2'] = ['Opava východ;20:23', 'Krnov;21:00'];
$trasa['3473_1'] = ['Krnov;21:01', 'Opava východ;21:38'];
$trasa['3476_1'] = ['Opava východ;22:46', 'Krnov;23:27'];
$trasa['3500_1'] = ['Krnov;3:40', 'Moravský Beroun;4:47'];
$trasa['3501_1'] = ['Moravský Beroun;5:02', 'Opava východ;7:06'];
$trasa['3503_1'] = ['Moravský Beroun;6:33', 'Bruntál;7:04'];
$trasa['3570_1'] = ['Krnov;3:50', 'Jindřichov ve Slezsku;4:17'];
$trasa['3570_2'] = ['Krnov;3:50', 'Jindřichov ve Slezsku;4:17'];
$trasa['3570_3'] = ['Krnov;3:50', 'Jindřichov ve Slezsku;4:17'];
$trasa['3571_1'] = ['Jindřichov ve Slezsku;4:32', 'Krnov;4:59'];
$trasa['3571_2'] = ['Jindřichov ve Slezsku;4:32', 'Krnov;4:59'];
$trasa['3571_3'] = ['Jindřichov ve Slezsku;4:32', 'Krnov;4:59'];
$trasa['3572_1'] = ['Krnov;6:18', 'Jindřichov ve Slezsku;6:50'];
$trasa['3573_1'] = ['Jindřichov ve Slezsku;7:05', 'Krnov;7:33'];
$trasa['3574_1'] = ['Krnov;7:48', 'Jindřichov ve Slezsku;8:17'];
$trasa['3574_2'] = ['Krnov;7:48', 'Jindřichov ve Slezsku;8:17'];
$trasa['3575_1'] = ['Jindřichov ve Slezsku;8:32', 'Krnov;8:59'];
$trasa['3575_2'] = ['Jindřichov ve Slezsku;8:32', 'Krnov;8:59'];
$trasa['3576_1'] = ['Krnov;9:08', 'Jindřichov ve Slezsku;9:37'];
$trasa['3576_2'] = ['Krnov;9:08', 'Jindřichov ve Slezsku;9:37'];
$trasa['3577_1'] = ['Krnov;10:18', 'Jindřichov ve Slezsku;10:49'];
$trasa['3578_1'] = ['Jindřichov ve Slezsku;9:47', 'Krnov;10:14'];
$trasa['3579_1'] = ['Jindřichov ve Slezsku;12:32', 'Krnov;12:59'];
$trasa['3579_2'] = ['Jindřichov ve Slezsku;12:32', 'Krnov;12:59'];
$trasa['3580_1'] = ['Krnov;13:08', 'Jindřichov ve Slezsku;13:37'];
$trasa['3580_2'] = ['Krnov;13:08', 'Jindřichov ve Slezsku;13:37'];
$trasa['3581_1'] = ['Jindřichov ve Slezsku;13:47', 'Krnov;14:14'];
$trasa['3582_1'] = ['Krnov;14:28', 'Jindřichov ve Slezsku;15:01'];
$trasa['3583_1'] = ['Jindřichov ve Slezsku;15:47', 'Krnov;16:14'];
$trasa['3584_1'] = ['Krnov;17:08', 'Jindřichov ve Slezsku;17:37'];
$trasa['3584_2'] = ['Krnov;17:08', 'Jindřichov ve Slezsku;17:37'];
$trasa['3585_1'] = ['Jindřichov ve Slezsku;16:32', 'Krnov;17:02'];
$trasa['3585_2'] = ['Jindřichov ve Slezsku;16:32', 'Krnov;17:02'];
$trasa['3587_1'] = ['Jindřichov ve Slezsku;20:32', 'Krnov;20:59'];
$trasa['3587_2'] = ['Jindřichov ve Slezsku;20:32', 'Krnov;20:59'];
$trasa['101664_2'] = ['Krnov;15:04', 'Jeseník;16:37'];
$trasa['101666'] = ['Krnov;19:04', 'Jindřichov ve Slezsku;19:30'];
$trasa['103469_1'] = ['Krnov;13:41', 'Opava východ;14:26'];
$trasa['201667'] = ['Jindřichov ve Slezsku;18:32', 'Krnov;18:58'];



$poznamkaObehu['103469_1'] = ['pk', 'postrk'];
$poznamkaObehu['103500_1'] = ['pk', 'postrk'];
$poznamkaObehu['103522_1'] = ['pk', 'postrk'];
$poznamkaObehu['101664_1'] = ['pk', 'postrk'];
$poznamkaObehu['101134_1'] = ['pk', 'postrk'];
$poznamkaObehu['201664_3'] = ['pk', 'postrk'];

$poznamkaObehu['1665_1'] = ['př', 'přípřež'];
$poznamkaObehu['103513_1'] = ['př', 'přípřež'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts855 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


