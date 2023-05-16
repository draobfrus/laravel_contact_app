# Docker HubのPHPの公式イメージを指定
FROM php:8.1.18-fpm

# コンテナのタイムゾーンを指定
ENV TZ Asia/Tokyo

# インストール可能なパッケージの一覧を更新
RUN apt-get update && \
  # npmコマンドが使えるようにする
  curl -sL https://deb.nodesource.com/setup_14.x | bash - && \
  # Laravel開発に必要なパッケージをインストール
  apt-get install -y git unzip libzip-dev libicu-dev libonig-dev nodejs && \
  # Laravel開発に必要なPHPの拡張ライブラリをインストール
  docker-php-ext-install intl pdo_mysql zip bcmath

# ローカルで作成したphp.iniをDockerコンテナ内へコピー
COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

# 「マルチステージビルド」という方法でComposerをインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer

# これ以降、書かれたコマンドはWORKDIRで指定したディレクトリ内で実行する
WORKDIR /app
