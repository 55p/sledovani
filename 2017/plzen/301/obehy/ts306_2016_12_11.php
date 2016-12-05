<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['7863_1', '7808_1', '7811_1', '7820_1', '7806_1', '7805_1', '7812_1', '7809_1', '7816_1', '7817_1', '7826_1', '7837_1', '7836_1', '7823_1', '21920_1'];
$obeh[2] = ['21921_1', '7800_1', '7801_1', '7803_1', '7810_1', '7807_1', '7814_1', '7813_1', '7822_1', '7819_1', '7821_1', '7828_1', '7857_1'];
$obeh[3] = ['7802_1', '7835_1', '7834_1', '7805_2', '7812_2', '7809_2', '7816_2', '7815_1', '7824_1', '7821_2', '7828_2', '7857_2'];

$omezeni['21920_1'] = 'X5';
$omezeni['21921_1'] = 'X1';
$omezeni['7801_1'] = 'X';
$omezeni['7802_1'] = 'X';
$omezeni['7803_1'] = '25';
$omezeni['7805_1'] = '25';
$omezeni['7805_2'] = 'X';
$omezeni['7806_1'] = '25';
$omezeni['7808_1'] = 'X';
$omezeni['7809_1'] = '25';
$omezeni['7809_2'] = 'X';
$omezeni['7811_1'] = 'X';
$omezeni['7812_1'] = '25';
$omezeni['7812_2'] = 'X';
$omezeni['7815_1'] = 'X';
$omezeni['7816_1'] = '25';
$omezeni['7816_2'] = 'X';
$omezeni['7819_1'] = 'X';
$omezeni['7820_1'] = 'X';
$omezeni['7821_1'] = '25';
$omezeni['7821_2'] = 'X';
$omezeni['7824_1'] = 'X';
$omezeni['7828_1'] = '25';
$omezeni['7828_2'] = 'X';
$omezeni['7834_1'] = 'X';
$omezeni['7835_1'] = 'X';
$omezeni['7836_1'] = 'X';
$omezeni['7837_1'] = 'X';
$omezeni['7857_1'] = '25';
$omezeni['7857_2'] = 'X';

