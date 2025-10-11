FROM php:8.5.0RC2-apache

RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install --fix-missing -y libpq-dev \
    && apt-get install --no-install-recommends -y libpq-dev \
    && apt-get install -y libxml2-dev libbz2-dev zlib1g-dev \ 
    && apt-get -y install libsqlite3-dev libsqlite3-0 mariadb-client curl exif ftp \
    && apt-get -y install --fix-missing zip unzip

RUN docker-php-ext-install intl 

# Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer \
    && composer self-update

RUN apt-get clean \
    && rm -r /var/lib/apt/lists/*

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf    

USER www-data
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html/

COPY --chown=www-data:www-data . . 