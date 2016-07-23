<?php
namespace Eggbe\LaravelHashStore;

use \Eggbe\HashStore\HashStore;

class LaravelHashStore extends HashStore{

	/**
	 * @param array $Config
	 * @throws \Exception
	 */
	public final function __construct(array $Config = []){
		if (!isset($Config['path'])){
			throw new \Exception('Hash storage path is not defined!');
		}
		parent::__construct($Config['path'], isset($Config['sort']) ? (int)$Config['sort'] : HashStore::BY_DATE);
	}

}
