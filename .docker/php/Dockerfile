FROM php:8.0.0alpha2-fpm

RUN apt -y update
RUN apt -y upgrade
RUN apt -y autoremove

RUN docker-php-ext-install \
    pdo_mysql
