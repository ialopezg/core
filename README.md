<h1 style="text-align: center;">Core Libraries and Functions</h1>

<p style="text-align: center;">
    <a href="https://github.com/ialopezg/core/releases"><img alt="Version" src="https://img.shields.io/github/release/ialopezg/core.svg?label=version&color=green"></a>
    <a href="https://github.com/ialopezg/core/blob/master/LICENSE"><img src="https://img.shields.io/badge/license-MIT-blue.svg?color=green" alt="License"></a>
    <a href="https://github.com/ialopezg/core"><img src="https://img.shields.io/github/downloads/ialopezg/core/total.svg?color=green" alt="Total downloads"></a>
</p>

Core utilities and base libraries for PHP.

**Table of Contents**

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage instructions](#usage-instructions)
- [License](#license)

## Features

| Library | Description |
|---|---|
| <a href="#iteratorobject">`Iterator`</a> | Library for array or iterable objects manipulation. |

## Requirements

* PHP 5.6+

## Installation

1. Package manager
    - Composer
        ```shell script
        composer require ialopezg/core
        ```

2. Manually
    - **Github**
        ```shell script
        git clone https://github.com/ialopezg/core
        ```
      
## Usage instructions

### IteratorObject

### Methods

| Method | Description |
|---|---|
| <a href="#iterator_toArray">`toArray()`</a> | Copy the iterator into an array. |

#### Methods Details

##### <a name="iterator_toArray"></a> Method: `toArray()`

```php
/**
 * Copy the iterator into an array.
 *
 * @param \Traversable|array $iterator  The iterator being copied.
 * @param bool $recursive               Recursively check all nested structures.
 *
 * @return array An array containing the elements of the iterator.
 */
 public static function toArray($iterator, $recursive = true): array
```

**Examples**

```php
$array = IteratorObject::toArray([
    'movies' => [
        'the_thin_red_line' => [
            'title' => 'The Thin Red Line',
            'directed_by' => 'Terrence Malick',
            'produced_by' => 'Robert Michael, Geisler Grant Hill, John Roberdeau',
            'decription' => 'Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.'
        ]
    ]
]);
```

For more examples or options, see [examples](examples) directory. For live examples, run:

```shell script
### linux bash
./server.sh
``` 
or
```shell script
### windows prompt
server.bat
``` 

## License

This project is under the MIT license. For more information see [LICENSE](https://github.com/ialopezg/core/blob/master/LICENSE).
Copyright (c) [Isidro A. López G.](https://ialopezg.com/)
