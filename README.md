# Binary Explode

This package provides two functions usable to convert a number into an array of it's binary components.

Examples:

1. \[1]
2. \[2]
3. \[2, 1]
4. \[4]
5. \[4, 1]
6. \[4, 2]
7. \[4, 2, 1]

etc

## Methods Provided

### binary_explode(int $number) : number[]

Uses a linear algorithm that checks the logical AND of the number with increasing powers of 2.

This algorithm is typically fastest for numbers that are unlikely to be a power of 2.

### binary_explode_log(int $number) : number[]

Uses a linear algorithm that checks the log(base 2) of the number and then it's remainders.

This algorithm is typically fastest for numbers that are likely to be a power of 2.