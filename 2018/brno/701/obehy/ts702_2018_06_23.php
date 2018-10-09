<?php 
$zacatekPlatnosti = '23.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['11519_1', '11521_1', '881_1', '890_1', '11527_1', '885_1', '886_1', '889_1', '882_1', '111533_1', '70241_1', '897_1'];
$obeh[2] = ['894_1', '70240_1', '111522_1', '883_1', '888_1', '887_1', '884_1', '891_1', '880_1', '11534_1', '11534_2'];
$obeh[3] = ['1720_1', '1731_1'];

$omezeni['881_1'] = 'X6';
$omezeni['890_1'] = 'X6';
$omezeni['894_1'] = 'T';
$omezeni['897_1'] = '6';
$omezeni['1720_1'] = 'X';
$omezeni['1731_1'] = 'X';
$omezeni['11519_1'] = 'X';
$omezeni['11521_1'] = '6';
$omezeni['11527_1'] = 'T';
$omezeni['11534_2'] = 'X5';
$omezeni['11534_1'] = 'X1234,25';
$omezeni['70240_1'] = 'T';
$omezeni['70241_1'] = '6';
$omezeni['111522_1'] = 'X6';
$omezeni['111533_1'] = 'XT';

$trasa['880_1'] = ['Luhačovice;18:20','Staré Město u Uherského Hradiště;19:04'];
$trasa['881_1'] = ['Staré Město u Uherského Hradiště;6:11','Luhačovice;7:45'];
$trasa['882_1'] = ['Luhačovice;16:31','Staré Město u Uherského Hradiště;17:33'];
$trasa['883_1'] = ['Staré Město u Uherského Hradiště;8:27','Luhačovice;9:18'];
$trasa['884_1'] = ['Luhačovice;14:31','Staré Město u Uherského Hradiště;15:33'];
$trasa['885_1'] = ['Staré Město u Uherského Hradiště;10:27','Luhačovice;11:18'];
$trasa['886_1'] = ['Luhačovice;12:31','Staré Město u Uherského Hradiště;13:33'];
$trasa['887_1'] = ['Staré Město u Uherského Hradiště;12:27','Luhačovice;13:18'];
$trasa['888_1'] = ['Luhačovice;10:31','Staré Město u Uherského Hradiště;11:33'];
$trasa['889_1'] = ['Staré Město u Uherského Hradiště;14:27','Luhačovice;15:18'];
$trasa['890_1'] = ['Luhačovice;8:31','Staré Město u Uherského Hradiště;9:34'];
$trasa['891_1'] = ['Staré Město u Uherského Hradiště;16:27','Luhačovice;17:18'];
$trasa['894_1'] = ['Zlín střed;5:31','Otrokovice;5:44'];
$trasa['897_1'] = ['Otrokovice;22:13','Zlín střed;22:25'];
$trasa['1720_1'] = ['Veselí nad Moravou;6:01','Brno hl.n.;7:33'];
$trasa['1731_1'] = ['Brno hl.n.;15:28','Veselí nad Moravou;16:58'];
$trasa['11519_1'] = ['Veselí nad Moravou;5:07','Staré Město u Uherského Hradiště;5:44'];
$trasa['11521_1'] = ['Veselí nad Moravou;5:34','Staré Město u Uherského Hradiště;6:11'];
$trasa['11527_1'] = ['Veselí nad Moravou;7:34','Staré Město u Uherského Hradiště;8:07'];
$trasa['11534_2'] = ['Staré Město u Uherského Hradiště;19:22','Veselí nad Moravou;19:55'];
$trasa['11534_1'] = ['Staré Město u Uherského Hradiště;19:22','Veselí nad Moravou;19:55'];
$trasa['70240_1'] = ['Otrokovice;5:49','Staré Město u Uherského Hradiště;6:05'];
$trasa['70241_1'] = ['Staré Město u Uherského Hradiště;21:45','Otrokovice;21:57'];
$trasa['111522_1'] = ['Bylnice;5:05','Staré Město u Uherského Hradiště;6:34'];
$trasa['111533_1'] = ['Staré Město u Uherského Hradiště;19:10','Bylnice;20:36'];
//sem patri stazene trasy

$poznamkaObehu['11534_1'] = ['Sv Bz - Ve', 'Sv Bzenec - Veselí nad Moravou'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts702 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


