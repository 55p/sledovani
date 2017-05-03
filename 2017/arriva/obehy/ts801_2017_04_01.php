<?php 
$zacatekPlatnosti = '1.4.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['1500_1', '1501_1', '1504_1', '1505_1', '1508_1', '1507_1', '1510_1', '1511_1', '1514_1', '1515_1'];
$obeh[2] = ['1502_1', '1503_1', '1506_1', '1043_1'];
$obeh[3] = ['1040_1', '1509_1', '1512_1', '1513_1', '1516_1', '1517_1'];

$omezeni['1500_1'] = 'X';
$omezeni['1501_1'] = 'X';
$omezeni['1502_1'] = 'X';
$omezeni['1503_1'] = 'X';
$omezeni['1504_1'] = 'X';
$omezeni['1505_1'] = 'X';
$omezeni['1506_1'] = 'X';
$omezeni['1507_1'] = 'X';
$omezeni['1508_1'] = 'X';
$omezeni['1509_1'] = 'X';
$omezeni['1510_1'] = 'X';
$omezeni['1511_1'] = 'X';
$omezeni['1512_1'] = 'X';
$omezeni['1513_1'] = 'X';
$omezeni['1514_1'] = 'X';
$omezeni['1515_1'] = 'X';
$omezeni['1516_1'] = 'X';
$omezeni['1517_1'] = 'X';

$trasa['1500_1'] = ['Benešov u Prahy;5:39','Praha hl.n.;6:32'];
$trasa['1501_1'] = ['Praha hl.n.;7:02','Benešov u Prahy;7:53'];
$trasa['1502_1'] = ['Benešov u Prahy;7:09','Praha hl.n.;8:02'];
$trasa['1503_1'] = ['Praha hl.n.;9:02','Benešov u Prahy;9:53'];
$trasa['1504_1'] = ['Benešov u Prahy;8:09','Praha hl.n.;9:02'];
$trasa['1505_1'] = ['Praha hl.n.;11:02','Benešov u Prahy;11:53'];
$trasa['1506_1'] = ['Benešov u Prahy;10:09','Praha hl.n.;11:02'];
$trasa['1507_1'] = ['Praha hl.n.;13:02','Benešov u Prahy;13:53'];
$trasa['1508_1'] = ['Benešov u Prahy;12:09','Praha hl.n.;12:58'];
$trasa['1509_1'] = ['Praha hl.n.;14:58','Benešov u Prahy;15:53'];
$trasa['1510_1'] = ['Benešov u Prahy;14:09','Praha hl.n.;14:58'];
$trasa['1511_1'] = ['Praha hl.n.;15:58','Benešov u Prahy;16:53'];
$trasa['1512_1'] = ['Benešov u Prahy;16:09','Praha hl.n.;17:02'];
$trasa['1513_1'] = ['Praha hl.n.;17:58','Benešov u Prahy;18:53'];
$trasa['1514_1'] = ['Benešov u Prahy;17:09','Praha hl.n.;17:58'];
$trasa['1515_1'] = ['Praha hl.n.;19:02','Benešov u Prahy;19:53'];
$trasa['1516_1'] = ['Benešov u Prahy;19:09','Praha hl.n.;20:02'];
$trasa['1517_1'] = ['Praha hl.n.;21:02','Benešov u Prahy;21:53'];
$trasa['1040_1'] = ['Nitra;6:46', 'Praha hl.n.;13:29'];
$trasa['1043_1'] = ['Praha hl.n.;14:19', 'Nitra;21:15'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts801 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


