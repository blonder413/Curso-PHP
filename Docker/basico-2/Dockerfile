FROM php:8.4.3-apache-bullseye

# Instalar extensiones
RUN apt-get update \
    && apt-get install -y php-gd php-intl php-zip php-curl php-xml php-soap php-ldap \
    && apt-get clean

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install gd
RUN docker-php-ext-install intl
RUN docker-php-ext-install ldap
RUN docker-php-ext-install soap