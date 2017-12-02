<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['71_1', '71_2', '78_1', '571_1'];
$obeh[2] = ['570_1', '77_1', '374_1'];
$obeh[3] = ['574_1', '75_1', '372_1'];
$obeh[4] = ['73_1', '370_1'];

$omezeni['574_1'] = 'X6';
$omezeni['71_1'] = 'X6';
$omezeni['71_2'] = 'T';

$trasa['370_1'] = ['Graz Hbf;14:26','Praha hl.n.;21:07'];
$trasa['372_1'] = ['Graz Hbf;16:26','Praha hl.n.;23:14'];
$trasa['374_1'] = ['Graz Hbf;18:26','Brno hl.n.;22:36'];
$trasa['71_1'] = ['Praha hl.n.;4:49','Graz Hbf;11:33'];
$trasa['71_2'] = ['Brno hl.n.;7:23','Graz Hbf;11:33'];
$trasa['73_1'] = ['Praha hl.n.;6:51','Graz Hbf;13:33'];
$trasa['75_1'] = ['Praha hl.n.;8:51','Graz Hbf;15:33'];
$trasa['77_1'] = ['Praha hl.n.;10:51','Graz Hbf;17:33'];
$trasa['78_1'] = ['Graz Hbf;12:26','Praha hl.n.;19:07'];
$trasa['570_1'] = ['Břeclav;6:07', 'Praha hl.n.;9:07'];
$trasa['571_1'] = ['Praha hl.n.;19:51', 'Břeclav;22:52'];
$trasa['574_1'] = ['Brno hl.n.;4:31', 'Praha hl.n.;7:07'];

$poznamkaObehu['78_1'] = ['pk', 'postrk'];
$poznamkaObehu['570_1'] = ['pk', 'postrk'];
$poznamkaObehu['374_1'] = ['pk', 'postrk'];
$poznamkaObehu['574_1'] = ['pk', 'postrk'];
$poznamkaObehu['372_1'] = ['pk', 'postrk'];
$poznamkaObehu['370_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts321 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


