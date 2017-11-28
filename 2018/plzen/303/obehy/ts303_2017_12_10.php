<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['753_1', '772_1', '763_1', '762_1', '773_1'];
$obeh[2] = ['362_1', '351_1', '356_1', '357_1', '350_1', '363_1'];
$obeh[3] = ['562_1', '557_1', '556_1', '563_1', '617_1'];
$obeh[4] = ['601_1', '537_1', '700_1', '700_2', '733_1'];
$obeh[5] = ['8259_1', '8200_1', '732_1', '705_1', '8206_1', '8276_1', '8283_1', '708_1', '727_1', '531_1', '708_2', '539_1'];
$obeh[6] = ['1830_1', '1831_1', '1833_1'];
$obeh[7] = ['8262_1', '8205_1', '712_1', '723_1'];
$obeh[8] = ['537_2', '709_1', '714_1', '535_1', '702_1', '720_1', '717_1', '716_1', '719_1', '702_2', '965_1'];
$obeh[9] = ['964_1', '703_1', '718_1', '715_1', '706_1', '706_2', '724_1', '717_2', '706_3'];
$obeh[10] = ['776_1', '761_1', '766_1', '769_1', '756_1'];
$obeh[11] = ['755_1', '764_1', '775_1', '752_1'];
$obeh[12] = ['759_1', '768_1', '771_1', '754_1'];

$omezeni['1830_1'] = 'X6';
$omezeni['1831_1'] = '6';
$omezeni['1833_1'] = 'X';
$omezeni['531_1'] = 'T';
$omezeni['535_1'] = 'X';
$omezeni['537_2'] = 'X';
$omezeni['539_1'] = 'T';
$omezeni['563_1'] = 'z25';
$omezeni['601_1'] = 'X';
$omezeni['617_1'] = 'zX';
$omezeni['700_1'] = 'XT';
$omezeni['700_2'] = '6';
$omezeni['702_1'] = 'X';
$omezeni['702_2'] = 'T';
$omezeni['703_1'] = 'X6';
$omezeni['705_1'] = 'X6';
$omezeni['706_1'] = 'X';
$omezeni['706_2'] = '6';
$omezeni['706_3'] = 'T';
$omezeni['708_1'] = '6';
$omezeni['708_2'] = 'T';
$omezeni['709_1'] = 'X';
$omezeni['712_1'] = 'X';
$omezeni['714_1'] = 'X';
$omezeni['715_1'] = 'X6';
$omezeni['716_1'] = 'T';
$omezeni['717_1'] = '6';
$omezeni['717_2'] = 'T';
$omezeni['718_1'] = 'X6';
$omezeni['719_1'] = 'T';
$omezeni['720_1'] = '6';
$omezeni['723_1'] = 'X';
$omezeni['724_1'] = 'T';
$omezeni['727_1'] = '6';
$omezeni['732_1'] = 'X6';
$omezeni['733_1'] = 'XT';
$omezeni['8200_1'] = 'X1,6';
$omezeni['8205_1'] = 'X';
$omezeni['8206_1'] = 'X';
$omezeni['8259_1'] = 'X1,6';
$omezeni['8262_1'] = 'X';
$omezeni['8276_1'] = 'X';
$omezeni['8283_1'] = 'X';
$omezeni['964_1'] = 'X';
$omezeni['965_1'] = 'zX';

$trasa['350_1'] = ['Praha hl.n.;17:33','Plzeň hl.n.;18:58'];
$trasa['351_1'] = ['Plzeň hl.n.;9:01','Praha hl.n.;10:31'];
$trasa['356_1'] = ['Praha hl.n.;11:33','Plzeň hl.n.;12:58'];
$trasa['357_1'] = ['Plzeň hl.n.;15:01','Praha hl.n.;16:31'];
$trasa['362_1'] = ['Praha hl.n.;5:33','Plzeň hl.n.;6:56'];
$trasa['363_1'] = ['Plzeň hl.n.;21:01','Praha hl.n.;22:31'];
$trasa['601_1'] = ['Ústí nad Labem hl.n.;6:13','Praha hl.n.;7:24'];
$trasa['617_1'] = ['Cheb;18:29','Ústí nad Labem hl.n.;21:10'];
$trasa['756_1'] = ['Praha hl.n.;18:03','Klatovy;20:41'];
$trasa['761_1'] = ['Klatovy;9:17','Praha hl.n.;12:01'];
$trasa['763_1'] = ['Klatovy;11:17','Praha hl.n.;14:01'];
$trasa['764_1'] = ['Praha hl.n.;14:03','Klatovy;16:41'];
$trasa['772_1'] = ['Praha hl.n.;8:03','Klatovy;10:41'];
$trasa['775_1'] = ['Klatovy;17:17','Praha hl.n.;20:01'];
$trasa['776_1'] = ['Praha hl.n.;6:03','Klatovy;8:41'];
$trasa['531'] = ['Praha hl.n.;8:01', 'České Budějovice;10:08'];

