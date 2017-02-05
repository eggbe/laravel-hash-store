## Introduction
This is the powerful library designed special for the Laravel framework and provides an easiest way to create and manage your own list of hashes.      


## Features
The library is fully file-based so you don't need to use any databases. 
For more information see [Eggbe/Soauth](https://github.com/eggbe/hash-store).  

## Requirements
* PHP >= 7.0.0
* [Laravel](https://github.com/laravel/laravel) >= 5.0
* [Eggbe/Helpers](https://github.com/eggbe/helpers)

## Install
Here's a pretty simple way to start using Eggbe/HashStore:


Step 1: Use [Composer](http://getcomposer.org) to add Eggbe/HashStore in your project: 

```bash
composer require eggbe/hash-store
```

Step 2: Register the service provider in your `app.php`:

```php
'providers' => [
	// ...
	\Eggbe\LaravelHashStore\LaravelHashStoreServiceProvider::class,
],
```


Step 3: If you like to use facades you also have to register the LaravelHashStore alias in your `app.php`:

```php
'aliases' => [
	//...
	'HashStore' => \Eggbe\LaravelHashStore\LaravelHashStoreFacade::class,
]
```

Step 4: Use Artisan for publish package config file into your configuration folder:

```bash
php artisan vendor:publish --provider="Eggbe\LaravelHashStore\LaravelHashStoreServiceProvider"
```


Step 5: Configure the package setting in the package config file that you have published at the previous step:

```php
$HashStore = new \Eggbe\HashStore\HashStore([
	'path' => 'path-to-storage-directory',
	'filter' => '^.{0,32}$',
]);
```

## Usage
It's mostly is similar to the [Eggbe/Soauth](https://github.com/eggbe/hash-store) package.
The only difference is that you could use Facade instead the object's instance. 

```php
HashStore::create('keyword');
```
 
```php
$hash = HashStore::find('keyword');
```

```php
HashStore::remove('keyword');
```

## Authors
Made with love at [Eggbe](http://eggbe.com).


## Feedback 
We always welcome your feedback at [github@eggbe.com](mailto:github@eggbe.com).


## License
This package is released under the [MIT license](https://github.com/eggbe/laravel-hash-store/blob/master/LICENSE).
