<?php
namespace Eggbe\LaravelHashStore\Command;

use \Illuminate\Console\Command;

use \Illuminate\Support\Facades\App;

class HashFind extends Command {

	/**
	 * @var string
	 */
	protected $signature = 'hash:find {key}';

	/**
	 * Execute the console command.
	 */
	public function handle() {
		if (!($hash = App::make('HashStore')->find($this->argument('key')))) {
			$this->line('Hash not found!');
		} else {
			$this->line('Hash found: ' . $hash);
		}
	}


}
