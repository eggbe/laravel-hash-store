<?php
use \Illuminate\Console\Command;
use \Symfony\Component\Console\Input\InputOption;
use \Symfony\Component\Console\Input\InputArgument;

class HashFindCommand extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $name = 'hash:find';

	/**
	 * Execute the console command.
	 */
	public function fire() {
		if (!($hash = App::make('HashStore')->find($this->argument('key')))) {
			$this->line('Hash not found!');
		}else {
			$this->line('Hash found: ' . $hash);
		}
	}

	/**
	 * Get the console command arguments.
	 * @return array
	 */
	protected function getArguments() {
		return [
			array('key', InputArgument::REQUIRED, ''),
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
