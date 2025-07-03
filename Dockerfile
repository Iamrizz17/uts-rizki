# Gunakan image PHP + Apache
FROM php:8.2-apache

# Install ekstensi yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    zip unzip curl git libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Aktifkan mod_rewrite untuk Laravel
RUN a2enmod rewrite

# Set Apache DocumentRoot ke folder 'public'
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Update konfigurasi Apache agar menggunakan DocumentRoot yang baru
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Tambahkan konfigurasi agar .htaccess dan permission tidak ditolak
RUN echo '<Directory /var/www/html/public>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' >> /etc/apache2/apache2.conf

# Copy semua file Laravel ke dalam container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependency Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permission untuk storage, cache, dan public
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public

# Expose port 80 (Apache)
EXPOSE 80
