<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['751_1', '766_1', '759_1', '758_1', '767_1', '750_1'];

$omezeni['750_1'] = 'XT';
$omezeni['751_1'] = 'X6';

$trasa['758_1'] = ['Praha hl.n.;14:12', 'Cheb;17:28'];
$trasa['767_1'] = ['Cheb;18:34', 'Praha hl.n.;21:41'];
$trasa['750_1'] = ['Praha hl.n.;23:22', 'Plzeň hl.n.;0:54'];
$trasa['751_1'] = ['Plzeň hl.n.;4:06', 'Praha hl.n.;5:41'];
$trasa['759_1'] = ['Cheb;10:34', 'Praha hl.n.;13:41'];
$trasa['766_1'] = ['Praha hl.n.;6:12', 'Cheb;9:28'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


