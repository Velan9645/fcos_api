# Use the official PHP 7.4 image with Apache
# FROM php:7.4-apache

# Copy your application code into the container
COPY . /var/www/html/

# Install the mysqli extension
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
#     docker-php-ext-install mysqli && \
#     docker-php-ext-enable mysqli

# Expose port 80 (optional, as 80 is the default for HTTP)
EXPOSE 80
