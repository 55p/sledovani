<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['113403_1', '113402_1', '113407_1', '113406_1', '3441_1', '3442_1', '23452_1', '23453_1', '23454_1', '99995_1', '23458_1', '99995_2', '23481_1', '3449_1', '3370_1', '13378_1'];
$obeh[2] = ['13351_1', '13352_1', '13353_1', '13354_1', '13355_1', '13356_1', '99994_1', '13377_1', '21961_1'];
$obeh[3] = ['28951_1', '23300_1', '99993_1', '23335_1', '3450_1'];
$obeh[4] = ['13451_1', '13448_1', '99992_1', '13489_1', '13488_1', '13401_1', '13400_1', '13405_1', '13404_1', '13409_1', '13408_1', '13413_1', '13412_1', '13417_1', '13416_1', '13421_1', '13420_1', '13425_1', '13424_1', '13429_1', '13428_1', '13433_1', '13432_1', '13437_1', '13436_1'];

$omezeni['113402_1'] = 'X';
$omezeni['113403_1'] = 'X';
$omezeni['113406_1'] = 'X';
$omezeni['113407_1'] = 'X';
$omezeni['13351_1'] = 'X6';
$omezeni['13352_1'] = 'X';
$omezeni['13353_1'] = 'X';
$omezeni['13354_1'] = 'X6';
$omezeni['13355_1'] = 'X6';
$omezeni['13378_1'] = 'XT,-2412,-3112';
$omezeni['13400_1'] = 'X6';
$omezeni['13401_1'] = 'X6';
$omezeni['13404_1'] = '25';
$omezeni['13405_1'] = '25';
$omezeni['13408_1'] = '25';
$omezeni['13409_1'] = '25';
$omezeni['13412_1'] = '25';
$omezeni['13413_1'] = '25';
$omezeni['13416_1'] = '25';
$omezeni['13417_1'] = '25';
$omezeni['13420_1'] = '25';
$omezeni['13421_1'] = '25';
$omezeni['13424_1'] = '25';
$omezeni['13425_1'] = '25';
$omezeni['13428_1'] = '25';
$omezeni['13429_1'] = '25';
$omezeni['13432_1'] = '25';
$omezeni['13433_1'] = '25';
$omezeni['13436_1'] = '25';
$omezeni['13437_1'] = '25';
$omezeni['13448_1'] = 'X';
$omezeni['13451_1'] = 'X';
$omezeni['13488_1'] = 'X';
$omezeni['13489_1'] = 'X';
$omezeni['21961_1'] = 'z25';
$omezeni['23300_1'] = 'X';
$omezeni['23335_1'] = '10';
$omezeni['23452_1'] = 'X6';
$omezeni['23453_1'] = 'X6';
$omezeni['23454_1'] = '25';
$omezeni['23481_1'] = '10';
$omezeni['28951_1'] = 'X';
$omezeni['3370_1'] = '10';
$omezeni['3441_1'] = '25';
$omezeni['3442_1'] = '25';
$omezeni['3449_1'] = '10';
$omezeni['3450_1'] = '10';
$omezeni['99992_1'] = 'X';
$omezeni['99995_1'] = '25';
$omezeni['99995_2'] = 'X';

$trasa['113402_1'] = ['Hlučín;5:30','Opava východ;6:12'];
$trasa['113403_1'] = ['Opava východ;4:42','Hlučín;5:19'];
$trasa['113406_1'] = ['Hlučín;7:32','Opava východ;8:12'];
$trasa['113407_1'] = ['Opava východ;6:42','Hlučín;7:20'];
$trasa['21961_1'] = ['Suchdol nad Odrou;23:36','Studénka;23:47'];
$trasa['28951_1'] = ['Suchdol nad Odrou;3:28','Studénka;3:59'];
$trasa['99992_1'] = ['Kravaře ve Slezsku - Chuchelná;5:00;22:52'];
$trasa['99993_1'] = ['Bílovec - Studénka;4:30;21:53'];
$trasa['99994_1'] = ['Nový Jičín město - Suchdol nad Odrou;6:28;21:44'];
$trasa['99995_1'] = ['Opava východ - Hradec n/M;6:54;19:54'];
$trasa['99995_2'] = ['Opava východ - Hradec n/M;8:54;19:54'];

$poznamkaObehu['113403_1'] = ['pk', 'postrk'];

$poznamkaObehu['113407_1'] = ['vlož', 'vložená'];

$typ['21961_1'] = 'Sv';
$typ['28951_1'] = 'Sv';

