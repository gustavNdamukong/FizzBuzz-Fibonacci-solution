
# FizzBuzz

    Create a loop that will print all the numbers for the range, 1-20. If the number is: divisible by 3, print 'Fizz' if it is divisible by 5, print 'Buzz'
    if it is divisible by 3 and 5, 'FizzBuzz'
    otherwise print the number.

    The output of calling the FizzBuzz class in my solution produces the following output:

    1
    2
    Fizz
    4
    Buzz
    Fizz
    7
    8
    Fizz
    Buzz
    11
    Fizz
    13
    14
    FizzBuzz
    16
    17
    Fizz
    19
    Buzz


# Fibonacci Solution

    A PHP solution to generate a series of numbers in the fibonacci number pattern. My solution is a function that uses a recursive approach to get the result.

    Because this Fibonacci function uses recursion, to use it, we must initialise a counter and use a loop to increment the counter value to that is passed as the
    nth value to the function. We use a for Loop to increment this counter number and call the Fibonacci function at every iteration.

    For example, you would call the function like so:
        ```
        $num =10;
        for($counter = 0; $counter < $num; $counter++)
        {
            echo Fibonacci($counter).' ';
        }
        ```

    This will print out: 0 1 1 2 3 5 8 13 21 34