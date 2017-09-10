<?php 
$zacatekPlatnosti = '17.9.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['15763_1', '1763_1', '15168_1', '15171_1', '1762_1', '1877_1', '5638_1', '5120_1', '5140_1', '15752_1'];

$omezeni['15168_1'] = '7';
$omezeni['15171_1'] = '7';
$omezeni['15752_1'] = '1';
$omezeni['15763_1'] = '7';
$omezeni['1762_1'] = '7';
$omezeni['1763_1'] = '7';
$omezeni['1877_1'] = '7';
$omezeni['5120_1'] = '1';
$omezeni['5140_1'] = '1';
$omezeni['5638_1'] = '7';

$poznamkaObehu['1762_1'] = ['pk', 'postrk'];
$poznamkaObehu['5140_1'] = ['pk', 'postrk'];

$trasa['1762_1'] = ['Starkoč;17:40','Náchod;17:53'];
$trasa['1763_1'] = ['Teplice nad Metují;16:31','Starkoč;17:17'];
$trasa['5140_1'] = ['Václavice;5:28','Teplice nad Metují;6:07'];
$trasa['15168_1'] = ['Starkoč;17:24', 'Václavice;17:28'];
$trasa['15171_1'] = ['Václavice;17:32', 'Starkoč;17:36'];
$trasa['15752_1'] = ['Teplice nad Metují;6:31', 'Trutnov hl.n.;7:32'];
$trasa['15763_1'] = ['Trutnov hl.n.;15:25', 'Teplice nad Metují;16:26'];
$trasa['1877_1'] = ['Náchod;18:23', 'Choceň;19:21'];
$trasa['5120_1'] = ['Týniště nad Orlicí;4:45', 'Václavice;5:22'];
$trasa['5638_1'] = ['Choceň;20:02', 'Týniště nad Orlicí;20:27'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts877 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


