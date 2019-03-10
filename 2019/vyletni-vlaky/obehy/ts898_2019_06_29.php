<?php 
$zacatekPlatnosti = '29.6.2019';
$konecPlatnosti = null; //'x.x.2019 23:59:59';

$obeh['Pražský motoráček'] = ['7759_1', '7750_1', '7751_1', '7752_1', '7753_1', '7754_1', '7755_1', '7756_1', '7757_1', '7758_1'];
$obeh['Posázavský motoráček'] = ['1563_1', '1562_1', '1565_1', '1564_1'];
$obeh['Kokořínský rychlík'] = ['1572_1', '1573_1'];
$obeh['Rakovnický rychlík'] = ['1571_1', '1570_1'];
$obeh['Podtrosecký rychlík'] = ['1574_1', '1575_1'];
$obeh['Podlipanský motoráček'] = ['18300_1', '18303_1', '18302_1', '18305_1', '18307_1', '18308_1', '18309_1', '18311_1', '18310_1', '18313_1'];
$obeh['Lužický motoráček'] = ['1561_1', '1560_1'];

$omezeni['1560_1'] = '6';
$omezeni['1561_1'] = '6';
$omezeni['1562_1'] = '6,1904,0105,0805,0507';
$omezeni['1563_1'] = '6,1904,0105,0805,0507';
$omezeni['1564_1'] = '7,2204,2810';
$omezeni['1565_1'] = '7,2204,2810';
$omezeni['1570_1'] = '25';
$omezeni['1571_1'] = '25';
$omezeni['1572_1'] = '25';
$omezeni['1573_1'] = '25';
$omezeni['1574_1'] = '25';
$omezeni['1575_1'] = '25';
$omezeni['7750_1'] = '25';
$omezeni['7751_1'] = '25';
$omezeni['7752_1'] = '25';
$omezeni['7753_1'] = '25';
$omezeni['7754_1'] = '25';
$omezeni['7755_1'] = '25';
$omezeni['7756_1'] = '25';
$omezeni['7757_1'] = '25';
$omezeni['7758_1'] = '25';
$omezeni['7759_1'] = '25';
$omezeni['18300_1'] = '6,7';
$omezeni['18302_1'] = '6,7';
$omezeni['18303_1'] = '6,7';
$omezeni['18305_1'] = '6,7';
$omezeni['18307_1'] = '6,7';
$omezeni['18308_1'] = '6,7';
$omezeni['18309_1'] = '6,7';
$omezeni['18310_1'] = '6,7';
$omezeni['18311_1'] = '6,7';
$omezeni['18313_1'] = '6,7';

$trasa['1560_1'] = ['Liberec;15:31','Český Kamenice;17:40'];
$trasa['1561_1'] = ['Česká Kamenice;8:03','Liberec;10:24'];
$trasa['1562_1'] = ['Čerčany;12:05','Praha hl.n.;13:35'];
$trasa['1563_1'] = ['Praha hl.n.;7:39','Čerčany;9:11'];
$trasa['1564_1'] = ['Čerčany;17:34','Praha hl.n.;19:31'];
$trasa['1565_1'] = ['Praha hl.n.;12:26','Čerčany;14:07'];
$trasa['1570_1'] = ['Rakovník;15:26','Praha hl.n.;17:28'];
$trasa['1571_1'] = ['Praha hl.n.;9:09','Rakovník;10:56'];
$trasa['1572_1'] = ['Praha-Vršovice;8:27','Mšeno;10:32'];
$trasa['1573_1'] = ['Mšeno;17:00','Praha-Vršovice;18:56'];
$trasa['1574_1'] = ['Praha-Vršovice;8:12','Jičín;11:32'];
$trasa['1575_1'] = ['Jičín;16:54','Praha-Vršovice;19:44'];
$trasa['7750_1'] = ['Praha hl.n.;8:41','Praha-Zličín;9:09'];
$trasa['7751_1'] = ['Praha-Zličín;9:48','Praha hl.n.;10:24'];
$trasa['7752_1'] = ['Praha hl.n.;10:36','Praha-Zličín;11:05'];
$trasa['7753_1'] = ['Praha-Zličín;11:48','Praha hl.n.;12:24'];
$trasa['7754_1'] = ['Praha hl.n.;12:29','Praha-Zličín;13:05'];
$trasa['7755_1'] = ['Praha-Zličín;13:48','Praha hl.n.;14:24'];
$trasa['7756_1'] = ['Praha hl.n.;14:36','Praha-Zličín;15:05'];
$trasa['7757_1'] = ['Praha-Zličín;15:48','Praha hl.n.;16:24'];
$trasa['7758_1'] = ['Praha hl.n.;16:35','Praha-Čakovice;16:55'];
$trasa['7759_1'] = ['Praha-Čakovice;7:47','Praha hl.n.;8:13'];
$trasa['18300_1'] = ['Pečky;9:56','Kouřim;10:32'];
$trasa['18302_1'] = ['Bošice;10:56','Bečváry;11:23'];
$trasa['18303_1'] = ['Kouřim;10:38','Bošice;10:44'];
$trasa['18305_1'] = ['Bečváry;11:27','Zásmuky;11:35'];
$trasa['18307_1'] = ['Zásmuky;12:37','Pečky;13:33'];
$trasa['18308_1'] = ['Pečky;13:56','Bečváry;14:56'];
$trasa['18309_1'] = ['Bečváry;15:16','Zásmuky;15:24'];
$trasa['18310_1'] = ['Bošice;16:45','Kouřim;16:51'];
$trasa['18311_1'] = ['Zásmuky;16:19','Bošice;16:33'];
$trasa['18313_1'] = ['Kouřim;17:01','Pečky;17:36'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts898 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


