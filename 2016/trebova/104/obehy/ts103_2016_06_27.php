<?php 
$zacatekPlatnosti = '27.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7160_1', '7141_1', '7163_1', '6282_1', '7169_1', '7174_1', '7149_1', '7158_1', '7177_1', '7162_1', '5002_1', '5013_1', '5032_1', '7177_2');

$omezeni['5002_1'] = '6,0507';
$omezeni['5013_1'] = '7,0607';
$omezeni['5032_1'] = '7,0607';
$omezeni['6282_1'] = 'X';
$omezeni['7141_1'] = 'X';
$omezeni['7149_1'] = 'X';
$omezeni['7158_1'] = 'X';
$omezeni['7160_1'] = 'X';
$omezeni['7162_1'] = '6,0507';
$omezeni['7163_1'] = 'X';
$omezeni['7169_1'] = 'X';
$omezeni['7174_1'] = 'X';
$omezeni['7177_1'] = 'X';
$omezeni['7177_2'] = '7,0607';



$trasa['5002_1'] = array('Ústí nad Orlicí;5:15', 'Kolín;7:17');
$trasa['5013_1'] = array('Pardubice hl.n.;17:44', 'Česká Třebová;19:01');
$trasa['5032_1'] = array('Česká Třebová;21:47', 'Ústí nad Orlicí;21:58');
$trasa['6282_1'] = array('Lichkov;12:17', 'Ústí nad Orlicí;13:09');
$trasa['7141_1'] = array('Ústí nad Orlicí;4:47', 'Lichkov;5:59');
$trasa['7149_1'] = array('Ústí nad Orlicí;15:46', 'Lichkov;16:36');
$trasa['7158_1'] = array('Lichkov;17:03', 'Ústí nad Orlicí;18:09');
$trasa['7160_1'] = array('Letohrad;4:02', 'Ústí nad Orlicí;4:23');
$trasa['7162_1'] = array('Letohrad;4:49', 'Ústí nad Orlicí;5:11');
$trasa['7163_1'] = array('Ústí nad Orlicí;8:46', 'Lichkov;9:34');
$trasa['7169_1'] = array('Ústí nad Orlicí;13:46', 'Letohrad;14:06');
$trasa['7174_1'] = array('Letohrad;14:46', 'Ústí nad Orlicí;15:09');
$trasa['7177_1'] = array('Ústí nad Orlicí;22:45', 'Letohrad;23:05');
$trasa['7177_2'] = array('Ústí nad Orlicí;22:45', 'Letohrad;23:05');




@$ts103 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>