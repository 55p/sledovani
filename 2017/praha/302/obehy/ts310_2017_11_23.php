<?php 
$zacatekPlatnosti = '23.11.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['537_1', '700_1'];
$obeh[2] = ['703_1', '718_1', '715_1', '706_1'];
$obeh[3] = array('614_1', '605_1', '610_1', '609_1', '606_1', '613_1', '602_1', '617_1');
$obeh[4] = array('616_1', '603_1', '612_1', '607_1', '608_1', '611_1', '604_1', '615_1');

$trasa['537'] = ['Praha-Holešovice;16:42', 'České Budějovice;19:02'];
$trasa['700'] = ['České Budějovice;20:05', 'Praha hl.n.;22:27'];

$trasa['703'] = ['Praha hl.n.;6:32', 'České Budějovice;8:52'];
$trasa['718'] = ['České Budějovice;10:05', 'Praha-Holešovice;12:46'];
$trasa['715'] = ['Praha-Holešovice;13:12', 'České Budějovice;15:52'];
$trasa['706'] = ['České Budějovice;17:01', 'Praha hl.n.;19:27'];

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

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts310 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


