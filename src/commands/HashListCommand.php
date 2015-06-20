<?php
use \Illuminate\Console\Command;
use \Symfony\Component\Console\Input\InputArgument;
use \Eggbe\LaravelHashStore\LaravelHashStore;

class HashListCommand extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $name = 'hash:list';

	/**
	 * Execute the console command.
	 */
	public function fire() {

		$index = 0;
		foreach(App::make('HashStore')->all() as $key => $hash){
			$index++;
			$this->line(sprintf("%' -4.0d", $index) . sprintf("[%' -32s", $key. ']:') . " \t\t" . $hash);
		}

		$this->line("\ntotal: " . $index);

	}

	/**
	 * Get the console command arguments.
	 * @return array
	 */
	protected function getArguments() {
		return [];
	}

	/**
	 * Get the console command options.
	 * @return array
	 */
	protected function getOptions() {
		return [];
	}

}
