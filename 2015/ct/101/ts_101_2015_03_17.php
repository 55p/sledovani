<?php

$obeh[1] = array(1860, 101863, 1862, 5605, 1864, 5226, 5207, 5626, 1957, 5165, 101868, 5232, 5160, 5202, 5225, 5607, 5608, 5621, 5600, '1868a');
$obeh[2] = array(1861, 105601, 5614, 934, 925, 946, 931, 940, 957, 924, 953, 5612, 5603, 5604, 5220, 5227, '5617a', 5626, '5617b', '5626b');
$obeh[3] = array(952, 923, 105611, 5618, 5615, 5222, 5205, '5205a', 5206, 5601, 5602, 5605, 5606, 924, 953);
$obeh[4] = array(1861, 5212, 5219, 5201, 5616, 5611, 5204, '5204b', 5231, 5230, 5235, '5621a', 5618, 5615, 5620, 924, 953, 5202, 5225, 5607, 5608, 5621, '5207b', 5626);
$obeh[5] = array(5161, 5160, 5600, 5601, 105600, 101862, 5200, 5217, 5603, 5604, 1957, 5165, 1868, 5232, 1865, 5164, 5624, 950, 945, 928, 935, 922);
$obeh[6] = array(1861, 5212, 5219, 5201, '5201a', 5616, 1955, 5163, 1866, 943, 930, 929, 942);
$obeh[7] = array(921, 948, 927, 944, 951, 5236);
$obeh[8] = array(5213, 1863, 5162, 5202, 5225, 5613, 105615, 5620, 924, 953, 5204, '5204a', 5231, 5230, 5235, 5621, 5612, 932, 931, 940, 957);
$obeh[9] = array(5612, 5601, 105600, 1862, 5161, 5160, 5600, 5200, 5217, 5603, 5604, 1865, 5164, 5624, 1956, 5226, 5207, 1958, 5626, 950, 945, 928, 935, 922);
$obeh[10] = array(5691, 1860, 5603, 5604, 5220, 5227, 5617, 5626, '5617a', 1958, 943, 930, 947, 1867, 5166, '5626a', '1958a');
$obeh[11] = array(5161, 5160, 5600, 105601, 5614, 5212, 5219, '5601a', 105600, 101862, 5200, 5217, 5603, 5604, 934, 925, 926, 949, 920);
$obeh[12] = array(941, 932, 929, 5619, 1868, 931, 940, 957);
$obeh[13] = array(923, 5611, 5622, 105691, 5610, 950, 945, 928, 935, 5601, 1862, 1955, 5163, 1866, 5609, 5015, '5611a', '5622a');
$obeh[14] = array(5043, 5022, 5025, 3781, 3782, 5014);
$obeh[15] = array(5001, 5024, 1270, 1269, 1264, 1273, 5029, 5048, 5023, 5022, 8660, 5011, '5011a', 5030, 5031, 5051);
$obeh[16] = array(99999, 950, 945);

foreach ($obeh as $den => $vlaky) {
  foreach ($vlaky as $jedenVlak) {
    $obehAuto[$den][] = $jedenVlak.'_'.$den; 
  }
}

unset($obeh);

$omezeni['1860_1'] = '19_ct_2015';
$omezeni['101863_1'] = '18_ct_2015';
$omezeni['1862_1'] = '18_ct_2015';
$omezeni['5605_1'] = 'X';
$omezeni['1864_1'] = 'X';
$omezeni['5226_1'] = '71_ct_2015';
$omezeni['5207_1'] = '71_ct_2015';
$omezeni['5626_1'] = '71_ct_2015';
$omezeni['1957_1'] = '72_ct_2015';
$omezeni['5165_1'] = '72_ct_2015';
$omezeni['101868_1'] = '73_ct_2015';
$omezeni['5232_1'] = '72_ct_2015';
$omezeni['5160_1'] = '31_ct_2015';
$omezeni['5202_1'] = '32_ct_2015';
$omezeni['5225_1'] = '32_ct_2015';
$omezeni['5607_1'] = '32_ct_2015';
$omezeni['5608_1'] = '33_ct_2015';
$omezeni['5621_1'] = '33_ct_2015';
$omezeni['5600_1'] = '80_ct_2015';
$omezeni['1868a_1'] = '80_ct_2015';

