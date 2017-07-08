<?php 
$zacatekPlatnosti = '25.3.2017';
$konecPlatnosti = '29.10.2017 23:59:59';

$obeh[1] = ['9780_1', '9781_1', '9782_1', '9783_1'];

$omezeni['9780_1'] = '25';
$omezeni['9781_1'] = '25';
$omezeni['9782_1'] = '25';
$omezeni['9783_1'] = '25';

$trasa['9780_1'] = ['Praha hl.n.;9:07', 'Slaný;10:52'];
$trasa['9781_1'] = ['Slaný;11:01', 'Praha hl.n.;12:46'];
$trasa['9782_1'] = ['Praha hl.n.;13:07', 'Slaný;14:52', 'Zlonice;15:07'];
$trasa['9783_1'] = ['Zlonice;16:43','Slaný;16:57', 'Praha hl.n.;18:46'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts813 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


