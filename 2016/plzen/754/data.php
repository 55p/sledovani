<?php
$skupiny[] = $ts701 = new TS ('TS 701');
$skupiny[] = $ts718 = new TS ('TS 718');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$mimor->obeh(new Obeh(array('-' => array('1','2','3')), array(), array(), array('1' => '', '2' => '', '3' => ''), array()));

require __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@require __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

