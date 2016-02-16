<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9619_1', '9620_1', '9623_1', '9626_1', '9629_1', '9642_1', '9643_1', '9648_1', '9649_1', '9654_1');
$obeh[2] = array('9621_1', '9622_1', '9625_1', '109625_1', '109644_1', '109625_2', '109644_2', '9644_1', '9647_1', '9650_1');

$omezeni['109625_1'] = 'X1';
$omezeni['109625_2'] = 'X2345';
$omezeni['109644_1'] = 'X1';
$omezeni['109644_2'] = 'X2345';
$omezeni['9619_1'] = 'X';
$omezeni['9620_1'] = 'X';
$omezeni['9621_1'] = 'X';
$omezeni['9622_1'] = 'X';
$omezeni['9623_1'] = 'X';
$omezeni['9625_1'] = 'X';
$omezeni['9626_1'] = 'X';
$omezeni['9629_1'] = 'X';
$omezeni['9642_1'] = 'X';
$omezeni['9643_1'] = 'X';
$omezeni['9644_1'] = 'X';
$omezeni['9647_1'] = 'X';
$omezeni['9648_1'] = 'X';
$omezeni['9649_1'] = 'X';
$omezeni['9650_1'] = 'X';
$omezeni['9654_1'] = 'X';

$trasa['9619_1'] = array('Kralupy nad Vltavou;4:12', 'Praha Masarykovo nádraží;4:47');
$trasa['9620_1'] = array('Praha Masarykovo nádraží;5:11', 'Kralupy nad Vltavou;5:45');
$trasa['9621_1'] = array('Kralupy nad Vltavou;4:42', 'Praha Masarykovo nádraží;5:17');
$trasa['9622_1'] = array('Praha Masarykovo nádraží;5:41', 'Kralupy nad Vltavou;6:15');
$trasa['9623_1'] = array('Kralupy nad Vltavou;6:01', 'Praha Masarykovo nádraží;6:32');
$trasa['9625_1'] = array('Kralupy nad Vltavou;6:23', 'Praha Masarykovo nádraží;6:58');
$trasa['9626_1'] = array('Praha Masarykovo nádraží;6:41', 'Kralupy nad Vltavou;7:15');
$trasa['9629_1'] = array('Kralupy nad Vltavou;7:23', 'Praha Masarykovo nádraží;7:58');
$trasa['9642_1'] = array('Praha Masarykovo nádraží;15:11', 'Kralupy nad Vltavou;15:45');
$trasa['9643_1'] = array('Kralupy nad Vltavou;16:12', 'Praha Masarykovo nádraží;16:47');
$trasa['9644_1'] = array('Praha Masarykovo nádraží;16:11', 'Kralupy nad Vltavou;16:45');
$trasa['9647_1'] = array('Kralupy nad Vltavou;17:12', 'Praha Masarykovo nádraží;17:47');
$trasa['9648_1'] = array('Praha Masarykovo nádraží;17:11', 'Kralupy nad Vltavou;17:45');
$trasa['9649_1'] = array('Kralupy nad Vltavou;18:12', 'Praha Masarykovo nádraží;18:47');
$trasa['9650_1'] = array('Praha Masarykovo nádraží;18:11', 'Kralupy nad Vltavou;18:45');
$trasa['9654_1'] = array('Praha Masarykovo nádraží;19:11', 'Kralupy nad Vltavou;19:45');

$trasa['109625_1'] = array('Praha Masarykovo nádraží;7:13', 'Praha ONJ;7:45');
$trasa['109625_2'] = array('Praha Masarykovo nádraží;7:13', 'Praha-Libeň;7:18');

$trasa['109644_1'] = array('Praha ONJ;15:35', 'Praha Masarykovo nádraží;16:05');
$trasa['109644_2'] = array('Praha-Libeň;16:00', 'Praha Masarykovo nádraží;16:05');

@$ts447 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>