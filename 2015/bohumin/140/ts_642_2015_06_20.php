<?php 
$obeh[1] = array('241_1', '240_1');

$typ[240] = $typ[241] = 'EC';

$trasa['240_1'] = array('Košice;14:52', 'Praha hl.n.;22:21');
$trasa['241_1'] = array('Praha hl.n.;6:35', 'Košice;14:06');

@$ts642 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '22.7.2015', '31.8.2015 23:59:59')); 

unset($obeh); 
unset($trasa); 
unset($omezeni);


 ?>