$omezeni['1861_2'] = '80_ct_2015';
$omezeni['105601_2'] = '19_ct_2015';
$omezeni['5614_2'] = '19_ct_2015';
$omezeni['934_2'] = 'X';
$omezeni['925_2'] = 'X';
$omezeni['946_2'] = '19_ct_2015';
$omezeni['931_2'] = '19_ct_2015';
$omezeni['940_2'] = '19_ct_2015';
$omezeni['957_2'] = '19_ct_2015';
$omezeni['924_2'] = '80_ct_2015';
$omezeni['953_2'] = '81_ct_2015';
$omezeni['5612_2'] = '41_ct_2015';
$omezeni['5603_2'] = '42_ct_2015';
$omezeni['5604_2'] = '42_ct_2015';
$omezeni['5220_2'] = '42_ct_2015';
$omezeni['5227_2'] = '42_ct_2015';
$omezeni['5617a_2'] = '43_ct_2015';
$omezeni['5626_2'] = '43_ct_2015';
$omezeni['5617b_2'] = '91_ct_2015';
$omezeni['5626b_2'] = '91_ct_2015';

$omezeni['952_3'] = '23';
$omezeni['923_3'] = 'X';
$omezeni['5222_3'] = '18_ct_2015_ne_vyluka';
$omezeni['5205_3'] = '18_ct_2015_ne_vyluka';

$omezeni['105611_3'] = 'X_vyluka_TO_neprazdniny';
$omezeni['5618_3'] = 'X_vyluka_TO_neprazdniny';
$omezeni['5615_3'] = 'X_vyluka_TO';

$omezeni['5205a_3'] = 'X_18_ct_2015_ne_vyluka';
$omezeni['5206_3'] = 'X';
$omezeni['5601_3'] = '97_ct_2015';
$omezeni['5602_3'] = '25';
$omezeni['5605_3'] = '25';
$omezeni['5606_3'] = '25';
$omezeni['924_3'] = '25';
$omezeni['953_3'] = '36';

$omezeni['1861_4'] = '51_ct_2015';
$omezeni['5212_4'] = '51_ct_2015';
$omezeni['5219_4'] = '51_ct_2015';
$omezeni['5201_4'] = '61_ct_2015';
$omezeni['5616_4'] = '61_ct_2015';
$omezeni['5611_4'] = 'X_ne_cervenec_2015';
$omezeni['5618_4'] = 'X_ne_vyluka_TO';
$omezeni['5615_4'] = 'X_ne_vyluka_TO';

$omezeni['5204_4'] = 'X_vyluka_TO_neprazdniny';
$omezeni['5204b_4'] = 'X_vyluka_TO_prazdniny';
$omezeni['5231_4'] = 'X_vyluka_TO';
$omezeni['5230_4'] = 'X_vyluka_TO';
$omezeni['5235_4'] = 'X_vyluka_TO';
$omezeni['5621a_4'] = 'X_vyluka_TO';

$omezeni['5620_4'] = 'X_ne_vyluka_TO';
$omezeni['924_4'] = '19_ct_2015_ne_vyluka';
$omezeni['953_4'] = '19_ct_2015_ne_vyluka';
$omezeni['5202_4'] = '42_ct_2015';
$omezeni['5225_4'] = '42_ct_2015';
$omezeni['5607_4'] = '42_ct_2015';
$omezeni['5608_4'] = '42_ct_2015';
$omezeni['5621_4'] = '42_ct_2015';
$omezeni['5207b_4'] = '81_ct_2015';
$omezeni['5626_4'] = '81_ct_2015';

$omezeni['5601_5'] = '62_ct_2015_ne_vyluka';
$omezeni['105600_5'] = '63_ct_2015_ne_vyluka';
$omezeni['5161_5'] = '62_ct_2015_vyluka';
$omezeni['5160_5'] = '62_ct_2015_vyluka';
$omezeni['5600_5'] = '62_ct_2015_vyluka';

$omezeni['101862_5'] = '64_ct_2015';
$omezeni['5200_5'] = '51_ct_2015';
$omezeni['5217_5'] = '51_ct_2015';
$omezeni['5603_5'] = '51_ct_2015';
$omezeni['5604_5'] = '51_ct_2015';
$omezeni['1957_5'] = '71_ct_2015';
$omezeni['5165_5'] = '71_ct_2015';
$omezeni['1868_5'] = '71_ct_2015';
$omezeni['5232_5'] = '71_ct_2015';
$omezeni['1865_5'] = '73_ct_2015';
$omezeni['5164_5'] = '73_ct_2015';
$omezeni['5624_5'] = '73_ct_2015';
$omezeni['950_5'] = '80_ct_2015';
$omezeni['945_5'] = '80_ct_2015';
$omezeni['928_5'] = '80_ct_2015';
$omezeni['935_5'] = '80_ct_2015';
$omezeni['922_5'] = '72_ct_2015';

