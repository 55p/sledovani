<?php 
$zacatekPlatnosti = '25.3.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['9801_1', '1650_1'];
$obeh[2] = ['1651_1', '1894_1', '19865_1'];
$obeh[3] = ['19860_1', '19861_1', '9011_1', '9016_1', '1908_1'];
$obeh[4] = ['19886_1', '1879_1', '1888_1', '1895_1', '1896_1', '19893_1', '19793_1', '19730_1', '19730_2', '19731_1', '19734_1', '19733_1', '19797_1', '19736_1', '109783_1', '19735_1', '19790_1', '19792_1'];
$obeh[5] = ['19890_1', '1881_1', '1890_1'];

$omezeni['109783_1'] = '25';
$omezeni['1650_1'] = 'X';
$omezeni['1651_1'] = 'X';
$omezeni['1879_1'] = 'X';
$omezeni['1881_1'] = 'X';
$omezeni['1888_1'] = 'X';
$omezeni['1890_1'] = 'X';
$omezeni['1894_1'] = 'X';
$omezeni['1895_1'] = 'X';
$omezeni['1896_1'] = 'X';
$omezeni['1908_1'] = 'X';
$omezeni['19730_1'] = '6';
$omezeni['19730_2'] = 'T';
$omezeni['19731_1'] = '25';
$omezeni['19733_1'] = '25';
$omezeni['19734_1'] = '25';
$omezeni['19735_1'] = '25';
$omezeni['19736_1'] = '25';
$omezeni['19790_1'] = '6';
$omezeni['19792_1'] = 'T';
$omezeni['19793_1'] = '6';
$omezeni['19797_1'] = '25';
$omezeni['19860_1'] = 'X';
$omezeni['19861_1'] = 'X';
$omezeni['19865_1'] = 'X';
$omezeni['19886_1'] = 'X';
$omezeni['19890_1'] = 'X';
$omezeni['19893_1'] = 'X';
$omezeni['9011_1'] = 'X';
$omezeni['9016_1'] = 'X';
$omezeni['9801_1'] = 'X';

$trasa['109783_1'] = ['Středokluky;17:46','Hostivice;18:02'];
$trasa['1650_1'] = ['Praha Masarykovo n.;16:22','Louny;18:20'];
$trasa['1651_1'] = ['Louny;5:29','Praha Masarykovo n.;7:32'];
$trasa['1879_1'] = ['Kladno-Dubí;5:16','Praha Masarykovo n.;6:20'];
$trasa['1881_1'] = ['Kladno-Dubí;6:20','Praha Masarykovo n.;7:22'];
$trasa['1888_1'] = ['Praha Masarykovo n.;16:02','Kladno-Ostrovec;16:49'];
$trasa['1890_1'] = ['Praha Masarykovo n.;16:18','Rakovník;18:04'];
$trasa['1894_1'] = ['Praha Masarykovo n.;18:02','Kladno-Ostrovec;18:49'];
$trasa['1895_1'] = ['Kladno-Ostrovec;17:03','Praha Masarykovo n.;17:52'];
$trasa['1896_1'] = ['Praha Masarykovo n.;18:18','Kladno-Ostrovec;19:16'];
$trasa['1908_1'] = ['Praha Masarykovo n.;21:02','Kladno;21:42'];
$trasa['19730_1'] = ['Hostivice;3:57','Středokluky;4:12'];
$trasa['19730_2'] = ['Praha-Vršovice;3:26','Středokluky;4:12'];
$trasa['19731_1'] = ['Středokluky;4:23','Praha Masarykovo n.;5:06'];
$trasa['19733_1'] = ['Středokluky;8:24','Hostivice;8:43'];
$trasa['19734_1'] = ['Praha Masarykovo n.;5:53','Středokluky;6:57'];
$trasa['19735_1'] = ['Hostivice;18:05','Praha Masarykovo n.;18:40'];
$trasa['19736_1'] = ['Praha Masarykovo n.;16:37','Středokluky;17:29'];
$trasa['19790_1'] = ['Praha Masarykovo n.;19:16','Praha-Vršovice;19:48'];
$trasa['19792_1'] = ['Praha Masarykovo n.;19:18','Kladno;20:07'];
$trasa['19793_1'] = ['Kladno;3:33','Hostivice;3:46'];
$trasa['19797_1'] = ['Hostivice;9:06','Praha Masarykovo n.;9:33'];
$trasa['19860_1'] = ['Kladno;6:21','Kladno-Dubí;6:35'];
$trasa['19861_1'] = ['Kladno-Dubí;6:55','Praha Masarykovo n.;7:52'];
$trasa['19865_1'] = ['Kladno-Ostrovec;19:21','Kladno;19:27'];
$trasa['19886_1'] = ['Kladno;4:39','Kladno-Dubí;4:48'];
$trasa['19890_1'] = ['Kladno;5:49','Kladno-Dubí;6:02'];
$trasa['19893_1'] = ['Kladno-Ostrovec;19:36','Kladno;19:41'];
$trasa['9011_1'] = ['Praha hlavní nádraží;14:25','Čerčany;16:54'];
$trasa['9016_1'] = ['Čerčany;17:06','Praha hlavní nádraží;19:05'];
$trasa['9801_1'] = ['Rakovník;5:41','Praha Masarykovo n.;7:35'];

$poznamkaObehu['19860_1'] = ['pk', 'postrk'];


$typ['19886_1'] = 'Sv';
$typ['19893_1'] = 'Sv';
$typ['19793_1'] = 'Sv';
$typ['19730_2'] = 'Sv';
$typ['19797_1'] = 'Sv';
$typ['19790_1'] = 'Sv';
$typ['19792_1'] = 'Sv';
$typ['19890_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts772 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


