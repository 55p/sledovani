<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5965_1', '15901_1', '15904_1', '5950_1', '5901_1', '5902_1', '15907_1', '15908_1', '21840_1', '21841_1', '15919_1', '115922_1', '15925_1', '15924_1', '15929_1', '15928_1', '15931_1');
$obeh[2] = array('15900_1', '15903_1', '15902_1', '15905_1', '15906_1', '15909_1', '15910_1', '5951_1', '15911_1', '15912_1', '15913_1', '15914_1', '15915_1', '15918_1', '15921_1', '15916_1', '15917_1', '15920_1', '15923_1', '15922_1', '5960_1', '5961_1', '15927_1', '15926_1', '15925_2', '15924_2', '15929_2', '15928_2', '5964_1');

$omezeni['115922_1'] = 'X';
$omezeni['15900_1'] = 'X';
$omezeni['15901_1'] = 'X';
$omezeni['15902_1'] = '6';
$omezeni['15903_1'] = 'X';
$omezeni['15904_1'] = 'X';
$omezeni['15906_1'] = 'X,6';
$omezeni['15907_1'] = 'X';
$omezeni['15908_1'] = 'X';
$omezeni['15909_1'] = 'X,6';
$omezeni['15910_1'] = 'X,6';
$omezeni['15911_1'] = 'T';
$omezeni['15912_1'] = 'T';
$omezeni['15914_1'] = '6,T';
$omezeni['15915_1'] = '6,T';
$omezeni['15916_1'] = 'X';
$omezeni['15917_1'] = 'X';
$omezeni['15918_1'] = '6,T';
$omezeni['15919_1'] = 'X';
$omezeni['15920_1'] = 'X';
$omezeni['15921_1'] = '6,T';
$omezeni['15923_1'] = 'X';
$omezeni['15924_1'] = 'X';
$omezeni['15924_2'] = '25';
$omezeni['15925_1'] = 'X';
$omezeni['15925_2'] = '25';
$omezeni['15926_1'] = 'X';
$omezeni['15927_1'] = 'X';
$omezeni['15928_1'] = 'X';
$omezeni['15928_2'] = '25';
$omezeni['15929_1'] = 'X';
$omezeni['15929_2'] = '25';
$omezeni['15931_1'] = 'XT';
$omezeni['15905_1'] = '6';
$omezeni['21840_1'] = '2,3';
$omezeni['21841_1'] = '2,3';
$omezeni['5901_1'] = '6';
$omezeni['5902_1'] = '6';
$omezeni['5950_1'] = '6';
$omezeni['5951_1'] = 'T';
$omezeni['5960_1'] = 'X';
$omezeni['5961_1'] = 'X';

$trasa['21840_1'] = array('Čáslav;10:45','Kolín;11:03');
$trasa['21841_1'] = array('Kolín;14:00','Čáslav;14:19');

$poznamkaObehu['115922_1'] = array('pk', 'postrk');

$typ[21840] = $typ[21841] = 'Sv';

$trasa['15905_1'] = array('Čáslav;5:25', 'Třemošnice;5:59');

$trasa['15900_1'] = array('Třemošnice;4:02', 'Čáslav;4:36');
$trasa['15901_1'] = array('Čáslav;4:15', 'Třemošnice;4:51');
$trasa['15902_1'] = array('Třemošnice;4:21', 'Čáslav;4:54');
$trasa['15903_1'] = array('Čáslav;5:09', 'Třemošnice;5:44');
$trasa['15904_1'] = array('Třemošnice;4:56', 'Čáslav;5:30');
$trasa['15906_1'] = array('Třemošnice;6:02', 'Čáslav;6:36');
$trasa['15907_1'] = array('Čáslav;6:15', 'Třemošnice;6:50');
$trasa['15908_1'] = array('Třemošnice;7:02', 'Čáslav;7:36');
$trasa['15909_1'] = array('Čáslav;7:15', 'Třemošnice;7:50');
$trasa['15910_1'] = array('Třemošnice;7:53', 'Čáslav;8:26');
$trasa['15911_1'] = array('Čáslav;7:35', 'Třemošnice;8:09');
$trasa['15912_1'] = array('Třemošnice;8:12', 'Čáslav;8:45');
$trasa['15913_1'] = array('Čáslav;9:10', 'Třemošnice;9:44');
$trasa['15914_1'] = array('Třemošnice;10:12', 'Čáslav;10:45');
$trasa['15915_1'] = array('Čáslav;11:10', 'Třemošnice;11:44');
$trasa['15916_1'] = array('Třemošnice;11:12', 'Čáslav;11:45');
$trasa['15917_1'] = array('Čáslav;13:10', 'Třemošnice;13:44');
$trasa['15918_1'] = array('Třemošnice;14:12', 'Čáslav;14:45');
$trasa['15919_1'] = array('Čáslav;14:39', 'Třemošnice;15:16');
$trasa['15920_1'] = array('Třemošnice;14:26', 'Čáslav;15:00');
$trasa['15921_1'] = array('Čáslav;15:10', 'Třemošnice;15:44');
$trasa['15922'] = array('Třemošnice;16:12', 'Čáslav;16:45');
$trasa['15923_1'] = array('Čáslav;15:33', 'Třemošnice;16:07');
$trasa['15924_1'] = array('Třemošnice;18:06', 'Čáslav;18:40');
$trasa['15924_2'] = array('Třemošnice;18:06', 'Čáslav;18:40');
$trasa['15925_1'] = array('Čáslav;17:10', 'Třemošnice;17:44');
$trasa['15925_2'] = array('Čáslav;17:10', 'Třemošnice;17:44');
$trasa['15926_1'] = array('Třemošnice;19:03', 'Čáslav;19:42');
$trasa['15927_1'] = array('Čáslav;18:19', 'Třemošnice;18:54');
$trasa['15928_1'] = array('Třemošnice;20:12', 'Čáslav;20:45');
$trasa['15928_2'] = array('Třemošnice;20:12', 'Čáslav;20:45');
$trasa['15929_1'] = array('Čáslav;19:10', 'Třemošnice;19:46');
$trasa['15929_2'] = array('Čáslav;19:10', 'Třemošnice;19:46');
$trasa['15931_1'] = array('Čáslav;21:10', 'Třemošnice;21:44');
$trasa['5901_1'] = array('Kolín;5:13', 'Čáslav;5:36');
$trasa['5902_1'] = array('Čáslav;5:59', 'Kolín;6:20');
$trasa['5950_1'] = array('Čáslav;4:33', 'Kolín;4:55');
$trasa['5951_1'] = array('Kolín;7:06', 'Čáslav;7:26');
$trasa['5960_1'] = array('Čáslav;17:28', 'Kutná Hora hl.n.;17:38');
$trasa['5961_1'] = array('Kutná Hora hl.n.;17:44', 'Čáslav;17:54');
$trasa['5964_1'] = array('Čáslav;22:06', 'Kolín;22:28');
$trasa['5965_1'] = array('Kolín;0:01', 'Čáslav;0:23');


@$ts868 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>