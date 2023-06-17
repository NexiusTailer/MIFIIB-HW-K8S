FROM mysql:5.7

USER root
RUN chmod 755 /var/lib/mysql

COPY init.sql /docker-entrypoint-initdb.d/