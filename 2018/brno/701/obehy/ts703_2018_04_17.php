<?php 
$zacatekPlatnosti = '17.4.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['101722_1', '70250_1', '881_1', '890_1', '885_1', '886_1', '889_1', '882_1', '4347_1', '70290_1', '894_1', '70240_1', '1722_1'];
$obeh[2] = ['70291_1', '1720_1', '1733_1', '1731_1', '70241_1', '897_1'];

$omezeni['881_1'] = 'X';
$omezeni['882_1'] = 'X';
$omezeni['885_1'] = 'X';
$omezeni['886_1'] = 'X';
$omezeni['889_1'] = 'X';
$omezeni['890_1'] = 'X';
$omezeni['894_1'] = '6';
$omezeni['897_1'] = 'X5';
$omezeni['1720_1'] = 'X';
$omezeni['1722_1'] = '6';
$omezeni['1731_1'] = 'X5';
$omezeni['1733_1'] = 'zX';
$omezeni['4347_1'] = 'X';
$omezeni['70240_1'] = '6';
$omezeni['70241_1'] = 'X5';
$omezeni['70250_1'] = 'X';
$omezeni['70290_1'] = 'X5';
$omezeni['70291_1'] = 'X1';
$omezeni['101722_1'] = 'X';

$trasa['881_1'] = ['Staré Město u Uherského Hradiště;6:56','Luhačovice;7:45'];
$trasa['882_1'] = ['Luhačovice;16:31','Staré Město u Uherského Hradiště;17:33'];
$trasa['885_1'] = ['Staré Město u Uherského Hradiště;10:27','Luhačovice;11:18'];
$trasa['886_1'] = ['Luhačovice;12:31','Staré Město u Uherského Hradiště;13:33'];
$trasa['889_1'] = ['Staré Město u Uherského Hradiště;14:27','Luhačovice;15:18'];
$trasa['890_1'] = ['Luhačovice;8:31','Staré Město u Uherského Hradiště;9:34'];
$trasa['894_1'] = ['Zlín střed;5:31','Otrokovice;5:44'];
$trasa['897_1'] = ['Otrokovice;22:13','Zlín střed;22:25'];
$trasa['1722_1'] = ['Uherské Hradiště;6:35','Brno hl.n.;8:34'];
$trasa['70240_1'] = ['Otrokovice;5:55','Uherské Hradiště;6:17'];
$trasa['70241_1'] = ['Staré Město u Uherského Hradiště;21:45','Otrokovice;21:57'];
$trasa['70250_1'] = ['Uherské Hradiště;6:32','Staré Město u Uherského Hradiště;6:45'];
$trasa['70290_1'] = ['Bojkovice;20:05','Veselí nad Moravou;21:00'];
$trasa['70291_1'] = ['Veselí nad Moravou;3:00','Bojkovice;3:45'];
$trasa['101722_1'] = ['Bylnice;5:05','Uherské Hradiště;6:27'];
$trasa['1720_1'] = ['Bojkovice;5:06', 'Brno hl.n.;7:33'];
$trasa['1731_1'] = ['Brno hl.n.;15:28', 'Staré Město u Uherského Hradiště;17:27'];
$trasa['1733_1'] = ['Brno hl.n.;17:30', 'Bylnice;20:36'];
$trasa['4347_1'] = ['Staré Město u Uherského Hradiště;18:23', 'Bojkovice město;19:23'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts703 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


