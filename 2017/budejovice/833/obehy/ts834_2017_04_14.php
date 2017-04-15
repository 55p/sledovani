<?php 
$zacatekPlatnosti = '14.4.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['2152_1', '8151_1', '208111_1', '18079_1', '8116_1'];
$obeh[2] = ['8102_1', '8104_1', '8110_1', '108111_1', '108111_2', '18079_2'];
$obeh[3] = ['108102_1', '108104_1', '8105_1', '8111_1', '8111_2', '118079_1', '8116_2'];
$obeh[4] = ['2153_1', '8701_1', '8704_1', '8705_1', '8710_1', '8709_1', '8714_1', '8713_1', '8718_1', '8717_1', '8722_1'];
$obeh[5] = ['8701_2', '8706_1', '8708_1', '8707_1', '8712_1', '8711_1', '8716_1', '8715_1', '8720_1', '8719_1', '21929_1', '8719_2'];

$omezeni['108102_1'] = 'X';
$omezeni['108104_1'] = '25';
$omezeni['108111_1'] = 'X';
$omezeni['108111_2'] = '25';
$omezeni['118079_1'] = '25';
$omezeni['18079_1'] = 'X';
$omezeni['18079_2'] = '25';
$omezeni['208111_1'] = 'X';
$omezeni['2152_1'] = 'X';
$omezeni['2153_1'] = 'X';
$omezeni['21929_1'] = 'X';
$omezeni['8102_1'] = 'X';
$omezeni['8104_1'] = '25';
$omezeni['8111_1'] = 'X';
$omezeni['8111_2'] = '25';
$omezeni['8116_1'] = 'T';
$omezeni['8116_2'] = 'X1234';
$omezeni['8151_1'] = 'X';
$omezeni['8701_1'] = '25';
$omezeni['8701_2'] = 'X';
$omezeni['8704_1'] = '25';
$omezeni['8705_1'] = '25';
$omezeni['8706_1'] = 'X';
$omezeni['8708_1'] = '25';
$omezeni['8719_1'] = '25';
$omezeni['8719_2'] = 'X';

$trasa['108111_1'] = ['České Budějovice;16:11','Černý Kříž;18:25'];
$trasa['208111_1'] = ['Český Krumlov;16:56','Nové Údolí;18:42'];
$trasa['21929_1'] = ['Veselí nad Lužnicí;22:00','Suchdol nad Lužnicí;22:26'];
$trasa['8111_1'] = ['České Budějovice;16:11','Černý Kříž;18:25'];

$poznamkaObehu['108111_1'] = ['pk', 'postrk'];
$poznamkaObehu['108111_2'] = ['pk', 'postrk'];
$poznamkaObehu['108102_1'] = ['pk', 'postrk'];
$poznamkaObehu['108104_1'] = ['pk', 'postrk'];
$poznamkaObehu['118079_1'] = ['pk', 'postrk'];

$poznamkaObehu['208111_1'] = ['př', 'přípřež'];

$typ['21929_1'] = 'Sv';

$trasa['18079_1'] = ['Nové Údolí;19:15', 'Volary;19:43'];
$trasa['18079_2'] = ['Nové Údolí;19:15', 'Volary;19:43'];
$trasa['2152_1'] = ['České Velenice;5:00', 'České Budějovice;5:55'];
$trasa['2153_1'] = ['České Budějovice;6:32', 'České Velenice;7:26'];
$trasa['8102_1'] = ['Volary;6:40', 'České Budějovice;8:56'];
$trasa['8104_1'] = ['Volary;7:25', 'České Budějovice;9:43'];
$trasa['8105_1'] = ['České Budějovice;10:23', 'Nové Údolí;12:42'];
$trasa['8110_1'] = ['Nové Údolí;13:19', 'České Budějovice;15:35'];
$trasa['8111_2'] = ['České Budějovice;16:11', 'Nové Údolí;18:42'];
$trasa['8116_1'] = ['Volary;19:21', 'České Budějovice;21:47'];
$trasa['8116_2'] = ['Volary;19:21', 'České Budějovice;21:47'];
$trasa['8151_1'] = ['České Budějovice;15:15', 'Český Krumlov;16:04'];
$trasa['8701_1'] = ['Veselí nad Lužnicí;4:52', 'České Velenice;5:55'];
$trasa['8701_2'] = ['Veselí nad Lužnicí;4:52', 'České Velenice;5:55'];
$trasa['8704_1'] = ['České Velenice;6:07', 'Veselí nad Lužnicí;7:10'];
$trasa['8705_1'] = ['Veselí nad Lužnicí;7:25', 'České Velenice;8:24'];
$trasa['8706_1'] = ['České Velenice;6:45', 'Veselí nad Lužnicí;8:17'];
$trasa['8707_1'] = ['Veselí nad Lužnicí;9:37', 'České Velenice;10:36'];
$trasa['8708_1'] = ['České Velenice;7:34', 'Veselí nad Lužnicí;8:33'];
$trasa['8709_1'] = ['Veselí nad Lužnicí;11:37', 'České Velenice;12:36'];
$trasa['8710_1'] = ['České Velenice;9:21', 'Veselí nad Lužnicí;10:21'];
$trasa['8711_1'] = ['Veselí nad Lužnicí;13:37', 'České Velenice;14:36'];
$trasa['8712_1'] = ['České Velenice;11:21', 'Veselí nad Lužnicí;12:21'];
$trasa['8713_1'] = ['Veselí nad Lužnicí;15:37', 'České Velenice;16:36'];
$trasa['8714_1'] = ['České Velenice;13:21', 'Veselí nad Lužnicí;14:21'];
$trasa['8715_1'] = ['Veselí nad Lužnicí;17:37', 'České Velenice;18:36'];
$trasa['8716_1'] = ['České Velenice;15:21', 'Veselí nad Lužnicí;16:21'];
$trasa['8717_1'] = ['Veselí nad Lužnicí;19:37', 'České Velenice;20:36'];
$trasa['8718_1'] = ['České Velenice;17:21', 'Veselí nad Lužnicí;18:21'];
$trasa['8719_1'] = ['Veselí nad Lužnicí;21:55', 'České Velenice;22:53'];
$trasa['8719_2'] = ['Suchdol nad Lužnicí;22:34', 'České Velenice;22:53'];
$trasa['8720_1'] = ['České Velenice;19:21', 'Veselí nad Lužnicí;20:21'];
$trasa['8722_1'] = ['České Velenice;22:16', 'Veselí nad Lužnicí;23:10'];
$trasa['108102_1'] = ['Volary;6:40', 'České Budějovice;8:56'];
$trasa['108104_1'] = ['Volary;7:25', 'České Budějovice;9:43'];
$trasa['108111_2'] = ['České Budějovice;16:11', 'Nové Údolí;18:42'];
$trasa['118079_1'] = ['Nové Údolí;19:15', 'Volary;19:43'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts834 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


