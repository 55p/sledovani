<?php 
$zacatekPlatnosti = '10.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['171_1', '378_1'];
$obeh[2] = ['379_1', '170_1'];


$trasa['170_1'] = ['Praha hl.n.;16:33','Berlin Hbf;20:41'];
$trasa['171_1'] = ['Berlin Hbf;7:16','Praha hl.n.;11:24'];
$trasa['378_1'] = ['Praha hl.n.;12:33','Kiel Hbf;20:19'];
$trasa['379_1'] = ['Kiel Hbf;7:42','Praha hl.n.;15:24'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


