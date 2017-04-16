<?php
$skupiny[] = $ts122 = new TS ('TS 122', '162 WTB + 961');
$skupiny[] = $ts124 = new TS ('TS 124', '163 WTB + 961');
$skupiny[] = $ts123 = new TS ('TS 123', '162/163');
$skupiny[] = $mimor = new TS('mimořádný oběh');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$mimor->obeh(new Obeh(['1' => ['1', '2']], [], [], ['1' => '', '2' => ''], []));

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>