<?php 
$zacatekPlatnosti = '4.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['671_1', '692_1', '681_1', '686_1', '687_1', '678_1', '676_1', '6969_1', '6957_1'];
$obeh[2] = ['6930_1', '6963_1', '679_1', '684_1', '689_1', '674_1', '6957_2', '6968_1', '71263_1'];
$obeh[3] = ['100601_1', '690_1', '683_1', '682_1', '1698_1'];
$obeh[4] = ['601_1', '71260_1', '677_1', '688_1', '685_1', '680_1', '691_1', '670_1', '676_2'];
$obeh[5] = ['21811_1', '10504_1', '10505_1'];
$obeh[6] = ['10508_1', '10507_1', '21810_1', '71201_1', '9206_1'];

$omezeni['100601_1'] = 'X';
$omezeni['10504_1'] = 'X';
$omezeni['10505_1'] = 'X';
$omezeni['10507_1'] = 'X';
$omezeni['10508_1'] = 'X';
$omezeni['1698_1'] = 'X';
$omezeni['21810_1'] = 'X5';
$omezeni['21811_1'] = 'X1';
$omezeni['601_1'] = 'X';
$omezeni['670_1'] = 'X1234';
$omezeni['671_1'] = 'X';
$omezeni['674_1'] = 'X';
$omezeni['676_1'] = 'X1234';
$omezeni['676_2'] = 'T';
$omezeni['677_1'] = 'X';
$omezeni['678_1'] = 'X5';
$omezeni['679_1'] = 'X';
$omezeni['680_1'] = 'X';
$omezeni['681_1'] = 'X';
$omezeni['682_1'] = 'X';
$omezeni['683_1'] = 'X';
$omezeni['684_1'] = 'X';
$omezeni['685_1'] = 'X';
$omezeni['686_1'] = 'X';
$omezeni['687_1'] = 'X';
$omezeni['688_1'] = 'X';
$omezeni['689_1'] = 'X';
$omezeni['690_1'] = 'X';
$omezeni['691_1'] = 'X';
$omezeni['692_1'] = 'X';
$omezeni['6930_1'] = 'X';
$omezeni['6957_1'] = 'X1234';
$omezeni['6957_2'] = 'X5';
$omezeni['6963_1'] = 'X';
$omezeni['6968_1'] = 'X1234';
$omezeni['6969_1'] = 'X1234';
$omezeni['71201_1'] = 'T,-0507';
$omezeni['71260_1'] = 'X';
$omezeni['71263_1'] = 'zX';
$omezeni['9206_1'] = 'T,-0507';

$typ[100601] = 'R';
$typ[10504] = $typ[10505] = $typ[10507] = $typ[10508] = 'Sp';

$trasa['100601_1'] = ['Ústí n/L hl.n.;6:15','Praha Masarykovo nádraží;7:27'];
$trasa['10504_1'] = ['Kolín;5:37','Praha hl.n.;6:28'];
$trasa['10505_1'] = ['Praha hl.n.;16:16','Kolín;17:05'];
$trasa['10507_1'] = ['Praha hl.n.;17:16','Kolín;18:05'];
$trasa['10508_1'] = ['Kolín;6:48','Praha hl.n.;7:36'];
$trasa['21810_1'] = ['Kolín;18:35','Praha odstavné nádraží;19:29'];
$trasa['21811_1'] = ['Praha odstavné nádraží;4:11','Kolín;5:05'];
$trasa['601_1'] = ['Kadaň-Prunéřov;5:55','Ústí nad Labem hl.n.;6:09'];
$trasa['71201_1'] = ['Praha-Vršovice;16:05','Čerčany;16:45'];
$trasa['71260_1'] = ['Ústí nad Labem hl.n.;6:14','Děčín hl.n.;6:39'];
$trasa['71263_1'] = ['Děčín hl.n.;23:05','Ústí n/L;23:25'];
$trasa['9206_1'] = ['Čerčany;16:59','Praha hl.n.;17:37'];

$trasa['1698_1'] = ['Ústí nad Labem hl.n.;17:46', 'Chomutov;18:49'];
$trasa['670_1'] = ['Praha hl.n.;23:21', 'Děčín hl.n.;1:05'];
$trasa['671_1'] = ['Děčín hl.n.;4:24', 'Praha Masarykovo nádraží;6:08'];
$trasa['674_1'] = ['Praha Masarykovo nádraží;19:48', 'Ústí nad Labem hl.n.;21:14'];
$trasa['676_1'] = ['Praha Masarykovo nádraží;18:48', 'Děčín hl.n.;20:31'];
$trasa['676_2'] = ['Praha Masarykovo nádraží;18:48', 'Děčín hl.n.;20:31'];
$trasa['677_1'] = ['Děčín hl.n.;7:24', 'Praha Masarykovo nádraží;9:08'];
$trasa['678_1'] = ['Praha Masarykovo nádraží;17:48', 'Děčín hl.n.;19:31'];
$trasa['679_1'] = ['Ústí nad Labem hl.n.;8:41', 'Praha Masarykovo nádraží;10:08'];
$trasa['680_1'] = ['Praha Masarykovo nádraží;16:48', 'Děčín hl.n.;18:31'];
$trasa['681_1'] = ['Děčín hl.n.;9:24', 'Praha Masarykovo nádraží;11:08'];
$trasa['682_1'] = ['Praha Masarykovo nádraží;15:48', 'Ústí nad Labem hl.n.;17:14'];
$trasa['683_1'] = ['Děčín hl.n.;11:24', 'Praha Masarykovo nádraží;13:08'];
$trasa['684_1'] = ['Praha Masarykovo nádraží;14:48', 'Děčín hl.n.;16:31'];
$trasa['685_1'] = ['Děčín hl.n.;13:24', 'Praha Masarykovo nádraží;15:08'];
$trasa['686_1'] = ['Praha Masarykovo nádraží;12:48', 'Děčín hl.n.;14:31'];
$trasa['687_1'] = ['Děčín hl.n.;15:24', 'Praha Masarykovo nádraží;17:08'];
$trasa['688_1'] = ['Praha Masarykovo nádraží;10:48', 'Děčín hl.n.;12:31'];
$trasa['689_1'] = ['Děčín hl.n.;17:24', 'Praha Masarykovo nádraží;19:08'];
$trasa['690_1'] = ['Praha Masarykovo nádraží;8:48', 'Děčín hl.n.;10:31'];
$trasa['691_1'] = ['Děčín hl.n.;19:24', 'Praha hl.n.;21:09'];
$trasa['692_1'] = ['Praha Masarykovo nádraží;6:48', 'Děčín hl.n.;8:31'];
$trasa['6930_1'] = ['Roudnice nad Labem;5:37', 'Děčín hl.n.;6:37'];
$trasa['6957_1'] = ['Ústí nad Labem hl.n.;22:15', 'Roudnice nad Labem;22:58'];
$trasa['6957_2'] = ['Ústí nad Labem hl.n.;22:15', 'Roudnice nad Labem;22:58'];
$trasa['6963_1'] = ['Děčín hl.n.;6:58', 'Ústí nad Labem hl.n.;7:27'];
$trasa['6968_1'] = ['Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55'];
$trasa['6969_1'] = ['Děčín hl.n.;21:24', 'Ústí nad Labem hl.n.;21:47'];


$typ['21811_1'] = 'Sv';
$typ['21810_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts121 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


