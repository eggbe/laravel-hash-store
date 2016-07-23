<?php
namespace Eggbe\LaravelHashStore;

use \Eggbe\LaravelHashStore\LaravelHashStore;

use \Eggbe\LaravelHashStore\Command\HashList;
use \Eggbe\LaravelHashStore\Command\HashFind;
use \Eggbe\LaravelHashStore\Command\HashSearch;
use \Eggbe\LaravelHashStore\Command\HashCreate;
use \Eggbe\LaravelHashStore\Command\HashRemove;

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
		$this->commands([HashCreate::class, HashList::class,
			HashRemove::class, HashFind::class, HashSearch::class]);

		$this->mergeConfigFrom(dirname(__DIR__) . '/config/hash-store.php', 'hash-store');
		$this->app->singleton('HashStore', function () {
			return new LaravelHashStore(Config::get('hash-store'));
		});
	}

	/**
	 * Register the publishes.
	 */
	public final function boot() {
		$this->publishes([
			dirname(__DIR__) . '/config/hash-store.php' => config_path('hash-store.php'),
		]);
	}


}

