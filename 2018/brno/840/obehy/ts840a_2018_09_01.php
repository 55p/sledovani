<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4108_1', '11599_1', '4115_1', '4116_1', '4121_1', '12210_1', '4115_2', '4116_2', '4121_2', '12271_1', '112271_1'];
$obeh[2] = ['1618_1', '11597_1', '4111_1', '4114_1', '4119_1', '4120_1', '11598_1', '4107_1', '4112_1', '4117_1', '4118_1', '4123_1'];
$obeh[3] = ['11592_1', '11593_1', '4107_2', '4112_2', '4117_2', '21993_1', '12262_1', '4118_2', '4123_2', '12203_1', '12204_1', '1720_1', '4111_2', '4114_2', '4119_2', '4120_2'];

$omezeni['1618_1'] = 'X';
$omezeni['1720_1'] = '25';
$omezeni['4107_2'] = 'X';
$omezeni['4107_1'] = '25';
$omezeni['4108_1'] = 'X';
$omezeni['4111_1'] = 'X';
$omezeni['4111_2'] = '25';
$omezeni['4112_2'] = 'X';
$omezeni['4112_1'] = '25';
$omezeni['4114_1'] = 'X';
$omezeni['4114_2'] = '25';
$omezeni['4115_1'] = 'X';
$omezeni['4115_2'] = '25';
$omezeni['4116_2'] = '25';
$omezeni['4116_1'] = 'X';
$omezeni['4117_1'] = '25';
$omezeni['4117_2'] = 'X';
$omezeni['4118_2'] = 'X';
$omezeni['4118_1'] = '25';
$omezeni['4119_2'] = '25';
$omezeni['4119_1'] = 'X';
$omezeni['4120_2'] = '25';
$omezeni['4120_1'] = 'X';
$omezeni['4121_2'] = '25';
$omezeni['4121_1'] = 'X';
$omezeni['4123_2'] = 'X';
$omezeni['4123_1'] = '25';
$omezeni['11592_1'] = 'X';
$omezeni['11593_1'] = 'X';
$omezeni['11597_1'] = 'X';
$omezeni['11598_1'] = 'X';
$omezeni['11599_1'] = 'X';
$omezeni['12203_1'] = '6';
$omezeni['12204_1'] = '6';
$omezeni['12210_1'] = 'X';
$omezeni['12262_1'] = 'X5';
$omezeni['12271_1'] = '25';
$omezeni['21993_1'] = 'X5';
$omezeni['112271_1'] = '25';

$trasa['4107_2'] = ['Slavkov u Brna;6:51','Uherské Hradiště;8:28'];
$trasa['4111_1'] = ['Slavkov u Brna;8:51','Uherské Hradiště;10:28'];
$trasa['4112_2'] = ['Uherské Hradiště;9:32','Slavkov u Brna;11:11'];
$trasa['4114_1'] = ['Uherské Hradiště;11:32','Slavkov u Brna;13:11'];
$trasa['4115_1'] = ['Slavkov u Brna;10:51','Uherské Hradiště;12:28'];
$trasa['4116_1'] = ['Uherské Hradiště;13:32','Slavkov u Brna;15:11'];
$trasa['4117_2'] = ['Slavkov u Brna;12:51','Uherské Hradiště;14:28'];
$trasa['4118_2'] = ['Uherské Hradiště;15:32','Slavkov u Brna;17:11'];
$trasa['4119_1'] = ['Slavkov u Brna;14:51','Uherské Hradiště;16:28'];
$trasa['4120_1'] = ['Uherské Hradiště;17:32','Slavkov u Brna;19:11'];
$trasa['4121_1'] = ['Slavkov u Brna;16:51','Staré Město u Uherského Hradiště;18:35'];
$trasa['4123_2'] = ['Slavkov u Brna;18:51','Veselí nad Moravou;20:05'];
$trasa['11592_1'] = ['Brno dolní nádraží;5:16','Brno-Židenice;5:20'];
$trasa['11593_1'] = ['Brno-Židenice;5:25','Slavkov u Brna;5:59'];
$trasa['11597_1'] = ['Brno hl.n.;6:45','Slavkov u Brna;8:04'];
$trasa['11598_1'] = ['Slavkov u Brna;19:25','Brno hl.n.;20:11'];
$trasa['11599_1'] = ['Brno hl.n.;9:45','Slavkov u Brna;10:14'];
$trasa['21993_1'] = ['Uherské Hradiště;14:32','Kunovice;14:35'];
$trasa['112271_1'] = ['Uherské Hradiště;19:03','Veselí nad Moravou;19:22'];
$trasa['12203_1'] = ['Veselí nad Moravou;5:16', 'Uherské Hradiště;5:35'];
$trasa['12204_1'] = ['Uherské Hradiště;5:42', 'Veselí nad Moravou;6:00'];
$trasa['12210_1'] = ['Staré Město u Uherského Hradiště;20:06', 'Veselí nad Moravou;20:59'];
$trasa['12262_1'] = ['Kunovice;14:45', 'Uherské Hradiště;14:48'];
$trasa['12271_1'] = ['Staré Město u Uherského Hradiště;18:41', 'Uherské Hradiště;18:47'];
$trasa['1618_1'] = ['Veselí nad Moravou;4:50', 'Brno hl.n.;6:33'];
$trasa['1720_1'] = ['Veselí nad Moravou;6:01', 'Brno hl.n.;7:33'];
$trasa['4107_1'] = ['Veselí nad Moravou;8:07', 'Uherské Hradiště;8:28'];
$trasa['4108_1'] = ['Veselí nad Moravou;6:23', 'Brno hl.n.;8:20'];
$trasa['4111_2'] = ['Brno hl.n.;8:12', 'Uherské Hradiště;10:28'];
$trasa['4112_1'] = ['Uherské Hradiště;9:32', 'Brno hl.n.;11:48'];
$trasa['4114_2'] = ['Uherské Hradiště;11:32', 'Brno hl.n.;13:48'];
$trasa['4115_2'] = ['Brno hl.n.;10:15', 'Uherské Hradiště;12:28'];
$trasa['4116_2'] = ['Uherské Hradiště;13:32', 'Brno hl.n.;15:48'];
$trasa['4117_1'] = ['Brno hl.n.;12:15', 'Uherské Hradiště;14:28'];
$trasa['4118_1'] = ['Uherské Hradiště;15:32', 'Brno hl.n.;17:48'];
$trasa['4119_2'] = ['Brno hl.n.;14:14', 'Uherské Hradiště;16:28'];
$trasa['4120_2'] = ['Uherské Hradiště;17:32', 'Brno hl.n.;19:48'];
$trasa['4121_2'] = ['Brno hl.n.;16:14', 'Staré Město u Uherského Hradiště;18:35'];
$trasa['4123_1'] = ['Brno hl.n.;18:15', 'Veselí nad Moravou;20:05'];
//sem patri stazene trasy




$typ['11599_1'] = 'Sv';
$typ['112271_1'] = 'Sv';
$typ['11597_1'] = 'Sv';
$typ['11598_1'] = 'Sv';
$typ['11592_1'] = 'Sv';
$typ['11593_1'] = 'Sv';
$typ['21993_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts840a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


