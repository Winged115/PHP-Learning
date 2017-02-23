<?php
  if ($argc === 1) {
  print "$argc argument was passed. It was: \n";
} else {
  print "$argc arguments were passed. In order: \n";
}
  for ($i = 0; $i <= $argc - 1; ++$i) {
    print "$i: $argv[$i]\n";
  }
 ?>
