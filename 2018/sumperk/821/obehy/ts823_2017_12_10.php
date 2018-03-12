<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3600_1', '3650_1', '13001_1', '13000_1', '3653_1', '3654_1', '3657_1', '3658_1', '3611_1', '13021_1', '3614_1', '13020_1', '13023_1', '13022_1', '21953_1', '3655_1'];
$obeh[2] = ['13650_1', '13651_1', '13652_1', '13653_1', '13654_1', '13655_1', '13656_1', '13657_1', '13658_1', '13659_1', '13660_1', '13661_1', '13662_1', '13663_1', '13664_1', '13667_1', '13666_1', '13669_1', '13668_1', '13671_1', '13670_1', '13673_1', '13672_1', '13675_1', '13674_1', '13677_1', '13676_1', '13679_1', '13681_1', '13678_1', '13683_1'];

$omezeni['3600_1'] = '25';
$omezeni['3611_1'] = 'X';
$omezeni['3614_1'] = 'X';
$omezeni['3650_1'] = 'X';
$omezeni['3653_1'] = '25';
$omezeni['3654_1'] = '25';
$omezeni['13000_1'] = '25';
$omezeni['13001_1'] = '25';
$omezeni['13020_1'] = '7';
$omezeni['13021_1'] = '7';
$omezeni['13022_1'] = '25';
$omezeni['13023_1'] = '25';
$omezeni['13650_1'] = 'X';
$omezeni['13651_1'] = 'X';
$omezeni['13654_1'] = 'X';
$omezeni['13655_1'] = 'X';
$omezeni['13659_1'] = 'X';
$omezeni['13660_1'] = 'X';
$omezeni['13668_1'] = 'X';
$omezeni['13669_1'] = 'X';
$omezeni['13672_1'] = 'X';
$omezeni['13673_1'] = 'X';
$omezeni['13676_1'] = 'X';
$omezeni['13677_1'] = 'X';
$omezeni['13679_1'] = '25';
$omezeni['13681_1'] = 'X';

$trasa['21953_1'] = ['Šumperk;22:08','Zábřeh na Moravě;22:20'];
$trasa['13000_1'] = ['Zábřeh na Moravě;5:46', 'Šumperk;6:04'];
$trasa['13001_1'] = ['Šumperk;5:16', 'Zábřeh na Moravě;5:35'];
$trasa['13020_1'] = ['Zábřeh na Moravě;18:26', 'Šumperk;18:44'];
$trasa['13021_1'] = ['Šumperk;16:50', 'Zábřeh na Moravě;17:07'];
$trasa['13022_1'] = ['Zábřeh na Moravě;20:54', 'Šumperk;21:14'];
$trasa['13023_1'] = ['Šumperk;18:51', 'Zábřeh na Moravě;19:07'];
$trasa['13650_1'] = ['Hanušovice;4:05', 'Staré Město p.Sněžníkem;4:24'];
$trasa['13651_1'] = ['Staré Město p.Sněžníkem;4:29', 'Hanušovice;4:50'];
$trasa['13652_1'] = ['Hanušovice;4:55', 'Staré Město p.Sněžníkem;5:14'];
$trasa['13653_1'] = ['Staré Město p.Sněžníkem;5:29', 'Hanušovice;5:50'];
$trasa['13654_1'] = ['Hanušovice;5:58', 'Staré Město p.Sněžníkem;6:17'];
$trasa['13655_1'] = ['Staré Město p.Sněžníkem;6:22', 'Hanušovice;6:43'];
$trasa['13656_1'] = ['Hanušovice;6:55', 'Staré Město p.Sněžníkem;7:14'];
$trasa['13657_1'] = ['Staré Město p.Sněžníkem;7:29', 'Hanušovice;7:50'];
$trasa['13658_1'] = ['Hanušovice;8:04', 'Staré Město p.Sněžníkem;8:23'];
$trasa['13659_1'] = ['Staré Město p.Sněžníkem;8:27', 'Hanušovice;8:48'];
$trasa['13660_1'] = ['Hanušovice;9:14', 'Staré Město p.Sněžníkem;9:33'];
$trasa['13661_1'] = ['Staré Město p.Sněžníkem;9:37', 'Hanušovice;9:58'];
$trasa['13662_1'] = ['Hanušovice;10:05', 'Staré Město p.Sněžníkem;10:24'];
$trasa['13663_1'] = ['Staré Město p.Sněžníkem;11:29', 'Hanušovice;11:50'];
$trasa['13664_1'] = ['Hanušovice;12:05', 'Staré Město p.Sněžníkem;12:24'];
$trasa['13666_1'] = ['Hanušovice;14:05', 'Staré Město p.Sněžníkem;14:24'];
$trasa['13667_1'] = ['Staré Město p.Sněžníkem;13:19', 'Hanušovice;13:40'];
$trasa['13668_1'] = ['Hanušovice;15:05', 'Staré Město p.Sněžníkem;15:24'];
$trasa['13669_1'] = ['Staré Město p.Sněžníkem;14:29', 'Hanušovice;14:50'];
$trasa['13670_1'] = ['Hanušovice;16:05', 'Staré Město p.Sněžníkem;16:24'];
$trasa['13671_1'] = ['Staré Město p.Sněžníkem;15:29', 'Hanušovice;15:50'];
$trasa['13672_1'] = ['Hanušovice;17:05', 'Staré Město p.Sněžníkem;17:24'];
$trasa['13673_1'] = ['Staré Město p.Sněžníkem;16:29', 'Hanušovice;16:50'];
$trasa['13674_1'] = ['Hanušovice;18:05', 'Staré Město p.Sněžníkem;18:24'];
$trasa['13675_1'] = ['Staré Město p.Sněžníkem;17:29', 'Hanušovice;17:50'];
$trasa['13676_1'] = ['Hanušovice;19:15', 'Staré Město p.Sněžníkem;19:34'];
$trasa['13677_1'] = ['Staré Město p.Sněžníkem;18:28', 'Hanušovice;18:49'];
$trasa['13678_1'] = ['Hanušovice;20:05', 'Staré Město p.Sněžníkem;20:24'];
$trasa['13679_1'] = ['Staré Město p.Sněžníkem;19:29', 'Hanušovice;19:50'];
$trasa['13681_1'] = ['Staré Město p.Sněžníkem;19:38', 'Hanušovice;19:59'];
$trasa['13683_1'] = ['Staré Město p.Sněžníkem;21:09', 'Hanušovice;21:30'];
$trasa['3600_1'] = ['Hanušovice;4:26', 'Šumperk;5:07'];
$trasa['3611_1'] = ['Šumperk;14:14', 'Jeseník;16:04'];
$trasa['3614_1'] = ['Jeseník;17:47', 'Šumperk;19:47'];
$trasa['3650_1'] = ['Hanušovice;4:59', 'Šumperk;5:41'];
$trasa['3653_1'] = ['Šumperk;7:09', 'Hanušovice;7:53'];
$trasa['3654_1'] = ['Hanušovice;8:06', 'Šumperk;8:46'];
$trasa['3655_1'] = ['Braine-le-Comte;5:51', 'Leuven;7:18'];
$trasa['3657_1'] = ['Šumperk;11:14', 'Hanušovice;11:53'];
$trasa['3658_1'] = ['Hanušovice;12:06', 'Šumperk;12:43'];
//sem patri stazene trasy




$typ['21953_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts823 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


