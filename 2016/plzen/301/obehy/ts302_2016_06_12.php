<?php 
$zacatekPlatnosti = '12.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('601_1', '354_1');
$obeh[2] = array('351_1', '352_1', '355_1', '672_1', '71263_1');
$obeh[3] = array('677_1', '682_1', '1698_1');
$obeh[4] = array('6823_1', '6802_1', '6805_1', '71261_1', '1694_1');
$obeh[5] = array('605_1', '612_1', '613_1', '604_1');
$obeh[6] = array('7000_1', '607_1', '610_1', '615_1', '602_1');
$obeh[7] = array('603_1', '7021_1', '1695_1', '614_1', '611_1', '606_1');
$obeh[8] = array('1691_1', '603_2', '6949_1', '6950_1', '1696_1');
$obeh[9] = array('601_2', '616_1', '609_1', '608_1', '617_1');

$omezeni['1691_1'] = 'X';
$omezeni['1694_1'] = 'X';
$omezeni['1695_1'] = 'X';
$omezeni['1696_1'] = 'X';
$omezeni['1698_1'] = 'X';
$omezeni['351_1'] = 'T';
$omezeni['352_1'] = 'T';
$omezeni['601_1'] = 'X';
$omezeni['601_2'] = 'X';
$omezeni['603_1'] = '25';
$omezeni['603_2'] = 'X';
$omezeni['672_1'] = 'zX';
$omezeni['677_1'] = 'X';
$omezeni['6802_1'] = 'X';
$omezeni['6805_1'] = 'X';
$omezeni['6823_1'] = 'X';
$omezeni['682_1'] = 'X';
$omezeni['6949_1'] = 'X';
$omezeni['6950_1'] = 'X';
$omezeni['7000_1'] = 'X';
$omezeni['7021_1'] = 'X';
$omezeni['71261_1'] = 'X';
$omezeni['71263_1'] = 'zX';

$typ[677] = $typ[682] = 'R';

$trasa['351_1'] = array('Plzeň hl.n.;9:07','Praha hl.n.;10:41');
$trasa['352_1'] = array('Praha hl.n.;13:12','Plzeň hl.n.;14:48');
$trasa['354_1'] = array('Praha hl.n.;9:12','Plzeň hl.n.;10:48');
$trasa['355_1'] = array('Plzeň hl.n.;17:07','Praha hl.n.;18:41');
$trasa['601_1'] = array('Ústí nad Labem hl.n.;6:13','Praha Masarykovo nádraží;7:28');
$trasa['601_2'] = array('Kadaň-Prunéřov;4:54','Ústí nad Labem hl.n.;6:07');
$trasa['602_1'] = array('Ústí nad Labem hl.n.;20:47','Chomutov;21:48');
$trasa['603_1'] = array(':Chomutov;6:04','Ústí nad Labem hl.n.;7:07');
$trasa['603_2'] = array('Chomutov;6:04','Ústí nad Labem hl.n.;7:07');
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
$trasa['71263_1'] = array('Děčín;22:42','Ústí nad Labem hl.n.;23:02');

$trasa['1691_1'] = array('Cheb;4:00', 'Chomutov;5:56');
$trasa['1694_1'] = array('Ústí nad Labem hl.n.;13:46', 'Cheb;17:07');
$trasa['1695_1'] = array('Karlovy Vary;5:58', 'Ústí nad Labem hl.n.;8:08');
$trasa['1696_1'] = array('Ústí nad Labem hl.n.;15:46', 'Chomutov;16:49');
$trasa['1698_1'] = array('Ústí nad Labem hl.n.;17:46', 'Chomutov;18:49');
$trasa['672_1'] = array('Praha Masarykovo nádraží;20:53', 'Děčín hl.n.;22:32');
$trasa['677_1'] = array('Děčín hl.n.;7:24', 'Praha Masarykovo nádraží;9:02');
$trasa['6802_1'] = array('Děčín hl.n.;7:30', 'Kadaň-Prunéřov;9:29');
$trasa['6805_1'] = array('Kadaň-Prunéřov;10:29', 'Děčín hl.n.;12:24');
$trasa['6823_1'] = array('Chomutov;4:39', 'Děčín hl.n.;6:24');
$trasa['682_1'] = array('Praha Masarykovo nádraží;15:53', 'Ústí nad Labem hl.n.;17:16');
$trasa['6949_1'] = array('Ústí nad Labem hl.n.;12:42', 'Roudnice nad Labem;13:14');
$trasa['6950_1'] = array('Roudnice nad Labem;14:26', 'Ústí nad Labem hl.n.;14:56');
$trasa['7000_1'] = array('Chomutov;5:08', 'Cheb;7:22');
$trasa['7021_1'] = array('Cheb;4:25', 'Karlovy Vary;5:20');


@$ts302 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>