$trasa['21920_1'] = ['Beroun;22:06','Plzeň hl.n.;22:55'];
$trasa['21921_1'] = ['Plzeň hl.n.;3:08','Beroun;3:56'];
$trasa['7800_1'] = ['Beroun;4:08', 'Plzeň hl.n.;5:25'];
$trasa['7801_1'] = ['Plzeň hl.n.;6:15', 'Beroun;7:29'];
$trasa['7802_1'] = ['Beroun;5:10', 'Plzeň hl.n.;6:25'];
$trasa['7803_1'] = ['Plzeň hl.n.;6:33', 'Beroun;7:48'];
$trasa['7805_1'] = ['Plzeň hl.n.;8:33', 'Beroun;9:48'];
$trasa['7805_2'] = ['Plzeň hl.n.;8:33', 'Beroun;9:48'];
$trasa['7806_1'] = ['Beroun;6:10', 'Plzeň hl.n.;7:25'];
$trasa['7807_1'] = ['Plzeň hl.n.;10:33', 'Beroun;11:48'];
$trasa['7808_1'] = ['Beroun;6:20', 'Plzeň hl.n.;7:31'];
$trasa['7809_1'] = ['Plzeň hl.n.;12:33', 'Beroun;13:48'];
$trasa['7809_2'] = ['Plzeň hl.n.;12:33', 'Beroun;13:48'];
$trasa['7810_1'] = ['Beroun;8:10', 'Plzeň hl.n.;9:25'];
$trasa['7811_1'] = ['Plzeň hl.n.;13:33', 'Zdice;14:36'];
$trasa['7812_1'] = ['Beroun;10:10', 'Plzeň hl.n.;11:25'];
$trasa['7812_2'] = ['Beroun;10:10', 'Plzeň hl.n.;11:25'];
$trasa['7813_1'] = ['Plzeň hl.n.;14:33', 'Beroun;15:48'];
$trasa['7814_1'] = ['Beroun;12:10', 'Plzeň hl.n.;13:25'];
$trasa['7815_1'] = ['Plzeň hl.n.;15:31', 'Beroun;16:49'];
$trasa['7816_1'] = ['Beroun;14:10', 'Plzeň hl.n.;15:25'];
$trasa['7816_2'] = ['Beroun;14:10', 'Plzeň hl.n.;15:25'];
$trasa['7817_1'] = ['Plzeň hl.n.;16:33', 'Beroun;17:48'];
$trasa['7819_1'] = ['Plzeň hl.n.;17:33', 'Beroun;18:48'];
$trasa['7820_1'] = ['Zdice;15:20', 'Plzeň hl.n.;16:25'];
$trasa['7821_1'] = ['Plzeň hl.n.;18:33', 'Beroun;19:48'];
$trasa['7821_2'] = ['Plzeň hl.n.;18:33', 'Beroun;19:48'];
$trasa['7822_1'] = ['Beroun;16:10', 'Plzeň hl.n.;17:25'];
$trasa['7823_1'] = ['Plzeň hl.n.;20:38', 'Beroun;21:52'];
$trasa['7824_1'] = ['Beroun;17:10', 'Plzeň hl.n.;18:26'];
$trasa['7826_1'] = ['Beroun;18:10', 'Plzeň hl.n.;19:25'];
$trasa['7828_1'] = ['Beroun;20:10', 'Plzeň-Jižní Předměstí;21:30'];
$trasa['7828_2'] = ['Beroun;20:10', 'Plzeň-Jižní Předměstí;21:30'];
$trasa['7834_1'] = ['Rokycany;7:59', 'Plzeň hl.n.;8:25'];
$trasa['7835_1'] = ['Plzeň hl.n.;7:11', 'Rokycany;7:36'];
$trasa['7836_1'] = ['Rokycany;20:04', 'Plzeň hl.n.;20:30'];
$trasa['7837_1'] = ['Plzeň hl.n.;19:33', 'Rokycany;19:57'];
$trasa['7857_1'] = ['Plzeň-Jižní Předměstí;22:46', 'Kařízek;23:34'];
$trasa['7857_2'] = ['Plzeň-Jižní Předměstí;22:46', 'Kařízek;23:34'];
$trasa['7863_1'] = ['Kařízek;5:07', 'Beroun;5:41'];

$poznamkaObehu['7863_1'] = ['pk', 'postrk'];
$poznamkaObehu['7811_1'] = ['pk', 'postrk'];
$poznamkaObehu['7805_1'] = ['pk', 'postrk'];
$poznamkaObehu['7809_1'] = ['pk', 'postrk'];
$poznamkaObehu['7817_1'] = ['pk', 'postrk'];
$poznamkaObehu['7837_1'] = ['pk', 'postrk'];
$poznamkaObehu['7823_1'] = ['pk', 'postrk'];
$poznamkaObehu['7801_1'] = ['pk', 'postrk'];
$poznamkaObehu['7803_1'] = ['pk', 'postrk'];
$poznamkaObehu['7807_1'] = ['pk', 'postrk'];
$poznamkaObehu['7813_1'] = ['pk', 'postrk'];
$poznamkaObehu['7819_1'] = ['pk', 'postrk'];
$poznamkaObehu['7821_1'] = ['pk', 'postrk'];
$poznamkaObehu['7857_1'] = ['pk', 'postrk'];
$poznamkaObehu['7835_1'] = ['pk', 'postrk'];
$poznamkaObehu['7805_2'] = ['pk', 'postrk'];
$poznamkaObehu['7809_2'] = ['pk', 'postrk'];
$poznamkaObehu['7815_1'] = ['pk', 'postrk'];
$poznamkaObehu['7821_2'] = ['pk', 'postrk'];
$poznamkaObehu['7857_2'] = ['pk', 'postrk'];


$typ['21920_1'] = 'Sv';
$typ['21921_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts306 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


