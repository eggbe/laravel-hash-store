<?php
use \Illuminate\Console\Command;
use \Symfony\Component\Console\Input\InputArgument;
use \Eggbe\LaravelHashStore\LaravelHashStore;

class HashCreateCommand extends Command {

	/**
	 * The console command name.
	 * @var string
	 */
	protected $name = 'hash:create';

	/**
	 * Execute the console command.
	 */
	public function fire() {
		if (!preg_match('/' . Config::get('laravel-hash-store::config.filter', '^.+$') . '/', $this->argument('key'))){
			throw new Exception('Invalid hash key!');
		}
		$this->line('Hash created: ' . App::make('HashStore')->create($this->argument('key')));
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
