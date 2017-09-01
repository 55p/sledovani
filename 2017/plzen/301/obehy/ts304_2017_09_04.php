<?php 
$zacatekPlatnosti = '4.9.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['7831_1', '1966_1', '768_1', '757_1', '760_1', '765_1', '752_1', '351_1', '352_1'];
$obeh[2] = ['356_1', '755_1', '762_1', '763_1', '351_2', '352_2', '763_2', '754_1'];
$obeh[3] = ['605_1', '612_1', '613_1', '604_1'];
$obeh[4] = ['7000_1', '607_1', '610_1', '615_1', '602_1'];
$obeh[5] = ['603_1', '7021_1', '1695_1', '614_1', '611_1', '606_1'];
$obeh[6] = ['1691_1', '603_2', '616_1', '609_1', '608_1', '617_1'];
$obeh[7] = ['616_2', '609_2', '1694_1'];
$obeh[8] = ['753_1', '764_1', '761_1', '756_1', '757_2', '760_2', '765_2', '752_2'];

$omezeni['1691_1'] = 'X';
$omezeni['1694_1'] = 'X';
$omezeni['1695_1'] = 'X';
$omezeni['1966_1'] = 'X';
$omezeni['351_1'] = 'T';
$omezeni['351_2'] = 'X6';
$omezeni['352_1'] = 'T';
$omezeni['352_2'] = 'X6';
$omezeni['356_1'] = 'T';
$omezeni['603_1'] = '25';
$omezeni['603_2'] = 'X';
$omezeni['609_1'] = '25';
$omezeni['609_2'] = 'X';
$omezeni['616_1'] = '25';
$omezeni['616_2'] = 'X';
$omezeni['7000_1'] = 'X';
$omezeni['7021_1'] = 'X';
$omezeni['752_1'] = 'X';
$omezeni['752_2'] = 'T';
$omezeni['753_1'] = 'X6';
$omezeni['755_1'] = 'T';
$omezeni['756_1'] = 'X6';
$omezeni['757_1'] = 'X6';
$omezeni['757_2'] = 'T';
$omezeni['760_1'] = 'X6';
$omezeni['760_2'] = 'T';
$omezeni['761_1'] = 'X6';
$omezeni['762_1'] = 'T';
$omezeni['763_1'] = 'T';
$omezeni['763_2'] = 'X6';
$omezeni['764_1'] = 'X6';
$omezeni['765_1'] = 'X6';
$omezeni['765_2'] = 'T';
$omezeni['768_1'] = 'X6';
$omezeni['7831_1'] = 'X';

$trasa['351_1'] = ['Plzeň hl.n.;9:06','Praha hl.n.;10:41'];
$trasa['351_2'] = ['Plzeň hl.n.;9:06','Praha hl.n.;10:41'];
$trasa['352_1'] = ['Praha hl.n.;13:12','Plzeň hl.n.;14:49'];
$trasa['352_2'] = ['Praha hl.n.;13:12','Plzeň hl.n.;14:49'];
$trasa['356_1'] = ['Praha hl.n.;5:12','Plzeň hl.n.;6:49'];
$trasa['602_1'] = ['Ústí nad Labem hl.n.;20:46','Chomutov;21:49'];
$trasa['603_1'] = ['Chomutov;6:05','Ústí nad Labem hl.n.;7:09'];
$trasa['603_2'] = ['Chomutov;6:05','Ústí nad Labem hl.n.;7:09'];
$trasa['604_1'] = ['Ústí nad Labem hl.n.;18:46','Cheb;21:32'];
$trasa['605_1'] = ['Cheb;6:25','Ústí nad Labem hl.n.;9:09'];
$trasa['606_1'] = ['Ústí nad Labem hl.n.;16:46','Cheb;19:30'];
$trasa['607_1'] = ['Cheb;8:27','Ústí nad Labem hl.n.;11:09'];
$trasa['608_1'] = ['Ústí nad Labem hl.n.;14:46','Cheb;17:30'];
$trasa['609_1'] = ['Cheb;10:27','Ústí nad Labem hl.n.;13:09'];
$trasa['609_2'] = ['Cheb;10:27','Ústí nad Labem hl.n.;13:09'];
$trasa['610_1'] = ['Ústí nad Labem hl.n.;12:46','Cheb;15:30'];
$trasa['611_1'] = ['Cheb;12:27','Ústí nad Labem hl.n.;15:09'];
$trasa['612_1'] = ['Ústí nad Labem hl.n.;10:46','Cheb;13:30'];
$trasa['613_1'] = ['Cheb;14:27','Ústí nad Labem hl.n.;17:09'];
$trasa['614_1'] = ['Ústí nad Labem hl.n.;8:46','Cheb;11:30'];
$trasa['615_1'] = ['Cheb;16:27','Ústí nad Labem hl.n.;19:09'];
$trasa['616_1'] = ['Ústí nad Labem hl.n.;6:46','Cheb;9:30'];
$trasa['616_2'] = ['Ústí nad Labem hl.n.;6:46','Cheb;9:30'];
$trasa['617_1'] = ['Cheb;18:27','Ústí nad Labem hl.n.;21:09'];

