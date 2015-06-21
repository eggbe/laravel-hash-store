<?php
use \Illuminate\Console\Command;
use \Symfony\Component\Console\Input\InputOption;
use \Symfony\Component\Console\Input\InputArgument;

class HashSearchCommand extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $name = 'hash:search';

	/**
	 * Execute the console command.
	 */
	public function fire() {
		if (!($key = App::make('HashStore')->search($this->argument('hash')))) {
			$this->line('Hash key not found!');
		}else {
			$this->line('Hash key: ' . $key);
		}
	}

	/**
	 * Get the console command arguments.
	 * @return array
	 */
	protected function getArguments() {
		return [
			array('hash', InputArgument::REQUIRED, ''),
		];
	}

	/**
	 * Get the console command options.
	 * @return array
	 */
	protected function getOptions() {
		return [];
	}

}
