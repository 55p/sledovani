<?php
// sem patri definice skupin. 
$skupiny[] = $ts822 = new TS ('TS 822');
$skupiny[] = $ts823 = new TS ('TS 823');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$mimor->obeh(new Obeh(array('1' => array('9'), '2' => array('10'), '3' => array('11')), [], [], array('9' => '', '10' => '', '11' => ''), []));

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
