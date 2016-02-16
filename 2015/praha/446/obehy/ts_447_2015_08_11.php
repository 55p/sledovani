<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('12100_1', '12101_1', '12104_1', '12105_1', '12108_1', '12109_1', '12112_1', '12113_1', '12116_1', '12117_1', '12120_1', '12119_1', '12124_1', '12121_1', '12128_1', '12123_1', '12132_1', '12125_1', '12136_1', '12129_1', '12140_1', '12133_1', '12144_1', '12137_1', '12148_1', '12141_1', '12152_1', '12145_1', '12156_1', '12149_1', '12160_1', '12153_1', '12164_1', '12157_1');
$obeh[2] = array('12102_1', '12103_1', '12106_1', '12107_1', '12110_1', '12111_1', '12114_1', '12115_1', '12118_1', '12127_1', '12138_1', '12131_1', '12142_1', '12135_1', '12146_1', '12139_1', '12150_1', '12143_1', '12154_1', '12147_1', '12158_1', '12151_1', '12162_1', '12155_1');

$omezeni[-1] = 'X';

unset($typ);
$typ[-1] = 'Os';
$typ['12100_1'] = 'Os';

$trasa['12100_1'] = array('Praha-Libeň;4:54', 'Roztoky u Prahy;5:11');
$trasa['12101_1'] = array('Roztoky u Prahy;5:23', 'Praha-Libeň;5:40');
$trasa['12102_1'] = array('Praha-Libeň;5:24', 'Roztoky u Prahy;5:41');
$trasa['12103_1'] = array('Roztoky u Prahy;5:53', 'Praha-Libeň;6:10');
$trasa['12104_1'] = array('Praha-Libeň;5:54', 'Roztoky u Prahy;6:11');
$trasa['12105_1'] = array('Roztoky u Prahy;6:23', 'Praha-Libeň;6:40');
$trasa['12106_1'] = array('Praha-Libeň;6:24', 'Roztoky u Prahy;6:41');
$trasa['12107_1'] = array('Roztoky u Prahy;6:53', 'Praha-Libeň;7:10');
$trasa['12108_1'] = array('Praha-Libeň;6:54', 'Roztoky u Prahy;7:11');
$trasa['12109_1'] = array('Roztoky u Prahy;7:23', 'Praha-Libeň;7:40');
$trasa['12110_1'] = array('Praha-Libeň;7:24', 'Roztoky u Prahy;7:41');
$trasa['12111_1'] = array('Roztoky u Prahy;7:53', 'Praha-Libeň;8:10');
$trasa['12112_1'] = array('Praha-Libeň;7:54', 'Roztoky u Prahy;8:11');
$trasa['12113_1'] = array('Roztoky u Prahy;8:23', 'Praha-Libeň;8:40');
$trasa['12114_1'] = array('Praha-Libeň;8:24', 'Roztoky u Prahy;8:41');
$trasa['12115_1'] = array('Roztoky u Prahy;8:53', 'Praha-Libeň;9:10');
$trasa['12116_1'] = array('Praha-Libeň;8:54', 'Roztoky u Prahy;9:11');
$trasa['12117_1'] = array('Roztoky u Prahy;9:23', 'Praha-Libeň;9:40');
$trasa['12118_1'] = array('Praha-Libeň;9:24', 'Roztoky u Prahy;9:41');
$trasa['12119_1'] = array('Roztoky u Prahy;10:23', 'Praha-Libeň;10:40');
$trasa['12120_1'] = array('Praha-Libeň;9:54', 'Roztoky u Prahy;10:11');
$trasa['12121_1'] = array('Roztoky u Prahy;11:23', 'Praha-Libeň;11:40');
$trasa['12123_1'] = array('Roztoky u Prahy;12:23', 'Praha-Libeň;12:40');
$trasa['12124_1'] = array('Praha-Libeň;10:54', 'Roztoky u Prahy;11:11');
$trasa['12125_1'] = array('Roztoky u Prahy;13:23', 'Praha-Libeň;13:40');
$trasa['12127_1'] = array('Roztoky u Prahy;13:53', 'Praha-Libeň;14:10');
$trasa['12128_1'] = array('Praha-Libeň;11:54', 'Roztoky u Prahy;12:11');
$trasa['12129_1'] = array('Roztoky u Prahy;14:23', 'Praha-Libeň;14:40');
$trasa['12131_1'] = array('Roztoky u Prahy;14:53', 'Praha-Libeň;15:10');
$trasa['12132_1'] = array('Praha-Libeň;12:54', 'Roztoky u Prahy;13:11');
$trasa['12133_1'] = array('Roztoky u Prahy;15:23', 'Praha-Libeň;15:40');
$trasa['12135_1'] = array('Roztoky u Prahy;15:53', 'Praha-Libeň;16:10');
$trasa['12136_1'] = array('Praha-Libeň;13:54', 'Roztoky u Prahy;14:11');
$trasa['12137_1'] = array('Roztoky u Prahy;16:23', 'Praha-Libeň;16:40');
$trasa['12138_1'] = array('Praha-Libeň;14:24', 'Roztoky u Prahy;14:41');
$trasa['12139_1'] = array('Roztoky u Prahy;16:53', 'Praha-Libeň;17:10');
$trasa['12140_1'] = array('Praha-Libeň;14:54', 'Roztoky u Prahy;15:11');
$trasa['12141_1'] = array('Roztoky u Prahy;17:23', 'Praha-Libeň;17:40');
$trasa['12142_1'] = array('Praha-Libeň;15:24', 'Roztoky u Prahy;15:41');
$trasa['12143_1'] = array('Roztoky u Prahy;17:53', 'Praha-Libeň;18:10');
$trasa['12144_1'] = array('Praha-Libeň;15:54', 'Roztoky u Prahy;16:11');
$trasa['12145_1'] = array('Roztoky u Prahy;18:23', 'Praha-Libeň;18:40');
$trasa['12146_1'] = array('Praha-Libeň;16:24', 'Roztoky u Prahy;16:41');
$trasa['12147_1'] = array('Roztoky u Prahy;18:53', 'Praha-Libeň;19:10');
$trasa['12148_1'] = array('Praha-Libeň;16:54', 'Roztoky u Prahy;17:11');
$trasa['12149_1'] = array('Roztoky u Prahy;19:23', 'Praha-Libeň;19:40');
$trasa['12150_1'] = array('Praha-Libeň;17:24', 'Roztoky u Prahy;17:41');
$trasa['12151_1'] = array('Roztoky u Prahy;19:53', 'Praha-Libeň;20:10');
$trasa['12152_1'] = array('Praha-Libeň;17:54', 'Roztoky u Prahy;18:11');
$trasa['12153_1'] = array('Roztoky u Prahy;20:23', 'Praha-Libeň;20:40');
$trasa['12154_1'] = array('Praha-Libeň;18:24', 'Roztoky u Prahy;18:41');
$trasa['12155_1'] = array('Roztoky u Prahy;20:53', 'Praha-Libeň;21:10');
$trasa['12156_1'] = array('Praha-Libeň;18:54', 'Roztoky u Prahy;19:11');
$trasa['12157_1'] = array('Roztoky u Prahy;21:23', 'Praha-Libeň;21:40');
$trasa['12158_1'] = array('Praha-Libeň;19:24', 'Roztoky u Prahy;19:41');
$trasa['12160_1'] = array('Praha-Libeň;19:54', 'Roztoky u Prahy;20:11');
$trasa['12162_1'] = array('Praha-Libeň;20:24', 'Roztoky u Prahy;20:41');
$trasa['12164_1'] = array('Praha-Libeň;20:54', 'Roztoky u Prahy;21:11');

@$ts447 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>