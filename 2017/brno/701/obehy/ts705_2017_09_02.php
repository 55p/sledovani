<?php 
$zacatekPlatnosti = '2.9.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1729_1', '12275_1', '12260_1', '12285_1', '12274_1', '1732_1', '1643_1', '1644_1', '3175_1', '1646_1'];

$omezeni['12260_1'] = 'X5,1611';
$omezeni['12274_1'] = 'X5,1611';
$omezeni['12275_1'] = 'X5,1611';
$omezeni['12285_1'] = 'X5,1611';
$omezeni['1643_1'] = '6,1711,-1811';
$omezeni['1644_1'] = '6,1711,-1811';
$omezeni['1646_1'] = '7';
$omezeni['1729_1'] = 'X5,1611';
$omezeni['1732_1'] = 'X5,1611';
$omezeni['3175_1'] = '7';


$poznamkaObehu['12275_1'] = ['pk', 'postrk'];
$poznamkaObehu['12274_1'] = ['pk', 'postrk'];

$trasa['12260_1'] = ['Kunovice;15:37', 'Staré Město u Uherského Hradiště;15:49'];
$trasa['12274_1'] = ['Kunovice;16:27', 'Uherské Hradiště;16:32'];
$trasa['12275_1'] = ['Uherské Hradiště;15:27', 'Kunovice;15:32'];
$trasa['1643_1'] = ['Brno hl.n.;8:02', 'Frenštát pod Radhoštěm;10:51'];
$trasa['1644_1'] = ['Frenštát pod Radhoštěm;11:27', 'Valašské Meziříčí;11:58'];
$trasa['1646_1'] = ['Frenštát pod Radhoštěm;18:33', 'Brno hl.n.;21:20'];
$trasa['1729_1'] = ['Brno hl.n.;13:28', 'Uherské Hradiště;15:20'];
$trasa['1732_1'] = ['Uherské Hradiště;16:40', 'Brno hl.n.;18:33'];
$trasa['3175_1'] = ['Valašské Meziříčí;17:17', 'Frenštát pod Radhoštěm;17:47'];
$trasa['12265_1'] = ['Staré Město u Uherského Hradiště;16:05', 'Kunovice;16:22'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts705 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


