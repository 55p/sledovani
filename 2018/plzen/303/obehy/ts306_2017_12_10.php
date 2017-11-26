<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['7863_1', '7806_1', '7811_1', '7816_1', '7804_1', '7805_1', '7810_1', '7809_1', '7814_1', '7817_1', '7822_1', '7839_1', '7836_1', '7823_1', '21920_1'];
$obeh[2] = ['21921_1', '7800_1', '7801_1', '7803_1', '7808_1', '7807_1', '7812_1', '7813_1', '7818_1', '7819_1', '7821_1', '7824_1', '7857_1'];
$obeh[3] = ['7802_1', '7837_1', '7834_1', '7805_2', '7810_2', '7809_2', '7814_2', '7815_1', '7820_1', '7821_2', '7824_2', '7857_2'];

$omezeni['21920_1'] = 'X5';
$omezeni['21921_1'] = 'X1';
$omezeni['7801_1'] = 'X';
$omezeni['7802_1'] = 'X';
$omezeni['7803_1'] = '25';
$omezeni['7804_1'] = '25';
$omezeni['7805_1'] = '25';
$omezeni['7805_2'] = 'X';
$omezeni['7806_1'] = 'X';
$omezeni['7809_1'] = '25';
$omezeni['7809_2'] = 'X';
$omezeni['7810_1'] = '25';
$omezeni['7810_2'] = 'X';
$omezeni['7811_1'] = 'X';
$omezeni['7814_1'] = '25';
$omezeni['7814_2'] = 'X';
$omezeni['7815_1'] = 'X';
$omezeni['7816_1'] = 'X';
$omezeni['7819_1'] = 'X';
$omezeni['7820_1'] = 'X';
$omezeni['7821_1'] = '25';
$omezeni['7821_2'] = 'X';
$omezeni['7824_1'] = '25';
$omezeni['7824_2'] = 'X';
$omezeni['7834_1'] = 'X';
$omezeni['7836_1'] = 'X';
$omezeni['7837_1'] = 'X';
$omezeni['7839_1'] = 'X';
$omezeni['7857_1'] = '25';
$omezeni['7857_2'] = 'X';

