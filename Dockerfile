FROM php:8.3-fpm

# Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libwebp-dev \
    git \
    libzip-dev \
    zip \
    unzip \
    libmariadb-dev \
    libxslt1-dev \
    tesseract-ocr \
    libtesseract-dev \
    && rm -rf /var/lib/apt/lists/*

# Configurer et installer les extensions PHP
RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
    --with-webp \
    && docker-php-ext-install \
        gd \
        pdo \
        pdo_mysql \
        session \
        zip \
        xsl

# Memory limit
RUN echo "memory_limit=512M" \
    > /usr/local/etc/php/conf.d/memory-limit.ini

# Limites upload
RUN echo "upload_max_filesize=100M" \
    > /usr/local/etc/php/conf.d/upload-limit.ini \
    && echo "post_max_size=120M" \
    > /usr/local/etc/php/conf.d/post-limit.ini

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Répertoire de l'application
WORKDIR /var/www/symfony

# Copier le projet Symfony
COPY . .

# Installer les dépendances
RUN composer install