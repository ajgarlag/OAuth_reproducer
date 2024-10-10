FROM ghcr.io/krkabol/php-fpm-noroot-socket:main
USER root

RUN  apt-get update && apt-get dist-upgrade -y && \
        apt-get install -y --no-install-recommends \
        libicu-dev  \
        libzip-dev  \
        && \
        apt-get autoclean -y && \
        apt-get remove -y wget && \
        apt-get autoremove -y && \
        rm -rf /var/lib/apt/lists/* /var/lib/log/* /tmp/* /var/tmp/*

RUN docker-php-ext-install zip mysqli pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --inst && mv composer.phar /usr/local/bin/composer
RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony
USER www
