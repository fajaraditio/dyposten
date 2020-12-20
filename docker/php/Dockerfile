FROM php:7.4-fpm

WORKDIR /var/www

ADD . /var/www
RUN chown -R www-data:www-data /var/www

RUN apt-get update && apt-get install -y openssl libssl-dev libcurl4-openssl-dev zip unzip
RUN docker-php-ext-install pdo pdo_mysql mysqli
# RUN pecl install mongodb
# RUN echo "extension=mongodb.so" > $PHP_INI_DIR/conf.d/ext-mongodb.ini
RUN echo "file_uploads = On" > /usr/local/etc/php/conf.d/upload.ini
RUN echo "memory_limit = 128M" > /usr/local/etc/php/conf.d/upload.ini
RUN echo "upload_max_filesize = 512M" > /usr/local/etc/php/conf.d/upload.ini
RUN echo "post_max_size = 512M" > /usr/local/etc/php/conf.d/upload.ini
RUN echo "max_execution_time = 3600" > /usr/local/etc/php/conf.d/upload.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install
