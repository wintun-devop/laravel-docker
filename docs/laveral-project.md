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

### Route and Controller
- health check controller
```
php artisan make:controller HealthCheckController
```
- health check route ./routes/health.php 
```
<?php

use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json(['status' => 'Api is working ok!']);
});
```