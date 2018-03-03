<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3900_1', '3931_1', '3940_1', '3970_1', '3902_1', '13905_1', '13906_1', '3933_1', '3953_1', '13907_1', '3934_1', '13908_1', '3975_1', '21940_1', '3954_1', '3957_1', '114214_1', '13909_1', '13910_1', '13910_2', '13911_1', '13913_1', '13912_1', '13914_1', '13915_1', '13916_1', '13916_2', '13917_1', '13917_2', '13918_1', '21942_1', '3946_1', '4244_1', '4245_1', '3984_1'];
$obeh[2] = ['13901_1', '3941_1', '103900_1', '13902_1', '13903_1', '13904_1', '13905_2', '13906_2', '13907_2', '3973_1', '13908_2', '3934_2', '3955_1', '3954_2', '3957_2', '13909_2', '3913_1', '13910_3', '3929_1', '3929_2', '3981_1', '3982_1'];

$omezeni['103900_1'] = '6';
$omezeni['114214_1'] = 'X';
$omezeni['13901_1'] = 'X';
$omezeni['13902_1'] = 'X';
$omezeni['13903_1'] = 'X';
$omezeni['13904_1'] = 'X';
$omezeni['13905_1'] = '7';
$omezeni['13905_2'] = 'X6';
$omezeni['13906_1'] = '7';
$omezeni['13906_2'] = 'X6';
$omezeni['13907_1'] = '25';
$omezeni['13907_2'] = 'X';
$omezeni['13908_1'] = '25';
$omezeni['13908_2'] = 'X';
$omezeni['13909_1'] = 'X6';
$omezeni['13909_2'] = 'T';
$omezeni['13910_1'] = 'X';
$omezeni['13910_2'] = '6';
$omezeni['13910_3'] = 'T';
$omezeni['13911_1'] = '25';
$omezeni['13912_1'] = '25';
$omezeni['13913_1'] = 'X';
$omezeni['13914_1'] = 'X';
$omezeni['13916_1'] = 'X6';
$omezeni['13916_2'] = '25';
$omezeni['13917_1'] = 'X6';
$omezeni['13917_2'] = '25';
$omezeni['21940_1'] = '7';
$omezeni['21942_1'] = '7';
$omezeni['3900_1'] = 'X';
$omezeni['3902_1'] = '6';
$omezeni['3913_1'] = 'X';
$omezeni['3929_1'] = 'T';
$omezeni['3931_1'] = 'T';
$omezeni['3933_1'] = 'X';
$omezeni['3934_1'] = 'X';
$omezeni['3934_2'] = '7';
$omezeni['3940_1'] = 'T';
$omezeni['3941_1'] = '6';
$omezeni['3946_1'] = '6';
$omezeni['3953_1'] = '6';
$omezeni['3954_1'] = '6';
$omezeni['3954_2'] = 'T';
$omezeni['3955_1'] = '7';
$omezeni['3957_1'] = '6';
$omezeni['3957_2'] = 'T';
$omezeni['3970_1'] = 'X';
$omezeni['3973_1'] = '7';
$omezeni['3975_1'] = '7';
$omezeni['3981_1'] = '6';
$omezeni['3982_1'] = '6';
$omezeni['3984_1'] = 'X';
$omezeni['4244_1'] = 'X';
$omezeni['4245_1'] = 'X';

$trasa['103900_1'] = ['Hulín;05:28','Kroměříž;05:36'];
$trasa['114214_1'] = ['Hulín;09:39','Kroměříž;09:47'];
$trasa['13910_1'] = ['Zborovice;13:08','Kojetín;13:49'];
$trasa['13910_2'] = ['Zborovice;13:08','Kroměříž;13:35'];
$trasa['13916_1'] = ['Zborovice;17:08','Kojetín;17:49'];
$trasa['13916_2'] = ['Zborovice;17:08','Kroměříž;17:35'];
$trasa['13917_1'] = ['Kojetín;18:23','Zborovice;19:05'];
$trasa['13917_2'] = ['Kroměříž;18:38','Zborovice;19:05'];
$trasa['21940_1'] = ['Hulín;11:59','Kroměříž;12:15'];
$trasa['21942_1'] = ['Hulín;20:01','Kroměříž;20:09'];
$trasa['3929_1'] = ['Kroměříž;13:45','Hulín;13:53'];
$trasa['3929_2'] = ['Hulín;14:09','Valašské Meziříčí;15:09'];
$trasa['3946_1'] = ['Hulín;20:26','Kroměříž;20:34'];