$trasa['1691_1'] = ['Cheb;4:00', 'Chomutov;5:58'];
$trasa['1695_1'] = ['Karlovy Vary;5:58', 'Ústí nad Labem hl.n.;8:08'];
$trasa['7000_1'] = ['Chomutov;5:08', 'Cheb;7:22'];
$trasa['752_2'] = ['Praha hl.n.;20:12', 'Plzeň hl.n.;21:49'];
$trasa['754_1'] = ['Praha hl.n.;18:12', 'Cheb;21:26'];
$trasa['756_1'] = ['Praha hl.n.;16:12', 'Plzeň hl.n.;17:49'];
$trasa['757_2'] = ['Cheb;8:34', 'Praha hl.n.;11:41'];
$trasa['760_2'] = ['Praha hl.n.;12:12', 'Cheb;15:23'];
$trasa['762_1'] = ['Praha hl.n.;10:12', 'Mariánské Lázně;12:46'];
$trasa['763_2'] = ['Plzeň hl.n.;16:06', 'Praha hl.n.;17:41'];
$trasa['765_1'] = ['Cheb;16:34', 'Praha hl.n.;19:41'];
$trasa['768_1'] = ['Plzeň hl.n.;6:04', 'Cheb;7:24'];
$trasa['1694_1'] = ['Ústí nad Labem hl.n.;13:45', 'Cheb;17:07'];
$trasa['1966_1'] = ['Rokycany;5:27', 'Plzeň hl.n.;5:49'];
$trasa['7021_1'] = ['Cheb;4:25', 'Karlovy Vary;5:20'];
$trasa['752_1'] = ['Praha hl.n.;20:12', 'Plzeň hl.n.;21:49'];
$trasa['753_1'] = ['Cheb;4:32', 'Praha hl.n.;7:41'];
$trasa['755_1'] = ['Plzeň hl.n.;8:06', 'Praha hl.n.;9:41'];
$trasa['757_1'] = ['Cheb;8:34', 'Praha hl.n.;11:41'];
$trasa['760_1'] = ['Praha hl.n.;12:12', 'Cheb;15:23'];
$trasa['761_1'] = ['Cheb;12:34', 'Praha hl.n.;15:41'];
$trasa['763_1'] = ['Mariánské Lázně;15:06', 'Praha hl.n.;17:41'];
$trasa['764_1'] = ['Praha hl.n.;8:12', 'Cheb;11:28'];
$trasa['765_2'] = ['Cheb;16:34', 'Praha hl.n.;19:41'];
$trasa['7831_1'] = ['Plzeň hl.n.;4:41', 'Rokycany;5:07'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts304 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


