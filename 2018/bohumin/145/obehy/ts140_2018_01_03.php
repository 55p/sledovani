<?php 
$zacatekPlatnosti = '3.1.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['406_1', '114_1', '115_1', '407_1'];


$trasa['114_1'] = ['Kraków Gl.;10:47','Bohumín;13:33'];
$trasa['115_1'] = ['Bohumín;14:19','Kraków Gl.;16:59'];
$trasa['406_1'] = ['Bohumín;3:22','Kraków Gl.;6:10'];
$trasa['407_1'] = ['Kraków Gl.;22:41','Bohumín;1:32'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts140 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


