<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['671_1', '692_1', '681_1', '686_1', '687_1', '676_1', '6969_1', '6957_1'];
$obeh[2] = ['6930_1', '6802_1', '6805_1', '71261_1', '1657_1', '1656_1', '6431_1'];
$obeh[3] = ['6443_1', '5904_1', '5879_1', '5874_1', '1311_1', '1310_1'];
$obeh[4] = ['6402_1', '0_1', '676_2', '6969_2'];
$obeh[5] = ['6401_1', '5872_1'];
$obeh[6] = ['6404_1', '1655_1', '1654_1', '1696_1'];
$obeh[7] = ['6823_1', '6963_1', '679_1', '688_1', '685_1', '680_1', '691_1', '670_1'];
$obeh[8] = ['673_1', '690_1', '683_1', '684_1', '689_1', '672_1'];
$obeh[9] = ['21811_1', '1902_1', '1901_1'];
$obeh[10] = ['1900_1', '1903_1', '21810_1', '670_2'];

$omezeni['0_1'] = '6957';
$omezeni['1310_1'] = 'X1, X5';
$omezeni['1311_1'] = 'X1, X5';
$omezeni['1654_1'] = 'X';
$omezeni['1655_1'] = 'X';
$omezeni['1656_1'] = 'X';
$omezeni['1657_1'] = 'X';
$omezeni['1696_1'] = 'X';
$omezeni['1900_1'] = 'X';
$omezeni['1901_1'] = 'X';
$omezeni['1902_1'] = 'X';
$omezeni['1903_1'] = 'X';
$omezeni['21810_1'] = 'X5';
$omezeni['21811_1'] = 'X1';
$omezeni['5872_1'] = 'X';
$omezeni['5874_1'] = 'X';
$omezeni['5879_1'] = 'X';
$omezeni['5904_1'] = 'X';
$omezeni['6401_1'] = 'X';
$omezeni['6402_1'] = 'X';
$omezeni['6404_1'] = 'X';
$omezeni['6431_1'] = 'X';
$omezeni['6443_1'] = 'X';
$omezeni['670_1'] = 'X1234';
$omezeni['670_2'] = 'T';
$omezeni['671_1'] = 'X';
$omezeni['672_1'] = 'X1234';
$omezeni['673_1'] = 'X';
$omezeni['676_1'] = 'X';
$omezeni['676_2'] = 'T';
$omezeni['679_1'] = 'X';
$omezeni['6802_1'] = 'X';
$omezeni['6805_1'] = 'X';
$omezeni['680_1'] = 'X';
$omezeni['681_1'] = 'X';
$omezeni['6823_1'] = 'X';
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
$omezeni['6963_1'] = 'X';
$omezeni['6969_1'] = 'X1234';
$omezeni['6969_2'] = 'T';
$omezeni['71261_1'] = 'X';

$trasa['1310_1'] = ['Praha jih;20:35','Nymburk hl.n.;21:35'];
$trasa['1311_1'] = ['Nymburk hl.n.;18:26','Praha jih;19:35'];
$trasa['21810_1'] = ['Kolín;18:36','Praha jih;19:56'];
$trasa['21811_1'] = ['Praha jih;4:06','Kolín;4:58'];
$trasa['5904_1'] = ['Kolín;7:29','Nymburk hl.n.;7:56'];
$trasa['71261_1'] = ['Děčín hl.n.;12:45','Ústí nad Labem hl.n.;13:04'];

