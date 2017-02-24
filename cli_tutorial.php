<?php
  echo "Are you sure you want to do this? Type 'yes' to continue";

  $handle = fopen("php://stdin", "r");
  $line = fgets($handle);

  if(trim($line) != "yes") {
    echo "ABORTING!\n";
    exit;
  }

  echo "\n";
  echo "Thank you, continuing...\n";

  /*
  if ($argc > 1) {
    for ($i = 0; $i <= $argc - 1; ++$i) {
      if ($i === $argc - 1) {
        echo "$argv[$i]";
      } else {
        echo "$argv[$i]\n";
      }
    }

  }
 */?>
