<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['8201_1', '8220_1', '8234_1', '8266_1', '8271_1', '8270_1', '8275_1', '8280_1', '8285_1', '8286_1', '8289_1'];
$obeh[2] = ['8291_1', '8260_1', '8260_2', '8261_1', '8262_1', '8264_1', '8265_1', '8267_1', '8268_1', '8273_1', '8272_1', '18413_1', '18450_1', '8279_1', '18414_1', '8282_1', '8378_1', '8287_1', '8375_1'];
$obeh[3] = ['18421_1', '8264_2', '18422_1', '8267_2', '18409_1', '8268_2', '18406_1', '8273_2', '8272_2', '18413_2', '8279_2', '8282_2', '8387_1', '8374_1', '18416_1', '8287_2', '18419_1'];
$obeh[4] = ['8340_1', '8342_1', '18400_1', '8343_1', '8348_1', '8347_1', '18409_2', '18442_1', '18426_1', '8412_1', '18411_1', '8409_1', '18448_1', '8416_1', '18415_1', '18410_1', '18414_2', '18417_1', '8413_1', '18416_2', '8237_1', '8240_1'];

$omezeni['18400_1'] = 'X';
$omezeni['18406_1'] = 'X';
$omezeni['18409_1'] = 'X';
$omezeni['18409_2'] = '6,3003,0105,0805,0507,2809,-3103,-0707,-2909';
$omezeni['18410_1'] = '6';
$omezeni['18411_1'] = '6';
$omezeni['18413_1'] = '25';
$omezeni['18413_2'] = 'X';
$omezeni['18414_1'] = '25';
$omezeni['18414_2'] = 'X';
$omezeni['18415_1'] = 'X';
$omezeni['18416_1'] = 'X,3003,3103,0104,2904,0605,0507,0607,2809,-2412,-2512,-3112';
$omezeni['18416_2'] = '6,3003,3103,0104,2904,0605,0507,0607,2809,-2412,-2512,-3112';
$omezeni['18417_1'] = '6';
$omezeni['18419_1'] = 'X';
$omezeni['18421_1'] = 'X';
$omezeni['18422_1'] = 'X';
$omezeni['18426_1'] = '25';
$omezeni['18442_1'] = 'T,3103,0707,2909,-3003,-0105,-0805,-0507,-2809,-1711';
$omezeni['18448_1'] = '6';
$omezeni['18450_1'] = '25,-2412,-2512,-3112';
$omezeni['8201_1'] = '-2712,-2812,-2912';
$omezeni['8220_1'] = '-2712,-2812,-2912';
$omezeni['8237_1'] = 'T';
$omezeni['8240_1'] = 'T';
$omezeni['8260_1'] = 'X2345,-2612,-2712,-0201,-3003,-0104,-0204,-0304,-0105,-0205,-0805,-0905,-0507,-0607,-2809';
$omezeni['8260_2'] = 'X';
$omezeni['8261_1'] = 'X';
$omezeni['8262_1'] = '6,3003,0105,0805,0507,2809,-3103,-0707,-2909';
$omezeni['8264_1'] = 'X';
$omezeni['8264_2'] = '25';
$omezeni['8265_1'] = '25';
$omezeni['8267_1'] = 'X';
$omezeni['8267_2'] = '25';
$omezeni['8268_1'] = 'X';
$omezeni['8268_2'] = '25';
$omezeni['8272_1'] = 'X';
$omezeni['8272_2'] = '25';
$omezeni['8273_1'] = 'X';
$omezeni['8273_2'] = '25';
$omezeni['8279_1'] = 'X';
$omezeni['8279_2'] = '25';
$omezeni['8282_1'] = 'X';
$omezeni['8282_2'] = '25';
$omezeni['8286_1'] = '16';
$omezeni['8287_1'] = 'X,-2412';
$omezeni['8287_2'] = '25,-2412';
$omezeni['8289_1'] = 'X';
$omezeni['8291_1'] = '1,2712,0201,0304,0205,0209,-2512,-0101,-0204';
$omezeni['8340_1'] = '6,3003,0105,0805,0507,2809,-3103,-0707,-2909';
$omezeni['8342_1'] = '6,3003,0105,0805,0507,2809,-3103,-0707,-2909';
$omezeni['8343_1'] = '6,3003,0105,0805,0507,2809,-3103,-0707,-2909';
$omezeni['8347_1'] = 'T,3103,0707,2909,-3003,-0105,-0805,-0507,-2809';
$omezeni['8348_1'] = 'T,3103,0707,2909,-3003,-0105,-0805,-0507,-2809,-1711';
$omezeni['8374_1'] = 'X';
$omezeni['8375_1'] = '25,-2412,-2512,-3112';
$omezeni['8378_1'] = '25,-2412,-2512,-3112';
$omezeni['8387_1'] = 'X';
$omezeni['8409_1'] = 'T';
$omezeni['8412_1'] = 'T';
$omezeni['8413_1'] = 'T';
$omezeni['8416_1'] = 'T';

