```php
<?php
function incrementArrayValue(array &$arr, int $index): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if the index doesn't exist
  }
  $arr[$index]++;
}

$myArray = [];
incrementArrayValue($myArray, 5); //This works fine
echo $myArray[5]; //Outputs 1

incrementArrayValue($myArray, 5); //This works fine
echo $myArray[5]; //Outputs 2

incrementArrayValue($myArray, '5'); //This gives an error
echo $myArray['5'];
?>
```