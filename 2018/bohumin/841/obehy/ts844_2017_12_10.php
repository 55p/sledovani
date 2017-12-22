<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3001_1', '3020_1', '3021_1', '3022_1', '103023_1', '3023_1', '3024_1', '3025_1', '3002_1', '3002_2', '3003_1', '3003_2', '3028_1', '3027_1', '3030_1', '3031_1', '3032_1', '3033_1', '3034_1', '3035_1', '3036_1', '3037_1', '3038_1', '3039_1', '3040_1', '3041_1', '3042_1', '3043_1', '3004_1', '3005_1', '3006_1'];

$omezeni['103023_1'] = '25';
$omezeni['3001_1'] = 'X';
$omezeni['3002_1'] = 'X';
$omezeni['3002_2'] = '25';
$omezeni['3003_1'] = 'X';
$omezeni['3003_2'] = '25';
$omezeni['3005_1'] = 'X';
$omezeni['3006_1'] = 'X';
$omezeni['3020_1'] = 'X';
$omezeni['3021_1'] = 'X';
$omezeni['3022_1'] = 'X';
$omezeni['3032_1'] = 'X';
$omezeni['3033_1'] = 'X';
$omezeni['3036_1'] = 'X';
$omezeni['3037_1'] = 'X';

$trasa['103023_1'] = ['Bohumín;05:51','Dětmarovice;05:58'];
$trasa['3002_2'] = ['Petrovice u Karviné;07:24','Dětmarovice;07:31'];
$trasa['3003_2'] = ['Dětmarovice;10:13','Petrovice u Karviné;10:20'];
$trasa['3001_1'] = ['Bohumín;4:33', 'Petrovice u Karviné;4:50'];
$trasa['3002_1'] = ['Petrovice u Karviné;7:24', 'Bohumín;7:42'];
$trasa['3003_1'] = ['Bohumín;10:03', 'Petrovice u Karviné;10:20'];
$trasa['3004_1'] = ['Petrovice u Karviné;19:28', 'Bohumín;19:46'];
$trasa['3005_1'] = ['Bohumín;22:43', 'Petrovice u Karviné;23:00'];
$trasa['3006_1'] = ['Petrovice u Karviné;23:05', 'Bohumín;23:23'];
$trasa['3020_1'] = ['Petrovice u Karviné;4:58', 'Dětmarovice;5:05'];
$trasa['3021_1'] = ['Dětmarovice;5:13', 'Petrovice u Karviné;5:20'];
$trasa['3022_1'] = ['Petrovice u Karviné;5:43', 'Dětmarovice;5:50'];
$trasa['3023_1'] = ['Dětmarovice;5:59', 'Petrovice u Karviné;6:06'];
$trasa['3024_1'] = ['Petrovice u Karviné;6:38', 'Dětmarovice;6:45'];
$trasa['3025_1'] = ['Dětmarovice;7:13', 'Petrovice u Karviné;7:20'];
$trasa['3027_1'] = ['Dětmarovice;11:39', 'Petrovice u Karviné;11:46'];
$trasa['3028_1'] = ['Petrovice u Karviné;10:58', 'Dětmarovice;11:05'];
$trasa['3030_1'] = ['Petrovice u Karviné;12:58', 'Dětmarovice;13:05'];
$trasa['3031_1'] = ['Dětmarovice;13:13', 'Petrovice u Karviné;13:20'];
$trasa['3032_1'] = ['Petrovice u Karviné;13:58', 'Dětmarovice;14:05'];
$trasa['3033_1'] = ['Dětmarovice;14:25', 'Petrovice u Karviné;14:32'];
$trasa['3034_1'] = ['Petrovice u Karviné;14:38', 'Dětmarovice;14:45'];
$trasa['3035_1'] = ['Dětmarovice;14:53', 'Petrovice u Karviné;15:00'];
$trasa['3036_1'] = ['Petrovice u Karviné;15:25', 'Dětmarovice;15:32'];
$trasa['3037_1'] = ['Dětmarovice;15:39', 'Petrovice u Karviné;15:46'];
$trasa['3038_1'] = ['Petrovice u Karviné;16:55', 'Dětmarovice;17:02'];
$trasa['3039_1'] = ['Dětmarovice;17:13', 'Petrovice u Karviné;17:20'];
$trasa['3040_1'] = ['Petrovice u Karviné;17:58', 'Dětmarovice;18:05'];
$trasa['3041_1'] = ['Dětmarovice;18:13', 'Petrovice u Karviné;18:20'];
$trasa['3042_1'] = ['Petrovice u Karviné;18:38', 'Dětmarovice;18:45'];
$trasa['3043_1'] = ['Dětmarovice;19:13', 'Petrovice u Karviné;19:20'];


$typ['103023_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts844 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


