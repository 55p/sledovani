<?php 
$zacatekPlatnosti = '30.4.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['8702_1', '8232_1', '8250_1', '8207_1', '633_1', '634_1', '635_1', '8035_1', '8213_1', '8212_1'];
$obeh[2] = ['8222_1', '8236_1', '8209_1', '8044_1', '8064_1', '8063_1'];
$obeh[3] = ['8050_1', '8003_1', '631_1', '632_1', '8210_1', '8215_1', '8240_1', '7971_1', '7970_1', '8049_1', '8022_1'];
$obeh[4] = ['8231_1', '8703_1', '2189_1', '2194_1'];

$omezeni['631_1'] = 'X';
$omezeni['632_1'] = 'X';
$omezeni['633_1'] = 'X1234';
$omezeni['634_1'] = 'X1234';
$omezeni['635_1'] = 'X';
$omezeni['2189_1'] = 'X,-1005,-2105,-2205,-3105';
$omezeni['2194_1'] = 'X,-1005,-2105,-2205,-3105';
$omezeni['7970_1'] = '25';
$omezeni['7971_1'] = '25';
$omezeni['8003_1'] = 'X';
$omezeni['8022_1'] = '6';
$omezeni['8035_1'] = 'X';
$omezeni['8044_1'] = 'X';
$omezeni['8049_1'] = '6';
$omezeni['8050_1'] = 'X';
$omezeni['8063_1'] = 'X';
$omezeni['8064_1'] = 'X';
$omezeni['8207_1'] = 'X';
$omezeni['8209_1'] = 'X';
$omezeni['8210_1'] = 'X';
$omezeni['8212_1'] = '25';
$omezeni['8213_1'] = '25';
$omezeni['8215_1'] = 'X';
$omezeni['8222_1'] = 'X';
$omezeni['8231_1'] = 'X';
$omezeni['8232_1'] = 'X';
$omezeni['8236_1'] = 'X';
$omezeni['8240_1'] = 'X';
$omezeni['8250_1'] = 'X';
$omezeni['8702_1'] = 'X';
$omezeni['8703_1'] = 'X';

$trasa['2189_1'] = ['České Velenice;7:30', 'Gmünd NÖ;7:34'];
$trasa['2194_1'] = ['Genova Brignole;19:36', 'Milano Centrale;21:35'];
$trasa['631_1'] = ['České Budějovice;9:12', 'Písek město;10:04'];
$trasa['632_1'] = ['Písek město;11:50', 'České Budějovice;12:45'];
$trasa['633_1'] = ['České Budějovice;11:12', 'Písek město;12:02'];
$trasa['634_1'] = ['Písek město;15:50', 'České Budějovice;16:45'];
$trasa['635_1'] = ['České Budějovice;17:12', 'Písek město;18:04'];
$trasa['7970_1'] = ['Písek město;10:08', 'Protivín;10:29'];
$trasa['7971_1'] = ['Protivín;9:44', 'Písek město;10:05'];
$trasa['8003_1'] = ['Strakonice;5:44', 'České Budějovice;6:52'];
$trasa['8022_1'] = ['České Budějovice;22:59', 'Protivín;23:35'];
$trasa['8035_1'] = ['Písek město;19:39', 'České Budějovice;20:41'];
$trasa['8044_1'] = ['České Budějovice;15:40', 'Protivín;16:39'];
$trasa['8049_1'] = ['Protivín;21:07', 'České Budějovice;21:45'];
$trasa['8050_1'] = ['Protivín;4:56', 'Strakonice;5:26'];
$trasa['8063_1'] = ['Strakonice;19:35', 'Protivín;19:57'];
$trasa['8064_1'] = ['Protivín;17:50', 'Strakonice;18:12'];
$trasa['8207_1'] = ['Chotoviny;9:21', 'České Budějovice;10:48'];
$trasa['8209_1'] = ['Tábor;12:19', 'České Budějovice;13:37'];
$trasa['8210_1'] = ['České Budějovice;16:30', 'Tábor;17:56'];
$trasa['8212_1'] = ['České Budějovice;18:23', 'Tábor;19:43'];
$trasa['8213_1'] = ['Tábor;16:09', 'České Budějovice;17:22'];
$trasa['8215_1'] = ['Tábor;18:02', 'Veselí nad Lužnicí;18:34'];
$trasa['8222_1'] = ['České Budějovice;6:43', 'Veselí nad Lužnicí;7:30'];
$trasa['8231_1'] = ['Tábor;4:48', 'Veselí nad Lužnicí;5:18'];
$trasa['8232_1'] = ['Veselí nad Lužnicí;6:01', 'Tábor;6:29'];
$trasa['8236_1'] = ['Veselí nad Lužnicí;8:01', 'Tábor;8:29'];
$trasa['8240_1'] = ['Veselí nad Lužnicí;21:29', 'Tábor;21:59'];
$trasa['8250_1'] = ['Tábor;9:10', 'Chotoviny;9:17'];
$trasa['8702_1'] = ['České Velenice;4:19', 'Veselí nad Lužnicí;5:19'];
$trasa['8703_1'] = ['Veselí nad Lužnicí;6:27', 'České Velenice;7:28'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts841 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


