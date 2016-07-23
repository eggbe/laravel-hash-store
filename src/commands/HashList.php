<?php
namespace Eggbe\LaravelHashStore\Command;

use \Illuminate\Console\Command;
use \Illuminate\Support\Facades\App;

use \Eggbe\LaravelHashStore\LaravelHashStore;

class HashList extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $signature = 'hash:list';

	/**
	 * Execute the console command.
	 */
	public function handle() {

		$index = 0;
		foreach (App::make('HashStore')->all() as $key => $hash) {
			$index++;
			$this->line(sprintf("%' -4.0d", $index) . sprintf("[%' -32s", $key . ']:') . " \t\t" . $hash);
		}

		$this->line("\ntotal: " . $index);

	}

}
