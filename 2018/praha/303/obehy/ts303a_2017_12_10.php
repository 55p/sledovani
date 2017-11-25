<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['273_1', '272_1'];
$obeh[2] = ['477_1', '70211_1', '816_1', '590_1', '103_1', '100_1'];
$obeh[3] = ['407_1', '100477_1', '276_1'];

$omezeni['70211_1'] = 'X6';
$omezeni['816_1'] = 'X6';

$trasa['100477_1'] = ['Břeclav;4:59','Budapest-Keleti pu;8:35'];
$trasa['100_1'] = ['Wien Hbf;18:10','Bohumín;21:08'];
$trasa['103_1'] = ['Bohumín;10:51','Wien Hbf;13:49'];
$trasa['407_1'] = ['Bohumín;2:27','Břeclav;4:14'];
$trasa['477_1'] = ['Praha hl.n.;0:00','Břeclav;3:44'];
$trasa['70211_1'] = ['Břeclav;5:10','Hodonín;5:25'];
$trasa['816_1'] = ['Hodonín;6:26','Břeclav;6:40'];
$trasa['272_1'] = ['Budapest-Nyugati pu;15:41', 'Praha hl.n.;22:09'];
$trasa['273_1'] = ['Praha hl.n.;5:51', 'Budapest-Nyugati pu;12:19'];
$trasa['276_1'] = ['Budapest-Nyugati pu;11:41', 'Praha hl.n.;18:07'];
$trasa['590_1'] = ['Břeclav;7:11', 'Bohumín;9:08'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303a -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


