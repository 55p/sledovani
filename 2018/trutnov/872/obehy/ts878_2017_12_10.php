<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['15763_1', '1763_1', '15168_1', '15171_1', '101762_1', '1877_1', '5638_1', '5120_1', '105140_1', '15752_1'];

$omezeni['101762_1'] = 'T';
$omezeni['105140_1'] = 'X1';
$omezeni['15168_1'] = 'T';
$omezeni['15171_1'] = 'T';
$omezeni['15752_1'] = 'X1';
$omezeni['15763_1'] = 'T';
$omezeni['1763_1'] = 'T';
$omezeni['1877_1'] = 'T';
$omezeni['5120_1'] = 'X1';
$omezeni['5638_1'] = 'T';

$trasa['101762_1'] = ['Starkoč;17:42','Náchod;17:55'];
$trasa['105140_1'] = ['Václavice;5:28','Teplice nad Metují;6:07'];

$poznamkaObehu['101762_1'] = ['pk', 'postrk'];
$poznamkaObehu['105140_1'] = ['pk', 'postrk'];

$trasa['15168_1'] = ['Starkoč;17:24', 'Václavice;17:28'];
$trasa['15171_1'] = ['Václavice;17:32', 'Starkoč;17:36'];
$trasa['15752_1'] = ['Teplice nad Metují;6:31', 'Trutnov hl.n.;7:32'];
$trasa['15763_1'] = ['Trutnov hl.n.;15:25', 'Teplice nad Metují;16:26'];
$trasa['1763_1'] = ['Broumov;16:02', 'Starkoč;17:17'];
$trasa['1877_1'] = ['Náchod;18:23', 'Choceň;19:21'];
$trasa['5120_1'] = ['Týniště nad Orlicí;4:45', 'Václavice;5:22'];
$trasa['5638_1'] = ['Choceň;20:02', 'Týniště nad Orlicí;20:27'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts878 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


