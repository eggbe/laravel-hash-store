<?php
namespace Eggbe\LaravelHashStore\Command;

use \Illuminate\Console\Command;

use \Illuminate\Support\Facades\App;

class HashSearch extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $signature = 'hash:search {hash}';

	/**
	 * Execute the console command.
	 */
	public function handle() {
		if (!($key = App::make('HashStore')->search($this->argument('hash')))) {
			$this->line('Hash key not found!');
		} else {
			$this->line('Hash key: ' . $key);
		}
	}

}
