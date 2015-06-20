<?php
use \Illuminate\Console\Command;
use \Symfony\Component\Console\Input\InputOption;
use \Symfony\Component\Console\Input\InputArgument;

class HashRemoveCommand extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $name = 'hash:remove';

	/**
	 * Execute the console command.
	 */
	public function fire() {
		App::make('HashStore')->remove($this->argument('key'));
		$this->line('Hash removed: '  . $this->argument('key'));
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
