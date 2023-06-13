# Use the official PHP image as the base image
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the PHP files to the working directory
COPY . /var/www/html

# Install dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache modules 
RUN a2enmod


# Expose port 80 for Apache
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]