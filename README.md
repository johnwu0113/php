## Version information

[web-server]# httpd -v
Server version: Apache/2.4.6 (Red Hat Enterprise Linux)
Server built:   Jan  8 2018 06:49:04
[web-server]# php -v
PHP 5.4.16 (cli) (built: Jan 23 2018 07:26:54)
Copyright (c) 1997-2013 The PHP Group
Zend Engine v2.4.0, Copyright (c) 1998-2013 Zend Technologies

---

## Delpoy 

1. Copy the index.php into the web directory.
2. Create a folder to write uploaded files (notes folder permission).

---
## Demonstration

[web-client]# cat text
1
[web-client]# curl -x --data-binary @"./text" http://172.27.1.226/upload/index.php

[web-server]#
index.php  upload
[web-server]# ls upload/
172.27.1.121-1665100786.txt
[web-server]# cat upload/172.27.1.121-1665100786.txt
1

![](https://i.imgur.com/HnXpmx8.png)
                                                                    

 
