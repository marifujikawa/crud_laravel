<?php

namespace App\Console\Commands;

use App\Models\DogFact;
use Illuminate\Console\Command;

class ShowDogFact extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doge:fact';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'shows a random dog fact';

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
        $dogefact=DogFact::inRandomOrder()->first();
        echo "\033[32m".$dogefact->fact."\033[0m";
        return 0;
    }
}
