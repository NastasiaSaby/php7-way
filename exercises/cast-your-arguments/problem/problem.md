Write a program that adds the 2 first command-line arguments and writes the result.

You must use 2 functions that take the 2 first command-line arguments as arguments.
You must name your functions "noStrictFunction" and "strictFunction".

The "noStrictFunction" must use the scalar type hint "int" whereas the "strictFunction" must not.

Your output must be as following:
firstResult
secondResult

----------------------------------------------------------------------
## HINTS

You can access command-line arguments via the global `$argv` array.
Note that the first element of `$argv` is always the name of the executed script.
To get the first argument given to the executed script, you must use $argv[1];

You have to cast the string elements from `$argv` array to int elements.
To do that, you can use (int).

Documentation on the `type casting` can be found by pointing your browser here:
   
  [http://php.net/manual/en/language.types.type-juggling.php]()

----------------------------------------------------------------------
