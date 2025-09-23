# このリポジトリ is 何
このリポジトリはPHPUnitのテストコードの練習用リポジトリです。  
FizzBuzzのクラスとテストコードを内蔵しているので、すぐにテストができます。

# 環境
PHP : 8.3

# ファイル構成
**src** : クラスやコードを格納しています。
- FizzBuzz.php : FizzBuzzをクラス化したもの。  
- run.php : FizzBuzz.phpの実行してダンプするだけのもの。  

**test** : テストコードを格納しています。
- FizzBuzzTest.php : FizzBuzz.phpのテストコード

# 環境構築
1. `git clone`します。
2. `docker compose up -d`でコンテナを立ち上げます。
3. `docker compose exec phpunit composer install`でPHPUnitをインストールします。
4. `docker exec -it phpunit bash`でコンテナの中に入ります。
5. `docker exec phpunit vendor/bin/phpunit test/CalculatorTest.php`でテストが行われることを確認します。
6. あとはテストコードを編集したり、新しいクラスなどを作って自由にテストしてみてください！

おまけ  
`docker exec -it phpunit bash`でコンテナの中に入ることが出来ます。
