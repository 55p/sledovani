<?php
// sem patri definice skupin. 
$skupiny[] = $ts447 = new TS ('TS 447', '451');
$skupiny[] = $ts111 = new TS ('TS 111', '163 + 961');

$skupiny[] = $mimor = new TS('mimořádný oběh');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

$mimor->obeh(new Obeh(array('-' => array('1','2','3')), [], [], array('1' => '', '2' => '', '3' => ''), []));

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
