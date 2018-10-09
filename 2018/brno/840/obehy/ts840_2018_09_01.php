<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4829_1', '11489_1', '11488_1', '4814_1', '4817_1', '4850_1', '24881_1', '1869_1', '4831_1', '4808_1', '4813_1', '4840_1', '4847_1', '4850_2'];
$obeh[2] = ['4825_1', '4824_1', '4807_1', '4808_2', '4876_1', '4813_2', '4840_2', '4847_2', '4848_1', '4801_1', '4806_1', '4811_1', '4834_1', '4841_1', '4844_1'];
$obeh[3] = ['4823_1', '4822_1', '4868_1', '4809_1', '4810_1', '4879_1', '4815_1', '4844_2', '24889_1', '4829_2', '4826_1', '4833_1', '4810_2', '4815_2', '4848_2'];

$omezeni['1869_1'] = '6';
$omezeni['4801_1'] = '25';
$omezeni['4806_1'] = '25';
$omezeni['4807_1'] = 'X';
$omezeni['4808_2'] = 'X';
$omezeni['4808_1'] = '25';
$omezeni['4809_1'] = 'X';
$omezeni['4810_2'] = '25';
$omezeni['4810_1'] = 'X';
$omezeni['4811_1'] = '25';
$omezeni['4813_1'] = '25';
$omezeni['4813_2'] = 'X';
$omezeni['4814_1'] = 'X';
$omezeni['4815_2'] = '25';
$omezeni['4815_1'] = 'X';
$omezeni['4817_1'] = 'X';
$omezeni['4822_1'] = 'X';
$omezeni['4823_1'] = 'X';
$omezeni['4824_1'] = 'X';
$omezeni['4825_1'] = 'X';
$omezeni['4826_1'] = '25';
$omezeni['4829_1'] = 'X';
$omezeni['4829_2'] = '25';
$omezeni['4831_1'] = 'T';
$omezeni['4833_1'] = '25';
$omezeni['4834_1'] = '25';
$omezeni['4840_1'] = '25';
$omezeni['4840_2'] = 'X';
$omezeni['4841_1'] = '25';
$omezeni['4844_1'] = '25';
$omezeni['4844_2'] = 'X';
$omezeni['4847_2'] = 'X';
$omezeni['4847_1'] = '25';
$omezeni['4848_2'] = '25';
$omezeni['4848_1'] = 'X';
$omezeni['4850_2'] = '25';
$omezeni['4850_1'] = 'X';
$omezeni['4868_1'] = 'X';
$omezeni['4876_1'] = 'X';
$omezeni['4879_1'] = 'X';
$omezeni['11488_1'] = 'X';
$omezeni['11489_1'] = 'X';
$omezeni['24881_1'] = '6';
$omezeni['24889_1'] = 'X5';

