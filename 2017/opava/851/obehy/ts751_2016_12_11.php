<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['13405_1', '13404_1', '99996_1', '13421_1', '13420_1', '13425_1', '13424_1'];

$omezeni['13404_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['13405_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['13420_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['13421_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['13424_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['13425_1'] = 'X,-2312,-2712,-2812,-2912,-3012';
$omezeni['99996_1'] = 'X';

$trasa['13404_1'] = ['Hlučín;6:32','Opava východ;7:12'];
$trasa['13405_1'] = ['Opava východ;5:42','Hlučín;6:19'];
$trasa['13420_1'] = ['Hlučín;14:32','Opava východ;15:12'];
$trasa['13421_1'] = ['Opava východ;13:42','Hlučín;14:19'];
$trasa['13424_1'] = ['Hlučín;16:32','Opava východ;17:12'];
$trasa['13425_1'] = ['Opava východ;15:42','Hlučín;16:19'];
$trasa['99996_1'] = ['staniční posun žst. Opava východ;7:15;13:30'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts751 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