$trasa['13901_1'] = ['Kroměříž;4:20', 'Zborovice;4:47'];
$trasa['13902_1'] = ['Zborovice;4:50', 'Kroměříž;5:17'];
$trasa['13903_1'] = ['Kroměříž;5:25', 'Zborovice;5:52'];
$trasa['13904_1'] = ['Zborovice;6:00', 'Kroměříž;6:27'];
$trasa['13905_1'] = ['Kroměříž;6:38', 'Zborovice;7:05'];
$trasa['13905_2'] = ['Kroměříž;6:38', 'Zborovice;7:05'];
$trasa['13906_1'] = ['Zborovice;7:08', 'Kroměříž;7:35'];
$trasa['13906_2'] = ['Zborovice;7:08', 'Kroměříž;7:35'];
$trasa['13907_1'] = ['Kroměříž;8:38', 'Zborovice;9:05'];
$trasa['13907_2'] = ['Kroměříž;8:38', 'Zborovice;9:05'];
$trasa['13908_1'] = ['Zborovice;9:13', 'Kroměříž;9:40'];
$trasa['13908_2'] = ['Zborovice;9:13', 'Kroměříž;9:40'];
$trasa['13909_1'] = ['Kroměříž;12:38', 'Zborovice;13:05'];
$trasa['13909_2'] = ['Kroměříž;12:38', 'Zborovice;13:05'];
$trasa['13910_3'] = ['Zborovice;13:08', 'Kroměříž;13:35'];
$trasa['13911_1'] = ['Kroměříž;14:38', 'Zborovice;15:05'];
$trasa['13912_1'] = ['Zborovice;15:08', 'Kroměříž;15:35'];
$trasa['13913_1'] = ['Kojetín;14:23', 'Zborovice;15:15'];
$trasa['13914_1'] = ['Zborovice;15:18', 'Kroměříž;15:45'];
$trasa['13915_1'] = ['Kroměříž;16:38', 'Zborovice;17:05'];
$trasa['13918_1'] = ['Zborovice;19:08', 'Hulín;19:50'];
$trasa['3900_1'] = ['Valašské Meziříčí;4:15', 'Hulín;5:25'];
$trasa['3902_1'] = ['Valašské Meziříčí;6:15', 'Kojetín;7:49'];
$trasa['3913_1'] = ['Kojetín;12:23', 'Valašské Meziříčí;14:12'];
$trasa['3931_1'] = ['Kroměříž;4:47', 'Hulín;4:55'];
$trasa['3933_1'] = ['Kroměříž;6:47', 'Bystřice p.Hostýnem;7:31'];
$trasa['3934_1'] = ['Bystřice p.Hostýnem;9:05', 'Hulín;9:29'];
$trasa['3934_2'] = ['Hulín;9:39', 'Kojetín;10:02'];
$trasa['3940_1'] = ['Osíčko;4:23', 'Kroměříž;5:12'];
$trasa['3941_1'] = ['Kroměříž;4:25', 'Hulín;4:33'];
$trasa['3953_1'] = ['Kojetín;8:09', 'Kroměříž;8:21'];
$trasa['3954_1'] = ['Kroměříž;11:37', 'Kojetín;11:49'];
$trasa['3954_2'] = ['Kroměříž;11:37', 'Kojetín;11:49'];
$trasa['3955_1'] = ['Kojetín;10:38', 'Kroměříž;10:50'];
$trasa['3957_1'] = ['Kojetín;12:09', 'Kroměříž;12:21'];
$trasa['3957_2'] = ['Kojetín;12:09', 'Kroměříž;12:21'];
$trasa['3970_1'] = ['Hulín;6:04', 'Kroměříž;6:12'];
$trasa['3973_1'] = ['Kroměříž;9:20', 'Hulín;9:28'];
$trasa['3975_1'] = ['Kroměříž;11:22', 'Hulín;11:30'];
$trasa['3981_1'] = ['Kroměříž;17:22', 'Hulín;17:30'];
$trasa['3982_1'] = ['Hulín;18:04', 'Kroměříž;18:12'];
$trasa['3984_1'] = ['Hulín;23:02', 'Kroměříž;23:10'];
$trasa['4244_1'] = ['Hulín;21:20', 'Otrokovice;21:33'];
$trasa['4245_1'] = ['Otrokovice;21:52', 'Hulín;22:06'];


$poznamkaObehu['103900_1'] = ['pk', 'postrk'];
$poznamkaObehu['3929_2'] = ['pk', 'postrk'];

$poznamkaObehu['114214_1'] = ['vl', 'vlaková'];

$typ['21940_1'] = 'Sv';
$typ['21942_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts886 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


