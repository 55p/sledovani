<?php 
$obeh[1] = array('241_1', '240_1');

$trasa['240_1'] = array('Košice;14:52', 'Praha hl.n.;22:21');
$trasa['241_1'] = array('Praha hl.n.;6:35', 'Košice;14:06');

@$ts642 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, null)); 

unset($obeh); 
unset($trasa); 
unset($omezeni);


 ?>