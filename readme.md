### PHP Unit Testing
```php
composer require --dev phpunit/phpunit ^9
// You can specify phpunit version by using ^7/8 or any other
// for latest version use 
composer require --dev phpunit/phpunit
// check all available version from below link
```

[phpunit.de](https://phpunit.de/getting-started/phpunit-9.html)

```php
alias phpunit="./vendor/bin/phpunit" 
/* set shortcut command "phpunit" for mack & linux */
```

```php
// Just make a tests directory under project folder and put all your test files there
<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
// Make sure you need to add prefix "test" to test method name otherwise it will not run
    public function testTwoPlusTwoEqualFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
    
 // Alternative way of writing above test method without test prefix
//  Just use a dock block @test this tell phpunit to run this test method

    /**
    * test
    */
    public function TwoPlusTwoEqualFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
}

// For run above test case use below command
//here phpunit is an alias for ./vendor/bin/phpunit
//If your alias not set properly you can run it by "./vendor/bin/phpunit tests/ExampleTest.php"
```
<code>phpunit tests/ExampleTest.php</code>
