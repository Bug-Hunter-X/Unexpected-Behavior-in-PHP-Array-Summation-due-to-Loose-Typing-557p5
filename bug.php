```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0 //Correct Behavior

$numbers = [1, 2, 'a', 4, 5];
echo calculateSum($numbers); // Output: 12  //Incorrect Behavior: PHP will treat 'a' as 0

$numbers = [1, 2, null, 4, 5];
echo calculateSum($numbers); // Output: 12 //Incorrect Behavior: PHP will treat null as 0
```