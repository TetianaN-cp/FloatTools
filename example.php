<?php
require_once 'FloatTools.php';

$ft = new FloatTools();

// Comparison with tolerance
echo "Comparing 0.1 + 0.2 to 0.3:\n";
if ($ft->isEqual(0.1 + 0.2, 0.3)) {
    echo "Equal within tolerance\n";
} else {
    echo "Not equal\n";
}

// Rounding example
echo "Rounding 3.14159 to 2 decimal places:\n";
echo $ft->round(3.14159, 2) . "\n"; // 3.14

// Normalization example
echo "Normalizing 75 in range 0–100:\n";
echo $ft->normalize(75, 0, 100) . "\n"; // 0.75

// Logging example
echo "Logging comparison:\n";
$ft->logComparison(0.1 + 0.2, 0.3, 'Sum comparison');

