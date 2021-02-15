# Query Parsing
A PHP Query Parsing library


## Installation

Use Composer to install the library with this command :

`composer require sikessem/parsing-query`


## Usage

Example : `test.php`

```php
<?php
use Ske\Parsing\Query\{QueryParsable};

require_once __DIR__ . "/autoload.php";

$query = (new QueryParsable('user=sikessem&name=query-parsing'))->parse();
echo $query->user; // Show "sikessem"
