```php
<?php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, ',') !== false) {
      // Incorrect split: will fail if comma is within a quoted string
      $data[$key] = explode(',', $value);
    }
  }
  return $data;
}

$data = [
  'name' => 'John Doe',
  'address' => '123 Main St, Anytown, CA 91234',
  'phone' => '555-123-4567',
  'email' => 'john.doe@example.com',
  'details' => [
    'city' => 'Anytown',
    'state' => 'CA',
    'zip' => '91234',
  ],
];

$processedData = processData($data);
print_r($processedData);
?>
```