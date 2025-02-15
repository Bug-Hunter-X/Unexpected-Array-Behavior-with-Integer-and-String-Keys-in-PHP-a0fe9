```php
<?php
function incrementArrayValue(array &$arr, int $index): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if the index doesn't exist
  }
  $arr[$index]++;
}

$myArray = [];
incrementArrayValue($myArray, 5);
echo $myArray[5]; // Outputs 1

incrementArrayValue($myArray, 5);
echo $myArray[5]; // Outputs 2

// Solution: Ensure consistent key type usage
// If you need string keys, treat all indexes as strings
//If you need numerical indexes treat all indexes as integers
$myArray2 = [];
$myArray2['5'] = 0;
$myArray2['5']++;
echo $myArray2['5']; //Outputs 1
?>
```