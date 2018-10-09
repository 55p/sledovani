<?php 
$zacatekPlatnosti = '2.7.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['13403_1', '13402_1', '13407_1', '13406_1', '13411_1', '13410_1', '13415_1', '13414_1', '13419_1', '13418_1', '13423_1', '13422_1', '13427_1', '13426_1', '13431_1', '13430_1', '13435_1', '13434_1', '13439_1', '13438_1'];


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
$trasa['13426_1'] = ['Hlučín;17:32', 'Opava východ;18:12'];
$trasa['13427_1'] = ['Opava východ;16:42', 'Hlučín;17:19'];
$trasa['13430_1'] = ['Hlučín;19:32', 'Opava východ;20:12'];
$trasa['13431_1'] = ['Opava východ;18:42', 'Hlučín;19:19'];
$trasa['13434_1'] = ['Hlučín;21:32', 'Opava východ;22:12'];
$trasa['13435_1'] = ['Opava východ;20:42', 'Hlučín;21:19'];
$trasa['13438_1'] = ['Hlučín;23:23', 'Opava východ;24:00'];
$trasa['13439_1'] = ['Opava východ;22:42', 'Hlučín;23:19'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts852 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


