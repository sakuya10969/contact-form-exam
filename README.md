お問い合わせフォーム


環境構築

Dockerビルド

1.git clone git@github.com:coachtech-material/laravel-docker-template.git

2.docker-compose up -d --build <br><br>


Laravel環境構築

1.docker-compose exec php bash

2.composer install

3.env.exampleファイルから.envを作成し、環境変数を変更

4.php artisan key:generate

5.php artisan make:model Category -m

6.php artisan make:model Contact -m

7.php artisan migrate

8.php artisan make:seeder CategoriesTableSeeder 

9.php artisan make:seeder ContactsTableSeeder

10.php artisan db:seed <br><br>


使用技術

1.PHP 8.3.2

2.Larave 8.83.8

3.mysql 8.0.26 <br><br>

URL

開発環境 : http://localhost/

phpMyAdmin : http://localhost:8080/