$trasa['1830_1'] = ['Tábor;5:17', 'Praha hl.n.;6:56'];
$trasa['1831_1'] = ['Praha hl.n.;8:22', 'Tábor;10:18'];
$trasa['1833_1'] = ['Praha hl.n.;16:55', 'Tábor;18:50'];
$trasa['535_1'] = ['Praha hl.n.;16:01', 'České Budějovice;18:03'];
$trasa['537_1'] = ['Praha-Holešovice;16:48', 'České Budějovice;19:08'];
$trasa['537_2'] = ['Praha-Holešovice;16:48', 'České Budějovice;19:08'];
$trasa['539_1'] = ['Praha hl.n.;19:01', 'České Budějovice;21:03'];
$trasa['556_1'] = ['Praha hl.n.;14:33', 'Cheb;17:27'];
$trasa['557_1'] = ['Cheb;10:33', 'Praha hl.n.;13:31'];
$trasa['562_1'] = ['Praha hl.n.;6:33', 'Cheb;9:27'];
$trasa['563_1'] = ['Cheb;18:33', 'Praha hl.n.;21:31'];
$trasa['700_1'] = ['České Budějovice;20:03', 'Praha-Holešovice;22:38'];
$trasa['700_2'] = ['České Budějovice;20:03', 'Praha hl.n.;22:27'];
$trasa['702_1'] = ['České Budějovice;19:01', 'Praha hl.n.;21:27'];
$trasa['702_2'] = ['České Budějovice;19:01', 'Praha hl.n.;21:27'];
$trasa['703_1'] = ['Praha hl.n.;6:31', 'České Budějovice;8:58'];
$trasa['705_1'] = ['Praha-Holešovice;7:18', 'České Budějovice;9:58'];
$trasa['706_1'] = ['České Budějovice;17:01', 'Praha-Holešovice;19:38'];
$trasa['706_2'] = ['České Budějovice;17:01', 'Praha hl.n.;19:27'];
$trasa['706_3'] = ['Veselí nad Lužnicí;17:34', 'Praha hl.n.;19:27'];
$trasa['708_1'] = ['České Budějovice;16:03', 'Praha-Holešovice;18:38'];
$trasa['708_2'] = ['České Budějovice;16:03', 'Praha hl.n.;18:27'];
$trasa['709_1'] = ['Praha-Holešovice;9:18', 'České Budějovice;11:58'];
$trasa['712_1'] = ['České Budějovice;14:01', 'Praha-Holešovice;16:38'];
$trasa['714_1'] = ['České Budějovice;13:01', 'Praha hl.n.;15:27'];
$trasa['715_1'] = ['Praha-Holešovice;13:18', 'České Budějovice;15:58'];
$trasa['716_1'] = ['České Budějovice;12:03', 'Praha-Holešovice;14:38'];
$trasa['717_1'] = ['Praha-Holešovice;14:18', 'Veselí nad Lužnicí;16:24'];
$trasa['717_2'] = ['Praha-Holešovice;14:18', 'Veselí nad Lužnicí;16:24'];
$trasa['718_1'] = ['České Budějovice;10:01', 'Praha-Holešovice;12:38'];
$trasa['719_1'] = ['Praha-Holešovice;15:18', 'České Budějovice;17:58'];
$trasa['720_1'] = ['České Budějovice;9:03', 'Praha-Holešovice;11:38'];
$trasa['723_1'] = ['Praha-Holešovice;17:18', 'České Budějovice;19:58'];
$trasa['724_1'] = ['Veselí nad Lužnicí;7:34', 'Praha-Holešovice;9:38'];
$trasa['727_1'] = ['Praha-Holešovice;19:18', 'České Budějovice;21:52'];
$trasa['732_1'] = ['Tábor;5:06', 'Praha-Holešovice;6:38'];
$trasa['733_1'] = ['Praha-Holešovice;23:18', 'Tábor;0:54'];
$trasa['752_1'] = ['Praha hl.n.;21:03', 'Klatovy;23:41'];
$trasa['753_1'] = ['Plzeň hl.n.;5:13', 'Praha hl.n.;7:01'];
$trasa['754_1'] = ['Praha hl.n.;19:03', 'Plzeň hl.n.;20:45'];
$trasa['755_1'] = ['Klatovy;5:17', 'Praha hl.n.;8:01'];
$trasa['759_1'] = ['Klatovy;7:17', 'Praha hl.n.;10:01'];
$trasa['762_1'] = ['Praha hl.n.;15:03', 'Plzeň hl.n.;16:45'];
$trasa['766_1'] = ['Praha hl.n.;13:03', 'Plzeň hl.n.;14:45'];
$trasa['768_1'] = ['Praha hl.n.;12:03', 'Klatovy;14:41'];
$trasa['769_1'] = ['Plzeň hl.n.;15:13', 'Praha hl.n.;17:01'];
$trasa['771_1'] = ['Klatovy;15:17', 'Praha hl.n.;18:01'];
$trasa['773_1'] = ['Plzeň hl.n.;17:13', 'Praha hl.n.;19:01'];
$trasa['8200_1'] = ['České Budějovice;3:59', 'Tábor;4:58'];
$trasa['8205_1'] = ['Benešov u Prahy;6:20', 'České Budějovice;8:34'];
$trasa['8206_1'] = ['České Budějovice;12:43', 'Tábor;13:54'];
$trasa['8259_1'] = ['Tábor;0:59', 'České Budějovice;2:00'];
$trasa['8262_1'] = ['Tábor;4:15', 'Benešov u Prahy;5:09'];
$trasa['8276_1'] = ['Tábor;15:10', 'Benešov u Prahy;16:05'];
$trasa['8283_1'] = ['Benešov u Prahy;17:20', 'Tábor;18:14'];
$trasa['964_1'] = ['Čáslav;4:50', 'Praha hl.n.;5:49'];
$trasa['965_1'] = ['Praha hl.n.;22:13', 'Čáslav;23:12'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);

