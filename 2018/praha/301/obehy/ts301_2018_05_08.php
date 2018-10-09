<?php 
$zacatekPlatnosti = '8.5.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['178_1', '175_1'];
$obeh[2] = ['176_1', '379_1', '258_1', '258_2'];
$obeh[3] = ['259_1', '259_2', '170_1'];
$obeh[4] = ['173_1', '172_1'];
$obeh[5] = ['171_1', '378_1', '177_1'];
$obeh[6] = ['174_1'];
$obeh[7] = ['179_1'];

$omezeni['258_1'] = 'XT';
$omezeni['258_2'] = '6';
$omezeni['259_2'] = 'T';
$omezeni['259_1'] = 'X6';

$trasa['170_1'] = ['Praha hl.n.;16:21','Dresden Hbf;18:40'];
$trasa['171_1'] = ['Dresden Hbf;9:22','Praha hl.n.;11:35'];
$trasa['172_1'] = ['Praha hl.n.;14:21','Dresden Hbf;16:40'];
$trasa['173_1'] = ['Dresden Hbf;11:22','Praha hl.n.;13:35'];
$trasa['174_1'] = ['Praha hl.n.;10:21','Hamburg-Altona;17:24'];
$trasa['175_1'] = ['Berlin Hbf;13:19','Praha hl.n.;17:35'];
$trasa['176_1'] = ['Praha hl.n.;8:21','Dresden Hbf;10:40'];
$trasa['177_1'] = ['Dresden Hbf;17:22','Praha hl.n.;19:51'];
$trasa['178_1'] = ['Praha hl.n.;6:21','Berlin Hbf;10:41'];
$trasa['179_1'] = ['Hamburg-Altona;14:37','Praha hl.n.;21:35'];
$trasa['258_2'] = ['Praha hl.n.;18:33','Děčín hl.n.;19:58'];
$trasa['258_1'] = ['Praha hl.n.;18:33','Leipzig Hbf;22:03'];
$trasa['259_2'] = ['Děčín hl.n.;7:58','Praha hl.n.;9:24'];
$trasa['259_1'] = ['Leipzig Hbf;5:55','Praha hl.n.;9:24'];
$trasa['378_1'] = ['Praha hl.n.;12:21','Dresden Hbf;14:40'];
$trasa['379_1'] = ['Dresden Hbf;13:22','Praha hl.n.;15:35'];
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


