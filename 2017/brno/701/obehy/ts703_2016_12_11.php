<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1722_1', '894_1', '101722_1', '881_1', '890_1', '885_1', '886_1', '889_1', '882_1', '4343_1'];
$obeh[2] = ['1720_1', '1731_1', '12277_1', '12262_1', '897_1', '1733_1'];

$omezeni['101722_1'] = '6';
$omezeni['12262_1'] = 'X5';
$omezeni['12277_1'] = 'X5';
$omezeni['1720_1'] = 'X';
$omezeni['1722_1'] = 'X';
$omezeni['1731_1'] = 'X5';
$omezeni['1733_1'] = 'zX';
$omezeni['4343_1'] = 'X';
$omezeni['881_1'] = 'X';
$omezeni['882_1'] = 'X';
$omezeni['885_1'] = 'X';
$omezeni['886_1'] = 'X';
$omezeni['889_1'] = 'X';
$omezeni['890_1'] = 'X';
$omezeni['897_1'] = 'X5';
$omezeni['894_1'] = '6';

$trasa['101722_1'] = ['Uherské Hradiště;6:35','Brno hl.n.;8:34'];
$trasa['12262_1'] = ['Kunovice;17:37','Staré Město u Uherského Hradiště;17:49'];
$trasa['12277_1'] = ['Uherské Hradiště;17:27','Kunovice;17:32'];
$trasa['1722_1'] = ['Bylnice;5:07','Uherské Hradiště;6:27'];
$trasa['881_1'] = ['Staré Město u Uherského Hradiště;6:32','Luhačovice;7:23'];
$trasa['882_1'] = ['Luhačovice;16:38','Staré Město u Uherského Hradiště;17:28'];
$trasa['885_1'] = ['Staré Město u Uherského Hradiště;10:32','Luhačovice;11:23'];
$trasa['886_1'] = ['Luhačovice;12:38','Staré Město u Uherského Hradiště;13:28'];
$trasa['889_1'] = ['Staré Město u Uherského Hradiště;14:32','Luhačovice;15:23'];
$trasa['890_1'] = ['Luhačovice;8:38','Staré Město u Uherského Hradiště;9:28'];
$trasa['897_1'] = ['Otrokovice;22:15','Zlín střed;22:28'];
$trasa['894_1'] = ['Zlín střed;5:28','Otrokovice;5:41'];

$poznamkaObehu['12277_1'] = ['pk', 'postrk'];

$trasa['1720_1'] = ['Bojkovice;5:05', 'Brno hl.n.;7:33'];
$trasa['1731_1'] = ['Brno hl.n.;15:28', 'Uherské Hradiště;17:20'];
$trasa['1733_1'] = ['Brno hl.n.;17:30', 'Bylnice;20:37'];
$trasa['4343_1'] = ['Staré Město u Uherského Hradiště;18:05', 'Bojkovice město;19:25'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts703 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


