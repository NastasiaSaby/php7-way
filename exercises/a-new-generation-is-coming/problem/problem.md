Write a program that prints the three command-line arguments in upper case, each on a new line.

You must use the generators and the `strtoupper` function.

----------------------------------------------------------------------
## HINTS

To initialize a generator, you can write a function with the `yield` keyword as following :
```php
function generator ()
{
    yield 1;
    yield 2;
}
```

To print the result of the first `yield`, you can do as following:
```php
$generator = generator();
echo $generator->current(); //1
```

To move to the second `yield`, you can do as following:
```php
$generator->next();
echo $generator->current();//2
```

You can pass arguments to a generator in the same way as a normal function :
```php
function generator($argument)
{
    yield $argument;
}
```

You can notice that the generators are not a new feature for PHP7.
But let's do some revision before seeing what is new in PHP7 with the generators.

Documentation on the `generators` can be found by pointing your browser here:
  [http://php.net/manual/en/language.generators.syntax.php]()
  
Documentation on the `strtoupper` function can be found by pointing your browser here:
  [http://php.net/manual/en/function.strtoupper.php]()

----------------------------------------------------------------------
