# symfony-versus-flat-php

Symfony versus flat PHP Hands-on

# ディレクトリ構成

```
ROOT/
|- .docker/
|   |- mysql/
|   |   |_ data/
|   |
|   |- nginx/
|   |   |- conf/
|   |   |   |_ default.conf
|   |   |_ Dockerfile
|   |
|   |_ php/
|       |_ Dockerfile
|
|_ docker-compose.yml
|_ src/
```

# 作業手順

- ディレクトリ構成を作った
  - .docker/
  - docker-compose.yml
  - src/
- ドメインを買った
- Google Cloud DNS でネームサーバーを設定した
- Dockerfile を書いた
  - nginx
  - php-fpm
    - pdo_mysql をインストールした
  - mysql
- docker-compose.yml を書いた
- nginx の設定ファイルを書いた
  - 普段どおり php-fpm との連携周りで迷った
  - mkcert で SSL 証明書を発行した
  - SSL 設定で迷った
