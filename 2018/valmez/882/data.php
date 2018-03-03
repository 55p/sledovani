<?php
// sem patri definice skupin. 
$skupiny[] = $ts882 = new TS ('TS 882', '814');
$skupiny[] = $ts887 = new TS ('TS 887', '810');
$skupiny[] = $mimor = new TS('mimořádný oběh');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

$mimor->obeh(new Obeh(array('-' => array('99971','2','3','4','5','6')), ['99971' => ['záloha 742;0:00;23:59']], [], array('99971' => '', '2' => '', '3' => '', '4' => '', '5' => '', '6' => ''), []));

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