$trasa['4807_1'] = ['Třebíč;8:42','Zastávka u Brna;9:36'];
$trasa['4808_2'] = ['Zastávka u Brna;10:19','Třebíč;11:14'];
$trasa['4809_1'] = ['Jihlava;9:30','Zastávka u Brna;11:37'];
$trasa['4810_1'] = ['Zastávka u Brna;12:19','Jihlava;14:22'];
$trasa['4813_2'] = ['Jihlava;13:30','Zastávka u Brna;15:36'];
$trasa['4814_1'] = ['Zastávka u Brna;14:21','Jihlava;16:27'];
$trasa['4815_1'] = ['Jihlava;15:30','Zastávka u Brna;17:37'];
$trasa['4817_1'] = ['Jihlava;17:30','Zastávka u Brna;19:37'];
$trasa['4822_1'] = ['Zastávka u Brna;6:12','Třebíč;7:07'];
$trasa['4823_1'] = ['Okříšky;3:57','Zastávka u Brna;5:09'];
$trasa['4824_1'] = ['Zastávka u Brna;7:11','Třebíč;8:15'];
$trasa['4825_1'] = ['Náměšť nad Oslavou;5:12','Zastávka u Brna;5:39'];
$trasa['4829_1'] = ['Náměšť nad Oslavou;7:12','Zastávka u Brna;7:36'];
$trasa['4840_2'] = ['Zastávka u Brna;17:13','Náměšť nad Oslavou;17:40'];
$trasa['4844_2'] = ['Zastávka u Brna;18:19','Náměšť nad Oslavou;18:47'];
$trasa['4847_2'] = ['Náměšť nad Oslavou;18:19','Zastávka u Brna;18:43'];
$trasa['4848_1'] = ['Zastávka u Brna;19:13','Okříšky;20:33'];
$trasa['4850_1'] = ['Zastávka u Brna;20:20','Náměšť nad Oslavou;20:47'];
$trasa['11488_1'] = ['Brno-Horní Heršpice;13:39','Zastávka u Brna;14:00'];
$trasa['11489_1'] = ['Zastávka u Brna;7:55','Brno-Horní Heršpice;8:35'];
$trasa['1869_1'] = ['Náměšť nad Oslavou;6:47', 'Brno hl.n.;7:38'];
$trasa['24881_1'] = ['Okříšky;5:52', 'Náměšť nad Oslavou;6:41'];
$trasa['24889_1'] = ['Třebíč;22:23', 'Náměšť nad Oslavou;22:45'];
$trasa['4801_1'] = ['Náměšť nad Oslavou;6:16', 'Brno hl.n.;7:10'];
$trasa['4806_1'] = ['Brno hl.n.;7:45', 'Jihlava;10:19'];
$trasa['4808_1'] = ['Brno hl.n.;9:45', 'Jihlava;12:20'];
$trasa['4810_2'] = ['Brno hl.n.;11:45', 'Jihlava;14:22'];
$trasa['4811_1'] = ['Jihlava;11:30', 'Brno hl.n.;14:10'];
$trasa['4813_1'] = ['Jihlava;13:30', 'Brno hl.n.;16:10'];
$trasa['4815_2'] = ['Jihlava;15:30', 'Brno hl.n.;18:10'];
$trasa['4826_1'] = ['Brno hl.n.;8:42', 'Náměšť nad Oslavou;9:39'];
$trasa['4829_2'] = ['Náměšť nad Oslavou;7:12', 'Brno hl.n.;8:10'];
$trasa['4831_1'] = ['Okříšky;7:19', 'Brno hl.n.;9:13'];
$trasa['4833_1'] = ['Náměšť nad Oslavou;10:19', 'Brno hl.n.;11:13'];
$trasa['4834_1'] = ['Brno hl.n.;14:45', 'Náměšť nad Oslavou;15:39'];
$trasa['4840_1'] = ['Brno hl.n.;16:42', 'Náměšť nad Oslavou;17:40'];
$trasa['4841_1'] = ['Náměšť nad Oslavou;16:16', 'Brno hl.n.;17:14'];
$trasa['4844_1'] = ['Brno hl.n.;17:45', 'Náměšť nad Oslavou;18:47'];
$trasa['4847_1'] = ['Náměšť nad Oslavou;18:19', 'Brno hl.n.;19:12'];
$trasa['4848_2'] = ['Brno hl.n.;18:42', 'Okříšky;20:33'];
$trasa['4850_2'] = ['Brno hl.n.;19:45', 'Náměšť nad Oslavou;20:47'];
$trasa['4868_1'] = ['Třebíč;7:36', 'Jihlava;8:27'];
$trasa['4876_1'] = ['Třebíč;12:07', 'Jihlava;13:04'];
$trasa['4879_1'] = ['Jihlava;14:53', 'Třebíč;15:52'];
//sem patri stazene trasy




$typ['11489_1'] = 'Sv';
$typ['11488_1'] = 'Sv';
$typ['24881_1'] = 'Os';
$typ['24889_1'] = 'Os';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts840 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


