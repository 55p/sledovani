<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7863_1', '7806_1', '7808_1', '7803_1', '7812_1', '7807_1', '7816_1', '7815_1', '7826_1', '7823_1', '21920_1');
$obeh[2] = array('7802_1', '7835_1', '7832_1', '7809_1', '7820_1', '7817_1');
$obeh[3] = array('21921_1', '7800_1', '7801_1', '7810_1', '7805_1', '7814_1', '7811_1', '7822_1', '7821_1', '7828_1', '7857_1');

$omezeni['21920_1'] = 'X5';
$omezeni['21921_1'] = 'X1';
$omezeni['7802_1'] = 'X';
$omezeni['7806_1'] = 'X';
$omezeni['7808_1'] = '6, T';
$omezeni['7809_1'] = 'X';
$omezeni['7817_1'] = 'X';
$omezeni['7820_1'] = 'X';
$omezeni['7832_1'] = 'X';
$omezeni['7835_1'] = 'X';

$trasa['21920_1'] = array('Beroun;21:35','Plzeň hl.n.;22:29');
$trasa['21921_1'] = array('Plzeň hl.n.;3:29','Beroun;4:18');
$trasa['7800_1'] = array('Beroun;4:24', 'Plzeň hl.n.;5:41');
$trasa['7801_1'] = array('Plzeň hl.n.;6:14', 'Beroun;7:29');
$trasa['7802_1'] = array('Beroun;5:25', 'Plzeň hl.n.;6:41');
$trasa['7803_1'] = array('Plzeň hl.n.;8:14', 'Beroun;9:29');
$trasa['7805_1'] = array('Plzeň hl.n.;10:14', 'Beroun;11:29');
$trasa['7806_1'] = array('Beroun;6:13', 'Plzeň hl.n.;7:34');
$trasa['7807_1'] = array('Plzeň hl.n.;12:14', 'Beroun;13:29');
$trasa['7808_1'] = array('Beroun;6:25', 'Plzeň hl.n.;7:41');
$trasa['7809_1'] = array('Plzeň hl.n.;13:14', 'Zdice;14:18');
$trasa['7810_1'] = array('Beroun;8:25', 'Plzeň hl.n.;9:41');
$trasa['7811_1'] = array('Plzeň hl.n.;14:14', 'Beroun;15:29');
$trasa['7812_1'] = array('Beroun;10:25', 'Plzeň hl.n.;11:41');
$trasa['7814_1'] = array('Beroun;12:25', 'Plzeň hl.n.;13:41');
$trasa['7815_1'] = array('Plzeň hl.n.;16:14', 'Beroun;17:29');
$trasa['7816_1'] = array('Beroun;14:25', 'Plzeň hl.n.;15:41');
$trasa['7817_1'] = array('Plzeň hl.n.;17:14', 'Beroun;18:29');
$trasa['7820_1'] = array('Zdice;15:35', 'Plzeň hl.n.;16:41');
$trasa['7821_1'] = array('Plzeň hl.n.;18:14', 'Beroun;19:29');
$trasa['7822_1'] = array('Beroun;16:25', 'Plzeň hl.n.;17:41');
$trasa['7823_1'] = array('Plzeň hl.n.;20:14', 'Beroun;21:29');
$trasa['7826_1'] = array('Beroun;18:25', 'Plzeň hl.n.;19:41');
$trasa['7828_1'] = array('Beroun;20:25', 'Plzeň-Jižní Předměstí;21:46');
$trasa['7832_1'] = array('Rokycany;8:14', 'Plzeň hl.n.;8:41');
$trasa['7835_1'] = array('Plzeň hl.n.;6:56', 'Rokycany;7:22');
$trasa['7857_1'] = array('Plzeň-Jižní Předměstí;22:46', 'Kařízek;23:34');
$trasa['7863_1'] = array('Kařízek;5:09', 'Beroun;5:41');


$poznamkaObehu['7863_1'] = array('pk', 'postrk');
$poznamkaObehu['7803_1'] = array('pk', 'postrk');
$poznamkaObehu['7807_1'] = array('pk', 'postrk');
$poznamkaObehu['7815_1'] = array('pk', 'postrk');
$poznamkaObehu['7823_1'] = array('pk', 'postrk');
$poznamkaObehu['7835_1'] = array('pk', 'postrk');
$poznamkaObehu['7809_1'] = array('pk', 'postrk');
$poznamkaObehu['7817_1'] = array('pk', 'postrk');
$poznamkaObehu['21921_1'] = array('pk', 'postrk');
$poznamkaObehu['7801_1'] = array('pk', 'postrk');
$poznamkaObehu['7805_1'] = array('pk', 'postrk');
$poznamkaObehu['7811_1'] = array('pk', 'postrk');
$poznamkaObehu['7821_1'] = array('pk', 'postrk');
$poznamkaObehu['7857_1'] = array('pk', 'postrk');

$typ['21920_1'] = $typ['21921_1'] = 'Sv';


@$ts304 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>