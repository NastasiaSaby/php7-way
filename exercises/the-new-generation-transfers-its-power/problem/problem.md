Write a program that prints the three command-line arguments in upper case, each on a new line.

You must use the generators and the `strtoupper` function.

You must use the `yield from` with a generator that uppercase the argument received. 

----------------------------------------------------------------------
## HINTS

You can use the `yield from` as following:
```php
function generatorFrom()
{
    yield 1;
}

function generator ()
{
    yield from generatorFrom();
}
```

To print the result of the first `yield from`, you can do as following:
```php
$generator = generator();
echo $generator->current(); //1
```


Documentation on the `generators` can be found by pointing your browser here:
  [http://php.net/manual/en/language.generators.syntax.php]()  

----------------------------------------------------------------------
