FROM php:8.2-fpm

# Install system dependencies + PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer from the official image
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

# Copy only composer files first (cache)
COPY composer.json composer.lock ./

# Install dependencies
RUN composer install --no-scripts --no-autoloader

# Now copy all files
COPY . .

# Generate optimized autoloader
RUN composer dump-autoload

CMD ["php-fpm"]

