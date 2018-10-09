<?php 
$zacatekPlatnosti = '30.4.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['2152_1', '531_1', '532_1'];
$obeh[2] = ['2153_1', '8704_1', '8705_1', '8710_1', '8709_1', '8714_1', '8713_1', '8718_1', '8717_1', '8722_1'];
$obeh[3] = ['8701_1', '8706_1', '8708_1', '8707_1', '8712_1', '8711_1', '8716_1', '8715_1', '8720_1', '8719_1'];

$omezeni['2152_1'] = 'X';
$omezeni['2153_1'] = 'X';
$omezeni['8704_1'] = '25';
$omezeni['8705_1'] = '25';
$omezeni['8706_1'] = 'X';
$omezeni['8708_1'] = '25';

$trasa['531_1'] = ['České Budějovice;10:19','Kájov;11:05'];
$trasa['532_1'] = ['Kájov;13:58','České Budějovice;14:45'];
$trasa['2152_1'] = ['České Velenice;4:55', 'České Budějovice;5:50'];
$trasa['2153_1'] = ['České Budějovice;6:32', 'České Velenice;7:26'];
$trasa['8701_1'] = ['Veselí nad Lužnicí;4:52', 'České Velenice;5:55'];
$trasa['8704_1'] = ['České Velenice;6:10', 'Veselí nad Lužnicí;7:13'];
$trasa['8705_1'] = ['Veselí nad Lužnicí;7:33', 'České Velenice;8:32'];
$trasa['8706_1'] = ['České Velenice;6:48', 'Veselí nad Lužnicí;8:20'];
$trasa['8707_1'] = ['Veselí nad Lužnicí;9:37', 'České Velenice;10:36'];
$trasa['8708_1'] = ['České Velenice;7:16', 'Veselí nad Lužnicí;8:20'];
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
$trasa['8719_1'] = ['Veselí nad Lužnicí;21:37', 'České Velenice;22:49'];
$trasa['8720_1'] = ['České Velenice;19:21', 'Veselí nad Lužnicí;20:21'];
$trasa['8722_1'] = ['České Velenice;22:14', 'Veselí nad Lužnicí;23:06'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts730 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


