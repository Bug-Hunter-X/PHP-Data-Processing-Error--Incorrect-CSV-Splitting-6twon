# PHP Data Processing Bug: Incorrect CSV Splitting

This repository demonstrates a common error in PHP data processing: incorrect splitting of comma-separated values (CSV) data. The provided `processData` function uses `explode(',', $value)` to split strings, which fails if commas appear within quoted fields in a CSV string.

The `bug.php` file contains the erroneous code, while `bugSolution.php` offers a corrected version using a proper CSV parsing library or a more robust string manipulation technique.

## Bug Description
The `processData` function recursively processes an array, attempting to split string values containing commas into arrays.  However, its use of `explode()` is flawed because it doesn't handle commas embedded within quoted strings (e.g., "quoted,comma"). This leads to incorrect data splitting and potential data corruption.

## Solution
The recommended solution involves using a dedicated CSV parsing library to handle the complexities of CSV data correctly or writing custom code that can carefully handle quoted strings.