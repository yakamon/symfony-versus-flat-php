FROM php:7.3-fpm

RUN apt -y update && \
    apt -y upgrade && \
    apt -y autoremove

RUN docker-php-ext-install \
    pdo_mysql
