<?php 
$zacatekPlatnosti = '21.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1722_1', '560_1', '883_1', '888_1', '887_1', '884_1', '1732_1', '14154_1', '891_1', '880_1', '561_1', '551_1');
$obeh[2] = array('1636_1', '1637_1', '1729_1', '1732_2', '14154_2', '891_2', '880_2', '551_2', '561_2');
$obeh[3] = array('550_1', '101722_1', '1723_1', '1728_1', '1731_1', '4343_1', '1720_1', '4145_1', '4150_1', '1733_1', '560_2', '885_1', '886_1', '889_1', '882_1', '561_3');

$omezeni['101722_1'] = 'X1234';
$omezeni['14154_1'] = 'X1,X2,X3,X5';
$omezeni['14154_2'] = 'X4';
$omezeni['1636_1'] = '25';
$omezeni['1637_1'] = '25';
$omezeni['1720_1'] = 'X5';
$omezeni['1722_1'] = '6';
$omezeni['1723_1'] = 'X1234';
$omezeni['1728_1'] = 'X1234';
$omezeni['1729_1'] = 'X';
$omezeni['1731_1'] = 'X1234';
$omezeni['1732_1'] = 'X1,X2,X3,X5';
$omezeni['1732_2'] = 'X4';
$omezeni['1733_1'] = 'X5';
$omezeni['4145_1'] = 'X5';
$omezeni['4150_1'] = 'X5';
$omezeni['4343_1'] = 'X4';
$omezeni['550_1'] = 'zX';
$omezeni['551_1'] = '25';
$omezeni['551_2'] = 'X1,X2,X3';
$omezeni['560_1'] = 'XT';
$omezeni['560_2'] = '6';
$omezeni['561_1'] = 'X4';
$omezeni['561_2'] = 'X5';
$omezeni['561_3'] = 'X1,X2,X3,25';
$omezeni['880_1'] = 'X4,25';
$omezeni['880_2'] = 'X1,X2,X3,X5';
$omezeni['885_1'] = '25';
$omezeni['886_1'] = '25';
$omezeni['889_1'] = '25';
$omezeni['891_1'] = 'X4,25';
$omezeni['891_2'] = 'X1,X2,X3,X5';
$omezeni['882_1'] = '25';

$trasa['101722_1'] = array('Uherské Hradiště;6:34','Brno hl.n.;8:34');
$trasa['14154_1'] = array('Slavkov u Brna;18:43','Brno-Židenice;19:05');
$trasa['14154_2'] = array('Slavkov u Brna;18:43','Brno-Židenice;19:05');
$trasa['1722_1'] = array('Bylnice;5:05','Uherské Hradiště;6:26');
$trasa['1732_1'] = array('Staré Město u Uherského Hradiště;16:35','Slavkov u Brna;18:06');
$trasa['1732_2'] = array('Staré Město u Uherského Hradiště;16:35','Slavkov u Brna;18:06');

$trasa['1636_1'] = array('Brno hl.n.;8:11', 'Žďár nad Sázavou;10:16');
$trasa['1637_1'] = array('Žďár nad Sázavou;17:40', 'Brno hl.n.;19:54');
$trasa['1720_1'] = array('Bojkovice;5:05', 'Brno hl.n.;7:33');
$trasa['1729_1'] = array('Brno hl.n.;13:28', 'Staré Město u Uherského Hradiště;15:27');
$trasa['4145_1'] = array('Brno hl.n.;13:48', 'Nemotice;14:53');
$trasa['4343_1'] = array('Staré Město u Uherského Hradiště;18:05', 'Bojkovice město;19:19');


$trasa['1723_1'] = array('Brno hl.n.;9:28', 'Staré Město u Uherského Hradiště;11:27');
$trasa['1728_1'] = array('Staré Město u Uherského Hradiště;12:35', 'Slavkov u Brna;14:05');
$trasa['1731_1'] = array('Slavkov u Brna;15:54', 'Staré Město u Uherského Hradiště;17:27');
$trasa['4150_1'] = array('Nemotice;15:11', 'Slavkov u Brna;15:41');
$trasa['1733_1'] = array('Slavkov u Brna;17:54', 'Bylnice;20:42');


$trasa['550'] = array('Zlín střed;5:15', 'Otrokovice;5:27');
$trasa['551'] = array('Otrokovice;22:30', 'Zlín střed;22:43');
$trasa['560'] = array('Veselí nad Moravou;6:54', 'Staré Město u Uherského Hradiště;7:16');
$trasa['561'] = array('Staré Město u Uherského Hradiště;20:45', 'Veselí nad Moravou;21:11');

$trasa['880']   = array('Luhačovice;18:20', 'Staré Město u Uherského Hradiště;19:06');
$trasa['882'] = array('Luhačovice;16:20', 'Staré Město u Uherského Hradiště;17:06');
$trasa['884'] = array('Luhačovice;14:20', 'Staré Město u Uherského Hradiště;15:06');
$trasa['886'] = array('Luhačovice;12:20', 'Staré Město u Uherského Hradiště;13:06');
$trasa['888'] = array('Luhačovice;10:20', 'Staré Město u Uherského Hradiště;11:06');

$trasa['883'] = array('Staré Město u Uherského Hradiště;8:53', 'Luhačovice;9:37');
$trasa['885'] = array('Staré Město u Uherského Hradiště;10:53', 'Luhačovice;11:37');
$trasa['887'] = array('Staré Město u Uherského Hradiště;12:53', 'Luhačovice;13:37');
$trasa['889'] = array('Staré Město u Uherského Hradiště;14:53', 'Luhačovice;15:37');
$trasa['891'] = array('Staré Město u Uherského Hradiště;16:53', 'Luhačovice;17:37');

for ($i = 880; $i < 893; $i++) {
  $typ[$i] = 'R';
}
$typ[550] = $typ[551] = $typ[560] = $typ[561] = 'IC';
$typ[14154] = 'Sv';
$poznamkaObehu['14154_1'] = $poznamkaObehu['14154_2'] = array('Sv 104154', 'Sv 104154');

@$ts702 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>