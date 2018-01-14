<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1785_1', '1949_1', '1948_1', '1949_2', '1952_1', '1953_1', '1956_1', '1959_1', '7142_1', '7179_1', '1796_1'];
$obeh[2] = ['7141_1', '7146_1', '7149_1', '1950_1', '1950_2', '1951_1', '1954_1', '1957_1', '1958_1', '1796_2', '1959_2', '7142_2', '7183_1', '7179_2'];

$omezeni['1785_1'] = 'X';
$omezeni['1796_1'] = '1,2,4,5,6,7';
$omezeni['1796_2'] = '3';
$omezeni['1948_1'] = '6,T';
$omezeni['1949_1'] = 'X';
$omezeni['1949_2'] = '6,T';
$omezeni['1950_1'] = 'X';
$omezeni['1950_2'] = '25';
$omezeni['1959_1'] = '3';
$omezeni['1959_2'] = '1,2,4,5,6,7';
$omezeni['7141_1'] = 'X';
$omezeni['7142_1'] = '3';
$omezeni['7142_2'] = '1,2,4,5,6,7';
$omezeni['7146_1'] = 'X';
$omezeni['7149_1'] = 'X';
$omezeni['7179_1'] = '3';
$omezeni['7179_2'] = '1,2,4,5,7';
$omezeni['7183_1'] = '6';

$trasa['1948_1'] = ['Letohrad;7:29','Hradec Králové hl.n.;8:53'];
$trasa['1950_1'] = ['Moravský Karlov;7:37','Hradec Králové hl.n.;9:53'];
$trasa['7141_1'] = ['Letohrad;3:27','Moravský Karlov;4:19'];
$trasa['7142_2'] = ['Letohrad;20:50','Ústí nad Orlicí;21:08'];
$trasa['7146_1'] = ['Moravský Karlov;4:26','Ústí nad Orlicí;5:45'];
$trasa['7183_1'] = ['Ústí nad Orlicí;22:41','Letohrad;22:59'];

$poznamkaObehu['1949_1'] = ['pk', 'postrk'];
$poznamkaObehu['1953_1'] = ['pk', 'postrk'];
$poznamkaObehu['1959_1'] = ['pk', 'postrk'];
$poznamkaObehu['7179_1'] = ['pk', 'postrk'];
$poznamkaObehu['1796_1'] = ['pk', 'postrk'];
$poznamkaObehu['7141_1'] = ['pk', 'postrk'];
$poznamkaObehu['7149_1'] = ['pk', 'postrk'];
$poznamkaObehu['1951_1'] = ['pk', 'postrk'];
$poznamkaObehu['1957_1'] = ['pk', 'postrk'];
$poznamkaObehu['1796_2'] = ['pk', 'postrk'];
$poznamkaObehu['1959_2'] = ['pk', 'postrk'];
$poznamkaObehu['7183_1'] = ['pk', 'postrk'];
$poznamkaObehu['7179_2'] = ['pk', 'postrk'];


$trasa['1785_1'] = ['Trutnov hl.n.;5:42', 'Pardubice hl.n.;7:27'];
$trasa['1796_1'] = ['Hradec Králové hl.n.;20:00', 'Trutnov hl.n.;21:18'];
$trasa['1796_2'] = ['Hradec Králové hl.n.;20:00', 'Trutnov hl.n.;21:18'];
$trasa['1949_1'] = ['Pardubice hl.n.;8:37', 'Letohrad;10:27'];
$trasa['1949_2'] = ['Pardubice hl.n.;8:37', 'Hradec Králové hl.n.;8:55'];
$trasa['1950_2'] = ['Letohrad;8:33', 'Hradec Králové hl.n.;9:53'];
$trasa['1951_1'] = ['Hradec Králové hl.n.;11:05', 'Letohrad;12:31'];
$trasa['1952_1'] = ['Letohrad;11:33', 'Hradec Králové hl.n.;12:53'];
$trasa['1953_1'] = ['Hradec Králové hl.n.;13:05', 'Letohrad;14:31'];
$trasa['1954_1'] = ['Letohrad;13:33', 'Hradec Králové hl.n.;14:53'];
$trasa['1956_1'] = ['Letohrad;15:33', 'Hradec Králové hl.n.;16:53'];
$trasa['1957_1'] = ['Hradec Králové hl.n.;15:06', 'Letohrad;16:31'];
$trasa['1958_1'] = ['Letohrad;17:33', 'Hradec Králové hl.n.;18:53'];
$trasa['1959_1'] = ['Hradec Králové hl.n.;19:05', 'Letohrad;20:28'];
$trasa['1959_2'] = ['Hradec Králové hl.n.;19:05', 'Letohrad;20:28'];
$trasa['7142_1'] = ['Letohrad;20:50', 'Ústí nad Orlicí;21:08'];
$trasa['7149_1'] = ['Ústí nad Orlicí;6:14', 'Moravský Karlov;7:31'];
$trasa['7179_1'] = ['Ústí nad Orlicí;22:02', 'Letohrad;22:20'];
$trasa['7179_2'] = ['Ústí nad Orlicí;22:02', 'Letohrad;22:20'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts872 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


