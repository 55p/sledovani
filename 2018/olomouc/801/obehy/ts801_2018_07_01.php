<?php 
$zacatekPlatnosti = '1.7.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1661_1', '1660_1', '1121_1', '1128_1', '3502_1', '1129_1', '1120_1', '1666_1', '3473_1'];
$obeh[2] = ['1661_2', '1121_2', '1128_2', '3505_1', '1125_1', '1124_1', '1133_1', '3446_1', '3451_1'];
$obeh[3] = ['3440_1', '3460_1', '1134_1', '1123_1', '101130_1', '1123_2', '1126_1', '1131_1', '2883_1', '2890_1', '2885_1', '2872_1', '3448_1'];
$obeh[4] = ['3441_1', '3443_1', '3442_1', '3445_1', '1132_1', '1127_1', '1122_1', '1135_1', '3506_1'];
$obeh[5] = ['3463_1', '3445_2', '3403_1', '2870_1', '1130_1', '101133_1', '3504_1', '3509_1'];
$obeh[6] = ['3480_1', '3481_1', '101121_1', '1642_1', '3155_1', '101124_1', '29122_1', '101122_1', '3521_1', '101122_2', '29121_1', '101120_1', '3470_1', '101135_1'];

$omezeni['1121_1'] = '25';
$omezeni['1121_2'] = 'X';
$omezeni['1123_2'] = 'T';
$omezeni['1123_1'] = 'X6';
$omezeni['1128_2'] = 'X';
$omezeni['1128_1'] = '25';
$omezeni['1134_1'] = 'X6';
$omezeni['1642_1'] = 'X';
$omezeni['1660_1'] = '7';
$omezeni['1661_2'] = 'X';
$omezeni['1661_1'] = '6';
$omezeni['1666_1'] = 'XT';
$omezeni['2870_1'] = 'X';
$omezeni['2883_1'] = 'X';
$omezeni['2890_1'] = 'X';
$omezeni['3155_1'] = 'X';
$omezeni['3403_1'] = 'X';
$omezeni['3441_1'] = 'X';
$omezeni['3442_1'] = 'X';
$omezeni['3443_1'] = '25';
$omezeni['3445_1'] = 'X';
$omezeni['3445_2'] = '25';
$omezeni['3460_1'] = 'X6';
$omezeni['3470_1'] = 'X';
$omezeni['3473_1'] = '6';
$omezeni['3480_1'] = 'X';
$omezeni['3481_1'] = 'X';
$omezeni['3502_1'] = '25';
$omezeni['3504_1'] = 'T';
$omezeni['3505_1'] = '25';
$omezeni['3521_1'] = 'X5';
$omezeni['29121_1'] = 'X5';
$omezeni['29122_1'] = 'X1234';
$omezeni['101120_1'] = 'X5';
$omezeni['101121_1'] = 'X';
$omezeni['101122_2'] = 'T';
$omezeni['101122_1'] = 'X1234';
$omezeni['101124_1'] = 'X5';
$omezeni['101130_1'] = 'T';
$omezeni['101133_1'] = 'T';
$omezeni['101135_1'] = 'T';

