<?php 
$zacatekPlatnosti = '16.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7504_1', '775_1', '758_1', '767_1');
$obeh[2] = array('778_1', '100775_1', '1963_1', '757_1', '352_1', '355_1', '752_1');
$obeh[3] = array('753_1', '354_1', '7516_1', '777_1', '754_1');
$obeh[4] = array('71710_1', '773_1', '762_1', '778_2', '100775_2', '353_1', '756_1', '357_1');
$obeh[5] = array('1541_1', '648_1', '643_1', '638_1', '655_1');
$obeh[6] = array('8200_1', '1839_1', '650_1', '641_1', '640_1', '653_1', '8018_1');
$obeh[7] = array('623_1', '652_1', '645_1', '1542_1', '899_1', '965_1');
$obeh[8] = array('964_1', '898_1', '633_1', '646_1', '1545_1', '636_1', '657_1', '635_1', '1540_1', '651_1');
$obeh[9] = array('656_1', '637_1', '644_1', '647_1', '632_1', '659_1', '659_2');
$obeh[10] = array('8259_1', '8258_1', '658_1', '635_2', '1540_2', '651_2', '8216_1', '646_2', '1545_2', '636_2', '657_2');
$obeh[11] = array('8260_1', '8207_1', '8206_1', '8276_1', '8283_1');
$obeh[12] = array('1830_1', '1831_1', '1833_1');
$obeh[13] = array('8201_1', '654_1', '1543_1', '642_1', '649_1', '630_1');
$obeh[14] = array('356_1', '755_1', '776_1', '7523_1', '7520_1', '71712_1', '779_1', '750_1');
$obeh[15] = array('751_1', '766_1', '759_1', '774_1', '7503_1');
$obeh[16] = array('99999_1');

$omezeni['100775_1'] = 'X';
$omezeni['100775_2'] = 'T';
$omezeni['1540_1'] = 'T';
$omezeni['1540_2'] = 'X, 6';
$omezeni['1545_1'] = 'X, 6';
$omezeni['1545_2'] = 'T';
$omezeni['1830_1'] = 'X, 6';
$omezeni['1831_1'] = '6';
$omezeni['1833_1'] = 'X';
$omezeni['1839_1'] = 'X';
$omezeni['1963_1'] = '6';
$omezeni['352_1'] = 'T';
$omezeni['623_1'] = 'X, 6';
$omezeni['633_1'] = 'X, 6';
$omezeni['635_1'] = 'T';
$omezeni['635_2'] = 'X, 6';
$omezeni['636_1'] = 'X, 6';
$omezeni['636_2'] = 'T';
$omezeni['637_1'] = 'X, 6';
$omezeni['643_1'] = 'X';
$omezeni['646_1'] = 'X, 6';
$omezeni['646_2'] = 'T';
$omezeni['648_1'] = 'X';
$omezeni['651_1'] = 'T';
$omezeni['651_2'] = 'X, 6';
$omezeni['652_1'] = 'X, 6';
$omezeni['653_1'] = 'XT';
$omezeni['656_1'] = 'X, 6';
$omezeni['657_1'] = 'X, 6';
$omezeni['657_2'] = 'T';
$omezeni['658_1'] = 'X, 6';
$omezeni['659_1'] = 'X,6';
$omezeni['659_2'] = 'T';
$omezeni['71710_1'] = 'X6';
$omezeni['71712_1'] = '6';
$omezeni['750_1'] = 'XT';
$omezeni['751_1'] = 'X6';
$omezeni['7520_1'] = 'XT';
$omezeni['752_1'] = 'XT';
$omezeni['753_1'] = 'X6';
$omezeni['757_1'] = 'T';
$omezeni['762_1'] = 'X6';
$omezeni['773_1'] = 'X6';
$omezeni['778_1'] = 'X6';
$omezeni['778_2'] = 'T';
$omezeni['8018_1'] = 'XT';
$omezeni['8200_1'] = 'X';
$omezeni['8201_1'] = 'X2345';
$omezeni['8206_1'] = 'X';
$omezeni['8207_1'] = 'X';
$omezeni['8216_1'] = 'X1234';
$omezeni['8258_1'] = 'X,6';
$omezeni['8259_1'] = 'X, 6';
$omezeni['8260_1'] = 'X';
$omezeni['8276_1'] = 'X';
$omezeni['8283_1'] = 'X';
$omezeni['898_1'] = '25';
$omezeni['899_1'] = 'z25';
$omezeni['964_1'] = 'X';
$omezeni['965_1'] = 'zX';

