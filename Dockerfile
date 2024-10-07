FROM php:7.4-apache
COPY . /var/www/html/
# Install mysqli extension
apt-get update && apt-get install -y php-mysqli

# Restart PHP to apply the changes (if necessary)
service php-fpm restart
