<?php

namespace App\Console\Commands;

use Database\Factories\OffensiveWordFactory;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class Development extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:run {args}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For development purpose debugging';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $args = $this->argument('args');

    }

    public function testOffinsiweWords(){
        $words = new OffensiveWordFactory;
        $count = (new Collection($words->words))->random();
        dd($count);
    }

}