$trasa['1120_1'] = ['Ostrava střed;17:41','Krnov;18:56'];
$trasa['1121_1'] = ['Krnov;7:06','Ostrava střed;8:15'];
$trasa['1121_2'] = ['Krnov;7:06','Ostrava střed;8:15'];
$trasa['1122_1'] = ['Ostrava střed;15:41','Olomouc hl.n.;18:52'];
$trasa['1123_1'] = ['Olomouc hl.n.;7:04','Ostrava-Svinov;9:57'];
$trasa['1123_2'] = ['Krnov;9:06','Ostrava-Svinov;9:57'];
$trasa['1124_1'] = ['Ostrava střed;13:41','Olomouc hl.n.;16:52'];
$trasa['1125_1'] = ['Krnov;11:06','Ostrava střed;12:15'];
$trasa['1126_1'] = ['Ostrava-Svinov;12:00','Olomouc hl.n.;14:52'];
$trasa['1127_1'] = ['Olomouc hl.n.;11:04','Ostrava střed;14:15'];
$trasa['1128_2'] = ['Ostrava střed;9:41','Krnov;10:56'];
$trasa['1128_1'] = ['Ostrava střed;9:41','Krnov;10:56'];
$trasa['1129_1'] = ['Olomouc hl.n.;13:04','Ostrava střed;16:15'];
$trasa['1130_1'] = ['Ostrava-Svinov;8:00','Olomouc hl.n.;10:52'];
$trasa['1131_1'] = ['Olomouc hl.n.;15:04','Ostrava-Svinov;17:57'];
$trasa['1132_1'] = ['Ostrava-Svinov;6:00','Olomouc hl.n.;8:52'];
$trasa['1133_1'] = ['Olomouc hl.n.;17:04','Ostrava-Svinov;20:03'];
$trasa['1134_1'] = ['Krnov;5:05','Olomouc hl.n.;6:52'];
$trasa['1135_1'] = ['Olomouc hl.n.;19:04','Krnov;20:50'];
$trasa['1642_1'] = ['Ostrava-Svinov;8:26','Frýdlant nad Ostravicí;9:10'];
$trasa['1660_1'] = ['Opava východ;6:14','Krnov;6:47'];
$trasa['1661_1'] = ['Lipová Lázně;5:16','Krnov;6:58'];
$trasa['1661_2'] = ['Lipová Lázně;5:16','Krnov;6:58'];
$trasa['1666_1'] = ['Krnov;19:04','Lipová Lázně;20:52'];
$trasa['2870_1'] = ['Ostrava-Kunčice;6:54','Ostrava-Svinov;7:04'];
$trasa['2872_1'] = ['Ostrava-Kunčice;20:54','Ostrava-Svinov;21:05'];
$trasa['2883_1'] = ['Ostrava-Svinov;18:50','Ostrava-Kunčice;19:02'];
$trasa['2885_1'] = ['Ostrava-Svinov;19:50','Ostrava-Kunčice;20:02'];
$trasa['2890_1'] = ['Ostrava-Kunčice;19:09','Ostrava-Svinov;19:19'];
$trasa['3155_1'] = ['Frýdlant nad Ostravicí;12:45','Ostrava hl.n.;13:36'];
$trasa['3403_1'] = ['Opava východ;5:40','Ostrava-Kunčice;6:31'];
$trasa['3440_1'] = ['Ostrava-Svinov;0:01','Opava východ;0:30'];
$trasa['3441_1'] = ['Opava východ;3:18','Ostrava-Svinov;3:53'];
$trasa['3442_1'] = ['Ostrava-Svinov;4:39','Opava východ;5:14'];
$trasa['3443_1'] = ['Opava východ;4:22','Ostrava-Svinov;4:57'];
$trasa['3445_2'] = ['Opava východ;5:22','Ostrava-Svinov;5:57'];
$trasa['3445_1'] = ['Opava východ;5:22','Ostrava-Svinov;5:57'];
$trasa['3446_1'] = ['Ostrava-Svinov;20:42','Opava východ;21:18'];
$trasa['3448_1'] = ['Ostrava-Svinov;21:47','Opava východ;22:22'];
$trasa['3451_1'] = ['Opava východ;22:42','Ostrava-Svinov;23:12'];
$trasa['3460_1'] = ['Opava východ;4:25','Krnov;5:02'];
$trasa['3463_1'] = ['Krnov;4:29','Opava východ;5:09'];
$trasa['3470_1'] = ['Opava východ;18:54','Krnov;19:36'];
$trasa['3473_1'] = ['Krnov;21:01','Opava východ;21:38'];
$trasa['3480_1'] = ['Krnov;4:44','Bruntál;5:14'];
$trasa['3481_1'] = ['Bruntál;6:25','Krnov;6:53'];
$trasa['3502_1'] = ['Krnov;11:05','Olomouc hl.n.;12:55'];
$trasa['3504_1'] = ['Krnov;19:05','Olomouc hl.n.;20:57'];
$trasa['3505_1'] = ['Olomouc hl.n.;9:01: Krnov;10:51'];
$trasa['3506_1'] = ['Krnov;21:12','Olomouc hl.n.;23:04'];
$trasa['3509_1'] = ['Olomouc hl.n.;22:41','Krnov;0:42'];
$trasa['3521_1'] = ['Krnov;15:41','Opava východ;16:23'];
$trasa['29121_1'] = ['Opava východ;17:15','Ostrava-Svinov;17:35'];
$trasa['29122_1'] = ['Ostrava hl.n.;13:58','Ostrava střed;14:03'];
$trasa['101120_1'] = ['Ostrava-Svinov;18:00','Opava východ;18:24'];
$trasa['101121_1'] = ['Krnov;7:06','Ostrava-Svinov;7:57'];
$trasa['101122_2'] = ['Krnov;17:05','Olomouc hl.n.;18:52'];
$trasa['101122_1'] = ['Ostrava střed;15:41','Opava východ;16:24'];
$trasa['101124_1'] = ['Ostrava hl.n.;13:48','Krnov;14:56'];
$trasa['101130_1'] = ['Opava východ;8:28','Krnov;8:56'];
$trasa['101133_1'] = ['Olomouc hl.n.;17:04','Krnov;18:51'];
$trasa['101135_1'] = ['Olomouc hl.n.;19:04','Krnov;20:50'];
//sem patri stazene trasy


$poznamkaObehu['101130_1'] = ['pk', 'postrk'];
$poznamkaObehu['101133_1'] = ['pk', 'postrk'];
$poznamkaObehu['101121_1'] = ['pk', 'postrk'];
$poznamkaObehu['101122_1'] = ['pk', 'postrk'];
$poznamkaObehu['101135_1'] = ['pk', 'postrk'];

$poznamkaObehu['101124_1'] = ['př', 'přípřež'];
$poznamkaObehu['101122_2'] = ['př', 'přípřež'];
$poznamkaObehu['101120_1'] = ['př', 'přípřež'];

$typ['29122_1'] = 'Sv';
$typ['29121_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts801 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


