<?php namespace Socieboy\Forum\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MigrationForum extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'forum';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a forum migrations.';


    protected $filesystem;
	/**
	 * Create a new command instance.
     * @param Filesystem $filesystem
     */
	public function __construct(Filesystem $filesystem)
	{
		parent::__construct();
        $this->filesystem = $filesystem;

    }

	/**
	 * Execute the console command.
	 * @return mixed
	 */
	public function fire()
	{

        // 2015_05_29_224951_create_conversations_table Format name
		$this->filesystem->copy(
                __DIR__.'/../Database/migrations/create_conversations_table.php',
                base_path().'/database/migrations/'.date('Y_m_d').'_'.time().'_create_conversations_table.php'
        );

        $this->info('Migrations created!');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			//['example', InputArgument::REQUIRED, 'An example argument.'],
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			//['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		];
	}

}
