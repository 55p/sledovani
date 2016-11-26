<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5021_1', '5020_1', '6281_1', '6280_1', '7165_1', '7170_1', '7165_2', '7170_2', '6285_1', '7154_1', '7151_1', '6288_1', '7148_1', '7153_1', '6288_2', '6288_3');

$omezeni['5020_1'] = 'X6';
$omezeni['5021_1'] = 'X6';
$omezeni['6288_1'] = 'X';
$omezeni['6288_2'] = '6';
$omezeni['6288_3'] = 'T';
$omezeni['7148_1'] = '25';
$omezeni['7151_1'] = 'X';
$omezeni['7153_1'] = 'T';
$omezeni['7154_1'] = 'X';
$omezeni['7165_1'] = 'X';
$omezeni['7165_2'] = '25';
$omezeni['7170_1'] = 'X';
$omezeni['7170_2'] = '25';

$trasa['6288_2'] = ['Ústí nad Orlicí;20:18','Pardubice hl.n.;21:20'];
$trasa['5020_1'] = array('Česká Třebová;3:52', 'Pardubice hl.n.;4:52');
$trasa['5021_1'] = array('Pardubice hl.n.;0:26', 'Česká Třebová;1:27');
$trasa['6280_1'] = array('Miedzylesie;9:06', 'Ústí nad Orlicí;10:09');
$trasa['6281_1'] = array('Pardubice hl.n.;5:40', 'Miedzylesie;7:53');
$trasa['6285_1'] = array('Ústí nad Orlicí;12:46', 'Lichkov;13:33');
$trasa['6288_1'] = array('Lichkov;19:35', 'Pardubice hl.n.;21:20');
$trasa['6288_3'] = array('Lichkov;19:35', 'Pardubice hl.n.;21:20');
$trasa['7148_1'] = array('Lichkov;16:03', 'Ústí nad Orlicí;17:12');
$trasa['7151_1'] = array('Ústí nad Orlicí;16:48', 'Lichkov;17:35');
$trasa['7153_1'] = array('Ústí nad Orlicí;17:46', 'Lichkov;18:36');
$trasa['7154_1'] = array('Lichkov;15:04', 'Ústí nad Orlicí;16:09');
$trasa['7165_1'] = array('Ústí nad Orlicí;10:26', 'Jablonné nad Orlicí;10:57');
$trasa['7165_2'] = array('Ústí nad Orlicí;10:26', 'Letohrad;10:46');
$trasa['7170_1'] = array('Jablonné nad Orlicí;11:19', 'Ústí nad Orlicí;12:09');
$trasa['7170_2'] = array('Letohrad;11:46', 'Ústí nad Orlicí;12:09');

@$ts102 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>