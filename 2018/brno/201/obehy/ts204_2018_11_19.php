<?php 
$zacatekPlatnosti = '19.11.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4040_1', '4041_1', '4044_1', '4045_1', '4021_1', '4042_1', '4043_1', '4968_1', '4977_1', '4976_1', '4985_1', '4984_1', '4633_1', '4936_1', '4938_1'];
$obeh[2] = ['4611_1', '4953_1', '4956_1', '4965_1', '4966_1', '4975_1', '4978_1', '4987_1', '4986_1'];

$omezeni['4021_1'] = 'X2345';
$omezeni['4040_1'] = 'X1';
$omezeni['4041_1'] = 'X1';
$omezeni['4042_1'] = 'X2345';
$omezeni['4043_1'] = 'X2345';
$omezeni['4044_1'] = 'X1';
$omezeni['4045_1'] = 'X1';
$omezeni['4611_1'] = '6';
$omezeni['4633_1'] = 'X';
$omezeni['4936_1'] = 'X';
$omezeni['4938_1'] = 'T';
$omezeni['4953_1'] = 'X';
$omezeni['4956_1'] = 'X';
$omezeni['4965_1'] = 'X';
$omezeni['4966_1'] = 'X';
$omezeni['4968_1'] = 'X';
$omezeni['4975_1'] = 'X';
$omezeni['4976_1'] = 'X';
$omezeni['4977_1'] = 'X';
$omezeni['4978_1'] = 'X';
$omezeni['4984_1'] = 'X';
$omezeni['4985_1'] = 'X';
$omezeni['4986_1'] = 'X';
$omezeni['4987_1'] = 'X';


$poznamkaObehu['4041_1'] = ['pk', 'postrk'];
$poznamkaObehu['4045_1'] = ['pk', 'postrk'];
$poznamkaObehu['4021_1'] = ['pk', 'postrk'];
$poznamkaObehu['4043_1'] = ['pk', 'postrk'];
$poznamkaObehu['4977_1'] = ['pk', 'postrk'];
$poznamkaObehu['4985_1'] = ['pk', 'postrk'];
$poznamkaObehu['4633_1'] = ['pk', 'postrk'];
$poznamkaObehu['4611_1'] = ['pk', 'postrk'];
$poznamkaObehu['4953_1'] = ['pk', 'postrk'];
$poznamkaObehu['4965_1'] = ['pk', 'postrk'];
$poznamkaObehu['4975_1'] = ['pk', 'postrk'];
$poznamkaObehu['4987_1'] = ['pk', 'postrk'];

$trasa['4021_1'] = ['Brno hl.n.;3:06', 'Křenovice horní n.;3:35'];
$trasa['4040_1'] = ['Brno hl.n.;4:04', 'Rájec-Jestřebí;4:41'];
$trasa['4041_1'] = ['Rájec-Jestřebí;5:06', 'Brno hl.n.;5:43'];
$trasa['4042_1'] = ['Křenovice horní n.;4:21', 'Rájec-Jestřebí;5:42'];
$trasa['4043_1'] = ['Rájec-Jestřebí;6:11', 'Brno hl.n.;6:44'];
$trasa['4044_1'] = ['Brno hl.n.;6:15', 'Rájec-Jestřebí;6:53'];
$trasa['4045_1'] = ['Rájec-Jestřebí;7:10', 'Brno hl.n.;7:52'];
$trasa['4611_1'] = ['Tišnov;4:30', 'Brno hl.n.;5:07'];
$trasa['4633_1'] = ['Tišnov;18:30', 'Vranovice;19:42'];
$trasa['4936_1'] = ['Vranovice;21:17', 'Tišnov;22:29'];
$trasa['4938_1'] = ['Brno hl.n.;23:01', 'Tišnov;23:37'];
$trasa['4953_1'] = ['Tišnov;4:45', 'Hrušovany u Brna;5:46'];
$trasa['4956_1'] = ['Hrušovany u Brna;6:13', 'Tišnov;7:13'];
$trasa['4965_1'] = ['Tišnov;7:42', 'Brno hl.n.;8:17'];
$trasa['4966_1'] = ['Brno hl.n.;13:08', 'Kuřim;13:32'];
$trasa['4968_1'] = ['Brno hl.n.;13:35', 'Tišnov;14:13'];
$trasa['4975_1'] = ['Kuřim;14:27', 'Hrušovany u Brna;15:11'];
$trasa['4976_1'] = ['Brno hl.n.;15:35', 'Tišnov;16:14'];
$trasa['4977_1'] = ['Tišnov;14:46', 'Brno hl.n.;15:23'];
$trasa['4978_1'] = ['Hrušovany u Brna;15:41', 'Tišnov;16:43'];
$trasa['4984_1'] = ['Brno hl.n.;17:35', 'Tišnov;18:13'];
$trasa['4985_1'] = ['Tišnov;16:46', 'Brno hl.n.;17:23'];
$trasa['4986_1'] = ['Hrušovany u Brna;19:58', 'Brno hl.n.;20:18'];
$trasa['4987_1'] = ['Tišnov;17:16', 'Hrušovany u Brna;18:15'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts204 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


