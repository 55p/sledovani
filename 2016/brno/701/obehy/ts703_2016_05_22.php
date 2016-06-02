<?php
$zacatekPlatnosti = '22.5.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('550_1', '101722_1', '1722_1', '881_1', '890_1', '885_1', '886_1', '889_1', '882_1', '4343_1');
$obeh[2] = array('1720_1', '1731_1', '1733_1', '551_1');

$omezeni['101722_1'] = '6';
$omezeni['1720_1'] = 'X';
$omezeni['1722_1'] = 'X';
$omezeni['1731_1'] = 'X5';
$omezeni['1733_1'] = 'zX';
$omezeni['4343_1'] = 'X';
$omezeni['550_1'] = '6';
$omezeni['551_1'] = '5';
$omezeni['881_1'] = 'X';
$omezeni['885_1'] = 'X';
$omezeni['886_1'] = 'X';
$omezeni['889_1'] = 'X';
$omezeni['890_1'] = 'X';
$omezeni['882_1'] = 'X';

$trasa['101722_1'] = array('Uherské Hradiště;6:34','Brno hl.n.;8:34');
$trasa['1722_1'] = array('Bylnice;5:05','Uherské Hradiště;6:26');


$trasa['1720_1'] = array('Bojkovice;5:05', 'Brno hl.n.;7:33');
$trasa['1731_1'] = array('Brno hl.n.;15:28', 'Staré Město u Uherského Hradiště;17:27');
$trasa['1733_1'] = array('Brno hl.n.;17:28', 'Bylnice;20:42');
$trasa['4343_1'] = array('Staré Město u Uherského Hradiště;18:05', 'Bojkovice město;19:19');


$trasa['550'] = array('Zlín střed;5:15', 'Otrokovice;5:27');
$trasa['551'] = array('Otrokovice;22:30', 'Zlín střed;22:43');

$trasa['881_1'] = array('Staré Město u Uherského Hradiště;6:53', 'Luhačovice;7:45');
$trasa['885_1'] = array('Staré Město u Uherského Hradiště;10:53', 'Luhačovice;11:37');
$trasa['889_1'] = array('Staré Město u Uherského Hradiště;14:53', 'Luhačovice;15:37');

$trasa['882_1'] = array('Luhačovice;16:20', 'Staré Město u Uherského Hradiště;17:06');
$trasa['886_1'] = array('Luhačovice;12:20', 'Staré Město u Uherského Hradiště;13:06');
$trasa['890_1'] = array('Luhačovice;8:20', 'Staré Město u Uherského Hradiště;9:06');

for ($i = 880; $i < 893; $i++) {
  $typ[$i] = 'R';
}
$typ[550] = $typ[551] = $typ[560] = $typ[561] = 'IC';

@$ts703 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>