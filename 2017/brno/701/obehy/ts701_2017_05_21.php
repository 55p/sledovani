<?php 
$zacatekPlatnosti = '21.5.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4827_1', '4822_1', '4868_1', '14870_1', '14867_1'];
$obeh[2] = ['4813_1', '4816_1'];
$obeh[3] = ['653_1', '664_1', '665_1', '652_1'];
$obeh[4] = ['4831_1', '651_1', '666_2', '663_1', '660_1', '669_1', '4856_1', '4856_2'];
$obeh[5] = ['4821_1', '4801_1', '4860_1', '1869_1', '668_1', '661_1', '662_1', '667_1', '650_1', '4848_1'];
$obeh[6] = ['4801_2', '4824_1', '4807_1', '4808_1', '4876_1', '104813_1', '4834_1'];

$omezeni['104813_1'] = 'X';
$omezeni['14867_1'] = 'X';
$omezeni['14870_1'] = 'X';
$omezeni['1869_1'] = 'X';
$omezeni['4801_1'] = 'T';
$omezeni['4801_2'] = 'X';
$omezeni['4807_1'] = 'X';
$omezeni['4808_1'] = 'X';
$omezeni['4813_1'] = 'X';
$omezeni['4816_1'] = 'X';
$omezeni['4821_1'] = '6';
$omezeni['4822_1'] = 'X';
$omezeni['4824_1'] = 'X';
$omezeni['4827_1'] = 'X';
$omezeni['4831_1'] = 'T';
$omezeni['4834_1'] = 'X';
$omezeni['4848_1'] = '6';
$omezeni['4856_1'] = 'XT';
$omezeni['4856_2'] = '6';
$omezeni['4860_1'] = 'X';
$omezeni['4868_1'] = 'X';
$omezeni['4876_1'] = 'X';
$omezeni['650_1'] = 'XT';
$omezeni['651_1'] = 'X6';

$trasa['104813_1'] = ['Jihlava;13:30','Náměšť nad Oslavou;15:09'];
$trasa['14867_1'] = ['Havlíčkův Brod;17:13','Jihlava;17:42'];
$trasa['14870_1'] = ['Jihlava;12:37','Havlíčkův Brod;13:05'];
$trasa['1869_1'] = ['Jihlava;5:30','Náměšť nad Oslavou;6:43'];
$trasa['4801_1'] = ['Okříšky;5:24','Náměšť nad Oslavou;6:08'];
$trasa['4801_2'] = ['Jihlava;4:41','Náměšť nad Oslavou;6:08'];
$trasa['4807_1'] = ['Třebíč;8:39','Náměšť nad Oslavou;9:06'];
$trasa['4808_1'] = ['Náměšť nad Oslavou;10:47','Třebíč;11:15'];
$trasa['4813_1'] = ['Jihlava;13:30','Náměšť nad Oslavou;15:09'];
$trasa['4816_1'] = ['Náměšť nad Oslavou;16:47','Jihlava;18:23'];
$trasa['4821_1'] = ['Třebíč;3:47','Náměšť nad Oslavou;4:11'];
$trasa['4822_1'] = ['Náměšť nad Oslavou;7:09','Třebíč;7:09'];
$trasa['4824_1'] = ['Náměšť nad Oslavou;7:47','Třebíč;8:15'];
$trasa['4827_1'] = ['Okříšky;4:48','Náměšť nad Oslavou;5:41'];
$trasa['4831_1'] = ['Okříšky;7:15','Náměšť nad Oslavou;8:04'];
$trasa['4834_1'] = ['Náměšť nad Oslavou;15:47','Okříšky;16:29'];
$trasa['4848_1'] = ['Náměšť nad Oslavou;19:49','Okříšky;20:33'];
$trasa['4856_1'] = ['Náměšť nad Oslavou;23:41','Třebíč;0:05'];
$trasa['4856_2'] = ['Náměšť nad Oslavou;23:41','Okříšky;0:22'];
$trasa['4860_1'] = ['Třebíč;4:14','Jihlava;5:08'];
$trasa['4868_1'] = ['Třebíč;7:35','Jihlava;8:27'];
$trasa['4876_1'] = ['Třebíč;12:07','Jihlava;13:04'];
$trasa['650_1'] = ['Náměšť nad Oslavou;20:07','Jihlava;21:18'];
$trasa['651_1'] = ['Jihlava;6:40','Náměšť nad Oslavou;7:46'];
$trasa['652_1'] = ['Náměšť nad Oslavou;18:07','Jihlava;19:18'];
$trasa['653_1'] = ['Jihlava;8:40','Náměšť nad Oslavou;9:46'];
$trasa['660_1'] = ['Náměšť nad Oslavou;16:07','Jihlava;17:18'];
$trasa['661_1'] = ['Jihlava;10:40','Náměšť nad Oslavou;11:46'];
$trasa['662_1'] = ['Náměšť nad Oslavou;14:07','Jihlava;15:18'];
$trasa['663_1'] = ['Jihlava;12:40','Náměšť nad Oslavou;13:46'];
$trasa['664_1'] = ['Náměšť nad Oslavou;12:07','Jihlava;13:18'];
$trasa['666_2'] = ['Náměšť nad Oslavou;10:07','Jihlava;11:18'];
$trasa['665_1'] = ['Jihlava;14:40','Náměšť nad Oslavou;15:46'];
$trasa['667_1'] = ['Jihlava;16:40','Náměšť nad Oslavou;17:46'];
$trasa['668_1'] = ['Náměšť nad Oslavou;8:07','Jihlava;9:18'];
$trasa['669_1'] = ['Jihlava;18:40','Náměšť nad Oslavou;19:46'];

$poznamkaObehu['4813_1'] = ['vl', 'vlaková'];
$poznamkaObehu['104813_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts701 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);
