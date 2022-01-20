FROM php:7.2-alpine

RUN apk add --no-cache git freetype-dev libpng-dev libjpeg-turbo-dev freetype libpng libjpeg-turbo \
    && docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-png-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install bcmath gd mbstring mysqli pdo pdo_mysql opcache tokenizer zip \
    && apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www

ENTRYPOINT ["composer"]

CMD ["--help"]