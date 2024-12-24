# PHP Array Summation Bug

This repository demonstrates a common, yet subtle, error in PHP related to loose typing and array summation.  The `bug.php` file contains a function `calculateSum` that attempts to sum the elements of an array.  However, when the array contains non-numeric values (strings or NULL), the function produces incorrect results because PHP's type handling implicitly converts these values to 0.

The `bugSolution.php` file provides a corrected version that explicitly handles type checking and error handling to prevent such issues.