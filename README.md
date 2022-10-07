# A PHP Code for PUT method(no submission)

## Information

Server version: Apache/2.4.6 (Red Hat Enterprise Linux)

[web-server]# php -v

PHP 8.0.18 (cli) (built: Apr 13 2022 02:45:05) ( NTS gcc x86_64 )

Copyright (c) The PHP Group

Zend Engine v4.0.18, Copyright (c) Zend Technologies

[web-server]#  httpd -v

Server version: Apache/2.4.6 (CentOS)

Server built:   Mar 24 2022 14:57:57

---

## Delpoyment

1. Copy the index.php into the web directory.

2. Create a folder to write uploaded files (notes folder permission).

---
## Demonstration

[web-client]# cat text

1

[web-client]# curl -x --data-binary @"./text" http://[web-server]/upload/index.php


[web-server]# ls upload/

[web-client]-[timestamp].txt

![](https://i.imgur.com/HnXpmx8.png)
                                                                    

