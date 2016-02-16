<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';
$obeh[1] = array('5500_1', '5505_1', '5506_1', '5511_1', '5514_1', '5519_1', '5502_1', '5507_1', '5508_1', '5515_1');
$obeh[2] = array('5508_2', '5510_1', '5515_2', '5516_1', '5530_1');
$obeh[3] = array('5501_1', '5504_1', '5509_1', '5516_2', '5502_2', '5507_2', '5508_3', '5513_1', '5516_3');
$obeh[4] = array('5501_2', '5504_2', '5509_2', '5512_1', '5517_1', '5532_1');
$obeh[5] = array('5552_1', '5503_1', '5505_2', '5506_2', '5511_2', '5514_2', '5519_2');

$omezeni['5500_1'] = 'X';
$omezeni['5501_1'] = 'T';
$omezeni['5501_2'] = 'X,6';
$omezeni['5502_1'] = 'T';
$omezeni['5502_2'] = 'X,6';
$omezeni['5503_1'] = 'X';
$omezeni['5504_1'] = 'T';
$omezeni['5504_2'] = 'X,6';
$omezeni['5505_1'] = 'X';
$omezeni['5505_2'] = '6,';
$omezeni['5506_1'] = 'X';
$omezeni['5506_2'] = '6,T';
$omezeni['5507_1'] = 'T';
$omezeni['5507_2'] = 'X,6';
$omezeni['5508_1'] = 'T';
$omezeni['5508_2'] = '6';
$omezeni['5508_3'] = 'X';
$omezeni['5509_1'] = 'T';
$omezeni['5509_2'] = 'X,6';
$omezeni['5510_1'] = 'X';
$omezeni['5511_1'] = 'X';
$omezeni['5511_2'] = '6,T';
$omezeni['5513_1'] = 'X';
$omezeni['5514_1'] = 'X';
$omezeni['5514_2'] = '6,T';
$omezeni['5515_1'] = 'T';
$omezeni['5515_2'] = 'X,6';
$omezeni['5516_1'] = '6';
$omezeni['5516_2'] = 'T';
$omezeni['5516_3'] = 'X';
$omezeni['5519_1'] = 'X';
$omezeni['5519_2'] = '6,T';
$omezeni['5530_1'] = 'X';
$omezeni['5552_1'] = 'X';

$trasa['5500_1'] = array('Hradec Králové hl.n.;5:04', 'Turnov;7:17');
$trasa['5501_1'] = array('Turnov;5:27', 'Hradec Králové hl.n.;7:53');
$trasa['5501_2'] = array('Turnov;5:27', 'Hradec Králové hl.n.;7:53');
$trasa['5502_1'] = array('Hradec Králové hl.n.;6:04', 'Turnov;8:25');
$trasa['5502_2'] = array('Hradec Králové hl.n.;6:04', 'Turnov;8:25');
$trasa['5503_1'] = array('Turnov;6:27', 'Hradec Králové hl.n.;8:53');
$trasa['5504_1'] = array('Hradec Králové hl.n.;8:04', 'Turnov;10:25');
$trasa['5504_2'] = array('Hradec Králové hl.n.;8:04', 'Turnov;10:25');
$trasa['5505_1'] = array('Turnov;7:34', 'Hradec Králové hl.n.;9:53');
$trasa['5505_2'] = array('Turnov;7:34', 'Hradec Králové hl.n.;9:53');
$trasa['5506_1'] = array('Hradec Králové hl.n.;10:04', 'Turnov;12:25');
$trasa['5506_2'] = array('Hradec Králové hl.n.;10:04', 'Turnov;12:25');
$trasa['5507_1'] = array('Turnov;9:34', 'Hradec Králové hl.n.;11:53');
$trasa['5507_2'] = array('Turnov;9:34', 'Hradec Králové hl.n.;11:53');
$trasa['5508_1'] = array('Hradec Králové hl.n.;12:04', 'Turnov;14:25');
$trasa['5508_2'] = array('Hradec Králové hl.n.;12:04', 'Turnov;14:25');
$trasa['5508_3'] = array('Hradec Králové hl.n.;12:04', 'Turnov;14:25');
$trasa['5509_1'] = array('Turnov;11:34', 'Hradec Králové hl.n.;13:53');
$trasa['5509_2'] = array('Turnov;11:34', 'Hradec Králové hl.n.;13:53');
$trasa['5510_1'] = array('Hradec Králové hl.n.;13:04', 'Turnov;15:30');
$trasa['5511_1'] = array('Turnov;13:34', 'Hradec Králové hl.n.;15:56');
$trasa['5511_2'] = array('Turnov;13:34', 'Hradec Králové hl.n.;15:56');
$trasa['5512_1'] = array('Hradec Králové hl.n.;14:04', 'Turnov;16:30');
$trasa['5513_1'] = array('Turnov;14:42', 'Hradec Králové hl.n.;16:53');
$trasa['5514_1'] = array('Hradec Králové hl.n.;16:04', 'Turnov;18:25');
$trasa['5514_2'] = array('Hradec Králové hl.n.;16:04', 'Turnov;18:25');
$trasa['5515_1'] = array('Turnov;15:42', 'Hradec Králové hl.n.;17:53');
$trasa['5515_2'] = array('Turnov;15:42', 'Hradec Králové hl.n.;17:53');
$trasa['5516_1'] = array('Hradec Králové hl.n.;18:04', 'Turnov;20:25');
$trasa['5516_2'] = array('Hradec Králové hl.n.;18:04', 'Turnov;20:25');
$trasa['5516_3'] = array('Hradec Králové hl.n.;18:04', 'Turnov;20:25');
$trasa['5517_1'] = array('Turnov;17:34', 'Hradec Králové hl.n.;19:53');
$trasa['5519_1'] = array('Turnov;19:34', 'Hradec Králové hl.n.;21:53');
$trasa['5519_2'] = array('Turnov;19:34', 'Hradec Králové hl.n.;21:53');
$trasa['5530_1'] = array('Hradec Králové hl.n.;19:04', 'Jičín;20:24');
$trasa['5532_1'] = array('Hradec Králové hl.n.;21:04', 'Jičín;22:16');
$trasa['5552_1'] = array('Ostroměř;4:58', 'Turnov;6:17');


@$ts860 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>