$trasa['100775_1'] = array('Klatovy;10:06','Plzeň hl.n.;10:55');
$trasa['100775_2'] = array('Klatovy;10:06','Plzeň hl.n.;10:55');
$trasa['1540_1'] = array('České Budějovice;14:03','Praha-Holešovice;16:38');
$trasa['1540_2'] = array('České Budějovice;14:03','Praha-Holešovice;16:38');
$trasa['1541_1'] = array('Praha hl.n.;5:34','České Budějovice;7:57');
$trasa['1542_1'] = array('České Budějovice;18:03','Praha hl.n.;20:26');
$trasa['1543_1'] = array('Praha-Holešocice;9:16','České Budějovice;11:57');
$trasa['1545_1'] = array('Praha-Holešocice;13:16','České Budějovice;15:57');
$trasa['1545_2'] = array('Praha-Holešocice;13:16','České Budějovice;15:57');
$trasa['352_1'] = array('Praha hl.n.;13:12','Plzeň hl.n.;14:48');
$trasa['353_1'] = array('Plzeň hl.n.;13:07','Praha hl.n.;14:41');
$trasa['354_1'] = array('Praha hl.n.;9:12','Plzeň hl.n.;10:48');
$trasa['356_1'] = array('Praha hl.n.;5:12','Plzeň hl.n.;6:48');
$trasa['357_1'] = array('Plzeň hl.n.;21:09','Praha hl.n.;22:41');
$trasa['623_1'] = array('Strakonice;5:01','České Budějovice;5:55');
$trasa['71710_1'] = array('Plzeň hl.n.;4:11','Klatovy;5:31');
$trasa['71712_1'] = array('Plzeň hl.n.;15:12','Klatovy;16:32');
$trasa['7503_1'] = array('Klatovy;18:46','Plzeň hl.n.;19:46');
$trasa['7504_1'] = array('Plzeň hl.n.;8:11','Klatovy;9:11');
$trasa['774_1'] = array('Praha hl.n.;15:12','Klatovy;17:52');
$trasa['775_1'] = array('Klatovy;10:06','Praha hl.n.;12:41');
$trasa['776_1'] = array('Praha hl.n.;11:12','Klatovy;13:52');
$trasa['777_1'] = array('Klatovy;14:06','Plzeň hl.n.;14:56');
$trasa['778_1'] = array('Praha hl.n.;7:12','Klatovy;9:52');
$trasa['778_2'] = array('Praha hl.n.;7:12','Klatovy;9:52');
$trasa['779_1'] = array('Klatovy;18:06','Praha hl.n.;20:41');
$trasa['99999_1'] = array('Údržba DKV;0:00;23:59');

