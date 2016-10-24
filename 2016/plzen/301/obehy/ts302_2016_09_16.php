<?php 
$zacatekPlatnosti = '16.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('768_1', '757_1', '352_1', '763_1', '71710_1', '773_1', '762_1', '763_2', '772_1');
$obeh[2] = array('7511_1', '771_1', '764_1', '611_1', '606_1');
$obeh[3] = array('1691_1', '603_1', '6949_1', '6950_1', '1696_1');
$obeh[4] = array('100601_1', '616_1', '609_1', '608_1', '617_1');
$obeh[5] = array('601_1', '682_1', '1698_1');
$obeh[6] = array('6823_1', '6802_1', '6805_1', '71261_1', '1694_1');
$obeh[7] = array('605_1', '612_1', '613_1', '604_1');
$obeh[8] = array('7000_1', '607_1', '610_1', '615_1', '602_1');
$obeh[9] = array('603_2', '7021_1', '1695_1', '614_1', '761_1', '350_1');

$omezeni['100601_1'] = 'X';
$omezeni['1691_1'] = 'X';
$omezeni['1694_1'] = 'X';
$omezeni['1695_1'] = 'X';
$omezeni['1696_1'] = 'X';
$omezeni['1698_1'] = 'X';
$omezeni['352_1'] = 'X6';
$omezeni['601_1'] = 'X';
$omezeni['603_1'] = 'X';
$omezeni['603_2'] = '25';
$omezeni['6802_1'] = 'X';
$omezeni['6805_1'] = 'X';
$omezeni['6823_1'] = 'X';
$omezeni['682_1'] = 'X';
$omezeni['6949_1'] = 'X';
$omezeni['6950_1'] = 'X';
$omezeni['7000_1'] = 'X';
$omezeni['7021_1'] = 'X';
$omezeni['71261_1'] = 'X';
$omezeni['71710_1'] = 'T';
$omezeni['757_1'] = 'X6';
$omezeni['762_1'] = 'T';
$omezeni['763_1'] = 'X6';
$omezeni['763_2'] = 'T';
$omezeni['768_1'] = 'X6';
$omezeni['773_1'] = 'T';

$trasa['100601_1'] = array('Kadaň-Prunéřov;4:54','Ústí nad Labem hl.n.;6:07');
$trasa['350_1'] = array('Praha hl.n.;17:12','Plzeň hl.n.;18:48');
$trasa['352_1'] = array('Praha hl.n.;13:12','Plzeň hl.n.;14:48');
$trasa['601_1'] = array('Ústí nad Labem hl.n.;6:13','Praha Masarykovo nádraží;7:28');
$trasa['602_1'] = array('Ústí nad Labem hl.n.;20:47','Chomutov;21:48');
$trasa['603'] = array('Chomutov;6:04','Ústí nad Labem hl.n.;7:07');
$trasa['604_1'] = array('Ústí nad Labem hl.n.;18:47','Cheb;21:31');
$trasa['605_1'] = array('Cheb;6:25','Ústí nad Labem hl.n.;9:07');
$trasa['606_1'] = array('Ústí nad Labem hl.n.;16:47','Cheb;19:29');
$trasa['607_1'] = array('Cheb;8:27','Ústí nad Labem hl.n.;11:07');
$trasa['608_1'] = array('Ústí nad Labem hl.n.;14:47','Cheb;17:29');
$trasa['609_1'] = array('Cheb;10:27','Ústí nad Labem hl.n.;13:07');
$trasa['610_1'] = array('Ústí nad Labem hl.n.;12:47','Cheb;15:29');
$trasa['611_1'] = array('Cheb;12:27','Ústí nad Labem hl.n.;15:07');
$trasa['612_1'] = array('Ústí nad Labem hl.n.;10:47','Cheb;13:29');
$trasa['613_1'] = array('Cheb;14:27','Ústí nad Labem hl.n.;17:07');
$trasa['614_1'] = array('Ústí nad Labem hl.n.;8:47','Cheb;11:29');
$trasa['615_1'] = array('Cheb;16:27','Ústí nad Labem hl.n.;19:07');
$trasa['616_1'] = array('Ústí nad Labem hl.n.;6:47','Cheb;9:29');
$trasa['617_1'] = array('Cheb;18:27','Ústí nad Labem hl.n.;21:07');
$trasa['71261_1'] = array('Děčín hl.n.;12:34','Ústí nad Labem hl.n.;13:04');
$trasa['71710_1'] = array('Plzeň hl.n.;4:11','Klatovy;5:31');


