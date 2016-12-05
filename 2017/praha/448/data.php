<?php
$skupiny[] = $ts448 = new TS ('TS 448', '451 + 051 + 451');
$skupiny[] = $mimor = new TS('mimořádný oběh');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

$mimor->obeh(new Obeh(array('1' => array('1'), '2' => array('2'), '3' => array('3')), array(), array(), array('1' => '', '2' => '', '3' => '', '4' => '', '5' => ''), array()));

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>