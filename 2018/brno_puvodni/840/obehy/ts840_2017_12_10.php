<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4163_1', '4108_1', '4808_1', '4876_1', '24881_1', '1869_1', '4831_1', '4808_2', '4813_1', '4840_1', '4847_1', '4840_2', '4847_2', '4850_1'];
$obeh[2] = ['4825_1', '4824_1', '4807_1', '4801_1', '4806_1', '4811_1', '4832_1', '4841_1', '4834_1', '4841_2', '4844_1', '4844_2'];
$obeh[3] = ['4829_1', '4826_1', '4833_1', '4826_2', '4833_2', '4810_1', '4879_1', '4815_1', '4815_2'];
$obeh[4] = ['4823_1', '4801_2', '4115_1', '4116_1', '4121_1', '12210_1', '21992_1'];
$obeh[5] = ['4102_1', '4107_1', '4107_2', '4112_1', '4117_1', '4118_1', '4123_1'];
$obeh[6] = ['112203_1', '12204_1', '1720_1', '4106_1', '4111_1', '4114_1', '4119_1', '4120_1', '4125_1', '4125_2'];

$omezeni['112203_1'] = '6';
$omezeni['12204_1'] = '6';
$omezeni['12210_1'] = 'X';
$omezeni['1720_1'] = '25';
$omezeni['1869_1'] = '6';
$omezeni['21992_1'] = '25';
$omezeni['24881_1'] = '6';
$omezeni['4102_1'] = 'X';
$omezeni['4106_1'] = 'X';
$omezeni['4107_1'] = 'X';
$omezeni['4107_2'] = '25';
$omezeni['4108_1'] = 'X';
$omezeni['4125_1'] = 'X1234';
$omezeni['4125_2'] = 'T';
$omezeni['4163_1'] = 'X1';
$omezeni['4801_1'] = 'T';
$omezeni['4801_2'] = '6';
$omezeni['4806_1'] = '25';
$omezeni['4807_1'] = 'X';
$omezeni['4808_1'] = 'X';
$omezeni['4808_2'] = '25';
$omezeni['4811_1'] = '25';
$omezeni['4815_1'] = 'X';
$omezeni['4815_2'] = '25';
$omezeni['4823_1'] = 'X';
$omezeni['4824_1'] = 'X';
$omezeni['4825_1'] = 'X';
$omezeni['4826_1'] = 'X';
$omezeni['4826_2'] = '25';
$omezeni['4831_1'] = 'T';
$omezeni['4832_1'] = 'X';
$omezeni['4833_1'] = 'X';
$omezeni['4833_2'] = '25';
$omezeni['4834_1'] = '25';
$omezeni['4840_1'] = 'X';
$omezeni['4840_2'] = '25';
$omezeni['4841_1'] = 'X';
$omezeni['4841_2'] = '25';
$omezeni['4844_1'] = 'X5';
$omezeni['4844_2'] = 'X1234,25';
$omezeni['4847_1'] = 'X';
$omezeni['4847_2'] = '25';
$omezeni['4876_1'] = 'X';
$omezeni['4879_1'] = 'X';

