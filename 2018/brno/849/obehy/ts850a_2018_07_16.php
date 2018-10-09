<?php 
$zacatekPlatnosti = '16.7.2018';
$konecPlatnosti = '31.8.2018';

$obeh[1] = ['4822_1', '4868_1', '4809_1', '4812_1', '4819_1', '4814_1', '4817_1', '4852_1', '4821_1', '1723_1', '4114_1', '4119_1', '101732_1'];

$omezeni['1723_1'] = 'T';
$omezeni['4114_1'] = 'T';
$omezeni['4119_1'] = 'T';
$omezeni['4809_1'] = 'X';
$omezeni['4812_1'] = 'X';
$omezeni['4814_1'] = '6';
$omezeni['4817_1'] = '6';
$omezeni['4819_1'] = 'X';
$omezeni['4821_1'] = 'T';
$omezeni['4822_1'] = 'X';
$omezeni['4852_1'] = '6';
$omezeni['4868_1'] = 'X';
$omezeni['101732_1'] = 'T';

$trasa['1723_1'] = ['Brno hl.n.;9:28','Veselí nad Moravou;10:58'];
$trasa['4114_1'] = ['Veselí nad Moravou;11:55','Brno hl.n.;13:48'];
$trasa['4119_1'] = ['Brno hl.n.;14:14','Veselí nad Moravou;16:05'];
$trasa['4809_1'] = ['Jihlava;9:30','Brno-Horní Heršpice;12:10'];
$trasa['4812_1'] = ['Brno-Horní Heršpice;12:48','Jihlava;15:49'];
$trasa['101732_1'] = ['Veselí nad Moravou;17:01','Brno hl.n.;18:33'];
$trasa['4814_1'] = ['Brno hl.n.;13:45', 'Jihlava;16:27'];
$trasa['4817_1'] = ['Jihlava;17:30', 'Brno hl.n.;20:10'];
$trasa['4819_1'] = ['Jihlava;19:33', 'Brno hl.n.;22:10'];
$trasa['4821_1'] = ['Třebíč;3:51', 'Brno hl.n.;5:12'];
$trasa['4822_1'] = ['Brno hl.n.;5:42', 'Třebíč;7:07'];
$trasa['4852_1'] = ['Brno hl.n.;20:45', 'Třebíč;22:07'];
$trasa['4868_1'] = ['Třebíč;7:36', 'Jihlava;8:27'];

$poznamkaObehu['101732_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts850a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


