# Unit Test

> Whenever you are tempted to type something into a print statement or a debugger expression, write it as a test instead.

*何かを print 文やデバッガの式に書きたくなったときは、 代わりにその内容をテストに書くようにするんだ。*

## Dependencies

- PHP

## Setup

```sh
$ php composer.phar install
$ php -S localhost:8080
$ vendor/bin/phpunit tests/calc.test.php --colors
```

## Menu

### calc(int $a, int $b)

> 単純な足し算を行う関数

### calc(int $a, int $b, string $op)

> 第三引数にオペレーターを設定できて、四則演算が可能に

> 突然、冪乗を計算したくなる

## Links

- [PHPUnitTestにおける例外処理のテスト \- Qiita](http://qiita.com/cufh/items/7f0e8aa661ceb6949622)