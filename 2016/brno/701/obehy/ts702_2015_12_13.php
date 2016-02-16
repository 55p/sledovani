<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1722_1', '560_1', '883_1', '888_1', '887_1', '884_1', '1732_1', '891_1', '880_1', '551_1');
$obeh[2] = array('1636_1', '1637_1', '1729_1', '891_2', '880_2', '561_1', '551_2');
$obeh[3] = array('550_1', '560_2', '885_1', '886_1', '889_1', '882_1', '101722_1', '1731_1', '561_2', '4145_1', '4150_1', '1733_1');

$omezeni['101722_1'] = 'X';
$omezeni['1636_1'] = '25';
$omezeni['1637_1'] = '25';
$omezeni['1722_1'] = '6';
$omezeni['1729_1'] = 'X';
$omezeni['1731_1'] = 'X1234';
$omezeni['1732_1'] = 'X';
$omezeni['1733_1'] = 'X5';
$omezeni['4145_1'] = 'X5';
$omezeni['4150_1'] = 'X5';
$omezeni['550_1'] = 'X,T';
$omezeni['551_1'] = '25';
$omezeni['551_2'] = 'X1234';
$omezeni['560_1'] = 'X,T';
$omezeni['560_2'] = '6';
$omezeni['561_1'] = 'X5';
$omezeni['561_2'] = 'X1234,25';
$omezeni['880_1'] = '25';
$omezeni['880_2'] = 'X';
$omezeni['882_1'] = '25';
$omezeni['885_1'] = '25';
$omezeni['886_1'] = '25';
$omezeni['889_1'] = '25';
$omezeni['891_1'] = '25';
$omezeni['891_2'] = 'X';

$trasa['101722_1'] = array('Uherské Hradiště;6:34','Brno hl.n.;8:34');
$trasa['1722_1'] = array('Bylnice;5:05','Uherské Hradiště;6:26');

$trasa['1636_1'] = array('Brno hl.n.;8:11', 'Žďár nad Sázavou;10:16');
$trasa['1637_1'] = array('Žďár nad Sázavou;17:40', 'Brno hl.n.;19:54');
$trasa['1729_1'] = array('Brno hl.n.;13:28', 'Staré Město u Uherského Hradiště;15:27');
$trasa['1731_1'] = array('Brno hl.n.;15:28', 'Staré Město u Uherského Hradiště;17:27');
$trasa['1732_1'] = array('Staré Město u Uherského Hradiště;16:35', 'Brno hl.n.;18:33');
$trasa['1733_1'] = array('Brno hl.n.;17:28', 'Bylnice;20:42');
$trasa['4145_1'] = array('Brno hl.n.;13:48', 'Nemotice;14:53');
$trasa['4150_1'] = array('Nemotice;15:11', 'Brno-Židenice;16:11');

$trasa['550'] = array('Zlín střed;5:15', 'Otrokovice;5:27');
$trasa['551'] = array('Otrokovice;22:30', 'Zlín střed;22:43');
$trasa['560'] = array('Veselí nad Moravou;6:54', 'Staré Město u Uherského Hradiště;7:16');
$trasa['561'] = array('Staré Město u Uherského Hradiště;20:45', 'Veselí nad Moravou;21:11');

$trasa['880']   = array('Luhačovice;18:20', 'Staré Město u Uherského Hradiště;19:06');
$trasa['882_1'] = array('Luhačovice;16:20', 'Staré Město u Uherského Hradiště;17:06');
$trasa['884_1'] = array('Luhačovice;14:20', 'Staré Město u Uherského Hradiště;15:06');
$trasa['886_1'] = array('Luhačovice;12:20', 'Staré Město u Uherského Hradiště;13:06');
$trasa['888_1'] = array('Luhačovice;10:20', 'Staré Město u Uherského Hradiště;11:06');

$trasa['883_1'] = array('Staré Město u Uherského Hradiště;8:53', 'Luhačovice;9:37');
$trasa['885_1'] = array('Staré Město u Uherského Hradiště;10:53', 'Luhačovice;11:37');
$trasa['887_1'] = array('Staré Město u Uherského Hradiště;12:53', 'Luhačovice;13:37');
$trasa['889_1'] = array('Staré Město u Uherského Hradiště;14:53', 'Luhačovice;15:37');
$trasa['891'] = array('Staré Město u Uherského Hradiště;16:53', 'Luhačovice;17:37');

for ($i = 880; $i < 893; $i++) {
  $typ[$i] = 'R';
}
$typ[550] = $typ[551] = $typ[560] = $typ[561] = 'IC';

@$ts702 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>