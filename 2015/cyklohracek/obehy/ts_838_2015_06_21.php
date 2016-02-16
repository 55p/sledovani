<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';
$obeh[1] = array('29701_1', '29701_2', '9780_1', '9781_1', '9782_1', '9783_1', '29702_1', '29702_2');

$omezeni['29701_1'] = '6';
$omezeni['29701_2'] = 'T';
$omezeni['29702_1'] = '6';
$omezeni['29702_2'] = 'T';
$omezeni['9780_1'] = '25';
$omezeni['9781_1'] = '25';
$omezeni['9782_1'] = '25';
$omezeni['9783_1'] = '25';

$trasa['29701_1'] = array('Praha Libeň;8:53','Praha Masarykovo nádraží;8:58');
$trasa['29701_2'] = array('Praha Vršovice;8:38','Praha Masarykovo nádraží;8:58');
$trasa['29702_1'] = array('Praha Masarykovo nádraží;19:20','Praha Vršovice;19:38');
$trasa['29702_2'] = array('Praha Masarykovo nádraží;19:20','Praha Libeň;19:25');
$trasa['9780_1'] = array('Praha Masarykovo nádraží;9:18', 'Slaný;10:52');
$trasa['9781_1'] = array('Slaný;11:13', 'Praha Masarykovo nádraží;12:52');
$trasa['9782_1'] = array('Praha Masarykovo nádraží;13:18', 'Slaný;14:52');
$trasa['9783_1'] = array('Slaný;17:13', 'Praha Masarykovo nádraží;18:49');

@$ts838 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>