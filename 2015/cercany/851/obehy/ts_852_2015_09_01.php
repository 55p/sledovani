<?php 
$zacatekPlatnosti = '1.9.2015';
$konecPlatnosti = '30.9.2015 23:59:59';

$obeh[1] = array('9231_1', '9236_1', '9209_1', '9208_1', '9205', '9204');

$omezeni['9208_1'] = 'X';
$omezeni['9209_1'] = 'X';
$omezeni['9231_1'] = 'X';
$omezeni['9236_1'] = 'X';
$omezeni['9205'] = '6';
$omezeni['9204'] = '6';

$trasa['9208_1'] = array('Světlá nad Sázavou;15:46', 'Čerčany;18:49');
$trasa['9209_1'] = array('Čerčany;11:16', 'Světlá nad Sázavou;14:44');
$trasa['9231_1'] = array('Čerčany;3:35', 'Zruč nad Sázavou;5:17');
$trasa['9236_1'] = array('Zruč nad Sázavou;6:01', 'Čerčany;7:54');
$trasa['9204'] = array('Světlá nad Sázavou;11:46', 'Čerčany;14:27');
$trasa['9205'] = array('Čerčany;8:08', 'Světlá nad Sázavou;11:12');

@$ts852 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>