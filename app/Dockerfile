FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    iputils-ping \
    mtr-tiny \
    && docker-php-ext-install pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

COPY app/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY app /var/www/html

EXPOSE 80

CMD service nginx start && php-fpm
