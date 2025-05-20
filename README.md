# Böhm-Jacopini Counter (BJC)

Count sequence, selection, iteration structures for code analysis

The Böhm-Jacopini Counter (BJC) is a metric that measures the structural composition of code based on the Structured Program Theorem.
This theorem states that any algorithm can be constructed using only three control structures:

* **Sequence:** A series of statements executed in order.
* **Selection:** Decision-making structures (e.g., `if`, `else`, `switch`).
* **Repetition:** Looping structures (e.g., `for`, `while`).

The BJC provides a tuple `(s, e, i)` representing the count of sequence blocks (`s`), selection constructs (`e`), and iteration constructs (`i`) in a given piece of code.

**Example Output**

For the following PHP function:

```php
function factorial(int $n): float|false
{
  if ($n < 0) {
    $result = false;
  } else {
    $result = 1.0;
    for ($i = 1; $i <= $n; $i++) {
      $result *= $i;
    }
  }

  return $result;
}
```

A BJC analysis would yield the following output:

```
Array
(
    [sequence] => 6
    [selection] => 1
    [repetition] => 1
)
```

This indicates that the function contains 6 sequence blocks, 1 selection constructs (if), and 1 repetition construct (the `for` loop).
