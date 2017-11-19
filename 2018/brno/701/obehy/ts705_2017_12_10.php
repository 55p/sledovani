<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1729_1', '1732_1', '1643_1', '1644_1', '3175_1', '1646_1'];

$omezeni['1643_1'] = '6,3003,0507,2809,-3103,-0707,-2909';
$omezeni['1644_1'] = '6,3003,0507,2809,-3103,-0707,-2909';
$omezeni['1646_1'] = 'T,-2412,-2512,-2612,-3112,-3003,-0104,-2404,-0605,-0507,-0607,-2809,-1711';
$omezeni['1729_1'] = 'X5';
$omezeni['1732_1'] = 'X5';
$omezeni['3175_1'] = 'T,-2412,-2512,-2612,-3112,-3003,-0104,-2404,-0605,-0507,-0607,-2809,-1711';

$trasa['1643_1'] = ['Brno hl.n.;8:02', 'Frenštát pod Radhoštěm;10:51'];
$trasa['1644_1'] = ['Frenštát pod Radhoštěm;11:25', 'Valašské Meziříčí;11:56'];
$trasa['1646_1'] = ['Frenštát pod Radhoštěm;18:31', 'Brno hl.n.;21:20'];
$trasa['1729_1'] = ['Brno hl.n.;13:28', 'Staré Město u Uherského Hradiště;15:27'];
$trasa['1732_1'] = ['Staré Město u Uherského Hradiště;16:33', 'Brno hl.n.;18:33'];
$trasa['3175_1'] = ['Valašské Meziříčí;17:16', 'Frenštát pod Radhoštěm;17:46'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts705 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


