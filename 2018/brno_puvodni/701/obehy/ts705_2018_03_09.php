<?php 
$zacatekPlatnosti = '9.3.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4144_1', '4151_1', '1729_1', '1732_1', '11596_1', '11599_1', '1636_1', '1637_1', '4125_1'];

$omezeni['1636_1'] = '25';
$omezeni['1637_1'] = '25';
$omezeni['1729_1'] = 'X5,2903';
$omezeni['1732_1'] = 'X5,2903';
$omezeni['4125_1'] = 'T';
$omezeni['4144_1'] = 'X';
$omezeni['4151_1'] = 'X1234,-2903';
$omezeni['11596_1'] = 'X5,2903';
$omezeni['11599_1'] = 'X5, 2903';

$trasa['1732_1'] = ['Staré Město u Uherského Hradiště;16:33','Slavkov u Brna;18:06'];
$trasa['11596_1'] = ['Slavkov u Brna;18:25','Brno-Maloměřice;19:03'];
$trasa['11599_1'] = ['Brno-Maloměřice;19:35','Brno dolní nádraží;19:45'];
$trasa['1636_1'] = ['Brno hl.n.;8:06', 'Žďár nad Sázavou;10:14'];
$trasa['1637_1'] = ['Žďár nad Sázavou;17:40', 'Brno hl.n.;19:51'];
$trasa['1729_1'] = ['Brno hl.n.;13:28', 'Staré Město u Uherského Hradiště;15:27'];
$trasa['4125_1'] = ['Brno hl.n.;20:15', 'Kyjov;21:36'];
$trasa['4144_1'] = ['Kyjov;4:55', 'Brno hl.n.;6:20'];
$trasa['4151_1'] = ['Brno hl.n.;16:48', 'Kyjov;18:07'];
//sem patri stazene trasy




$typ['11596_1'] = 'Sv';
$typ['11599_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts705 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


