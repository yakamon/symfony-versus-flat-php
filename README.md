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

# DB 関連

- Create "post" table

```sql
CREATE TABLE post (
  id BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  title VARCHAR(100),
  body TEXT,
  created_at DATETIME
)
```

- Insert "post"s

```sql
INSERT INTO post (title, body, created_at) VALUES
("titleA", "bodyA", "2020-07-23 10:00:00"),
("titleB", "bodyB", "2020-07-23 10:00:10"),
("titleC", "bodyC", "2020-07-23 10:00:20"),
("titleD", "bodyD", "2020-07-23 10:00:30"),
("titleE", "bodyE", "2020-07-23 10:00:40"),
("titleF", "bodyF", "2020-07-23 10:00:50"),
```

# 環境構築作業ログ

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
