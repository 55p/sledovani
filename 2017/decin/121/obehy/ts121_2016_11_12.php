<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('671_1', '692_1', '681_1', '686_1', '687_1', '678_1', '6969_1', '6957_1');
$obeh[2] = array('6930_1', '6963_1', '679_1', '688_1', '685_1', '1903_1', '21810_1');
$obeh[3] = array('21811_1', '1900_1', '1901_1');
$obeh[4] = array('1902_1', '690_1', '683_1', '684_1', '689_1', '674_1', '6957_2', '6968_1');
$obeh[5] = array('675_1', '682_1', '1698_1');
$obeh[6] = array('601_1', '71260_1', '677_1', '680_1', '691_1', '670_1', '676_1');

$omezeni['1698_1'] = 'X';
$omezeni['1900_1'] = 'X';
$omezeni['1901_1'] = 'X';
$omezeni['1902_1'] = 'X';
$omezeni['1903_1'] = 'X';
$omezeni['21810_1'] = 'X5';
$omezeni['21811_1'] = 'X1';
$omezeni['601_1'] = 'X';
$omezeni['670_1'] = 'X1234';
$omezeni['671_1'] = 'X';
$omezeni['674_1'] = 'X';
$omezeni['675_1'] = 'X';
$omezeni['676_1'] = 'T';
$omezeni['677_1'] = 'X';
$omezeni['678_1'] = 'X';
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
$omezeni['71260_1'] = 'X';

$trasa['21810_1'] = array('Kolín;18:35','Praha odstavné nádraží;19:29');
$trasa['21811_1'] = array('Praha odstavné nádraží;4:11','Kolín;5:05');
$trasa['601_1'] = array('Kadaň-Prunéřov;5:55','Ústí nad Labem hl.n.;6:09');
$trasa['71260_1'] = array('Ústí nad Labem hl.n.;6:14','Děčín hl.n.;6:39');

$typ[-1] = 'R';

$typ['21810_1'] = 'Sv';
$typ['21811_1'] = 'Sv';


$trasa['1698_1'] = array('Ústí nad Labem hl.n.;17:46', 'Chomutov;18:49');
$trasa['1900_1'] = array('Kolín;5:37', 'Praha Masarykovo nádraží;6:28');
$trasa['1901_1'] = array('Praha Masarykovo nádraží;16:14', 'Kolín;17:05');
$trasa['1902_1'] = array('Kolín;6:48', 'Praha Masarykovo nádraží;7:36');
$trasa['1903_1'] = array('Praha Masarykovo nádraží;17:14', 'Kolín;18:05');
$trasa['670_1'] = array('Praha hl.n.;23:21', 'Děčín hl.n.;1:05');
$trasa['671_1'] = array('Děčín hl.n.;4:24', 'Praha Masarykovo nádraží;6:02');
$trasa['674_1'] = array('Praha Masarykovo nádraží;19:53', 'Ústí nad Labem hl.n.;21:14');
$trasa['675_1'] = array('Děčín hl.n.;6:24', 'Praha Masarykovo nádraží;8:02');
$trasa['676_1'] = array('Praha Masarykovo nádraží;18:53', 'Děčín hl.n.;20:31');
$trasa['677_1'] = array('Děčín hl.n.;7:24', 'Praha Masarykovo nádraží;9:02');
$trasa['678_1'] = array('Praha Masarykovo nádraží;17:53', 'Děčín hl.n.;19:31');
$trasa['679_1'] = array('Ústí nad Labem hl.n.;8:41', 'Praha Masarykovo nádraží;10:02');
$trasa['680_1'] = array('Praha Masarykovo nádraží;16:53', 'Děčín hl.n.;18:31');
$trasa['681_1'] = array('Děčín hl.n.;9:24', 'Praha Masarykovo nádraží;11:02');
$trasa['682_1'] = array('Praha Masarykovo nádraží;15:53', 'Ústí nad Labem hl.n.;17:14');
$trasa['683_1'] = array('Děčín hl.n.;11:24', 'Praha Masarykovo nádraží;13:02');
$trasa['684_1'] = array('Praha Masarykovo nádraží;14:53', 'Děčín hl.n.;16:31');
$trasa['685_1'] = array('Děčín hl.n.;13:24', 'Praha Masarykovo nádraží;15:02');
$trasa['686_1'] = array('Praha Masarykovo nádraží;12:53', 'Děčín hl.n.;14:31');
$trasa['687_1'] = array('Děčín hl.n.;15:24', 'Praha Masarykovo nádraží;17:02');
$trasa['688_1'] = array('Praha Masarykovo nádraží;10:53', 'Děčín hl.n.;12:31');
$trasa['689_1'] = array('Děčín hl.n.;17:24', 'Praha Masarykovo nádraží;19:02');
$trasa['690_1'] = array('Praha Masarykovo nádraží;8:53', 'Děčín hl.n.;10:31');
$trasa['691_1'] = array('Děčín hl.n.;19:24', 'Praha hl.n.;21:09');
$trasa['692_1'] = array('Praha Masarykovo nádraží;6:53', 'Děčín hl.n.;8:31');
$trasa['6930_1'] = array('Roudnice nad Labem;5:37', 'Děčín hl.n.;6:37');
$trasa['6957_1'] = array('Ústí nad Labem hl.n.;22:15', 'Roudnice nad Labem;22:58');
$trasa['6957_2'] = array('Ústí nad Labem hl.n.;22:15', 'Roudnice nad Labem;22:58');
$trasa['6963_1'] = array('Děčín hl.n.;6:58', 'Ústí nad Labem hl.n.;7:27');
$trasa['6968_1'] = array('Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55');
$trasa['6969_1'] = array('Děčín hl.n.;21:24', 'Ústí nad Labem hl.n.;21:47');


@$ts121 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>