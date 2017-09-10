<?php 
$zacatekPlatnosti = '17.9.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['1785_1', '1949_1', '1948_1', '1949_2', '1952_1', '1953_1', '1956_1', '1959_1', '1796_1'];
$obeh[2] = ['7162_1', '7161_1', '20570_1', '1785_2', '1947_1', '1950_1', '1951_1', '1954_1', '1957_1', '1958_1', '1959_2', '1796_2'];

$omezeni['1785_1'] = 'X';
$omezeni['1785_2'] = '25';
$omezeni['1796_1'] = '1,2,4,5,25';
$omezeni['1796_2'] = '3';
$omezeni['1947_1'] = '25';
$omezeni['1948_1'] = '25';
$omezeni['1949_1'] = 'X';
$omezeni['1949_2'] = '25';
$omezeni['1959_1'] = '3';
$omezeni['1959_2'] = '1,2,4,5,25';
$omezeni['20570_1'] = 'X';
$omezeni['7161_1'] = 'X';
$omezeni['7162_1'] = 'X';


$poznamkaObehu['1949_1'] = ['pk', 'postrk'];
$poznamkaObehu['1949_2'] = ['pk', 'postrk'];
$poznamkaObehu['1953_1'] = ['pk', 'postrk'];
$poznamkaObehu['1959_1'] = ['pk', 'postrk'];
$poznamkaObehu['1796_1'] = ['pk', 'postrk'];
$poznamkaObehu['7161_1'] = ['pk', 'postrk'];
$poznamkaObehu['1947_1'] = ['pk', 'postrk'];
$poznamkaObehu['1951_1'] = ['pk', 'postrk'];
$poznamkaObehu['1957_1'] = ['pk', 'postrk'];
$poznamkaObehu['1959_2'] = ['pk', 'postrk'];
$poznamkaObehu['1796_2'] = ['pk', 'postrk'];

$trasa['1785_1'] = ['Trutnov hl.n.;5:42', 'Pardubice hl.n.;7:27'];
$trasa['1785_2'] = ['Trutnov hl.n.;5:42', 'Hradec Králové hl.n.;6:57'];
$trasa['1796_1'] = ['Hradec Králové hl.n.;20:01', 'Trutnov hl.n.;21:18'];
$trasa['1796_2'] = ['Hradec Králové hl.n.;20:01', 'Trutnov hl.n.;21:18'];
$trasa['1947_1'] = ['Hradec Králové hl.n.;7:05', 'Letohrad;8:29'];
$trasa['1948_1'] = ['Letohrad;7:29', 'Hradec Králové hl.n.;8:53'];
$trasa['1949_1'] = ['Pardubice hl.n.;8:36', 'Letohrad;10:27'];
$trasa['1949_2'] = ['Hradec Králové hl.n.;9:05', 'Letohrad;10:27'];
$trasa['1950_1'] = ['Letohrad;8:33', 'Hradec Králové hl.n.;9:53'];
$trasa['1951_1'] = ['Hradec Králové hl.n.;11:05', 'Letohrad;12:31'];
$trasa['1952_1'] = ['Letohrad;11:33', 'Hradec Králové hl.n.;12:53'];
$trasa['1953_1'] = ['Hradec Králové hl.n.;13:05', 'Letohrad;14:31'];
$trasa['1954_1'] = ['Letohrad;13:33', 'Hradec Králové hl.n.;14:53'];
$trasa['1956_1'] = ['Letohrad;15:33', 'Hradec Králové hl.n.;16:53'];
$trasa['1957_1'] = ['Hradec Králové hl.n.;15:06', 'Letohrad;16:31'];
$trasa['1958_1'] = ['Letohrad;17:33', 'Hradec Králové hl.n.;18:53'];
$trasa['1959_1'] = ['Hradec Králové hl.n.;19:05', 'Letohrad;20:28'];
$trasa['1959_2'] = ['Hradec Králové hl.n.;19:05', 'Letohrad;20:28'];
$trasa['20570_1'] = ['Jablonné nad Orlicí;6:21', 'Letohrad;6:31'];
$trasa['7161_1'] = ['Ústí nad Orlicí;5:25', 'Jablonné nad Orlicí;5:55'];
$trasa['7162_1'] = ['Letohrad;4:49', 'Ústí nad Orlicí;5:11'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts872 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


