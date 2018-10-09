<?php 
$zacatekPlatnosti = '10.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['178_1', '175_1', '258_1', '258_2'];
$obeh[2] = ['259_1', '259_2', '174_1'];
$obeh[3] = ['173_1', '172_1'];
$obeh[4] = ['179_1'];
$obeh[5] = ['176_1'];
$obeh[6] = ['177_1'];

$omezeni['258_1'] = 'XT';
$omezeni['258_2'] = '6';
$omezeni['259_2'] = 'T';
$omezeni['259_1'] = 'X6';

$trasa['172_1'] = ['Praha hl.n.;14:33','Hamburg-Altona;21:36'];
$trasa['173_1'] = ['Hamburg-Altona;6:26','Praha hl.n.;13:24'];
$trasa['174_1'] = ['Praha hl.n.;10:33','Hamburg-Altona;17:24'];
$trasa['175_1'] = ['Berlin Hbf;13:19','Praha hl.n.;17:24'];
$trasa['176_1'] = ['Praha hl.n.;8:33','Hamburg-Altona;15:27'];
$trasa['177_1'] = ['Hamburg-Altona;12:39','Praha hl.n.;19:24'];
$trasa['178_1'] = ['Praha hl.n.;6:21','Berlin Hbf;10:41'];
$trasa['179_1'] = ['Hamburg-Altona;14:37','Praha hl.n.;21:24'];
$trasa['258_2'] = ['Praha hl.n.;18:33','Děčín hl.n.;19:58'];
$trasa['258_1'] = ['Praha hl.n.;18:33','Leipzig Hbf;22:03'];
$trasa['259_2'] = ['Děčín hl.n.;7:58','Praha hl.n.;9:24'];
$trasa['259_1'] = ['Leipzig Hbf;5:55','Praha hl.n.;9:24'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


