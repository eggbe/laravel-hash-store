<?php
namespace Eggbe\LaravelHashStore;

use \Eggbe\LaravelHashStore\LaravelHashStore;
use \Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\Config;

class LaravelHashStoreServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 */
	public final function register() {
		/* do nothing */
	}

	/**
	 * Bootstrap the application events.
	 */
	public final function boot() {
		$this->package('eggbe/laravel-hash-store');
		$this->app->singleton('HashStore', function () {
		    return new LaravelHashStore(Config::get('laravel-hash-store::config'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 * @return array
	 */
	public function provides() {
		return [];
	}

}
