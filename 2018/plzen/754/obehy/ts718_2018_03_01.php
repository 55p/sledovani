<?php 
$zacatekPlatnosti = '1.3.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['7407_1', '7416_1', '7425_1', '7424_1', '100363_1', '7432_1', '7409_1', '7408_1', '7415_1', '7412_1', '7421_1', '7420_1', '7429_1', '7428_1'];
$obeh[2] = ['11351_1', '1960_1', '7545_1', '770_1', '775_1'];
$obeh[3] = ['776_1', '767_1', '764_1', '779_1'];
$obeh[4] = ['11350_1', '7405_1', '7405_2', '100362_1', '7417_1', '7418_1', '100363_2', '7432_2'];

$omezeni['7405_2'] = '25';
$omezeni['7405_1'] = 'X';
$omezeni['7407_1'] = 'X';
$omezeni['7408_1'] = '25';
$omezeni['7409_1'] = '25';
$omezeni['7412_1'] = '25';
$omezeni['7415_1'] = '25';
$omezeni['7416_1'] = 'X';
$omezeni['7417_1'] = 'X';
$omezeni['7418_1'] = 'X';
$omezeni['7420_1'] = '25';
$omezeni['7421_1'] = '25';
$omezeni['7424_1'] = 'X';
$omezeni['7425_1'] = 'X';
$omezeni['7428_1'] = '25';
$omezeni['7429_1'] = '25';
$omezeni['7432_1'] = 'X';
$omezeni['7432_2'] = '25';
$omezeni['100362_1'] = '25';
$omezeni['100363_1'] = 'X';
$omezeni['100363_2'] = '25';

$trasa['764_1'] = ['Klatovy;16:51','Železná Ruda-Alžbětín;17:55'];
$trasa['767_1'] = ['Železná Ruda-Alžbětín;12:06','Klatovy;13:10'];
$trasa['770_1'] = ['Klatovy;12:51','Železná Ruda-Alžbětín;13:55'];
$trasa['775_1'] = ['Železná Ruda-Alžbětín;16:08','Klatovy;17:10'];
$trasa['776_1'] = ['Klatovy;8:51','Železná Ruda-Alžbětín;9:55'];
$trasa['779_1'] = ['Železná Ruda-Alžbětín;18:08','Klatovy;19:10'];
$trasa['1960_1'] = ['Klatovy;6:46','Železná Ruda-Alžbětín;7:52'];
$trasa['7405_2'] = ['Domažlice město;5:29','Vejprnice;6:29'];
$trasa['7405_1'] = ['Domažlice;5:32','Vejprnice;6:29'];
$trasa['7407_1'] = ['Domažlice město;6:06','Vejprnice;7:18'];
$trasa['7408_1'] = ['Vejprnice;8:30','Domažlice město;9:26'];
$trasa['7409_1'] = ['Domažlice město;6:30','Vejprnice;7:32'];
$trasa['7412_1'] = ['Vejprnice;12:30','Domažlice město;13:27'];
$trasa['7415_1'] = ['Domažlice město;10:30','Vejprnice;11:31'];
$trasa['7416_1'] = ['Vejprnice;14:30','Domažlice;15:25'];
$trasa['7417_1'] = ['Domažlice město;12:30','Vejprnice;13:31'];
$trasa['7418_1'] = ['Vejprnice;15:32','Domažlice město;16:36'];
$trasa['7420_1'] = ['Vejprnice;16:30','Domažlice město;17:27'];
$trasa['7421_1'] = ['Domažlice město;14:30','Vejprnice;15:31'];
$trasa['7424_1'] = ['Vejprnice;18:30','Domažlice město;19:28'];
$trasa['7425_1'] = ['Domažlice město;16:30','Vejprnice;17:31'];
$trasa['7428_1'] = ['Vejprnice;74:28','Domažlice město;21:27'];
$trasa['7429_1'] = ['Domažlice;18:34','Vejprnice;19:31'];
$trasa['7432_2'] = ['Vejprnice;23:06','Domažlice;23:59'];
$trasa['7432_1'] = ['Vejprnice;23:06','Domažlice město;23:59'];
$trasa['7545_1'] = ['Železná Ruda-Alžbětín;8:06','Klatovy;9:10'];
$trasa['11350_1'] = ['Klatovy;3:54','Domažlice;4:50'];
$trasa['11351_1'] = ['Domažlice;0:30','Klatovy;1:26'];
$trasa['100362_1'] = ['Nýřany;7:24','Domažlice;7:59'];
$trasa['100363_1'] = ['Domažlice;20:01','Nýřany;20:37'];
$trasa['100363_2'] = ['Domažlice;20:01','Nýřany;20:37'];
//sem patri stazene trasy


$poznamkaObehu['100363_1'] = ['pk', 'postrk'];
$poznamkaObehu['100362_1'] = ['pk', 'postrk'];


$typ['11351_1'] = 'Sv';
$typ['11350_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts718 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


