FROM php:7.4-apache

RUN apt-get update
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli pdo pdo_mysql

COPY index.php /var/www/html/index.php
COPY webapp-config.yaml /var/www/html/webapp-config.yaml
COPY webapp-secret.yaml /var/www/html/webapp-secret.yaml