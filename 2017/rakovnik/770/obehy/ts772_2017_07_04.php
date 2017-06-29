<?php 
$zacatekPlatnosti = '4.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['9801_1', '19736_1', '19735_1', '1908_1'];
$obeh[2] = ['1881_1', '1894_1', '19731_1', '19734_1', '19733_1', '19736_2', '109783_1', '19735_2'];
$obeh[3] = ['119860_1', '19861_1', '1883_1', '1888_1', '1895_1', '9830_1'];

$omezeni['109783_1'] = '25';
$omezeni['119860_1'] = 'X';
$omezeni['1881_1'] = 'X';
$omezeni['1883_1'] = 'X';
$omezeni['1888_1'] = 'X';
$omezeni['1894_1'] = 'X';
$omezeni['1895_1'] = 'X';
$omezeni['1908_1'] = 'X';
$omezeni['19731_1'] = '25';
$omezeni['19733_1'] = '25';
$omezeni['19734_1'] = '25';
$omezeni['19735_1'] = 'X';
$omezeni['19735_2'] = '25';
$omezeni['19736_1'] = 'X';
$omezeni['19736_2'] = '25';
$omezeni['19861_1'] = 'X';
$omezeni['9801_1'] = 'X';
$omezeni['9830_1'] = 'X';

$trasa['109783_1'] = ['Středokluky;17:46','Hostivice;18:05'];
$trasa['119860_1'] = ['Kladno;6:21','Kladno-Dubí;6:35'];
$trasa['1881_1'] = ['Kladno-Dubí;6:20', 'Praha-Bubny Vltavská;7:21'];
$trasa['1883_1'] = ['Kladno;7:15', 'Praha-Bubny Vltavská;7:49'];
$trasa['1888_1'] = ['Praha-Bubny Vltavská;16:05', 'Kladno-Ostrovec;16:49'];
$trasa['1894_1'] = ['Praha-Bubny Vltavská;18:05', 'Kladno-Ostrovec;18:49'];
$trasa['1895_1'] = ['Kladno-Ostrovec;17:03', 'Praha-Bubny Vltavská;17:49'];
$trasa['1908_1'] = ['Praha-Bubny Vltavská;21:05', 'Kladno;21:42'];
$trasa['19731_1'] = ['Středokluky;4:23', 'Praha-Dejvice;4:56'];
$trasa['19733_1'] = ['Středokluky;8:24', 'Hostivice;8:43'];
$trasa['19734_1'] = ['Praha-Dejvice;6:05', 'Středokluky;6:57'];
$trasa['19735_1'] = ['Středokluky;17:46', 'Praha-Dejvice;18:24'];
$trasa['19735_2'] = ['Hostivice;18:05', 'Praha-Dejvice;18:24'];
$trasa['19736'] = ['Praha-Bubny;16:49', 'Středokluky;17:29'];
$trasa['19861_1'] = ['Kladno-Dubí;6:55', 'Kladno;7:08'];
$trasa['9801_1'] = ['Rakovník;5:41', 'Praha-Bubny;7:30'];
$trasa['9830_1'] = ['Praha-Bubny Vltavská;18:33', 'Kralupy nad Vltavou;20:08'];



$poznamkaObehu['119860_1'] = ['pk', 'postrk'];
$poznamkaObehu['109783_1'] = ['př', 'přípřež'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts772 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


