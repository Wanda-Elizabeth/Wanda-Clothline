FROM php:8.1-fpm-alpine

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql


