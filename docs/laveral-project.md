- open ssl check
```
php -i | findstr OpenSSL
```
```
php --ini
```
```
composer config --global --list
```
```
composer diagnose
```
- open_ssl and curl_check
```
php -i | findstr "curl.cainfo"
```
```
php -i | findstr "openssl.cafile"
```

- api project creation
```
composer create-project laravel/laravel ApisServer
```