$omezeni['1861_6'] = '62_ct_2015';
$omezeni['5212_6'] = '62_ct_2015';
$omezeni['5219_6'] = '62_ct_2015';
$omezeni['5201_6'] = '51_ct_2015_ne_vyluka';
$omezeni['5201a_6'] = '51_ct_2015_vyluka';
$omezeni['5616_6'] = '51_ct_2015_ne_vyluka';
$omezeni['1955_6'] = '19_ct_2015';
$omezeni['5163_6'] = '19_ct_2015';
$omezeni['1866_6'] = '19_ct_2015';
$omezeni['943_6'] = '82_ct_2015';
$omezeni['930_6'] = '82_ct_2015';
$omezeni['929_6'] = '82_ct_2015';
$omezeni['942_6'] = '';

$omezeni['921_7'] = '';
$omezeni['948_7'] = '';
$omezeni['927_7'] = '';
$omezeni['944_7'] = '';
$omezeni['951_7'] = '16';
$omezeni['5236_7'] = '75_ct_2015';

$omezeni['5612_8'] = '96_ct_2015_vyluka';
$omezeni['5213_8'] = 'X';
$omezeni['1863_8'] = 'X';
$omezeni['5162_8'] = 'X';
$omezeni['5202_8'] = 'X';
$omezeni['5225_8'] = 'X';
$omezeni['5613_8'] = '18_ct_2015';
$omezeni['105615_8'] = 'X_cervenec_2015';
$omezeni['5620_8'] = 'X_vyluka_TO';
$omezeni['924_8'] = 'X_vyluka_TO';
$omezeni['953_8'] = 'X_vyluka_TO';

$omezeni['5204_8'] = '18_ct_2015_ne_vyluka';
$omezeni['5204a_8'] = 'X_18_ct_2015_ne_vyluka';
$omezeni['5231_8'] = 'X_ne_vyluka_TO';
$omezeni['5230_8'] = '19_ct_2015_ne_vyluka';
$omezeni['5235_8'] = '19_ct_2015_ne_vyluka';
$omezeni['5621_8'] = 'X_ne_vyluka_TO';
$omezeni['5612_8'] = '96_ct_2015_ne_vyluka';
$omezeni['932_8'] = '25';
$omezeni['931_8'] = '25';
$omezeni['940_8'] = '36';
$omezeni['957_8'] = '36';


$omezeni['5601_9'] = 'X_vyluka_TO';
$omezeni['105600_9'] = 'X_vyluka_TO_neprazdniny';
$omezeni['1862_9'] = 'X_vyluka_TO_prazdniny';

$omezeni['5691_9'] = '51_ct_2015';
$omezeni['5161_9'] = '19_ct_2015_ne_vyluka';
$omezeni['5160_9'] = '19_ct_2015_ne_vyluka';
$omezeni['5600_9'] = '19_ct_2015_ne_vyluka';
$omezeni['5200_9'] = '80_ct_2015';
$omezeni['5217_9'] = '80_ct_2015';
$omezeni['5603_9'] = '80_ct_2015';
$omezeni['5604_9'] = '80_ct_2015';
$omezeni['1865_9'] = '76_ct_2015';
$omezeni['5164_9'] = '76_ct_2015';
$omezeni['5624_9'] = '76_ct_2015';
$omezeni['1956_9'] = '92_ct_2015';
$omezeni['5226_9'] = '73_ct_2015';
$omezeni['5207_9'] = '73_ct_2015';
$omezeni['1958_9'] = '73_ct_2015_ne_vyluka';
$omezeni['5626_9'] = '73_ct_2015_vyluka';

$omezeni['5612_9'] = '96_ct_2015_vyluka';
$omezeni['950_9'] = '25_ne_sobota_vyluka_TO';
$omezeni['945_9'] = '25_ne_sobota_vyluka_TO';
$omezeni['928_9'] = '25';
$omezeni['935_9'] = '25';
$omezeni['922_9'] = '77_ct_2015';

$omezeni['5691_10'] = '93_ct_2015';
$omezeni['1860_10'] = '80_ct_2015';
$omezeni['5603_10'] = '32_ct_2015';
$omezeni['5604_10'] = '32_ct_2015';
$omezeni['5220_10'] = '32_ct_2015';
$omezeni['5227_10'] = '32_ct_2015';
$omezeni['5617_10'] = '33_ct_2015';
$omezeni['5626_10'] = '33_ct_2015';
$omezeni['5617a_10'] = '_16';
$omezeni['1958_10'] = '94_ct_2015';
$omezeni['943_10'] = '19_ct_2015';
$omezeni['930_10'] = '19_ct_2015';
$omezeni['947_10'] = '19_ct_2015';
$omezeni['1867_10'] = 'X';
$omezeni['5166_10'] = 'X';
$omezeni['1958a_10'] = '73_ct_2015_vyluka';
$omezeni['5626a_10'] = '73_ct_2015_ne_vyluka';

