<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['9801_1', '19736_1', '19735_1', '19735_2', '1908_1'];
$obeh[2] = ['19860_1', '19861_1', '1883_1', '1894_1', '19893_1', '19791_1', '19790_1', '19731_1', '19734_1', '19747_1', '19797_1', '19736_2', '19735_3', '19792_1'];
$obeh[3] = ['19890_1', '1881_1', '1888_1', '1895_1', '9848_1', '19895_1', '19714_1'];

$omezeni['1881_1'] = 'X';
$omezeni['1883_1'] = 'X';
$omezeni['1888_1'] = 'X';
$omezeni['1894_1'] = 'X';
$omezeni['1895_1'] = 'X';
$omezeni['1908_1'] = 'X';
$omezeni['19714_1'] = 'X';
$omezeni['19731_1'] = '25';
$omezeni['19734_1'] = '25';
$omezeni['19735_1'] = 'X';
$omezeni['19735_2'] = 'X';
$omezeni['19735_3'] = '25';
$omezeni['19736_1'] = 'X';
$omezeni['19736_2'] = '25';
$omezeni['19747_1'] = '25';
$omezeni['19790_1'] = '25';
$omezeni['19791_1'] = '25';
$omezeni['19792_1'] = '25';
$omezeni['19797_1'] = '25';
$omezeni['19860_1'] = 'X';
$omezeni['19861_1'] = 'X';
$omezeni['19890_1'] = 'X';
$omezeni['19893_1'] = 'X';
$omezeni['19895_1'] = 'X';
$omezeni['9801_1'] = 'X';
$omezeni['9848_1'] = 'X';

$trasa['1883_1'] = ['Kladno;7:15','Praha-Bubny Vltavská;7:50'];
$trasa['19735_2'] = ['Praha-Dejvice;18:50','Praha-Bubny;18:55'];
$trasa['19736_1'] = ['Praha-Bubny;16:28','Středokluky;17:30'];
$trasa['19736_2'] = ['Praha-Bubny;16:28','Středokluky;17:30'];
$trasa['19790_1'] = ['Hostivice;3:50','Str;4:03'];
$trasa['19791_1'] = ['Kladno;3:24','Hostivice;3:37'];
$trasa['19792_1'] = ['Praha-Dejvice;18:50','Kladno;19:58'];
$trasa['19797_1'] = ['Hostivice;8:39','Praha-Bubny;8:59'];
$trasa['19860_1'] = ['Kladno;6:21','Kladno-Dubí;6:35'];
$trasa['19890_1'] = ['Kladno;5:49','Kladno-Dubí;6:02'];
$trasa['19893_1'] = ['Kladno-Ostrovec;19:35','Kladno;19:41'];
$trasa['19895_1'] = ['Kladno-Ostrovec;20:10','Kladno;20:16'];
$trasa['1881_1'] = ['Kladno-Dubí;6:20', 'Praha-Bubny Vltavská;7:19'];
$trasa['1888_1'] = ['Praha-Bubny Vltavská;16:05', 'Kladno-Ostrovec;16:49'];
$trasa['1894_1'] = ['Praha-Bubny Vltavská;18:05', 'Kladno-Ostrovec;18:49'];
$trasa['1895_1'] = ['Kladno-Ostrovec;17:03', 'Praha-Bubny Vltavská;17:49'];
$trasa['1908_1'] = ['Praha-Bubny Vltavská;21:05', 'Kladno;21:42'];
$trasa['19714_1'] = ['Kladno;20:51', 'Rakovník;21:48'];
$trasa['19731_1'] = ['Středokluky;4:23', 'Praha-Dejvice;4:56'];
$trasa['19734_1'] = ['Praha-Dejvice;6:05', 'Středokluky;6:57'];
$trasa['19735_1'] = ['Středokluky;17:46', 'Praha-Dejvice;18:24'];
$trasa['19735_3'] = ['Středokluky;17:46', 'Praha-Dejvice;18:24'];
$trasa['19747_1'] = ['Středokluky;8:04', 'Hostivice;8:19'];
$trasa['19861_1'] = ['Kladno-Dubí;6:55', 'Kladno;7:08'];
$trasa['9801_1'] = ['Rakovník;5:42', 'Praha-Bubny;7:32'];
$trasa['9848_1'] = ['Praha-Bubny Vltavská;18:33', 'Kladno-Ostrovec;19:34'];

$typ['19736_1'] = 'Sv';
$typ['19735_2'] = 'Sv';
$typ['19860_1'] = 'Sv';
$typ['19893_1'] = 'Sv';
$typ['19791_1'] = 'Sv';
$typ['19790_1'] = 'Sv';
$typ['19797_1'] = 'Sv';
$typ['19736_2'] = 'Sv';
$typ['19792_1'] = 'Sv';
$typ['19890_1'] = 'Sv';
$typ['19895_1'] = 'Sv';

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts762 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


