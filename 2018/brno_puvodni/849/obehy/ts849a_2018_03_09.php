<?php 
$zacatekPlatnosti = '9.3.2018';
$konecPlatnosti = '16.4.2018 23:59:59';

$obeh[1] = ['1618_1', '4106_1', '4115_1', '4116_1', '4121_1', '12210_1'];

$omezeni['12210_1'] = 'X';
$omezeni['1618_1'] = 'X1234';
$omezeni['4106_1'] = 'X5';
$omezeni['4115_1'] = 'X';
$omezeni['4116_1'] = 'X';
$omezeni['4121_1'] = 'X';

$trasa['4116_1'] = ['Uherské Hradiště;13:32','Slavkov u Brna;15:11'];
$trasa['4121_1'] = ['Slavkov u Brna;16:51','Staré Město u Uherského hradiště;18:35'];
$trasa['12210_1'] = ['Staré Město u Uherského Hradiště;20:06', 'Veselí nad Moravou;20:59'];
$trasa['1618_1'] = ['Veselí nad Moravou;4:50', 'Brno hl.n.;6:33'];
$trasa['4106_1'] = ['Veselí nad Moravou;5:23', 'Brno hl.n.;7:20'];
$trasa['4115_1'] = ['Brno hl.n.;10:15', 'Uherské Hradiště;12:28'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts849a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


