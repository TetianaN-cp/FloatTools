
FloatTools — precision-focused float comparison and normalization for PHP. Designed for architectural clarity.

## Description

	FloatTools is a module for architecturally transparent handling of floating-point numbers in PHP. 
  It addresses issues of comparison, rounding, normalization, and logging of float values—especially in edge-case logic. 
  The module is designed for systems where predictability and control take precedence over speed.

## Features
	• 	Comparison of float values with epsilon tolerance
	• 	Architecturally clear checks for equality, greater-than, and less-than
	• 	Rounding to a specified precision
	• 	Normalization of values (e.g., mapping to a range)
	• 	Logging of operations and input data
	• 	Support for edge-case logic: ±0, NaN, INF
	• 	Extensible architecture: easy to add new methods

## Usage Examples

	require_once 'FloatTools.php';

	$ft = new FloatTools();
	// Comparison
	if ($ft->isEqual(0.1 + 0.2, 0.3)) {
		echo "Equal within tolerance";
	}

	// Rounding
	echo $ft->round(3.14159, 2); // 3.14

	// Normalization
	echo $ft->normalize(75, 0, 100); // 0.75

	// Logging
	$ft->logComparison(0.1 + 0.2, 0.3, 'Sum comparison');

## Architecture

	• All methods are independent and can be used separately
	• Internal parameters (e.g., epsilon) are overrideable
	• Logic is decoupled from output: logging can be redirected
	• Supports unit testing and extension via inheritance

## Files

	• FloatTools.php — core module  
	• README.md — documentation  
	• examples.php — usage examples and tests  
	• LICENSE — license terms (MIT)

## Installation

	Simply include the file:
	require_once 'FloatTools.php';

## Roadmap

	• 	Add methods for comparing sets of float values
	• 	Extend logging with importance levels
	• 	Integrate JSON output support for logs
	
## Author

	Tetiana N. — architect of transparent PHP solutions. 
  This module is part of a professional portfolio, focused on control, predictability, and architectural clarity.

## License
	This project is licensed under the MIT License.

