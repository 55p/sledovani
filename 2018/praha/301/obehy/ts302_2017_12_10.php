<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['614_1', '605_1', '610_1', '609_1', '606_1', '613_1', '602_1', '617_1'];


$trasa['602_1'] = ['Praha hl.n.;19:33','Ústí nad Labem hl.n.;20:41'];
$trasa['605_1'] = ['Ústí nad Labem hl.n.;9:16','Praha hl.n.;10:24'];
$trasa['606_1'] = ['Praha hl.n.;15:33','Ústí nad Labem hl.n.;16:41'];
$trasa['609_1'] = ['Ústí nad Labem hl.n.;13:16','Praha hl.n.;14:24'];
$trasa['610_1'] = ['Praha hl.n.;11:33','Ústí nad Labem hl.n.;12:41'];
$trasa['613_1'] = ['Ústí nad Labem hl.n.;17:16','Praha hl.n.;18:24'];
$trasa['614_1'] = ['Praha hl.n.;7:33','Ústí nad Labem hl.n.;8:41'];
$trasa['617_1'] = ['Ústí nad Labem hl.n.;21:16','Praha hl.n.;22:34'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts302 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


