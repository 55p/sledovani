<?php 
$obeh[1] = array('512_1', '515_1');

$trasa['512_1'] = array('Bohumín;7:06', 'Františkovy Lázně;13:23');
$trasa['515_1'] = array('Františkovy Lázně;14:37', 'Bohumín;20:53');

@$ts642a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, null)); 

unset($obeh); 
unset($trasa); 
unset($omezeni);


 ?>