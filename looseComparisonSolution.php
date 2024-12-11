<?php
function compareValues($val1, $val2) {
  if ($val1 === $val2) { // Strict comparison
    return 'Values are strictly equal.';
  } else {
    return 'Values are not strictly equal.';
  }
}

$result1 = compareValues(0, '0'); //Correctly identifies as not strictly equal
$result2 = compareValues(0, false); //Correctly identifies as not strictly equal

echo "Result 1: " . $result1 . "\n";
echo "Result 2: " . $result2 . "\n";
?> 