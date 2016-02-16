<?php
$obeh[1] = array('28900_1', '1600_1', '1601_1', '2837_1', '2999_1', '2990_1', '3422_1', '3423_1', '3430_1', '3431_1', '2844_1', '28919_1', '28912_1', '2853_1', '2854_1', '2855_1', '2856_1', '2857_1', '2858_1', '2859_1', '2860_1', '2861_1', '2862_1', '2865_1', '2866_1', '1619_1', '2962_1');

$omezeni['1600_1'] = 'X';
$omezeni['1601_1'] = 'X';
$omezeni['1619_1'] = '6,T';
$omezeni['2837_1'] = 'X';
$omezeni['2844_1'] = 'X';
$omezeni['2853_1'] = '6,T';
$omezeni['2854_1'] = '6,T';
$omezeni['2855_1'] = '6,T';
$omezeni['2856_1'] = '6,T';
$omezeni['2857_1'] = '6,T';
$omezeni['2858_1'] = '6,T';
$omezeni['2859_1'] = '6,T';
$omezeni['2860_1'] = '6,T';
$omezeni['2861_1'] = '6,T';
$omezeni['2862_1'] = '6,T';
$omezeni['2865_1'] = '6,T';
$omezeni['2866_1'] = '6,T';
$omezeni['28900_1'] = 'X';
$omezeni['28912_1'] = '6,T';
$omezeni['28919_1'] = 'X';
$omezeni['2962_1'] = '6,T';
$omezeni['2990_1'] = 'X';
$omezeni['2999_1'] = 'X';
$omezeni['3422_1'] = 'X';
$omezeni['3423_1'] = 'X';
$omezeni['3430_1'] = 'X';
$omezeni['3431_1'] = 'X';

$trasa['1600_1'] = array('Ostrava-Svinov;4:32', 'Opava východ;4:56');
$trasa['1601_1'] = array('Opava východ;5:20', 'Ostrava střed;6:03');
$trasa['1619_1'] = array('Ostrava-Svinov;19:49', 'Český Těšín;20:40');
$trasa['2837_1'] = array('Ostrava-Kunčice;6:36', 'Český Těšín;7:09');
$trasa['2844_1'] = array('Český Těšín;21:55', 'Ostrava-Svinov;22:45');
$trasa['2853_1'] = array('Ostrava-Svinov;7:51', 'Havířov;8:17');
$trasa['2854_1'] = array('Havířov;8:40', 'Ostrava-Svinov;9:05');
$trasa['2855_1'] = array('Ostrava-Svinov;9:51', 'Havířov;10:17');
$trasa['2856_1'] = array('Havířov;10:40', 'Ostrava-Svinov;11:05');
$trasa['2857_1'] = array('Ostrava-Svinov;11:51', 'Havířov;12:17');
$trasa['2858_1'] = array('Havířov;12:40', 'Ostrava-Svinov;13:05');
$trasa['2859_1'] = array('Ostrava-Svinov;13:51', 'Havířov;14:17');
$trasa['2860_1'] = array('Havířov;14:40', 'Ostrava-Svinov;15:05');
$trasa['2861_1'] = array('Ostrava-Svinov;15:51', 'Havířov;16:17');
$trasa['2862_1'] = array('Havířov;16:40', 'Ostrava-Svinov;17:05');
$trasa['2865_1'] = array('Ostrava-Svinov;17:51', 'Havířov;18:17');
$trasa['2866_1'] = array('Havířov;18:40', 'Ostrava-Svinov;19:05');
$trasa['2962_1'] = array('Český Těšín;22:37', 'Bohumín;23:15');
$trasa['3422_1'] = array('Český Těšín;13:45', 'Opava východ;15:18');
$trasa['3423_1'] = array('Opava východ;15:27', 'Český Těšín;17:09');
$trasa['3430_1'] = array('Český Těšín;17:45', 'Opava východ;19:18');
$trasa['3431_1'] = array('Opava východ;19:27', 'Český Těšín;21:07');

$trasa['28900_1'] = array('Bohumín;4:12', 'Ostrava-Svinov;4:24');
$trasa['28912_1'] = array('Bohumín;7:30', 'Ostrava-Svinov;7:42');
$trasa['28919_1'] = array('Ostrava-Svinov;22:54', 'Bohumín;23:06');

@$ts441a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '1.7.2015', '31.8.2015 23:59:59')); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>