$trasa['1691_1'] = array('Cheb;4:00', 'Chomutov;5:56');
$trasa['1694_1'] = array('Ústí nad Labem hl.n.;13:46', 'Cheb;17:07');
$trasa['1695_1'] = array('Karlovy Vary;5:58', 'Ústí nad Labem hl.n.;8:08');
$trasa['1696_1'] = array('Ústí nad Labem hl.n.;15:46', 'Chomutov;16:49');
$trasa['1698_1'] = array('Ústí nad Labem hl.n.;17:46', 'Chomutov;18:49');
$trasa['6802_1'] = array('Děčín hl.n.;7:30', 'Kadaň-Prunéřov;9:29');
$trasa['6805_1'] = array('Kadaň-Prunéřov;10:29', 'Děčín hl.n.;12:24');
$trasa['6823_1'] = array('Chomutov;4:39', 'Děčín hl.n.;6:24');
$trasa['682_1'] = array('Praha Masarykovo nádraží;15:53', 'Ústí nad Labem hl.n.;17:16');
$trasa['6949_1'] = array('Ústí nad Labem hl.n.;12:42', 'Roudnice nad Labem;13:14');
$trasa['6950_1'] = array('Roudnice nad Labem;14:26', 'Ústí nad Labem hl.n.;14:56');
$trasa['7000_1'] = array('Chomutov;5:08', 'Cheb;7:22');
$trasa['7021_1'] = array('Cheb;4:25', 'Karlovy Vary;5:20');
$trasa['7511_1'] = array('Klatovy;4:00', 'Plzeň hl.n.;4:59');
$trasa['757_1'] = array('Cheb;8:34', 'Praha hl.n.;11:41');
$trasa['761_1'] = array('Cheb;12:34', 'Praha hl.n.;15:41');
$trasa['762_1'] = array('Praha hl.n.;10:12', 'Mariánské Lázně;12:46');
$trasa['763_1'] = array('Plzeň hl.n.;16:07', 'Praha hl.n.;17:41');
$trasa['763_2'] = array('Mariánské Lázně;15:07', 'Praha hl.n.;17:41');
$trasa['764_1'] = array('Praha hl.n.;8:12', 'Cheb;11:26');
$trasa['768_1'] = array('Plzeň hl.n.;6:05', 'Cheb;7:24');
$trasa['771_1'] = array('Plzeň hl.n.;5:07', 'Praha hl.n.;6:41');
$trasa['772_1'] = array('Praha hl.n.;19:12', 'Klatovy;21:52');
$trasa['773_1'] = array('Klatovy;6:06', 'Praha hl.n.;8:41');



for ($i = 1540; $i <= 1546; $i++) {
  $typ[$i] = 'R';
}
$typ[350] = 'Ex';
$typ[351] = 'Ex';
$typ[352] = 'Ex';
$typ[353] = 'Ex';
$typ[356] = 'EC';
$typ[357] = 'EC';
$typ[623] = 'R';
$typ[630] = 'R';
$typ[632] = 'R';
$typ[633] = 'R';
$typ[635] = 'R';
$typ[636] = 'R';
$typ[637] = 'R';
$typ[638] = 'R';
$typ[640] = 'R';
$typ[641] = 'R';
$typ[642] = 'R';
$typ[643] = 'R';
$typ[644] = 'R';
$typ[645] = 'R';
$typ[646] = 'R';
$typ[647] = 'R';
$typ[648] = 'R';
$typ[649] = 'R';
$typ[650] = 'R';
$typ[651] = 'R';
$typ[652] = 'R';
$typ[653] = 'R';
$typ[654] = 'R';
$typ[655] = 'R';
$typ[656] = 'R';
$typ[657] = 'R';
$typ[658] = 'R';
$typ[659] = 'R';
$typ[752] = 'Rx';
$typ[753] = 'Rx';
$typ[754] = 'Rx';
$typ[755] = 'Rx';
$typ[756] = 'Rx';
$typ[757] = 'Rx';
$typ[760] = 'Rx';
$typ[761] = 'Rx';
$typ[762] = 'Rx';
$typ[763] = 'Rx';
$typ[764] = 'Rx';
$typ[765] = 'Rx';
$typ[768] = 'Rx';
$typ[770] = 'Rx';
$typ[771] = 'Rx';
$typ[772] = 'Rx';
$typ[773] = 'Rx';
$typ[774] = 'Rx';
$typ[775] = 'Rx';
$typ[776] = 'Rx';
$typ[777] = 'Rx';
$typ[778] = 'Rx';
$typ[779] = 'Rx';
$typ[898] = 'R';
$typ[899] = 'R';

@$ts302 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>