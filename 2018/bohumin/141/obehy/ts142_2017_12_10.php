<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['641_1', '116_1', '145_1', '145_2'];
$obeh[2] = ['144_1', '144_2', '117_1', '640_1'];

$omezeni['144_1'] = 'T';
$omezeni['144_2'] = 'X6';
$omezeni['145_1'] = 'XT';
$omezeni['145_2'] = '6';
$omezeni['640_1'] = '7';
$omezeni['641_1'] = 'X1';

$trasa['116_1'] = ['Bohumín;10:07','Praha hl.n.;13:36'];
$trasa['117_1'] = ['Praha hl.n.;14:24','Bohumín;17:55'];

$trasa['144_1'] = ['Návsí;7:10', 'Praha hl.n.;11:36'];
$trasa['144_2'] = ['Žilina;6:27', 'Praha hl.n.;11:36'];
$trasa['145_1'] = ['Praha hl.n.;16:24', 'Žilina;21:33'];
$trasa['145_2'] = ['Praha hl.n.;16:24', 'Návsí;20:49'];
$trasa['640_1'] = ['Bohumín;20:01', 'Praha hl.n.;23:42'];
$trasa['641_1'] = ['Praha hl.n.;4:24', 'Bohumín;8:02'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts142 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


