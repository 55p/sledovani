<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['104771_1', '104705_1', '104006_1', '4047_1', '4041_1', '4044_1', '4045_1', '104718_1', '104727_1', '104754_1', '104721_1', '104748_1', '104751_1', '104728_1', '204728_1', '4639_1', '4638_1', '4714_1', '104723_1', '4724_1', '104733_1', '4020_1', '4734_1', '104027_1'];
$obeh[2] = ['104702_1', '104711_1', '104010_1', '104009_1', '104771_2', '104705_2', '104006_2', '4047_2', '104716_1', '104725_1', '104752_1', '4056_1', '4057_1', '4060_1', '4061_1', '4062_1', '4797_1', '104705_3', '104006_3', '104714_1', '4723_1', '104724_1', '4733_1', '104020_1', '4705_1', '4006_1', '4708_1', '4717_1', '4744_1', '104720_1', '104729_1', '104756_1', '104732_1'];

$omezeni['104006_1'] = 'X1';
$omezeni['104006_2'] = 'X2345';
$omezeni['104006_3'] = '6';
$omezeni['104009_1'] = 'X1';
$omezeni['104010_1'] = 'X1';
$omezeni['104020_1'] = '6';
$omezeni['104027_1'] = 'T';
$omezeni['104702_1'] = 'X1';
$omezeni['104705_1'] = 'X1';
$omezeni['104705_2'] = 'X2345';
$omezeni['104705_3'] = '6';
$omezeni['104711_1'] = 'X1';
$omezeni['104714_1'] = '6';
$omezeni['104716_1'] = 'X';
$omezeni['104718_1'] = 'X1234';
$omezeni['104720_1'] = 'T';
$omezeni['104721_1'] = 'X5';
$omezeni['104723_1'] = '6';
$omezeni['104724_1'] = '6';
$omezeni['104725_1'] = 'X';
$omezeni['104727_1'] = 'X1234';
$omezeni['104728_1'] = 'X';
$omezeni['104729_1'] = 'T';
$omezeni['104732_1'] = 'T';
$omezeni['104733_1'] = '6';
$omezeni['104748_1'] = 'X5';
$omezeni['104751_1'] = 'X5';
$omezeni['104752_1'] = 'X';
$omezeni['104754_1'] = 'X1234';
$omezeni['104756_1'] = 'T';
$omezeni['104771_1'] = 'X1';
$omezeni['104771_2'] = 'X2345';
$omezeni['204728_1'] = 'X';
$omezeni['4006_1'] = 'T';
$omezeni['4020_1'] = '6';
$omezeni['4041_1'] = 'X2345';
$omezeni['4044_1'] = 'X2345';
$omezeni['4045_1'] = 'X2345';
$omezeni['4047_1'] = 'X1';
$omezeni['4047_2'] = 'X2345';
$omezeni['4056_1'] = 'X';
$omezeni['4057_1'] = 'X';
$omezeni['4060_1'] = 'X';
$omezeni['4061_1'] = 'X';
$omezeni['4062_1'] = 'X';
$omezeni['4638_1'] = '25';
$omezeni['4639_1'] = '25';
$omezeni['4705_1'] = 'T';
$omezeni['4708_1'] = 'T';
$omezeni['4714_1'] = '6';
$omezeni['4717_1'] = 'T';
$omezeni['4723_1'] = '6';
$omezeni['4724_1'] = '6';
$omezeni['4733_1'] = '6';
$omezeni['4734_1'] = '6';
$omezeni['4744_1'] = 'T';
$omezeni['4797_1'] = 'X5';

