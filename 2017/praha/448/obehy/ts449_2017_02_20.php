<?php 
$zacatekPlatnosti = '20.2.2017';
$konecPlatnosti = '28.2.2017 23:59:59';

$obeh[1] = ['6402_1', '6443_1', '10975_1', '5904_1', '5879_1', '5874_1'];

$omezeni['10975_1'] = 'X';
$omezeni['5874_1'] = 'X';
$omezeni['5879_1'] = 'X';
$omezeni['5904_1'] = 'X';
$omezeni['6402_1'] = 'X';
$omezeni['6443_1'] = 'X';

$trasa['10975_1'] = ['Kolín;7:00','Kutná Hora;7:09'];
$trasa['5874_1'] = ['Kolín;9:29','Nymburk hl.n.;9:56'];
$trasa['5879_1'] = ['Nymburk hl.n.;8:01','Kolín;8:28'];
$trasa['5904_1'] = ['Kutná Hora;7:06','Nymburk hl.n.;7:56'];
$trasa['6402_1'] = ['Nymburk hl.n.;5:31','Lysá nad Labem;5:49'];
$trasa['6443_1'] = ['Lysá nad Labem;6:07','Kolín;6:59'];



$typ['10975_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts449 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