$omezeni['5161_11'] = '51_ct_2015_vyluka';
$omezeni['5160_11'] = '51_ct_2015_vyluka';
$omezeni['5600_11'] = '51_ct_2015_vyluka';
$omezeni['105601_11'] = '93_ct_2015';
$omezeni['5614_11'] = '80_ct_2015';
$omezeni['5212_11'] = '80_ct_2015';
$omezeni['5219_11'] = '80_ct_2015';
$omezeni['5601a_11'] = '51_ct_2015_ne_vyluka';
$omezeni['105600_11'] = '52_ct_2015_ne_vyluka';
$omezeni['101862_11'] = '53_ct_2015_ne_vyluka';
$omezeni['5200_11'] = '62_ct_2015';
$omezeni['5217_11'] = '62_ct_2015';
$omezeni['5603_11'] = '62_ct_2015';
$omezeni['5604_11'] = '62_ct_2015';
$omezeni['934_11'] = '25';
$omezeni['925_11'] = '25';
$omezeni['926_11'] = '';
$omezeni['949_11'] = '';
$omezeni['920_11'] = '10';

$omezeni['941_12'] = '23';
$omezeni['932_12'] = 'X';
$omezeni['929_12'] = '19_ct_2015';
$omezeni['5619_12'] = '19_ct_2015';
$omezeni['1868_12'] = '73_ct_2015';
$omezeni['931_12'] = '80_ct_2015';
$omezeni['940_12'] = '81_ct_2015';
$omezeni['957_12'] = '81_ct_2015';

$omezeni['923_13'] = '25';
$omezeni['5611_13'] = '37_ct_2015';
$omezeni['5622_13'] = '37_ct_2015';
$omezeni['105691_13'] = '51_ct_2015';
$omezeni['5610_13'] = '19_ct_2015';
$omezeni['950_13'] = '19_ct_2015';
$omezeni['945_13'] = '19_ct_2015';
$omezeni['928_13'] = '19_ct_2015';
$omezeni['935_13'] = '19_ct_2015';
$omezeni['5609_13'] = '16';
$omezeni['5015_13'] = '78_ct_2015';
$omezeni['5601_13'] = '80_ct_2015';
$omezeni['1862_13'] = '80_ct_2015';
$omezeni['1955_13'] = '80_ct_2015';
$omezeni['5163_13'] = '80_ct_2015';
$omezeni['1866_13'] = '80_ct_2015';
$omezeni['5611a_13'] = '95_ct_2015';
$omezeni['5622a_13'] = '95_ct_2015';

$omezeni['5043_14'] = 'X';
$omezeni['5022_14'] = 'X';
$omezeni['5025_14'] = 'X';
$omezeni['3781_14'] = 'X';
$omezeni['3782_14'] = 'X';
$omezeni['5014_14'] = 'X';

$omezeni['5001_15'] = 'X';
$omezeni['5024_15'] = 'X';
$omezeni['1270_15'] = '21_ct_2015';
$omezeni['1269_15'] = '21_ct_2015';
$omezeni['1264_15'] = '21_ct_2015';
$omezeni['1273_15'] = '21_ct_2015';
$omezeni['5029_15'] = '23';
$omezeni['5048_15'] = '23';
$omezeni['5023_15'] = '43_ct_2015';
$omezeni['5022_15'] = '32_ct_2015';
$omezeni['8660_15'] = '_23';
$omezeni['5011_15'] = '_23';
$omezeni['5011a_15'] = '_16';
$omezeni['5030_15'] = '44_ct_2015';
$omezeni['5031_15'] = '44_ct_2015';
$omezeni['5051_15'] = '34_ct_2015';

$omezeni['99999_16'] = 'vylukaTO';
$omezeni['950_16'] = '6_vyluka_TO';
$omezeni['945_16'] = '6_vyluka_TO';


