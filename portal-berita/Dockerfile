FROM php:7.4-apache

WORKDIR /var/www/html

COPY . /var/www/html

RUN apt-get update && \
    apt-get install -y libzip-dev zip && \
    docker-php-ext-install pdo_mysql zip

RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
