<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['118421_1', '18420_1', '18405_1', '8350_1', '28304_1', '8349_1', '8384_1', '18408_1', '18417_1', '8378_1', '8377_1', '8377_2'];
$obeh[2] = ['118421_2', '8383_1', '8382_1', '18424_1', '18411_1', '18410_1', '18417_2', '8237_1', '18418_1', '8240_1'];

$omezeni['118421_1'] = 'X';
$omezeni['118421_2'] = '3004,0705';
$omezeni['18405_1'] = 'X';
$omezeni['18408_1'] = 'X';
$omezeni['18410_1'] = 'X';
$omezeni['18411_1'] = 'X';
$omezeni['18417_1'] = 'T,-2904,-0605';
$omezeni['18417_2'] = 'X';
$omezeni['18418_1'] = 'X';
$omezeni['18420_1'] = 'X';
$omezeni['18424_1'] = 'X';
$omezeni['28304_1'] = 'X';
$omezeni['8237_1'] = '6,-2412,-2512';
$omezeni['8240_1'] = '6';
$omezeni['8349_1'] = 'X';
$omezeni['8350_1'] = 'X';
$omezeni['8377_1'] = 'X';
$omezeni['8377_2'] = '5,2903,3004,0705,0407,2709,-3003,-0612,-2809';
$omezeni['8378_1'] = '23';
$omezeni['8382_1'] = 'X';
$omezeni['8383_1'] = 'X';
$omezeni['8384_1'] = 'X';

$trasa['118421_1'] = ['Tábor;4:09','Obrataň;4:38'];
$trasa['118421_2'] = ['Tábor;4:09','Pelhřimov;5:22'];
$trasa['18405_1'] = ['Tábor;6:09','Horní Cerekev;7:50'];
$trasa['18408_1'] = ['Horní Cerekev;13:12','Tábor;14:38'];
$trasa['18410_1'] = ['Horní Cerekev;14:57','Tábor;16:23'];
$trasa['18411_1'] = ['Tábor;11:09','Horní Cerekev;12:40'];
$trasa['18417_1'] = ['Tábor;17:09','Pelhřimov;18:13'];
$trasa['18417_2'] = ['Tábor;17:09','Horní Cerekev;18:43'];
$trasa['18418_1'] = ['Horní Cerekev;20:17','Tábor;21:41'];
$trasa['18420_1'] = ['Obrataň;4:42','Tábor;5:10'];
$trasa['18424_1'] = ['Pelhřimov;8:23','Tábor;9:25'];
$trasa['28304_1'] = ['Kostelec u Jihlavy;8:53','Havlíčkův Brod;9:13'];
$trasa['8237_1'] = ['Tábor;19:27','Veselí nad Lužnicí;19:59'];
$trasa['8240_1'] = ['Veselí nad Lužnicí;21:29','Tábor;21:59'];
$trasa['8349_1'] = ['Havlíčkův Brod;9:52','Počátky-Žirovnice;10:56'];
$trasa['8350_1'] = ['Horní Cerekev;8:26','Kostelec u Jihlavy;8:53'];
$trasa['8377_1'] = ['Havlíčkův Brod;22:08','Pelhřimov;23:39'];
$trasa['8377_2'] = ['Havlíčkův Brod;22:08','Tábor;00:34'];
$trasa['8378_1'] = ['Tábor;19:09','Havlíčkův Brod;22:03'];
$trasa['8382_1'] = ['Počátky-Žirovnice;6:36','Pelhřimov;7:22'];
$trasa['8383_1'] = ['Pelhřimov;5:29','Počátky-Žirovnice;6:33'];
$trasa['8384_1'] = ['Počátky-Žirovnice;11:06','Horní Cerekev;11:25'];

$poznamkaObehu['118421_1'] = ['pk', 'postrk'];
$poznamkaObehu['118421_2'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts846 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


