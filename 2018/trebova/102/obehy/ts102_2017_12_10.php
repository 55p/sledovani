<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['5021_1', '5020_1', '6281_1', '6283_1', '6280_1', '7155_1', '7164_1', '7159_1', '7157_1', '7170_1', '7167_1', '7182_1', '7180_1', '7173_1', '7186_1', '5048_1', '5047_1', '5052_1', '5032_1'];

$omezeni['5020_1'] = 'X6';
$omezeni['5021_1'] = '6';
$omezeni['5032_1'] = '6';
$omezeni['5047_1'] = 'X1234';
$omezeni['5048_1'] = 'X';
$omezeni['5052_1'] = 'X5';
$omezeni['6281_1'] = 'X';
$omezeni['6283_1'] = '25';
$omezeni['7155_1'] = 'X6';
$omezeni['7157_1'] = 'T';
$omezeni['7159_1'] = 'X6';
$omezeni['7164_1'] = 'X6';
$omezeni['7180_1'] = 'X';
$omezeni['7182_1'] = '25';
$omezeni['7173_1'] = 'X';
$omezeni['7186_1'] = 'X';

$trasa['7173_1'] = ['Ústí nad Orlicí;17:41', 'Jablonné nad Orlicí;18:10'];
$trasa['5020_1'] = ['Česká Třebová;3:52', 'Pardubice hl.n.;4:51'];
$trasa['5021_1'] = ['Pardubice hl.n.;1:11', 'Česká Třebová;2:10'];
$trasa['5032_1'] = ['Česká Třebová;20:22', 'Pardubice hl.n.;21:32'];
$trasa['5047_1'] = ['Choceň;22:37', 'Česká Třebová;23:02'];
$trasa['5048_1'] = ['Ústí nad Orlicí;20:18', 'Choceň;20:32'];
$trasa['5052_1'] = ['Choceň;20:40', 'Pardubice hl.n.;21:16'];
$trasa['6280_1'] = ['Miedzylesie;8:18', 'Ústí nad Orlicí;9:19'];
$trasa['6281_1'] = ['Pardubice hl.n.;5:32', 'Miedzylesie;7:53'];
$trasa['6283_1'] = ['Pardubice hl.n.;5:32', 'Lichkov;7:27'];
$trasa['7155_1'] = ['Ústí nad Orlicí;9:41', 'Letohrad;9:54'];
$trasa['7157_1'] = ['Ústí nad Orlicí;9:41', 'Lichkov;10:26'];
$trasa['7159_1'] = ['Ústí nad Orlicí;10:41', 'Lichkov;11:26'];
$trasa['7164_1'] = ['Letohrad;10:06', 'Ústí nad Orlicí;10:19'];
$trasa['7167_1'] = ['Ústí nad Orlicí;14:41', 'Lichkov;15:25'];
$trasa['7170_1'] = ['Lichkov;12:33', 'Ústí nad Orlicí;13:19'];
$trasa['7180_1'] = ['Lichkov;16:31', 'Ústí nad Orlicí;17:19'];
$trasa['7182_1'] = ['Lichkov;17:32', 'Ústí nad Orlicí;18:19'];
$trasa['7186_1'] = ['Lichkov;18:30', 'Ústí nad Orlicí;19:19'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts102 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


