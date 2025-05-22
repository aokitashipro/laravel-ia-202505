ダウンロードして起動させる場合

1. .env.exampleを.envにコピー

cp .env.example .env

2. vendorフォルダ作成

composer update


3. キー作成

php artisan key:generate


4. .envにデータベースの情報を記入

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=laravel_sample

DB_USERNAME=laravel_user

DB_PASSWORD=password123


5. データベース接続・テーブル作成

php artisan migrate

6. 簡易サーバー起動

php artisan serve