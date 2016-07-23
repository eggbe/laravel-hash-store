<?php
namespace Eggbe\LaravelHashStore\Command;

use \Illuminate\Console\Command;
use \Illuminate\Support\Facades\App;
use \Illuminate\Support\Facades\Config;

use \Eggbe\LaravelHashStore\LaravelHashStore;

class HashCreate extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $signature = 'hash:create {key}';

	/**
	 * Execute the console command.
	 */
	public function handle() {
		if (!preg_match('/' . Config::get('laravel-hash-store::config.filter', '^.+$') . '/', $this->argument('key'))) {
			throw new Exception('Invalid hash key!');
		}
		$this->line('Hash created: ' . App::make('HashStore')->create($this->argument('key')));
	}

}
