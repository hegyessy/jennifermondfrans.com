# Use latest offical ubuntu image
FROM ubuntu:latest

# Set timezone environment variable
ENV TZ=America/Los_Angeles

# Set geographic area using above variable
# This is necessary, otherwise building the image doesn't work
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Remove annoying messages during package installation
ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get install software-properties-common
RUN dpkg -l | grep php | tee packages.txt
RUN add-apt-repository -y ppa:ondrej/php

# Install packages: web server Apache, PHP and extensions
RUN apt-get update && apt-get install --no-install-recommends -y \
  apache2 \
  apache2-utils \
  ca-certificates \
  git \
  php8.2 \
  libapache2-mod-php8.2 \
  php8.2-curl \
  php8.2-dom \
  php8.2-gd \
  php8.2-intl \
  php8.2-json \
  php8.2-mbstring \
  php8.2-xml \
  php8.2-zip && \
  apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy virtual host configuration from current path onto existing 000-default.conf
COPY default.conf /etc/apache2/sites-available/000-default.conf

# Remove default content (existing index.html)
RUN rm /var/www/html/*

# Clone the Kirby Starterkit
RUN git clone --depth 1 https://github.com/hegyessy/jennifermondfrans.com.git /var/www/html

# Fix files and directories ownership
RUN chown -R www-data:www-data /var/www/html/

# Activate Apache modules headers & rewrite
RUN a2enmod headers rewrite

# Tell container to listen to port 80 at runtime
EXPOSE 80

# Start Apache web server
CMD [ "/usr/sbin/apache2ctl", "-DFOREGROUND" ]