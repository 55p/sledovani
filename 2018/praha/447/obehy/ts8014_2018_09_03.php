<?php 
$zacatekPlatnosti = '3.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['12102_1', '12103_1', '12106_1', '12107_1', '12110_1', '12111_1', '12114_1', '12115_1', '12118_1', '12127_1', '12130_1', '12131_1', '12134_1', '12135_1', '12138_1', '12139_1', '12142_1', '12143_1', '12146_1', '12147_1', '12150_1', '12151_1', '12154_1', '12155_1'];

$omezeni['12102_1'] = 'X';
$omezeni['12103_1'] = 'X';
$omezeni['12106_1'] = 'X';
$omezeni['12107_1'] = 'X';
$omezeni['12110_1'] = 'X';
$omezeni['12111_1'] = 'X';
$omezeni['12114_1'] = 'X';
$omezeni['12115_1'] = 'X';
$omezeni['12118_1'] = 'X';
$omezeni['12127_1'] = 'X';
$omezeni['12130_1'] = 'X';
$omezeni['12131_1'] = 'X';
$omezeni['12134_1'] = 'X';
$omezeni['12135_1'] = 'X';
$omezeni['12138_1'] = 'X';
$omezeni['12139_1'] = 'X';
$omezeni['12142_1'] = 'X';
$omezeni['12143_1'] = 'X';
$omezeni['12146_1'] = 'X';
$omezeni['12147_1'] = 'X';
$omezeni['12150_1'] = 'X';
$omezeni['12151_1'] = 'X';
$omezeni['12154_1'] = 'X';
$omezeni['12155_1'] = 'X';

$trasa['12102_1'] = ['Praha-Libeň;5:29', 'Roztoky u Prahy;5:45'];
$trasa['12103_1'] = ['Roztoky u Prahy;5:53', 'Praha-Libeň;6:09'];
$trasa['12106_1'] = ['Praha-Libeň;6:29', 'Roztoky u Prahy;6:45'];
$trasa['12107_1'] = ['Roztoky u Prahy;6:53', 'Praha-Libeň;7:09'];
$trasa['12110_1'] = ['Praha-Libeň;7:29', 'Roztoky u Prahy;7:45'];
$trasa['12111_1'] = ['Roztoky u Prahy;7:53', 'Praha-Libeň;8:09'];
$trasa['12114_1'] = ['Praha-Libeň;8:29', 'Roztoky u Prahy;8:45'];
$trasa['12115_1'] = ['Roztoky u Prahy;8:53', 'Praha-Libeň;9:09'];
$trasa['12118_1'] = ['Praha-Libeň;9:29', 'Roztoky u Prahy;9:45'];
$trasa['12127_1'] = ['Roztoky u Prahy;13:53', 'Praha-Libeň;14:09'];
$trasa['12130_1'] = ['Praha-Libeň;14:29', 'Roztoky u Prahy;14:45'];
$trasa['12131_1'] = ['Roztoky u Prahy;14:53', 'Praha-Libeň;15:09'];
$trasa['12134_1'] = ['Praha-Libeň;15:29', 'Roztoky u Prahy;15:45'];
$trasa['12135_1'] = ['Roztoky u Prahy;15:53', 'Praha-Libeň;16:09'];
$trasa['12138_1'] = ['Praha-Libeň;16:29', 'Roztoky u Prahy;16:45'];
$trasa['12139_1'] = ['Roztoky u Prahy;16:53', 'Praha-Libeň;17:09'];
$trasa['12142_1'] = ['Praha-Libeň;17:29', 'Roztoky u Prahy;17:45'];
$trasa['12143_1'] = ['Roztoky u Prahy;17:53', 'Praha-Libeň;18:09'];
$trasa['12146_1'] = ['Praha-Libeň;18:29', 'Roztoky u Prahy;18:45'];
$trasa['12147_1'] = ['Roztoky u Prahy;18:53', 'Praha-Libeň;19:09'];
$trasa['12150_1'] = ['Praha-Libeň;19:29', 'Roztoky u Prahy;19:45'];
$trasa['12151_1'] = ['Roztoky u Prahy;19:53', 'Praha-Libeň;20:09'];
$trasa['12154_1'] = ['Praha-Libeň;20:29', 'Roztoky u Prahy;20:45'];
$trasa['12155_1'] = ['Roztoky u Prahy;20:53', 'Praha-Libeň;21:09'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts8014 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


