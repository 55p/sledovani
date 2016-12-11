<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8100_1', '18076_1', '8106_1', '8103_1', '8108_1', '8109_1', '8114_1');
$obeh[2] = array('8701_1', '8704_1', '2153_1', '8705_1', '8710_1', '8709_1', '8714_1', '8713_1', '8718_1', '8717_1', '8722_1');
$obeh[3] = array('8701_2', '8706_1', '8708_1', '8707_1', '8712_1', '8711_1', '8716_1', '8715_1', '8720_1', '8719_1', '21929_1', '8719_2');
$obeh[4] = array('2152_1', '8101_1', '8103_2', '8190_1', '8106_2', '18009_1', '18006_1', '8107_1', '8112_1', '8113_1');
$obeh[5] = array('8102_1', '8104_1', '8105_1', '8110_1', '8111_1', '18017_1');

$omezeni['18006_1'] = '25';
$omezeni['18009_1'] = '25';
$omezeni['18076_1'] = '25';
$omezeni['2152_1'] = 'X';
$omezeni['2153_1'] = 'X';
$omezeni['21929_1'] = 'X';
$omezeni['8100_1'] = 'X';
$omezeni['8101_1'] = 'X';
$omezeni['8102_1'] = 'X';
$omezeni['8103_1'] = 'X';
$omezeni['8103_2'] = '25';
$omezeni['8104_1'] = '25';
$omezeni['8106_1'] = '25';
$omezeni['8106_2'] = 'X';
$omezeni['8107_1'] = 'X';
$omezeni['8108_1'] = 'X';
$omezeni['8190_1'] = 'X';
$omezeni['8701_1'] = '25';
$omezeni['8701_2'] = 'X';
$omezeni['8704_1'] = '25';
$omezeni['8705_1'] = '25';
$omezeni['8706_1'] = 'X';
$omezeni['8708_1'] = '25';
$omezeni['8711_1'] = 'X';
$omezeni['8712_1'] = 'X';
$omezeni['8719_1'] = '25';
$omezeni['8719_2'] = 'X';

$trasa['18006_1'] = ['Volary;13:21','Nové Údolí;13:45'];
$trasa['18009_1'] = ['Nové Údolí;12:15','Volary;12:37'];
$trasa['18017_1'] = ['Černý Kříž;18:29','Volary;18:37'];
$trasa['18076_1'] = ['Volary;8:21','Nové Údolí;8:45'];
$trasa['2152_1'] = ['České Velenice;5:00','České Budějovice;5:55'];
$trasa['2153_1'] = ['České Budějovice;6:32','České Velenice;7:26'];
$trasa['21929_1'] = ['Veselí nad Lužnicí;22:00','Suchdol nad Lužnicí;22:26'];
$trasa['8100_1'] = ['Volary;4:35','České Budějovice;6:56'];
$trasa['8101_1'] = ['České Budějovice;6:07','Volary;8:41'];
$trasa['8102_1'] = ['Volary;6:40','České Budějovice;8:56'];
$trasa['8103_1'] = ['České Budějovice;8:09','Nové Údolí;10:42'];
$trasa['8103_2'] = ['České Budějovice;8:09','Nové Údolí;10:42'];
$trasa['8104_1'] = ['Volary;7:25','České Budějovice;9:43'];
$trasa['8105_1'] = ['České Budějovice;10:23','Černý Kříž;12:25'];
$trasa['8106_1'] = ['Nové Údolí;9:19','České Budějovice;11:37'];
$trasa['8106_2'] = ['Černý Kříž;9:36','České Budějovice;11:37'];
$trasa['8107_1'] = ['České Budějovice;12:11','Nové Údolí;14:42'];
$trasa['8108_1'] = ['Nové Údolí;11:19','České Budějovice;13:45'];
$trasa['8109_1'] = ['České Budějovice;14:22','Nové Údolí;16:42'];
$trasa['8110_1'] = ['Černý Kříž;13:36','České Budějovice;15:35'];
$trasa['8111_1'] = ['České Budějovice;16:11','Černý Kříž;18:25'];
$trasa['8112_1'] = ['Nové Údolí;15:19','České Budějovice;17:41'];
$trasa['8113_1'] = ['České Budějovice;18:22','Volary;20:47'];
$trasa['8114_1'] = ['Nové Údolí;17:19','České Budějovice;19:36'];
$trasa['8190_1'] = ['Volary;8:55','Černý Kříž;9:03'];
$trasa['8701_1'] = ['Veselí nad Lužnicí;4:52','České Velenice;5:55'];
$trasa['8701_2'] = ['Veselí nad Lužnicí;4:52','České Velenice;5:55'];
$trasa['8704_1'] = ['České Velenice;6:07','Veselí nad Lužnicí;7:10'];
$trasa['8705_1'] = ['Veselí nad Lužnicí;7:25','České Velenice;8:24'];
$trasa['8706_1'] = ['České Velenice;6:45','Veselí nad Lužnicí;8:17'];
$trasa['8707_1'] = ['Veselí nad Lužnicí;9:37','České Velenice;10:36'];
$trasa['8708_1'] = ['České Velenice;7:34','Veselí nad Lužnicí;8:33'];
$trasa['8709_1'] = ['Veselí nad Lužnicí;11:37','České Velenice;12:36'];
$trasa['8710_1'] = ['České Velenice;9:21','Veselí nad Lužnicí;10:21'];
$trasa['8711_1'] = ['Veselí nad Lužnicí;13:37','České Velenice;14:36'];
$trasa['8712_1'] = ['České Velenice;11:21','Veselí nad Lužnicí;12:21'];
$trasa['8713_1'] = ['Veselí nad Lužnicí;15:37','České Velenice;16:36'];
$trasa['8714_1'] = ['České Velenice;13:21','Veselí nad Lužnicí;14:21'];
$trasa['8715_1'] = ['Veselí nad Lužnicí;17:37','České Velenice;18:36'];
$trasa['8716_1'] = ['České Velenice;15:21','Veselí nad Lužnicí;16:21'];
$trasa['8717_1'] = ['Veselí nad Lužnicí;19:37','České Velenice;20:36'];
$trasa['8718_1'] = ['České Velenice;17:21','Veselí nad Lužnicí;18:21'];
$trasa['8719_1'] = ['Veselí nad Lužnicí;21:55','České Velenice;22:53'];
$trasa['8719_2'] = ['Suchdol nad Lužnicí;22:34','České Velenice;22:53'];
$trasa['8720_1'] = ['České Velenice;19:21','Veselí nad Lužnicí;20:21'];
$trasa['8722_1'] = ['České Velenice;22:16','Veselí nad Lužnicí;23:10'];

$poznamkaObehu['18017_1'] = array('pk', 'postrk');


$typ['21929_1'] = 'Sv';
$typ['8190_1'] = 'Sv';



@$ts834 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>