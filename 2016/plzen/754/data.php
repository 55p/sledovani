<?php
$skupiny[] = $ts701 = new TS ('TS 701');
$skupiny[] = $ts718 = new TS ('TS 718');
$skupiny[] = $ts755 = new TS ('TS 755');
$skupiny[] = $ts755b = new TS ('TS 755b');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$mimor->obeh(new Obeh(array('1' => array('1'), '2' => array('2'), '3' => array('3'), '4' => array('4'), '5' => array('5')), array(), array(), array('1' => '', '2' => '', '3' => ''), array()));

require __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@require __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

