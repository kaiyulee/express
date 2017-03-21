A blog-like website Based on Laravel 5.1.* (LTS) for now.










--- 
### Installation / 安装

> require composer

```bash
git clone https://github.com/kaiyulee/express.git laraExpress
cd laraExpress
composer install --no-scripts
composer update
```

### Nginx

```
server {
    listen 8088;
    server_name laraexpress.app;
    root /path/to/laraExpress/public;
    
    index index.html index.htm index.php;
    
    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    
    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    access_log off;
    error_log  /usr/local/var/log/nginx/laraexpress-error.log error;
    error_page 404 /404.html;
    error_page 500 502 503 504 /50x.html;

    location = /404.html {
        # the root path depends on where you installed nginx
        root /usr/local/opt/nginx/html;
        internal;
    }

    location = /50x.html {
        # the root path depends on where you installed nginx
        root /usr/local/opt/nginx/html;
        internal;
    }

    sendfile off;

    client_max_body_size 100m;

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_intercept_errors off;
        fastcgi_buffer_size 16k;
        fastcgi_buffers 4 16k;
    }

    location ~ /\.ht {
        deny all;
    }
}

```

### Tables / 表

Table creat statements in `/database/tables.sql` (创建表语句)。
![tables](http://o9m8gqxa3.bkt.clouddn.com/laraexpress-tables.png)

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
