FROM dunglas/frankenphp:php8.3-alpine AS build

WORKDIR /var/www/html

RUN install-php-extensions \
	bcmath \
	curl \
	gd \
	gettext \
	intl \
	mbstring \
	pdo_mysql \
	soap \
	xml \
	zip

RUN apk add --no-cache curl \
	&& curl -fsSL https://getcomposer.org/installer -o composer-setup.php \
	&& curl -fsSL https://getcomposer.org/installer.sig -o composer-setup.sig \
	&& php -r "if (hash_file('sha384', 'composer-setup.php') !== trim(file_get_contents('composer-setup.sig'))) { fwrite(STDERR, 'Invalid Composer installer signature'.PHP_EOL); exit(1); }" \
	&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
	&& rm composer-setup.php composer-setup.sig

COPY composer.json composer.lock ./

RUN composer install \
	--no-dev \
	--no-interaction \
	--no-progress \
	--prefer-dist \
	--optimize-autoloader \
	--no-scripts

COPY . .

RUN php artisan package:discover --ansi

EXPOSE 9009

CMD ["php", "artisan", "octane:start", "--server=frankenphp", "--host=0.0.0.0", "--port=9009"]
