# Usa una imagen base de PHP con Composer y extensiones necesarias
FROM php:8.2-fpm

# Instala dependencias del sistema necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    zip \
    && docker-php-ext-install pdo_pgsql

# Instala Composer desde la imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos del proyecto al contenedor
COPY . .

# Establece los permisos necesarios para Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Instala dependencias de Composer
RUN composer install --optimize-autoloader --no-dev

# Exponer puerto para php-fpm
EXPOSE 9000

# Comando por defecto para php-fpm
CMD ["php-fpm"]
