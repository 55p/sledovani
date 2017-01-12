<?php 
$zacatekPlatnosti = '23.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['13403_1', '13402_1', '13407_1', '13406_1', '13411_1', '13410_1', '13415_1', '13414_1', '13419_1', '13418_1', '13423_1', '13422_1', 13427,13426,13431,13430,13435,13434,13439,13438,];

$omezeni['13403_1'] = '11';

$trasa['13402_1'] = ['Hlučín;5:32', 'Opava východ;6:12'];
$trasa['13403_1'] = ['Opava východ;4:42', 'Hlučín;5:19'];
$trasa['13406_1'] = ['Hlučín;7:32', 'Opava východ;8:12'];
$trasa['13407_1'] = ['Opava východ;6:42', 'Hlučín;7:20'];
$trasa['13410_1'] = ['Hlučín;9:32', 'Opava východ;10:12'];
$trasa['13411_1'] = ['Opava východ;8:42', 'Hlučín;9:19'];
$trasa['13414_1'] = ['Hlučín;11:32', 'Opava východ;12:12'];
$trasa['13415_1'] = ['Opava východ;10:42', 'Hlučín;11:19'];
$trasa['13418_1'] = ['Hlučín;13:32', 'Opava východ;14:12'];
$trasa['13419_1'] = ['Opava východ;12:42', 'Hlučín;13:19'];
$trasa['13422_1'] = ['Hlučín;15:32', 'Opava východ;16:12'];
$trasa['13423_1'] = ['Opava východ;14:42', 'Hlučín;15:19'];
$trasa['13426'] = ['Hlučín;17:32', 'Opava východ;18:12'];
$trasa['13427'] = ['Opava východ;16:42', 'Hlučín;17:19'];
$trasa['13430'] = ['Hlučín;19:32', 'Opava východ;20:12'];
$trasa['13431'] = ['Opava východ;18:42', 'Hlučín;19:19'];
$trasa['13434'] = ['Hlučín;21:32', 'Opava východ;22:12'];
$trasa['13435'] = ['Opava východ;20:42', 'Hlučín;21:19'];
$trasa['13438'] = ['Hlučín;23:23', 'Opava východ;24:00'];
$trasa['13439'] = ['Opava východ;22:42', 'Hlučín;23:19'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts852 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);
unset($poznamkaObehu);


