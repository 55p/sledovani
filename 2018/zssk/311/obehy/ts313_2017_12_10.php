<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['614_1', '17614_1', '615_1'];
$obeh[2] = ['126_1', '523_1'];
$obeh[3] = ['522_1', '127_1'];
$obeh[4] = ['442_1', '546_1', '444_1', '125_1', '120_1'];
$obeh[5] = ['123_1', '122_1', '443_1'];
$obeh[6] = ['128_1', '521_1'];
$obeh[7] = ['520_1', '221_1'];

$omezeni['120_1'] = '12';
$omezeni['123_1'] = '13';
$omezeni['17614_1'] = '6,7';
$omezeni['444_1'] = '57_2018';
$omezeni['522_1'] = '13';
$omezeni['523_1'] = '12';
$omezeni['546_1'] = '58_2018';
$omezeni['614_1'] = '1,2,3,4,5';

$trasa['17614_1'] = ['Žilina;3:07','Bratislava hl.st.;6:03'];
$trasa['442_1'] = ['Žilina;1:38','Bohumín;3:06'];
$trasa['443_1'] = ['Praha hl.n.;22:13','Žilina;4:34'];
$trasa['444_1'] = ['Bohumín;3:51','Praha hl.n.;7:37'];
$trasa['546_1'] = ['Bohumín;3:51','Praha hl.n.;7:23'];
$trasa['614_1'] = ['Žilina;3:07','Bratislava hl.st.;6:09'];
$trasa['615_1'] = ['Bratislava hl.st.;23:43','Žilina;2:22'];
$trasa['120_1'] = ['Žilina;17:19', 'Praha hl.n.;22:45'];
$trasa['122_1'] = ['Žilina;15:19', 'Praha hl.n.;20:36'];
$trasa['123_1'] = ['Praha hl.n.;7:24', 'Žilina;12:41'];
$trasa['125_1'] = ['Praha hl.n.;9:24', 'Žilina;14:41'];
$trasa['126_1'] = ['Žilina;11:19', 'Praha hl.n.;16:36'];
$trasa['127_1'] = ['Praha hl.n.;11:24', 'Žilina;16:41'];
$trasa['128_1'] = ['Žilina;9:19', 'Praha hl.n.;14:36'];
$trasa['221_1'] = ['Praha hl.n.;13:24', 'Žilina;18:41'];
$trasa['520_1'] = ['Vsetín;6:52', 'Praha hl.n.;10:36'];
$trasa['521_1'] = ['Praha hl.n.;17:24', 'Vsetín;21:07'];
$trasa['522_1'] = ['Vsetín;4:56', 'Praha hl.n.;8:36'];
$trasa['523_1'] = ['Praha hl.n.;19:24', 'Vsetín;23:03'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts313 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