$trasa['21920_1'] = ['Beroun;22:05','Plzeň hl.n.;22:59'];
$trasa['21921_1'] = ['Plzeň hl.n.;3:06','Beroun;3:55'];
$trasa['7800_1'] = ['Beroun;4:08', 'Plzeň hl.n.;5:25'];
$trasa['7801_1'] = ['Plzeň hl.n.;6:19', 'Beroun;7:32'];
$trasa['7802_1'] = ['Beroun;5:10', 'Plzeň hl.n.;6:25'];
$trasa['7803_1'] = ['Plzeň hl.n.;6:35', 'Beroun;7:54'];
$trasa['7804_1'] = ['Beroun;6:04', 'Plzeň hl.n.;7:25'];
$trasa['7805_1'] = ['Plzeň hl.n.;8:35', 'Beroun;9:54'];
$trasa['7805_2'] = ['Plzeň hl.n.;8:35', 'Beroun;9:54'];
$trasa['7806_1'] = ['Beroun;6:17', 'Plzeň hl.n.;7:28'];
$trasa['7807_1'] = ['Plzeň hl.n.;10:35', 'Beroun;11:54'];
$trasa['7808_1'] = ['Beroun;8:04', 'Plzeň hl.n.;9:25'];
$trasa['7809_1'] = ['Plzeň hl.n.;12:35', 'Beroun;13:54'];
$trasa['7809_2'] = ['Plzeň hl.n.;12:35', 'Beroun;13:54'];
$trasa['7810_1'] = ['Beroun;10:04', 'Plzeň hl.n.;11:25'];
$trasa['7810_2'] = ['Beroun;10:04', 'Plzeň hl.n.;11:25'];
$trasa['7811_1'] = ['Plzeň hl.n.;13:35', 'Zdice;14:38'];
$trasa['7812_1'] = ['Beroun;12:04', 'Plzeň hl.n.;13:25'];
$trasa['7813_1'] = ['Plzeň hl.n.;14:35', 'Beroun;15:54'];
$trasa['7814_1'] = ['Beroun;14:02', 'Plzeň hl.n.;15:20'];
$trasa['7814_2'] = ['Beroun;14:02', 'Plzeň hl.n.;15:20'];
$trasa['7815_1'] = ['Plzeň hl.n.;15:29', 'Beroun;16:45'];
$trasa['7816_1'] = ['Zdice;15:20', 'Plzeň hl.n.;16:25'];
$trasa['7817_1'] = ['Plzeň hl.n.;16:35', 'Beroun;17:54'];
$trasa['7818_1'] = ['Beroun;16:02', 'Plzeň hl.n.;17:20'];
$trasa['7819_1'] = ['Plzeň hl.n.;17:30', 'Beroun;18:45'];
$trasa['7820_1'] = ['Beroun;17:04', 'Plzeň hl.n.;18:25'];
$trasa['7821_1'] = ['Plzeň hl.n.;18:35', 'Beroun;19:54'];
$trasa['7821_2'] = ['Plzeň hl.n.;18:35', 'Beroun;19:54'];
$trasa['7822_1'] = ['Beroun;18:02', 'Plzeň hl.n.;19:20'];
$trasa['7823_1'] = ['Plzeň hl.n.;20:35', 'Beroun;21:54'];
$trasa['7824_1'] = ['Beroun;20:04', 'Plzeň-Jižní Předměstí;21:30'];
$trasa['7824_2'] = ['Beroun;20:04', 'Plzeň-Jižní Předměstí;21:30'];
$trasa['7834_1'] = ['Rokycany;7:59', 'Plzeň hl.n.;8:25'];
$trasa['7836_1'] = ['Rokycany;20:01', 'Plzeň hl.n.;20:27'];
$trasa['7837_1'] = ['Plzeň hl.n.;7:06', 'Rokycany;7:30'];
$trasa['7839_1'] = ['Plzeň hl.n.;19:30', 'Rokycany;19:54'];
$trasa['7857_1'] = ['Plzeň-Jižní Předměstí;22:40', 'Kařízek;23:33'];
$trasa['7857_2'] = ['Plzeň-Jižní Předměstí;22:40', 'Kařízek;23:33'];
$trasa['7863_1'] = ['Kařízek;4:56', 'Beroun;5:30'];

$poznamkaObehu['7863_1'] = ['pk', 'postrk'];
$poznamkaObehu['7811_1'] = ['pk', 'postrk'];
$poznamkaObehu['7805_1'] = ['pk', 'postrk'];
$poznamkaObehu['7809_1'] = ['pk', 'postrk'];
$poznamkaObehu['7817_1'] = ['pk', 'postrk'];
$poznamkaObehu['7839_1'] = ['pk', 'postrk'];
$poznamkaObehu['7823_1'] = ['pk', 'postrk'];
$poznamkaObehu['21921_1'] = ['pk', 'postrk'];
$poznamkaObehu['7801_1'] = ['pk', 'postrk'];
$poznamkaObehu['7803_1'] = ['pk', 'postrk'];
$poznamkaObehu['7807_1'] = ['pk', 'postrk'];
$poznamkaObehu['7813_1'] = ['pk', 'postrk'];
$poznamkaObehu['7819_1'] = ['pk', 'postrk'];
$poznamkaObehu['7821_1'] = ['pk', 'postrk'];
$poznamkaObehu['7857_1'] = ['pk', 'postrk'];
$poznamkaObehu['7837_1'] = ['pk', 'postrk'];
$poznamkaObehu['7805_2'] = ['pk', 'postrk'];
$poznamkaObehu['7809_2'] = ['pk', 'postrk'];
$poznamkaObehu['7815_1'] = ['pk', 'postrk'];
$poznamkaObehu['7821_2'] = ['pk', 'postrk'];
$poznamkaObehu['7857_2'] = ['pk', 'postrk'];


$typ['21920_1'] = 'Sv';
$typ['21921_1'] = 'Sv';

$poznamkaObehu['21921_1'] = ['','Sv pk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts306 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


