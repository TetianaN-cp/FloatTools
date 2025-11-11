<?php

class FloatTools
{
    /**
     * Checks if a float value exists in an array within a given tolerance.
     */
    public static function inArray(float $needle, array $haystack, float $epsilon = 0.0001): bool
    {
        foreach ($haystack as $value) {
            if (is_numeric($value) && abs($needle - (float)$value) < $epsilon) {
                return true;
            }
        }
        return false;
    }

    /**
     * Searches for the key of a float value in an array within a given tolerance.
     */
    public static function search(float $needle, array $haystack, float $epsilon = 0.0001): int|false
    {
        foreach ($haystack as $key => $value) {
            if (is_numeric($value) && abs($needle - (float)$value) < $epsilon) {
                return $key;
            }
        }
        return false;
    }

    /**
     * Compares two float values within a given tolerance.
     */
    public static function equals(float $a, float $b, float $epsilon = 0.0001): bool
    {
        return abs($a - $b) < $epsilon;
    }

    /**
     * Logs the comparison of two float values with their difference and match status.
     */
    public static function logComparison(float $a, float $b, float $epsilon = 0.0001): void
    {
        $diff = abs($a - $b);
        echo "Compare: $a vs $b | Difference: $diff | Match: " . ($diff < $epsilon ? 'Yes' : 'No') . "\n";
    }

    /**
     * Rounds a float value to the specified precision.
     */
    public static function roundTo(float $value, int $precision = 2): float
    {
        return round($value, $precision);
    }

    /**
     * Rounds all float values in an array to the specified precision.
     */
    public static function normalizeArray(array $values, int $precision = 2): array
    {
        return array_map(fn($v) => round((float)$v, $precision), $values);
    }

    /**
     * Compares two arrays of float values and returns matching elements within a given tolerance.
     */
    public static function compareSet(array $setA, array $setB, float $epsilon = 0.0001): array
    {
        $matches = [];
        foreach ($setA as $a) {
            foreach ($setB as $b) {
                if (abs($a - $b) < $epsilon) {
                    $matches[] = $a;
                    break;
                }
            }
        }
        return $matches;
    }
}
