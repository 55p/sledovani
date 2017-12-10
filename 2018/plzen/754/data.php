<?php
// sem patri definice skupin. 
$skupiny[] = $ts701 = new TS ('TS 701', '754');
$skupiny[] = $ts718 = new TS ('TS 718', '754');
$skupiny[] = $ts719 = new TS ('TS 719', '754');
$skupiny[] = $ts730 = new TS ('TS 730', '754');
$skupiny[] = $mimor = new TS ('mimořádný oběh');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

$mimor->obeh(new Obeh(array('1' => array('1'), '2' => array('2'), '3' => array('3'), '4' => array('4'), '5' => array('5')), array(), array(), array('1' => '', '2' => '', '3' => '', '4' => '', '5' => ''), array()));

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
