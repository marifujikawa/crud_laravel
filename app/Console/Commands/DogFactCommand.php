<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use App\Models\DogFact;
use Illuminate\Console\Command;
use GuzzleHttp\Exception\GuzzleException;

class DogFactCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fill DogFacts on database';

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
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->get('http://dog-facts-api.herokuapp.com/api/v1/resources/dogs/all');
        $body=$result->getBody();
        $body=json_decode($body);
        foreach ($body as $item) {
            DogFact::create([
            'fact'=>$item->fact
        ]);
        }
        return 0;
    }
}
