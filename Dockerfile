FROM php:7-apache
RUN apt-get update
RUN docker-php-ext-install pdo_mysql mbstring && a2enmod rewrite
RUN apt-get update && apt-get install -y zlib1g-dev && docker-php-ext-install zip
RUN echo 'error_reporting = E_ALL' >> /usr/local/etc/php/conf.d/99_myconf.ini
RUN echo 'date.timezone = Asia/Tokyo' >> /usr/local/etc/php/conf.d/99_myconf.ini
