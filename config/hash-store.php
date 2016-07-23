<?php
use \Eggbe\LaravelHashStore\LaravelHashStore;

return [
	'path' => storage_path(),
	'sort' => LaravelHashStore::BY_DATE | LaravelHashStore::BY_DESC,
	'filter' => '^.{0,32}$',
];
