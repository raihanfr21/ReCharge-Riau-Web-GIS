# Base image
FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl && \
    docker-php-ext-install zip pdo_mysql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port
EXPOSE 8080

# Start PHP-FPM
CMD ["php-fpm"]