$trasa['112203_1'] = ['Veselí nad Moravou;5:16','Uherské Hradiště;5:35'];
$trasa['21992_1'] = ['Staré Město u Uherského Hradiště;18:42','Veselí nad Moravou;19:22'];
$trasa['24881_1'] = ['Okříšky;5:52','Náměšť nad Oslavou;6:41'];
$trasa['4163_1'] = ['Kyjov;5:07','Veselí nad Moravou;5:35'];
$trasa['12204_1'] = ['Uherské Hradiště;5:42', 'Veselí nad Moravou;6:00'];
$trasa['12210_1'] = ['Staré Město u Uherského Hradiště;20:06', 'Veselí nad Moravou;20:59'];
$trasa['1720_1'] = ['Veselí nad Moravou;6:01', 'Brno hl.n.;7:33'];
$trasa['1869_1'] = ['Náměšť nad Oslavou;6:47', 'Brno hl.n.;7:38'];
$trasa['4102_1'] = ['Veselí nad Moravou;3:57', 'Brno hl.n.;5:50'];
$trasa['4106_1'] = ['Veselí nad Moravou;5:23', 'Brno hl.n.;7:20'];
$trasa['4107_1'] = ['Brno hl.n.;6:12', 'Uherské Hradiště;8:28'];
$trasa['4107_2'] = ['Veselí nad Moravou;8:07', 'Uherské Hradiště;8:28'];
$trasa['4108_1'] = ['Veselí nad Moravou;6:23', 'Brno hl.n.;8:20'];
$trasa['4111_1'] = ['Brno hl.n.;8:12', 'Uherské Hradiště;10:28'];
$trasa['4112_1'] = ['Uherské Hradiště;9:32', 'Brno hl.n.;11:48'];
$trasa['4114_1'] = ['Uherské Hradiště;11:32', 'Brno hl.n.;13:48'];
$trasa['4115_1'] = ['Brno hl.n.;10:15', 'Uherské Hradiště;12:28'];
$trasa['4116_1'] = ['Uherské Hradiště;13:32', 'Brno hl.n.;15:48'];
$trasa['4117_1'] = ['Brno hl.n.;12:15', 'Uherské Hradiště;14:28'];
$trasa['4118_1'] = ['Uherské Hradiště;15:32', 'Brno hl.n.;17:48'];
$trasa['4119_1'] = ['Brno hl.n.;14:14', 'Uherské Hradiště;16:28'];
$trasa['4120_1'] = ['Uherské Hradiště;17:32', 'Brno hl.n.;19:48'];
$trasa['4121_1'] = ['Brno hl.n.;16:14', 'Staré Město u Uherského Hradiště;18:35'];
$trasa['4123_1'] = ['Brno hl.n.;18:15', 'Veselí nad Moravou;20:05'];
$trasa['4125_1'] = ['Brno hl.n.;20:15', 'Veselí nad Moravou;22:05'];
$trasa['4125_2'] = ['Brno hl.n.;20:15', 'Kyjov;21:36'];
$trasa['4801_1'] = ['Náměšť nad Oslavou;6:16', 'Brno hl.n.;7:10'];
$trasa['4801_2'] = ['Náměšť nad Oslavou;6:16', 'Brno hl.n.;7:10'];
$trasa['4806_1'] = ['Brno hl.n.;7:45', 'Jihlava;10:19'];
$trasa['4807_1'] = ['Třebíč;8:42', 'Brno hl.n.;10:10'];
$trasa['4808_1'] = ['Brno hl.n.;9:45', 'Třebíč;11:14'];
$trasa['4808_2'] = ['Brno hl.n.;9:45', 'Jihlava;12:20'];
$trasa['4810_1'] = ['Brno hl.n.;11:45', 'Jihlava;14:22'];
$trasa['4811_1'] = ['Jihlava;11:30', 'Brno hl.n.;14:10'];
$trasa['4813_1'] = ['Jihlava;13:30', 'Brno hl.n.;16:10'];
$trasa['4815_1'] = ['Třebíč;16:40', 'Brno hl.n.;18:10'];
$trasa['4815_2'] = ['Jihlava;15:30', 'Brno hl.n.;18:10'];
$trasa['4823_1'] = ['Okříšky;3:57', 'Brno hl.n.;5:37'];
$trasa['4824_1'] = ['Brno hl.n.;6:39', 'Třebíč;8:15'];
$trasa['4825_1'] = ['Náměšť nad Oslavou;5:12', 'Brno hl.n.;6:10'];
$trasa['4826_1'] = ['Brno hl.n.;8:42', 'Náměšť nad Oslavou;9:39'];
$trasa['4826_2'] = ['Brno hl.n.;8:42', 'Zastávka u Brna;9:12'];
$trasa['4829_1'] = ['Náměšť nad Oslavou;7:12', 'Brno hl.n.;8:10'];
$trasa['4831_1'] = ['Okříšky;7:19', 'Brno hl.n.;9:13'];
$trasa['4832_1'] = ['Brno hl.n.;14:12', 'Náměšť nad Oslavou;15:11'];
$trasa['4833_1'] = ['Náměšť nad Oslavou;10:19', 'Brno hl.n.;11:13'];
$trasa['4833_2'] = ['Zastávka u Brna;10:44', 'Brno hl.n.;11:13'];
$trasa['4834_1'] = ['Brno hl.n.;14:45', 'Zastávka u Brna;15:14'];
$trasa['4840_1'] = ['Brno hl.n.;16:42', 'Náměšť nad Oslavou;17:40'];
$trasa['4840_2'] = ['Brno hl.n.;16:42', 'Zastávka u Brna;17:12'];
$trasa['4841_1'] = ['Náměšť nad Oslavou;16:16', 'Brno hl.n.;17:14'];
$trasa['4841_2'] = ['Zastávka u Brna;16:42', 'Brno hl.n.;17:14'];
$trasa['4844_1'] = ['Brno hl.n.;17:45', 'Třebíč;19:13'];
$trasa['4844_2'] = ['Brno hl.n.;17:45', 'Náměšť nad Oslavou;18:47'];
$trasa['4847_1'] = ['Náměšť nad Oslavou;18:19', 'Brno hl.n.;19:12'];
$trasa['4847_2'] = ['Zastávka u Brna;18:44', 'Brno hl.n.;19:12'];
$trasa['4850_1'] = ['Brno hl.n.;19:45', 'Náměšť nad Oslavou;20:47'];
$trasa['4876_1'] = ['Třebíč;12:07', 'Jihlava;13:04'];
$trasa['4879_1'] = ['Jihlava;14:53', 'Třebíč;15:52'];
//sem patri stazene trasy


$poznamkaObehu['4163_1'] = ['pk', 'postrk'];
$poznamkaObehu['4808_1'] = ['pk', 'postrk'];
$poznamkaObehu['4876_1'] = ['pk', 'postrk'];
$poznamkaObehu['4808_2'] = ['pk', 'postrk'];
$poznamkaObehu['4840_1'] = ['pk', 'postrk'];
$poznamkaObehu['4840_2'] = ['pk', 'postrk'];
$poznamkaObehu['4850_1'] = ['pk', 'postrk'];
$poznamkaObehu['4824_1'] = ['pk', 'postrk'];
$poznamkaObehu['4806_1'] = ['pk', 'postrk'];
$poznamkaObehu['4832_1'] = ['pk', 'postrk'];
$poznamkaObehu['4834_1'] = ['pk', 'postrk'];
$poznamkaObehu['4826_1'] = ['pk', 'postrk'];
$poznamkaObehu['4826_2'] = ['pk', 'postrk'];
$poznamkaObehu['4810_1'] = ['pk', 'postrk'];
$poznamkaObehu['4115_1'] = ['pk', 'postrk'];
$poznamkaObehu['4121_1'] = ['pk', 'postrk'];
$poznamkaObehu['4107_1'] = ['pk', 'postrk'];
$poznamkaObehu['4107_2'] = ['pk', 'postrk'];
$poznamkaObehu['4117_1'] = ['pk', 'postrk'];
$poznamkaObehu['4123_1'] = ['pk', 'postrk'];
$poznamkaObehu['4111_1'] = ['pk', 'postrk'];
$poznamkaObehu['4119_1'] = ['pk', 'postrk'];

$poznamkaObehu['112203_1'] = ['vlož', 'vložená'];

$typ['21992_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts840 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


