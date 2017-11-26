<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['7833_1', '1970_1', '564_1', '555_1', '558_1', '615_1', '602_1'];
$obeh[2] = ['7000_1', '607_1', '610_1', '561_1', '550_1', '603_1', '614_1', '611_1', '606_1'];
$obeh[3] = ['551_1', '560_1', '559_1', '554_1', '1990_1', '7384_1', '565_1', '550_2'];
$obeh[4] = ['7021_1', '1695_1', '614_2', '611_2', '606_2', '1981_1', '607_2', '610_2', '561_2', '550_3'];

$omezeni['1695_1'] = 'X';
$omezeni['1970_1'] = 'X';
$omezeni['1981_1'] = '6';
$omezeni['1990_1'] = 'T';
$omezeni['550_1'] = 'X';
$omezeni['550_2'] = 'T';
$omezeni['550_3'] = 'T';
$omezeni['551_1'] = 'X6';
$omezeni['554_1'] = 'X6';
$omezeni['559_1'] = 'X6';
$omezeni['560_1'] = 'X6';
$omezeni['561_1'] = 'X';
$omezeni['561_2'] = 'T';
$omezeni['564_1'] = 'X6';
$omezeni['565_1'] = 'T';
$omezeni['603_1'] = '25';
$omezeni['606_1'] = '25';
$omezeni['606_2'] = 'X';
$omezeni['607_1'] = 'X';
$omezeni['607_2'] = 'T';
$omezeni['610_1'] = 'X';
$omezeni['610_2'] = 'T';
$omezeni['611_1'] = '25';
$omezeni['611_2'] = 'X';
$omezeni['614_1'] = '25';
$omezeni['614_2'] = 'X';
$omezeni['7000_1'] = 'X';
$omezeni['7021_1'] = 'X';
$omezeni['7384_1'] = 'T';
$omezeni['7833_1'] = 'X';

$trasa['602_1'] = ['Ústí nad Labem hl.n.;21:50','Chomutov;21:50'];
$trasa['603_1'] = ['Chomutov;6:06','Ústí nad Labem hl.n.;7:10'];
$trasa['606_1'] = ['Ústí nad Labem hl.n.;16:47','Cheb;19:29'];
$trasa['606_2'] = ['Ústí nad Labem hl.n.;16:47','Cheb;19:29'];
$trasa['607_1'] = ['Cheb;8:29','Ústí nad Labem hl.n.;11:10'];
$trasa['607_2'] = ['Cheb;8:29','Ústí nad Labem hl.n.;11:10'];
$trasa['610_1'] = ['Ústí nad Labem hl.n.;12:47','Cheb;15:29'];
$trasa['610_2'] = ['Ústí nad Labem hl.n.;12:47','Cheb;15:29'];
$trasa['611_1'] = ['Cheb;12:29','Ústí nad Labem hl.n.;15:10'];
$trasa['611_2'] = ['Cheb;12:29','Ústí nad Labem hl.n.;15:10'];
$trasa['614_1'] = ['Ústí nad Labem hl.n.;8:47','Cheb;11:29'];
$trasa['614_2'] = ['Ústí nad Labem hl.n.;8:47','Cheb;11:29'];
$trasa['615_1'] = ['Cheb;16:29','Ústí nad Labem hl.n.;19:10'];
$trasa['1695_1'] = ['Karlovy Vary;5:58', 'Ústí nad Labem hl.n.;8:08'];
$trasa['1970_1'] = ['Rokycany;5:31', 'Plzeň hl.n.;5:51'];
$trasa['1981_1'] = ['Cheb;5:04', 'Plzeň hl.n.;6:51'];
$trasa['1990_1'] = ['Plzeň hl.n.;17:05', 'Mariánské Lázně;18:17'];
$trasa['550_1'] = ['Praha hl.n.;20:33', 'Cheb;23:27'];
$trasa['550_2'] = ['Praha hl.n.;20:33', 'Cheb;23:27'];
$trasa['550_3'] = ['Praha hl.n.;20:33', 'Cheb;23:27'];
$trasa['551_1'] = ['Cheb;4:32', 'Praha hl.n.;7:31'];
$trasa['554_1'] = ['Praha hl.n.;16:33', 'Cheb;19:27'];
$trasa['555_1'] = ['Cheb;8:33', 'Praha hl.n.;11:31'];
$trasa['558_1'] = ['Praha hl.n.;12:33', 'Cheb;15:27'];
$trasa['559_1'] = ['Cheb;12:33', 'Praha hl.n.;15:31'];
$trasa['560_1'] = ['Praha hl.n.;8:33', 'Cheb;11:27'];
$trasa['561'] = ['Cheb;16:33', 'Praha hl.n.;19:31'];
$trasa['564_1'] = ['Plzeň hl.n.;6:05', 'Cheb;7:29'];
$trasa['565_1'] = ['Cheb;19:35', 'Plzeň hl.n.;20:55'];
$trasa['7000_1'] = ['Chomutov;5:09', 'Cheb;7:22'];
$trasa['7021_1'] = ['Cheb;4:25', 'Karlovy Vary;5:21'];
$trasa['7384_1'] = ['Mariánské Lázně;18:38', 'Cheb;19:09'];
$trasa['7833_1'] = ['Plzeň hl.n.;4:52', 'Rokycany;5:16'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts304 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


