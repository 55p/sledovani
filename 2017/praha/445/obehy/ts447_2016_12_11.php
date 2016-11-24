<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('29903_1', '9903_1', '9903_2', '9908_1', '9925_1', '9926_1', '29201_1', '9940_1', '9941_1', '9950_1', '9953_1', '9962_1', '9965_1', '9998_1', '99999_1');
$obeh[2] = array('9999_1', '9902_1', '109917_1', '9922_1', '109935_1', '9935_1', '8846_1', '108846_1', '8851_1', '108854_1', '8859_1', '29859_1', '8859_2', '99999_2');

$omezeni['108846_1'] = 'X';
$omezeni['108854_1'] = 'X';
$omezeni['109917_1'] = 'X';
$omezeni['109935_1'] = 'X';
$omezeni['29201_1'] = 'X';
$omezeni['29859_1'] = 'X5';
$omezeni['29903_1'] = 'X1';
$omezeni['8846_1'] = 'X';
$omezeni['8851_1'] = 'X';
$omezeni['8859_1'] = 'X';
$omezeni['8859_2'] = 'X1234';
$omezeni['9902_1'] = 'X';
$omezeni['9903_1'] = 'X2345';
$omezeni['9903_2'] = 'X';
$omezeni['9908_1'] = 'X';
$omezeni['9922_1'] = 'X';
$omezeni['9925_1'] = 'X';
$omezeni['9926_1'] = 'X';
$omezeni['9935_1'] = 'X';
$omezeni['9940_1'] = 'X';
$omezeni['9941_1'] = 'X';
$omezeni['9950_1'] = 'X';
$omezeni['9953_1'] = 'X';
$omezeni['9962_1'] = 'X';
$omezeni['9965_1'] = 'X';
$omezeni['9998_1'] = '5';
$omezeni['99999_1'] = '6';
$omezeni['99999_2'] = 'T';
$omezeni['9999_1'] = 'X1';

$trasa['29201_1'] = array('Praha-Smíchov;12:39','Praha hl.n.;12:46');
$trasa['29859_1'] = array('Praha hl.n.;19:16','Praha-Libeň;19:21');
$trasa['29903_1'] = array('Praha-Libeň;5:06','Praha hl.n.;5:11');
$trasa['8846_1'] = array('Praha odstavné n.;14:52','Praha hl.n.;15:00');
$trasa['8859_2'] = array('Praha hl.n.;19:21','Praha odstavné n.;19:29');
$trasa['9903_1'] = array('Praha odstavné n.;5:09','Praha hl.n.;5:17');
$trasa['9935_1'] = array('Praha hl.n.;10:32','Praha odstavné n.;10:43');
$trasa['9998_1'] = array('Český Brod;20:51','Praha odstavné n.;21:40');
$trasa['99999_1'] = array('Operativní záloha Praha-Libeň;7:00;18:00');
$trasa['99999_2'] = array('Operativní záloha Praha-Libeň;8:00;19:00');
$trasa['9999_1'] = array('Praha odstavné n.;4:33','Český Brod;5:08');
$trasa['108846_1'] = array('Praha hl.n.;15:17', 'Beroun;16:07');
$trasa['108854_1'] = array('Praha hl.n.;17:17', 'Beroun;18:07');
$trasa['109917_1'] = array('Řevnice;6:51', 'Český Brod;8:04');
$trasa['109935_1'] = array('Praha-Radotín;10:09', 'Praha hl.n.;10:26');


$poznamkaObehu['109917_1'] = array('pk', 'postrk');
$poznamkaObehu['109935_1'] = array('pk', 'postrk');
$poznamkaObehu['108846_1'] = array('pk', 'postrk');
$poznamkaObehu['108854_1'] = array('pk', 'postrk');


$typ['29903_1'] = 'Sv';
$typ['9903_1'] = 'Sv';
$typ['29201_1'] = 'Sv';
$typ['9998_1'] = 'Sv';
$typ['9999_1'] = 'Sv';
$typ['9935_1'] = 'Sv';
$typ['8846_1'] = 'Sv';
$typ['29859_1'] = 'Sv';
$typ['8859_2'] = 'Sv';

$trasa['8851_1'] = array('Beroun;16:15', 'Praha hl.n.;17:06');
$trasa['8859_1'] = array('Beroun;18:15', 'Praha hl.n.;19:06');
$trasa['9902_1'] = array('Český Brod;5:18', 'Řevnice;6:30');
$trasa['9903_2'] = array('Praha hl.n.;5:28', 'Český Brod;6:04');
$trasa['9908_1'] = array('Český Brod;6:18', 'Řevnice;7:30');
$trasa['9922_1'] = array('Český Brod;8:18', 'Praha-Radotín;9:13');
$trasa['9925_1'] = array('Řevnice;7:51', 'Český Brod;9:04');
$trasa['9926_1'] = array('Český Brod;9:18', 'Praha-Smíchov;10:04');
$trasa['9940_1'] = array('Praha hl.n.;12:57', 'Praha-Radotín;13:13');
$trasa['9941_1'] = array('Praha-Radotín;13:39', 'Český Brod;14:34');
$trasa['9950_1'] = array('Český Brod;14:48', 'Řevnice;16:00');
$trasa['9953_1'] = array('Řevnice;16:21', 'Český Brod;17:34');
$trasa['9962_1'] = array('Český Brod;17:48', 'Řevnice;19:00');
$trasa['9965_1'] = array('Řevnice;19:21', 'Český Brod;20:34');


@$ts447 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>