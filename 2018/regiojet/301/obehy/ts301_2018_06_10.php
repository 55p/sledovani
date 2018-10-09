<?php 
$zacatekPlatnosti = '10.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1031_1', '1032_1', '1037_1'];
$obeh[2] = ['1030_1', '1047_1'];
$obeh[3] = ['1044_1', '1035_1', '1036_1'];
$obeh[4] = ['1041_1', '1050_1', '1051_1'];
$obeh[5] = ['1040_1', '1033_1', '1034_1', '1053_1'];
$obeh[6] = ['1042_1', '1043_1', '1052_1'];

$trasa['1030_1'] = ['Wien Hbf;6:30','Praha hl.n.;10:42'];
$trasa['1031_1'] = ['Praha hl.n.;5:21','Wien Hbf;9:23'];
$trasa['1032_1'] = ['Wien Hbf;10:30','Praha hl.n.;14:42'];
$trasa['1033_1'] = ['Praha hl.n.;9:21','Wien Hbf;13:23'];
$trasa['1034_1'] = ['Wien Hbf;14:30','Praha hl.n.;18:42'];
$trasa['1035_1'] = ['Praha hl.n.;13:21','Wien Hbf;17:23'];
$trasa['1036_1'] = ['Wien Hbf;18:30','Praha hl.n.;22:39'];
$trasa['1037_1'] = ['Praha hl.n.;16:21','Wien Hbf;20:23'];
$trasa['1040_1'] = ['Brno hl.n.;5:03','Praha hl.n.;7:42'];
$trasa['1041_1'] = ['Praha hl.n.;7:21','Bratislava hl.st.;11:12'];
$trasa['1042_1'] = ['Brno hl.n.;6:09','Praha hl.n.;8:42'];
$trasa['1043_1'] = ['Praha hl.n.;11:21','Bratislava hl.st.;15:12'];
$trasa['1044_1'] = ['Bratislava hl.st.;5:45','Praha hl.n.;9:42'];
$trasa['1047_1'] = ['Praha hl.n.;15:21','Bratislava hl.st.;19:12'];
$trasa['1050_1'] = ['Bratislava hl.st.;12:47','Praha hl.n.;16:42'];
$trasa['1051_1'] = ['Praha hl.n.;18:21','Brno hl.n.;20:46'];
$trasa['1052_1'] = ['Bratislava hl.st.;15:26','Praha hl.n.;19:42'];
$trasa['1053_1'] = ['Praha hl.n.;20:21','Brno hl.n.;22:59'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


