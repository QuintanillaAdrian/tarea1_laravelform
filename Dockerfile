# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y libpng-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql gd

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Copiar primero composer.json y composer.lock para aprovechar la caché de Docker
COPY composer.json composer.lock /var/www/html/

# Copiar todo el contenido de laravel_hosting al contenedor
COPY . /var/www/html/

# Instalar dependencias de Laravel
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --optimize-autoloader

# Dar permisos a la carpeta de almacenamiento, cache y base de datos
RUN chmod -R 777 storage bootstrap/cache

RUN chmod -R 777 /var/www/html/database/database.sqlite
       
# Habilitar mod_rewrite y headers en Apache
RUN a2enmod rewrite headers

# Exponer el puerto de Apache
EXPOSE 80

# Comando de inicio
CMD ["apache2-foreground"]
