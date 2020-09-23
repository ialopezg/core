# Core Libraries and Functions

[![Total Downloads](https://img.shields.io/packagist/dt/ialopezg/core.svg?style=flat-square)](https://packagist.org/packages/ialopezg/core)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

Core utilities and base libraries for PHP.

**Table of Contents**

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage instructions](#usage-instructions)
    - [IteratorObject](#iteratorobject)
- [License](#license)

## Features

* **IteratorObject** for manipulation iterator or array objects.

## Requirements

* PHP 5.6+

## Installation

1. Package manager

**Composer**
```shell script
composer require ialopezg/core
```

2. Manually
**Github**
```shell script
git clone https://github.com/ialopezg/core
```


## Usage instructions

### IteratorObject

```php
$array = IteratorObjet::toArray([
    'log_path' => 'logs',
    'default_view' => 'Home'
]);

var_dump($array);
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

This project is under the MIT license. For more information see [LICENSE](LICENSE).
