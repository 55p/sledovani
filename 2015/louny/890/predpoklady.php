<?php
function predpoklad_1_TS890 ($timestamp) {
  return 2;
}

function predpoklad_2_TS890 ($timestamp) {
  return 3;
}

function predpoklad_3_TS890 ($timestamp) {
  return 4;
}

function predpoklad_4_TS890 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    //v patek prechazi na 5. TD
    return 5;
  }
  if (date("N", $timestamp) == 6) {
    return 12;
  } elseif (jeT_timestamp($timestamp)) {
    return 12;
  }
  return 5; //IDDQD
  return 11;
}

function predpoklad_5_TS890 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    return 5  ;
  } elseif (jeT_timestamp($timestamp)) {
    return 5;
  }
  return 6;
}

function predpoklad_6_TS890 ($timestamp) {
  return 7;
}

function predpoklad_7_TS890 ($timestamp) {
  return 8;
}

function predpoklad_8_TS890 ($timestamp) {
  return 9;
}

function predpoklad_9_TS890 ($timestamp) {
  return 10;
}

function predpoklad_10_TS890 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    //v patek prechazi na 11. TD
    return 11;
  }
  if (date("N", $timestamp) == 6) {
    return 6;
  } elseif (jeT_timestamp($timestamp)) {
    return 6;
  }
  return 11; //IDDQD
  return 5;
}

function predpoklad_11_TS890 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    return 11;
  } elseif (jeT_timestamp($timestamp)) {
    return 11;
  }
  return 12;
}

function predpoklad_12_TS890 ($timestamp) {
  return 13;
}

function predpoklad_13_TS890 ($timestamp) {
  //fiktivni den pro odstraneni predpokladu v jinych dnech na vlaky, co presly mimoradne do 12. TD
  return 13;
}

?>
