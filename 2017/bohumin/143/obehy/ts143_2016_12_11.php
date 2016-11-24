<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('100445_1', '100444_1');
$obeh[2] = array('444_1', '614_1', '605_1', '610_1', '609_1', '606_1', '613_1', '602_1', '617_1');
$obeh[3] = array('616_1', '603_1', '612_1', '607_1', '608_1', '611_1', '604_1', '615_1', '445_1');
$obeh[4] = array('343_1', '344_1', '347_1', '3439_1');
$obeh[5] = array('3404_1', '3413_1', '3416_1', '3908_1', '3917_1', '342_1', '640_1');
$obeh[6] = array('641_1');

$omezeni['3413_1'] = '25';
$omezeni['3416_1'] = '25';
$omezeni['3908_1'] = 'X';
$omezeni['3917_1'] = 'X';
$omezeni['444_1'] = 'X';
$omezeni['445_1'] = 'zX';
$omezeni['602_1'] = '10';
$omezeni['603_1'] = '11';
$omezeni['616_1'] = '11';
$omezeni['617_1'] = '10';
$omezeni['640_1'] = 'X';
$omezeni['641_1'] = 'vX';

$trasa['100444_1'] = array('Košice;20:24','Bohumín;1:41');
$trasa['100445_1'] = array('Bohumín;2:45','Košice;7:41');
$trasa['3404_1'] = array('Liptovský Mikuláš;5:04','Žilina;6:34');
$trasa['3413_1'] = array('Žilina;8:24','Liptovský Mikuláš;10:13');
$trasa['3416_1'] = array('Liptovský Mikuláš;11:28','Žilina:13:00');
$trasa['342_1'] = array('Žilina;15:27','Ostrava-Svinov;17:17');
$trasa['3439_1'] = array('Žilina;21:50','Liptovský Mikuláš;23:21');
$trasa['343_1'] = array('Ostrava-Svinov;8:43','Žilina;10:33');
$trasa['344_1'] = array('Žilina;11:27','Ostrava-Svinov;13:17');
$trasa['347_1'] = array('Ostrava-Svinov;16:43','Žilina;18:33');
$trasa['3908_1'] = array('Žilina;8:48','Čadca;9:28');
$trasa['3917_1'] = array('Čadca;10:35','Žilina;11:13');
$trasa['444_1'] = array('Bohumín;2:12','Praha hl.n.;6:33');
$trasa['445_1'] = array('Praha hl.n.;22:00','Bohumín;2:26');
$trasa['602_1'] = array('Praha hl.n.;19:28','Ústí nad Labem hl.n.;20:40');
$trasa['603_1'] = array('Ústí nad Labem hl.n.;7:15','Praha hl.n.;8:27');
$trasa['604_1'] = array('Praha hl.n.;17:28','Ústí nad Labem hl.n.;18:40');
$trasa['605_1'] = array('Ústí nad Labem hl.n.;9:15','Praha hl.n.;10:27');
$trasa['606_1'] = array('Praha hl.n.;15:28','Ústí nad Labem hl.n.;16:40');
$trasa['607_1'] = array('Ústí nad Labem hl.n.;11:15','Praha hl.n.;12:27');
$trasa['608_1'] = array('Praha hl.n.;13:28','Ústí nad Labem hl.n.;14:40');
$trasa['609_1'] = array('Ústí nad Labem hl.n.;13:15','Praha hl.n.;14:27');
$trasa['610_1'] = array('Praha hl.n.;11:28','Ústí nad Labem hl.n.;12:40');
$trasa['611_1'] = array('Ústí nad Labem hl.n.;15:15','Praha hl.n.;16:27');
$trasa['612_1'] = array('Praha hl.n.;9:28','Ústí nad Labem hl.n.;10:40');
$trasa['613_1'] = array('Ústí nad Labem hl.n.;17:15','Praha hl.n.;18:27');
$trasa['614_1'] = array('Praha hl.n.;7:28','Ústí nad Labem hl.n.;8:40');
$trasa['615_1'] = array('Ústí nad Labem hl.n.;19:15','Praha hl.n.;20:27');
$trasa['616_1'] = array('Praha hl.n.;5:18','Ústí nad Labem hl.n.;6:40');
$trasa['617_1'] = array('Ústí nad Labem hl.n.;21:15','Praha hl.n.;22:27');

$trasa['640_1'] = array('Bohumín;20:02', 'Olomouc hl.n.;21:19');
$trasa['641_1'] = array('Olomouc hl.n.;6:41', 'Bohumín;8:02');





@$ts143 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>