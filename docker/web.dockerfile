FROM nginx

ADD ./nginx/vhost.conf /etc/nginx/conf.d/default.conf
