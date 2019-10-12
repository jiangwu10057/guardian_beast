FROM component_php:latest
LABEL maintainer="chenwu <jiangwu10057@qq.com>" version="0.1"
RUN apt-get -y update \
    && apt-get -y install unzip \
    && apt-get -y install zip \
    && apt-get -y install git
RUN echo "swoole.use_shortname = 'Off'" >> /usr/local/etc/php/conf.d/docker-php-ext-swoole.ini
WORKDIR /home/www
COPY . .
# RUN composer install --no-dev \
#     && composer dump-autoload -o

EXPOSE 9501