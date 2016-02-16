<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4140_1', '4822_1', '4868_1', '4809_1', '4814_1', '4817_1', '4852_1', '4889_1', '1723_1', '1728_1', '1731_1', '4343_1', '104316_1', '112266_1', '12210_1', '1738_1');
$obeh[2] = array('4860_1', '1869_1', '1723_2', '12261_1', '12260_1', '1728_2', '4149_1', '4154_1', '4864_1', '4807_1', '4828_1', '4835_1', '1735_1');
//$obeh[3] = array('4302_1', '4110_1', '4141_1', '4181_1', '4143_1', '4148_1', '4151_1', '1722_1', '4334_1', '1724_1', '4814_2', '4817_1', '4852_2', '4852_3');
$obeh[3] = array('4302_1', '4110_1', '4151_1', '1722_1', '4334_1', '1724_1', '4814_2', '4817_1', '4852_2', '4852_3');
$obeh[4] = array('4144_1', '4147_1', '4152_1', '4155_1', '4158_1', '4821_1', '4824_1', '4807_2', '4828_2', '4835_2', '1735_2');

$omezeni['104316_1'] = '6';
$omezeni['112266_1'] = '6';
$omezeni['12210_1'] = '6';
$omezeni['12261_1'] = 'X';
$omezeni['12260_1'] = 'X';
$omezeni['1722_1'] = 'T';
$omezeni['1723_1'] = '25';
$omezeni['1723_2'] = 'X';
$omezeni['1724_1'] = '6';
$omezeni['1728_1'] = '25';
$omezeni['1728_2'] = 'X';
$omezeni['1731_1'] = '25';
$omezeni['1735_1'] = 'X6';
$omezeni['1735_2'] = 'T';
$omezeni['1738_1'] = '6';
$omezeni['1869_1'] = 'X';
$omezeni['4110_1'] = 'X';
$omezeni['4140_1'] = 'X';
$omezeni['4141_1'] = 'X5';
$omezeni['4143_1'] = 'X1234';
$omezeni['4144_1'] = 'X';
$omezeni['4148_1'] = 'X';
$omezeni['4147_1'] = 'X';
$omezeni['4149_1'] = 'X';
$omezeni['4151_1'] = 'X';
$omezeni['4152_1'] = 'X';
$omezeni['4154_1'] = 'X';
$omezeni['4155_1'] = 'X';
$omezeni['4158_1'] = 'X5';
$omezeni['4181_1'] = 'X5';
$omezeni['4302_1'] = 'X';
$omezeni['4334_1'] = '6';
$omezeni['4343_1'] = '6';
$omezeni['4807_1'] = '6';
$omezeni['4807_2'] = 'T';
$omezeni['4809_1'] = 'X';
$omezeni['4817_1'] = 'X';
$omezeni['4814_1'] = 'X';
$omezeni['4814_2'] = '25';
$omezeni['4817_1'] = '25';
$omezeni['4821_1'] = 'T';
$omezeni['4822_1'] = 'X';
$omezeni['4824_1'] = 'T';
$omezeni['4828_1'] = '6';
$omezeni['4828_2'] = 'T';
$omezeni['4835_1'] = '6';
$omezeni['4835_2'] = 'T';
$omezeni['4852_1'] = 'X';
$omezeni['4852_2'] = '6';
$omezeni['4852_3'] = 'T';
$omezeni['4860_1'] = 'X';
$omezeni['4864_1'] = '6';
$omezeni['4868_1'] = 'X';
$omezeni['4889_1'] = 'X1234';

$trasa['12210_1'] = array('Staré Město u Uherského Hradiště;20:24', 'Veselí nad Moravou;20:51');
$trasa['12261_1'] = array('Staré Město u Uherského Hradiště;11:35', 'Uherské Hradiště;11:41');
$trasa['12260_1'] = array('Uherské Hradiště;12:05', 'Staré Město u Uherského Hradiště;12:11');
$trasa['4147_1'] = array('Brno hl.n.;14:47', 'Nemotice;15:51');