$trasa['18400_1'] = ['Horní Cerekev;5:04','Tábor;6:39'];
$trasa['18406_1'] = ['Horní Cerekev;10:40','Tábor;12:06'];
$trasa['18409_1'] = ['Tábor;8:09','Horní Cerekev;9:50'];
$trasa['18409_2'] = ['Tábor;8:09','Pelhřimov;9:14'];
$trasa['18410_1'] = ['Pelhřimov;15:23','Tábor;16:23'];
$trasa['18411_1'] = ['Tábor;11:09','Horní Cerekev;13:50'];
$trasa['18413_1'] = ['Tábor;14:07','Horní Cerekev;15:47'];
$trasa['18413_2'] = ['Tábor;14:07','Horní Cerekev;15:47'];
$trasa['18414_1'] = ['Pelhřimov;17:23','Tábor;18:25'];
$trasa['18414_2'] = ['Horní Cerekev;16:58','Tábor;18:25'];
$trasa['18415_1'] = ['Tábor;15:09','Horní Cerekev;16:50'];
$trasa['18416_1'] = ['Horní Cerekev;19:21','Tábor;20:51'];
$trasa['18416_2'] = ['Horní Cerekev;19:26','Tábor;20:51'];
$trasa['18417_1'] = ['Tábor;17:09','Horní Cerekev;18:43'];
$trasa['18419_1'] = ['Tábor;21:09','Horní Cerekev;22:55'];
$trasa['18421_1'] = ['Tábor;4:09','Pelhřimov;5:22'];
$trasa['18422_1'] = ['Pelhřimov;6:20','Tábor;7:25'];
$trasa['18426_1'] = ['Pelhřimov;9:23','Tábor;10:25'];
$trasa['18442_1'] = ['Horní Cerekev;8:27','Pelhřimov;9:14'];
$trasa['18448_1'] = ['Horní Cerekev;14:27','Pelhřimov;14:50'];
$trasa['18450_1'] = ['Horní Cerekev;16:04','Pelhřimov;16:27'];
$trasa['8201_1'] = ['Tábor;4:09','České Budějovice;5:30'];
$trasa['8220_1'] = ['České Budějovice;5:35','Veselí nad Lužnicí;6:23'];
$trasa['8234_1'] = ['Veselí nad Lužnicí;6:59','Tábor;7:33'];
$trasa['8237_1'] = ['Tábor;19:27','Veselí nad Lužnicí;19:59'];
$trasa['8240_1'] = ['Veselí nad Lužnicí;21:29','Tábor;21:59'];
$trasa['8260_1'] = ['Střezimíř;3:27','Heřmaničky;3:38'];
$trasa['8260_2'] = ['Heřmaničky;3:39','Benešov u Prahy;4:05'];
$trasa['8261_1'] = ['Benešov u Prahy;4:08','Tábor;5:11'];
$trasa['8262_1'] = ['Střezimíř;4:34','Benešov u Prahy;5:09'];
$trasa['8264_1'] = ['Tábor;6:05','Benešov u Prahy;7:09'];
$trasa['8264_2'] = ['Tábor;6:05','Benešov u Prahy;7:09'];
$trasa['8265_1'] = ['Benešov u Prahy;6:16','Tábor;7:19'];
$trasa['8266_1'] = ['Tábor;8:05','Benešov u Prahy;9;09'];
$trasa['8267_1'] = ['Benešov u Prahy;7:16','Tábor;8:21'];
$trasa['8267_2'] = ['Benešov u Prahy;7:16','Tábor;8:21'];
$trasa['8268_1'] = ['Tábor;10:05','Benešov u Prahy;11:09'];
$trasa['8268_2'] = ['Tábor;10:05','Benešov u Prahy;11:09'];
$trasa['8270_1'] = ['Tábor;12:05','Benešov u Prahy;13:09'];
$trasa['8271_1'] = ['Benešov u Prahy;10:50','Táboe;11:53'];
$trasa['8272_1'] = ['Tábor;14:05','Benešov u Prahy;15:09'];
$trasa['8272_2'] = ['Tábor;14:05','Benešov u Prahy;15:09'];
$trasa['8273_1'] = ['Benešov u Prahy;12:14','Tábor;13:17'];
$trasa['8273_2'] = ['Benešov u Prahy;12:14','Tábor;13:17'];
$trasa['8275_1'] = ['Benešov u Prahy;14:15','Tábor;15:23'];
$trasa['8279_1'] = ['Benešov u Prahy;16:16','Tábor;17:19'];
$trasa['8279_2'] = ['Benešov u Prahy;16:16','Tábor;17:19'];
$trasa['8280_1'] = ['Tábor;16:05','Benešov u Prahy;17:09'];
$trasa['8282_1'] = ['Tábor;18:05','Benešov u Prahy;18:09'];
$trasa['8282_2'] = ['Tábor;18:05','Benešov u Prahy;18:09'];
$trasa['8285_1'] = ['Benešov u Prahy;18:28','Tábor;19:43'];
$trasa['8286_1'] = ['Tábor;20:05','Benešov U Prahy;21:09'];
$trasa['8287_1'] = ['Benešov u Prahy;20:16','Tábor;21:18'];
$trasa['8287_2'] = ['Benešov u Prahy;20:16','Tábor;21:18'];
$trasa['8289_1'] = ['Benešov u Prahy;22:21','Střezimíř;23:01'];
$trasa['8291_1'] = ['Benešov u Prahy;3:14','Heřmaničky;3:35'];
$trasa['8340_1'] = ['Horní Cerekev;4:36','Kostelec u Jihlavy;4:54'];
$trasa['8342_1'] = ['Kostelec u Jihlavy;4:56','Jihlava;5:16'];
$trasa['8343_1'] = ['Jihlava;5:33','Tábor;7:40'];
$trasa['8347_1'] = ['Jihlava;7:33','Horní Cerekev;8:25'];
$trasa['8348_1'] = ['Horní Cerekev;6:40','Jihlava;7:18'];
$trasa['8374_1'] = ['Počátky-Žirovnice;18:50','Horní Cerekev;19:10'];
$trasa['8375_1'] = ['Jihlava;21:40','Horní Cerekev;22:20'];
$trasa['8378_1'] = ['Tábor;19:09','Jihlava;21:30'];
$trasa['8387_1'] = ['Horní Cerekev;18:15','Počátky-Žirovnice;18:34'];
$trasa['8409_1'] = ['Ražice;13:21','Tábor;14:50'];
$trasa['8412_1'] = ['Tábor;11:08','Ražice;12:36'];
$trasa['8413_1'] = ['Ražice;17:21','Tábor;18:50'];
$trasa['8416_1'] = ['Tábor;15:08','Ražice;16:36'];

$poznamkaObehu['8342_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts843 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


