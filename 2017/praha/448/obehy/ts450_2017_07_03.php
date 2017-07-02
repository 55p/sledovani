<?php 
$zacatekPlatnosti = '3.7.2017';
$konecPlatnosti = '16.7.2017 23:59:59';

$obeh[1] = ['15891_1', '6402_1', '6443_1', '5904_1', '5808_1'];

$omezeni['15891_1'] = 'X';
$omezeni['5808_1'] = 'X';
$omezeni['5904_1'] = 'X';
$omezeni['6402_1'] = 'X';
$omezeni['6443_1'] = 'X';

$trasa['15891_1'] = ['Praha ONJ;4:35','Nymburk hl.n.;5:20'];
$trasa['5808_1'] = ['Nymburk hl.n.;8:06','Praha Masarykovo nádraží;9:03'];
$trasa['5904_1'] = ['Kolín;7:31','Nymburk hl.n.;7:56'];
$trasa['6402_1'] = ['Nymburk hl.n.;5:31','Lysá nad Labem;5:49'];
$trasa['6443_1'] = ['Lysá nad Labem;6:07','Kolín;6:59'];

$typ['15891_1'] = 'Sv';

$poznamkaObehu['15891_1'] = ['','Sv 105891'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts450 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


