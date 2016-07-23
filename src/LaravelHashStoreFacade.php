<?php
namespace Eggbe\LaravelHashStore;

use \Illuminate\Support\Facades\Facade;

class LaravelHashStoreFacade extends Facade {

	/**
	 * Get the binding in the IoC container
	 * @return string
	 */
	public final static function getFacadeAccessor() {
		return 'HashStore';
	}

}
