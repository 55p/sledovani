<?php 
$zacatekPlatnosti = '1.9.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9801_1', '1710_1');
$obeh[2] = array('1711_1', '1896_1',);
$obeh[3] = array('19804_1', '19803_1', '1883_1', '1906_1');
$obeh[4] = array('1881_1', '1892_1');
$obeh[5] = array('1879_1', '1890_1');

$omezeni[-1] = 'X';

$typ['9801_1'] = $typ['19804_1'] = $typ['19803_1'] = $typ['9011_1'] = $typ['9016_1'] = $typ['19804_1'] = $typ['19803_1'] = 'Os';
$typ['1710_1'] = $typ['1711_1'] = $typ['1896_1'] = $typ['1883_1'] = $typ['1892_1'] = $typ['1879_1'] = $typ['1890_1'] = $typ['1906_1'] = $typ['1881_1'] = 'Sp';

$trasa['1710_1'] = array('Praha Masarykovo nádraží;16:22', 'Louny;18:25');
$trasa['1711_1'] = array('Louny;5:29', 'Praha Masarykovo nádraží;7:32');
$trasa['1879_1'] = array('Kladno-Dubí;5:16', 'Praha Masarykovo nádraží;6:20');
$trasa['1881_1'] = array('Kladno-Dubí;6:20', 'Praha Masarykovo nádraží;7:22');
$trasa['1883_1'] = array('Kladno;7:15', 'Praha Masarykovo nádraží;7:54');
$trasa['1890_1'] = array('Praha Masarykovo nádraží;16:18', 'Rakovník;18:04');
$trasa['1892_1'] = array('Praha Masarykovo nádraží;17:18', 'Kladno-Ostrovec;18:16');
$trasa['1896_1'] = array('Praha Masarykovo nádraží;18:18', 'Kladno-Ostrovec;19:16');
$trasa['1906_1'] = array('Praha Masarykovo nádraží;21:02', 'Kladno;21:42');
$trasa['19803_1'] = array('Kralupy nad Vltavou;6:23', 'Kladno;7:04');
$trasa['19804_1'] = array('Kladno;5:18', 'Kralupy nad Vltavou;5:57');
$trasa['9011_1'] = array('Praha hl.n.;14:25', 'Čerčany;16:58');
$trasa['9016_1'] = array('Čerčany;17:06', 'Praha hl.n.;19:05');
$trasa['9801_1'] = array('Rakovník;5:41', 'Praha Masarykovo nádraží;7:35');


@$ts772 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);

?>