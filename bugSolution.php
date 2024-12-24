```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle non-numeric values appropriately (e.g., throw exception or return error)
      trigger_error("Non-numeric value encountered in array.", E_USER_WARNING);
      return 0; // or throw new Exception('Invalid input');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = [1, 2, 'a', 4, 5];
echo calculateSum($numbers); // Output: Warning: Non-numeric value encountered in array.
                                 //          0

$numbers = [1, 2, null, 4, 5];
echo calculateSum($numbers); // Output: Warning: Non-numeric value encountered in array.
                                 //          0
```