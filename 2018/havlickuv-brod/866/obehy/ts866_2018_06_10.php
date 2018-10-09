<?php 
$zacatekPlatnosti = '10.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['115950_1', '15981_1', '15952_1', '15953_1', '214863_1', '8353_1', '118408_1', '8364_1', '8763_1', '14974_1', '114974_1', '24915_1', '24918_1', '24963_1', '24998_1', '8757_1', '8764_1', '8763_2', '8768_1'];

$omezeni['8353_1'] = 'X';
$omezeni['8364_1'] = 'X';
$omezeni['8757_1'] = '25';
$omezeni['8763_2'] = '25';
$omezeni['8763_1'] = 'X';
$omezeni['8764_1'] = '25';
$omezeni['8768_1'] = '25';
$omezeni['14974_1'] = 'X1234,-2903,-0407,-2709,2912,3003,0607,2809';
$omezeni['15952_1'] = 'X';
$omezeni['15953_1'] = 'X';
$omezeni['15981_1'] = 'X';
$omezeni['24915_1'] = 'X';
$omezeni['24918_1'] = 'X';
$omezeni['24963_1'] = 'X,-0507,-0607,-2809,-1711';
$omezeni['24998_1'] = 'X,-0507,-0607,-2809,-1711';
$omezeni['114974_1'] = 'X5,2903,0407,2709,-2912,-3003,-0607,-2809';
$omezeni['115950_1'] = 'X';
$omezeni['118408_1'] = 'X';
$omezeni['214863_1'] = 'X';

$trasa['8353_1'] = ['Jihlava;12:24','Horní Cerekev;13:09'];
$trasa['8364_1'] = ['Pelhřimov;14:26','Havlíčkův Brod;16:42'];
$trasa['8757_1'] = ['Havlíčkův Brod;15:10','Žďár nad Sázavou;15:46'];
$trasa['8763_2'] = ['Havlíčkův Brod;16:49','Žďár nad Sázavou;17:24'];
$trasa['8763_1'] = ['Havlíčkův Brod;16:49','Nové Město na Moravě;17:59'];
$trasa['8764_1'] = ['Žďár nad Sázavou;16:10','Havlíčkův Brod;16:46'];
$trasa['8768_1'] = ['Žďár nad Sázavou;18:40','Havlíčkův Brod;19:12'];
$trasa['14974_1'] = ['NMnN;18:04','Žďár nad Sázavou;18:25'];
$trasa['15952_1'] = ['Havlíčkův Brod;5:16','Humpolec;6:01'];
$trasa['15953_1'] = ['Humpolec;6:33','Havlíčkův Brod;7:20'];
$trasa['15981_1'] = ['Herálec;4:21','Havlíčkův Brod;4:46'];
$trasa['24915_1'] = ['Žďár nad Sázavou;18:36','Studenec;19:52'];
$trasa['24918_1'] = ['Studenec;20:02','Křižanov;20:54'];
$trasa['24963_1'] = ['Křižanov;21:05','Velké Meziříčí zastávka;21:18'];
$trasa['24998_1'] = ['Velké Meziříčí zastávka;21:21','Velké Meziříčí;21:23'];
$trasa['114974_1'] = ['Nové Město na Moravě;18:04','Žďár nad Sázavou;18:25'];
$trasa['115950_1'] = ['Havlíčkův Brod;3:52','Herálec;4:16'];
$trasa['118408_1'] = ['Horní Cerekev;13:12','Pelhřimov;13:35'];
$trasa['214863_1'] = ['Havlíčkův Brod;8:05','Jihlava;8:33'];
//sem patri stazene trasy


$poznamkaObehu['115950_1'] = ['pk', 'postrk'];
$poznamkaObehu['214863_1'] = ['pk', 'postrk'];
$poznamkaObehu['118408_1'] = ['pk', 'postrk'];
$poznamkaObehu['114974_1'] = ['pk', 'postrk'];


$typ['24998_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts866 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


