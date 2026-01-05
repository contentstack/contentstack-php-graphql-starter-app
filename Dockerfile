FROM php:8.5.2RC1-zts-alpine3.22 AS builder

# Install build dependencies
RUN apk update && apk upgrade \
    && apk add --no-cache \
    icu-dev \
    libzip-dev \
    zlib-dev \
    unzip \
    git \
    autoconf \
    g++ \
    make \
    && docker-php-ext-install intl zip \
    && apk del --purge \
    icu-dev \
    libzip-dev \
    zlib-dev \
    autoconf \
    g++ \
    make

# Composer (secure)
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

# Copy composer files first for better layer caching
COPY composer.json composer.lock ./

# Install dependencies (skip scripts to avoid Laravel initialization issues)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# Production stage
FROM php:8.5.2RC1-zts-alpine3.22

# Update packages and install runtime dependencies
RUN apk update && apk upgrade \
    && apk add --no-cache \
    icu-libs \
    libzip \
    zlib \
    && rm -rf /var/cache/apk/*

# Copy PHP extensions from builder
COPY --from=builder /usr/local/lib/php/extensions/ /usr/local/lib/php/extensions/
COPY --from=builder /usr/local/etc/php/conf.d/ /usr/local/etc/php/conf.d/

WORKDIR /var/www/html

# Copy vendor directory from builder
COPY --from=builder /var/www/html/vendor ./vendor

# Copy the rest of the application
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

USER www-data
EXPOSE 80

# Use PHP built-in server for testing (can be replaced with nginx+php-fpm in production)
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html/public"]
