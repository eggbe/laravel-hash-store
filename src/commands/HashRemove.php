<?php
namespace Eggbe\LaravelHashStore\Command;

use \Illuminate\Console\Command;

use \Illuminate\Support\Facades\App;

class HashRemove extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $signature = 'hash:remove {key}';

	/**
	 * Execute the console command.
	 */
	public function handle() {
		App::make('HashStore')->remove($this->argument('key'));
		$this->line('Hash removed: ' . $this->argument('key'));
	}

}
