[![Build Status](https://travis-ci.com/ulrack/identifier.svg?branch=master)](https://travis-ci.com/ulrack/identifier)

# Ulrack Identifier

This package contains a few algorithms to generate unique identifiers. 

## Installation

To install the package run the following command:

```
composer require ulrack/identifier
```

## Usage

All identifier generators implement `Ulrack\Identifier\Common\IdGeneratorInterface`.

### [UlidGenerator](src/Component/UlidGenerator.php)

The ULID generator generates identifiers based on the ULID algorithms.

### [UlidPidGenerator](src/Component/UlidPidGenerator.php)

The ULID PID generator expands upon the UlidGenerator to create a more
unique identifier. It adds 4 additional characters to the ULID based 
on the PID assigned to the executing PHP process. This excludes (the
extremely unlikely) possibility of a matching ID being generated
between in 2 separate PHP processes which simultaneously generate an
ID.

### [RandomByteIdGenerator](src/Component/RandomByteIdGenerator.php)

The random bye ID generator generates an identifier based on a set amount of 
random bytes which get converted to their hexadecimal counterpart.
This generator can be instantiated with the number of bytes that should be used.
The number of bytes times two will be the resulting identifier length.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## MIT License

Copyright (c) 2019 Jyxon

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
