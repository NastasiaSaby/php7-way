Write a program that prints the three command-line arguments each on a new line.
You must use the `yield` keyword for that.

Then, add the three command-line arguments and print the final result on a new line.
You must use the `return` keyword for that.

You must use the generators and the `array_sum` function.

Your output must be as following:
`firstArgument`
`secondArgument`
`thirdArgument`
`finalResult`

----------------------------------------------------------------------
## HINTS
To get the final result of the generator, you can do as following:
```php
function generator()
{
    yield 1;
    return "real feedback";
}
$generator = generator();
$generator->next();
$generator->next();
echo generator()->getReturn(); //real feedback
```

You can notice that to get the final result, you must finish to execute the generator.

To sum items from an array, use `array_sum`.

Documentation on the `generators` can be found by pointing your browser here:
  [http://php.net/manual/en/language.generators.syntax.php]()
  
Documentation on `array_sum` can be found by pointing your browser here:
  [http://http://php.net/manual/en/function.array-sum.php]()  

----------------------------------------------------------------------
