FROM php:8.1

# System dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy files
COPY . .

# Install dependencies
RUN composer install --no-interaction --optimize-autoloader

# Copy example env & generate key
RUN cp .env.example .env && php artisan key:generate

# Expose port
EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