$trasa[920] = array('Hradec Králové hl.n.;20:08', 'Praha hl.n.;21:45');
$trasa[921] = array('Praha hl.n.;6:11', 'Hradec Králové hl.n.;7:51');
$trasa[922] = array('Hradec Králové hl.n.;18:08', 'Praha hl.n.;19:45');
$trasa[923] = array('Praha hl.n.;8:11', 'Hradec Králové hl.n.;9:51');
$trasa[924] = array('Hradec Králové hl.n.;16:08', 'Praha hl.n.;17:45');
$trasa[925] = array('Praha hl.n.;10:11', 'Hradec Králové hl.n.;11:51');
$trasa[926] = array('Hradec Králové hl.n.;14:08', 'Praha hl.n.;15:45');
$trasa[927] = array('Praha hl.n.;12:11', 'Hradec Králové hl.n.;13:51');
$trasa[928] = array('Hradec Králové hl.n.;12:08', 'Praha hl.n.;13:45');
$trasa[929] = array('Praha hl.n.;14:11', 'Hradec Králové hl.n.;15:51');
$trasa[930] = array('Hradec Králové hl.n.;10:08', 'Praha hl.n.;11:45');
$trasa[931] = array('Praha hl.n.;16:11', 'Hradec Králové hl.n.;17:51');
$trasa[932] = array('Hradec Králové hl.n.;8:08', 'Praha hl.n.;9:45');
$trasa[934] = array('Hradec Králové hl.n.;7:08', 'Praha hl.n.;8:45');
$trasa[935] = array('Praha hl.n.;15:11', 'Hradec Králové hl.n.;16:51');

$trasa[940] = array('Hradec Králové hl.n.;19:08', 'Praha hl.n.;20:45');
$trasa[941] = array('Praha hl.n.;5:11', 'Hradec Králové hl.n.;6:51');
$trasa[942] = array('Hradec Králové hl.n.;17:08', 'Praha hl.n.;18:45');
$trasa[943] = array('Praha hl.n.;7:11', 'Hradec Králové hl.n.;8:51');
$trasa[944] = array('Hradec Králové hl.n.;15:08', 'Praha hl.n.;16:45');
$trasa[945] = array('Praha hl.n.;9:11', 'Hradec Králové hl.n.;10:51');
$trasa[946] = array('Hradec Králové hl.n.;13:08', 'Praha hl.n.;14:45');
$trasa[947] = array('Praha hl.n.;13:11', 'Hradec Králové hl.n.;14:51');
$trasa[948] = array('Hradec Králové hl.n.;9:08', 'Praha hl.n.;10:45');
$trasa[949] = array('Praha hl.n.;17:11', 'Hradec Králové hl.n.;18:51');
$trasa[950] = array('Hradec Králové hl.n.;6:08', 'Praha hl.n.;7:45');
$trasa[951] = array('Praha hl.n.;18:11', 'Hradec Králové hl.n.;19:51');
$trasa[952] = array('Hradec Králové hl.n.;5:08', 'Praha hl.n.;6:45');
$trasa[953] = array('Praha hl.n.;19:11', 'Hradec Králové hl.n.;20:51');
$trasa[957] = array('Praha hl.n.;22:11', 'Hradec Králové hl.n.;23:48');

$trasa[1264] = array('Pardubice hl.n.;17:00', 'Jaroměř;17:39');
$trasa[1269] = array('Hradec Králové hl.n.;14:38', 'Pardubice hl.n.;15:00');
$trasa[1270] = array('Pardubice hl.n.;11:00', 'Hradec Králové hl.n.;11:22');
$trasa[1273] = array('Jaroměř;18:19', 'Pardubice hl.n.;19:00');

$trasa[1860] = array('Choceň;5:02', 'Hradec Králové hl.n.;5:53');
$trasa['1860_10'] = array('Týniště nad Orlicí;5:33', 'Hradec Králové hl.n.;5:53');
$trasa[1861] = array('Chlumec nad Cidlinou;5:30', 'Hradec Králové hl.n.;5:58');
$trasa[1862] = array('Choceň;6:58', 'Hradec Králové hl.n.;7:54');
$trasa[1863] = array('Hradec Králové hl.n.;6:02', 'Choceň;6:54');
$trasa[1864] = array('Choceň;12:57', 'Hradec Králové hl.n.;13:59');
$trasa[1865] = array('Hradec Králové hl.n.;14:02', 'Choceň;15:01');
$trasa[1866] = array('Choceň;15:01', 'Hradec Králové hl.n.;15:59');
$trasa[1867] = array('Hradec Králové hl.n.;16:02', 'Choceň;16:56');
$trasa[1868] = array('Choceň;16:57', 'Hradec Králové hl.n.;17:59');
$trasa['1868_12'] = array('Týniště nad Orlicí;17:37', 'Hradec Králové hl.n.;17:59');

$trasa[1955] = array('Hradec Králové hl.n.;13:05', 'Týniště nad Orlicí;13:28');
$trasa[1956] = array('Týniště nad Orlicí;16:31', 'Hradec Králové hl.n.;16:53');
$trasa[1957] = array('Hradec Králové hl.n.;15:05', 'Týniště nad Orlicí;15:28');
$trasa[1958] = array('Týniště nad Orlicí;18:31', 'Hradec Králové hl.n.;18:53');

