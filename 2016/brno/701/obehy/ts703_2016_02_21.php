<?php 
$zacatekPlatnosti = '21.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('550_1', '101722_1', '1722_1', '881_1', '890_1', '885_1', '886_1', '889_1', '882_1', '4343_1', '551_1');
$obeh[2] = array('1720_1', '4145_1', '4150_1', '1733_1', '1733_2', '550_2', '101722_2', '1723_1', '1728_1', '1731_1', '551_2');

$omezeni['101722_1'] = '6';
$omezeni['101722_2'] = 'X5';
$omezeni['1720_1'] = 'X1234';
$omezeni['1722_1'] = 'X';
$omezeni['1723_1'] = 'X5';
$omezeni['1728_1'] = 'X5';
$omezeni['1731_1'] = 'X5';
$omezeni['1733_1'] = 'X1234';
$omezeni['1733_2'] = 'T';
$omezeni['4145_1'] = 'X1234';
$omezeni['4150_1'] = 'X1234';
$omezeni['4343_1'] = 'X1,X2,X3,X5';
$omezeni['550_1'] = '6';
$omezeni['550_2'] = 'X5';
$omezeni['551_1'] = 'X4';
$omezeni['551_2'] = 'X5';
$omezeni['881_1'] = 'X';
$omezeni['882_1'] = 'X';
$omezeni['885_1'] = 'X';
$omezeni['886_1'] = 'X';
$omezeni['889_1'] = 'X';
$omezeni['890_1'] = 'X';

$trasa['101722_1'] = array('Uherské Hradiště;6:34','Brno hl.n.;8:34');
$trasa['101722_2'] = array('Uherské Hradiště;6:34','Brno hl.n.;8:34');
$trasa['1722_1'] = array('Bylnice;5:05','Uherské Hradiště;6:26');

$trasa['1720_1'] = array('Bojkovice;5:05', 'Brno hl.n.;7:33');
$trasa['1723_1'] = array('Brno hl.n.;9:28', 'Staré Město u Uherského Hradiště;11:27');
$trasa['1728_1'] = array('Staré Město u Uherského Hradiště;12:35', 'Slavkov u Brna;14:05');
$trasa['1731_1'] = array('Slavkov u Brna;15:54', 'Staré Město u Uherského Hradiště;17:27');
$trasa['1733_1'] = array('Slavkov u Brna;17:54', 'Bylnice;20:42');
$trasa['1733_2'] = array('Brno hl.n.;17:22', 'Bylnice;20:42');
$trasa['4145_1'] = array('Brno hl.n.;13:48', 'Nemotice;14:53');
$trasa['4150_1'] = array('Nemotice;15:11', 'Slavkov u Brna;15:41');
$trasa['4343_1'] = array('Staré Město u Uherského Hradiště;18:05', 'Bojkovice město;19:19');


$trasa['550'] = array('Zlín střed;5:15', 'Otrokovice;5:27');
$trasa['551'] = array('Otrokovice;22:30', 'Zlín střed;22:43');

$trasa['881_1'] = array('Staré Město u Uherského Hradiště;6:53', 'Luhačovice;7:45');
$trasa['885_1'] = array('Staré Město u Uherského Hradiště;10:53', 'Luhačovice;11:37');
$trasa['889_1'] = array('Staré Město u Uherského Hradiště;14:53', 'Luhačovice;15:37');

$trasa['882_1'] = array('Luhačovice;16:20', 'Staré Město u Uherského Hradiště;17:06');
$trasa['886_1'] = array('Luhačovice;12:20', 'Staré Město u Uherského Hradiště;13:06');
$trasa['890_1'] = array('Luhačovice;8:20', 'Staré Město u Uherského Hradiště;9:06');


@$ts703 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>