$trasa['13351_1'] = ['Nový Jičín město;4:00', 'Suchdol nad Odrou;4:14'];
$trasa['13352_1'] = ['Suchdol nad Odrou;4:30', 'Nový Jičín město;4:44'];
$trasa['13353_1'] = ['Nový Jičín město;4:48', 'Suchdol nad Odrou;5:02'];
$trasa['13354_1'] = ['Suchdol nad Odrou;5:15', 'Nový Jičín město;5:29'];
$trasa['13355_1'] = ['Nový Jičín město;5:34', 'Suchdol nad Odrou;5:48'];
$trasa['13356_1'] = ['Suchdol nad Odrou;6:10', 'Nový Jičín město;6:24'];
$trasa['13377_1'] = ['Nový Jičín město;22:36', 'Suchdol nad Odrou;22:50'];
$trasa['13378_1'] = ['Suchdol nad Odrou;23:30', 'Nový Jičín město;23:44'];
$trasa['13400_1'] = ['Hlučín;4:32', 'Opava východ;5:12'];
$trasa['13401_1'] = ['Opava východ;3:43', 'Hlučín;4:19'];
$trasa['13404_1'] = ['Hlučín;6:32', 'Opava východ;7:12'];
$trasa['13405_1'] = ['Opava východ;5:42', 'Hlučín;6:19'];
$trasa['13408_1'] = ['Hlučín;8:32', 'Opava východ;9:12'];
$trasa['13409_1'] = ['Opava východ;7:42', 'Hlučín;8:19'];
$trasa['13412_1'] = ['Hlučín;10:32', 'Opava východ;11:12'];
$trasa['13413_1'] = ['Opava východ;9:42', 'Hlučín;10:19'];
$trasa['13416_1'] = ['Hlučín;12:32', 'Opava východ;13:12'];
$trasa['13417_1'] = ['Opava východ;11:42', 'Hlučín;12:19'];
$trasa['13420_1'] = ['Hlučín;14:32', 'Opava východ;15:12'];
$trasa['13421_1'] = ['Opava východ;13:42', 'Hlučín;14:19'];
$trasa['13424_1'] = ['Hlučín;16:32', 'Opava východ;17:12'];
$trasa['13425_1'] = ['Opava východ;15:42', 'Hlučín;16:19'];
$trasa['13428_1'] = ['Hlučín;18:32', 'Opava východ;19:12'];
$trasa['13429_1'] = ['Opava východ;17:42', 'Hlučín;18:19'];
$trasa['13432_1'] = ['Hlučín;20:32', 'Opava východ;21:12'];
$trasa['13433_1'] = ['Opava východ;19:42', 'Hlučín;20:19'];
$trasa['13436_1'] = ['Hlučín;22:32', 'Opava východ;23:12'];
$trasa['13437_1'] = ['Opava východ;21:42', 'Hlučín;22:19'];
$trasa['13448_1'] = ['Chuchelná;4:34', 'Kravaře ve Slezsku;4:51'];
$trasa['13451_1'] = ['Opava východ;4:02', 'Chuchelná;4:29'];
$trasa['13488_1'] = ['Chuchelná;23:20', 'Opava východ;23:45'];
$trasa['13489_1'] = ['Kravaře ve Slezsku;23:00', 'Chuchelná;23:16'];
$trasa['23300_1'] = ['Studénka;4:14', 'Bílovec;4:26'];
$trasa['23335_1'] = ['Bílovec;21:40', 'Ostrava-Svinov;22:16'];
$trasa['23452_1'] = ['Opava východ;5:17', 'Hradec nad Moravicí;5:31'];
$trasa['23453_1'] = ['Hradec nad Moravicí;6:06', 'Opava východ;6:20'];
$trasa['23454_1'] = ['Opava východ;6:40', 'Hradec nad Moravicí;6:54'];
$trasa['23458_1'] = ['Opava východ;8:40', 'Hradec nad Moravicí;8:54'];
$trasa['23481_1'] = ['Hradec nad Moravicí;20:06', 'Opava východ;20:20'];
$trasa['3370_1'] = ['Ostrava-Svinov;22:52', 'Suchdol nad Odrou;23:22'];
$trasa['3441_1'] = ['Opava východ;3:09', 'Ostrava-Svinov;3:43'];
$trasa['3442_1'] = ['Ostrava-Svinov;4:39', 'Opava východ;5:14'];
$trasa['3449_1'] = ['Opava východ;21:45', 'Ostrava-Svinov;22:16'];
$trasa['3450_1'] = ['Ostrava-Svinov;23:05', 'Opava východ;23:41'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts851 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