$trasa['1830_1'] = array('Tábor;5:17', 'Praha hl.n.;6:58');
$trasa['1831_1'] = array('Praha hl.n.;8:25', 'Tábor;10:16');
$trasa['1833_1'] = array('Praha hl.n.;17:01', 'Tábor;18:52');
$trasa['1839_1'] = array('Tábor;6:13', 'České Budějovice;7:22');
$trasa['1963_1'] = array('Klatovy;12:06', 'Plzeň hl.n.;12:56');
$trasa['355_1'] = array('Plzeň hl.n.;17:07', 'Praha hl.n.;18:41');
$trasa['630_1'] = array('České Budějovice;20:03', 'Praha hl.n.;22:26');
$trasa['632_1'] = array('České Budějovice;19:03', 'Praha hl.n.;21:26');
$trasa['633_1'] = array('Praha hl.n.;6:34', 'České Budějovice;8:57');
$trasa['635_1'] = array('Praha hl.n.;7:34', 'České Budějovice;9:57');
$trasa['635_2'] = array('Praha-Holešovice;7:16', 'České Budějovice;9:57');
$trasa['636_1'] = array('České Budějovice;17:03', 'Praha-Holešovice;19:38');
$trasa['636_2'] = array('České Budějovice;17:03', 'Praha-Holešovice;19:38');
$trasa['637_1'] = array('Praha-Holešovice;8:16', 'České Budějovice;10:57');
$trasa['638_1'] = array('České Budějovice;16:03', 'Praha-Holešovice;18:38');
$trasa['640_1'] = array('České Budějovice;15:03', 'Praha-Holešovice;17:38');
$trasa['641_1'] = array('Praha-Holešovice;11:16', 'České Budějovice;13:57');
$trasa['642_1'] = array('České Budějovice;13:03', 'Praha-Holešovice;15:38');
$trasa['643_1'] = array('Praha-Holešovice;12:16', 'České Budějovice;14:57');
$trasa['644_1'] = array('České Budějovice;12:03', 'Praha-Holešovice;14:38');
$trasa['645_1'] = array('Praha hl.n.;14:34', 'České Budějovice;16:57');
$trasa['646_1'] = array('České Budějovice;10:03', 'Praha-Holešovice;12:38');
$trasa['646_2'] = array('České Budějovice;10:03', 'Praha-Holešovice;12:38');
$trasa['647_1'] = array('Praha-Holešovice;15:16', 'České Budějovice;17:57');
$trasa['648_1'] = array('České Budějovice;9:03', 'Praha-Holešovice;11:38');
$trasa['649_1'] = array('Praha-Holešovice;16:16', 'České Budějovice;18:57');
$trasa['650_1'] = array('České Budějovice;8:03', 'Praha-Holešovice;10:38');
$trasa['651_1'] = array('Praha-Holešovice;17:16', 'České Budějovice;19:57');
$trasa['651_2'] = array('Praha-Holešovice;17:16', 'České Budějovice;19:57');
$trasa['652_1'] = array('České Budějovice;7:03', 'Praha hl.n.;9:26');
$trasa['653_1'] = array('Praha-Holešovice;18:16', 'České Budějovice;20:57');
$trasa['654_1'] = array('České Budějovice;6:03', 'Praha-Holešovice;8:38');
$trasa['655_1'] = array('Praha-Holešovice;19:16', 'České Budějovice;21:57');
$trasa['656_1'] = array('České Budějovice;5:03', 'Praha-Holešovice;7:38');
$trasa['657_1'] = array('Praha-Holešovice;20:16', 'České Budějovice;22:57');
$trasa['657_2'] = array('Praha-Holešovice;20:16', 'České Budějovice;22:57');
$trasa['658_1'] = array('Tábor;4:59', 'Praha-Holešovice;6:38');
$trasa['659_1'] = array('Praha hl.n.;22:34', 'Tábor;24:00');
$trasa['659_2'] = array('Praha hl.n.;22:34', 'Tábor;24:00');
$trasa['750_1'] = array('Praha hl.n.;23:37', 'Plzeň hl.n.;1:10');
$trasa['7516_1'] = array('Plzeň hl.n.;12:11', 'Klatovy;13:11');
$trasa['751_1'] = array('Plzeň hl.n.;4:07', 'Praha hl.n.;5:41');
$trasa['7520_1'] = array('Plzeň hl.n.;16:11', 'Klatovy;17:11');
$trasa['7523_1'] = array('Klatovy;14:46', 'Plzeň hl.n.;15:46');
$trasa['752_1'] = array('Praha hl.n.;20:12', 'Plzeň hl.n.;21:48');
$trasa['753_1'] = array('Cheb;4:33', 'Praha hl.n.;7:41');
$trasa['754_1'] = array('Praha hl.n.;18:12', 'Cheb;21:25');
$trasa['755_1'] = array('Plzeň hl.n.;8:07', 'Praha hl.n.;9:41');
$trasa['756_1'] = array('Praha hl.n.;16:12', 'Plzeň hl.n.;17:48');
$trasa['757_1'] = array('Cheb;8:34', 'Praha hl.n.;11:41');
$trasa['758_1'] = array('Praha hl.n.;14:12', 'Cheb;17:26');
$trasa['759_1'] = array('Cheb;10:34', 'Praha hl.n.;13:41');
$trasa['762_1'] = array('Praha hl.n.;10:12', 'Plzeň hl.n.;11:48');
$trasa['766_1'] = array('Praha hl.n.;6:12', 'Cheb;9:26');
$trasa['767_1'] = array('Cheb;18:34', 'Praha hl.n.;21:41');
$trasa['773_1'] = array('Klatovy;6:06', 'Praha hl.n.;8:41');
$trasa['8018_1'] = array('České Budějovice;22:43', 'Strakonice;23:50');
$trasa['8200_1'] = array('České Budějovice;4:32', 'Tábor;5:48');
$trasa['8201_1'] = array('Tábor;3:58', 'České Budějovice;5:23');
$trasa['8206_1'] = array('České Budějovice;12:24', 'Tábor;13:38');
$trasa['8207_1'] = array('Benešov u Prahy;6:21', 'České Budějovice;8:32');
$trasa['8216_1'] = array('České Budějovice;22:34', 'Tábor;0:10');
$trasa['8258_1'] = array('Veselí nad Lužnicí;4:28', 'Tábor;4:55');
$trasa['8259_1'] = array('Tábor;0:02', 'Veselí nad Lužnicí;0:30');
$trasa['8260_1'] = array('Tábor;4:15', 'Benešov u Prahy;5:12');
$trasa['8276_1'] = array('Tábor;15:08', 'Benešov u Prahy;16:12');
$trasa['8283_1'] = array('Benešov u Prahy;16:53', 'Tábor;17:46');
$trasa['898_1'] = array('Pardubice hl.n.;5:01', 'Praha hl.n.;6:06');
$trasa['899_1'] = array('Praha hl.n.;22:02', 'Pardubice hl.n.;23:07');
$trasa['964_1'] = array('Čáslav;4:52', 'Praha hl.n.;5:51');
$trasa['965_1'] = array('Praha hl.n.;22:06', 'Čáslav;23:03');



