# Unit Test

## Dependencies

- PHP

## Setup

```sh
$ php composer.phar install
$ php -S localhost:8080
$ vendor/bin/phpunit tests/calc.test.php
```

## Menu

### calc(int $a, int $b)

> 単純な足し算を行う関数

1. phpunitを走らせてみる
1. 第二引数に何も入っていなかったら、第一引数を返して欲しい（`assetEquals()`）

