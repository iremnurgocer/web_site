# PHP 8.2 ve Apache'yi kullan
FROM php:8.2-apache

# public/ dizinini Apache'nin belge kökü olarak ayarla
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Apache yapılandırma dosyalarını güncelle
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}/!g' /etc/apache2/apache2.conf

# Apache'ye public/ dizinine erişim izni ver
RUN { \
    echo '<Directory "${APACHE_DOCUMENT_ROOT}">'; \
    echo 'Options Indexes FollowSymLinks'; \
    echo 'AllowOverride All'; \
    echo 'Require all granted'; \
    echo '</Directory>'; \
} >> /etc/apache2/sites-available/000-default.conf

# Apache'nin mod_rewrite modülünü etkinleştir
RUN a2enmod rewrite

# Çalışma dizini olarak /var/www/html ayarla
WORKDIR /var/www/html

# Uygulama dosyalarını konteynere kopyala
COPY . /var/www/html

# Port 80'i dışarıya aç
EXPOSE 80