for ($i = 1540; $i <= 1546; $i++) {
  $typ[$i] = 'R';
}
$typ[350] = 'Ex';
$typ[351] = 'Ex';
$typ[352] = 'Ex';
$typ[353] = 'Ex';
$typ[356] = 'EC';
$typ[357] = 'EC';
$typ[623] = 'R';
$typ[630] = 'R';
$typ[632] = 'R';
$typ[633] = 'R';
$typ[635] = 'R';
$typ[636] = 'R';
$typ[637] = 'R';
$typ[638] = 'R';
$typ[640] = 'R';
$typ[641] = 'R';
$typ[642] = 'R';
$typ[643] = 'R';
$typ[644] = 'R';
$typ[645] = 'R';
$typ[646] = 'R';
$typ[647] = 'R';
$typ[648] = 'R';
$typ[649] = 'R';
$typ[650] = 'R';
$typ[651] = 'R';
$typ[652] = 'R';
$typ[653] = 'R';
$typ[654] = 'R';
$typ[655] = 'R';
$typ[656] = 'R';
$typ[657] = 'R';
$typ[658] = 'R';
$typ[659] = 'R';
$typ[752] = 'Rx';
$typ[753] = 'Rx';
$typ[754] = 'Rx';
$typ[755] = 'Rx';
$typ[756] = 'Rx';
$typ[757] = 'Rx';
$typ[760] = 'Rx';
$typ[761] = 'Rx';
$typ[762] = 'Rx';
$typ[763] = 'Rx';
$typ[764] = 'Rx';
$typ[765] = 'Rx';
$typ[768] = 'Rx';
$typ[770] = 'Rx';
$typ[771] = 'Rx';
$typ[772] = 'Rx';
$typ[773] = 'Rx';
$typ[774] = 'Rx';
$typ[775] = 'Rx';
$typ[776] = 'Rx';
$typ[777] = 'Rx';
$typ[778] = 'Rx';
$typ[779] = 'Rx';
$typ[898] = 'R';
$typ[899] = 'R';

@$ts303 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>