<?php 
$zacatekPlatnosti = '4.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['675_1', '678_1', '670_1'];

$omezeni['670_1'] = 'T';
$omezeni['675_1'] = 'X';
$omezeni['678_1'] = 'X1234';

$trasa['670_1'] = ['Praha hl.n.;23:21', 'Děčín hl.n.;1:05'];
$trasa['675_1'] = ['Děčín hl.n.;6:24', 'Praha Masarykovo nádraží;8:08'];
$trasa['678_1'] = ['Praha Masarykovo nádraží;17:48', 'Děčín hl.n.;19:31'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts103 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


