Write a program that adds the numbers 1 and 2 and prints the result twice.

To print the result twice, you must use 2 functions that take the numbers as arguments.
You must name your functions `noStrictFunction` and `strictFunction`.

The `strictFunction` must use the scalar type hint `int` for the 2 arguments whereas the `noStrictFunction` must not.

Your output must be as following:
`firstResult`
`secondResult`

----------------------------------------------------------------------
## HINTS

You can use "echo" to print the result.

To jump from one line to another, you can use 
`echo "\n"`.

To use the scalar type hint, you can do as following with a string value for instance :
```php
function speak(string $message) 
{
    echo $message;
}

speak();
```

Documentation on the `scalar type declarations` can be found by pointing your browser here:
  [http://php.net/manual/en/migration70.new-features.php]()

----------------------------------------------------------------------
