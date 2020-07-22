
# 映画検索サイト
 
 * 自分の好きな映画を検索することができる。
 
# 機能
 * 作品名はもちろん、ジャンルやキーワードからも検索をかけることができる。  
 * 各映画の画像をクリックすると、詳細を見ることができる。  
 * その映画のレビューを投稿することができる。  
 
# 環境
* PHP 7.3.11 
* Laravel 7.13.0

 
# インストール方法
 * PHP  
 https://www.php.net/downloads
 
 * Laravel
 1. composerのインストール
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"　
```

2. laravelのインストール
```bash
composer create-project --perfer-dist laravel/movies
```

# 作成者　
* Hikaru Sekiya



 
