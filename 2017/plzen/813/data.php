<?php
// sem patri definice skupin. 
$skupiny[] = $ts813 = new TS ('TS 813');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$mimor->obeh(new Obeh(array('1' => array('6'), '2' => array('7'), '3' => array('8')), array(), array(), array('6' => '', '7' => '', '8' => '', '9' => '', '10' => ''), array()));


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
