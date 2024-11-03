# Datei: hello-world-php/Dockerfile (docbuc/hello-world-php)
From php:8-apache
ENV TZ="Europe/Berlin"
COPY index.php /var/www/html
