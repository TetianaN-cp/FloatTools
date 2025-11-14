<?php
require_once 'vendor/autoload.php';

$ft = new FloatTools();

// Checks if a float value exists in an array
echo "Checking if 100.1 is in array [0.2, 0.1, 100.1]:<br>";
echo $ft->inArray(100.1, [0.2, 0.1, 100.1]) ? 'Found' : 'Not found';
echo "<br><br>"; // Found


// Searches for the key of a float value in an array
echo "Searching for 0.1 in array [0.2, 0.1, 100.1]:<br>";
echo "Key: " . $ft->search(0.1, [0.2, 0.1, 100.1]);
echo "<br><br>"; // Key: 1


// Comparison with tolerance
echo "Comparing 0.1 + 0.2 to 0.3:<br>";
if ($ft->equals(0.1 + 0.2, 0.3)) {
    echo "Equal within tolerance";
} else {
    echo "Not equal<br><br>";
}
echo "<br><br>";

// Rounding example
echo "Rounding 3.14159 to 2 decimal places:<br>";
echo $ft->roundTo(3.14159, 2); // 3.14
echo "<br><br>";

// Rounds all float values in an array to the specified precision
echo "Normalizing array [0.00002, 0.999, 100.1]:<pre>";
print_r($ft->normalizeArray([0.00002, 0.999, 100.1]));
echo "</pre>";

// Logging example
echo "Logging comparison:<br>";
$ft->logComparison(0.1 + 0.2, 0.3, 0.0002);


