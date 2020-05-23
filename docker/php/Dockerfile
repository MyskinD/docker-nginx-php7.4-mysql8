FROM php:7.4-fpm-alpine

MAINTAINER myskin.by <myskin.dmitry@gmail.com>

ENV TZ=Europe/Minsk

RUN apk add --update --no-cache \
    tzdata \
    zip \
    autoconf \
    g++ \
    make \
    icu-libs \
    alpine-sdk \
    git \
    curl \
    ca-certificates \
 && pecl install redis \
 && docker-php-ext-enable redis \
 && docker-php-ext-install bcmath \
 && docker-php-ext-install pdo_mysql \
 && echo "date.timezone=$TZ" > "$PHP_INI_DIR/conf.d/date-time-zone.ini" \
 && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html