$trasa['104006_1'] = ['Křenovice horní nádraží;6:54','Blansko;7:56'];
$trasa['104006_2'] = ['Křenovice horní nádraží;6:54','Blansko;7:56'];
$trasa['104728_1'] = ['Sokolnice-Telnice;17:35','Letovice;19:01'];
$trasa['104752_1'] = ['Křenovice horní nádraží;15:56','Brno hl.n.;16:28'];
$trasa['104754_1'] = ['Křenovice horní nádraží;16:54','Sokolnice-Telnice;17:05'];
$trasa['204728_1'] = ['Letovice;19:04','Březová nad Svitavou;19:14'];
$trasa['4797_1'] = ['Rájec-Jestřebí;21:16','Brno hl.n.;21:45'];
$trasa['104006_3'] = ['Křenovice horní n.;6:54', 'Brno hl.n.;7:26'];
$trasa['104009_1'] = ['Rájec-Jestřebí;10:50', 'Brno hl.n.;11:31'];
$trasa['104010_1'] = ['Křenovice horní n.;8:54', 'Rájec-Jestřebí;10:09'];
$trasa['104020_1'] = ['Křenovice horní n.;19:56', 'Brno hl.n.;20:28'];
$trasa['104027_1'] = ['Brno hl.n.;22:46', 'Vyškov na Moravě;23:32'];
$trasa['104702_1'] = ['Vyškov na Moravě;4:33', 'Letovice;6:23'];
$trasa['104705_1'] = ['Letovice;5:00', 'Křenovice horní n.;6:33'];
$trasa['104705_2'] = ['Letovice;5:00', 'Křenovice horní n.;6:33'];
$trasa['104705_3'] = ['Březová nad Svitavou;4:49', 'Křenovice horní n.;6:33'];
$trasa['104711_1'] = ['Letovice;6:58', 'Křenovice horní n.;8:33'];
$trasa['104714_1'] = ['Brno hl.n.;11:01', 'Letovice;12:01'];
$trasa['104716_1'] = ['Brno hl.n.;12:01', 'Březová nad Svitavou;13:12'];
$trasa['104718_1'] = ['Brno hl.n.;13:01', 'Březová nad Svitavou;14:12'];
$trasa['104720_1'] = ['Brno hl.n.;14:01', 'Březová nad Svitavou;15:12'];
$trasa['104721_1'] = ['Březová nad Svitavou;11:47', 'Křenovice horní n.;13:33'];
$trasa['104723_1'] = ['Letovice;12:58', 'Brno hl.n.;13:59'];
$trasa['104724_1'] = ['Brno hl.n.;15:59', 'Březová nad Svitavou;17:12'];
$trasa['104725_1'] = ['Březová nad Svitavou;13:47', 'Křenovice horní n.;15:33'];
$trasa['104727_1'] = ['Březová nad Svitavou;14:47', 'Křenovice horní n.;16:35'];
$trasa['104729_1'] = ['Březová nad Svitavou;15:47', 'Křenovice horní n.;17:36'];
$trasa['104732_1'] = ['Brno hl.n.;19:59', 'Březová nad Svitavou;21:29'];
$trasa['104733_1'] = ['Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33'];
$trasa['104748_1'] = ['Křenovice horní n.;13:56', 'Skalice nad Svitavou;15:17'];
$trasa['104751_1'] = ['Skalice nad Svitavou;15:42', 'Sokolnice-Telnice;16:51'];
$trasa['104756_1'] = ['Křenovice horní n.;17:54', 'Brno hl.n.;18:26'];
$trasa['104771_1'] = ['Březová nad Svitavou;4:17', 'Letovice;4:27'];
$trasa['104771_2'] = ['Březová nad Svitavou;4:17', 'Letovice;4:27'];
$trasa['4006_1'] = ['Křenovice horní n.;6:54', 'Brno hl.n.;7:26'];
$trasa['4020_1'] = ['Křenovice horní n.;19:56', 'Brno hl.n.;20:28'];
$trasa['4041_1'] = ['Rájec-Jestřebí;5:06', 'Brno hl.n.;5:43'];
$trasa['4044_1'] = ['Brno hl.n.;6:15', 'Rájec-Jestřebí;6:53'];
$trasa['4045_1'] = ['Rájec-Jestřebí;7:10', 'Brno hl.n.;7:52'];
$trasa['4047_1'] = ['Blansko;8:19', 'Brno hl.n.;8:45'];
$trasa['4047_2'] = ['Blansko;8:19', 'Brno hl.n.;8:45'];
$trasa['4056_1'] = ['Brno hl.n.;16:44', 'Rájec-Jestřebí;17:18'];
$trasa['4057_1'] = ['Rájec-Jestřebí;17:33', 'Brno hl.n.;18:11'];
$trasa['4060_1'] = ['Brno hl.n.;18:16', 'Rájec-Jestřebí;18:54'];
$trasa['4061_1'] = ['Rájec-Jestřebí;19:09', 'Brno hl.n.;19:49'];
$trasa['4062_1'] = ['Brno hl.n.;20:30', 'Rájec-Jestřebí;21:10'];
$trasa['4638_1'] = ['Hodonín;3:28', 'Brno hl.n.;4:50'];
$trasa['4639_1'] = ['Brno hl.n.;0:35', 'Hodonín;1:53'];
$trasa['4705_1'] = ['Letovice;5:00', 'Křenovice horní n.;6:33'];
$trasa['4708_1'] = ['Brno hl.n.;8:01', 'Březová nad Svitavou;9:12'];
$trasa['4714_1'] = ['Brno hl.n.;11:01', 'Letovice;12:01'];
$trasa['4717_1'] = ['Březová nad Svitavou;9:47', 'Křenovice horní n.;11:33'];
$trasa['4723_1'] = ['Letovice;12:58', 'Brno hl.n.;13:59'];
$trasa['4724_1'] = ['Brno hl.n.;15:59', 'Březová nad Svitavou;17:12'];
$trasa['4733_1'] = ['Březová nad Svitavou;17:47', 'Křenovice horní n.;19:33'];
$trasa['4734_1'] = ['Brno hl.n.;21:01', 'Letovice;22:01'];
$trasa['4744_1'] = ['Křenovice horní n.;11:56', 'Brno hl.n.;12:28'];