$trasa['1722_1'] = array('Bylnice;5:05', 'Brno hl.n.;8:34');
$trasa['1723_1'] = array('Brno hl.n.;9:28', 'Staré Město u Uherského Hradiště;11:27');
$trasa['1723_2'] = array('Brno hl.n.;9:28', 'Staré Město u Uherského Hradiště;11:27');
$trasa['1724_1'] = array('Staré Město u Uherského Hradiště;8:35', 'Brno hl.n.;10:33');
$trasa['1728_1'] = array('Staré Město u Uherského Hradiště;12:35', 'Brno hl.n.;14:33');
$trasa['1728_2'] = array('Staré Město u Uherského Hradiště;12:35', 'Brno hl.n.;14:33');
$trasa['1731_1'] = array('Brno hl.n.;15:28', 'Staré Město u Uherského Hradiště;17:27');
$trasa['1735_1'] = array('Brno hl.n.;19:28', 'Bylnice;22:42');
$trasa['1735_2'] = array('Brno hl.n.;19:28', 'Bylnice;22:42');
$trasa['1738_1'] = array('Veselí nad Moravou;21:01', 'Brno hl.n.;22:33');
$trasa['1869_1'] = array('Jihlava;5:30', 'Brno hl.n.;7:37');
$trasa['4110_1'] = array('Staré Město u Uherského Hradiště;7:33', 'Brno hl.n.;9:48');
$trasa['4140_1'] = array('Nesovice;3:52', 'Brno hl.n.;4:50');
$trasa['4141_1'] = array('Brno hl.n.;11:49', 'Slavkov u Brna;12:20');
$trasa['4143_1'] = array('Brno hl.n.;12:49', 'Nemotice;13:51');
$trasa['4144_1'] = array('Kyjov;4:55', 'Brno hl.n.;6:20');
$trasa['4148_1'] = array('Nemotice;14:11', 'Brno-Židenice;15:11');
$trasa['4149_1'] = array('Brno hl.n.;15:48', 'Nemotice;16:53');
$trasa['4151_1'] = array('Brno hl.n.;16:47', 'Kyjov;18:06');
$trasa['4152_1'] = array('Nemotice;16:11', 'Brno-Židenice;17:11');
$trasa['4154_1'] = array('Nemotice;17:11', 'Brno-Židenice;18:11');
$trasa['4155_1'] = array('Brno hl.n.;18:48', 'Nesovice;19:43');
$trasa['4158_1'] = array('Nesovice;20:51', 'Brno hl.n.;21:48');
$trasa['4181_1'] = array('Slavkov u Brna;13:27', 'Nemotice;13:54');
$trasa['4302_1'] = array('Bylnice;5:45', 'Staré Město u Uherského Hradiště;7:23');
$trasa['4334_1'] = array('Bylnice;6:30', 'Staré Město u Uherského Hradiště;7:51');
$trasa['4343_1'] = array('Staré Město u Uherského Hradiště;18:05', 'Uherský Brod;18:53');
$trasa['4807_1'] = array('Jihlava;7:30', 'Brno hl.n.;10:12');
$trasa['4807_2'] = array('Náměšť nad Oslavou;9:13', 'Brno hl.n.;10:12');
$trasa['4809_1'] = array('Jihlava;9:30', 'Brno hl.n.;12:12');
$trasa['4817_1'] = array('Jihlava;17:30', 'Brno hl.n.;20:12');
$trasa['4814_1'] = array('Brno hl.n.;13:39', 'Jihlava;16:27');
$trasa['4814_2'] = array('Brno hl.n.;13:39', 'Jihlava;16:27');
$trasa['4817_1'] = array('Jihlava;17:30', 'Brno hl.n.;20:12');
$trasa['4821_1'] = array('Třebíč;3:47', 'Brno hl.n.;5:12');
$trasa['4822_1'] = array('Brno hl.n.;5:39', 'Třebíč;7:09');
$trasa['4824_1'] = array('Brno hl.n.;6:39', 'Náměšť nad Oslavou;7:43');
$trasa['4828'] = array('Brno hl.n.;10:39', 'Náměšť nad Oslavou;11: 43');
$trasa['4835'] = array('Náměšť nad Oslavou;12:13', 'Brno hl.n.;13:12');
$trasa['4852_1'] = array('Brno hl.n.;20:39', 'Okříšky;22:38');
$trasa['4852_2'] = array('Brno hl.n.;20:39', 'Třebíč;22:09');
$trasa['4852_3'] = array('Brno hl.n.;20:39', 'Okříšky;22:38');
$trasa['4860_1'] = array('Třebíč;4:14', 'Jihlava;5:08');
$trasa['4864_1'] = array('Náměšť nad Oslavou;5:43', 'Jihlava;7:04');
$trasa['4868_1'] = array('Třebíč;7:35', 'Jihlava;8:27');
$trasa['4889_1'] = array('Okříšky;23:17', 'Třebíč;23:32');
$trasa['104316_1'] = array('Uherský Brod;19:04','Kunovice;19:23');
$trasa['112266_1'] = array('Kunovice;19:28','Staré Město u Uherského Hradiště;19:39');

@$ts844 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>