$trasa[3781] = array('Česká Třebová;14:25', 'Zábřeh na Moravě;14:59');
$trasa[3782] = array('Zábřeh na Moravě;15:28', 'Česká Třebová;16:05');
$trasa[5001] = array('Kolín;5:10', 'Česká Třebová;7:32');
$trasa[5011] = array('Kolín;15:46', 'Česká Třebová;17:55');
$trasa['5011a_15'] = array('Pardubice;16:46', 'Česká Třebová;17:55');
$trasa[5014] = array('Česká Třebová;17:05', 'Kolín;19:17');
$trasa[5015] = array('Choceň;19:28', 'Česká Třebová;19:55');
$trasa[5022] = array('Česká Třebová;6:56', 'Pardubice hl.n.;8:19');
$trasa[5023] = array('Choceň;5:05', 'Česká Třebová;5:32');
$trasa[5024] = array('Česká Třebová;8:05', 'Pardubice hl.n.;9:19');
$trasa[5025] = array('Pardubice hl.n.;8:46', 'Česká Třebová;9:55');
$trasa[5029] = array('Pardubice hl.n.;20:46', 'Česká Třebová;21:55');
$trasa[5030] = array('Česká Třebová;19:05', 'Pardubice hl.n.;20:11');
$trasa[5031] = array('Pardubice hl.n.;21:10', 'Choceň;21:37');
$trasa[5043] = array('Choceň;5:35', 'Česká Třebová;6:02');
$trasa[5048] = array('Česká Třebová;22:29', 'Choceň;22:55');
$trasa[5051] = array('Pardubice hl.n.;22:49', 'Choceň;23:32');
$trasa[5160] = array('Choceň;5:59', 'Týniště nad Orlicí;6:25');
$trasa[5161] = array('Týniště nad Orlicí;4:30', 'Choceň;4:55');
$trasa[5162] = array('Choceň;7:56', 'Týniště nad Orlicí;8:22');
$trasa[5163] = array('Týniště nad Orlicí;13:34', 'Choceň;13:59');
$trasa[5164] = array('Choceň;15:58', 'Týniště nad Orlicí;16:23');
$trasa[5165] = array('Týniště nad Orlicí;15:33', 'Choceň;15:58');
$trasa[5166] = array('Choceň;17:54', 'Týniště nad Orlicí;18:20');
$trasa[5200] = array('Týniště nad Orlicí;5:08', 'Chlumec nad Cidlinou;6:22');

$trasa['5201a_6'] = array('Chlumec nad Cidlinou;5:50', 'Hradec Králové hl.n.;6:24');
$trasa[5201] = array('Chlumec nad Cidlinou;5:50', 'Týniště nad Orlicí;7:05');
$trasa[5202] = array('Týniště nad Orlicí;10:33', 'Chlumec nad Cidlinou;11:28');
$trasa['5202_4'] = array('Hradec Králové hl.n.;11:02', 'Chlumec nad Cidlinou;11:28');

$trasa[5204] = array('Týniště nad Orlicí;14:28', 'Chlumec nad Cidlinou;15:08');
$trasa['5204b_4'] = $trasa['5204a_8'] = array('Hradec Králové hl.n.;14:35', 'Chlumec nad Cidlinou;15:08');
$trasa[5205] = array('Chlumec nad Cidlinou;14:50', 'Týniště nad Orlicí;15:54');
$trasa['5205a_3'] = array('Hradec Králové hl.n.;15:29', 'Týniště nad Orlicí;15:54');

