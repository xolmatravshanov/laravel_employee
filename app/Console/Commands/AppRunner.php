<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AppRunner extends Command
{

    private $pathPhp = 'php ';

    private $laravelConsole = ' artisan ';

    private $migrationCommand = ' migrate';


    private $dbSeedCommand = ' db:seed';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description =
        'Configure app using this-> command'
        . PHP_EOL .
        'migrations' .
        PHP_EOL .
        'db seeding';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->migrationCommand = $this->pathPhp . $this->laravelConsole . $this->migrationCommand;
        $this->dbSeedCommand = $this->pathPhp . $this->laravelConsole .$this->dbSeedCommand;
    }

    /**
     * @return  void
     */
    public function handle()
    {
        /// run all migrations
        exec($this->migrationCommand);


        var_dump('Seeding database is started');
        // run all seed

        var_dump($this->dbSeedCommand);
        exec($this->dbSeedCommand);

    }

}
