<?php 
$zacatekPlatnosti = '9.10.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['114903_1', '14932_1', '14905_1', '14947_1', '14910_1', '14933_1', '14934_1', '14935_1', '14936_1', '114974_1', '124914_1', '14886_1', '105315_1', '5932_1', '8345_1', '5915_1', '114977_1'];

$omezeni['5915_1'] = 'T';
$omezeni['5932_1'] = 'X5';
$omezeni['8345_1'] = '6';
$omezeni['14886_1'] = 'X5';
$omezeni['14905_1'] = 'X';
$omezeni['14910_1'] = 'X';
$omezeni['14932_1'] = 'X';
$omezeni['14933_1'] = 'X';
$omezeni['14934_1'] = 'X';
$omezeni['14935_1'] = 'X';
$omezeni['14936_1'] = 'X';
$omezeni['14947_1'] = 'X';
$omezeni['105315_1'] = 'X5';
$omezeni['114903_1'] = 'X';
$omezeni['114974_1'] = 'X5';
$omezeni['114977_1'] = 'T';
$omezeni['124914_1'] = 'X5';

$trasa['5915_1'] = ['Havlíčkův Brod;20:08','Žďár nad Sázavou;20:45'];
$trasa['105315_1'] = ['Ždírec nad Doubravou;20:29','Havlíčkův Brod;21:00'];
$trasa['114903_1'] = ['Nové Město na Moravě;5:02','Bystřice nad Pernštejnem;5:25'];
$trasa['124914_1'] = ['Žďár nad Sázavou;18:40','Havlíčkův Brod;19:16'];
$trasa['14886_1'] = ['Havlíčkův Brod;19:24', 'Ždírec n.Doubravou;20:01'];
$trasa['14905_1'] = ['Nové Město na Moravě;6:02', 'Nedvědice;6:57'];
$trasa['14910_1'] = ['Tišnov;12:34', 'Nové Město na Moravě;13:57'];
$trasa['14932_1'] = ['Bystřice nad Pernštejnem;5:33', 'Nové Město na Moravě;5:57'];
$trasa['14933_1'] = ['Nové Město na Moravě;14:02', 'Nedvědice;14:54'];
$trasa['14934_1'] = ['Nedvědice;14:59', 'Nové Město na Moravě;15:57'];
$trasa['14935_1'] = ['Nové Město na Moravě;16:02', 'Nedvědice;16:54'];
$trasa['14936_1'] = ['Nedvědice;16:59', 'Nové Město na Moravě;17:57'];
$trasa['14947_1'] = ['Nedvědice;9:01', 'Tišnov;9:25'];
$trasa['5932_1'] = ['Havlíčkův Brod;22:30', 'Čáslav;23:37'];
$trasa['8345_1'] = ['Čáslav;4:43', 'Havlíčkův Brod;5:41'];
$trasa['114974_1'] = ['Nové Město na Moravě;18:04', 'Žďár nad Sázavou;18:25'];
$trasa['114977_1'] = ['Žďár nad Sázavou;20:56', 'Nové Město na Moravě;21:16'];
//sem patri stazene trasy


$poznamkaObehu['105315_1'] = ['pk', 'postrk'];
$poznamkaObehu['114977_1'] = ['pk', 'postrk'];

$poznamkaObehu['114974_1'] = ['př', 'přípřež'];
$poznamkaObehu['124914_1'] = ['př', 'přípřež'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts880 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


