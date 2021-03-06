<?php 
$zacatekPlatnosti = '1.11.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('874_1', '867_1', '913_1', '902_1', '858_1', '1403_1', '70301_1', '1402_1', '1403_2', '70300_1', '1402_2', '860_1', '4765_1');
$obeh[2] = array('4760_1', '1973_1', '905_1', '910_1', '868_1', '873_1');
$obeh[3] = array('823_1', '834_1', '976_1', '965_1', '965_2');
$obeh[4] = array('964_1', '863_1', '909_1', '906_1', '864_1', '973_1', '827_1', '836_1', '839_1');
$obeh[5] = array('975_1', '975_2', '982_1', '989_1');
$obeh[6] = array('821_1', '840_1', '831_1', '830_1', '972_1');
$obeh[7] = array('5891', '1904', '985_1', '863_2', '909_2', '906_2', '864_2', '877_1', '861_1');

$omezeni[5891] = $omezeni[1904] = 'X';
$typ [1904] = 'Sp';
$typ [5891] = 'Sv';

$trasa['1904'] = array('Nymburk hl.n.;5:59','Praha hl.n.;7:01');
$trasa['5891'] = array('Odstavné nádraží Praha-Jih;3:33','Nymburk hl.n.;4:29');

$omezeni['1402_1'] = '6';
$omezeni['1402_2'] = 'T';
$omezeni['1403_1'] = '6';
$omezeni['1403_2'] = 'T';
$omezeni['1973_1'] = 'X,6';
$omezeni['4760_1'] = 'X';
$omezeni['4765_1'] = 'zX';
$omezeni['601_1'] = 'X';
$omezeni['70300_1'] = 'T';
$omezeni['70301_1'] = '6';
$omezeni['71230_1'] = 'X';
$omezeni['821_1'] = 'X,6';
$omezeni['823_1'] = 'X';
$omezeni['827_1'] = '6';
$omezeni['836_1'] = '6';
$omezeni['839_1'] = '6';
$omezeni['840_1'] = 'X,6';
$omezeni['858_1'] = 'X';
$omezeni['860_1'] = 'T';
$omezeni['861_1'] = 'T';
$omezeni['863_1'] = 'X,T';
$omezeni['863_2'] = '6';
$omezeni['864_1'] = 'X,T';
$omezeni['864_2'] = '6';
$omezeni['867_1'] = 'X';
$omezeni['874_1'] = 'X';
$omezeni['877_1'] = '6';
$omezeni['902_1'] = 'X';
$omezeni['906_1'] = 'X,T';
$omezeni['906_2'] = '6';
$omezeni['909_1'] = 'X,T';
$omezeni['909_2'] = '6';
$omezeni['913_1'] = 'X';
$omezeni['964_1'] = 'X';
$omezeni['965_1'] = 'zX';
$omezeni['965_2'] = 'X5,6';
$omezeni['973_1'] = '6';
$omezeni['975_1'] = 'X,6';
$omezeni['975_2'] = 'T';
$omezeni['985_1'] = 'X';

