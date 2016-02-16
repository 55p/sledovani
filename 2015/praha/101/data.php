<?php  
$obeh[1] = array(9988, 9909, 885, 886, 853);
$obeh[2] = array(850, 891, 880);
$obeh[3] = array(881, 890, 887, 884, 955);
$obeh[4] = array(883, 888, 851);
$obeh[5] = array(852);
$obeh[6] = array(893);
$obeh[7] = array(892, 889, 882);
$obeh[8] = array(616, 603, 612, 607, 608, 611, 604, 615);

$TS['TS 101'] = $obeh;

unset($obeh);

$zjOmez[] = array('X', 9988, 9909, 881, 890);
$zjOmez[] = array(10, 853, 955);
$zjOmez[] = array(11, 883, 892, 616, 603);

$typ[9988] = 'Sv';
$typ[9909] = 'Os';
$typ[-1] = 'R';

$trasa[603] = array('Ústí nad Labem hl.n.;7:13', 'Praha hl.n.;8:25');
$trasa[604] = array('Praha hl.n.;17:30', 'Ústí nad Labem hl.n.;18:41');
$trasa[607] = array('Ústí nad Labem hl.n.;11:13', 'Praha hl.n.;12:25');
$trasa[608] = array('Praha hl.n.;13:30', 'Ústí nad Labem hl.n.;14:41');
$trasa[611] = array('Ústí nad Labem hl.n.;15:13', 'Praha hl.n.;16:25');
$trasa[612] = array('Praha hl.n.;9:30', 'Ústí nad Labem hl.n.;10:41');
$trasa[615] = array('Ústí nad Labem hl.n.;19:13', 'Praha hl.n.;20:25');
$trasa[616] = array('Praha hl.n.;5:16', 'Ústí nad Labem hl.n.;6:41');
$trasa[850] = array('Vsetín;6:52', 'Praha hl.n.;11:15');
$trasa[851] = array('Praha hl.n.;16:51', 'Vsetín;21:13');
$trasa[852] = array('Vsetín;4:52', 'Praha hl.n.;9:15');
$trasa[853] = array('Praha hl.n.;18:51', 'Vsetín;23:09');
$trasa[880] = array('Staré Město u Uherského Hradiště;19:18', 'Olomouc hl.n.;20:04');
$trasa[881] = array('Olomouc hl.n.;5:55', 'Staré Město u Uherského Hradiště;6:45');
$trasa[882] = array('Staré Město u Uherského Hradiště;17:18', 'Praha hl.n.;21:15');
$trasa[883] = array('Hradec Králové hl.n.;5:29', 'Staré Město u Uherského Hradiště;8:45');
$trasa[884] = array('Staré Město u Uherského Hradiště;15:18', 'Praha hl.n.;19:15');
$trasa[885] = array('Praha hl.n.;6:51', 'Staré Město u Uherského Hradiště;10:45');
$trasa[886] = array('Staré Město u Uherského Hradiště;13:18', 'Praha hl.n.;17:15');
$trasa[887] = array('Olomouc hl.n.;11:55', 'Staré Město u Uherského Hradiště;12:45');
$trasa[888] = array('Staré Město u Uherského Hradiště;11:18', 'Praha hl.n.;15:15');
$trasa[889] = array('Praha hl.n.;10:51', 'Staré Město u Uherského Hradiště;14:45');
$trasa[890] = array('Staré Město u Uherského Hradiště;9:18', 'Olomouc hl.n.;10:04');
$trasa[891] = array('Praha hl.n.;12:51', 'Staré Město u Uherského Hradiště;16:45');
$trasa[892] = array('Staré Město u Uherského Hradiště;4:24', 'Praha hl.n.;8:15');
$trasa[893] = array('Praha hl.n.;14:51', 'Staré Město u Uherského Hradiště;18:45');
$trasa[955] = array('Praha hl.n.;20:11', 'Hradec Králové hl.n.;21:51');
$trasa[9909] = array('Řevnice;5:52', 'Praha hl.n.;6:28');
$trasa[9988] = array('Odstavné nádraží Praha–jih;5:03', 'Řevnice;5:52');

$poznamkaObehu[881] = $poznamkaObehu[880] = array('', 'Olšava');
$poznamkaObehu[890] = $poznamkaObehu[891] = array('', 'Hradišťan');
$poznamkaObehu[882] = $poznamkaObehu[883] = array('', 'Bouzov');
$poznamkaObehu[888] = $poznamkaObehu[889] = array('', 'Jan Ámos Komenský');
$poznamkaObehu[884] = $poznamkaObehu[885] = array('', 'Galán');
$poznamkaObehu[886] = $poznamkaObehu[887] = array('', 'Velehrad');
$poznamkaObehu[615] = array('', 'Ohře');
$poznamkaObehu[604] = array('', 'Krušnohor');
$poznamkaObehu[611] = array('', 'Karlex');
$poznamkaObehu[608] = array('', 'Bílina');
$poznamkaObehu[607] = array('', 'Salubia');
$poznamkaObehu[612] = array('', 'Svatava');
$poznamkaObehu[603] = array('', 'Chomutovka');
$poznamkaObehu[616] = array('', 'Větruše');
$poznamkaObehu[850] = array('', 'Portáš');
$poznamkaObehu[851] = array('', 'Portáš');
$poznamkaObehu[852] = array('', 'Matalík');
$poznamkaObehu[853] = array('', 'Matalík');
$poznamkaObehu[892] = array('', 'Buchlov');
$poznamkaObehu[893] = array('', 'Buchlov');

include 'spolecne/laky_vse.php';

foreach ($zjOmez as $array) {
  foreach ($array as $key => $vlak) {
    if ($key == 0) continue;
    $omezeni[$vlak] = $array[0];
  }
}
?>
