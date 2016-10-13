# Unit Test

## Dependencies

- PHP5.5+

## Setup

```sh
$ php composer.phar install
$ php -S localhost:8080
$ vendor/bin/phpunit tests/calc.test.php
```

---

## Menu

### calc(int $a, int $b)

> 単純な足し算を行う関数

1. phpunitを走らせてみる
1. 第二引数に何も入っていなかったら、第一引数を返して欲しい（`assetEquals()`）
1. 第一引数に何も入っていなかったら、エラーを返して欲しい（`expectException()`）
1. 返り値はIntであって欲しい
1. 引数がIntではなかった時、エラーを返してほしい（`expectException()`）
1. 第三引数が設定されてたら、エラーを返して欲しい

### calc(int $a, int $b, string $op)

> 第三引数にオペレーターを設定できて、四則演算が可能に

1. 第三引数が設定されていても、エラー返しちゃ駄目（前のテストにひっかかる）
1. 第三引数が`sum`の場合、加算の結果を返す
1. 第三引数が設定されていなかったら、加算の結果を返す
1. 第三引数が`sub`の場合、減算の結果を返す
1. 第三引数が`mul`の場合、乗算の結果を返す
1. 第三引数が`div`の場合、除算の結果を返す
1. 第三引数が、`sum`、`sub`、`mul`、`div`のどれでもない場合、加算の結果を返す
1. 第四引数が設定されていたら、エラーを返す

> 突然、冪乗を計算したくなる

1. 第三引数が、`exp`だった場合、`a^b`を返す（前のテストに引っかかる）

> CircleCIについて

1. `circle.yml`を作成する

---

## Links

- [PHPUnitTestにおける例外処理のテスト \- Qiita](http://qiita.com/cufh/items/7f0e8aa661ceb6949622)