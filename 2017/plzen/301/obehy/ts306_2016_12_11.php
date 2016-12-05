<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['7808_1', '7811_1', '7820_1', '7806_1', '7805_1', '7812_1', '7809_1', '7816_1', '7826_1', '7837_1', '7836_1', '21920_1'];
$obeh[2] = ['21921_1', '7800_1', '7801_1', '7803_1', '7810_1', '7814_1', '7822_1', '7819_1', '7821_1', '7828_1', '7857_1'];
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

$poznamkaObehu['7811_1'] = ['pk', 'postrk'];
$poznamkaObehu['7805_1'] = ['pk', 'postrk'];
$poznamkaObehu['7809_1'] = ['pk', 'postrk'];
$poznamkaObehu['7837_1'] = ['pk', 'postrk'];
$poznamkaObehu['7801_1'] = ['pk', 'postrk'];
$poznamkaObehu['7803_1'] = ['pk', 'postrk'];
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