$trasa[5206] = array('Týniště nad Orlicí;16:08', 'Chlumec nad Cidlinou;17:08');
$trasa[5207] = array('Chlumec nad Cidlinou;16:50', 'Týniště nad Orlicí;17:54');
$trasa[5212] = array('Hradec Králové hl.n.;6:35', 'Chlumec nad Cidlinou;7:08');
$trasa[5213] = array('Chlumec nad Cidlinou;4:50', 'Hradec Králové hl.n.;5:26');
$trasa[5217] = array('Chlumec nad Cidlinou;6:50', 'Hradec Králové hl.n.;7:25');
$trasa[5219] = array('Chlumec nad Cidlinou;8:00', 'Hradec Králové hl.n.;8:34');
$trasa[5220] = array('Hradec Králové hl.n.;13:02', 'Chlumec nad Cidlinou;13:28');
$trasa[5222] = array('Hradec Králové hl.n.;13:34', 'Chlumec nad Cidlinou;14:08');
$trasa[5225] = array('Chlumec nad Cidlinou;12:30', 'Hradec Králové hl.n.;12:57');
$trasa[5226] = array('Hradec Králové hl.n.;15:34', 'Chlumec nad Cidlinou;16:08');
$trasa[5227] = array('Chlumec nad Cidlinou;14:30', 'Hradec Králové hl.n.;14:57');
$trasa[5230] = array('Hradec Králové hl.n.;17:34', 'Chlumec nad Cidlinou;18:08');
$trasa[5231] = array('Chlumec nad Cidlinou;15:50', 'Hradec Králové hl.n.;16:25');
$trasa[5232] = array('Hradec Králové hl.n.;18:34', 'Chlumec nad Cidlinou;19:08');
$trasa[5235] = array('Chlumec nad Cidlinou;18:50', 'Hradec Králové hl.n.;19:26');
$trasa[5236] = array('Hradec Králové hl.n.;21:04', 'Chlumec nad Cidlinou;21:39');

$trasa[5600] = array('Choceň;6:29', 'Hradec Králové hl.n.;7:36');
$trasa['5600_1'] = $trasa['5600_11'] = array('Týniště nad Orlicí;7:09', 'Hradec Králové hl.n.;7:36');
$trasa['5600_9'] = array('Týniště nad Orlicí;7:09', 'Hradec Králové hl.n.;7:36');
$trasa[5601] = array('Hradec Králové hl.n.;5:03', 'Choceň;5:59');
$trasa[105601] = array('Hradec Králové hl.n.;5:03', 'Týniště nad Orlicí;5:26');
$trasa[5602] = array('Choceň;7:02', 'Hradec Králové hl.n.;7:58');
$trasa[5603] = array('Hradec Králové hl.n.;8:03', 'Choceň;9:02');
$trasa[5604] = array('Choceň;11:00', 'Hradec Králové hl.n.;11:57');
$trasa[5605] = array('Hradec Králové hl.n.;10:03', 'Choceň;10:59');
$trasa[5606] = array('Choceň;12:57', 'Hradec Králové hl.n.;13:57');
$trasa[5607] = array('Hradec Králové hl.n.;14:03', 'Choceň;15:02');
$trasa[5608] = array('Choceň;16:57', 'Hradec Králové hl.n.;17:57');
$trasa[5609] = array('Hradec Králové hl.n.;18:03', 'Choceň;19:01');
$trasa[5610] = array('Týniště nad Orlicí;4:33', 'Hradec Králové hl.n.;5:00');
$trasa[5611] = array('Hradec Králové hl.n.;12:03', 'Týniště nad Orlicí;12:26');
$trasa['5611_13'] = array('Hradec Králové hl.n.;12:03', 'Borohrádek;12:42');
$trasa[5612] = array('Týniště nad Orlicí;5:33', 'Hradec Králové hl.n.;5:56');
$trasa[5613] = array('Hradec Králové hl.n.;13:29', 'Týniště nad Orlicí;13:54');
$trasa[5614] = array('Týniště nad Orlicí;6:05', 'Hradec Králové hl.n.;6:31');
$trasa[5615] = array('Hradec Králové hl.n.;14:19', 'Týniště nad Orlicí;14:49');
$trasa[5616] = array('Týniště nad Orlicí;8:08', 'Hradec Králové hl.n.;8:34');
$trasa['5617a_10'] = $trasa['5617b_2'] = array('Hradec Králové hl.n.;16:03', 'Týniště nad Orlicí;16:26');
$trasa[5617] = array('Hradec Králové hl.n.;16:03', 'Borohrádek;16:40');
$trasa[5618] = array('Týniště nad Orlicí;13:09', 'Hradec Králové hl.n.;13:43');
$trasa[5619] = array('Hradec Králové hl.n.;16:19', 'Týniště nad Orlicí;16:49');
$trasa[5620] = array('Týniště nad Orlicí;15:09', 'Hradec Králové hl.n.;15:43');
$trasa[5621] = array('Hradec Králové hl.n.;20:03', 'Týniště nad Orlicí;20:26');
$trasa[5622] = array('Týniště nad Orlicí;15:33', 'Hradec Králové hl.n.;15:57');
$trasa['5622_13'] = array('Borohrádek;15:18', 'Hradec Králové hl.n.;15:57');
$trasa[5624] = array('Týniště nad Orlicí;17:09', 'Hradec Králové hl.n.;17:43');
$trasa[5626] = array('Borohrádek;19:16', 'Hradec Králové hl.n.;19:56');
$trasa['5626a_10'] = $trasa['5626_4'] = $trasa['5626b_2'] = $trasa['5626_9'] = array('Týniště nad Orlicí;19:32', 'Hradec Králové hl.n.;19:56');

