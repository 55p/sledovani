<?php 
$zacatekPlatnosti = '10.8.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3904_1', '3913_1', '3912_1', '3921_1', '4472_1', '4475_1', '4476_1', '4479_1'];


$trasa['3904_1'] = ['Žilina;6:48','Čadca;7:26'];
$trasa['3912_1'] = ['Žilina;10:48','Čadca;11:26'];
$trasa['3913_1'] = ['Čadca;8:35','Žilina;9:13'];
$trasa['3921_1'] = ['Čadca;12:35','Žilina;13:13'];
$trasa['4472_1'] = ['Žilina;13:48','Zwardoń;15:08'];
$trasa['4475_1'] = ['Zwardoń;15:42','Žilina;17:13'];
$trasa['4476_1'] = ['Žilina;17:57','Zwardoń;19:10'];
$trasa['4479_1'] = ['Zwardoń;19:52','Žilina;21:13'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts134 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


