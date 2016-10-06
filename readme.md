# Laravel Caches Cleaner Console Command Package

A fast way to clean all caches and restart queue to your project.

Have you ever felt that your code changes don't take effect? If so, this package may help you out.
 
## Installation

type in console:

```
composer require edujugon/laravel-caches-cleaner
```

#### Available Commands:

* cache => Run php artisan clear-compiled cache:clear config:cache view:clear
* queue => Run php artisan queue:restart
* all => Run All Package Commands at onces
* More coming soon.

### Usage

#### Clean caches
```
./vendor/edujugon/laravel-caches-cleaner/cleaner cache

```

#### Clean queue
```
./vendor/edujugon/laravel-caches-cleaner/cleaner queue

```

#### Clean all
```
./vendor/edujugon/laravel-caches-cleaner/cleaner all

```

#### Package Command List
```
./vendor/edujugon/laravel-caches-cleaner/cleaner list

```