$trasa[5691] = array('Hradec Králové hl.n.;4:00', 'Týniště nad Orlicí;4:17');
$trasa[8660] = array('Pardubice hl.n.;14:34', 'Kolín;15:17');

$typ['920'] = 'R';
$typ['921'] = 'R';
$typ['922'] = 'R';
$typ['923'] = 'R';
$typ['924'] = 'R';
$typ['925'] = 'R';
$typ['926'] = 'R';
$typ['927'] = 'R';
$typ['928'] = 'R';
$typ['929'] = 'R';
$typ['930'] = 'R';
$typ['931'] = 'R';
$typ['932'] = 'R';
$typ['934'] = 'R';
$typ['935'] = 'R';
$typ['940'] = 'R';
$typ['941'] = 'R';
$typ['942'] = 'R';
$typ['943'] = 'R';
$typ['944'] = 'R';
$typ['945'] = 'R';
$typ['946'] = 'R';
$typ['947'] = 'R';
$typ['948'] = 'R';
$typ['949'] = 'R';
$typ['950'] = 'R';
$typ['951'] = 'R';
$typ['952'] = 'R';
$typ['953'] = 'R';
$typ['957'] = 'R';
$typ['1264'] = 'R';
$typ['1269'] = 'R';
$typ['1270'] = 'R';
$typ['1273'] = 'R';
$typ['1860'] = 'Sp';
$typ['1861'] = 'Sp';
$typ['1862'] = 'Sp';
$typ['1863'] = 'Sp';
$typ['1864'] = 'Sp';
$typ['1865'] = 'Sp';
$typ['1866'] = 'Sp';
$typ['1867'] = 'Sp';
$typ['1868'] = 'Sp';
$typ['1955'] = 'Sp';
$typ['1956'] = 'Sp';
$typ['1957'] = 'Sp';
$typ['1958'] = 'Sp';

for ($i = 1780; $i < 1796; $i++) {
  $typ[$i] = 'Sp';
}

$typ[-1] = 'Os';
$typ[5691] = 'Sv';

$trasa[99999] = array('výluková lok. v HK;0:00;23:59');
$typ[99999] = '';
/*
//GVD 2014
//prvni pro kratky vypis, druhy pro 'title '
$poznamkaObehu['101863_1'] = array('pk', 'postrk');
$poznamkaObehu['1863'] = array('vl', '');
*/
$poznamkaObehu['1957'] = array('vlož.', 'vložená'); //1957_1
$poznamkaObehu['1955'] = array('vlož.', 'vložená'); //1955_6
$poznamkaObehu['101868'] = array('vlož.', 'vložená Týniště n/O - Hradec'); //101868_1
$poznamkaObehu['105600'] = array('vlož.', 'vložená Týniště n/O - Hradec'); //105600_5
$poznamkaObehu['101863'] = array('pk', 'postrk'); 
$poznamkaObehu['105611'] = array('pk', 'postrk'); 
$poznamkaObehu['105615'] = array('pk', 'postrk'); 
$poznamkaObehu[99999] = array('', 'výluková lokomotiva v Hradci Králové'); 
$poznamkaObehu['1264'] = $poznamkaObehu['1270'] = $poznamkaObehu['105601'] = array('pk', 'postrk'); //105601

$poznamkaObehu[920] = $poznamkaObehu[921] = array('', 'Krakonoš');
$poznamkaObehu[922] = $poznamkaObehu[923] = array('', 'Metuje'); 
$poznamkaObehu[924] = $poznamkaObehu[925] = array('', 'Cidlina');
$poznamkaObehu[926] = $poznamkaObehu[927] = array('', 'Rozkoš');
$poznamkaObehu[928] = $poznamkaObehu[929] = array('', 'Sněžka');
$poznamkaObehu[930] = $poznamkaObehu[931] = array('', 'Úpa');
$poznamkaObehu[934] = $poznamkaObehu[935] = array('', 'Kyšperk');
$poznamkaObehu[948] = $poznamkaObehu[949] = array('', 'Bohumil Hrabal');


$ts101->obeh(new Obeh($obehAuto, $trasa, $omezeni, $typ, $poznamkaObehu, null, '22.6.2015 23:59:59'))
      ->obeh(new Obeh($obehAuto, $trasa, $omezeni, $typ, $poznamkaObehu, '15.8.2015', null && '22.12.2015 23:59:59'));

unset($obehAuto);
unset($omezeni);
unset($trasa);

?>