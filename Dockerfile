FROM devopsedu/webapp

CMD apachectl -D FOREGROUND

RUN rm var/www/html/index.html

ADD . /var/www/html/
