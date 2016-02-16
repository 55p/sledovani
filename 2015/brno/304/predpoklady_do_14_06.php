<?php

function predpoklad_1_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 1;
  }
  return 2;
}
function predpoklad_2_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 2;
  }
  return 3;
}
function predpoklad_3_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 12;
  }
  return 4;
}
function predpoklad_4_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 4;
  }
  return 5;
}

function predpoklad_5_TS304 ($timestamp) {
  return null;
}

function predpoklad_6_TS304 ($timestamp) {
  return null;
}
function predpoklad_7_TS304 ($timestamp) {
  return 8;
}
function predpoklad_8_TS304 ($timestamp) {
  return 9;
}
function predpoklad_9_TS304 ($timestamp) {
  return 10;
}
function predpoklad_10_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 7;
  }
  return 11;
}
function predpoklad_11_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 11;
  }
  return 12;
}
function predpoklad_12_TS304 ($timestamp) {
  return 13;
}
function predpoklad_13_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 15;
  }
  return 14;
}
function predpoklad_14_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 14;
  }
  return 15;
}

function predpoklad_15_TS304 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 3;
  }
  return null;
}


//*/
function predpoklad_1_TS305 ($timestamp) {
  return 2;
}
function predpoklad_2_TS305 ($timestamp) {
  return 3;
}
function predpoklad_3_TS305 ($timestamp) {
  return 1;
}
/*
function predpoklad_4_TS305 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 6;
  }
  return 5;
}
function predpoklad_5_TS305 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    //v patek
    return 6;
  }
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 5;
  }
  return 1;
}
function predpoklad_6_TS305 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    //v patek
    return 1;
  }
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 1;
  }
  return 6;
}
*/


function predpoklad_1_TS306 ($timestamp) {
  return 2;
}
function predpoklad_2_TS306 ($timestamp) {
  return 3;
}
function predpoklad_3_TS306 ($timestamp) {
  if (date("N", $timestamp) >= 6) {
    //v sobotu a nedeli
    return null;
    //return 1;
  }
  return 4;
}
function predpoklad_4_TS306 ($timestamp) {
  return 5;
}
function predpoklad_5_TS306 ($timestamp) {
  return 6;
}
function predpoklad_6_TS306 ($timestamp) {
  return 7;
}

function predpoklad_7_TS306 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 4;
  }
  return 8;
}

function predpoklad_8_TS306 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 8;
  }
  if (date("N", $timestamp) == 7) {
    //v sobotu
    return 4;
  }
  return null;
  //return 1;
}

?>
