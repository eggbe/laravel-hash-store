<?php
use \Eggbe\LaravelHashStore\LaravelHashStore;

return [
	'path' => app_path('storage'),
	'sort' => LaravelHashStore::BY_DATE | LaravelHashStore::BY_DESC,
	'filter' => '^.{0,32}$',
];
