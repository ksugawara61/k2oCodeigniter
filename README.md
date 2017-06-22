# K2oCodeigniter

## How to Test

* Preparation

```
$ cd application/tests
```

* All files

```
$ ../../vendor/bin/phpunit
PHPUnit 4.8.35 by Sebastian Bergmann and contributors.

..............

Time: 1.14 seconds, Memory: 12.00MB

OK (14 tests, 25 assertions)

Generating code coverage report in Clover XML format ... done

Generating code coverage report in HTML format ... done

```

* Only test file

```
$ ../../vendor/bin/phpunit controllers/K2o_blog_test.php
PHPUnit 4.8.35 by Sebastian Bergmann and contributors.

........

Time: 634 ms, Memory: 10.00MB

OK (8 tests, 8 assertions)

Generating code coverage report in Clover XML format ... done

Generating code coverage report in HTML format ... done

```
