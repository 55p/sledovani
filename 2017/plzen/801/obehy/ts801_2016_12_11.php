<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['7605_1', '1188_1', '1189_1', '1182_1'];
$obeh[2] = ['6861_1', '1181_1', '7666_1', '7669_1', '7606_1', '7617_1', '1181_2', '7640_1', '7641_1', '7606_2', '7617_2', '7610_1'];

$omezeni['1181_1'] = 'X';
$omezeni['1181_2'] = '6,-1504,-1811';
$omezeni['1182_1'] = 'XT,-1404,-1604,-0705,-0507,-1711';
$omezeni['6861_1'] = 'X';
$omezeni['7605_1'] = 'X';
$omezeni['7606_1'] = 'X';
$omezeni['7606_2'] = '6';
$omezeni['7610_1'] = 'zX';
$omezeni['7617_1'] = 'X';
$omezeni['7617_2'] = '6';
$omezeni['7640_1'] = '6';
$omezeni['7641_1'] = '6';
$omezeni['7666_1'] = 'X';
$omezeni['7669_1'] = 'X';

$trasa['1181_1'] = ['Bílina;4:42','Plzeň hl.n.;7:54'];
$trasa['1181_2'] = ['Most;5:05','Plzeň hl.n.;7:54'];
$trasa['1182_1'] = ['Plzeň hl.n.;18:05','Most;20:49'];
$trasa['1188_1'] = ['Plzeň hl.n.;12:05','Most;14:49'];
$trasa['1189_1'] = ['Most;15:05','Plzeň hl.n.;17:54'];
$trasa['6861_1'] = ['Most;4:15','Bílina;4:25'];
$trasa['7605_1'] = ['Žihle;6:15','Plzeň hl.n.;7:29'];
$trasa['7606_1'] = ['Plzeň hl.n.;16:16','Mladotice;17:09'];
$trasa['7606_2'] = ['Plzeň hl.n.;16:16','Žihle;17:23'];
$trasa['7610_1'] = ['Plzeň hl.n.;21:06','Žihle;22:09'];
$trasa['7617_1'] = ['Mladotice;18:47','Plzeň hl.n.;19:41'];
$trasa['7617_2'] = ['Žihle;18:34','Plzeň hl.n.;19:41'];
$trasa['7640_1'] = ['Plzeň hl.n.;10:16','Mladotice;11:09'];
$trasa['7641_1'] = ['Mladotice;12:47','Plzeň hl.n.;13:41'];
$trasa['7666_1'] = ['Plzeň hl.n.;12:16','Plasy;12:58'];
$trasa['7669_1'] = ['Plasy;14:59','Plzeň hl.n.;15:41'];

$poznamkaObehu['7605_1'] = ['pk', 'postrk'];
$poznamkaObehu['6861_1'] = ['pk', 'postrk'];
$poznamkaObehu['7669_1'] = ['pk', 'postrk'];
$poznamkaObehu['7617_1'] = ['pk', 'postrk'];
$poznamkaObehu['7641_1'] = ['pk', 'postrk'];
$poznamkaObehu['7617_2'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts801 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


