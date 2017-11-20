<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['442_1', '115_1', '112_1'];
$obeh[2] = ['616_1', '603_1', '612_1', '607_1', '608_1', '611_1', '604_1', '615_1', '899_1'];
$obeh[3] = ['898_1', '141_1', '140_1'];
$obeh[4] = ['547_1', '445_1', '341_1', '142_1', '545_1', '545_2'];
$obeh[5] = ['544_1', '544_2', '513_1'];
$obeh[6] = ['514_1', '143_1', '340_1'];

$omezeni['340_1'] = '12';
$omezeni['341_1'] = '13';
$omezeni['445_1'] = '56_2018';
$omezeni['544_1'] = 'T';
$omezeni['544_2'] = 'X6';
$omezeni['545_1'] = 'XT';
$omezeni['545_2'] = '6';
$omezeni['547_1'] = '55_2018';
$omezeni['603_1'] = '11';
$omezeni['616_1'] = '11';
$omezeni['898_1'] = '11';
$omezeni['899_1'] = '10';

$trasa['112_1'] = ['Bohumín;18:05','Praha hl.n.;21:36'];
$trasa['115_1'] = ['Praha hl.n.;10:24','Bohumín;13:55'];
$trasa['340_1'] = ['Žilina;19:28','Ostrava-Svinov;21:19'];
$trasa['341_1'] = ['Ostrava-Svinov;6:42','Žilina;8:32'];
$trasa['442_1'] = ['Bohumín;3:33','Praha hl.n.;8:21'];
$trasa['445_1'] = ['Praha hl.n.;0:00;2349','Bohumín;3:16'];
$trasa['547_1'] = ['Praha hl.n.;0:00;2339','Bohumín;3:16'];
$trasa['603_1'] = ['Ústí nad Labem hl.n.;7:16','Praha hl.n.;8:29'];
$trasa['604_1'] = ['Praha hl.n.;17:33','Ústí nad Labem hl.n.;18:40'];
$trasa['607_1'] = ['Ústí nad Labem hl.n.;11:16','Praha hl.n.;12:29'];
$trasa['608_1'] = ['Praha hl.n.;13:33','Ústí nad Labem hl.n.;14:40'];
$trasa['611_1'] = ['Ústí nad Labem hl.n.;15:16','Praha hl.n.;16:29'];
$trasa['612_1'] = ['Praha hl.n.;9:33','Ústí nad Labem hl.n.;10:40'];
$trasa['615_1'] = ['Ústí nad Labem hl.n.;19:16','Praha hl.n.;20:36'];
$trasa['616_1'] = ['Praha hl.n.;5:21','Ústí nad Labem hl.n.;6:40'];


$trasa['140_1'] = ['Žilina;14:27', 'Praha hl.n.;19:36'];
$trasa['141_1'] = ['Praha hl.n.;8:24', 'Žilina;13:33'];
$trasa['142_1'] = ['Žilina;10:27', 'Praha hl.n.;15:36'];
$trasa['143_1'] = ['Praha hl.n.;12:24', 'Žilina;17:33'];
$trasa['513_1'] = ['Praha hl.n.;16:42', 'Opava východ;20:01'];
$trasa['514_1'] = ['Opava východ;6:00', 'Praha hl.n.;9:18'];
$trasa['544_1'] = ['Bohumín;5:57', 'Praha hl.n.;9:36'];
$trasa['544_2'] = ['Návsí;5:01', 'Praha hl.n.;9:36'];
$trasa['545_1'] = ['Praha hl.n.;18:24', 'Návsí;22:58'];
$trasa['545_2'] = ['Praha hl.n.;18:24', 'Bohumín;22:00'];
$trasa['898_1'] = ['Olomouc hl.n.;4:29', 'Praha hl.n.;7:04'];
$trasa['899_1'] = ['Praha hl.n.;22:09', 'Olomouc hl.n.;0:43'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts141 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


