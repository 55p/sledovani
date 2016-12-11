<?php
// sem patri definice skupin. 
$skupiny[] = $ts701 = new TS ('TS 701', '750.7');
$skupiny[] = $ts702 = new TS ('TS 702', '750.7');
$skupiny[] = $ts703 = new TS ('TS 703', '754');
$skupiny[] = $ts704 = new TS ('TS 704', '754');
$skupiny[] = $ts705 = new TS ('TS 705', '754');
$skupiny[] = $mimor = new TS('mimořádný oběh');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

$mimor->obeh(new Obeh(array('-' => array('1','2','3','4','5','6')), array(), array(), array('1' => '', '2' => '', '3' => '', '4' => '', '5' => '', '6' => ''), array()));

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