$trasa['1402_1'] = array('Olomouc hl.n.;19:07', 'Brno hl.n.;20:44');
$trasa['1402_2'] = array('Zábřeh na Moravě;18:36', 'Brno hl.n.;20:44');
$trasa['1403_1'] = array('Brno hl.n.;6:28', 'Jeseník;10:09');
$trasa['1403_2'] = array('Brno hl.n.;6:28', 'Olomouc hl.n.;7:51');
$trasa['1973_1'] = array('Česká Třebová;5:41', 'Brno hl.n.;7:14');
$trasa['4760_1'] = array('Letovice;4:32', 'Česká Třebová;5:18');
$trasa['4765_1'] = array('Česká Třebová;22:59', 'Letovice;23:40');
$trasa['821_1'] = array('Brno hl.n.;5:02', 'Bohumín;7:34');
$trasa['823_1'] = array('Brno hl.n.;5:52', 'Bohumín;8:34');
$trasa['827_1'] = array('Brno hl.n.;8:52', 'Bohumín;11:39');
$trasa['830_1'] = array('Bohumín;15:35', 'Brno hl.n.;18:07');
$trasa['831_1'] = array('Brno hl.n.;11:52', 'Bohumín;14:34');
$trasa['834_1'] = array('Bohumín;13:35', 'Brno hl.n.;16:07');
$trasa['836_1'] = array('Bohumín;12:35', 'Brno hl.n.;15:07');
$trasa['839_1'] = array('Brno hl.n.;15:52', 'Bohumín;18:34');
$trasa['840_1'] = array('Bohumín;8:35', 'Brno hl.n.;11:07');
$trasa['858_1'] = array('Brno hl.n.;20:57', 'Česká Třebová;22:10');
$trasa['860_1'] = array('Brno hl.n.;20:45', 'Česká Třebová;21:57');
$trasa['861_1'] = array('Česká Třebová;7:48', 'Brno hl.n.;9:02');
$trasa['863_1'] = array('Praha hl.n.;7:51', 'Brno hl.n.;11:02');
$trasa['863_2'] = array('Praha hl.n.;7:51', 'Brno hl.n.;11:02');
$trasa['864_1'] = array('Brno hl.n.;16:57', 'Praha hl.n.;20:15');
$trasa['864_2'] = array('Brno hl.n.;16:57', 'Praha hl.n.;20:15');
$trasa['867_1'] = array('Praha hl.n.;11:51', 'Brno hl.n.;15:02');
$trasa['868_1'] = array('Brno hl.n.;12:57', 'Praha hl.n.;16:15');
$trasa['873_1'] = array('Praha hl.n.;17:51', 'Brno hl.n.;21:02');
$trasa['874_1'] = array('Brno hl.n.;6:57', 'Praha hl.n.;10:15');
$trasa['877_1'] = array('Praha hl.n.;21:02', 'Česká Třebová;22:47');
$trasa['902_1'] = array('Šumperk;18:09', 'Brno hl.n.;20:44');
$trasa['905_1'] = array('Brno hl.n.;7:18', 'Šumperk;9:40');
$trasa['906_1'] = array('Šumperk;14:09', 'Brno hl.n.;16:44');
$trasa['906_2'] = array('Šumperk;14:09', 'Brno hl.n.;16:44');
$trasa['909_1'] = array('Brno hl.n.;11:13', 'Šumperk;13:41');
$trasa['909_2'] = array('Brno hl.n.;11:13', 'Šumperk;13:41');
$trasa['910_1'] = array('Šumperk;10:09', 'Brno hl.n.;12:44');
$trasa['913_1'] = array('Brno hl.n.;15:13', 'Šumperk;17:40');
$trasa['964_1'] = array('Čáslav;4:50', 'Praha hl.n.;5:57');
$trasa['965_1'] = array('Praha hl.n.;21:59', 'Čáslav;23:03');
$trasa['965_2'] = array('Praha hl.n.;21:59', 'Havlíčkův Brod;23:55');
$trasa['972_1'] = array('Brno hl.n.;18:20', 'Praha hl.n.;21:57');
$trasa['973_1'] = array('Havlíčkův Brod;6:03', 'Brno hl.n.;7:45');
$trasa['975_1'] = array('Praha hl.n.;5:59', 'Brno hl.n.;9:41');
$trasa['975_2'] = array('Havlíčkův Brod;8:03', 'Brno hl.n.;9:41');
$trasa['976_1'] = array('Brno hl.n.;16:20', 'Praha hl.n.;19:57');
$trasa['982_1'] = array('Brno hl.n.;12:20', 'Praha hl.n.;15:57');
$trasa['985_1'] = array('Praha hl.n.;14:59', 'Brno hl.n.;18:41');
$trasa['989_1'] = array('Praha hl.n.;17:59', 'Brno hl.n.;21:44');

$trasa['70301'] = array('Zábřeh na Moravě;17:40','Olomouc hl.n.;18:37');
$trasa['70300'] = array('Olomouc hl.n.;8:06','Zábřeh na Moravě;8:36');
$trasa[71230] = array('Praha–Vršovice;4:07', 'Ústí nad Labem hl.n.;5:37');
$trasa[601] = array('Ústí nad Label hl.n.;6:13', 'Praha Masarykovo nádraží;7:26');

@$ts304 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>