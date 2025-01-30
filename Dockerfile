# Usar la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Copiar el código del proyecto dentro del servidor web
COPY . /var/www/html/

# Exponer el puerto 80 para servir la aplicación
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]