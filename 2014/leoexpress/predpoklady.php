<?php
function predpoklad_2_LeoExpress($timestamp) {
  if (date("N", $timestamp) == 5) {
    return 3;
  } if (date("N", $timestamp) == 6) {
    return 3;
  }
  return null;
}
function predpoklad_3_LeoExpress($timestamp) {
  return 4;
}

?>
