<?php 
$zacatekPlatnosti = '1.7.2017';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1643_1', '1644_1', '3175_1', '1646_1'];

$omezeni['1643_1'] = '6';
$omezeni['1644_1'] = '6';
$omezeni['1646_1'] = '7';
$omezeni['3175_1'] = '7';

$trasa['1643_1'] = ['Brno hl.n.;8:02', 'Frenštát pod Radhoštěm;10:51'];
$trasa['1644_1'] = ['Frenštát pod Radhoštěm;11:27', 'Valašské Meziříčí;11:58'];
$trasa['1646_1'] = ['Frenštát pod Radhoštěm;18:33', 'Brno hl.n.;21:20'];
$trasa['3175_1'] = ['Valašské Meziříčí;17:17', 'Frenštát pod Radhoštěm;17:47'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts705 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


