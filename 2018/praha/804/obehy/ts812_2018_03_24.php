<?php 
$zacatekPlatnosti = '24.3.2018';
$konecPlatnosti = '28.10.2018 23:59:59';

$obeh[1] = ['9780_1', '9781_1', '9782_1', '9783_1'];

$omezeni['9780_1'] = '25';
$omezeni['9781_1'] = '25';
$omezeni['9782_1'] = '25';
$omezeni['9783_1'] = '25';

$trasa['9780_1'] = ['Praha hl.n.;9:03', 'Slaný;10:45'];
$trasa['9781_1'] = ['Slaný;11:01', 'Praha hl.n.;12:50'];
$trasa['9782_1'] = ['Praha hl.n.;12:58', 'Slaný;14:43'];
$trasa['9783_1'] = ['Slaný;16:55', 'Praha hl.n.;18:50'];
//sem patri stazene trasy

$poznamkaObehu['9783_1'] = ['vlož Stř-Hos', 'vložená Středokluky - Hostivice'];

$poznamkaObehu['9780_1'] = ['pk', 'postrk'];
$poznamkaObehu['9782_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts812 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


