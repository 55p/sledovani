<?php 
$zacatekPlatnosti = '1.9.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$zacatekPlatnosti2 = '8.11.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9619_1', '9620_1', '9623_1', '9626_1', '9629_1', '9642_1', '9643_1', '9387_1', '9386_1', '9650_1');
$obeh[2] = array('9621_1', '9622_1', '9625_1', '9628_1', '9631_1', '109631_1', '29307_1', '9379_1', '9378_1', '9644_1', '9647_1', '9391_1', '9392_1', '9654_1');

$omezeni['109631_1'] = '1';
$omezeni['29307_1'] = '1';
$omezeni['9378_1'] = 'X';
$omezeni['9379_1'] = 'X';
$omezeni['9386_1'] = 'X';
$omezeni['9387_1'] = 'X';
$omezeni['9391_1'] = 'X';
$omezeni['9392_1'] = 'X';
$omezeni['9619_1'] = 'X';
$omezeni['9620_1'] = 'X';
$omezeni['9621_1'] = 'X';
$omezeni['9622_1'] = 'X';
$omezeni['9623_1'] = 'X';
$omezeni['9625_1'] = 'X';
$omezeni['9626_1'] = 'X';
$omezeni['9628_1'] = 'X';
$omezeni['9629_1'] = 'X';
$omezeni['9631_1'] = 'X';
$omezeni['9642_1'] = 'X';
$omezeni['9643_1'] = 'X';
$omezeni['9644_1'] = 'X';
$omezeni['9647_1'] = 'X';
$omezeni['9650_1'] = 'X';
$omezeni['9654_1'] = 'X';

$trasa['109631_1'] = array('Praha Masarykovo nádraží;8:58', 'Odstavné nádraží Praha-jih;9:29');
$trasa['29307_1'] = array('Odstavné nádraží Praha-jih;13:50', 'Praha Masarykovo nádraží;14:14');
$trasa['9378_1'] = array('Úvaly;15:27', 'Praha Masarykovo nádraží;15:54');
$trasa['9379_1'] = array('Praha Masarykovo nádraží;14:53', 'Úvaly;15:20');
$trasa['9386_1'] = array('Úvaly;17:27', 'Praha Masarykovo nádraží;17:54');
$trasa['9387_1'] = array('Praha Masarykovo nádraží;16:53', 'Úvaly;17:20');
$trasa['9391_1'] = array('Praha Masarykovo nádraží;17:53', 'Úvaly;18:20');
$trasa['9392_1'] = array('Úvaly;18:27', 'Praha Masarykovo nádraží;18:54');
$trasa['9619_1'] = array('Kralupy nad Vltavou;4:11', 'Praha Masarykovo nádraží;4:46');
$trasa['9620_1'] = array('Praha Masarykovo nádraží;5:10', 'Kralupy nad Vltavou;5:45');
$trasa['9621_1'] = array('Kralupy nad Vltavou;4:41', 'Praha Masarykovo nádraží;5:16');
$trasa['9622_1'] = array('Praha Masarykovo nádraží;5:40', 'Kralupy nad Vltavou;6:15');
$trasa['9623_1'] = array('Kralupy nad Vltavou;6:01', 'Praha Masarykovo nádraží;6:32');
$trasa['9625_1'] = array('Kralupy nad Vltavou;6:23', 'Praha Masarykovo nádraží;6:58');
$trasa['9626_1'] = array('Praha Masarykovo nádraží;6:40', 'Kralupy nad Vltavou;7:15');
$trasa['9628_1'] = array('Praha Masarykovo nádraží;7:10', 'Kralupy nad Vltavou;7:45');
$trasa['9629_1'] = array('Kralupy nad Vltavou;7:23', 'Praha Masarykovo nádraží;7:58');
$trasa['9631_1'] = array('Kralupy nad Vltavou;8:11', 'Praha Masarykovo nádraží;8:46');
$trasa['9642_1'] = array('Praha Masarykovo nádraží;15:10', 'Kralupy nad Vltavou;15:45');
$trasa['9643_1'] = array('Kralupy nad Vltavou;16:11', 'Praha Masarykovo nádraží;16:46');
$trasa['9644_1'] = array('Praha Masarykovo nádraží;16:10', 'Kralupy nad Vltavou;16:45');
$trasa['9647_1'] = array('Kralupy nad Vltavou;17:11', 'Praha Masarykovo nádraží;17:46');
$trasa['9650_1'] = array('Praha Masarykovo nádraží;18:10', 'Kralupy nad Vltavou;18:45');
$trasa['9654_1'] = array('Praha Masarykovo nádraží;19:10', 'Kralupy nad Vltavou;19:45');

$typ['109631'] = $typ[29307] = 'Sv';

@$ts446 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 
@$ts446 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti2, $konecPlatnosti2)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>