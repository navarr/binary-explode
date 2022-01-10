# Binary Exploders
[![Latest Stable Version](http://poser.pugx.org/navarr/binary-explode/v)](https://packagist.org/packages/navarr/binary-explode)
[![Total Downloads](http://poser.pugx.org/navarr/binary-explode/downloads)](https://packagist.org/packages/navarr/binary-explode)
[![Latest Unstable Version](http://poser.pugx.org/navarr/binary-explode/v/unstable)](https://packagist.org/packages/navarr/binary-explode)
[![License](http://poser.pugx.org/navarr/binary-explode/license)](https://packagist.org/packages/navarr/binary-explode)  
![Tests](https://github.com/navarr/binary-explode/actions/workflows/commit.yml/badge.svg)
![Code Coverage](https://codecov.io/gh/navarr/binary-explode/branch/master/graph/badge.svg?token=BHTKOZZDR3)
[![Mutation Score](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fnavarr%2Fbinary-explode%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/navarr/binary-explode/main)

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

## Usage

### Installation

```
composer require navarr/binary-explode`
```

### Shared Interface

This package provides a shared interface, `\Navarr\BinaryExploder\BinaryExploderInterface`.  This interface takes an `int` and returns an `iterable<int>` containing or generating the binary components of that `int`.

### \Navarr\BinaryExploder\LinearBinaryExploder::explode(int $value) : iterable<int>

Uses a linear algorithm that checks the logical AND of the number with increasing powers of 2.

This algorithm is typically fastest for numbers that are unlikely to be a power of 2.

### Navarr\BinaryExploder\LogarithmicBinaryExploder::explode(int $value) : iterable<int>

Uses a linear algorithm that checks the log(base 2) of the number and then it's remainders.

This algorithm is typically fastest for numbers that are likely to be a power of 2.
