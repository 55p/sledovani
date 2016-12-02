<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4901_1', '4906_1', '4907_1', '4912_1', '4913_1', '4918_1', '4682_1', '4903_1', '4908_1', '4939_1', '4667_1', '4600_1', '4905_1', '4910_1', '4911_1', '4916_1'];

$omezeni['4667_1'] = '6';
$omezeni['4682_1'] = '6';
$omezeni['4901_1'] = 'X';
$omezeni['4903_1'] = '6';
$omezeni['4905_1'] = 'T';
$omezeni['4906_1'] = 'X';
$omezeni['4907_1'] = 'X';
$omezeni['4908_1'] = '6';
$omezeni['4910_1'] = 'T';
$omezeni['4911_1'] = 'T';
$omezeni['4912_1'] = 'X';
$omezeni['4913_1'] = 'X';
$omezeni['4916_1'] = 'T';
$omezeni['4600_1'] = 'T';
$omezeni['4918_1'] = 'X';
$omezeni['4939_1'] = '6';

$trasa['4600_1'] = ['Břeclav;4:45', 'Žďár nad Sázavou;7:26'];
$trasa['4667_1'] = ['Vranovice;23:45', 'Břeclav;0:21'];
$trasa['4682_1'] = ['Křižanov;4:51', 'Žďár nad Sázavou;5:12'];
$trasa['4901_1'] = ['Křižanov;4:26', 'Šakvice;6:19'];
$trasa['4903_1'] = ['Žďár nad Sázavou;6:34', 'Vranovice;8:43'];
$trasa['4905_1'] = ['Žďár nad Sázavou;8:34', 'Vranovice;10:43'];
$trasa['4906_1'] = ['Šakvice;7:04', 'Žďár nad Sázavou;9:26'];
$trasa['4907_1'] = ['Žďár nad Sázavou;10:34', 'Vranovice;12:43'];
$trasa['4908_1'] = ['Vranovice;9:16', 'Brno hl.n.;9:49'];
$trasa['4910_1'] = ['Vranovice;11:16', 'Žďár nad Sázavou;13:26'];
$trasa['4911_1'] = ['Žďár nad Sázavou;14:34', 'Vranovice;16:43'];
$trasa['4912_1'] = ['Vranovice;13:16', 'Žďár nad Sázavou;15:26'];
$trasa['4913_1'] = ['Žďár nad Sázavou;16:34', 'Vranovice;18:43'];
$trasa['4916_1'] = ['Vranovice;17:16', 'Křižanov;19:04'];
$trasa['4918_1'] = ['Vranovice;19:16', 'Křižanov;21:04'];
$trasa['4939_1'] = ['Brno hl.n.;23:10', 'Vranovice;23:40'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts203 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


