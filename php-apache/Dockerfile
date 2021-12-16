FROM httpd:2.4

# By default site content resists in htdocs, so copy the index.php
COPY index.php /usr/local/apache2/htdocs/
COPY /apache/httpd.conf /usr/local/apache2/conf/httpd.conf

RUN apt-get update -yy && \
    apt-get upgrade -yy && \
    apt-get install php libapache2-mod-php -yy && \
    a2enmod mpm_prefork && a2enmod php7.4 && \
    service apache2 restart

EXPOSE 8080
CMD exec /usr/local/apache2/bin/httpd -D FOREGROUND