$poznamkaObehu['104006_1'] = ['pk', 'postrk'];
$poznamkaObehu['104718_1'] = ['pk', 'postrk'];
$poznamkaObehu['104754_1'] = ['pk', 'postrk'];
$poznamkaObehu['104748_1'] = ['pk', 'postrk'];
$poznamkaObehu['104723_1'] = ['pk', 'postrk'];
$poznamkaObehu['104733_1'] = ['pk', 'postrk'];
$poznamkaObehu['104702_1'] = ['pk', 'postrk'];
$poznamkaObehu['104010_1'] = ['pk', 'postrk'];
$poznamkaObehu['104006_2'] = ['pk', 'postrk'];
$poznamkaObehu['104716_1'] = ['pk', 'postrk'];
$poznamkaObehu['104752_1'] = ['pk', 'postrk'];
$poznamkaObehu['104006_3'] = ['pk', 'postrk'];
$poznamkaObehu['104714_1'] = ['pk', 'postrk'];
$poznamkaObehu['104724_1'] = ['pk', 'postrk'];
$poznamkaObehu['104020_1'] = ['pk', 'postrk'];
$poznamkaObehu['104720_1'] = ['pk', 'postrk'];
$poznamkaObehu['104756_1'] = ['pk', 'postrk'];
$poznamkaObehu['104732_1'] = ['pk', 'postrk'];

$poznamkaObehu['104771_1'] = ['př', 'přípřež'];
$poznamkaObehu['104705_1'] = ['př', 'přípřež'];
$poznamkaObehu['104727_1'] = ['př', 'přípřež'];
$poznamkaObehu['104721_1'] = ['př', 'přípřež'];
$poznamkaObehu['104751_1'] = ['př', 'přípřež'];
$poznamkaObehu['104728_1'] = ['př', 'přípřež'];
$poznamkaObehu['104027_1'] = ['př', 'přípřež'];
$poznamkaObehu['104711_1'] = ['př', 'přípřež'];
$poznamkaObehu['104009_1'] = ['př', 'přípřež'];
$poznamkaObehu['104771_2'] = ['př', 'přípřež'];
$poznamkaObehu['104705_2'] = ['př', 'přípřež'];
$poznamkaObehu['104725_1'] = ['př', 'přípřež'];
$poznamkaObehu['104705_3'] = ['př', 'přípřež'];
$poznamkaObehu['104729_1'] = ['př', 'přípřež'];

$typ['4797_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts607 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


