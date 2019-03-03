<?php 
$zacatekPlatnosti = '1.10.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh['Pražský motoráček'] = ['7759_1', '7750_2', '7751_2', '7752_2', '7753_2', '7756_2', '7757_2', '7758_1'];
$obeh['Posázavský motoráček'] = ['1563_1', '1562_1', '1565_1', '1564_1'];
$obeh['Kokořínský rychlík'] = ['1572_1', '1573_1'];
$obeh['Rakovnický rychlík'] = ['1571_1', '1570_1'];

$omezeni['1562_1'] = '6';
$omezeni['1563_1'] = '6';
$omezeni['1564_1'] = '7';
$omezeni['1565_1'] = '7';
$omezeni['1570_1'] = '25';
$omezeni['1571_1'] = '25';
$omezeni['1572_1'] = '25';
$omezeni['1573_1'] = '25';
$omezeni['7750_1'] = '0812';
$omezeni['7751_1'] = '0812';
$omezeni['7752_1'] = '0812';
$omezeni['7753_1'] = '0812';
$omezeni['7754_1'] = '0812';
$omezeni['7755_1'] = '0812';
$omezeni['7756_1'] = '0812';
$omezeni['7757_1'] = '0812';
$omezeni['7750_2'] = '25';
$omezeni['7751_2'] = '25';
$omezeni['7752_2'] = '25';
$omezeni['7753_2'] = '25';
$omezeni['7756_2'] = '25';
$omezeni['7757_2'] = '25';
$omezeni['7758_1'] = '25';
$omezeni['7759_1'] = '25';

$trasa['1562_1'] = ['Čerčany;12:03','Praha hlavní nádraží;13:35'];
$trasa['1563_1'] = ['Praha hlavní nádraží;7:38','Čerčany;9:11'];
$trasa['1564_1'] = ['Čerčany;17:35','Praha hlavní nádraží;19:31'];
$trasa['1565_1'] = ['Praha hlavní nádraží;10:33','Čerčany;12:09'];
$trasa['1566_1'] = ['Kácov;16:53','Praha hlavní nádraží;19:31'];
$trasa['1567_1'] = ['Praha hlavní nádraží;8:45','Kácov;11:05'];
$trasa['1570_1'] = ['Rakovník;15:43','Praha hlavní nádraží;17:37'];
$trasa['1571_1'] = ['Praha hlavní nádraží;8:25','Rakovník;10:13'];
$trasa['1572_1'] = ['Praha-Vršovice;8:30','Mšeno;10:31'];
$trasa['1573_1'] = ['Mšeno;17:00','Praha-Vršovice;18:59'];
$trasa['7750_1'] = ['Praha hlavní nádraží;8:54','Praha-Zličín;9:21'];
$trasa['7751_1'] = ['Praha-Zličín;9:34','Praha hlavní nádraží;10:11'];
$trasa['7752_1'] = ['Praha hlavní nádraží;10:54','Praha-Zličín;11:21'];
$trasa['7753_1'] = ['Praha-Zličín;11:34','Praha hlavní nádraží;12:11'];
$trasa['7754_1'] = ['Praha hlavní nádraží;12:54','Praha-Zličín;13:21'];
$trasa['7755_1'] = ['Praha-Zličín;13:34','Praha hlavní nádraží;14:11'];
$trasa['7756_1'] = ['Praha hlavní nádraží;14:54','Praha-Zličín;15:21'];
$trasa['7757_1'] = ['Praha-Zličín;15:34','Praha hlavní nádraží;16:11'];
$trasa['7758_1'] = ['Praha hlavní nádraží;17:17','Praha-Čakovice;17:42'];
$trasa['7759_1'] = ['Praha-Čakovice;8:20','Praha hlavní nádraží;8:43'];

$trasa['7750_2'] = ['Praha hl.n.;8:54','Rudná u Prahy;9:19;9:20','Praha-Zličín;9:44'];
$trasa['7751_2'] = ['Praha-Zličín;10:38','Rudná u Prahy;10:59;11:10','Praha hl.n.;11:35'];
$trasa['7752_2'] = ['Praha hl.n.;11:50','Rudná u Prahy;12:32;12:47','Praha-Zličín;13:06'];
$trasa['7753_2'] = ['Praha-Zličín;13:47','Rudná u Prahy;14:08;14:09','Praha hl.n.;14:35'];
$trasa['7756_2'] = ['Praha hl.n.;14:54','Rudná u Prahy;15:19;15:20','Praha-Zličín;15:44'];
$trasa['7757_2'] = ['Praha-Zličín;15:50','Rudná u Prahy;16:10;16:15','Praha hl.n.;16:45'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts899 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


