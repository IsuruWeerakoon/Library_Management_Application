FROM php:8.0-apache

RUN apt-get update -y

RUN docker-php-ext-install mysqli 

RUN docker-php-ext-enable mysqli

RUN apachectl restart

ADD . /var/www/html/.

EXPOSE 80