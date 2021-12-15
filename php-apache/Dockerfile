FROM httpd:2.4

WORKDIR /app
# By default site content resists in htdocs, so copy the index.php
COPY index.php /usr/local/apache2/htdocs/

EXPOSE 80
CMD exec /usr/local/apache2/bin/httpd -D FOREGROUND