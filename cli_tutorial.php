<?php
  if ($argc > 1) {
    for ($i = 0; $i <= $argc - 1; ++$i) {
      if ($i === $argc - 1) {
        echo "$argv[$i]";
      } else {
        echo "$argv[$i]\n";
      }
    }

  }
 ?>