$trasa['1654_1'] = ['Roudnice nad Labem;14:26', 'Ústí nad Labem hl.n.;14:54'];
$trasa['1655_1'] = ['Ústí nad Labem hl.n.;12:42', 'Roudnice nad Labem;13:10'];
$trasa['1656_1'] = ['Lovosice;15:20', 'Ústí nad Labem západ;15:36'];
$trasa['1657_1'] = ['Ústí nad Labem hl.n.;14:42', 'Lovosice;14:57'];
$trasa['1696_1'] = ['Ústí nad Labem hl.n.;15:46', 'Chomutov;16:49'];
$trasa['1900_1'] = ['Kolín;5:42', 'Praha Masarykovo nádraží;6:38'];
$trasa['1901_1'] = ['Praha Masarykovo nádraží;16:12', 'Kolín;16:54'];
$trasa['1902_1'] = ['Kolín;6:39', 'Praha Masarykovo nádraží;7:38'];
$trasa['1903_1'] = ['Praha Masarykovo nádraží;16:54', 'Kolín;17:50'];
$trasa['5872_1'] = ['Kolín;8:29', 'Nymburk hl.n.;8:56'];
$trasa['5874_1'] = ['Kolín;9:29', 'Nymburk hl.n.;9:56'];
$trasa['5879_1'] = ['Nymburk hl.n.;8:01', 'Kolín;8:28'];
$trasa['6401_1'] = ['Ústí nad Labem západ;5:03', 'Kolín;7:58'];
$trasa['6402_1'] = ['Nymburk hl.n.;5:31', 'Ústí nad Labem západ;7:51'];
$trasa['6404_1'] = ['Nymburk hl.n.;6:31', 'Ústí nad Labem západ;8:51'];
$trasa['6431_1'] = ['Ústí nad Labem západ;17:03', 'Mělník;18:03'];
$trasa['6443_1'] = ['Mělník;5:02', 'Kolín;6:58'];
$trasa['670_1'] = ['Praha hl.n.;23:22', 'Děčín hl.n.;1:03'];
$trasa['670_2'] = ['Praha hl.n.;23:22', 'Děčín hl.n.;1:03'];
$trasa['671_1'] = ['Děčín hl.n.;4:26', 'Praha hl.n.;6:08'];
$trasa['672_1'] = ['Praha hl.n.;20:51', 'Děčín hl.n.;22:32'];
$trasa['673_1'] = ['Děčín hl.n.;5:26', 'Praha hl.n.;7:08'];
$trasa['676_1'] = ['Praha hl.n.;18:51', 'Děčín hl.n.;20:32'];
$trasa['676_2'] = ['Praha hl.n.;18:51', 'Děčín hl.n.;20:32'];
$trasa['679_1'] = ['Ústí nad Labem hl.n.;8:43', 'Praha hl.n.;10:08'];
$trasa['6802_1'] = ['Děčín hl.n.;7:30', 'Kadaň-Prunéřov;9:29'];
$trasa['6805_1'] = ['Kadaň-Prunéřov;10:29', 'Děčín hl.n.;12:24'];
$trasa['680_1'] = ['Praha hl.n.;16:51', 'Děčín hl.n.;18:32'];
$trasa['681_1'] = ['Děčín hl.n.;9:26', 'Praha hl.n.;11:08'];
$trasa['6823_1'] = ['Chomutov;4:39', 'Děčín hl.n.;6:24'];
$trasa['683_1'] = ['Děčín hl.n.;11:26', 'Praha hl.n.;13:08'];
$trasa['684_1'] = ['Praha hl.n.;14:51', 'Děčín hl.n.;16:32'];
$trasa['685_1'] = ['Děčín hl.n.;13:26', 'Praha hl.n.;15:08'];
$trasa['686_1'] = ['Praha hl.n.;12:51', 'Děčín hl.n.;14:32'];
$trasa['687_1'] = ['Děčín hl.n.;15:26', 'Praha hl.n.;17:08'];
$trasa['688_1'] = ['Praha hl.n.;10:51', 'Děčín hl.n.;12:32'];
$trasa['689_1'] = ['Děčín hl.n.;17:26', 'Praha hl.n.;19:08'];
$trasa['690_1'] = ['Praha hl.n.;8:51', 'Děčín hl.n.;10:32'];
$trasa['691_1'] = ['Děčín hl.n.;19:26', 'Praha hl.n.;21:08'];
$trasa['692_1'] = ['Praha hl.n.;6:51', 'Děčín hl.n.;8:32'];
$trasa['6930_1'] = ['Roudnice nad Labem;5:37', 'Děčín hl.n.;6:35'];
$trasa['6957_1'] = ['Ústí nad Labem hl.n.;22:16', 'Roudnice nad Labem;22:58'];
$trasa['6963_1'] = ['Děčín hl.n.;6:58', 'Ústí nad Labem hl.n.;7:27'];
$trasa['6969_1'] = ['Děčín hl.n.;21:24', 'Ústí nad Labem hl.n.;21:47'];
$trasa['6969_2'] = ['Děčín hl.n.;21:24', 'Ústí nad Labem hl.n.;21:47'];


$typ['1311_1'] = 'Sv';
$typ['1310_1'] = 'Sv';
$typ['21811_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts121 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


